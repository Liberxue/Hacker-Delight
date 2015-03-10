package main

import (
	"fmt"
)

func main() {
	var x int64 = 1000
	x = x - 1
	x = x | (x >> 1)
	x = x | (x >> 2)
	x = x | (x >> 4)
	x = x | (x >> 8)
	x = x | (x >> 16)
	fmt.Println(x + 1)
}
