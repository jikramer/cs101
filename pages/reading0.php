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
		  <li class="breadcrumb-item active">Reading 0</li>
		</ol>
		<div class="container-fluid">
			<a name="top"></a>

			<?php require '../views/announcement.php'; ?>

			<div class="page-header">
				<h3>CS 101 - Reading 0: [5 points; individual]</h3>
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
								Introduction to CS5's readings...
							</a>
						</h5>
					</div>
					<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
						<div class="card-block">
							<p>
								The readings are short excerpts from recent-ish news; they are relevant and interesting &mdash;at least to us! The readings may not relate <i>directly</i> to the technical
								topics that you will be learning in class; rather, their goal is to give you a chance to explore the many real-world facets of CS.  <b>Response</b>  We ask you to compose a
								response to each article. It can be short (4-5 sentences is great), but we hope you will engage with something in each article and put some thought into your response.
								These responses are worth about 5 points each week. You'll need to submit your response in a <tt>.txt</tt> plain-text file. For this reading, it should be named
								<tt>hw0pr0.txt</tt>. This way, you will have a copy of it on your own machine, as well.
							</p>
							<p>
								<b>Warning!</b></font> As noted in problem 0, the submission site will <b><i>not</i></b> let you submit a Microsoft Word file, an RTF (rich text format) file, or any
								other file except a plain-text <tt>.txt</tt> file. As we noted above, it's a <i><b>great</b></i> skill to be able to create plain-text <tt>.txt</tt> files. Here is a
								page with detailed instructions:
							</p>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingTwo">
							<h5 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
									Week 0, problem 0's article
								</a>
							</h5>
						</div>
						<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="card-block">
								<p>
									This week's article is about two fundamental facets of CS: language and thought.  It also relates the wonderful story of the Picobot-like human language Guugu Yimithirr!
									Here is the excerpt:  <a href="../docs/articles/language_shapes_snippet.pdf" target="_blank">Week 0's reading (pdf)</a> If the ideas pique your interest, you might read
									<a href="http://www.nytimes.com/2010/08/29/magazine/29language-t.html">the full NYTimes article</a> on whether and how language can shape human thought; it includes many
									other (non-geographic) examples, as well... .
								<p />
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingThree">
							<h5 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
									Week 0, problem 0's questions
								</a>
							</h5>
						</div>
						<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="card-block">
								<p>
									After you have read the above excerpt (or whole article), create a response to the article that addresses one or both of the following prompts in a plain-text file
									named <code>hw0pr0.txt</code>, which you should submit through the submissions system.
								<p/>
								<ol>
									<li>
										Have there been moments in which you felt that your language or another language "got in the way" of something you wanted to accomplish? That is, have you
										"bumped into a language's boundaries," in the manner suggested by the article? Elaborate briefly. <i>or</i>
									</li>
									<li>
										To what extent do artificial languages (such as Python or Picobot) have the ability to shape human thought, if at all?  Or are such languages fundamentally
										different from human ones, such as Guugu Yimithirr or English?
									</li>
								</ol>
								<p>
									You only need write a few sentences: a paragraph of 4-6 sentences certainly suffices. More is welcome, but the real goal is that your response shows you have thought
									about the article and added your own experience or insights to its ideas.
								<p />
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingFour">
							<h5 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
									Scoring the reading responses
								</a>
							</h5>
						</div>
						<div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
							<div class="card-block">
								<p>
									You may be wondering how these responses are scored. <a href="../docs/cs101_reading_grade_system.pdf" target="_blank">This PDF document lists our guidelines for scoring
									the reading responses... .</a>
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