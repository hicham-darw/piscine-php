USE db_darwin;

SELECT last_name, first_name FROM user_card
WHERE last_name LIKE '% %' OR first_name LIKE '% %' OR
last_name LIKE '%-%' OR first_name LIKE '%-%'
ORDER BY last_name ,first_name;
