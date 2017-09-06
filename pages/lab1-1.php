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
		  <li class="breadcrumb-item active">Lab 1-1</li>
		</ol>
		
		<div class="container-fluid">
			<a name="top"></a>
			
			<?php require '../views/announcement.php'; ?>
			
			<div class="page-header">
				<h3>CS 101 - Lab 1-1</h3>
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
								 Trying out the Python interpreter (or <i>shell</i>) 
							</a>
						</h5>
					</div>
					<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
						<div class="card-block">
							<p>
								There's no file nor anything to hand in for this part -- just open Python's shell and try out the Python commands below. You can tell if you're 
								in the Python shell by the three-greater-than-sign prompt: <tt>&gt;&gt;&gt;</tt> or, on its own line.
<pre>>>></pre>
								Note that you don't have to type that prompt - it's already there!
							</p>
							<p>
								<h5>Arithmetic with numbers, lists, strings, booleans, &hellip;</h5>
								To get started, try a few arithmetic, string, and list expressions in the Python interpreter, e.g.,
								<ul>
									<li>
										<tt>&gt;&gt;&gt; 40 + 2</tt><br>
										<tt>42</tt>
									</li>
									<li>
										<tt>&gt;&gt;&gt; 40 ** 2</tt><br>
										<tt>1600</tt>
									</li>
									<li>
										<tt>&gt;&gt;&gt; 40 % 2</tt><br>
										<tt>0</tt>
									</li>
									<li>
										<tt>&gt;&gt;&gt; 'hi there!'</tt><br>
										<tt>hi there!</tt> &nbsp;&nbsp;(notice Python's politeness!)
									</li>
									<li>
										<tt>&gt;&gt;&gt; 'who are you?'</tt><br>
										<tt>who are you?</tt> &nbsp;&nbsp;(though sometimes it's a bit touchy.)
									</li>
									<li>
										<tt>&gt;&gt;&gt; L = [0,1,2,3]</tt>&nbsp;&nbsp; You can label data (here, a list) with a name (here, the name <tt>L</tt>)<br>
										<tt>(no response from Python)</tt>
									</li>
									<li>
										<tt>&gt;&gt;&gt; L</tt><br>
										<tt>[0,1,2,3]</tt>&nbsp;&nbsp; You can see the data (here, a list) referred to by a name (here, <tt>L</tt>)
									</li>
									<li>
										<tt>&gt;&gt;&gt; L[1:]</tt><br>
										<tt>[1,2,3]</tt>&nbsp;&nbsp; You can slice lists (here, using the name <tt>L</tt>)
									</li>
									<li>
										<tt>&gt;&gt;&gt; L[::-1]</tt><br>
										<tt>[3,2,1,0]</tt>&nbsp;&nbsp; You can reverse lists (<i>or strings!</i>) using "skip"-slicing with a <code>-1</code> as the amount to skip. 
									</li>
									<li>
										<tt>&gt;&gt;&gt; [0,1,2,3][1:]</tt><br>
										<tt>[1,2,3]</tt>&nbsp;&nbsp; You can slice lists using the raw list instead of the name	(Not that this would be very useful, admittedly!)
									</li>
									<li>
										<tt>&gt;&gt;&gt; 100*L + [42]*100</tt><br>
										<tt>(a list with 500 elements that I'm too lazy to type here)</tt>
									</li>
									<li>
										<tt>&gt;&gt;&gt; L = 42</tt>&nbsp;&nbsp; You can reassign the name <tt>L</tt> to another value, even of a different type&mdash;now, <tt>L</tt> names the integer 42, instead of the list it used to represent.<br>
										<tt>(no response from Python)</tt>
									</li>
									<li>
										<tt>&gt;&gt;&gt; L == 42</tt>&nbsp;&nbsp; Two equals are different than 1! This <i>tests for equality</i>.<br>
										<tt>True</tt>
									</li>
									<li>
										<tt>&gt;&gt;&gt; L&nbsp;!=&nbsp;42</tt>&nbsp;&nbsp; This tests for "not equal."<br>
										<tt>False</tt>
									</li>
								</p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingTwo">
							<h5 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
									Errors or Exceptions
								</a>
							</h5>
						</div>
						<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="card-block">
								<p>
									Mistakes are unavoidable! So, you'll encounter Python errors. They're sometimes called <i>exceptions</i>, as well. Perhaps the most important habit 
									we hope you'll pick up in CS 5 is this: <i>if an error happens, consider it an opportunity, not a problem</i>! It's true, in that an error is a 
									chance to (1) improve your intuition about how computation works, i.e., the "machine's mindset," (2) improve the software you're developing 
									(or your understanding of it), and (3) build on your debugging skills..
								<p/>
								<p>
									So, let's create some errors, which Python calls <i>exceptions</i>. <b>Give yourself two minutes.</b> In that time, see how many of these Python 
									exceptions you can cause!  If you create others, all the better -- let an instructor or tutor know, and we'll add them to this list:	
									<ul>
										<li><tt>NameError</tt>&nbsp;(an unrecognized variable!)<br></li> 
										<li><tt>TypeError</tt>&nbsp;(try slicing an integer for example!)</li>										
										<li><tt>ZeroDivisionError</tt>&nbsp;(perhaps clear from its name)</li> 
										<li><tt>SyntaxError</tt>&nbsp;(the error that kittens most often produce when walking over the keyboard)</li> 
										<li><tt>IndexError</tt>&nbsp;(try an out-of-bounds index into a sequence)</li> 
										<li>
											<tt>OverflowError</tt>Remember that integers won't overflow -- if they get too big to fit in memory, they'll simply crash Python. 
											Thus, to obtain this error you'll need to use a floating-point value, such as <tt>42.0</tt>, in some mathematical expression that 
											produces very large values!
										</li>
									</ul> 
								<p/>
							</div>
						</div>
					</div>					
					<div class="card">
						<div class="card-header" role="tab" id="headingThree">
							<h5 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
									Lists! Challenges with slicing and indexing
								</a>
							</h5>
						</div>
						<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="card-block">
								<p>
									This problem will exercise your slicing-and-indexing skills. First, use Sublime (or your favorite plain-text editor) to create a new text file. 
									Just to be safe, you should save it -- right off the bat -- as <tt>hw1pr1.py</tt>. <b>To do:</b> Then, copy the following starting lines into 
									your new plain-text file:
<pre>
# 
# Name:
#
# hw1pr1.py (Lab 1, part 1)
# slicing and indexing challenges
#

pi &#61; &#91;3,1,4,1,5,9]
e &#61; &#91;2,7,1]

# Example problem (problem 0):  &#91;2,7,5,9]
answer0 &#61; e&#91;0:2] + pi&#91;-2:]  
print answer0
</pre>
								<p/>
								<p>
									<h5>A couple of notes on this code:</h5> 
									<ul>
										<li> Be sure to save this as a plain-text file named <tt>hw1pr1.py</tt>. You'll need the <tt>.py</tt> extension.</li> 
										<li> After the initial comment, this code defines the list named <tt>pi</tt> and the list named <tt>e</tt>.</li> 
										<li> When you run the file, the line <tt>answer0 = e[0:2] + pi[-2:]</tt> will define the value held by the variable <tt>answer0</tt>.</li> 
										<li> Then, the code will print the value of the variable <tt>answer0</tt>.</li>
									</ul> 
								<p/>
								<p>
									<h5>To run the code:</h5> 
									<ul>
										<li> First, at your computer's command-line, make sure you're in the location where <tt>hw1pr1.py</tt> is located. (Desktop or other folder)</li>
										<li> Then, run at your computer's command prompt:   <pre>python hw1pr1.py</pre></li> 
										<li> This will run the code, show the results, and then stop.</li>
									</ul> 
								<p/>
								<p>
									<h5>To run the code and stay inside Python:</h5>
									At least once, run the alternative command:  <tt>python -i hw1pr1.py</tt>. This will run as before, the leave you at the Python prompt.
									The <tt>-i</tt> asks for Python's "interactive mode". Inside Python, then, you have access to the variables <tt>e</tt> and <tt>pi</tt> 
									-- and can work on the next challenges...  
								</p>
								<p>
									For example, type:
									<ul>
										<li><tt>pi[1:]</tt> and hit return - you will see all except the first element of <tt>pi</tt></li> 
										<li><tt>e[0:2]</tt> and hit return - you will see the first two elements of <tt>e</tt></li> 
										<li><tt>e[2:0:-1]</tt> and hit return - you will see that reversed slice of <tt>e</tt></li>
									</ul>
								</p>
								<p>
									The following keyboard shortcuts can prove helpful in cutting down coding time:\
									<ul>
										<li>You can exit Python with <tt>control-d</tt></li>
										<li> If you accidentally type command-d on the Mac, you'll split your terminal</li> 
										<li> In that case, type command-shift-d to "unsplit" it</li>
									</ul> 
									In short, sometimes it's nice to work in Python just to build intuition. The <tt>-i</tt> flag lets you do this after running a file.
								<p/>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingFour">
							<h5 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
									Composing new lists from <tt>pi</tt>, <tt>e</tt>, and list operations 
								</a>
							</h5>
						</div>
						<div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
							<div class="card-block">
								<p>
									The problems below ask you to create several lists using <b>only</b> the list named <code>pi</code>, the list named <code>e</code>, and these 
									list operations: 
									<ul>
										<li>list indexing such as <code>pi[0]</code></li> 
										<li>list slicing such as <code>e[1:]</code></li> 
										<li>skip-slicing such as <code>=pi[0:6:2]</code></li>
										<li>list concatenation, <code>+</code>, such as <code>e[0:2] + pi[-2:]</code> (do <i>not</i> use <tt>+</tt> to add values numerically)</li>
									</ul> 
								</p>
								<p>
									Please <b>leave a blank line</b> or two between your answers (to keep things readable - this makes the graders happy)! You're encouraged to 
									<b>use python's interactive mode</b> to check your answers often and to try things out...<b>For fun only</b></i>, you might try using as few 
									operations as possible, to keep your answers elegant and efficient. 
								<p/>
								<p>
									Here are the problems:
									<ol>
										<li> 
											Use <code>pi</code> and/or <code>e</code> to create the list <code>[2,7,5,9]</code>.  
											This is the example above, stored in the variable <tt>answer0</tt>.
										</li> 
										<li>
											Use <code>pi</code> and/or <code>e</code> to create the list <code>[7,1]</code>. 
											As above, store this list in the variable <tt>answer1</tt>. Here is a start, to copy-and-paste: 

<pre>
# Problem 1: creating &#91;7,1]
answer1 &#61;    
print answer1
</pre>
										</li> 
										<li> 
											Use <code>pi</code> and/or  <code>e</code> to create the list <code>[9,1,1]</code>.  Store this list in the variable <tt>answer2</tt>.
										</li> 
										<li>
											Use <code>pi</code> and/or  <code>e</code> to create the list <code>[1,4,1,5,9]</code>.  Store this list in the variable <tt>answer3</tt>.
										</li>
										<li> 
											Use <code>pi</code> and/or  <code>e</code> to create the list <code>[1,2,3,4,5]</code>.  Store this list in the variable <tt>answer4</tt>.
										</li>
									</ol> 
								<p/>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingFive">
							<h5 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
									Strings! Slicing and indexing 
								</a>
							</h5>
						</div>
						<div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
							<div class="card-block">
								<p>
									This problem continues in the style of the last one, but uses strings rather than lists. First, copy these lines into your <tt>hw1pr1.py</tt> 
									file underneath the previous problems (with some blank lines to keep things apart!):<br/>
<pre>
# Lab1 string practice

h &#61; &#39;harvey&#39;
m &#61; &#39;mudd&#39;
c &#61; &#39;college&#39;
</pre>			
									
									You may use any combination of these four string operations: 
									<ul>
										<li>String indexing, e.g., <code>h[0]</code></li> 
										<li>String slicing, e.g., <code>m[1:]</code></li> 
										<li>String concatenation, <tt>+</tt>, e.g., <code>h + m</code></li> 
										<li>Repetition, *, &nbsp;&nbsp; e.g., <code>42*c</code></li>
									</ul> 
								</p>
								<p>
									Again, the number of operations in the shortest answers that we know about are in parentheses. If you'd like, you might see if your answers are equally or more 
									concise. However, <b>any correct answer is OK</b> - there's no requirement to use a small number of operations.
								</p>
								<p>
									<strong>Example problem (#5)</strong>: Use <tt>h</tt>, <tt>m</tt>, and <tt>c</tt> to create <code>'hey'</code>.  Store this string in the variable 
									<tt>answer5</tt>. We used 3 operations.
								</p>
								<p>
									<strong>Answer to example 5 - please copy and paste this into your file:</strong>
<pre>
# Problem 5:  &#39;hey&#39;
answer5 &#61; h&#91;0] + h&#91;4:6]
print answer5
</pre>
								</p>
								<p>
									The 3 operations are 1 use of list indexing, 1 slice, and 1 concatenation with <tt>+</tt>. Here are the string-creation challenges (and, 
									in parens, our most efficient answers, at least so far). Remember that the "most efficient answers" are not at all needed (they may be fun, but 
									<b>any</b> working answer is 100% OK!)
									<ol>
										<li>(The example from above) &nbsp;&nbsp; Create <code>hey</code>  and store this string in the variable <tt>answer5</tt>.  (3 ops.)</li> 
										<li>Create <code>collude</code> and store this string in the variable <tt>answer6</tt>.  (our best: 5 ops.)</li>
										<li>Create <code>arveyudd</code> and store this string in the variable <tt>answer7</tt>.  (our best: 3 ops.)</li>
										<li>Create <code>hardeharharhar</code> and store this string in the variable <tt>answer8</tt>. (our best: 8 ops.)</li>
										<li>Create <code>legomyego</code> and store this string in the variable <tt>answer9</tt>. (our best: 8 ops.)</li>
										<li>Create <code>clearcall</code> and store this string in the variable <tt>answer10</tt>.  (our best: 9 ops.)</li>
									</ol> 
								</p>
								<p>
									If you have gotten to this point, you have completed the first half of Lab 1! You should submit your <code>hw1pr1.py</code> file  
									at the <a href="https://fairfield.blackboard.com" target="_blank">https://fairfield.blackboard.com</a>. 
								<p/>
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
									Congratulations! You have completed the first problem of Lab 1. You should submit your <code>hw1pr1.py</code> file in the usual way. Even if you have
									not completed the Lab's problems completely, submit what you have and you will receive full credit for both of the problems (as long as you've come to 
									lab and given a full effort). 
								</p>
								<p>
									For each of these problems, you should be sure to name your file as indicated above. Then you should submit the file to our online submission server which is
									available at <a href="https://fairfield.blackboard.com">https://fairfield.blackboard.com</a>.
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
