CREATE TABLE employee (
    id int(11) auto_increment primary key,
    name varchar(25),
    password varchar(30),
    work_type varchar (30)
);
CREATE TABLE customer(
    id int(11) auto_increment primary key,
    name_project varchar(25),
    name_client varchar(30),
    task varchar (30),
    employee varchar(25),
    description varchar (255),
    comm varchar (255),
    week varchar (20),
    day varchar (20),
    time varchar (20),
    timestamp date
);
CREATE TABLE times (
                       id int(11) auto_increment primary key,
                       time varchar(20)
);
insert into times (id, time) VALUES(0,'9:00');
insert into times (id, time) VALUES(0,'10:00');
insert into times (id, time) VALUES(0,'11:00');
insert into times (id, time) VALUES(0,'12:00');
insert into times (id, time) VALUES(0,'13:00');
insert into times (id, time) VALUES(0,'14:00');
insert into times (id, time) VALUES(0,'15:00');
insert into times (id, time) VALUES(0,'16:00');
insert into times (id, time) VALUES(0,'17:00');
insert into times (id, time) VALUES(0,'18:00');
insert into times (id, time) VALUES(0,'19:00');
insert into times (id, time) VALUES(0,'20:00');

CREATE TABLE day (
                       id int(11) auto_increment primary key,
                       day varchar(20)
);
insert into day (id, day) VALUES(0,'monday');
insert into day (id, day) VALUES(0,'tuesday');
insert into day (id, day) VALUES(0,'wednesday');
insert into day (id, day) VALUES(0,'thursday');
insert into day (id, day) VALUES(0,'Friday');

CREATE TABLE work_type (
                       id int(11) auto_increment primary key,
                       work varchar(20)
);
insert into work_type (id, work) VALUES(0,'APK');
insert into work_type (id, work) VALUES(0,'Kleine Beurt');
insert into work_type (id, work) VALUES(0,'Groote Beurt');
insert into work_type (id, work) VALUES(0,'Reparatie');

insert into customer (id, name_project, name_client, task, employee, description, comm, week, "day", "time") values(0, 'car', 'Bob', 'APK', 'Jeff', 'broke', 'oh no', 'week', 'monday', '10:00');