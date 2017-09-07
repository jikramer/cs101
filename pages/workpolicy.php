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
		  <li class="breadcrumb-item active">Work Policy</li>
		</ol>

		<div class="container-fluid">
			<a name="top"></a>

			<?php require '../views/announcement.php'; ?>

			<div class="page-header">
				<h3>CS 101 - Work Policy</h3>
			</div>
		</div>
		<div class="container-fluid">
			<div id="accordion" role="tablist" aria-multiselectable="true">
				<div class="card">
					<div class="card-header" role="tab" id="headingOne">
						<h5 class="mb-0">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Lectures
							</a>
						</h5>
					</div>
					<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
						<div class="card-block">
							There are two 75-minute lectures per week.  Attendance at these lectures is important: during lecture, you will sometimes be asked to complete a short
							worksheet to get some initial practice with the material. Completion (not correctness) of these in-class exercises is part of your course grade.
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" role="tab" id="headingTwo">
						<h5 class="mb-0">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								Lab
							</a>
						</h5>
					</div>
					<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
						<div class="card-block">
							Each week you have the option to attend a lab session.  The labs are run by the course faculty and grutors (student graders/tutors).
							They provide a great opportunity for you to practice with new material on some fun problems in a supervised setting.
							Attendance at labs is not required, but we strongly encourage you to attend!
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" role="tab" id="headingThree">
						<h5 class="mb-0">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								Homeworks
							</a>
						</h5>
					</div>
					<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
						<div class="card-block">
							Each week you will be assigned a set of homework problems.  These problems will be due on <b>Monday evenings at 11:59pm</b>, unless otherwise indicated.
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" role="tab" id="headingFour">
						<h5 class="mb-0">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								Pair Programming/Partner programming
							</a>
						</h5>
					</div>
					<div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
						<div class="card-block">
							<ul>
								<li>
									We use the term <i><b>pair programming</b></i> to describe a team of two people working on a <i>single</i> computer to solve a problem together.
								</li>
								<li>
									We use the term <i><b>partner programming</b></i> when two people are working, <i>each on their own computer</i>, to solve a problem together.
								</li>
							</ul>
							<p>
								Typically, assignments contain one or more "individual" problems that each student must complete on their own. For the rest of the problems, you may complete them alone
								or with one other student.  If you choose to work with another student, you may <i>pair program</i> (one computer) or <i>partner program</i> (each with a computer).
								You and your partner will submit only one solution for each problem.
							</p>
							<p>
								If you choose to work with a partner, you must work together -- physically, in the same place -- for every problem that you do together. While you are working,
								the computer screen(s) should be visible to both people.  If pair programming, one person should type (the "driver"), while the other person observes,
								critiques and plans what to do next (the "navigator").   You should switch roles periodically, about every half-hour or so.  Your overall solution must be a true
								joint effort, equally owned, created, and understood by both students.
							</p>
							<p>
								Specifically, splitting up the problem(s) into parts and working on them separately is <i>not</i> permitted and violates both the letter and the spirit of the
								(and Fairfield University) honor code.
							</p>
							<p>
								In the event that you and your partner make some progress together but then are unable to complete the assignment together,
								you may send each other the code that you developed together and then split up to work individually on the remainder of the program.  You would then submit the problem
								individually, but should make a note along with the submission that this had happened. We expect that this will only occur in rare circumstances, such as when one member
								of the team falls ill.
							</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" role="tab" id="headingFive">
						<h5 class="mb-0">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
								Late Homework Policy
							</a>
						</h5>
					</div>
					<div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
						<div class="card-block">
							<p>
								Homework is due on the day indicated (Mondays, for fall 2017) at 11:59 PM. At the beginning of the semester you will receive three CS 5 <i>Euros</i>
								(which have been losing value recently, so we're are considering a switch to bitcoin...). Each "Euro" provides one 24-hour extension on any one
								homework assignment, i.e., a "late day."  If you submit your homework after the deadline, you will automatically be charged a CS 5 Euro.
							</p>
							<p>
								You do not need to tell us that you're using a "Euro" extension -- the submission system will notice that based on your submission time and
								"bill" your virtual account a Euro.  Homework that is more than 24 hours late or submitted after the deadline when no CS 5 Euros remain results
								in undefined behavior.
							</p>
							<p>
								In extreme circumstances (such as serious illness), if you require an additional extension or a longer extension, you should talk to both your
								instructor and the Dean of Students.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require '../views/footer.php'; ?>
	</body>
</html>