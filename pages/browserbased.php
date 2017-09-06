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
		  <li class="breadcrumb-item active">Browser Python IDE</li>
		</ol>
		
		<div class="container-fluid">
			<a name="top"></a>
			
			<?php require '../views/announcement.php'; ?>
			
			<div class="page-header">
				<h3>CS 101 - Browser- based Phython IDE</h3>
			</div>
		</div>
		<div class="container-fluid">		
			<p>
				You can run Python entirely from your browser: the example below is from <a href="https://trinket.io/home">Trinket</a>, which seems the most capable as of right now...<br />
				Chrome, Safari, Firefox, and Edge -- all should work. Also, you will be able to write all of the Python you need - at least for hw0 - using Trinket. Some of the 
				later assignments will require a Python installed <a href="OwnMachines.php" target="_blank">on your own machine</a>. 
			</p>
			<p>
				<iframe src="https://trinket.io/embed/python/563324cee8" width="100%" height="400" frameborder="0" marginwidth="0" marginheight="0" allowfullscreen></iframe>
			</p>
			<p>
				Certainly there are options other than Trinket, too: 
				<ul>
					<li><a href="http://repl.it/" target="_top">Repl.it</a> - Has a side-by-side editor/shell interface</li> 
					<li><a href="http://www.pythontutor.com/visualize.html" target="_top">http://www.pythontutor.com/visualize.html</a> - This is also an excellent Python <i>visualizer</i></li> 
					<li><a href="https://www.pythonanywhere.com/" target="_top">https://www.pythonanywhere.com/</a> - Python Anywhere seems to be pretty complete, but not as lightweight as...</li> 
					<li><a href="http://www.compileonline.com/execute_python_online.php" target="_top">http://www.compileonline.com/execute_python_online.php</a> - which is easiest to dive into</li>
					<li><a href="http://interactivepython.org/courselib/static/thinkcspy/PythonTurtle/helloturtle.html" target="_top">http://interactivepython.org/courselib/static/thinkcspy/PythonTurtle/helloturtle.html</a> - This runs the <i>turtle graphics</i></li>
					<li><a href="http://www.skulpt.org/" target="_top">http://www.skulpt.org/</a> - This also runs turtle graphics.</li>
				</ul> 
			</p>
		</div>		
		<?php require '../views/footer.php'; ?>	
	</body>
</html>