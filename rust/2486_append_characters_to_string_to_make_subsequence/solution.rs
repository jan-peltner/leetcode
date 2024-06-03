struct Solution {}

impl Solution {
    pub fn append_characters(s: String, t: String) -> i32 {
        let mut it = t.bytes().peekable();
        for b in s.bytes() {
            it.next_if_eq(&b);
        }
        it.len() as i32
    }
}
fn main() {
    let res = Solution::append_characters(String::from("coaching"), String::from("coding"));
    println!("{}", res);
}
