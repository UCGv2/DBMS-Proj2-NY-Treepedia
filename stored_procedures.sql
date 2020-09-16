drop procedure if exists proper_insertion;
delimiter //
create  procedure proper_insertion(
in block_id int, 
in tree_dbh varchar(20) , 
in stump_diam varchar(20) , 
in curb_loc varchar(20) , 
in sstatus varchar(20) , 
in health varchar(20) , 
in spc_latin varchar(20) , 
in spc_common varchar(20) , 
in steward varchar(20) ,
in guards varchar(20) , 
in sidewalk varchar(20) , 
in user_type varchar(20) ,  
in root_stone varchar(20) , 
in root_grate varchar(20) , 
in root_other varchar(20), 
in trunk_wire varchar(20) , 
in trnk_light varchar(20) , 
in trnk_other varchar(20) ,
in brch_light varchar(20) , 
in brch_shoe varchar(20) , 
in brch_other varchar(20) , 
in address varchar(40) , 
in community varchar(20) , 
in cncldist varchar(20) , 
in st_assem varchar(20) , 
in st_senate varchar(20) , 
in postcode varchar(20) , 
in boro_ct varchar(20) , 
in latitude varchar(20) , 
in longitude varchar(20) , 
in x_sp varchar(20) , 
in y_sp varchar(20) , 
in council_district varchar(20) , 
in census_tract varchar(20) , 
in bin varchar(20),
in bbl varchar(20))
begin

-- determine output for problems
declare problems varchar(160);
set @problems = "";

if (root_stone = "No" and root_grate = "No" and  root_other = "No" and 
trunk_wire = "No" and  trnk_light = "No" and trnk_other = "No" and
brch_light = "No" and brch_shoe = "No" and brch_other = "No") then
set @problems = "None";
end if;
if (root_stone = "Yes") then
set @problems = concat_ws(",",@problems, "Stones");
end if;
if (root_grate = "Yes") then
set @problems = concat_ws(",", @problems, "MetalGrates");
end if;
if (root_other = "Yes") then
set @problems = concat_ws(",", @problems, "RootOther");
end if;
if (trunk_wire = "Yes") then
set @problems = concat_ws(",", @problems, "WiresRope");
end if;
if (trnk_light = "Yes") then
set @problems = concat_ws(",", @problems, "TrunkLights");
end if;
if (trnk_other = "Yes") then
set @problems = concat_ws(",", @problems, "TrunkOther");
end if;
if (brch_light = "Yes") then
set @problems = concat_ws(",", @problems, "BranchLights");
end if;
if (brch_shoe = "Yes") then
set @problems = concat_ws(",", @problems, "Sneakers");
end if;
if (brch_other = "Yes") then
set @problems = concat_ws(",", @problems, "BranchOther");
end if;

 set @problems = trim(leading ',' from @problems);
-- insert all the values into trees
-- get current date and format it correctly using date_format(curdate(), "%m/%e/%Y")
insert into trees values (null, block_id, date_format(curdate(), "%m/%e/%Y"), tree_dbh, stump_diam, curb_loc, sstatus, health, spc_latin, spc_common, steward,
guards, sidewalk, user_type, @problems, root_stone, root_grate, root_other, trunk_wire, trnk_light, trnk_other,
brch_light, brch_shoe, brch_other, address, community, cncldist, st_assem, st_senate, postcode, boro_ct, latitude, longitude, 
x_sp, y_sp, council_district, census_tract, bin, bbl);
end;
// 
delimiter //
drop procedure if exists proper_update;
// 

delimiter //
create procedure proper_update (in tree_id int,
in block_id int, 
in tree_dbh varchar(20) , 
in stump_diam varchar(20) , 
in curb_loc varchar(20) , 
in sstatus varchar(20) , 
in health varchar(20) , 
in spc_latin varchar(20) , 
in spc_common varchar(20) , 
in steward varchar(20) ,
in guards varchar(20) , 
in sidewalk varchar(20) , 
in user_type varchar(20) ,  
in root_stone varchar(20) , 
in root_grate varchar(20) , 
in root_other varchar(20), 
in trunk_wire varchar(20) , 
in trnk_light varchar(20) , 
in trnk_other varchar(20) ,
in brch_light varchar(20) , 
in brch_shoe varchar(20) , 
in brch_other varchar(20) , 
in address varchar(40) , 
in community varchar(20) , 
in cncldist varchar(20) , 
in st_assem varchar(20) , 
in st_senate varchar(20) , 
in postcode varchar(20) , 
in boro_ct varchar(20) , 
in latitude varchar(20) , 
in longitude varchar(20) , 
in x_sp varchar(20) , 
in y_sp varchar(20) , 
in council_district varchar(20) , 
in census_tract varchar(20) , 
in bin varchar(20),
in bbl varchar(20))
begin



-- determine output for problems
declare problems varchar(160);
set @problems = "";

if (root_stone = "No" and root_grate = "No" and  root_other = "No" and 
trunk_wire = "No" and  trnk_light = "No" and trnk_other = "No" and
brch_light = "No" and brch_shoe = "No" and brch_other = "No") then
set @problems = "None";
end if;
if (root_stone = "Yes") then
set @problems = concat_ws(",",@problems, "Stones");
end if;
if (root_grate = "Yes") then
set @problems = concat_ws(",", @problems, "MetalGrates");
end if;
if (root_other = "Yes") then
set @problems = concat_ws(",", @problems, "RootOther");
end if;
if (trunk_wire = "Yes") then
set @problems = concat_ws(",", @problems, "WiresRope");
end if;
if (trnk_light = "Yes") then
set @problems = concat_ws(",", @problems, "TrunkLights");
end if;
if (trnk_other = "Yes") then
set @problems = concat_ws(",", @problems, "TrunkOther");
end if;
if (brch_light = "Yes") then
set @problems = concat_ws(",", @problems, "BranchLights");
end if;
if (brch_shoe = "Yes") then
set @problems = concat_ws(",", @problems, "Sneakers");
end if;
if (brch_other = "Yes") then
set @problems = concat_ws(",", @problems, "BranchOther");
end if;
set @problems = trim(leading ',' from @problems);
update trees 
set trees.block_id = block_id, trees.created_at = date_format(curdate(), "%m/%e/%Y"), trees.tree_dbh = tree_dbh, trees.stump_diam = stump_diam, trees.curb_loc = curb_loc,
trees.status = sstatus, trees.health = health, trees.spc_latin = spc_latin, trees.spc_common= spc_common, trees.steward = steward, trees.guards = guards, trees.sidewalk = sidewalk, trees.user_type = user_type, 
trees.problems = @problems, trees.root_stone = root_stone, trees.root_grate = root_grate, trees.root_other = root_other, trees.trunk_wire = trunk_wire, trees.trnk_light = trnk_light, trees.trnk_other =trnk_other,
trees.brch_light = brch_light, trees.brch_shoe = brch_shoe, trees.brch_other = brch_other, trees.address = address, trees.community = community, trees.cncldist = cncldist, trees.st_assem = st_assem, trees.st_senate = st_senate, 
trees.postcode =  postcode, trees.boro_ct = boro_ct, trees.latitude = latitude, trees.longitude = longitude, 
trees.x_sp = x_sp, trees.y_sp = y_sp, trees.council_district = council_district, trees.census_tract = census_tract, trees.bin = bin, trees.bbl = bbl
where trees.tree_id = tree_id;
end;
// 


