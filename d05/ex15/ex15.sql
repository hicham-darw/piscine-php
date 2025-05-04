USE db_darwin;

SELECT REVERSE(SUBSTRING(phone_number, 2, 10)) AS "rebmunenohp" FROM distrib
WHERE SUBSTRING(phone_number, 1, 2) = 5;

