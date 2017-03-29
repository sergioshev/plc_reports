-- Vista que calcula el delta con el siguiente valor
--create or replace view lectura_con_delta as
----{{{
--  select 
--    mid, 
--    sid, 
--    fecha, 
--    valor, 
--    coalesce((nth_value(valor,2) over w - valor ),0) as delta 
--  from lectura 
--    window w as (
--      partition by mid, sid 
--      order by fecha 
--      rows 
--        between current row 
--        and 1 following) 
--  order by mid, sid, fecha;
----}}}

-- Vista que calcula el delta con el valor anterior
create or replace view lectura_con_delta2 as
--{{{
  select 
    mid, 
    sid, 
    fecha, 
    valor,
    (valor || 'm')::interval as intervalo,
    coalesce(valor - (nth_value(valor,1) over w),0) as delta 
  from lectura 
    window w as (
      partition by mid, sid 
      order by fecha 
      rows 
        between 1 preceding
        and current row) 
  order by mid, sid, fecha;
--}}}

create or replace view consulta_slot as
--{{{
  select 
    m.*,
    s.id as sid,
    s.simbolo,
    s.direccion,
    s.words 
  from slot s 
  join maestro m on (s.mid=m.id);
--}}}

create or replace view consulta_lectura_delta2 as
--{{{
  select 
    l.mid, 
    l.sid, 
    m.host, 
    s.simbolo, 
    s.words,
    l.fecha,
    l.valor,
    l.intervalo,
    l.delta
  from 
    lectura_con_delta2 l 
    join maestro m on (m.id = l.mid) 
    join slot s on (s.id = l.sid);
--}}}


-- Vista que resume varias lecturas en el mismo dia mostrando solo
-- la ultima del dia
create or replace view consulta_lectura_delta2_diaria as
--{{{
  select distinct 
    mid,
    sid,
    host,
    simbolo,
    words,
    last_value(fecha) over w as fecha, 
    last_value(valor) over w as valor, 
    last_value(intervalo) over w as intervalo,
    last_value(delta) over w as delta 
  from 
    consulta_lectura_delta2 window w as 
      (partition by mid,sid,fecha::date 
       order by fecha asc 
       rows 
         between 
           unbounded preceding and 
           unbounded following)
  order by fecha;
--}}}

-- Vista que mustra solo las ultimas lecturas
create or replace view ultima_lectura as
--{{{
  select 
    l.mid, l.sid, l.fecha, 
    l.valor, (l.valor || 'm')::interval as intervalo 
  from 
    lectura l 
    join (select mid, sid, max(fecha) as fecha 
            from lectura 
           group by mid,sid) l2 
      on (l.mid=l2.mid and l.sid=l2.sid and l.fecha=l2.fecha);
--}}}

create or replace view consulta_ultima_lectura as 
--{{{
  select 
    ul.mid,
    ul.sid,
    m.host,
    s.simbolo,
    s.words,
    ul.fecha,
    ul.valor,
    ul.intervalo
  from ultima_lectura ul
  join maestro m on (m.id = ul.mid)
  join slot s on (s.id = ul.sid);
--}}}
