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
		  <li class="breadcrumb-item active">Lab 1</li>
		</ol>
		
		<div class="container-fluid">
			<a name="top"></a>
			
			<?php require '../views/announcement.php'; ?>
			
			<div class="page-header">
				<h3>CS 101 - Lab 1</h3>
			</div>
		</div>
		<div class="container-fluid">
			<p>
				<b>Submission:</b> submit your solutions at <a href="https://fairfield.blackboard.com/" target="_blank">https://fairfield.blackboard.com/</a>
			</p>			
			<div class="card">
				<div class="card-block">
					<div class="card-text">
						<em>
							<b>Reminder about Lab problems</b>: If you complete the Lab problem(s) in the lab session (in which case you can leave when you are done) 
							OR you stay for the duration of the lab and make your best effort, you will receive full credit for the lab problem(s) on this week's homework.
						</em>
					</div>
				</div>
			</div>
			<div id="accordion" role="tablist" aria-multiselectable="true">
				<div class="card">
					<div class="card-header" role="tab" id="headingOne">
						<h5 class="mb-0">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Lab problems...  (there are 2)
							</a>
						</h5>
					</div>
					<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
						<div class="card-block">	
							<ol>
								<li>
									<a href="lab1-1.php">Lab 1, Problem 1 (<tt>hw1pr1.py</tt>):</a> Dealing with data in Python</a> Because this is problem #1 on the homework this week, you should store your
									work on this lab part in a file named <tt>hw1pr1.py</tt>.
								</li>
								<li> 
									<a href="lab1-2.php">Lab 1, Problem 2 (<tt>hw1pr2.py</tt>):</a> Functioning in Python</a> This one is problem 2 of the homework this week, so you'll store your work on 
									this lab part in a file named <tt>hw1pr2.py</tt>.
								</li>
							</ol> 
						</div>
					</div>
				</div>
			</div>
		</div>		
		<?php require '../views/footer.php'; ?>	
	</body>
</html>


