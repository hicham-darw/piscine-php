USE db_darwin;

select replace(name, 'y', 'Y') FROM distrib 
WHERE id_distrib IN (42, 62, 63,64, 65, 66, 67, 68, 69, 71, 88, 89, 90) AND
(LENGTH(name) - LENGTH(REPLACE(name, 'y', ''))) > 0 LIMIT 5 OFFSET 2;
