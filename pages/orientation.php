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
		  <li class="breadcrumb-item">Course Documents</li>
		  <li class="breadcrumb-item active">Course Orientation</li>
		</ol>

		<div class="container-fluid">
			<a name="top"></a>

			<?php require '../views/announcement.php'; ?>

			<div class="page-header">
				<h3>CS 101 - Introduction to Programming Orientation</h3>
			</div>
		</div>
		<div class="container-fluid">
			<p>
				Welcome! This is the webpage of the first problem (the lab problem) in CS 101. The <i><b>goals</b></i> of this lab are...
				<ul>
					<li> To make sure you've successfully installed Python and a text editor</li>
					<li> To introduce you to a command-line interface, text editing, and Python</li>
					<li> To challenge you to solve some "four fours" problems in Python</li>
					<li> To read and run a "Hello" program in Python</li>
					<li> To make sure you can submit <tt>hw0pr1.py</tt> to the submission system</li>
				</ul>
			</p>
			<p>
				<div class="card">
					<div class="card-block">
						<div class="card-text">
							<em>
								If you finish early, you're welcome to head off to other things, or feel free to push ahead to work on (or complete) the rock-paper-scissors or other homework problems. Feel free to use either the CS lab machines or your own laptop for CS 101 labs. Most use their own laptops.
							</em>
						</div>
					</div>
				</div>
			</p>
			<div id="accordion" role="tablist" aria-multiselectable="true">
				<div class="card">
					<div class="card-header" role="tab" id="headingOne">
						<h5 class="mb-0">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Installing the software
							</a>
						</h5>
					</div>
					<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
						<div class="card-block">
							If you're on your own machine head to the <a href="downloadeditor.php">download Python editor</a> page to download and install
							Anaconda's distribution of Python and Notepad++ which is a text editor.  You can also download a window terminal, ConEmu,
							<i><b>only needed if you're a windows user</b></i>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" role="tab" id="headingTwo">
						<h5 class="mb-0">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
								Overview of the terminal window
							</a>
						</h5>
					</div>
					<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
						<div class="card-block">
							Most of our interactions with computers are through the windows provided by the OS. "OS," short for <i>Operating System</i>,
							is usually either Windows or Mac OS, certainly there are many others, flavors of Linux being the most common. And,
							working through the click-and-drag interface of an OS is great! <i><b>However</b></i>, the OS disconnects users from the
							underlying interactions among their device's files. It's a useful, and very flexible, skill to have a clear picture of how
							files are being used, and to be familiar with them <em>underneath</em> the windowing system. Feeling comfortable around
							the command line will come in handy for a lot of pathways that <i>create</i> computation (not only <em>consuming</em> it,
							which the OS handles brilliantly
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" role="tab" id="headingThree">
						<h5 class="mb-0">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
								Starting The terminal window
							</a>
						</h5>
					</div>
					<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
						<div class="card-block">
							<p>
								So, to pull back that OS "curtain," open your machine's (or the lab machine's) <i>terminal</i>. This goes by many names: </p>
								<ul>
									<li>The terminal</li>
									<li>The shell</li>
									<li>The command-line</li>
								</ul>
							</p>
							<p>
								<b><i>On Windows</i></b>
								<ul>
									<li> Find the ConEmu folder you unzipped and double-click <tt>ConEmu64.exe</tt> or <tt>ConEmu.exe</tt></li>
									<li> There is a terminal built-in to Windows, but it's not as convenient. I'd avoid it.</li>
									<li> ConEmu should start up and you'll see a command-line prompt awaiting your instructions</li>
								</ul>
							</p>
							<p>
								<b><i>On a Mac</i></b>
								<ul>
									<li> Use Spotlight to find the application named <tt>Terminal</tt> (using your search bar)</li>
									<li> It should start up and you'll see a command-line prompt awaiting your bidding</li>
								</ul>
							</p>
							<p>
								If this is your first time using the terminal, Hooray!
							</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" role="tab" id="headingFour">
						<h5 class="mb-0">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
								Navigating around in the terminal
							</a>
						</h5>
					</div>
					<div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
						<div class="card-block">
							<p>
								<b>First and most importantly</b>: Arrange your browser and terminal window so that you can see <i>both</i> these instructions and that window.
								<ul>
									<li>Make things easy on yourself! This lets you swap around as little as possible</li>
								</ul>
								The shell (again, shell == terminal) is a <i><b>textual</b></i> view of your entire computer's files and folders.
							</p>
							<p>
								<b>Where am I in the terminal? What else is here?</b> Within the terminal, you will see a prompt. Nothing to type yet:
								<ul>
									<li> Typical Mac prompt:  <tt>machinename yourname $</tt></li>
									<li> Typcial Windows prompt <tt>C:\Users\Owner</tt> &nbsp;&nbsp; (you may have a different name)</li>
								</ul>
								The prompt is the place to type textual commands. Try this command and you will see the <b><i>path</i></b> that shows your current location in the terminal:
								<ul>
									<li>On a Mac: <tt>pwd</tt></li>
									<li>On Windows: <tt>cd</tt></li>
									<li>The path is simply the folders in which you're currently located. Each OS formats it slightly differently</li>
								</ul>
								You can <b>see the <i>contents</i> of your current location</b> with these commands, try the appropriate one:
								<ul>
									<li>On a Mac: <tt>ls</tt></li>
									<li>On Windows: <tt>dir</tt></li>
									<li>If you look through those listings, you should see that <tt>Desktop</tt> is contained in your current directory. (The term "directory" is simply a synonym for "folder.")</li>
								</ul>
								To <i><b>navigate</b></i> to a new directory, use the <tt>cd</tt> command, followed by a space, followed by the directory name. <i>It <b>is</b> case-sensitive</i>:
								<ul>
									<li>On a Mac: <tt>cd Desktop</tt></li>
									<li>On Windows: <tt>cd Desktop</tt></li>
								</ul>
								In this new directory, again try the commands to <b>(1) print your current path</b> and <b>(2) list the contents of the current location: </b>
								<ul>
									<li>On a Mac: <tt>pwd</tt> &nbsp; then &nbsp; <tt>ls</tt></li>
									<li>On Windows: <tt>cd</tt> &nbsp; then &nbsp; <tt>dir</tt></li>
								</ul>
								Try this!
								<ul>
									<li>Create a new folder in the usual (windowing-system) way on your desktop (through a menu).</li>
									<li>Give it a distinctive name (such as <tt>cs101</tt>).</li>
									<li>Then, confirm that the new folder appears in the newly-listed contents:
										<ul>
											<li>Again, On a Mac: <tt>ls</tt></li>
											<li>Or, On Windows: <tt>dir</tt></li>
										</ul>
									</li>
								</ul>
								<b>Getting around: going "up" one folder or directory.</b> The parent, containing folder is named <tt>..</tt> (two dots). Try moving "up" one folder with:
								<ul>
									<li>On a Mac: <tt>cd ..</tt></li>
									<li>On Windows:   <tt>cd ..</tt></li>
								</ul>
								<b>Check your current directory.</b> Again, check where you are with <tt>pwd</tt> or <tt>cd</tt>:
								<ul>
									<li>On a Mac: <tt>pwd</tt></li>
									<li>On Windows: <tt>cd</tt></li>
								</ul>
								<b>Tab completion!</b> If you hit tab, the command-line will try to "finish your thought". To move back to the Desktop, try using tab-completion:
								<ul>
									<li>On a Mac: <tt>cd Des</tt> then hit <tt>tab</tt></li>
									<li>On Windows: <tt>cd Des</tt>  then hit <tt>tab</tt></li>
								</ul>
								<b>Up-ARROW (super helpful!).</b>Hitting up-arrow will bring back previous commands, both in Python and in the shell. Try it!:
								<ul>
									<li> On a Mac: Type <i>up-arrow</i>, <i>up-arrow</i>, <i>up-arrow</i> to return to the command <tt>cd ..</tt></li>
									<li> On Windows: Type <i>up-arrow</i>, <i>up-arrow</i>, <i>up-arrow</i> to return to the command <tt>cd ..</tt></li>
								</ul>
								<b>Up-ARROW challenge (not a deep challenge)).</b> Use the up-arrow to get back to the <tt>cd Desktop</tt> command then hit enter to return to the Desktop:
								<ul>
									<li>Use tab-completion and up-arrow<ul>
									<li>They can make command-line interactions even <em>more</em> efficient than using the mouse  (at times; for some things)</li>
								</ul>
						`	</p>
							<p>
							  	You're ready for Python! See if your computer knows where Python is by typing that command at the terminal:
							  	<ul>
									<li> On a Mac: <tt>python</tt></li>
									<li> On Windows: <tt>python</tt>
										<ul>
											<li> If you've installed Python and it can't find it (usually Windows 10):</li>
											<p>

											On Windows 10, it seems that Anaconda does not include its location in a place Windows can find it.

											To remedy this:
											<ul>
											<li>Open Windows File Explorer </li>
											<li>Find your Anaconda folder. It may be in C:\Users\YourName\Anaconda </li>
											<li>To check, inside that folder, there will be a file named python.exe (you may need to scroll down)</li>
											<li>Click in the File Explorer box, windows will let you copy (control-c) the pathname</li>
											<li>Then, Google for add folder to windows path</li>
											<li>Follow Google's instructions, through the Windows control panel to the path-editing textbox</li>
											<li>You might feel like you've drilled through several decades of Windows interfaces. You have.</li>
											<li>In that path-editing textbox, hit the right-arrow key to put the cursor at the far right</li>
											<li>Then, type a semicolon ;</li>
											<li>Then, paste or type the pathname at which your Anaconda Python is located, e.g., C:\Users\YourName\Anaconda</li>
											<li>You may need quotes around it if the path has spaces in it</li>
											<li>Hit OK to all of the dialog boxes.</li>
											<li>Close that ConEmu? shell and start another - try running python from it.</li>
											<li>Hopefully, it works now!</li>
											<li>Good luck - ask for help on this!</li>
											</ul>
											</p>



										</ul>
									</li>
								</ul>
								If you see the Python header <font size="-1"><tt>(Python 2.7.10 | Anaconda 2.3.0, etc.)</tt></font> and, then, the prompt of three greater-than signs <tt>&gt;&gt;&gt;</tt>, you're set!
							</p>
							<p>
								Oh wait! First you need to be able to get <i><b>out</b></i> of Python:
								<ul>
									<li> On a Mac: <i>control-d</i> or, more verbosely, <tt>quit()</tt>
									<ul>
										<li>Note that it's <i>really</i> the control key, not the command key.</li>
										<li>If you accidentally hit command-d, you can unspilt your window with command-shift-d</li>
									</ul>
									<li>On Windows: <i>control-d</i> or, more verbosely, <tt>quit()</tt></li>
								</ul>
							</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" role="tab" id="headingFive">
						<h5 class="mb-0">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
								Trying out Python at the Python shell
							</a>
						</h5>
					</div>
					<div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
						<div class="card-block">
							<p>
								Now that you have Python working, try out the language in its fundamental form: <i>at the Python shell</i>
								<ul>
									<li>Again, be sure to arrange your windows so that you can see the entirety of the browser and your shell (or terminal) windows.</li>
									<li> Start Python (again) in the terminal window.</li>
									<li> You should see a <i>prompt</i> of something like this <tt> &gt;&gt;&gt; </tt>.</li>
									<li> In general, this "shell" is an area for experimenting with the Python language.
										<ul>
											<li> The "prompt" tells you that Python is ready to go.</li>
											<li> You might try <tt>6*7</tt> as a first computation at the prompt.</li>
											<li><i><b>Caution</b></i>: deep wisdom may result.</li>
										</ul>
									</li>
								</ul>
							</p>
							<p>
								If you everything is working so far, try some larger computations&#8230;
								<ul>
									<li>
										Try computing a googol (ten to the hundredth power). Google is (loosely) named for this number.
										<ul>
											<li> The power operator in Python is two asterisks <tt>**</tt>.</li>
											<li> So, at the prompt you would type<br><br>&nbsp;&nbsp;<tt>10**100</tt></li>
											<li> You might notice the <tt>L</tt> at the end of the result -- this is Python's indication that this is a <tt>L</tt>ong number.</li>
										</ul>
									</li>
								</ul>
							</p>
							<p>
								(<i>Not actually a good idea</i>)</b>&nbsp;&nbsp;&nbsp; If you're feeling reckless or angry at your computer, you can crash Python (and maybe your
								machine) by asking it to compute a googolplex (ten to the googol power). It won't work. In fact, this really is <i><b>not</b></i> such a good idea:
								you will likely have to kill and restart at least Python, and/or your computer might slow down frustratingly in the meantime.  But, it does show
								that computers' numeric limits are easily reached!
							</p>
							<p>
								Next type or paste this line of Python code:
								<ul>
									<li><tt>print "Zero is", 4+4-4-4</tt></li>
									<li> You should see the output <tt>Zero is 0</tt></li>
									<li> Notice that you used exactly four fours to create the numeric value <tt>0</tt> here. Extending that is the challenge in this week's lab</li>
								</ul>
							</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" role="tab" id="headingSix">
						<h5 class="mb-0">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
								Trying out Python from a <i><b>file</b></i>
							</a>
						</h5>
					</div>
					<div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix">
						<div class="card-block">
							<p>
								This is about running code <i><b>in a file</b></i>. If you're on a Lab Mac, you can get to emacs and sublime as follows:
								<ol>
									<li>Click on the desktop</li>
									<li>From the <i>Go</i> menu in the upper left, choose <i>Applications</i></li>
									<li>Double-click the first item in that folder, <i>Additional Applications</i></li>
									<li>Double-click the <i>Text</i> folder</li>
									<li>Then, double-click either Sublime or Emacs (or your favorite other text editor)</li>
									<li>If you're on your own machine, start your editor!</li>
									<li>Either way, create a new empty file using your favorite text editor.
										<ul>
											<li>Don't use Word or Pages or any <i>word processor</i>: word processors format things beautifully</li>
											<li>But they <i>don't</i> provide direct access to the actual contents of the file</li>
										</ul>
									</li>
								</ol>
							</p>
							<p>
								Lots of special characters carry around the formatting information. All programming languages use raw text (strings of characters): text-editors
								are the right tools.  You may not need it, but here's a bit of elaboration on <a href="https://www.cs.hmc.edu/twiki/bin/view/CS5/CreatingPlainTextFilesInAnyOS" target="_blank">
								creating plain-text files in Sublime Text</a>.
							</p>
							<p>
								Into your new file type or paste
								<pre>
									# Lab 0
									# Filename:  hw0pr1.py
									#
									#
									# Name:
									#

									from math import *

									print "Zero is", 4+4-4-4
								</pre>
							</p>
							<p>
								<ul>
									<li>Save that file as <tt>hw0pr1.py</tt> <b>on your Desktop</b>.</li>
									<li>Make sure that the Desktop is where your terminal-window session is currently resting&#8230;</li>
									<li> Also, you do need to type the <tt>.py</tt> extension</li>
								</ul>
								When you save it with a <tt>.py</tt> extension (as it's called), you will see the Python source code colorize. This is also called </i>syntax
								highlighting</i>.  If yours doesn't colorize, ask. It's important to have those cues as to the structure of your programs.
							</p>
							<p>
								<b>Windows users</b></font>: please show all filename extensions!
							</p>
							<p>
								If you're on Windows, we ask that you turn <b>on</b> the view of file extensions (such as <tt>.py</tt>, <tt>.txt</tt>, <tt>.doc</tt>, and so on):
								at least for your semester in CS101. <i>It can be very confusing if windows is hiding the extensions</i>, because the <tt>.py</tt> or <tt>.txt</tt>
								extension needed may, or may not, be there.  Also, the submission system needs it there.  If your Windows' folders are not showing file extensions
								for you, please <a href="http://windows.microsoft.com/en-us/windows/show-hide-file-name-extensions#show-hide-file-name-extensions=windows-7">enable
								all file extensions by following the directions on this page</a>.
							</p>
							<p>
								Arrange things!
							</p>
							<p>
								Try to arrange and resize  your windows so that you can see the browser (these instructions), the text editor (maybe Sublime), and the terminal all
								at once. Here's one possibility: <br>
								<img src="../img/miseenplace.png" height="400"><br>
								It's <b>amazing</b> how much more efficient you can be when you don't need to click-through to different windows!  I usually have the browser on one
								side and each of the other two taking half of the other side. If you don't need the browser, having the terminal/editor split the screen is a good
								idea&#8230;
							</p>
							<p>
								<b>Running a file</b>!
							</p>
							<p>
								To run your file, go back over to the terminal. Leave Python, if you're in it. Type <tt>python hw0pr1.py</tt>, this should re-enter Python and run
								the file hw0pr1.py. If all goes well, the program should run and you should see the output. If not, please ask!
							</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" role="tab" id="headingSeven">
						<h5 class="mb-0">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
								Your task: <i>four fours</i>
							</a>
						</h5>
					</div>
					<div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven">
						<div class="card-block">
							<p>
								The <b>four fours challenge</b>! Now, add several more lines similar to this one so that you compute <b>eleven of the 14 values</b> from <tt>0</tt>
								through <tt>14</tt> using <i><b>exactly four fours</b></i>.  You should use Python's arithmetic operations:
								<ul>
									<li><tt>+</tt> &nbsp;&nbsp; addition</li>
									<li><tt>-</tt> &nbsp;&nbsp; subtraction or negation</li>
									<li><tt>*</tt> &nbsp;&nbsp; multiplication</li>
									<li><tt>/</tt> &nbsp;&nbsp; division</li>
									<li><tt>(</tt> &nbsp; <tt>)</tt> &nbsp;&nbsp; parentheses for grouping</li>
									<li><tt>**</tt> &nbsp;&nbsp; power</li>
								</ul>
							</p>
							<p>
								You may also use <tt>44</tt> or <tt>4.4</tt>, which count as two fours, or <tt>.4</tt>, which counts as one four.  See below for two more allowable
								operations, both in the <tt>math</tt> library.
							</p>
							<p>
								Here are what the results, <i>but not the source code</i>, will look like. <br>Remember you need only 11 of the 14:
								<pre>Zero is 0
									One is 1
									Two is 2
									Three is 3
									Four is 4
									Five is 5
									Six is 6
									Seven is 7
									Eight is 8
									Nine is 9
									Ten is 10
									Eleven is 11
									Twelve is 12
									Thirteen is 13
									Fourteen is 14
								</pre>
							</p>
							<p>
								You may find the four fours game addicting, or frustrating, or both! <b>Hint</b>: the power operator is helpful! There is a surprisingly long
								tradition of the four-fours puzzle. For example, here's an excerpt from a Scientific American article by Martin Gardner about it:
								<br> <img src="./CS5Fall2015 - Orientation_files/fourfours.png" alt="fourfours.png" width="313" height="291">
							</p>
							<p>
								By the way, factorial and square root, they're there, too. Here's how to use them:
								<ul>
									<li>Include <tt>from math import *</tt> at the top of your file (under the header comments)</li>
									<li>Then use <tt>sqrt(4)</tt> to obtain 2 (counts as one 4)</li>
									<li>And use <tt>factorial(4)</tt> to obtain 24 (counts as one 4)</li>
									<li>Here's an example of what this might look like:
										<pre>#
											#

											from math import *

											print "Twenty-four is", factorial(4) + sqrt(4)*(4-4)
										</pre>
									</li>
								</ul>
							</p>
							<p>
								<i>Extra credit</i>:  feel free to go further than 14, if you'd like.
							</p>
							<p>
								We don't want to encourage it too much (there are other things to do!), but the graders will likely assign a couple of extra points if you get
								addicted! The afternoon lab discovered that <tt>.4</tt>, four tenths, is needed to create 33 (wow)!
							</p>
							<p>
								<h4>Submitting your <tt>hw0pr1.py</tt> file</h4>
							</p>
							<p>
								Once you have 11 of the 14, you're ready to submit.  The name of your file matters! Please double-check that it's <tt>hw0pr1.py</tt> that's a one
								<tt>1</tt>, not a lower-case.
							</p>
							<p>
								To submit your file, you will want to go to the <a href="https://fairfield.blackboard.com" target="_top">https://fairfield.blackboard.com</a>.
								Best to open this link in another tab, so that these directions are still visible. You probably didn't partner with anyone on this problem,
								so don't indicate a partner.  If you do work with a partner on a future problem, there is a dialog to allow you to indicate a partner. You and
								your partner only need to submit one time: you will both then have the same file submitted it will be graded together.
							</p>
							<p>
								<b>Important!</b> if you ever want to submit a better/newer version of a file before an assignment deadline, you can do so.  All of the versions
								are kept, but only the last version is graded. You can download your file from the submission site, as well.
							</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" role="tab" id="headingEight">
						<h5 class="mb-0">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
								Lab's not over yet! Running an interactive program...
							</a>
						</h5>
					</div>
					<div id="collapseEight" class="collapse" role="tabpanel" aria-labelledby="headingEight">
						<div class="card-block">
							<p>
								To be ready to complete the rock-paper-scissors problem, try out an <i>interactive</i> Python program...
							</p>
							<p>
								Next, create a new file, named <tt>hw0pr2.py</tt>, and paste in the following starting code:
								<pre>#
									# hw0pr2.py
									#
									# Name(s):
									#

									# here is an interactive program:

									import time             # includes a library named time
									import random        # a random library

									name = raw_input('Hi...what is your name? ')
									print

									if name == 'Geoff' or name == 'Eliot' or name == 'Ran':
										print 'I\'m "offline" Try later.'

									elif name == 'Zach':
										print 'Zach!  Efron? Quinto? Galifianakis?'
										time.sleep(1)
										print 'No?'
										time.sleep(1)
										print 'Meh.'

									else:
										print 'Welcome,', name
										my_choice = random.choice( ['rock','paper','scissors'] )
										print 'By the way, I choose ', my_choice
								</pre>
							</p>
							<p>
								Run the program simply to get a sense of how interaction works at the command-line.  To see how Python handles errors, try removing one of the
								two equals signs in the <tt>elif</tt> line, so that it reads <tt>elif name = 'Zach'</tt>. Python will tell you there is a "syntax error" and give
								you a chance to fix it.  Make other edits to the program so that it prints a different message if the user enters your name (or another name).  Be sure to run it after you
								make changes to try it out
							</p>
							<p>
								<b>Questions? Problems?</b> Flag us down! Or ask whoever's next to you, if you'd like.
							</p>
							<p>
								You <i>don't</i> need to submit this <tt>hw0pr2.py</tt> file, ;at least, not yet.  However, it is ready to evolve into a full rock-paper-scissors game.
								If you'd like to continue on to do that, <a href="homework0.php" target="_blank">head to hw0 problem 2</a>
							</p>
							<p>
								<h4>Lab's complete!</h4>
							</p>
							<p>
								<b>Optional</b></i>&#8212;working further into homework 0...
							</p>
							<p>
								If everything has worked smoothly (at least eventually!) you're finished with Lab 0!
							</p>
							<p>
								Or, if you're in a groove, you're welcome to continue to the next problem(s) on the week's hw:
								<ul>
									<li><a href="homework0.php">Homework0</a> hw0pr2 is rock-paper-scissors</li>
									<li>hw0pr3 and hw0pr4 are Picobot problems, we will talk about those later</li>
								</ul>
							</p>
							<p>
								<h4><a name="That_s_It"></a><a name="That_s_It_"></a> That's It! </h4>
							</p>
							<p>
								Let us know if you have any questions about any of this or about the CS department in general. Good luck with CS101 and with all of your classes
								this semester!
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require '../views/footer.php'; ?>
	</body>
</html>