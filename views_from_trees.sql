create view speciesborough as 
select distinct spc_common, spc_latin, borough
from (trees join community using (community)) join borough using (borocode)
;

create view brooklyn_trees as
select distinct spc_common, spc_latin
from (trees join community using (community)) join borough using (borocode)
where borough = "Brooklyn";

create view manhattan_trees as
select distinct spc_common, spc_latin
from (trees join community using (community)) join borough using (borocode)
where borough = "Manhattan";

create view queens_trees as
select distinct spc_common, spc_latin
from (trees join community using (community)) join borough using (borocode)
where borough = "Queens";

create view bronx_trees as
select distinct spc_common, spc_latin
from (trees join community using (community)) join borough using (borocode)
where borough = "Bronx";

create view sisland_trees as
select distinct spc_common, spc_latin
from (trees join community using (community)) join borough using (borocode)
where borough = "Staten Island";

create view stumps as
select tree_id, block_id, stump_diam, address, latitude, longitude
from trees
where status = "Stump";

create view dead as
select tree_id, block_id, address, latitude, longitude
from trees
where status = "Dead";

create view brooklyn_tree_count as
select count(tree_id)
from (trees join community using (community)) join borough using (borocode)
where borough = "Brooklyn";

create view bronx_tree_count as
select count(tree_id)
from (trees join community using (community)) join borough using (borocode)
where borough = "Bronx";

create view manhattan_tree_count as
select count(tree_id)
from (trees join community using (community)) join borough using (borocode)
where borough = "Manhattan";

create view sisland_tree_count as
select count(tree_id)
from (trees join community using (community)) join borough using (borocode)
where borough = "Staten Island";

create view queens_tree_count as
select count(tree_id)
from (trees join community using (community)) join borough using (borocode)
where borough = "Queens";

create view stump_cnt as
select count(tree_id)
from stumps;

create view dead_cnt as 
select count(tree_id)
from dead;

create view tree_cnt as
select count(tree_id)
from trees;

create view spc_cnt as
select count(distinct spc_latin)
from trees;

create view brook_most_common as 
select spc_common, spc_latin, count(spc_common) as 'count'
from (trees join community using (community)) join borough using (borocode)
where borough = "Brooklyn"
group by spc_common
order by count(spc_common) desc;

create view bronx_most_common as 
select spc_common, spc_latin, count(spc_common) as 'count'
from (trees join community using (community)) join borough using (borocode)
where borough = "Bronx"
group by spc_common
order by count(spc_common) desc;

create view man_most_common as 
select spc_common, spc_latin, count(spc_common) as 'count'
from (trees join community using (community)) join borough using (borocode)
where borough = "Manhattan"
group by spc_common
order by count(spc_common) desc;

create view sis_most_common as 
select spc_common, spc_latin, count(spc_common) as 'count'
from (trees join community using (community)) join borough using (borocode)
where borough = "Staten Island"
group by spc_common
order by count(spc_common) desc;

create view q_most_common as 
select spc_common, spc_latin, count(spc_common) as 'count'
from (trees join community using (community)) join borough using (borocode)
where borough = "Queens"
group by spc_common
order by count(spc_common) desc;

create view most_recent_tree as
select max(tree_id)
from trees;
