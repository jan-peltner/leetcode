-- the JOIN operation pairs every row of w1 with every row of w2 (cartesian product)
-- and filters it with the ON condition to only include the intersection (INNER JOIN) between the 2 tables,
-- where the record date of the w1 row is one day ahead of the w2 row.
-- the WHERE clause filters down the joined table based on the temperature.
SELECT w1.id
FROM Weather w1
INNER JOIN Weather w2 ON DATEDIFF(w1.recordDate, w2.recordDate) = 1
WHERE w1.temperature > w2.temperature;
