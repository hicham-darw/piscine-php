USE db_darwin;

INSERT INTO ft_table (login, `group`, creation_date) SELECT last_name, 'other', SUBSTRING(birthdate, 1, 10) AS DATE FROM user_card WHERE last_name like "%a%" AND length(last_name) < 9 ORDER BY last_name LIMIT 10;
