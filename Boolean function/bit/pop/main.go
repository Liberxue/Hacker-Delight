package main

import (
	"fmt"
)

func main() {
	fmt.Println(POP(11111111111111))
}

func POP(x int64) int64 {
	x = x - ((x >> 1) & 0x55555555)
	x = (x & 0x33333333) + ((x >> 2) & 0x33333333)
	x = (x + (x >> 4)) & 0x0F0F0F0F
	x = x + (x >> 8)
	x = x + (x >> 16)
	return x & 0x0000003F

	// x = (x&0x0000FF00)<<8 | (x>>8)&0x0000FF00 | x&0xFF0000FF
	// x = (x&0x00F000F0)<<4 | (x>>4)&0x00F000F0 | x&0xF00FF00F
	// x = (x&0x0C0C0C0C)<<2 | (x>>2)&0x0C0C0C0C | x&0xC3C3C3C3
	// x = (x&0x22222222)<<1 | (x>>1)&0x22222222 | x&0x99999999
	// return x
}
