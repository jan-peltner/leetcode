impl Solution {
    pub fn longest_palindrome(s: String) -> i32 {
        let mut map: HashMap<u8, u32> = HashMap::new();
        let mut max_odd_key: Option<u8> = None;
        let mut out: i32 = 0;

        for b in s.bytes() {
            match map.get(&b) {
                Some(old) => map.insert(b, old + 1),
                None => map.insert(b, 1),
            };
        }

        for (k, v) in map.iter() {
            if v % 2 != 0 {
                match max_odd_key {
                    Some(val) => {
                        if v > map.get(&val).unwrap() {
                            max_odd_key = Some(*k);
                        }
                    }
                    None => max_odd_key = Some(*k),
                };
            }
        }

        if max_odd_key.is_some() {
            out += map.remove(&max_odd_key.unwrap()).unwrap() as i32;
        }

        out += map
            .iter()
            .map(|(_, v)| {
                if v % 2 != 0 {
                    (v - 1) as i32
                } else {
                    *v as i32
                }
            })
            .sum::<i32>();
        out
    }
}
