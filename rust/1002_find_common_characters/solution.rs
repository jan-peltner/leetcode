impl Solution {
    pub fn common_chars(words: Vec<String>) -> Vec<String> {
        let mut it = words.iter();
        let mut common: Vec<u8> = it.next().unwrap().bytes().collect();

        for word in it {
            let mut used: Vec<usize> = Vec::new();
            common = common
                .iter()
                .filter_map(|byte| {
                    for (i, word_byte) in word.bytes().enumerate() {
                        if *byte == word_byte && !used.contains(&i) {
                            used.push(i);
                            return Some(byte.clone());
                        }
                    }
                    None
                })
                .collect::<Vec<u8>>();
        }
        common
            .iter()
            .map(|byte| return String::from(*byte as char))
            .collect::<Vec<String>>()
    }
}
