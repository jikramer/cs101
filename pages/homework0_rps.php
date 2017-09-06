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
		  <li class="breadcrumb-item"><a href="homework0.php">Homework 0</a></li>		  
		  <li class="breadcrumb-item active"><a href="homework0_rps.php">Homework 0: Rocks, Paper, Scissors</a></li>
		</ol>
		
		<div class="container-fluid">
			<a name="top"></a>
			
			<?php require '../views/announcement.php'; ?>
			
			<div class="page-header">
				<h3>CS 101 - Homework 0: Rocks, Paper, Scissors</h3>
			</div>
		</div>
		<div class="container-fluid">
			<p>			
				<b>Problems 2 due:</b> 11:59pm on Monday, September 11, 2017
			</p>
			<p>
				<b>Submission:</b> submit your solutions at <a href="https://fairfield.blackboard.com/" target="_blank">https://fairfield.blackboard.com/</a>
			</p>	
			<div id="accordion" role="tablist" aria-multiselectable="true">
				<div class="card">
					<div class="card-header" role="tab" id="headingOne">
						<h5 class="mb-0">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								An <i>honesty-optional</i> rock, paper, scissors program
							</a>
						</h5>
					</div>
					<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
						<div class="card-block">	
							<p>
								This second problem asks you to practice creating new python files (in this case, by copying old ones or starting with the code below) writing a bit of your own code 
								(by altering another program, if you wish) text-based input and output in Python.
							</p>
							<p>
								The idea is this: use the discussion from class and <tt>hw0pr0.py</tt>'s starter code to create a program that invites the user to play a game of "rock-paper-scissors":
								<ol>
									<li>
										It must let the user choose from among at least three options. They don't have to be rock, paper, and scissors -- you may have a different favorite variant
										but your program does have to work differently for each of three distinct inputs
									</li>
									<li> 
										Your program may play an honest game of RPS, but you're also welcome to create a player that always wins (or, if you prefer, that always loses).
									</li> 
									<li> 
										Your program must echo the choice the user made. You may assume the user will type her/his choice correctly
									</li>
									<li> 
										Your program must reveal the choice that it makes (whether fair or not)
									</li> 
									<li> 
										Your program must print out who won that round (or whether it was a tie, or some other outcome...)
									</li>
									<li>
										Adding side comments to the graders who will be running your program is optional, but strongly encouraged!
									</li>
								</ol> 
							</p>
						</div>
					</div>
					
					<div class="card">
						<div class="card-header" role="tab" id="headingTwo">
							<h5 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
									Preserve your sanity! Ensure Sublime handles tabs and spaces correctly!
								</a>
							</h5>
						</div>
						<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="card-block">
								<p>
									Mixing tabs and spaces is convenient for typing code - especially Python! However, it's <i><b>vital</b></i> that the indentation you see in your 
									text editor is what Python "sees" in its file. To ensure this, there is a one-time setting that will tell Sublime to handle spaces and tabs 
									consistently (for all files):
									<ul>
										<li> First, go to the <i>Preferences</i> menu. On the Mac, it may be under the main <i>Sublime Text</i> menu</li>
										<li> Then, choose <i>Settings - User</i></li>
										<li> 
											<p>
												A file of user settings will appear in Sublime. Yours may be empty; it may have other contents. Mine looked like this:  
<pre>
{
	&#34;color&#95;scheme&#34;: &#34;Packages/Color Scheme - Default/Sunburst.tmTheme&#34;,
	&#34;font&#95;size&#34;: 13,
	&#34;ignored&#95;packages&#34;:
	&#91;
		&#34;Vintage&#34;
	]
}
</pre>
											</p>
											<p>
												Replace those contents with the following complete text (or simply add the last two lines and the comma preceding them): 
<pre>
{
	&#34;color&#95;scheme&#34;: &#34;Packages/Color Scheme - Default/Sunburst.tmTheme&#34;,
	&#34;font&#95;size&#34;: 13,
	&#34;ignored&#95;packages&#34;:
	&#91;
		&#34;Vintage&#34;
	],
	&#34;tab&#95;size&#34;: 4,
	&#34;translate&#95;tabs&#95;to&#95;spaces&#34;: true
}
</pre>											
											</p>
										</li> 
									</ul>
								</p>
								<p>
									Be sure to save this file. To be safe you could restart Sublime... Now, you can use tabs and spaces together, and tabs will become four spaces 
									in the file - just as it looks! As a result, the file's look (its "syntax") will match how Python interprets it (its "semantics").
								<p />
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingThree">
							<h5 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
									Creating a new file named <tt>hw0pr2.py</tt>
								</a>
							</h5>
						</div>
						<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="card-block">
								<p>
									Either start with your interactive file from lab -- or create a new file named <tt>hw0pr2.py</tt> in a text editor... Remember to be sure to type the <tt>.py</tt> 
									extension: it enables syntax highlighting (colors).  From there, feel free to start by pasting in the following code, which gets you on the way and matches some of 
									our class discussion.
								</p>
<pre>
# hw0pr2.py
#
# Name(s): 
#
# Date:
#
#
import random

user = raw_input("Choose your weapon: ")
comp = random.choice( ['rock','paper','scissors'] )

print 'the user (you) chose', user
print 'the comp (I) chose', comp

if user == 'rock':
	print 'Ha! I really chose paper -- I WIN!'
</pre>
								<p>
									Save this program as <tt>hw0pr2.py</tt>. Do I really have to use the name <tt>hw0pr2.py</tt>?</i> &nbsp; <b>Yes!</b> Please do...<br> The submission system 
									is picky about the name of the files you're submitting!
								</p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingFour">
							<h5 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
									Details on how the program should work
								</a>
							</h5>
						</div>
						<div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
							<div class="card-block">
								<p>
									The program should ask the user to choose rock, paper, or scissors. Then, it should repeat back to the user their choice, it should "reveal" its 
									own choice, and then report the results. See below for one possible example run. The program can play fairly, can always win, or can always 
									lose -- it's up to you. The starting example shows how it can always win! Briefly, in the game of <a href="http://www.worldrps.com/">
									rock-paper-scissors</a>, rock defeats scissors, scissors defeat paper, and paper defeats rock. You may assume that the user will input one of 
									<tt>rock</tt>, <tt>paper</tt>, or <tt>scissors</tt>. Case matters! We'll stick with lower case... You may write the dialog however you like -- 
									below is an example dialog if you'd like one to follow. We are <i><b>positive</b></i> that you can improve on this interaction, however! Here 
									are two distinct runs of the program:	
<pre>
>>> 
	Choose your weapon: rock
	the user (you) chose rock
	the comp (I) chose paper
	Ha! I really chose paper -- I WIN!
>>> 
	Choose your weapon: paper
	the user (you) chose paper
	the comp (I) chose dynamite
	I REALLY WIN!
>>> 
</pre>
								</p>
								<p>
									<b><i>Grutors</i></b> are Mudd's name for the students who grade assignments and hold tutoring hours. Note that taunting and/or praising 
									the grutors with your rock-paper-scissors dialog is encouraged -- and even more, as the semester wears on and the grutors become increasingly 
									sleep-deprived.
								</p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingFive">
							<h5 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
									Other Possibilities
								</a>
							</h5>
						</div>
						<div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
							<div class="card-block">
								<p>
									Too much time on your hands? Add "lizard" and "spock" as noted <a href="http://www.samkass.com/theories/RPSSL.html">
									at this RPSSL link</a>. <br>Even more time? Consider <a href="http://www.umop.com/rps25.htm">RPS-25</a>, a strict superset of RPS. Want your 
									program to continue playing many times? Use a <tt>while True:</tt> loop.
								</p>
								<p>
									We'll provide two examples instead of detailed explanations: 
<pre>
while True:
	print &#34;Still running...&#34;
	response &#61; raw&#95;input(&#34;Play again? &#34;)
	if response &#61;&#61; &#39;n&#39;:
		break
</pre>
								</p>
								<p>
									Here is another possibility: 
<pre>
running &#61; True
while running:
	response &#61; raw&#95;input(&#34;Play again? &#34;)
	if response &#61;&#61; &#39;n&#39;:
		running &#61; False
</pre>
								</p>
								<p>
									These aren't officially extra-credit, though it's common for the graders to award additional points for creative, interesting, and/or unusual 
									submissions! However, if you're looking for <i>official</i> extra-credit challenges, there are several within Picobot problems 3 and 4... !
								</p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingTwo">
							<h5 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
									Submission
								</a>
							</h5>
						</div>
						<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="card-block">
								<p>
									For each of these problems, you should be sure to name your file as indicated above. Then you should submit the file to our online 
									submission server which is available at <a href="https://fairfield.blackboard.com">https://fairfield.blackboard.com</a>.
								</p>
								<p>
									If you submitted <code>hw0pr2.py</code> and <code>hw1pr2.py</code> during the lab period, you will receive full	credit for those two problems 
									(even if you didn't finish). In this case, you will only need to submit the other problems. If you did not participate in lab, you should finish 
									those two, as well.
								</p>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>		
		<?php require '../views/footer.php'; ?>	
	</body>
</html>





