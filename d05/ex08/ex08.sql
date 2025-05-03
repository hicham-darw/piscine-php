USE db_darwin;

SELECT CONCAT(last_name, " ", first_name, " ", SUBSTRING(birthdate, 1, 4)) as birthdate
FROM user_card 
WHERE SUBSTRING(birthdate, 1, 4) = 1989 ORDER BY last_name;
