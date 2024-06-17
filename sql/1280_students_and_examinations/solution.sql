-- CROSS JOIN creates the cartesian product of the left table (Students) and right table (Subjects)
-- we then LEFT JOIN the Examinations table to the newly created table based on the student_id and subject_name columns
SELECT st.student_id, st.student_name, su.subject_name, COUNT(ex.subject_name) AS attended_exams
FROM Students st 
CROSS JOIN Subjects su
LEFT JOIN Examinations ex ON st.student_id = ex.student_id AND su.subject_name = ex.subject_name
GROUP BY st.student_id, st.student_name, su.subject_name
ORDER BY st.student_id;
