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
		  <li class="breadcrumb-item active">Homework 0</li>
		</ol>

		<div class="container-fluid">
			<a name="top"></a>

			<?php require '../views/announcement.php'; ?>

			<div class="page-header">
				<h3>CS 101 - Homework 0</h3>
			</div>
		</div>
		<div class="container-fluid">
			<p>
				<b>Problems 0-4 due:</b> 11:59pm on Monday, September 11, 2017
			</p>
			<p>
				<b>Submission:</b> submit your solutions at <a href="https://fairfield.blackboard.com/" target="_blank">https://fairfield.blackboard.com/</a>
			</p>
			<div class="card">
				<div class="card-block">
					<div class="card-text">
						<em>
							All homework assignments will have a mix of individual and pair-programming problems. For this assignment, you may work on all of the
							problems with one other student. This is completely optional&#8212;you may, of course, do all of the problems on your own if you wish.
							<br/><br/>
							If you work individually, the work you submit should be your own. You are encouraged to seek help from CS 5's instructors and student
							graders/tutors. You may also discuss problems with fellow students, but those discussions must not involve one person doing the work
							for another. This link on the <a href="workpolicy.php"> CS 101 assignment work policy</a> goes into more detail.
						</em>
					</div>
				</div>
			</div>
			<div id="accordion" role="tablist" aria-multiselectable="true">
				<div class="card">
					<div class="card-header" role="tab" id="headingOne">
						<h5 class="mb-0">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Five Problems
							</a>
						</h5>
					</div>
					<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
						<div class="card-block">
							<ol>
								<li>
									<a href="reading0.php">Problem 0: Reading and response</a> [5 points; individual] <tt>hw0pr0.txt</tt>
								</li>
								<li>
									<a href="orientation.php">Problem 1 is Lab 0: <i>Welcome to Python!</i> (this is Lab 0)</a> [20 points; individual] (filename: <tt>hw0pr1.py</tt>
								</li>
								<li>
									<a href="homework0_rps.php">Problem 2: Rock-Paper-Scissors</a> [25 points; individual or pair] <tt>hw0pr2.py</tt>
								</li>
								<li>
									<a href="homework0_picobot.php">Problem 3: Picobot (empty room)</a> [25 points; individual or pair] <tt>hw0pr3.txt</tt>
								</li>
								<li>
									<a href="homework0_picobot.php">Problem 4: Picobot (maze)</a> [25 points; individual or pair] <tt>hw0pr4.txt</tt>
								</li>
							</ol>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingTwo">
							<h5 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
									<b>Problem 5:</b> Extra-credit Picobot challenges
								</a>
							</h5>
						</div>
						<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="card-block">
								<ol>
									<li>
										Solving the empty room in as few rules as possible (6) &nbsp; <b>[worth +2 points]</b>
									</li>
									<li>
										Solving the maze in as few rules as possible (8) &nbsp; <b>[worth +3 points]</b>
									</li>
									<li>
										Problem 5 is solving the "stalactite" map that looks like this one (with any # of rules) &nbsp; <b>[worth +5 points]</b>
										<br/><img src="../img/picobotExCr.png" alt="picobotExCr.png" width="102" height="103"><br/>
									</li>
								</ol>
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
									same machine&#8212;if you're not working together, you're not working as a pair they contribute equally to the work they submit work that is
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
