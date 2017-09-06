
<!-- saved from url=(0077)https://www.cs.hmc.edu/twiki/bin/view/CS5Fall2015/CS5GoldReviewExamSolutions1 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15"></head><body class="composite"><p>

  
  <!--<base href="https://www.cs.hmc.edu/twiki/bin/view/CS5Fall2015/CS5GoldReviewExamSolutions1">--><base href="."> 

  <title>CS5Fall2015 - CS5GoldReviewExamSolutions1</title>


  <link rel="stylesheet" title="HMCCS5Skin" type="text/css" href="./CS5Fall2015 - CS5GoldReviewExamSolutions1_files/hmccs5.css">
  <link rel="stylesheet" title="HMCCS5Skin" type="text/css" href="./CS5Fall2015 - CS5GoldReviewExamSolutions1_files/hmccs5-colors-ltblue.css">
  <link rel="stylesheet" title="HMCCS5Skin" type="text/css" href="./CS5Fall2015 - CS5GoldReviewExamSolutions1_files/hmccs5-colors-gold.css">
  <style type="text/css">
  .header {
	 background-image: url(https://www.cs.hmc.edu/~cs5grad/cs5/images/clouds.jpg);
  }
  //.sidebar {
  //  background-image: url(https://www.cs.hmc.edu/~cs5grad/cs5/images/clouds.jpg);
  //}
  .subheader {
	 background-image: url(https://www.cs.hmc.edu/~cs5grad/cs5/images/clouds.jpg);
  }
  .footer {
	 background-image: url(https://www.cs.hmc.edu/~cs5grad/cs5/images/clouds.jpg);
  }
  </style>

</p><p>

</p><p>
<a name="top"></a>
</p><p>
</p><div class="header">
  <img class="logo" src="./CS5Fall2015 - CS5GoldReviewExamSolutions1_files/cs5_logo.png">
</div>
<p>
</p><p>
</p><div class="subheader">
  <a class="twikiLink" href="https://www.cs.hmc.edu/twiki/bin/view/CS5Fall2015/WebHome">CS5Fall2015 Web</a> &gt; 
  CS5GoldReviewExamSolutions1
  <div style="margin-bottom: 6px;">
	 <b>Next HW</b>: &nbsp;&nbsp; <b><a class="twikiLink" href="https://www.cs.hmc.edu/twiki/bin/view/CS5Fall2015/Homework12Gold">Milestone/hw12</a></b> &nbsp;&nbsp; <b><a class="twikiLink" href="https://www.cs.hmc.edu/twiki/bin/view/CS5Fall2015/Homework12Black">Milestone/hw12</a></b>  <!-- <b><a class="twikiLink" href="/twiki/bin/view/CS5Fall2015/ProjectsPage">Final projects</a></b> and <a class="twikiLink" href="/twiki/bin/view/CS5Fall2015/Homework8Gold">HW 8</a></b>--> <!-- <b><a class="twikiLink" href="/twiki/bin/view/CS5Fall2015/Homework12Gold">Milestone/hw12</a></b> &nbsp;&nbsp; <b><a class="twikiLink" href="/twiki/bin/view/CS5Fall2015/Homework12Black">Milestone/hw12</a></b> --> <!-- <b><a class="twikiLink" href="/twiki/bin/view/CS5Fall2015/Homework11Gold">Gold HW 11</a></b>  <b><a class="twikiLink" href="/twiki/bin/view/CS5Fall2015/Homework11Gold">Gold hw 11</a></b> &nbsp;&nbsp; <b><a class="twikiLink" href="/twiki/bin/view/CS5Fall2015/Homework11Black">Black hw 11</a></b>    Homework12Gold  <a class="twikiLink" href="/twiki/bin/view/CS5Fall2015/ProjectsPage">ProjectsPage</a>  -->  &nbsp;&nbsp; will be due on: <font color="darkgreen"><b>Tue., Dec. 8, 11:59pm</b></font> <br>
	 Next Lab: <b><a class="twikiLink" href="https://www.cs.hmc.edu/twiki/bin/view/CS5Fall2015/Homework12Gold">Milestone/hw12 help</a></b>  <!-- <b><a class="twikiLink" href="/twiki/bin/view/CS5Fall2015/Lab11">Lab 11: vPython!</a></b>   <b><a class="twikiLink" href="/twiki/bin/view/CS5Fall2015/ProjectsPage">Final projects</a></b>  <b><a class="twikiLink" href="/twiki/bin/view/CS5Fall2015/Lab11">Lab 11: vPython!</a></b>   <b><a class="twikiLink" href="/twiki/bin/view/CS5Fall2015/Homework12Gold">Open lab: FSMs, ExCr, or projects</a></b>    --> &nbsp;&nbsp; will be held on: Tue./Wed., as grutoring hours in the CS labs - join us! <!-- Tue. Nov. 17 and Wed. Nov. 18 --> <br>
	 Submissions: <a href="http://www.cs.hmc.edu/submit">CS submission site</a>
  </div>
</div>
<p>
</p><div class="main">
<a name="text"></a><h2><a name="Gold_review_midterm_solutions"></a><a name="Gold_review_midterm_solutions_"></a> Gold review midterm  solutions... </h2>
<p>
</p><p>
<!-- <ul>
<li> Set STYLECOLOR = gold
</li></ul> 
-->
Below are the solutions to the recursive/functional questions.
</p><p>
<a class="twikiLink" href="https://www.cs.hmc.edu/twiki/bin/view/CS5Fall2015/CS5GoldReviewExamSolutions2">This link provides the solutions to the later practice questions</a>
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
<a class="twikiLink" href="https://www.cs.hmc.edu/twiki/bin/view/CS5Fall2015/CS5GoldReviewExamSolutions2">This link provides the solutions to the later practice questions</a><a name="bottom"></a>
</p></div>
<p>
</p><div class="footer">
<p>
</p></div>
<p>

</p></body></html>