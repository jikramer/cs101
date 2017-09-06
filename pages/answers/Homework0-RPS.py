# Name: Jon Wilson
# Date: 2/11/17
#
#


import random

user = raw_input("Choose your weapon: ")
comp = random.choice( ['rock','paper','scissors'] )

print 'the user (you) chose', user
print 'the comp (I) chose', comp

if user == 'rock':
    if comp == 'rock':
         print 'Looks like we have a tie on our hands - I chose rock too!'
    elif comp == 'paper':
         print 'Ha! I chose paper -- I WIN!'
    else:        
         print 'Oh no! I chose scissors -- I LOSE!'
elif user == 'paper':
    if comp == 'rock':
         print 'Oh no! I chose rock -- I LOSE!'
    elif comp == 'paper':
         print 'Looks like we have a tie on our hands - I chose paper too!'
    else:        
         print 'Ha! I chose scissors -- I WIN!'
else:
    if comp == 'rock':
         print 'Ha! I chose rock -- I WIN!'
    elif comp == 'paper':
         print 'Oh no! I chose paper -- I LOSE!'
    else:        
         print 'Looks like we have a tie on our hands - chose scissors too!'
