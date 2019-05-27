INSERT INTO ft_table(login,creation_date,`group`)
SELECT last_name AS login,birthdate AS creation_date,'other' 
FROM user_card 
WHERE last_name LIKE '%a%' and LENGTH(last_name) < 9 
ORDER BY last_name 
LIMIT 10;