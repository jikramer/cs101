
<html><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15"></head><body class="composite"><p>


  <title>CS101 Fall 2017 - CS101 ReviewExamSolutions1</title>


<p>
</p><div class="main">
<a name="text"></a><h2><a name="review_midterm_solutions"></a><a name="review_midterm_solutions_"></a> Review midterm solutions... </h2>
<p>
</p><p>

Below are the solutions to the recursive/functional questions.
</p><p>
<a class="" href="">This link provides the solutions to the later practice questions</a>
</p><p>
</p><pre>#
# You won't need to write docstrings on the exam!
# In order to reinforce this, I'll omit them here :-)
#

def countOnes( S ):
    if len(S) == 0:
        return 0
    elif S[0] == '1':
        return 1 + countOnes( S[1:] )
    else:
        return countOnes( S[1:] )


print "countOnes( '011101' ) ==  ", countOnes( '011101' )



def swapBits( S ):
    if len(S) == 0:
        return ''
    elif S[0] == '1':
        return '0' + swapBits( S[1:] )
    else:
        return '1' + swapBits( S[1:] )


print "swapBits( '011101' ) ==  ", swapBits( '011101' )


def numDivisors( N ):
    # LC contains True (1) for divisors;
    # LC contains False (0) for non-divisors
    LC = [ N%x == 0 for x in range(1,N+1) ]
    return sum(LC)


print "numDivisors( 42 ) == ", numDivisors( 42 )


def mostDivisors( L ):
    # L is a list of integers
    # LoL is a list of [ numDivisors, integer ] pairs
    LoL = [ [numDivisors(x), x] for x in L ]
    bestPair = max( LoL )
    return bestPair[1]

# the output is the INTEGER, not the number of divisors...
print "mostDivisors( range(1,17) ) == ", mostDivisors( range(1,17) )



def countTransitions( S ):
    if len(S) &lt; 2:
        return 0
    elif S[0] != S[1]:
        return 1 + countTransitions( S[1:] )
    else:
        return countTransitions( S[1:] )


print "countTransitions( '00010001110' ) == ", countTransitions( '00010001110' )


def longestString( L ):
    # L is a list of strings
    # LoL is a list of [ length, string ] pairs...
    LoL = [ [len(s),s] for s in L ]
    # as in mostDivisors
    return max(LoL)[1]



print "longestString( [ 'short', 'longer', 'sesquipedalian' ] ) == ", \
      longestString( [ 'short', 'longer', 'sesquipedalian' ] )




def cycle( S, n ):
    if n &lt;= 0:
        return S
    else:
        return cycle( S[-1] + S[:-1], n-1 )


print "cycle( '1110', 2 ) == ", cycle( '1110', 2 )

</pre>
<p>
<br>
</p><p>
<a class="" href="">This link provides the solutions to the later practice questions</a><a name="bottom"></a>
</p></div>
<p>
</p><div class="footer">
<p>
</p></div>
<p>

</p></body></html>