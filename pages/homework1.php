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
		  <li class="breadcrumb-item active">Homework 1: Patterns and Functions</li>
		</ol>
		
		<div class="container-fluid">
			<a name="top"></a>
			
			<?php require '../views/announcement.php'; ?>
			
			<div class="page-header">
				<h3>CS 101 - Homework 1: Patterns and Functions</h3>
			</div>
		</div>
		<div class="container-fluid">
			<p>			
				<b>All problems are due:</b> 11:59pm on Monday, September 18, 2017
			</p>
			<p>
				<b>Submission:</b> submit your solutions at <a href="https://fairfield.blackboard.com/" target="_blank">https://fairfield.blackboard.com/</a>
			</p>						
			<div class="card">
				<div class="card-block">
					<div class="card-text">	
						<h5>A Note About Extra Credit Problems</h5>
						<p>
							The extra credit problems are, of course, totally optional.  We provide them for two reasons.  First, it's a chance to earn a few more points on each homework.  
							Second -- and much more importantly -- these problems are fun and useful! for example, this week's second extra credit has you experimenting with reading files in 
							Python.
						</p>
						<p>
							We strive to keep the required workload in this class to a challenging but reasonable level -- we know you have many other classes, not to mention lives. But we 
							also want to give those of you who want (or need!) a little more CS in your lives a chance to work on some additional challenges.
						</p>
					</div>
				</div>
			</div>
			<div id="accordion" role="tablist" aria-multiselectable="true">
				<div class="card">
					<div class="card-header" role="tab" id="headingOne">
						<h5 class="mb-0">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Homework problems...(there are 4)
							</a>
						</h5>
					</div>
					<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
						<div class="card-block">
							<ol>				
								<li>
									 <a href="reading1.php">Problem 0: Reading</a> [5 points; individual] (<tt>hw1pr0.txt</tt>)
								</li>
								<li> 
									 <a href="lab1-1.php">Problem 1 (lab)</a>: Sequences and data [20 points; individual or pair] (<tt>hw1pr1.py</tt>)
								</li>
								<li> 
									 <a href="lab1-2.php">Problem 2 (lab)</a>: Function Fun! [25 points; individual or pair] (<tt>hw1pr2.py</tt>)
								</li>
								<li> 
									 <a href="homework1_functions.php">Problem 3: Fun with Functions!</a> [50+ points; individual or pair] (plus, 3 extra-credit problems) (<tt>hw1pr3.py</tt>)
								</li>
							</ol> 
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
									For each of these problems, you should be sure to name your file as indicated above. Then you should submit the file to our online submission server which is available 
									at <a href="https://fairfield.blackboard.com">https://fairfield.blackboard.com</a>.
								</p>
								<p>
									If you submitted <code>hw1pr1.py</code> and <code>hw1pr2.py</code> during the lab period, you will receive full	credit for those two problems (even if you didn't 
									finish). In this case, you will only need to submit the other problems. If you did not participate in lab, you should finish those two, as well.
								</p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingThree">
							<h5 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
									Working individually vs. working in pairs
								</a>
							</h5>
						</div>
						<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="card-block">
								<p>
									If you work in a group, the above guidelines hold for the pair. Also, the pair should make sure they work in the same physical location on the 
									same machine&#8212; if you're not working together, you're not working as a pair they contribute equally to the work they submit work that is 
									their own, just as noted above for individuals.
								</p>
								<p>
									If you have concerns or questions about this policy, feel free to email your instructor or stop by and chat.
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