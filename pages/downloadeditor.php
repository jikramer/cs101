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
		  <li class="breadcrumb-item">Python</li>
		  <li class="breadcrumb-item active">Download IDE</li>
		</ol>
		
		<div class="container-fluid">
			<a name="top"></a>
			
			<?php require '../views/announcement.php'; ?>
			
			<div class="page-header">
				<h3>CS 101 - Download Python Editor to Your Computer</h3>
			</div>
		</div>
		<div class="container-fluid">
			<p>			
				CS 101 will use a slightly different set of software than in some previous semesters. At least as a default, you'll use Python - our version is the 
				Anaconda scientific distribution (including Python 2.7.10).  This version is a command-line editor of Python code. If you're on a Mac, you can use the 
				built-in terminal; on Win, we will use ConEmu instead of the built-in terminal a text editor - not a Word processor - for editing your Python files. 
				Any texteditor is OK, but we a choice we especially recommend: Notepad++.
			</p>
			<div id="accordion" role="tablist" aria-multiselectable="true">
				<div class="card">
					<div class="card-header" role="tab" id="headingOne">
						<h5 class="mb-0">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								How to download this software
							</a>
						</h5>
					</div>
					<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
						<div class="card-block">	
							  The program is available for download at programs available 
							  <a href="https://www.continuum.io/downloads" target="_blank">https://www.continuum.io/downloads</a> for Mac and Windows.  Please select the
							  <b>Python 2.7 version</b>.
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" role="tab" id="headingTwo">
						<h5 class="mb-0">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								How to install this software?
							</a>
						</h5>
					</div>
					<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
						<div class="card-block">
							<p>
								This should work pretty much as you'd expect it to work.  For the Python installation, we recommend taking all of the default options.
							</p>
							<p>
								If you already have Python 3.x... No problem - if you install Anaconda's Python package, it can co-exist happily with other Python versions.  
								For CS 101, we'll be using Python 2.7, an older - but more widely supported - version of the language.
							</p>
							<p>								
								If you would like more direction on how to install and run the Python Software navigate to our 
								<a href="../pages/orientation.php">Python Documentation</a>!
							</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" role="tab" id="headingThree">
						<h5 class="mb-0">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								 Using ipython
							</a>
						</h5>
					</div>
					<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
						<div class="card-block">		
							Instead of <tt>python</tt>, most anaconda installations allow you to type <pre>ipython</pre> The advantage of this is that the <i>up-arrow</i> 
							remembers everything you'd typed, even <i><b>before</b></i> you quit <tt>ipython</tt>. Efficient!
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" role="tab" id="headingFour">
						<h5 class="mb-0">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								Make Sublime replace tabs with spaces
							</a>
						</h5>
					</div>
					<div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
						<div class="card-block">	
							<p>
								Python distinguishes between tabs and spaces - however, it counts a tab as a <i>single space</i>! Since a tab looks like several spaces, it's important 
								to have Sublime <i><b>replace</b></i> tabs with spaces, so that your code works in the way it looks! You can do this <i>one time</i> by clicking on 
								the <tt>Tab size: 4</tt> text at the bottom-right of the Sublime editor:
							</p>
							<p>
								<img src="../img/ts4.png" alt="ts4.png" width="87" height="24">
							</p>
							<p>
								and then choose <i>Convert Indentation to Spaces</i>, which will change that setting to <tt>Spaces: 4</tt>
							</p>
							<p>
								<img src="../img/sp4.png" alt="sp4.png" width="73" height="21">
							</p>
							<p>
								Even better - do this by default in your settings...You can also do this by default for all files. Go to the <i>Preferences</i> menu option... 
								From there, choose <i>Settings - User</i>
							</p>
								<img src="../img/settings.png" alt="settings.png" width="401" height="126">
							</p>
							<p>
								Or, if you feel you understand the syntax (it's a Python dictionary!), you can <i>add</i> these settings to your existing file. When you save these 
								settings, new files should now be in <tt>Spaces: 4</tt> mode, meaning that each time you type a tab, it's replaced by four spaces. Here's what 
								that tab/space menu will look like:
							</p>
							<p>
								<img src="../img/pic3.png" alt="pic3.png" width="261" height="297">
							</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" role="tab" id="headingFive">
						<h5 class="mb-0">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
								Using ipython notebook
							</a>
						</h5>
					</div>
					<div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
						<div class="card-block">
							<p>
								There are positives and negatives of every interface, but you are welcome to give those <i>ipython notebooks</i> a try for this lab. Here's how: </p>
								<ul>
									<li>Start a comannd-line terminal and, at the prompt, run <tt>ipython notebook</tt></li> 
									<li> That will start a local server on your machine, enabling you to use Python through your local machine's browser.</li> 
									<li>You won't need that window dircetly - but don't kill it! Simply minimize it to get it out of the way...</li> 
									<li>A new browser tab will open and you will see a listing of files (probably in your home directory)</li> 
									<li>At the <i><b>top left</b></i> of that new page, click on the <i>New</i> pulldown menu and choose <i>Python2</i></li> 
									<li>A new tab should open with a blank ipython notebook in which to work <br><img src="../img/p.png" alt="p.png" width="505"></li>
								</ul>
							</p>
							<p>
								The buttons are intuitive, but you may want one or two hints and shortcuts the essential shell commands still work! 
								<ul>
									<li><tt>pwd</tt> will print your current working directory - try it!</li> 
									<li><tt>cd Desktop</tt> will let you change directories - and tab-completion works (cool!)</li> 
									<li><tt>ls</tt> (not <tt>dir</tt>) will list all of the files in the current directory</li>
								</ul> 
								<ul>
									<li>alt-enter on Windows and option-enter on the Mac <i><b>runs</b></i> the current cell</li> 
									<li>you can re-edit and re-run a cell as you'd like</li> 
									<li>I tend to delete cells that are no longer useful (be careful - don't delete your functions!)</li> 
									<li> 
										a long-running process will show an asterisk <tt>*</tt> in the left-hand side's number field 
										<ul>
											<li>do not run another process without first killing a long-running one</li> 
											<li> if you do, you'll need to restart Python by choosing the <i>Kernel</i> menu and then <i>Restart</i></li>
										</ul> 
									</li>
									<li>
										You can load a file with the command <tt>execfile( 'hw3pr1.py' )</tt> Alternatively, you can paste all of <tt>hw3pr1.py</tt> into the first 
										cell and run it. One nice thing about this interface is that you can return to prior computations to fix things.
									</li>
									<li>Also, you can download the entire session as a Python file from <i>File</i> - <i>Download As</i> menu </li>
								</ul>
								<p>
									You'll see many other options, but we won't use those the <tt>ipynb</tt> option downloads a file that can be re-opened at a later time - 
									with all of the cells just as you left them...So, see if you like <i>ipython notebook</i>...
								</p>
								<p>
									Since this is a pilot run, we will still ask you to submit a plain-python <tt>hw3pr1.py</tt> for this week.  
									As noted above, you can paste the existing <tt>hw3pr1.py</tt> contents at the top of your notebook. Then you can edit it and test it as you go.
									Once you're finished, you can get a plain-python file from the <i>File</i> - <i>Download As</i> menu. From there, you can save it under any name 
									you'd like. In fact, if you click on the title, you can rename it <tt>hw3pr1</tt>, and you'll have the name correct already...
								</p>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>		
		<?php require '../views/footer.php'; ?>	
	</body>
</html>