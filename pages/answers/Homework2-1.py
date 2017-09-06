# python 2
# 
# Name:
#
# Homework 2, Problem 1
# slicing and indexing challenges
#

pi = [3,1,4,1,5,9]
e = [2,7,1]

#Use pi and/or e to create the list [2,5,9]. This is the example above, stored in the variable answer0.
answer0 = [ e[0] ] + pi[-2:]     
print answer0

#Use pi and/or e to create the list [7,1]. Store this list in the variable answer1.
answer1 = e[1:]
print answer1

#Use pi and/or e to create the list [9,1,1]. Store this list in the variable answer2.
answer2 = pi[-1::-2]
print answer2

#Use pi and/or e to create the list [1,4,1,5,9]. Store this list in the variable answer3.
answer3 = pi[1:]
print answer3

#Use pi and/or e to create the list [1,2,3,4,5]. Store this list in the variable answer4.
answer4 = e[-1::-2] + pi[0::2]
print answer4

h = 'harvey'
m = 'mudd'
c = 'college'

#(The example from above) Create 'heyyou' and store this string in the variable answer5.
answer5 = h[0] + h[-2:] + h[-1] + c[1] + m[1]
print answer5

#Create 'collude' and store this string in the variable answer6.
answer6 = c[0:4] + m[1:3] + c[-1]
print answer6

#Create 'arveyudd' and store this string in the variable answer7.
answer7 = h[1:] + m[1:]
print answer7

#Create 'hardeharharhar' and store this string in the variable answer8.
answer8 = h[0:3] + m[-1] + c[-1] + h[0:3] * 3
print answer8

#Create 'legomyego' and store this string in the variable answer9.
answer9 = c[3:-1] + c[1] + m[0] + h[-1:-3:-1] + c[-2::-4]
print answer9

#Create 'clearcall' and store this string in the variable answer10.
answer10 = c[::3] + h[1:3] + c[0] + h[1] + c[2:4]
print answer10
