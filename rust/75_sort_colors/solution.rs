impl Solution {
    pub fn sort_colors(nums: &mut Vec<i32>) {
        let mut colors: (usize, usize, usize) = (0, 0, 0);
        for num in nums.iter() {
            match num {
                0 => colors.0 += 1,
                1 => colors.1 += 1,
                2 => colors.2 += 1,
                _ => unreachable!(),
            }
        }
        let mut i = 0;
        for _ in 0..colors.0 {
            nums[i] = 0;
            i += 1;
        }
        for _ in 0..colors.1 {
            nums[i] = 1;
            i += 1;
        }
        for _ in 0..colors.2 {
            nums[i] = 2;
            i += 1;
        }
    }
}
