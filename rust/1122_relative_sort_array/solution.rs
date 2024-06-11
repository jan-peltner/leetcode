use std::collections::HashSet;
impl Solution {
    pub fn relative_sort_array(arr1: Vec<i32>, arr2: Vec<i32>) -> Vec<i32> {
        let mut intersec: Vec<i32> = Vec::new();
        let mut diff: Vec<i32> = Vec::new();
        let mut out: Vec<i32> = Vec::new();
        let set: HashSet<&i32> = arr2.iter().collect();
        for num in arr1.iter() {
            match set.get(&num) {
                Some(_) => intersec.push(*num),
                None => diff.push(*num),
            }
        }
        for num in arr2.iter() {
            intersec.iter().for_each(|n| {
                if n == num {
                    out.push(*n)
                }
            })
        }
        diff.sort();
        out.append(&mut diff);
        out
    }
}
