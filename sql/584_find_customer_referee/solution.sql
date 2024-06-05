-- NULL values can't be directly compared using an operator like `!=`
-- the COALESCE function returns the first non-NULL value provided in the arguments -> in this case `0`
SELECT name FROM Customer WHERE COALESCE(referee_id, 0) != 2;
