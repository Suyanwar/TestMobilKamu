length = input()
inp = [int(x) for x in raw_input().split()]
res = [0.0, 0.0, 0.0]
if len(inp) > 0:
    if len(inp) != length:
        print('Not equal')
    else:
        for i in inp:
            if i > 0:
                res[0] += 1.0
            elif i < 0:
                res[1] += 1.0
            else:
                res[2] += 1.0
else:
    print('Underflow')
print("{0:.6f}".format(res[0]/length))
print("{0:.6f}".format(res[1]/length))
print("{0:.6f}".format(res[2]/length))