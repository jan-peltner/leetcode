-- Join the tables on the IDs and filter out all bonuses below 1000 in the result set
-- Coalesce null values in the bonus column so the comparison in the WHERE clause works properly
SELECT Employee.name, bonus
FROM Employee
LEFT JOIN Bonus ON Employee.empId = Bonus.empId
WHERE COALESCE(bonus, 0) < 1000;
