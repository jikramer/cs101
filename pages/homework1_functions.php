<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Fairfield University CS 101</title>
		
		<?php require '../references/libraries.php'; ?>
	</head>
	<body>	
		<?php require '../views/header.php'; ?>			
		<?php require '../views/topmenu.php'; ?>		
		
		<ol class="breadcrumb">
		  <li class="breadcrumb-item"><a href="home.php">Home</a></li>
		  <li class="breadcrumb-item"><a href="homework1.php">Homework 1: Patterns and Functions</a></li>
		  <li class="breadcrumb-item active">Problem 3: Fun with Functions </li>
		</ol>
		
		<div class="container-fluid">
			<a name="top"></a>
			
			<?php require '../views/announcement.php'; ?>
			
			<div class="page-header">
				<h3>CS 101 - Homework Problem 3: Fun with Functions </h3>
			</div>
		</div>
		<div class="container-fluid">
			<p>			
				<b>This lab is due:</b> 11:59 pm on Monday, September 18, 2017
			</p>
			<p>
				<b>Submission:</b> submit your solutions at <a href="https://fairfield.blackboard.com/" target="_blank">https://fairfield.blackboard.com/</a>
			</p>
			<div class="card">
				<div class="card-block">
					<div class="card-text">	
						<em>Homework problem 3 asks you to use recursion to write several Python functions.</em>
					</div>
				</div>
			</div>
			<div id="accordion" role="tablist" aria-multiselectable="true">
				<div class="card">
					<div class="card-header" role="tab" id="headingOne">
						<h5 class="mb-0">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								 Starting your file: <tt>hw1pr3.py</tt>
							</a>
						</h5>
					</div>
					<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
						<div class="card-block">
							<p>
								Create a new plain-text file named <tt>hw1pr3.py</tt>, for example using Sublime or another plain-text editor. Here is a little bit of code to 
								paste, if you'd like to use it to get started:
							</p>
<pre>
#
# hw1pr3.py
#
# Name:
#
# Date:
# Overall comments:
#
#
# mylen example from class
#
def mylen( s ):
    &#34;&#34;&#34; mylen outputs the length of s
              input: s, which can be a string or list

    &#34;&#34;&#34;
    if s &#61;&#61; &#39;&#39; or s &#61;&#61; &#91;]:   # if empty string or empty list
        return 0
    else:
        return 1 + mylen( s&#91;1:] )
</pre>
								<p>
									In addition, the above code includes the <code>mylen</code> example function we wrote in class. Here are all of the  
									<a href="recursiveexamples.php" target="_blank">recursive examples</a>. Please put all of your functions for this problem in this 
									single <tt>hw1pr3.py</tt> file, and start your file with a comment that includes your name, the starting date, and the assignment/problem 
									name - all good things to have in each of your source-code files!  All of the parts (functions) of this problem will be submitted in that 
									single file. 
								</p>
								<p>
									<b>Be sure to name your functions exactly as specified -- including capitalization!</b>
								</p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingTwo">
							<h5 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
									Using Recursion
								</a>
							</h5>
						</div>
						<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="card-block">
								<p>
									For this homework, the:
									<ul>
										<li><code>mult</code></li>
										<li><code>dot</code></li>
										<li><code>ind</code></li> 
										<li><code>scrabbleScore</code></li>
										<li><code>transcribe</code></li> 
									</ul>
									<b>functions</b> should all be done using <em>recursion</em>. Compare them to the <code>power</code>, <code>mymax</code>, <code>mylen</code>, 
									and <code>vwl</code> functions we did in class this week.  Those examples are on the <a href="recursiveexamples.php" target="_blank">recursion
									examples page</a> and beside each problem for you to test and use as the basis for your design.
								</p>
								<h5>Visualize recursion!</h5>
								<p>
									Some people have used <a href="http://www.pythontutor.com/visualize.html" target="blank">this online Python visualizer</a> to build intuition 
									about how recursion works. A couple details: in order to visualize a recursive call, you'll need to:									
									<ol>
										<li>Define your recursive function</li>
										<li>Make a test call to it, perhaps immediately underneath it.</li>
									</ol>									
									Here is an example that shows how to use the online Python visualizer to test <code>mylen( 'cs101' )</code>, one of the examples from class. Paste 
									this code into the visualizer linked above:
								</p>								
<pre>
def mylen( s ):
    if s &#61;&#61; &#39;&#39;:
        return 0
    else:
        return 1 + mylen( s&#91;1:] )
    
test &#61; mylen( &#39;cs5&#39; )
print &#39;test is&#39;, test
</pre>
								<p>
									You can adapt this for other examples from class or from your own code, as well... . Try it!
								</p> 
								<h5>Use docstrings!</h5>
								<p>
									Also, for each function be sure to include a docstring that indicates what the function's inputs mean and what its output means, i.e., what the 
									function "does." (Omitting a docstring typically results in the function being <i>"doc'ed"</i> a couple of points!) Here's an example of 
									a docstring, thorough if a bit verbose, that you are welcome to use for <code>mult</code> and as a template for the others:
								</p>
<pre>
def mult( n, m ):
    &#34;&#34;&#34; mult returns the product of its two inputs
            inputs: n and m are both integers
            output: the result upon multiplying n and m
    &#34;&#34;&#34;
    code here ...
</pre>
								<p>
									<b>Warning!</b>&nbsp; Notice that the docstring needs to be indented to the same level as body of the function it's in. (Python is picky about 
									this...).
								<p/>
							</div>
						</div>
					</div>					
					<div class="card">
						<div class="card-header" role="tab" id="headingThree">
							<h5 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
									Testing your code!
								</a>
							</h5>
						</div>
						<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="card-block">
								<p>
									Be sure to test your functions! It's tempting to write a function and feel like it works, but if it hasn't been tested, it may have a small 
									(or big!) error that causes it to fail... . For this week's assignments, we provide a set of tests that you can (and should!) paste into your 
									code. Then, when you run your file, the tests will run and you can check (by sight, in this case) whether any of the tests has not passed... .
								</p>
								<p>
									For this week, if your functions pass the provided tests, they will pass all of the graders' tests, too. (In the extra credit and in future 
									assignments, we may add more tests of our own... .) Here's an example using the <tt>flipside(s)</tt> function from Lab 1. Paste this into your 
									file and run it:
<pre>
def flipside(s):
   &#34;&#34;&#34; flipside swaps s&#39;s sides
       input s: a string
   &#34;&#34;&#34;
   x &#61; len(s)/2
   return s&#91;x:] + s&#91;:x]

#
# Tests
#
print &#34;flipside(&#39;carpets&#39;)    petscar &#61;&#61;&#34;, flipside(&#39;carpets&#39;)
print &#34;flipside(&#39;homework&#39;)  workhome &#61;&#61;&#34;, flipside(&#39;homework&#39;)
print &#34;flipside(&#39;flipside&#39;)  sideflip &#61;&#61;&#34;, flipside(&#39;flipside&#39;)
print &#34;flipside(&#39;az&#39;)              za &#61;&#61;&#34;, flipside(&#39;az&#39;)
print &#34;flipside(&#39;a&#39;)                a &#61;&#61;&#34;, flipside(&#39;a&#39;)
print &#34;flipside(&#39;&#39;)                   &#61;&#61;&#34;, flipside(&#39;&#39;)
</pre>
									Be sure to paste the tests for the functions below, too - and run them!
								<p/>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingFour">
							<h5 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
									The Problem 3 functions to write...
								</a>
							</h5>
						</div>
						<div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
							<div class="card-block">
								<h5>Write <code>mult( n, m )</code></h5>
								<p>
									Here is a full description of how it should work: <code>mult( n, m )</code> should output the product of the two 
									integers <code>n</code> and <code>m</code>. Since this would be a bit <em>too</em> easy if the multiplication operator * were used, for this 
									function, you are limited to using addition/subtraction/negation operators, along with recursion. Use the <code>power</code> function we did in 
									class as a guide. Some examples: 
								</p>
<pre>
&#62;&#62;&#62; mult( 6, 7 )
42

&#62;&#62;&#62; mult( 6, -3 )
-18
</pre>
								<p>
									This <a href="recursiveexamples.php" target="_blank">link contains the recursive <code>power</code></a> function you wrote in class. Here are the tests
									to try:
								</p>
<pre>
#
# Tests
#
print &#34;mult(6,7)    42 &#61;&#61;&#34;, mult(6,7)
print &#34;mult(6,-7)  -42 &#61;&#61;&#34;, mult(6,-7)
print &#34;mult(-6,7)  -42 &#61;&#61;&#34;, mult(-6,7)
print &#34;mult(-6,-7)  42 &#61;&#61;&#34;, mult(-6,-7)
print &#34;mult(6,0)     0 &#61;&#61;&#34;, mult(6,0)
print &#34;mult(0,7)     0 &#61;&#61;&#34;, mult(0,7)
print &#34;mult(0,0)     0 &#61;&#61;&#34;, mult(0,0)
</pre>
								<hr/>
								<h5>Write <code>dot( L, K )</code></h5>
								<p>
									Here is this function's description: <code>dot( L, K )</code> should output the dot product of the lists 
									<code>L</code> and <code>K</code>. If these two input lists are not of equal length, <code>dot</code> should output <code>0.0</code>. If these 
									two lists are both empty, <code>dot</code> also should output <code>0.0</code>. You should assume that the input lists contain only numeric values. 
									(Compare this with the <code>mylen</code> example we did in class, but be sure to account for <i>both</i> lists -- and remember they're lists, not 
									strings...! <a href="recursiveexamples.php" target="_blank">Here is the <code>mylen</code> example</a> modified slightly to handle both lists and 
									strings!
								</p>
								<p>
									<em>What's the dot product?</em>&nbsp; The dot product of two vectors or lists is the sum of the products of the elements in the same position in 
									the two vectors. for example, the first result is <code>5*6</code> plus <code>3*4</code>, which is <tt>42</tt>. The result here is <code>42.0</code>, 
									because we used a <code>float</code> of <code>0.0</code> in the base case... . You're welcome to use the multiplication operator <code>*</code> for this 
									problem, for sure!
								</p>															
<pre>
&#62;&#62;&#62; dot( &#91;5,3], &#91;6,4] )
42.0

&#62;&#62;&#62; dot( &#91;1,2,3,4], &#91;10,100,1000,10000] )
43210.0

&#62;&#62;&#62; dot( &#91;5,3], &#91;6] )
0.0
</pre>
								<p>
									Here are the tests to try:
								</p>
<pre>
#
# Tests
#
print &#34;dot( &#91;5,3], &#91;6,4] )     42.0 &#61;&#61;&#34;, dot( &#91;5,3], &#91;6,4] ) 
print &#34;dot( &#91;1,2,3,4], &#91;10,100,1000,10000] )  43210.0 &#61;&#61;&#34;, dot( &#91;1,2,3,4], &#91;10,100,1000,10000] ) 
print &#34;dot( &#91;5,3], &#91;6] )        0.0 &#61;&#61;&#34;, dot( &#91;5,3], &#91;6] ) 
print &#34;dot( &#91;], &#91;6] )           0.0 &#61;&#61;&#34;, dot( &#91;], &#91;6] ) 
print &#34;dot( &#91;], &#91;] )            0.0 &#61;&#61;&#34;, dot( &#91;], &#91;6] ) 
</pre>
								<hr/>
								<h5>Next, write <code>ind( e, L )</code>.</h5>
								<p>
									Here is its description: write <code>ind(e, L)</code>, which takes in a sequence <code>L</code> and an element 
									<code>e</code>. <code>L</code> might be a string, or L might be a list. <br> Your function <code>ind</code> should return the <i>index</i> at which
									<code>e</code> is first found in <code>L</code>. Counting begins at 0, as is usual with lists. If <code>e</code> is NOT an element of <code>L</code>,
									then <code>ind(e, L)</code> should return the integer equal to <code>len(L)</code>. Here are a few examples:
								</p>	
<pre>
&#62;&#62;&#62; ind(42, &#91; 55, 77, 42, 12, 42, 100 ])
2
&#62;&#62;&#62; ind(42, range(0,100))
42
&#62;&#62;&#62; ind(&#39;hi&#39;, &#91; &#39;hello&#39;, 42, True ])
3
&#62;&#62;&#62; ind(&#39;hi&#39;, &#91; &#39;well&#39;, &#39;hi&#39;, &#39;there&#39; ])
1 
&#62;&#62;&#62; ind(&#39;i&#39;, &#39;team&#39;)
4 
&#62;&#62;&#62; ind(&#39; &#39;, &#39;outer exploration&#39;)
5 
</pre>
								<p>
									In this last example, the first input to <code>ind</code> is a string of a single space character, not the empty string. <b>Hint:</b> Just as you can 
									check whether an element is in a sequence with:								
<pre>
    if e in L:
</pre>
									you can also check whether an element is <b>not</b> in a sequence with
<pre>
    if e not in L:
</pre>
									This latter syntax is useful for the <code>ind</code> function!  As with <code>dot</code>, <code>ind</code> is probably most similar to <code>mylen</code>
									from the <a href="recursiveexamples.php" target="_blank">recursive examples</a>. Here are the tests to try:
								</p>
<pre>
#
# Tests
#
print &#34;ind( 42, &#91; 55, 77, 42, 12, 42, 100 ])  2 &#61;&#61;&#34;, ind( 42, &#91; 55, 77, 42, 12, 42, 100 ])
print &#34;ind(42, range(0,100))                  42 &#61;&#61;&#34;, ind(42, range(0,100))
print &#34;ind(&#39;hi&#39;, &#91; &#39;hello&#39;, 42, True ])       3 &#61;&#61;&#34;, ind(&#39;hi&#39;, &#91; &#39;hello&#39;, 42, True ])
print &#34;ind(&#39;hi&#39;, &#91; &#39;well&#39;, &#39;hi&#39;, &#39;there&#39; ])   1 &#61;&#61;&#34;, ind(&#39;hi&#39;, &#91; &#39;well&#39;, &#39;hi&#39;, &#39;there&#39; ])
print &#34;ind(&#39;i&#39;, &#39;team&#39;)                       4 &#61;&#61;&#34;, ind(&#39;i&#39;, &#39;team&#39;)
print &#34;ind(&#39; &#39;, &#39;outer exploration&#39;)          5 &#61;&#61;&#34;, ind(&#39; &#39;, &#39;outer exploration&#39;)
</pre>
								<hr/>
								<h5>Write <code>letterScore( let )</code></h5>
								<p>
									(Watch for capitalization!) Here is its description: <code>letterScore( let )</code> should take as input a single-character string and produce as
									output the value of that character as a scrabble tile. If the input is not one of the letters from 	<tt>'a'</tt> to <tt>'z'</tt>, the function 
									should return 0. To write this function you will need to use this mapping of letters to scores:<br/><br/>
									<img src='../img/alphaScrabble.gif'><br/><br/>
									<b>What!?</b> Do I have to write 25 or 26 <code>if</code>, <code>elif</code>, or <code>else</code> statements? <b>No!</b> Instead, use the <code>in</code> keyword:
								</p>
<pre>
>>> 'a' in 'this is a string including a'
True

>>> 'q' in 'this string does not have the the letter before r'
False
</pre>
								<p>
									<em>OK!</em> ... but how does this help...? Consider a conditional such as this:
								</p>
<pre>
if let in &#39;qz&#39;:
  return 10
</pre>
								<p>
									One note: <code>letterScore</code> does <strong>not</strong> require recursion. But recursion <em>is</em> used in the next one... . Here are some 
									examples of <code>letterScore</code> in action:
								</p>
<pre>
>>> letterScore('w')
4
>>> letterScore('%')
0
</pre>
								<p>
									<b>Tests?</b>&nbsp; Write a few tests for this one yourself...it will also be tested in conjunction with the next function!
								</p>
								<hr/>
								<h5>Write <code>scrabbleScore( S )</code></h5>
								<p>
									Here is <tt>scrabbleScore</tt>'s description: <code>scrabbleScore( S )</code> should take as input a string <code>S</code>, which will have only 
									lowercase letters, and should return as output the scrabble score of that string. Ignore the fact	that, in reality, the availability of each 
									letter tile is limited. <b>Hint</b>: use the above <code>letterScore</code> function and recursion. (Compare this with the the <code>vwl</code> example
									we did in class, but consider adding <i>different</i> values for each letter. Here are the <a href="recursiveexamples.php" target="_blank">
									recursive examples</a>. Here are some code examples:
								</p>
<pre>
>>> scrabbleScore('quetzal')
25
>>> scrabbleScore('jonquil')
23
>>> scrabbleScore('syzygy')
25
</pre>
								<p>
									Here are the tests to try:
								</p>
<pre>
#
# Tests
#
print &#34;scrabbleScore(&#39;quetzal&#39;):  25 &#61;&#61;&#34;, scrabbleScore(&#39;quetzal&#39;)
print &#34;scrabbleScore(&#39;jonquil&#39;):  23 &#61;&#61;&#34;, scrabbleScore(&#39;jonquil&#39;)
print &#34;scrabbleScore(&#39;syzygy&#39;):   25 &#61;&#61;&#34;, scrabbleScore(&#39;syzygy&#39;)
print &#34;scrabbleScore(&#39;abcdefghijklmnopqrstuvwxyz&#39;):  87 &#61;&#61;&#34;, scrabbleScore(&#39;abcdefghijklmnopqrstuvwxyz&#39;)
print &#34;scrabbleScore(&#39;?!&#64;#$&#37;^&#38;&#42;()&#39;):  0 &#61;&#61;&#34;, scrabbleScore(&#39;?!&#64;#$&#37;^&#38;&#42;()&#39;)
print &#34;scrabbleScore(&#39;&#39;):          0 &#61;&#61;&#34;, scrabbleScore(&#39;&#39;)
</pre>
								<hr/>
								<h5>Write <code>transcribe( S )</code>.</h5>  
								<p>
									Here is its description: <code>transcribe( S )</code> <a href="http://en.wikipedia.org/wiki/Transcription_(genetics)" target="_blank">DNA -&gt; RNA transcription</a> In an incredible molecular feat 
									called <i>transcription</i>, your cells create molecules of messenger RNA that mirror the sequence of nucleotides in your DNA. The RNA is then used 
									to create proteins that do the work of the cell.
								</p>
								<p>
									Write a recursive function <code>transcribe( S )</code>, which should take as input	a string <code>S</code>, which will have DNA nucleotides 									
									(capital letter <code>A</code>s,  <code>C</code>s, <code>G</code>s, and <code>T</code>s). There may be other characters, too, though they should be ignored by
									your <code>transcribe</code> function by simply disappearing from the output. These might be spaces or other characters that are not really DNA 
									nucleotides. 
								<p />
								<p>
									Then, <code>transcribe</code> should return as output the messenger RNA that would be produced from that string <code>S</code>. The correct output simply 
									uses replacement: 
									<ul>
										<li><code>A</code>s in the input become <code>U</code>s in the output. </li>
										<li><code>C</code>s in the input become <code>G</code>s in the output. </li>
										<li><code>G</code>s in the input become <code>C</code>s in the output. </li>
										<li><code>T</code>s in the input become <code>A</code>s in the output. </li>
										<li>Any other input characters should disappear from the output altogether </li>  
									</ul> 
								</p>
								<p>
									As with the previous problem, you will want a helper function that converts one nucleotide. Feel free to use this as a start for this helper 
									function: 
								</p>
<pre>
def one&#95;dna&#95;to&#95;rna( c ):
    &#34;&#34;&#34; converts a single-character c from DNA
        nucleotide to complementary RNA nucleotide &#34;&#34;&#34;
    if c &#61;&#61; &#39;A&#39;: return &#39;U&#39;
    # you&#39;ll need more here...
</pre>
								<p>
									You'll want to adapt the <code>vwl</code> example, but adding together strings, instead of numbers! Here are the 
									<a href="recursiveexamples.php" target="_blank">recursive examples</a>. Here are some examples of <code>transcribe</code>:
								</p>
<pre>
>>> transcribe('ACGT TGCA')  	# space should be removed
'UGCAACGU'
>>> transcribe('GATTACA')
'CUAAUGU'
>>> transcribe('cs101')		# lowercase doesn't count
</pre>
								<p>
									<b>Not quite working?</b> &nbsp; One common problem that can arise is that <tt>one_dna_to_rna</tt> lacks an <code>else</code> case to capture all 
									of the non-legal characters. Since all non-nucleotide characters should be dropped, this can be fixed by include code similar to this:
								</p>
<pre>
else:
    return &#39;&#39;     		# return the empty string if it&#39;s not a legal nucleotide
</pre>
								<p>
									There are different ways around this, too, but this is one problem that has appeared a few times... . Note that the <code>else</code> above is only for 
									<tt>one_dna_to_rna</tt>, not for <code>transcribe</code> itself. Here are the tests to paste and try - <b>Note:</b> that the right-hand sides won't
									have quotes:
								<p>
<pre>
#
# Tests
#
print &#34;transcribe(&#39;ACGTTGCA&#39;): &#39;UGCAACGU&#39; &#61;&#61;&#34;, transcribe(&#39;ACGTTGCA&#39;)
print &#34;transcribe(&#39;ACG TGCA&#39;): &#39;UGCACGU&#39; &#61;&#61;&#34;, transcribe(&#39;ACGTGCA&#39;)   # note that the space disappears
print &#34;transcribe(&#39;GATTACA&#39;): &#39;CUAAUGU&#39; &#61;&#61;&#34;, transcribe(&#39;GATTACA&#39;)
print &#34;transcribe(&#39;cs101&#39;) : &#39;&#39; &#61;&#61;&#34;, transcribe(&#39;cs101&#39;)    # note that the other characters disappear
print &#34;transcribe(&#39;&#39;) : &#39;&#39; &#61;&#61;&#34;, transcribe(&#39;&#39;)
</pre>
								<p>
									Because Python <tt>print</tt>s strings without the enclosing quotes, the right-hand sides won't have quotes, which means that you will want your 
									output to look like this:
								</p>
<pre>
transcribe(&#39;ACGTTGCA&#39;): &#39;UGCAACGU&#39; &#61;&#61; UGCAACGU
transcribe(&#39;ACG TGCA&#39;): &#39;UGCACGU&#39; &#61;&#61; UGCACGU
transcribe(&#39;GATTACA&#39;): &#39;CUAAUGU&#39; &#61;&#61; CUAAUGU
transcribe(&#39;cs5&#39;) : &#39;&#39; &#61;&#61; 
transcribe(&#39;&#39;) : &#39;&##39; &#61;&#61; 
</pre>
								<p>
									Remember to submit your file as <tt>hw1pr3.py</tt>. <br><br> If it's not too late, you might check out the optional extra-credit problems, described 
									below.
								</p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingfive">
							<h5 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="true" aria-controls="collapsefive">
									Extra credit challenges!
								</a>
							</h5>
						</div>
						<div id="collapsefive" class="collapse" role="tabpanel" aria-labelledby="headingfive">
							<div class="card-block">
								<p>
									This week's extra-credit shows off a wonderful practice website for Python functions, called <a href="http://codingbat.com/python/" target="_blank">
									!CodingBat</a>. In addition, it offers a challenge "pig-latin" function to write... There are three opportunities (up to +4 pts each): 
									<ul>
										<li>Practice with strings on <a href="http://codingbat.com/python/String-1" target="_top">CodingBat with Python strings</a></li> 
										<li>Practice with lists on <a href="http://codingbat.com/python/List-1" target="_top">CodingBat with Python lists</a></li> 
										<li>Write a pig-latin-izing function (more with strings...)</li>
									</ul>
								</p>
								<h5>Extra #1: CodingBat for Python Strings </h5>
								<p>
									For +4 points, complete <i><b>all of the Python string problems</b></i> on <a href="http://codingbat.com/python/String-1" target="_top">
									CodingBat's "String-1" Python string page</a>. Use as many attempts as you'd like. We will use the honor system here: You'll receive +4 
									extra-credit points if:
									<ol>
										<li>You do complete <i><b>all</b></i> of those string problems successfully, and </li> 
										<li>You paste at/near the bottom of your <code>hw1pr3.py</code> file this comment: 
<pre>
#
# I finished all of the CodingBat STRING problems.
#
</pre>
										</li>
									</ol> 
								</p>
								<hr/>
								<h5> Extra #2: CodingBat for Python Lists </h5>
								<p>
									If you like the CodingBat practice-problem site, try some more! For +4 points, complete <i><b>all of the Python list problems</b></i> on 
									<a href="http://codingbat.com/python/List-1" target="_top">CodingBat's "List-1" Python list page</a>. Use as many attempts as you'd like. You'll 
									receive +4 extra-credit points if: 
									<ol>
										<li>You do complete all of those list problems successfully</li> 
										<li> 
											You paste at/near the bottom of your <tt>hw1pr3.py</tt> file this comment: 
<pre>
#
# I finished all of the CodingBat LIST problems.
#
</pre>
										</li>
									</ol> 
								</p>
								<hr/>
								<h5>Extra #3:  Pig Latin!</h5>
								<p>
									This problem asks you to write two functions that implement an Engligh-to-Pig Latin translator.  Be sure to name and test your functions carefully.
									Include in each a docstring, which should indicate what the function computes (outputs) and what its inputs are or what they mean. This problem is 
									inspired by<br/><br/>
									<img src="../img/googlePL.jpg"><br/><br/>
								</p>
								<p>
									<b>Warm up:</b> Write <code>pigletLatin( s )</code>, which takes as input a string <code>s</code>. <code>s</code> will be a single word consisting of lowercase
									letters. Then, <code>pigletLatin</code> should output the translation of <code>s</code> to "piglet latin," which has these rules:
									<ul>
										<li>If the input word has no letters at all (the empty string), your function should return the empty string</li>
										<li> If the input word begins with a vowel the piglet latin output simply appends the string <code>'way'</code> at the end.</li>
										<li><code>'y'</code> will be considered a consonant, and not a vowel, for this problem.</li>
									</ul>
								</p>
								<p>
									<b>Example:</b> <code>pigletLatin('one')</code> returns <code>'oneway'</code>	
								</p>
								<p>
									If the input word begins with a consonant the piglet latin output is identical to the input. The exception being the input's initial consonant is
									at the end of the word instead of the beginning and it's followed by the string <code>'ay'</code>.
								</p>
								<p>
									<b>Example:</b> <code>pigletLatin('be')</code> returns <code>'ebay'</code>
								</p>
								<p>
									Of course, this is not full pig latin, because it does not handle words beginning with multiple consonants correctly. For example
									<code>pigletLatin('string')</code> returns <code>'tringsay'</code>. You'll fix this next!
								</p>
								<hr/>
								<h5>Extra Challenge #4: Create a function called <code>pigLatin( s )</code></h5>
								<p>
									That handles the rules above <b>and</b> handles more than one initial consonant correctly in the translation to Pig Latin. That is, 
									<code>pigLatin</code> moves all of the initial consonants to the end of the word before adding <code>'ay'</code>. (You may want to write and use a 
									helper function to do this -- see the hint below). Also, <code>pigLatin</code> should handle an initial <code>'y'</code> either as a consonant <b>OR</b>
									as a vowel, depending on whether the <code>y</code> is followed by a vowel or consonant, respectively. For example, <code>'yes'</code> has an initial 
									<code>y</code> acting as a consonant. The word <code>'yttrium'</code>, however, (element #39) has an initial <code>y</code>	acting as a vowel. Here are some 
									additional examples:
								</p>
<pre>
>>> pigLatin('string')
ingstray
>>> pigLatin('yttrium')
yttriumway
>>> pigLatin('yoohoo')
oohooyay
</pre>
								<p>
									<b>Tests?</b> These we're leaving up to you! <b>Hint!</b>One way to use recursion to assist in this is to write a function:
<pre>
def initial&#95;consonants( s ):
</pre>
									that returns a string of all of the initial consonants in the input string <code>s</code>. Thus, if <code>s</code> starts with a vowel, the empty string 
									<code>''</code> will be returned.  If you think about this problem thoroughly, you'll find that not every possible case has been accounted for - 
									you are free to decide the appropriate course of action for those "corner cases." We won't test these... .
								</p>
								<p>									
									Oodgay ucklay!
								<p />		
							</div>
						</div>
					</div>		
					<div class="card">
						<div class="card-header" role="tab" id="headingsix">
							<h5 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="true" aria-controls="collapsesix">
									Submission
								</a>
							</h5>
						</div>
						<div id="collapsesix" class="collapse" role="tabpanel" aria-labelledby="headingsix">
							<div class="card-block">								
								<p>
									After you have completed homework problem 3	be sure you name your file <tt>hw1pr3.txt</tt> - it should be a plain-text <tt>.txt</tt> file. 
									The extra credit portion of the assignment should also be included on this homework file.
								</p>
								<p>
									For each of these problems, you should be sure to name your file as indicated above. Then you should submit the file to our online submission 
									server which is found at <a href="https://fairfield.blackboard.com">https://fairfield.blackboard.com</a>.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
		<?php require '../views/footer.php'; ?>	
	</body>
</html>
