USE db_darwin;

SELECT UCASE(last_name) AS "NAME", first_name , price FROM user_card 
INNER JOIN member mbr ON user_card.id_user = mbr.id_member
INNER JOIN subscription sub ON mbr.id_sub = sub.id_sub WHERE mbr.id_sub < 2 
ORDER BY user_card.last_name, user_card.first_name;
