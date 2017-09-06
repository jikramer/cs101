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
		  <li class="breadcrumb-item"><a href="homework1.php"> Homework 1: Patterns and Functions</a></li>
		  <li class="breadcrumb-item active">Reading and response</li>
		</ol>		
		<div class="container-fluid">
			<a name="top"></a>
			
			<?php require '../views/announcement.php'; ?>
			
			<div class="page-header">
				<h3>CS 101 - Homework 1: Reading and response [5 points; individual only]</h3>
			</div>
		</div>
		<div class="container-fluid">
			<p>			
				<b>All problems are due:</b> 11:59pm on Monday, September 18, 2017
			</p>
			<p>
				<b>Submission:</b> submit your solutions at <a href="https://fairfield.blackboard.com/" target="_blank">https://fairfield.blackboard.com/</a>
			</p>									
			<div id="accordion" role="tablist" aria-multiselectable="true">
				<div class="card">
					<div class="card-header" role="tab" id="headingOne">
						<h5 class="mb-0">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								The article
							</a>
						</h5>
					</div>
					<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
						<div class="card-block">
							<p>
								This week's article <title>The end of theory</title> comes from Wired and dovetails with its theme of <i>data</i> and its possibilities.
								Here is a link to <a href="http://www.wired.com/science/discoveries/magazine/16-07/pb_theory" target="_blank"> 
								http://www.wired.com/science/discoveries/magazine/16-07/pb_theory</a>. Here is a locally stored pdf if you'd prefer: 
								<a href="../docs/articles/end_of_theory.pdf" target="_blank">end_of_theory.pdf</a>
							</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" role="tab" id="headingTwo">
						<h5 class="mb-0">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
								The questions
							</a>
						</h5>
					</div>
					<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
						<div class="card-block">
							<p> 
								Anderson refers to one's "MySpace" page. This is a clear, if superficial, way in which this article (at less than a decade old) shows its age. 
								<ol>
									<li>
										What is a <b>deeper</b> way in which the ideas of this article betray thinking that has moved on since 2008? Contrast one of its ideas 
										with more recent thinking, which can be your own, others', or both.
									</li>
									<li>
										The article states that, whether in science or business, we "don't have to settle for models at all." Do you agree or disagree with 
										this statement? How? And why? Certainly feel free to articulate a more nuanced or hybrid view, if you'd like.
									</li>
								</ol>
							</p>
						</div>
					</div>	
				</div>
				<div class="card">
					<div class="card-header" role="tab" id="headingThree">
						<h5 class="mb-0">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
								Submission
							</a>
						</h5>
					</div>
					<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
						<div class="card-block">
							<p>
								After you have read the above article, write a response that addresses one or the other of the following questions. As with reading 0, please 
								be sure you name your file <tt>hw1pr0.txt</tt> - it should be a <i>plain-text</i> <tt>.txt</tt> file. Construct a paragraph (4-6 sentences is 
								fine) that responds to it. Use/extend (or alter/refute) ideas from the article!
							</p>
							<p>
								For each of these problems, you should be sure to name your file as indicated above. Then you should submit the file to our online submission server 
								which is available at <a href="https://fairfield.blackboard.com">https://fairfield.blackboard.com</a>.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>		
		<?php require '../views/footer.php'; ?>	
	</body>
</html>