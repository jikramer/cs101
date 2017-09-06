<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Fairfield University CS 101</title>
		
		<?php require '../references/libraries.php'; ?>		
		<link rel="stylesheet" href="../css/lab1-2.css"/>
	</head>
	<body>	
		<?php require '../views/header.php'; ?>			
		<?php require '../views/topmenu.php'; ?>		
		
		<ol class="breadcrumb">
		  <li class="breadcrumb-item"><a href="home.php">Home</a></li>
		  <li class="breadcrumb-item"><a href="homework1.php">Homework 1: Patterns and Functions</a></li>
		  <li class="breadcrumb-item active">Lab 1-2</li>
		</ol>
		
		<div class="container-fluid">
			<a name="top"></a>
			
			<?php require '../views/announcement.php'; ?>
			
			<div class="page-header">
				<h3>CS 101 - Lab 1-2</h3>
			</div>
		</div>
		<div class="container-fluid">
			<p>			
				<b>This lab is due:</b> 11:59pm on Monday, September 18, 2017
			</p>
			<p>
				<b>Submission:</b> submit your solutions at <a href="https://fairfield.blackboard.com/" target="_blank">https://fairfield.blackboard.com/</a>
			</p>
			<div id="accordion" role="tablist" aria-multiselectable="true">
				<div class="card">
					<div class="card-header" role="tab" id="headingOne">
						<h5 class="mb-0">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								 Using built-in functions 
							</a>
						</h5>
					</div>
					<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
						<div class="card-block">
							<p>
								To begin, enter Python (just <tt>python</tt> at the computer's command prompt). First, you'll try out some of Python's built-in functions.
								These will <i>not</i> go into your <tt>hw1pr2.py</tt> file:
								<ul class="homework">
									<li>
										<tt>&gt;&gt;&gt; range(0,100)</tt><br>
										<tt>[0,1,2,...,99]</tt><br>
										<tt>range</tt> returns a list of integers. Note that when you use <tt>range</tt>, as with almost everything 
										in python, the <b>right endpoint is omitted!</b>
									</li>
									<li>						
										<tt>&gt;&gt;&gt; sum(range(0,101))</tt><br>
										<tt>5050</tt><br>
<tt>sum</tt> sums a list of numbers, and <tt>range</tt> creates a list of integers.<br>
									</li>
									<li>
										<tt>&gt;&gt;&gt; sum([40,2])</tt><br>
										<tt>42</tt><br> 
										a roundabout way of adding <tt>40+2</tt>
									</li>
									<li>
										<tt>&gt;&gt;&gt; help(sum)</tt><br>
										<tt>(an explanation of sum)</tt><br>										
										<tt>help</tt> is a good thing&mdash;ask for it by name!	If you're on a Mac, hit <b>q</b> in order to leave the <i>help</i> interface...
									</li>
									<li>
										<tt>&gt;&gt;&gt; import math</tt>. You do need to <tt>import math</tt> first...<br>
										<tt>&gt;&gt;&gt; dir( <tt>math</tt> )</tt><br>
										<tt>&gt;&gt;&gt; dir( <tt>__builtins__</tt> )</tt>										
									</li>
								</ul>
							</p>
							<p>
								This <tt>dir</tt> command is also useful - it lists everything from a particular library or module, as it's called. The special <tt>__builtins__</tt>
								module holds all of the already-built-in functions! How to type <tt>__builtins__</tt>? There are two <i>underscores</i> both before and after the 
								lowercase letters: the underscore, <tt>_</tt>, is shift-hyphen on most computer keyboards (between the right parenthesis and the plus sign).
							</p>
							<p>
								If you look carefully in the big list of stuff returned from <tt>dir(_ _ builtins _ _)</tt>, you will find the <tt>sum</tt> function you used above. 
								You will <b>not</b>, however, find some other important functions, for example, <tt>sin</tt> or <tt>cos</tt> or <tt>sqrt</tt>. All of these functions 
								and many more are in the <tt>math</tt> module. There are many, many more modules (libraries) of functions available for you to use as part of Canopy,
								along with even more available for download beyond that.
							</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" role="tab" id="headingTwo">
						<h5 class="mb-0">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
								Importing other code or "modules"
							</a>
						</h5>
					</div>
					<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
						<div class="card-block">
							<p>
								To access functions that are not built-in by default, you need to load them from their modules. Try out these examples to get familiar with how to 
								access Python's many libraries. You can import a module, i.e., a library, and then access its functions with that module name:
								<ul class="homework">
									<li>
										<tt>&gt;&gt;&gt; import math</tt><br>
										<tt>(no response from Python)</tt><br>
									</li>
									<li>							
										<tt>&gt;&gt;&gt; math.sqrt(9)</tt><br>
										<tt>3.0</tt><br>
										Note that <tt>sqrt</tt> returns a <tt>float</tt> even if its input is an <tt>int</tt>.
									</li>
									<li>
										<tt>&gt;&gt;&gt; math.cos(3.14159)</tt><br>
										<tt>-0.999...</tt><br>Note that <tt>cos</tt> et al. take radians as input. Also, 3.14159 is less than <tt>math.pi</tt>.
									</li>
								</ul>
							</p>
							<p>
								Tired of typing <tt>math.</tt> in front of things? You can avoid this with:
								<ul class="homework">
									<li>
										<tt>&gt;&gt;&gt; from math import *</tt><br/>
										<tt>(no response from Python)</tt><br/>
										The asterisk <tt>*</tt> here means "everything." This will bring all of the functions and constants from the math module into your current 
										python environment and you can use them without prefacing them by <tt>math.</tt>
									</li>
									<li>							
										<tt>&gt;&gt;&gt; cos(pi)</tt><br>
										<tt>-1.0</tt><br>
										This would have had to be <tt>math.cos(math.pi)</tt> before the new "<tt>from math import *</tt>" import statement.
									</li>
								</ul>
							</p>
						</div>
					</div>
				</div>					
				<div class="card">
					<div class="card-header" role="tab" id="headingThree">
						<h5 class="mb-0">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
								Create a new file named <tt>hw1pr2.py</tt> 
							</a>
						</h5>
					</div>
					<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
						<div class="card-block">
							<p>
								Next, you'll create a few functions in a new file, <tt>hw1pr2.py</tt>. So, use your Sublime Text (or other text-editor) to create a new file named 
								<tt>hw1pr2.py</tt>. (<b>Note</b>: CS 101's lectures will cover functions in detail at the next meeting. Here, in anticipation, you'll create a few 
								functions just to get started... .)
							</p>
							<p>
								Functions are the fundamental building blocks of computation. What distinguishes Python from other computing environments is the ease and power of 
								creating your own functions. To get started, copy and paste the following comments and a definition of a function named <tt>dbl</tt>:
<pre>
#
# hw1pr2.py (Lab1, part 2)
#
# Name:
# Date:
#

def dbl(x):
	&#34;&#34;&#34;  output: dbl returns twice its input
		 input x: a number (int or float)
		 Spam is great, and dbl(&#34;spam&#34;) is better!
	&#34;&#34;&#34;
	return 2&#42;x
</pre>
							</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" role="tab" id="headingFour">
						<h5 class="mb-0">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
								Running your file! &nbsp; <tt>python -i hw1pr2.py</tt> 
							</a>
						</h5>
					</div>
					<div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
						<div class="card-block">
							<p>			
								As in problem 1, you'll want to run the file with <tt>python -i hw1pr2.py</tt>.  This will load your functions and then you can test them. 
								For example, on Windows:<br/><br/>
								<img src="../img/labl-2.png" alt="labl-2.png" width='636' />
							</p>
							<p>
								Here is the basic interaction:
								<ul class="homework">
									<li>
										<tt>&gt;&gt;&gt; dbl(21)</tt><br>
										<tt>42</tt><br>
										The above code creates a function named <tt>dbl</tt> that outputs twice what it	gets as input. 
									</li>
								</ul>
							</p>
							<p>
								<b>Docstrings</b> &nbsp;&nbsp; The string inside triple quotes <tt>"""</tt> is called the <b>docstring</b>, short for "documentation string." 
								We will ask you to include a docstring in all of your functions (even simple ones such as these, in order to feed the habit). A docstring should 
								describe what the function outputs and what the function inputs. As you see above, it may include other important information, too. In addition, 
								the docstring becomes part of Python's built-in help system. This self-documenting feature in Python is especially important for making your 
								functions understandable, both to others and to yourself! 
							</p>
							<p>
								<b>Warning</b>: the first set of triple quotes of a docstring needs to be indented underneath the function definition <tt>def</tt> line, at the same
								level of indentation as the rest of block of code that defines the function.
							</p>
							<p>
								<b>Using <tt>help</tt> to access docstrings</b> &nbsp;&nbsp; Python's built-in <tt>help</tt> command simply prints a function's docstring. 	As a 
								result, when imported, your <tt>dbl</tt> function is already a fully-integrated part of the Python language and help system! Try typing 
								<tt>help(dbl)</tt> at the interpreter prompt:
								<ul class="homework">
									<li>
										<tt>&gt;&gt;&gt; help(dbl)</tt>
<pre>
Help on function dbl in module __main__:

dbl(x)
	output: dbl returns twice its input
	input x: a number (int or float)
	Spam is great, and dbl("spam") is better!
</pre>
									</li>
								</ul>
								Remember that, on a Mac, typing the letter <b>q</b> will exit the help system.
							</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" role="tab" id="headingFive">
						<h5 class="mb-0">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
								Writing your own functions...
							</a>
						</h5>
					</div>
					<div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
						<div class="card-block">
							<p>
								For each of these functions, be sure to include a docstring that describes <b>what your function does</b> and <b>what its inputs are</b> for each function.
								See the <tt>tpl</tt> example, below, for a reasonable starting point and guide.
							</p>
							<p>
								<ul class="homework">
									<li>
										<b>Example problem</b>:<br/>
										Write the function <tt>tpl(x)</tt>, which takes in a numeric input and outputs three times that input.
									</li>
									<li>
										<b>Answer to example problem</b>:<br/>
										Copy the following solution (after a few blank lines to leave space and help readability) into your <tt>hw1pr2.py</tt> file:
<pre>
def tpl(x):
	""" output: tpl returns thrice its input
		 input x: a number (int or float)

	return 3*x
</pre>
									</li>
								</ul>							
							</p>
							<p>
								<h4>The five functions to write... </h4>
								<ol class="homework">
									<li> 
										Write <tt>sq(x)</tt>, which takes in a number named	<tt>x</tt> as input. Then, <tt>sq</tt> should output the square of its input.<br/>
										Note that this is the <em>square</em>, not the square root. (The square is <tt>x</tt> times itself... .)
									</li>
									<li>
										<tt>interp(low,hi,fraction)</tt> takes in three numbers, <tt>low</tt>, <tt>hi</tt>, and <tt>fraction</tt>, and should return the floating-point 
										value that is <tt>fraction</tt> of the way between <tt>low</tt> and <tt>hi</tt>.
									</li>
								</ol>
							</p>
							<p>
								<b>What!?</b> That is to say, if <tt>fraction</tt> is zero, <tt>low</tt> will be returned. If <tt>fraction</tt> is one, <tt>hi</tt> will be returned, and
								values of <tt>fraction</tt> between <tt>0</tt> and <tt>1</tt> will lead to results between <tt>low</tt> and <tt>hi</tt>. (In fact, values of <tt>fraction</tt>
								can go below <tt>0</tt>, yielding outputs less than <tt>low</tt>, and they can go above <tt>1</tt>, producing outputs greater than <tt>high</tt>. Purists 
								would call this extrapolation, rather than interpolation, however). From the above description, it might be tempting to divide this function into several 
								cases and use <tt>if</tt>, <tt>elif</tt>, and the like. Yet, this function can be written using <i><b>no</b></i> conditional (<tt>if/elif/else</tt>)
								constructions at all! Try it <i>without</i> using <tt>if</tt>!
							</p>
							<p>
								As noted, your function should also work if <tt>fraction</tt> is less than zero or greater than one. In this case, it will be linearly extrapolating, rather than 
								interpolating. We'll stick with the name <tt>interp</tt> anyway. Here are examples that will help clarify how <tt>interp</tt> works:
<pre>
>>> interp(1.0, 9.0, 0.25)      # a quarter (.25) of the way from 1.0 to 9.0
3.0

>>> interp(1.0, 3.0, 0.25)      # a quarter of the way from 1.0 to 3.0
1.5

>>> interp(2, 12, 0.22)         # 22% of the way from 2 to 12
4.2
</pre>
							</p>
							<p>
								<b>Hint</b>: If you're unsure of where to begin on this problem, look at the first example above. In it:
<pre>
<tt>low</tt> is <tt>1.0</tt> 
<tt>hi</tt> is <tt>9.0</tt> 
<tt>fraction</tt> is <tt>0.25</tt> 
</pre>						
								See if you can determine how to combine those three values to yield the correct output of <tt>3.0</tt> . (Consider starting with <tt>(hi - low)</tt>)
							</p>
							<p>
								Here are two more examples to try:
<pre>
>>> interp(24, 42, 0)           # 0% of the way from 24 to 42
24.0

>>> interp(102, 117, -4.0)      # -400% of the way from 102 to 117 (whoa!)
42.0
</pre>
							</p>
							<p>
								The next several functions involve strings of characters. Write each one in your <tt>hw1pr2.py</tt> file. After you write each function, be sure to test it! Also, be sure to 
								include a docstring for each function that tells (very briefly) what it does.
							</p>
							<p>
								Write a function <code>checkends(s)</code>, which takes in a string <code>s</code> and returns <code>True</code> if the first character in <code>s</code> is the same as the 
								last character in <code>s</code>. It returns <code>False</code> otherwise. The <code>checkends</code> function does not have to work on the empty string (the string 
								<code>''</code>).  <b>There is a hint below</b>, but read through the examples first. These examples will help explain <tt>checkends</tt> - read them over now and be sure 
								to try them once you have a first draft of your function. Notice that the final, fourth example below is the <i>string of one space character</i>, which is different from 
								the empty string, which contains no characters:
<pre>
&#62;&#62;&#62; checkends(&#39;no match&#39;)
False

&#62;&#62;&#62; checkends(&#39;hah! a match&#39;)
True

&#62;&#62;&#62; checkends(&#39;q&#39;)
True

&#62;&#62;&#62; checkends(&#39; &#39;)
True
</pre>
							</p>
							<p>
								Make sure to check that this last example (the string of a single space) works for your</b></i> <tt>checkends</tt> function. The empty string does not need to work. <b>Hint</b>: 
								For this function you could use an <tt>if</tt> and <tt>else</tt> construction... here is a start:
<pre>
if s&#91;0] &#61;&#61; &#95;&#95;&#95;&#95;&#95;&#95; :
	return True
else:
	return False			
</pre>
								You might find a solution that doesn't use the <tt>if</tt> and <tt>else</tt> at all -- this is fine, too. Notice that the <i>last</i> character is missing above -- you'll 
								need to fill that in! <b>Warning!</b> Your function <i><b>should not return strings</b></i>! Rather, it should return a <i>boolean value</i>, either <b><tt>True</tt></b> 
								or <b><tt>False</tt></b>, without any quotes around them. These <b><tt>True</tt></b> and <b><tt>False</tt></b> are keywords recognized by Python as representing one bit of 
								information. 
							</p>
							<p>
								You'll see these booleans turn a different color, green in Canopy, indicating that Python does recognize them as <tt>bool</tt> values. (If you'd accidentally made them strings,
								they'd be quoted, and they'd be red in Canopy.) In sum, booleans and strings are different. For <tt>True</tt> and <tt>False</tt> you would almost always want the unquoted 
								boolean values.
							</p>
							<p>
								Write a function <code>flipside(s)</code>, which takes in a string <code>s</code> and returns a string whose first half is <code>s</code>'s second half and whose second half 
								is <code>s</code>'s first half. If <code>len(s)</code> (the length of <code>s</code>) is odd, the first half of the input string should have one fewer character than the 
								second half. (Accordingly, the second half of the output string will be one shorter than the first half in these cases.) There's also a hint after the examples below.
							</p>
							<p>
								Here you may want to use the built-in function <code>len(s)</code>, which returns the length of the input string, <tt>s</tt>. Examples:
<pre>
&#62;&#62;&#62; flipside(&#39;homework&#39;)
workhome

&#62;&#62;&#62; flipside(&#39;carpets&#39;)
petscar
</pre>						
								<b>Hint</b>: This function is simpler if you create a variable equal to <tt>len(s)/2</tt> on the first line, e.g.:
<pre>
def flipside( s ):
	&#34;&#34;&#34; put your docstring here
	&#34;&#34;&#34;
	x &#61; len(s)/2
	return   &#95;&#95;&#95;&#95;&#95;&#95;&#95;&#95;&#95;&#95;&#95;&#95;&#95;	
</pre>
								where the return statement has been left up to you... it will use the variable <tt>x</tt> <i>twice</i> , which is why it's nice to give it a name, rather 
								than type and re-type it!
							<p />
							<p>
								These last functions combine string and arithmetic processing. Write <tt>convertFromSeconds(s)</tt>, which takes in a nonnegative <b>integer</b> number of 
								seconds <tt>s</tt> and returns a list (we'll call it <tt>L</tt>) of four nonnegative integers that represents that number of seconds in more conventional 
								units of time, such that:
								<ul>
									<li>the initial element represents a number of days</li>
									<li>the next element represents a number of hours</li>
									<li>the next element represents a number of minutes</li>
									<li>the final element represents a number of seconds</li>
								</ul> 
								You should be sure that
								<ul>
									<li> 0 &le; seconds &lt; 60 </li>
									<li> 0 &le; minutes &lt; 60 </li>
									<li> 0 &le; hours &lt; 24 </li>
								</ul>
								There are no limits on the number of days. For instance:
<pre>
>>> convertFromSeconds(610)
[0, 0, 10, 10]
>>> convertFromSeconds(100000)
[1, 3, 46, 40]
</pre>							
							</p>
							<p>
								<b>How to do this?</b> Feel free to copy-and-paste this starter code that uses four variables:
<pre>
def convertFromSeconds( s ):
	days &#61; s / (24&#42;60&#42;60)  # # of days
	s &#61; s &#37; (24&#42;60&#42;60)     # the leftover
	hours &#61; 
	minutes &#61; 
	seconds &#61; 
	return &#91;days, hours, minutes, seconds]	
</pre>
								The idea here is that, when those four variables are all correctly set, you can return them all in a list, which is the final line:
<pre>
return &#91;days, hours, minutes, seconds]
</pre>
								For instance, the line that sets <tt>days</tt> could be
<pre>
days &#61; s / (24&#42;60&#42;60)	
</pre>
							</p>
							<p>
								What would be other lines be? It's possible to do this without changing the variable <tt>s</tt> at all. However, as the above starting code suggests, 
								it's also possible to <i>alter</i> <tt>s</tt> as you go. Try this latter approach, just to get the hang of this powerful strategy.
							</p>	
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" role="tab" id="headingSix">
						<h5 class="mb-0">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
								Submitting your file
							</a>
						</h5>
					</div>
					<div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix">
						<div class="card-block">
							<p>
								Congratulations! You have completed the second problem of Lab 1. You should submit your <code>hw1pr2.py</code> file in the usual way. Even if you have
								not completed the Lab's problems completely, submit what you have and you will receive full credit for both of the problems (as long as you've come to 
								lab and given a full effort). 
							</p>
							<p>
								For each of these problems, you should be sure to name your file as indicated above. Then you should submit the file to our online submission server which is available 
								at <a href="https://fairfield.blackboard.com">https://fairfield.blackboard.com</a>.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>		
		<?php require '../views/footer.php'; ?>	
	</body>
</html>