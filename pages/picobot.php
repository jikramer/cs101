<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Picobot</title>
		
		<?php require '../references/libraries.php'; ?>		
		<script src="../js/picobotmaps.js"></script>
	</head>
	<body>	
		<?php require '../views/header.php'; ?>			
		<?php require '../views/topmenu.php'; ?>		
		
		<ol class="breadcrumb">
		  <li class="breadcrumb-item"><a href="home.php">Home</a></li>
		  <li class="breadcrumb-item">Python</li>
		  <li class="breadcrumb-item active">Picobot</li>
		</ol>
		
		<div class="container-fluid">
			<a name="top"></a>
			
			<?php require '../views/announcement.php'; ?>
			
			<div class="page-header">
				<h3>CS 101 - Picobot</h3>
			</div>
		</div>
		<div class="container">
			<div class="row">
			
				<!-- create the new drawing canvas  -->
				<table border="0">
					<thead>
						<tr>
							<th>&nbsp;</th>			
							<th>										
								<center><b>Picobot Rules</b></center>
							</th>										
						</tr>
					</thead>
					<tbody>
						<tr>
							<td valign="top" style="padding:0px 10px 0px 0px">
								<!-- Here, we build the board! Using sexy javascript! -->
								<script language="JavaScript" type="text/javascript">
									
									/////////////////////////////////////////////////////////////////////////////////////////////
									// Some horrible browsers do not support the javascript map function, so we add it back in!//
									/////////////////////////////////////////////////////////////////////////////////////////////
									if (!Array.prototype.map)
									{
										Array.prototype.map = function(fun /*, thisp*/)
										{
											var len = this.length;
											if (typeof fun != "function")
												throw new TypeError();

											var res = new Array(len);
											var thisp = arguments[1];
											for (var i = 0; i < len; i++)
											{
												if (i in this)
													res[i] = fun.call(thisp, this[i], i, this);
											}

											return res;
										};
									}
									/////////////////////////////////////////////////////////////////////////////////////////////
									/////////////////////////////////////////////////////////////////////////////////////////////
									
									var rows = 25
									var cols = 25
									var len = 20
									
									document.write('<div id="myCanvas" style="position: relative; height: '+rows*len+'px; width: '+cols*len+'px; top: 0px; left: 0px;">');
									for (var i=0;i<rows;i++)
									{
										for (var j=0;j<cols;j++)
										{
											document.write('<div id="r' + i + 'c' + j + '" style="position:absolute; top:' +len*i+ 'px; left:' +len*j+ 'px; width:' +len+ 'px; height:' +len+ 'px; background-color:white;" onmousedown="toggle_wall('+i+','+j+');"><\/div>');
										}
									}
									document.write('<\/div>');
									
								</script>								
								<form name="Controls">
									<table style="width: 100%; text-align: center;" border="0" cellpadding="2">
										<tbody>
											<tr>
												<td><input name="Go" value="Go" onclick="go();" type="button"></td>
												<td><input name="Stop" value="Stop" onclick="stop();" type="button"></td>
												<td><input name="Step" value="Step" onclick="update();" type="button"></td>
												<td><input name="Reset" value="Reset" onclick="stop();fullReset();" type="button"></td>
												<td><input name="Map-" value="&lt;--" onclick="stop();changeMap(-1);document.calc.mapi.value = getCMI();" type="button"> MAP 
												<input name="Map+" value="--&gt;" onclick="stop();changeMap(1);document.calc.mapi.value = getCMI();" type="button"></td>
											</tr>
										</tbody>
									</table>
									<table style="width: 100%; text-align: center; background-color: rgb(238, 238, 170);margin-top: 18px;">
										<tbody>
											<tr>
												<td><textarea readonly="readonly" name="state" id="state" rows="1" cols="3" size="10" style="overflow: hidden; text-align: center;"></textarea></td>
												<td><textarea readonly="readonly" name="surroundings" id="surroundings" rows="1" cols="5" style="overflow: hidden; text-align: center;"></textarea></td>
												<td><textarea readonly="readonly" name="progress" id="progress" rows="1" cols="10" style="overflow: hidden; text-align: center;"></textarea></td>	
											</tr>
											<tr>
												<td width="33%"> State </td>
												<td width="33%"> Surroundings </td> 
												<td width="33%"> Cells to go </td>
											</tr>
										</tbody>
									</table>
									<table style="width: 100%; text-align: center; background-color: rgb(238, 238, 170);">
										<tbody>
											<tr>
												<td><textarea name="currentrule" readonly="readonly" id="currentrule" rows="1" cols="30" style="overflow: hidden; text-align: center;"> </textarea></td>
												<td><textarea name="nextrule" readonly="readonly" id="nextrule" rows="1" cols="30" style="overflow: hidden; text-align: center;"> </textarea></td>
											</tr>
											<tr>
												<td> Previous Rule </td>
												<td> Next Rule </td>
											</tr>											
										</tbody>
									</table>
									<table style="width: 100%; text-align: center; background-color: rgb(238, 238, 170);">
										<tbody>
											<tr>
												<td><input name="West" value="West" onclick="stop();teleportRobot(&#39;W&#39;);" type="button"></td>
												<td><input name="East" value="East" onclick="stop();teleportRobot(&#39;E&#39;);" type="button"></td>
												<td> - Teleport Robot - </td>
												<td><input name="North" value="North" onclick="stop();teleportRobot(&#39;N&#39;);" type="button"></td>
												<td><input name="South" value="South" onclick="stop();teleportRobot(&#39;S&#39;);" type="button"></td>
											</tr>
										</tbody>
									</table>
								</form>
							</td>
							<td> <!-- right-hand side -->
								<form name="calc" method="post" action="https://www.cs.hmc.edu/picobot/picouploader.py">
									<table border="0">
										<tbody>
											<tr>
												<td>									
<textarea name="rules" id="rules" rows="16" cols="60" style="font-family: courier; font-size: 90%"># 
# Hashtag lines are optional comments # 
# state 0 with nothing N: go one step N
0 x*** -&gt; N 0   

# state 0 with something to the N: go W + into st 1 
# ** This will crash if picobot has a wall to the W! **
0 N*** -&gt; W 1 

# state 1 with nothing to the S: go one step S
1 ***x -&gt; S 1   

# state 1 with something to the S: stay put + into state 0
1 ***S -&gt; X 0
</textarea>
												</td>						
											</tr>
											<tr>							
												<td>
													<center>
														<input name="add" value="Enter rules for Picobot" onclick="stop();document.calc.mesg.value = computeRules(document.calc.rules.value);" type="button">&nbsp;
														<input name="mapi" value="0" type="hidden"> 
													</center>
												</td>							
											</tr>											
											<tr>											
												<td>
													<center>Be sure to hit "Enter rules" after making changes.</center>
												</td>											
											</tr>
											<tr>										
												<td>
													<br />
													<center><b>Messages</b></center>
													<textarea readonly="readonly" id="mesg" name="mesg" rows="10" cols="60" style="font-family: courier;"> </textarea>
												</td>								
											</tr>											
										</tbody>
									</table>
								</form>
							</td>			
						</tr>
					</tbody>
				</table>
			</div>
		</div>		
		<br />
		<?php require '../views/footer.php'; ?>		
		
		<!-- Here begins the picobot engine -->
		<script language="javascript" type="text/javascript">
			try
			{



			function drawOneSquare(r, c, hexcolor)
			{
				divName = 'r' + r + 'c' + c;
				document.getElementById(divName).style.backgroundColor = hexcolor;
			}

			var DEBUG = 0; // set to 0 to turn off debugging
			var TIMING_DELAY = 20;

			var MAXROWS = 25;
			var MAXCOLS = 25;

			var MAXCOOKIES = 625
			var cookies_remaining = MAXCOOKIES

			var COLORS = ["white","blue","lime","red","#808080","aaaaff","ff11dd"]
			var COOKIE_COLOR = 6
			var DONE_COLOR = 5
			var VISITED_COLOR = 4
			var ERROR_COLOR = 3
			var ROBOT_COLOR = 2
			var WALL_COLOR = 1
			var CLEAR_COLOR = 0

			function updateCellColor( r, c, colorIndex )
			{
				currentCells[r][c] = colorIndex;
				drawOneSquare(r,c,COLORS[colorIndex]);
			}

			// global variable for current cells
			var currentCells = Array(MAXROWS);

			// draw the map above...
			function drawMap( map )
			{
				currentCells = Array(MAXROWS);
				// map will be a 25x25 2d array
				for (var r = 0 ; r < MAXROWS ; ++r)
				{
					currentCells[r] = Array(MAXCOLS); // make the row
					for (var c = 0 ; c < MAXCOLS ; ++c)
					{
						if (r < map.length && c < map[0].length)
						{
							currentCells[r][c] = map[r][c];
							drawOneSquare(r,c,COLORS[map[r][c]]);
						}
						else
						{
							currentCells[r][c] = CLEAR_COLOR;
							drawOneSquare(r,c,COLORS[CLEAR_COLOR])
						}
					}
				}
			}


			// Toggles the existance of a wall in a particular location
			function toggle_wall(row,col)
			{
				if (currentCells[row][col] != ROBOT_COLOR);
				{
					if (currentCells[row][col] != WALL_COLOR)
						updateCellColor(row,col,WALL_COLOR);
					else if (currentCells[row][col] == WALL_COLOR)
						updateCellColor(row,col,CLEAR_COLOR);
				}
					clearVisited();
			}

			// counts any particular type of square in a map
			function countSquares( m, colorIndex )
			{
				var total = 0;

				for (var r = 0 ; r < MAXROWS ; ++r)
				{
					for (var c = 0 ; c < MAXCOLS ; ++c)
					{
						if (m[r][c] == colorIndex)
						{
							++total;
						}
					}
				}
				return total;
			}

			// clears the map of all visitted cells
			function clearVisited()
			{
				for (var r = 0 ; r < MAXROWS ; ++r)
				{
					for (var c = 0 ; c < MAXCOLS ; ++c)
					{
						if (currentCells[r][c] == VISITED_COLOR)
						{
							currentCells[r][c] = CLEAR_COLOR;
							drawOneSquare(r,c,COLORS[CLEAR_COLOR]);
						}
					}
				}
				cookies = [];
				cookies_remaining = MAXCOOKIES;
				updateProgress;
			}

			// blanks the map and resets the robot
			function fullReset()
			{
				for (var r = 0 ; r < MAXROWS ; ++r)
				{
					for (var c = 0 ; c < MAXCOLS ; ++c)
					{
						if (currentCells[r][c] == VISITED_COLOR || currentCells[r][c] == ROBOT_COLOR
									  || currentCells[r][c] == ERROR_COLOR || currentCells[r][c] == COOKIE_COLOR)
						{
							currentCells[r][c] = CLEAR_COLOR;
							drawOneSquare(r,c,COLORS[CLEAR_COLOR]);
						}
					}
				}
				resetBot();
			}


			// global variable for current rules
			// RULES[state] is a mapping from one of the 16 'NEWS'-'xxxx' strings
			//   to a direction to move and a new state to enter (or other activity)
			var RULES = Array(); // supposedly will expand to fit!
			var MAXRULES = 100;

			// initialize the rules to a good size
			for (rulenum=0 ; rulenum<MAXRULES ; ++rulenum)
			{
				RULES[rulenum] = Array();
			}

			// global robot
			var robot =  {row: 0, col: 0, state: 0};
			// global cookies
			var cookies = []

			XXXX = 0
			NXXX = 1
			XEXX = 2
			NEXX = 3
			XXXS = 4
			NXXS = 5
			XEXS = 6
			NEXS = 7
			XXWX = 8
			NXWX = 9
			XEWX = 10
			NEWX = 11
			XXWS = 12
			NXWS = 13
			XEWS = 14
			NEWS = 15

			COOKIE = 16

			var SURR_TEXT = ["xxxx", "Nxxx", "xExx", "NExx", "xxxS", "NxxS", 
							 "xExS", "NExS", "xxWx", "NxWx", "xEWx", "NEWx",
							 "xxWS", "NxWS", "xEWS", "NEWS",
							 "xxxx", "Nxxx", "xExx", "NExx", "xxxS", "NxxS", 
							 "xExS", "NExS", "xxWx", "NxWx", "xEWx", "NEWx",
							 "xxWS", "NxWS", "xEWS", "NEWS"]

			MOVE_X = 0 // don't move at all - better change state!
			MOVE_N = 1
			MOVE_E = 2
			MOVE_W = 3
			MOVE_S = 4

			OTHER = 0 // other actions

			// we'll make our own rules for now
			RULE_DIR = 0;
			RULE_NEWSTATE = 1;
			RULE_OTHERACTION = 2;
			RULE_LINENUM = 3;
			RULE_TEXT = 4;
			RULE_COOKIE = 5; // index of the string the user typed


			function cookieLocation(row,col)
			{
				return col + MAXCOLS*row;
			}

			function drawCookies()
			{
				var the_cookie = 0
				var r = 0
				var c = 0
				for (var i=0; i<cookies.length; i++)
				{
					the_cookie = cookies[i]
					c = the_cookie % MAXCOLS;
					r = (the_cookie - c)/MAXCOLS;	
					updateCellColor(r,c,COOKIE_COLOR);
				}
			}

			function randomInRange(N)
			{
				return Math.floor(N*Math.random())
			}

			function resetBot()
			{
				var nrow;
				var ncol;
				found = false
				while(!found)
				{
					nrow = randomInRange(MAXROWS)
					ncol = randomInRange(MAXCOLS)
					if(currentCells[nrow][ncol] != WALL_COLOR)
						found = true
				}
				robot = {row: nrow, col: ncol, state: 0};
				drawOneSquare( robot.row, robot.col, COLORS[ROBOT_COLOR] );
				currentCells[robot.row][robot.col] = ROBOT_COLOR;

				// re-update the squares to go...
				document.getElementById('state').value = "0";
				document.getElementById('surroundings').value = SURR_TEXT[getSurroundings()];
				cookies = [];
				cookies_remaining = MAXCOOKIES;
				updateProgress();
			}

			function teleportRobot(direction)
			{
			// will move the robot if it's legal to...
			// will not mark the space moved from as grey, but clear
			//
			// direction must be 'W', 'E', 'N', or 'S' to move

				// get robot's current position
				var r = robot.row;
				var c = robot.col;

				var msgText = "";

				  
					
				if (direction == 'W')
				{ 
					// check if it's safe to move...
					if (isWallToW(r,c))
					{
						msgText = "There is a wall to the west.\nNot moving the robot.";
					}
					else
					{
						// clear previous location
						updateCellColor(robot.row,robot.col,CLEAR_COLOR);
						// move it west
						robot.col = robot.col-1;
					}
				}
				
				else if (direction == 'E')
				{ 
					// check if it's safe to move...
					if (isWallToE(r,c))
					{
						msgText = "There is a wall to the east.\nNot moving the robot.";
					}
					else
					{
						// clear previous location
						updateCellColor(robot.row,robot.col,CLEAR_COLOR)
						// move it west
						robot.col = robot.col+1;
					}
				}
				else if (direction == 'N')
				{ 
					// check if it's safe to move...
					if (isWallToN(r,c))
					{
						msgText = "There is a wall to the north.\nNot moving the robot.";
					}
					else
					{
						// clear previous location
						updateCellColor(robot.row,robot.col,CLEAR_COLOR);
						// move it west
						robot.row = robot.row-1;
					}
				}
				else if (direction == 'S')
				{ 
					// check if it's safe to move...
					if (isWallToS(r,c))
					{
						msgText = "There is a wall to the south.\nNot moving the robot.";
					}
					else
					{
						// clear previous location
						updateCellColor(robot.row,robot.col,CLEAR_COLOR);
						// move it west
						robot.row = robot.row+1;
					}
				}
				
				
				// clear the cheated map
				clearVisited();
				// and draw cookies!
				drawCookies();
				// don't forget to draw the robot on top...
				updateCellColor(robot.row,robot.col,ROBOT_COLOR);
				// change the status tag
				document.getElementById('surroundings').value = SURR_TEXT[getSurroundings()];
				// print any messages
				document.getElementById('mesg').value = msgText;	 

			}


			function moveRobot(rule)
			{
				var dir = rule[RULE_DIR];
				//alert('dir is' + dir)
				var newstate = rule[RULE_NEWSTATE];
				var newrow = robot.row;
				var newcol = robot.col;
				var r = newrow;
				var c = newcol;
				
				// Deal with cookies before we move!
				var cookieAction = rule[RULE_COOKIE];
				if (cookieAction == 1)
				{
					if (cookies_remaining > 0)
					{
						cookies_remaining += -1;
						cookies.push(cookieLocation(robot.row,robot.col));
					}
					else
						return "No more cookies. Stopping."
				}
				if (cookieAction == 2)
				{
					cookieIndexInList = cookies.indexOf(cookieLocation(r,c))
					if (cookieIndexInList == -1)
						return "There is no cookie here! You cannot pull cookies out of thin air!"
					else
					{
						cookies_remaining += 1;
						cookies.splice(cookieIndexInList,1)
					}
				}
				
				if (dir == MOVE_X) ;  // do not move at all
				else if (dir == MOVE_N)
				{
					if (!isWallToN(r,c)) newrow -= 1;
					else return "Can not move to the north!";
				}
				else if (dir == MOVE_E)
				{
					if (!isWallToE(r,c)) newcol += 1;
					else return "Can not move to the east!";
				}
				else if (dir == MOVE_W)
				{
					if (!isWallToW(r,c)) newcol -= 1;
					else return "Can not move to the west!";
				}
				else if (dir == MOVE_S)
				{
					if (!isWallToS(r,c)) newrow += 1;
					else return "Can not move to the south!";
				}
				else return 'Direction of ' + dir + ' not recognized.';

				// check that it's not a wall or out of bounds...
				// we return a nonempty message if we are and
				// an empty string if everything is OK

				if (newcol < 0) return 'Trying to move to col -1! Stopping';
				if (newcol >= MAXCOLS) return 'Trying to move to col " + MAXCOLS + "! Stopping';
				if (newrow < 0) return 'Trying to move to row -1! Stopping';
				if (newrow >= MAXROWS) return 'Trying to move to row " + MAXROWS + "! Stopping';

				// now update the data structure and the display
				updateCellColor(robot.row,robot.col,VISITED_COLOR);
				robot.row = newrow;
				robot.col = newcol;
				drawCookies();
				updateCellColor(robot.row,robot.col,ROBOT_COLOR);

				// now update the state of the robot
				robot.state = newstate;

				if (DEBUG) return 'Robot is ' + robot;
				else return ''; // everything is OK

			}

			function isWallToN(r,c)
			{
				var CC = currentCells;
				//alert('r and c are ' + r + ' '  + c )
				if (r == 0 || CC[r-1][c] == WALL_COLOR ) return 1;
				return 0
			}

			function isWallToE(r,c)
			{
				var CC = currentCells;
				if (c == MAXCOLS-1 || CC[r][c+1] == WALL_COLOR ) return 1;
				return 0
			}

			function isWallToW(r,c)
			{
				var CC = currentCells;
				if (c == 0 || CC[r][c-1] == WALL_COLOR ) return 1;
				return 0
			}

			function isWallToS(r,c)
			{
				var CC = currentCells;
				if (r == MAXROWS-1 || CC[r+1][c] == WALL_COLOR ) return 1;
				return 0
			}

			function getSurroundings()
			{
				// look at the currentCells array and robot to 
				// see what's around us!
				// should make sure that we're in bounds!
				// check to the N
				var r = robot.row;
				var c = robot.col;
				
				if (cookies.indexOf(cookieLocation(r,c)) != -1)
					if (isWallToN(r,c)) // YES N
						if (isWallToE(r,c)) // YES E
							if (isWallToW(r,c)) // YES W
								if (isWallToS(r,c)) // YES S
									return NEWS + COOKIE;
								else // NO S
									return NEWX + COOKIE;
							else // NO W
								if (isWallToS(r,c)) // YES S
									return NEXS + COOKIE;
								else // NO S
									return NEXX + COOKIE;
						else // NO E
							if (isWallToW(r,c)) // YES W
								if (isWallToS(r,c)) // YES S
									return NXWS + COOKIE;
								else // NO S
									return NXWX + COOKIE;
							else // NO W
								if (isWallToS(r,c)) // YES S
									return NXXS + COOKIE;
								else // NO S
									return NXXX + COOKIE;
					else // NO N
						if (isWallToE(r,c)) // YES E
							if (isWallToW(r,c)) // YES W
								if (isWallToS(r,c)) // YES S
									return XEWS + COOKIE;
								else // NO S
									return XEWX + COOKIE;
							else // NO W
								if (isWallToS(r,c)) // YES S
									return XEXS + COOKIE;
								else // NO S
									return XEXX + COOKIE;
						else // NO E
							if (isWallToW(r,c)) // YES W
								if (isWallToS(r,c)) // YES S
									return XXWS + COOKIE;
								else // NO S
									return XXWX + COOKIE;
							else // NO W
								if (isWallToS(r,c)) // YES S
									return XXXS + COOKIE;
								else // NO S
									return XXXX + COOKIE;
									
				else
					if (isWallToN(r,c)) // YES N
						if (isWallToE(r,c)) // YES E
							if (isWallToW(r,c)) // YES W
								if (isWallToS(r,c)) // YES S
									return NEWS;
								else // NO S
									return NEWX;
							else // NO W
								if (isWallToS(r,c)) // YES S
									return NEXS;
								else // NO S
									return NEXX;
						else // NO E
							if (isWallToW(r,c)) // YES W
								if (isWallToS(r,c)) // YES S
									return NXWS;
								else // NO S
									return NXWX;
							else // NO W
								if (isWallToS(r,c)) // YES S
									return NXXS;
								else // NO S
									return NXXX;
					else // NO N
						if (isWallToE(r,c)) // YES E
							if (isWallToW(r,c)) // YES W
								if (isWallToS(r,c)) // YES S
									return XEWS;
								else // NO S
									return XEWX;
							else // NO W
								if (isWallToS(r,c)) // YES S
									return XEXS;
								else // NO S
									return XEXX;
						else // NO E
							if (isWallToW(r,c)) // YES W
								if (isWallToS(r,c)) // YES S
									return XXWS;
								else // NO S
									return XXWX;
							else // NO W
								if (isWallToS(r,c)) // YES S
									return XXXS;
								else // NO S
									return XXXX;
			}


			function update()
			{
				// what is the rule
				// it's the current robot's state and surr
				var currentstate = robot.state;
				var surr = getSurroundings();
				rule = RULES[currentstate][surr]
				var ruleText = "";
				var mesgText = "";
			   
				if (!(rule))
				{
					ruleText = "none";
					mesgText = mesgText + "\n" + "No rule for state " + 
					currentstate + " and surr " + SURR_TEXT[surr] +
					"\nStopping."
				}
				else
				{ 
					// get the parts of the rule needed to move the robot
					mesgText = mesgText + moveRobot(rule) + "\n";
					ruleText = rule[RULE_TEXT];
				}

				// set the current (== previous) rule
				document.getElementById('currentrule').value = ruleText;

				// do it again to get the _next_ rule

				currentstate = robot.state;
				surr = getSurroundings();
				var newrule = RULES[currentstate][surr];
				var newruletext = "";


				if (!(newrule))
				{
					newruleText = "none";
				}
				else
				{ 
					// get the parts of the rule needed to move the robot
					//reply = moveRobot(newrule);
					newruleText = '' + newrule[RULE_TEXT];
				}

				// set the next rule
				document.getElementById('mesg').value = mesgText;
				document.getElementById('nextrule').value = newruleText;
				document.getElementById('state').value = currentstate;
				document.getElementById('surroundings').value = SURR_TEXT[surr];
				updateProgress();
			   
			}


			var timerID = null

			function go()
			{
				clearInterval(timerID);
				timerID=setInterval("update()",TIMING_DELAY);
			}

			function stop()
			{
				clearInterval(timerID);
			}

			function removeEmptyStrings(arr)
			{
				// returns an array without empty strings
				var newarr = Array()
				var n = 0 // location for next element of newarr
				for (var i=0 ; i<arr.length ; ++i)
				{
					if (arr[i] != '') newarr[n++] = arr[i]
				} 
				return newarr
			}

			function addToList(sL,n)
			{
				// append all of the ints in sL (with n added) to sL
				var L = sL.length;
				for (var i=0 ; i<L ; ++i)
				{
					sL[L+i] = sL[i] + n;
				}
				return sL
			}

			function computeSurrFromString(surrStr)
			{
				// must be length 4
				if (surrStr.length != 4) return -1; // ERROR
				// check first char: must be N, x, X, or *
				var nc = surrStr.charAt(0);
				if (nc != 'N' && nc != 'X' && nc != '*') return -1; //ERROR
				var ec = surrStr.charAt(1);
				if (ec != 'E' && ec != 'X' && ec != '*') return -1; //ERROR
				var wc = surrStr.charAt(2);
				if (wc != 'W' && wc != 'X' && wc != '*') return -1; //ERROR
				var sc = surrStr.charAt(3);
				if (sc != 'S' && sc != 'X' && sc != '*') return -1; //ERROR
				
				// everything is OK, we prepare the list of integers
				// to return - this is the list of surroundings matched
				// by the input surrStr
				surroundingsList = Array();
				var i = 0; // next element in surroundingsList
				// base value
				var base = (nc == 'N') + 2*(ec == 'E') + 4*(sc == 'S') + 8*(wc == 'W');
				// add them into the list
				surroundingsList[i++] = base;
				if (nc == '*') surroundingsList = addToList(surroundingsList,1) 
				if (ec == '*') surroundingsList = addToList(surroundingsList,2) 
				if (wc == '*') surroundingsList = addToList(surroundingsList,8) 
				if (sc == '*') surroundingsList = addToList(surroundingsList,4) 
				return surroundingsList
			}

			function computeCookieSeeFromString(cookieSeeStr)
			{
				if (cookieSeeStr == '*' || cookieSeeStr == '*M') return 0;
				if (cookieSeeStr == 'XM') return 1;
				if (cookieSeeStr == 'M' || cookieSeeStr == 'WM') return 2;
				else return -1;
			}

			function computeCookieDoFromString(cookieSeeStr)
			{
				if (cookieSeeStr == '*') return 0;
				if (cookieSeeStr == 'DM') return 1;
				if (cookieSeeStr == 'PM') return 2;
				else return -1;
			}

			function clearRules()
			{
				var maxstates = RULES.length;
				for (var statenum=0 ; statenum<maxstates ; ++statenum)
				{
					RULES[statenum] = Array(); // gone!
					// does java script have garbage collection? I hope so!
					// Yes, it does!
				}
			}

			function checkAndSetNewRule(state,surrList,move,cookieAction,newstate,linenum,ruleStr)
			{
				var reply = '';
				var message = '';

				// for each element of surr
				var L = surrList.length;
				for (var i=0 ; i<L ; ++i)
				{
					var surr = surrList[i];
					if (!(RULES[state][surr]))
					{
						if (DEBUG) reply += "No repeat rule. state:" + state + "  surr:" + surr + "\n";
						// it's OK, so set the rule (no action yet)
						RULES[state][surr] = [ move, newstate, OTHER, linenum, ruleStr, cookieAction ]; 
					}
					else
					{
						reply += "Repeat Rule! The state: " + state + "  surr: " + SURR_TEXT[surr] +
							"\n   was already handled on line #" + RULES[state][surr][3] +
							"\n   which reads as follows:" + 
							"\n   " + RULES[state][surr][4] + "\n";
						return reply;
					}
				}

				return reply;
			}

			function computeRules(s)
			{

				// convert tabs to spaces
				// given that this is a browser, it's not clear
				// how you would even enter a tab, but anyway...
				s = s.replace('	',' ');

				// we should clear out the rules here...
				clearRules();

				// here are all of the typed rules, line-by-line
				var allRules = s.split('\n');
				var numberOfLines = allRules.length;
				var returnmessage = '';


				// loop through them all...
				for (var linenum=0 ; linenum<numberOfLines ; ++linenum)
				{
					// the current rule == the current line's string
					var ruleStr = String(allRules[linenum]);
					returnmessage = "Oops...\n\nOn line number " + linenum + ", which is this:\n   " + ruleStr + "\n\n";

					// on IE we need to remove the '\r' at the end - this is weird!
					var L = ruleStr.length;
					if ( ruleStr.indexOf('\r') != -1 )
					{
						ruleStr = ruleStr.substring(0,ruleStr.indexOf('\r')); // get rid of the \r
					}

					// throw out anything at or after the first # (commenting...)
					var locationOfComment = ruleStr.indexOf('#');
					if (locationOfComment != -1)   // there _was_ a comment
					{
						ruleStr = ruleStr.substring(0,locationOfComment);
					}

					// make the whole thing uppercase
					ruleStr = ruleStr.toUpperCase();

					// tokenize on spaces into the list s
					var s = ruleStr.split(' '); 
					s = removeEmptyStrings(s);
					// blank lines are OK, but partial lines are not
					if (s.length == 0) continue;  // ignore lines with no tokens
					if (s.length < 5)
					{
						returnmessage += "There are too few tokens with only " + s.length + 
						" seen.\n\n  5 are needed, in the form\n " +
						" State Surr -> Move NewState";
						return returnmessage;
					}
					else if (s.length > 5)
					{
						returnmessage += "There are too many tokens with " + s.length + 
						" seen.\n\n  5 are needed, in the form\n " +
						" State Surr -> Move NewState";
						return returnmessage;
					}
					
					//////////////////////////////////////////////////////////////////////////////////////////////////
					// check stateStr
					var stateStr = s[0]
					var state = parseInt(stateStr)
					if (!(state>=0 && state<MAXRULES)) state = -1;
					if (state == -1) 
					{
						returnmessage += "The first token, representing the input state, was not an integer" +
						" between 0 and " + (MAXRULES-1) + " (inclusive).";
						return returnmessage;
					}
					//////////////////////////////////////////////////////////////////////////////////////////////////
					
					
					//////////////////////////////////////////////////////////////////////////////////////////////////
					// check surrStr
					var surrStr = s[1]
					var surr = computeSurrFromString(surrStr)

					if (surr == -1)
					{
						returnmessage += "The second token, representing the \"NEWS\" surroundings,\n  was not in" +
						" a recognized format. It should be\n  from xxxx to NEWS, with *s allowed.";
						return returnmessage;
					}
					// now surr is a list of the appropriate surroundings...
					// we should check against our rule base to see if s/t is
					// defined twice...
					// but we wait to do this until everything has parsed all right...
					//////////////////////////////////////////////////////////////////////////////////////////////////
					
					
					//////////////////////////////////////////////////////////////////////////////////////////////////
					// Check whether to do anything if we are on a cookie
					// If we were on an arrow, then we don't care about cookies so insert a *
					var cookieSeeStr = s[2];
					if (cookieSeeStr == "->")
					{
						s.splice(2,0,'*');
						cookieSeeStr = s[2];
					}
					if (cookieSeeStr == "-")
					{
						returnmessage += "It seems you have a dash - instead of an arrow ->\n" + 
						" Perhaps there's a space between the - and the >\n" +
						" Be sure your rule is in the form\n" + 
						" State Surr -> Move NewState";
						return returnmessage;
					}
					var cookieSee = computeCookieSeeFromString(cookieSeeStr);
					if (cookieSee == -1)
					{
						returnmessage += "This middle token should be an arrow: ->\n\nInstead, it was " + s[2] +
						"\n\n" + " Be sure your rule is in the form\n" + 
						" State Surr -> Move NewState";
						return returnmessage;
					}
					else if (cookieSee == 0)
					{
						surr = addToList(surr,16)
					}
					else if (cookieSee == 2)
					{
						surr = surr.map(function(item) { return item+16; });
					}
					//////////////////////////////////////////////////////////////////////////////////////////////////

					
					//////////////////////////////////////////////////////////////////////////////////////////////////
					// Not all that important...
					var arrowStr = s[3];
					if (arrowStr != "->")
					{
						returnmessage += "This middle token should be an arrow: ->\n\nInstead, it was " + s[2] +
						"\n\n" + " Be sure your rule is in the form\n" + 
						" State Surr -> Move NewState";
						return returnmessage;
					}
					//////////////////////////////////////////////////////////////////////////////////////////////////
					
					
					//////////////////////////////////////////////////////////////////////////////////////////////////
					// Check what we should do to the cookie
					// If we reach a direction command, clearly we will do nothing to the cookie
					var cookieDoStr = s[4];
					if ((cookieDoStr == 'N') || (cookieDoStr == 'E') || (cookieDoStr == 'S') || (cookieDoStr == 'W') || (cookieDoStr == 'X'))
					{
						s.splice(4,0,'*');
						cookieDoStr = s[4];
					}
					var cookieDo = computeCookieDoFromString(cookieDoStr);
					if (cookieDo == -1)
					{
						returnmessage += ":-) The token representing the movement direction" + 
						" should be one of these: N, E, W, S, or X." + 
						"\n\n" + " Rather, the token was " + String(cookieDoStr);
						return returnmessage;
					}
					//////////////////////////////////////////////////////////////////////////////////////////////////
					
					
					//////////////////////////////////////////////////////////////////////////////////////////////////
					// better be one of the five possibilities (so far)
					var dirStr = s[5]
					//return dirStr.length;
					if (dirStr.length != 1)
					{
						returnmessage += ":-) The token representing the movement direction" + 
						" should be only 1 character long: N, E, W, S, or X." + 
						"\n\n" + " Rather, the token was " + String(dirStr) + " with length " +
						String(dirStr.length);
						return returnmessage;
					}
					var dc = dirStr.charAt(0);
					if (dc != 'N' && dc != 'E' && dc != 'W' && dc != 'S' && dc != 'X')
					{
						returnmessage += "The token representing the movement direction" + 
						" should be one of N, E, W, S, or X." +
						"\n\n" + " Rather, the token was " + dirStr;
						return returnmessage;
					}
					var dir = 0;
					if (dc == 'N') dir = MOVE_N;
					if (dc == 'E') dir = MOVE_E;
					if (dc == 'W') dir = MOVE_W;
					if (dc == 'S') dir = MOVE_S;
					if (dc == 'X') dir = MOVE_X;
					//////////////////////////////////////////////////////////////////////////////////////////////////
					
					
					//////////////////////////////////////////////////////////////////////////////////////////////////
					// check the new state
					var newstateStr = s[6];
					var newstate = parseInt(newstateStr)
					if (!(newstate>=0 && newstate<MAXRULES)) newstate = -1;
					if (newstate == -1) 
					{
						returnmessage += "The last token, representing the output state, was not an integer" +
						" between 0 and " + MAXRULES + " (inclusive).";
						return returnmessage;
					}
					//////////////////////////////////////////////////////////////////////////////////////////////////
					

					// now check the rule for possible repeats -- or other things
					var reply = checkAndSetNewRule(state,surr,dir,cookieDo,newstate,linenum,ruleStr);
					if (reply != '')
					{
					// then it was an error message
						returnmessage += reply;
						if (DEBUG) returnmessage += "\n\n"; // keep accumulating information if we're debugging
						else return returnmessage;
					}

				}

				//return '' + state + ' ' + surrStr + ' ' + arrowStr + ' ' + dirStr + ' ' + newstate;
				if (DEBUG) return returnmessage; // show accumulated information, if we're debugging
				else return 'OK';

			}

			function updateProgress()
			{
			  var total = countSquares( currentCells, CLEAR_COLOR );
			  document.getElementById('progress').value = total;
			  if (total == 0) {
				stop();
				document.getElementById('mesg').value = "\n** Complete ! **";
			  } // end if done with environment
			}



			var currentMapIndex = 6;
			var MAPS = [emptymap, mazemap, diamondmap, map3, map4, map5, map6];

			function getCMI()
			{
			  return currentMapIndex;
			}

			function changeMap(value)
			{
				currentMapIndex += value;
				if (currentMapIndex >= MAPS.length)
				{
					currentMapIndex = 0;
				}
				else if (currentMapIndex < 0)
				{
					currentMapIndex = MAPS.length - 1;
				}
				
				// now do stuff to get the page ready to go...
				
				// draw the map!
				//alert('currentMapIndex is ' + currentMapIndex);
				drawMap( MAPS[currentMapIndex] ); // sets currentCells, too!
				
				// set and draw the robot
				resetBot();
				
				// compute the rules (the default rules at the start)
				document.calc.mesg.value = computeRules(document.calc.rules.value);
				
				// fill in the various text fields
				document.getElementById('state').value = "0";
				document.getElementById('surroundings').value = SURR_TEXT[getSurroundings()];
				updateProgress();
			}

			changeMap(1);


			} catch(e) {
			for (var i in e)
				alert(e[i]);
			}


		</script> 
	</body>
</html>