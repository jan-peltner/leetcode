-- JOIN the Employee table on the Project table based on employee_id
-- Aggregate by porject_id and compute the AVG
SELECT project_id, ROUND(AVG(experience_years),2) AS average_years
FROM Project p
LEFT JOIN Employee e ON p.employee_id = e.employee_id
GROUP BY project_id;
