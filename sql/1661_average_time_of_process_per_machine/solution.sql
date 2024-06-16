-- join the Activity table with itself and filter it down to the same machine_id, process_id and end > start -> display one "run" per row.
-- group the result set by machine_id and average all of the run durations.
SELECT a1.machine_id, ROUND(AVG(a2.timestamp - a1.timestamp), 3) AS processing_time
FROM Activity a1
INNER JOIN Activity a2
ON a1.machine_id = a2.machine_id AND a1.process_id = a2.process_id AND a1.timestamp < a2.timestamp
GROUP BY a1.machine_id;
