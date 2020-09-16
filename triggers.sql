delimiter // 
-- properly formats any trees that are made into stumps
create trigger stump_maker
before update
on trees
for each row
begin
if new.status = "Stump" then
set new.tree_dbh = 0, new.health = "", 
new.spc_latin = "", new.spc_common = "", new.steward = "",
new.guards = "", new.sidewalk = "", new.problems = "", 
new.root_stone = "No", new.root_grate = "No",new.root_other = "No", 
new.trunk_wire = "No", new.trnk_light = "No", new.trnk_other = "No",
new.brch_light = "No", new.brch_shoe = "No", new.brch_other = "No";
set new.tree_id = old.tree_id, new.block_id = old.block_id, new.created_at = old.created_at,
new.curb_loc = old.curb_loc, new.user_type = old.user_type, new.address = old.address,
new.community = old.community, new.cncldist = old.cncldist, new.st_assem = old.st_assem,
new.st_senate= old.st_senate, new.postcode = old.postcode, new.boro_ct= old.boro_ct,
new.latitude = old.latitude, new.longitude = old.longitude,
new.x_sp = old.x_sp, new.y_sp = old.y_sp, new.council_district = old.council_district,
new.census_tract = old.census_tract, new.bin= old.bin, new.bbl = old.bbl;
end if;
end; 

// 

delimiter // 
-- properly formats any trees that die
create trigger herbicide
before update
on trees
for each row
begin
if new.status = "Dead" then
set new.stump_diam = 0, new.health = "", 
new.spc_latin = "", new.spc_common = "", new.steward = "",
new.guards = "", new.sidewalk = "", new.problems = "", 
new.root_stone = "No", new.root_grate = "No",new.root_other = "No", 
new.trunk_wire = "No", new.trnk_light = "No", new.trnk_other = "No",
new.brch_light = "No", new.brch_shoe = "No", new.brch_other = "No";
set new.tree_id = old.tree_id, new.block_id = old.block_id, new.created_at = old.created_at, new.tree_dbh = old.tree_dbh,
new.curb_loc = old.curb_loc, new.user_type = old.user_type, new.address = old.address,
new.community = old.community, new.cncldist = old.cncldist, new.st_assem = old.st_assem,
new.st_senate= old.st_senate, new.postcode = old.postcode, new.boro_ct= old.boro_ct,
new.latitude = old.latitude, new.longitude = old.longitude,
new.x_sp = old.x_sp, new.y_sp = old.y_sp, new.council_district = old.council_district,
new.census_tract = old.census_tract, new.bin= old.bin, new.bbl = old.bbl;
end if;
end; 

// 