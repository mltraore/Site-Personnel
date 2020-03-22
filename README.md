```assembly
.text
main:
        la   $s0, A              # load variables A and B into registers
        lw   $s0, 0($s0)
        la   $s1, B
        lw   $s1, 0($s1)
```
