insert into maestro (host, descripcion ) values ('192.168.1.88', 'PLC maestro 88, en el ccm');

with m (id) as (select id from maestro where host = '192.168.1.88' limit 1) 
  insert into slot (mid, direccion, words, simbolo) 
    select m.id, 600, 2, 'hs_asp_bs1' from m union
    select m.id, 602, 2, 'hs_asp_bs2' from m union
    select m.id, 604, 2, 'hs_asp_fm4' from m union
    select m.id, 606, 2, 'hs_fmpv5' from m union
    select m.id, 608, 2, 'hs_fmpv4' from m union
    select m.id, 610, 2, 'hs_asp_bs3' from m union
    select m.id, 614, 2, 'hs_c5bs3' from m union
    select m.id, 616, 2, 'hs_c6bs3' from m union
    select m.id, 618, 2, 'hs_c7bs3' from m union
    select m.id, 620, 2, 'hsa_bkt7' from m union
    select m.id, 622, 2, 'hs_bkt8' from m union
    select m.id, 624, 2, 'hs_c5g45' from m union
    select m.id, 626, 2, 'hs_c6g45' from m union
    select m.id, 628, 2, 'hs_c23g45' from m union
    select m.id, 630, 2, 'hs_c1g45' from m union
    select m.id, 632, 2, 'hs_c4g45' from m union
    select m.id, 634, 2, 'hs_asp_p1' from m union
    select m.id, 636, 2, 'hs_asp_p3' from m union
    select m.id, 638, 2, 'hs_asp_c5g45' from m union
    select m.id, 640, 2, 'hs_asp_c6g45' from m union
    select m.id, 642, 2, 'hs_asp_bkt' from m union
    select m.id, 644, 2, 'hs_spl_fm4' from m union
    select m.id, 646, 2, 'hs_repiky' from m union
    select m.id, 648, 2, 'hs_limp_fm4' from m union
    select m.id, 652, 2, 'hs_c4ss2' from m union
    select m.id, 654, 2, 'hs_c4ss1' from m union
    select m.id, 656, 2, 'hs_c5ss2' from m union
    select m.id, 658, 2, 'hs_c5ss1' from m union
    select m.id, 660, 2, 'hs_6ss2' from m union
    select m.id, 662, 2, 'hs_c6ss1' from m union
    select m.id, 664, 2, 'hs_c3_rect1' from m union
    select m.id, 666, 2, 'hs_c1rect1' from m union
    select m.id, 668, 2, 'hs_c4rect1' from m union
    select m.id, 670, 2, 'hs_c2rect1' from m union
    select m.id, 672, 2, 'hs_c5bs2' from m union
    select m.id, 674, 2, 'hs_c6bs2' from m union
    select m.id, 676, 2, 'hs_c7bs2' from m union
    select m.id, 678, 2, 'hs_c5bs1' from m union
    select m.id, 680, 2, 'hs_c6bs1' from m union
    select m.id, 682, 2, 'hs_c7bs1' from m union
    select m.id, 684, 2, 'hs_asp_fm2' from m union
    select m.id, 686, 2, 'hs_fm1' from m union
    select m.id, 688, 2, 'hs_n1t1' from m union
    select m.id, 690, 2, 'hs_n2t1' from m union
    select m.id, 692, 2, 'hs_n3t1' from m union
    select m.id, 694, 2, 'hs_n4t1' from m union
    select m.id, 696, 2, 'hs_n5t1' from m union
    select m.id, 698, 2, 'hs_n6t1' from m union
    select m.id, 700, 2, 'hs_n7t1' from m union
    select m.id, 702, 2, 'hs_cp1' from m union
    select m.id, 704, 2, 'hs_chid_p1' from m union
    select m.id, 706, 2, 'hs_cp2' from m union
    select m.id, 708, 2, 'hs_chid_p2' from m union
    select m.id, 710, 2, 'hs_cp3' from m union
    select m.id, 712, 2, 'hs_chid_p3' from m union
    select m.id, 716, 2, 'hs_asp_fm3' from m union
    select m.id, 718, 2, 'hs_sop_fm3' from m union
    select m.id, 720, 2, 'hs_limp_fm3' from m union
    select m.id, 722, 2, 'hs_bza_d' from m union
    select m.id, 724, 2, 'hs_bza_e' from m;


insert into maestro (host, descripcion ) values ('192.168.1.89', 'PLC maestro, torre2');

with m (id) as (select id from maestro where host = '192.168.1.89' limit 1)
  insert into slot (mid, direccion, words, simbolo)
    select m.id, 600,2,'hor_c1ss4' from m union
    select m.id, 602,2,'hor_c2ss4' from m union
    select m.id, 604,2,'hor_c3ss4' from m union
    select m.id, 606,2,'hor_n4t2' from m union
    select m.id, 608,2,'hor_fmbzac' from m union
    select m.id, 610,2,'hor_crt2' from m union
    select m.id, 612,2,'hor_extrt2' from m union
    select m.id, 614,2,'hor_fmpv12' from m union
    select m.id, 616,2,'hor_ct2g6' from m union
    select m.id, 618,2,'hor_cr2g6' from m union
    select m.id, 620,2,'hor_cr1g6' from m union
    select m.id, 622,2,'hor_aspcr1' from m union
    select m.id, 624,2,'hor_aspcr2' from m union
    select m.id, 626,2,'hor_aspct2' from m union
    select m.id, 628,2,'hor_aspc4' from m union
    select m.id, 630,2,'hor_binc1' from m union
    select m.id, 632,2,'hor_binc2' from m union
    select m.id, 634,2,'hor_binc3' from m union
    select m.id, 636,2,'hor_ce1g6' from m union
    select m.id, 638,2,'hor_ce2g6' from m union
    select m.id, 640,2,'hor_compt2' from m union
    select m.id, 642,2,'hor_c1ss3' from m union
    select m.id, 644,2,'hor_c2ss3' from m union
    select m.id, 646,2,'hor_c3ss3' from m union
    select m.id, 650,2,'hor_aspbza_a' from m union
    select m.id, 652,2,'hor_aspbza_b' from m union
    select m.id, 654,2,'hor_n1t2' from m union
    select m.id, 656,2,'hor_n2t2' from m union
    select m.id, 658,2,'hor_n3t2' from m union
    select m.id, 660,2,'hor_vent1' from m union
    select m.id, 662,2,'hor_vent2' from m union
    select m.id, 664,2,'hor_vent3' from m union
    select m.id, 666,2,'hor_vent4' from m union
    select m.id, 668,2,'hor_c1bs4' from m union
    select m.id, 670,2,'hor_c2bs4' from m union
    select m.id, 672,2,'hor_sopfmpv12' from m union
    select m.id, 674,2,'hor_fmbs4' from m;

--datos de testeo
insert into maestro (host, descripcion ) values ('192.168.1.154', 'PLC emulado');

with m (id) as (select id from maestro where host = '192.168.1.154' limit 1) 
  insert into slot (mid, direccion, words, simbolo) 
    select m.id, 600, 2, 'dato emulado 1' from m union
    select m.id, 602, 2, 'dato emulado 2' from m;

