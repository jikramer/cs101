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
		  <li class="breadcrumb-item"><a href="homework0.php">Homework 0</li>
		  <li class="breadcrumb-item active">Homework 0: Picobot</li>
		</ol>		
		<div class="container-fluid">
			<a name="top"></a>
			
			<?php require '../views/announcement.php'; ?>
			
			<div class="page-header">
				<h3>CS 101 - Homework 0: Picobot</h3>
			</div>
		</div>
		<div class="container-fluid">
			<p>			
				<b>Problems 3 & 4 due:</b> 11:59pm on Monday, September 11, 2017
			</p>
			<p>
				<b>Submission:</b> submit your solutions at <a href="https://fairfield.blackboard.com/" target="_blank">https://fairfield.blackboard.com/</a>
			</p>
			<div id="accordion" role="tablist" aria-multiselectable="true">
				<div class="card">
					<div class="card-header" role="tab" id="headingOne">
						<h5 class="mb-0">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Introduction to Picobot
							</a>
						</h5>
					</div>
					<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
						<div class="card-block">
							This problem explores a simple "robot," named "picobot," whose goal is to completely traverse its environment.  Picobot starts at a <i>random</i> 
							location in a room&mdash;you don't have control over Picobot's initial location. The walls of the room are blue; picobot is green, and the empty area is 
							white. Each time picobot takes a step, it leaves a grey trail behind it. When Picobot has completely explored its environment, it stops automatically.
							<br/><img src="../img/pico1.jpg" alt="pico1.jpg" width='50%' /><br/>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingTwo">
							<h5 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
									Picobot Surroundings
								</a>
							</h5>
						</div>
						<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="card-block">
								<p>
									Not surprisingly, picobot has limited sensing power. It can only sense its surroundings immediately to the north, east, west, and south of it.
									For example: 
									<br/><img src="../img/pico2.jpg" alt="pico2.jpg" width='100%' /><br/>
									In the above image, Picobot sees a wall to the north and west and it sees nothing to the east or south. This set of surroundings would be represented 
									as follows:
								</p>
								<p>
									<pre>NxWx</pre>
									The four squares surrounding picobot are always considered in NEWS order: an <tt>x</tt> represents empty space, the appropriate direction letter 
									(<tt>N</tt>, <tt>E</tt>, <tt>W</tt>, and <tt>S</tt>) represents a wall blocking that direction. Here are all of the possible picobot surroundings:
									<br/><img src="../img/pico3.jpg" alt="pico3.jpg" width='100%' /></a><br/>
								</p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingThree">
							<h5 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
									Piobot states
								</a>
							</h5>
						</div>
						<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="card-block">
								<p>
									Picobot's memory is also limited. In fact, it has only a single value from 0 to 99 available to it. This number is called picobot's <b>state</b>. 
									In general, "state" refers to the relevant context in which computation takes place. Here, you might think of each "state" as one piece&mdash;
									or behavior&mdash;that the robot uses to achieve its overall goal.
								</p>
								<p>
									Picobot always begins in state 0. The state and the surroundings are all the information that picobot has available to make its decisions!
								<p /> 
							</div>
						</div>						
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingFour">
							<h5 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
									Picobot Rules
								</a>
							</h5>
						</div>
						<div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
							<div class="card-block">
								<p>
									Picobot moves according to a set of rules of the form <tt>StateNow&nbsp;Surroundings&nbsp;-&gt;&nbsp;MoveDirection&nbsp;NewState</tt>
								</p>
								<p>
									For example, <tt>&nbsp;0&nbsp;xxxS&nbsp;-&gt;&nbsp;N&nbsp;0</tt> is a rule that says "if picobot starts in state <tt>0</tt> and sees the 
									surroundings <tt>xxxS</tt>, it should move <tt>N</tt>orth and stay in state <tt>0</tt>." The <tt>MoveDirection</tt> can be <tt>N</tt>, 
									<tt>E</tt>, <tt>W</tt>, <tt>S</tt>, or <tt>X</tt>, representing the direction to move or, in the case of <tt>X</tt>, the choice not to move 
									at all.
								</p>
								<p>
									If this were picobot's only rule and if picobot began (in state <tt>0</tt>) at the bottom of an empty room, it would move up (north) one 
									square and stay in state <tt>0</tt>. However, <b>picobot would not move any further</b>, because its surroundings would have changed to 
									<tt>xxxx</tt>, which does not match the rule above.
								</p>
							</div>
						</div>						
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingFive">
							<h5 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
									Picobot wildcards 
								</a>
							</h5>
						</div>
						<div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
							<div class="card-block">
								<p>
									The asterisk <tt>*</tt> can be used inside surroundings to mean "I don't care whether there is a wall or not in that position." For example, 
									<tt>xE**</tt> means "there is no wall North, there <i><b>is</b></i> a wall to the East, and there may or may not be a wall to the West or South."
								</p>
								<p>
									As an example, the rule <tt>&nbsp;0&nbsp;x***&nbsp;-&gt;&nbsp;N&nbsp;0</tt> is a rule that says "if picobot starts in state <tt>0</tt> and sees 
									<b>any surroundings without a wall to the North</b>, it should move <tt>N</tt>orth and stay in state <tt>0</tt>." If this new version (
									with wildcard asterisks) were picobot's only rule and if picobot began (in state <tt>0</tt>) at the bottom of an empty room, it would first see 
									surroundings <tt>xxxS</tt>. These match the above rule, so picobot would move <tt>N</tt>orth and stay in state 0. Then, its surroundings would be 
									<tt>xxxx</tt>. These <i><b>also</b></i> match the above rule, so picobot would again move <tt>N</tt>orth and stay in state 0. In fact, this 
									process would continue until it hit the "top" of the room, when the surroundings <tt>Nxxx</tt> no longer match the above rule.
								</p>
							</div>
						</div>						
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingSix">
							<h5 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
									Comments
								</a>
							</h5>
						</div>
						<div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix">
							<div class="card-block">
								<p>
									Anything after the pound sign (<tt>#</tt>) on a line is a comment (as in python). Comments are human-readable explanations of what is going on, 
									but ignored by picobot. Blank lines are ignored as well.
								</p>
							</div>
						</div>						
					</div>					
					<div class="card">
						<div class="card-header" role="tab" id="headingSeven">
							<h5 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
									Picobot example
								</a>
							</h5>
						</div>
						<div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven">
							<div class="card-block">
								<p>
									Consider the following set of rules:
<pre>
# state 0 goes N as far as possible
0 x*** -> N 0   # if there's nothing to the N, go N
0 N*** -> X 1   # if N is blocked, switch to state 1

# state 1 goes S as far as possible
1 ***x -> S 1   # if there's nothing to the S, go S
1 ***S -> X 0   # otherwise, switch to state 0
</pre>
									Recall that picobot always starts in state 0.  Picobot now consults the rules from <em>top</em> to <em>bottom</em> until it finds the first rule 
									that applies.  It uses that rule to make its move and enter its next state.  <font color="darkgreen">It then starts all over again, looking at 
									the rules and finding the first one from the top that applies.
								</p>
								<p>
									In this case, picobot will follow the first rule up to the "top" of its environment, moving north and staying in state <tt>0</tt> the whole time.  
									Eventually, it encounters a wall to its north.  At this point, the topmost rule no longer applies.  However, the next rule "0 N*** -&gt; X 1" does 
									apply now!  So, picobot uses this rule which causes it to stay put (due to the "X") and <i><b>switch to state <tt>1</tt></b></i>. Now that it is 
									in state <tt>1</tt>, neither of the first two rules will apply.  Picobot follows state <tt>1</tt>'s rules, which guide it back to the "bottom" of 
									its environment. And so it continues&hellip;.
								</p>
							</div>
						</div>						
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingSeven">
							<h5 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
									Picobot assignment
									
								</a>
							</h5>
						</div>
						<div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven">
							<div class="card-block">
								<p>
									For this assignment, your task is to design two different sets of picobot rules.  Hw 0, problem 3</b>: one set that will allow picobot to 
									completely cover an empty square room.  Remember to click on the "Enter rules for Picobot" before you try to run picobot. You need to copy your 
									rules into a plain-text <tt>.txt</tt> file on your computer!
									<ul>
										<li> For the empty-room, be sure to name it <tt>hw0pr3.txt</tt></li> 
										<li> For the maze, be sure to name it <tt>hw0pr4.txt</tt></li>
									</ul> 
								</p>
								<p>
									Remember that your solutions must work from <b>arbitrary starting positions</b> within the environment.
								</p>
							</div>
						</div>						
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingEight">
							<h5 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
									Optional extra credit
								</a>
							</h5>
						</div>
						<div id="collapseEight" class="collapse" role="tabpanel" aria-labelledby="headingEight">
							<div class="card-block">
								<p>
									At heart, CS fundamentally tries to answer questions of complexity: to show that problems are easier than initially thought&mdash;or, sometimes, 
									to prove that they <b>can't</b> be handled with fewer resources. You might think about how <i>efficient</i> your solutions are&mdash;both in terms
									of the number of states used and in terms of the number of rules. There are other ways to measure efficiency as well (e.g., speed).
								</p>
								<p>
									For optional extra credit, try to create as efficient a solution as possible for the maze-solving set of rules. That is:
									<ul>
										<li> For problem 3 (the empty room), see if you can use <i>only 6 rules</i> [+2 points]</li> 
										<li> For problem 4 (the maze), see if you can use <i>only 8 rules</i> [+3 points]</li> 
										<li> You may also submit problem 5 (<tt>hw0pr5.txt</tt>), [+5 points]</li>
									</ul>
								</p>
								<p>
									With the Picobot rules for the "stalactite room" (with any number of rules): 
									<br/><img src="../img/picobotExCr.png" alt="picobotExCr.png" width='102' height='103' /><br/>
									We don't (yet) know the minimum number of rules for that environment&hellip;!								
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
