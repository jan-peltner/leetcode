impl Solution {
    // The central node is connected to every other node in the star graph.
    // Therefore, every edge (connection between two nodes) has to contain the central node.
    // We only need to iterate over two edges:
    // -> if the first node in the second edge is also contained in the first edge,
    // then we found the central node. If not, then the second node of the second edge has to be the central node.
    pub fn find_center(edges: Vec<Vec<i32>>) -> i32 {
        let mut nodes: Vec<i32> = Vec::with_capacity(2);
        let mut it = edges.iter();

        // push nodes from first edge into nodes vec
        it.next().unwrap().into_iter().for_each(|n| nodes.push(*n));

        // check which node of the second edge is contained in the nodes vec and return it's value
        let next_edge = it.next().unwrap();
        if nodes.contains(&next_edge[0]) {
            return next_edge[0];
        } else {
            return next_edge[1];
        }
    }
}
