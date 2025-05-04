USE db_darwin;

SELECT COUNT(CASE WHEN release_date BETWEEN "2006-10-30" AND "2007-07-27" THEN 1 END)
								AS "movies",
COUNT(CASE WHEN MONTH(release_date) = 12 AND DAY(release_date) = 24 THEN 1 END)
								AS "Christmas"
FROM film; 
