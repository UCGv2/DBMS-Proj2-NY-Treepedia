SET sql_mode = 'STRICT_TRANS_TABLES';
drop database if exists nytrees;
create database nytrees;
use nytrees;

create table somanytrees (
tree_id  varchar(20) default '',	
block_id varchar(16) default '',	
created_at varchar(30) default '',	
tree_dbh	varchar(16) default '',
stump_diam	varchar(16) default '',
curb_loc	varchar(20) default '',
status	varchar(8) default '',
health	varchar(8) default '',
spc_latin	varchar(40) default '',
spc_common	varchar(40) default '',
steward	varchar(20) default '',
guards	varchar(20) default '',
sidewalk	varchar(20) default '',
user_type	varchar(20) default '',
problems	varchar(160) default '',
root_stone	varchar(5) default '',
root_grate	varchar(5) default '',
root_other	varchar(5) default '',
trunk_wire	varchar(5) default '',
trnk_light	varchar(5) default '',
trnk_other	varchar(5) default '',
brch_light	varchar(5) default '',
brch_shoe	varchar(5) default '',
brch_other	varchar(5) default '',
address	varchar(40) default '',
postcode	varchar(16) default '',
zip_city	varchar(20) default '',
community varchar(20) default '',
borocode	varchar(20) default '',
borough	varchar(20) default '',
cncldist	varchar(20) default '',
st_assem	varchar(20) default '',
st_senate	varchar(20) default '',
nta	varchar(16) default '',
nta_name	varchar(80) default '',
boro_ct	varchar(20) default '',
state	varchar(20) default '',
latitude	varchar(20) default '',
longitude	varchar(20) default '',
x_sp	 varchar(20) default '',
y_sp	 varchar(20) default '',
council_district	varchar(20) default '',
census_tract	varchar(20) default '',
bin	varchar(20)  default '',
bbl varchar(20) default ''
);

load data infile '/wamp64/tmp/2015_Street_Tree_Census_-_Tree_Data.txt' into table somanytrees
columns terminated by '\t'
ignore 1 lines;


-- blocks
drop table if exists blocks;
create table blocks (
block_id varchar(16) primary key,
nta	varchar(16) default '',
foreign key (nta) references nta(nta) on delete restrict);
insert into blocks
select distinct block_id, nta 
from somanytrees;


-- nta
drop table if exists nta;
create table nta (
nta	varchar(16) primary key,
nta_name varchar(80) default '');
insert into nta
select distinct  nta, nta_name
from somanytrees;

drop table if exists community;
create table community(
community varchar(16) primary key,
borocode varchar(20),
foreign key (borocode)references borough(borocode) on delete restrict);
insert into community
select distinct community, borocode
from somanytrees;


-- borough
drop table if exists borough;
create table borough (
borocode	varchar(20) default '' primary key,
borough	varchar(20) default '');
insert into borough
select distinct borocode, borough
from somanytrees;

-- cities
drop table if exists cities;
create table cities (
postcode	varchar(20) default '' primary key,
zip_city varchar(20) default '',
state varchar(20) default '');
insert into cities
select distinct postcode, zip_city, state
from somanytrees;

-- reserved for everything unique to each tree
drop table if exists trees;
create table trees (tree_id int primary key auto_increment,
block_id int,
created_at varchar(20) default '', 
tree_dbh varchar(20) default '', 
stump_diam varchar(20) default '', 
curb_loc varchar(20) default '', 
status varchar(20) default '', 
health varchar(20) default '', 
spc_latin varchar(40) default '', 
spc_common varchar(40) default '', 
steward varchar(20) default '',
guards varchar(20) default '', 
sidewalk varchar(20) default '', 
user_type varchar(20) default '', 
problems varchar(160) default '', 
root_stone varchar(20) default '', 
root_grate varchar(20) default '', 
root_other varchar(20) default '', 
trunk_wire varchar(20) default '', 
trnk_light varchar(20) default '', 
trnk_other varchar(20) default '',
brch_light varchar(20) default '', 
brch_shoe varchar(20) default '', 
brch_other varchar(20) default '', 
address varchar(40) default '', 
community varchar(20) default '', 
cncldist varchar(20) default '', 
st_assem varchar(20) default '', 
st_senate varchar(20) default '', 
postcode varchar(20) default '', 
boro_ct varchar(20) default '', 
latitude varchar(20) default '', 
longitude varchar(20) default '', 
x_sp varchar(20) default '', 
y_sp varchar(20) default '', 
council_district varchar(20) default '', 
census_tract varchar(20) default '', 
bin varchar(20) default '', 
bbl varchar(20) default '',
foreign key (postcode) references cities(postcode),
foreign key (community) references community(community),
foreign key (block_id) references blocks(block_id));
insert into trees
select distinct tree_id , block_id, created_at, tree_dbh, stump_diam, curb_loc, status, health, spc_latin, spc_common, steward,
guards, sidewalk, user_type, problems, root_stone, root_grate, root_other, trunk_wire, trnk_light, trnk_other,
brch_light, brch_shoe, brch_other, address, community, cncldist, st_assem, st_senate, postcode, boro_ct, latitude, longitude, 
x_sp, y_sp, council_district, census_tract, bin, bbl 
from somanytrees;

