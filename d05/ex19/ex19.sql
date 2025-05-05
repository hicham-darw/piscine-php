USE db_darwin;

SELECT DATEDIFF(max(release_date), min(release_date)) AS "uptime" FROM film
WHERE release_date IS NOT NULL AND release_date != 0000-00-00;
