-- The join operation returns all records from the primary (left) table `Employees` and values from the right table `EmployeeUNI` if the join condition evaluates to true.
-- If the condition is false, then NULL will be printed for the EmployeeUNI.unique_id column.
SELECT EmployeeUNI.unique_id, Employees.name FROM Employees LEFT JOIN EmployeeUNI ON EmployeeUNI.id = Employees.id
