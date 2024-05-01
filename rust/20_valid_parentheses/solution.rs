use std::collections::HashMap;

impl Solution {
    pub fn is_valid(s: String) -> bool {
        let mut paren_map: HashMap<char, char> = HashMap::new();
        let mut stack: Vec<char> = Vec::new();
        paren_map.insert(')', '(');
        paren_map.insert(']', '[');
        paren_map.insert('}', '{');

        for char in s.chars() {
            if let Some(v) = paren_map.get(&char) {
                // we found a closing paren
                if let Some(stack_v) = stack.pop() {
                    if *v != stack_v {
                        return false;
                    }
                } else {
                    return false;
                }
            } else {
                // we found an opening paren
                stack.push(char);
            }
        }
        return stack.is_empty();
    }
}
