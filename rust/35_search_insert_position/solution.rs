impl Solution {
    pub fn search_insert(nums: Vec<i32>, target: i32) -> i32 {
        let mut l: i32 = 0;
        let mut r: i32 = (nums.len() - 1).try_into().unwrap();
        while (l < r) {
            let m: i32 = (r + l) / 2;
            let val: i32 = nums[m as usize];
            if target == val {
                return m;
            }
            if val < target {
                l = m + 1
            } else {
                r = m - 1
            }
        }
        if nums[l as usize] >= target {
            l
        } else {
            l + 1
        }
    }
}

