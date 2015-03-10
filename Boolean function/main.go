package main

import (
	"fmt"
)

// 下调: x & (-2^n)
// 上调: (x + 2^n - 1) & (-2^n)
func main() {
	var x uint32 = 3
	x = x | (x >> 1)
	x = x | (x >> 2)
	x = x | (x >> 4)
	x = x | (x >> 8)
	x = x | (x >> 16)
	fmt.Println(x - (x >> 1))
}
