set client_encoding='UTF8';

create table maestro (
  id serial primary key,
  host varchar(255) not null unique,
  descripcion varchar(500)
);

create table slot (
  mid integer references maestro (id) on delete restrict on update cascade,
  id serial,
  direccion integer not null,
  words smallint,
  simbolo varchar(255),
  descripcion varchar(500),
  primary key (mid, id),
  constraint u_slot_dir unique (mid, id, direccion)
);

create table lectura (
  mid integer not null,
  sid integer not null,
  fecha timestamp without time zone default current_timestamp,
  valor numeric(50,10),
  constraint fk_slot foreign key (mid, sid) references slot (mid, id) 
    on delete restrict on update cascade,
  primary key (sid, mid, fecha)
);
