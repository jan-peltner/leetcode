-- INNER JOIN the table on itself
-- GROUP BY the primary key to get the number of direct reporters
-- HAVING filters the result set after the aggregation (GROUP BY)
SELECT e1.name
FROM Employee e1
INNER JOIN Employee e2 ON e1.id = e2.managerId
GROUP BY e1.id
HAVING COUNT(*) > 4;
