def holaa(x):
	x = str(x)
	a = 0
	if len(x) < 10:
		b = 0
	else:
		for i in range(len(x)):
			c = 0
			if i < len(x) - 5:
				h = []
				for j in range(i, i + 5):
					c = c + int(x[j])
					h.append(x[j])
					if a < c:
						a = c
						b = h
	return b
                



print(holaa(145436803497798443))
print(holaa(145443))
print(holaa(111111111111111211))
