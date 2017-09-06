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
		  <li class="breadcrumb-item active">Recursive Examples</li>
		</ol>
		
		<div class="container-fluid">
			<a name="top"></a>
			
			<?php require '../views/announcement.php'; ?>
			
			<div class="page-header">
				<h3>CS 101 - Recursive Examples</h3>
			</div>
		</div>
		<div class="container-fluid">						
			<div id="accordion" role="tablist" aria-multiselectable="true">
				<div class="card">
					<div class="card-header" role="tab" id="headingOne">
						<h5 class="mb-0">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								<tt>add( m, n )</tt> 
							</a>
						</h5>
					</div>
					<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
						<div class="card-block">
<pre>
#
# add example from class
#

def add( m, n ):
    &#34;&#34;&#34; add outputs m+n via recursion and adding 1
            input: m, a number
            input: n, an integer
    &#34;&#34;&#34;
    if n &#61;&#61; 0:
        return m
    else:
        return add(m,n-1) + 1
</pre>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingTwo">
							<h5 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
									<tt>len(s)</tt>
								</a>
							</h5>
						</div>
						<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="card-block">
<pre>
#
# len example from class
#

def len( s ):
    &#34;&#34;&#34; len outputs the length of s
            input: s, which can be a string or list

    &#34;&#34;&#34;
    if s &#61;&#61; &#39;&#39; or s &#61;&#61; &#91;]:   # if empty string or empty list
        return 0
    else:
        return 1 + len( s&#91;1:] )
</pre>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingThree">
							<h5 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
									 <tt>vwl(s)</tt> 
								</a>
							</h5>
						</div>
						<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="card-block">
<pre>
#
# vwl example from class
#

def vwl( s ):
    &#34;&#34;&#34; vwl outputs the number of vowels in s
            input: s, which will be a string
    &#34;&#34;&#34;
    if s &#61;&#61; &#39;&#39;:
        return 0   # no vowels in the empty string
    elif s&#91;0] in &#39;aeiou&#39;:
        return 1 + vwl( s&#91;1:] )
    else:
        return 0 + vwl( s&#91;1:] )
</pre>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingFour">
							<h5 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
									<tt>mymax(L)</tt> 
								</a>
							</h5>
						</div>
						<div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
							<div class="card-block">
<pre>
#
# mymax example from class
#

def mymax( L ):
    &#34;&#34;&#34; mymax outputs the largest element in L
              input: L, a &#95;nonempty&#95; list
    &#34;&#34;&#34;
    if len(L) &#61;&#61; 1:
        return L&#91;0]
    elif L&#91;0] &#60; L&#91;1]:
        return mymax( L&#91;1:] )    # drop the first
    else:
        return mymax( L&#91;0:1] + L&#91;2:] )  # drop the second
</pre>
							</div>
						</div>
					</div>	
					<div class="card">
						<div class="card-header" role="tab" id="headingFive">
							<h5 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
									<tt>power(b,p)</tt> 
								</a>
							</h5>
						</div>
						<div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
							<div class="card-block">
<pre>
#
# power example from class
#

def power( b, p ):
    &#34;&#34;&#34; power outputs b&#42;&#42;p via recursion
              input: b, a number
              input: p, an integer
    &#34;&#34;&#34;
    if p &#61;&#61; 0:
        return 1
    elif p &#60; 0:    # this is optional
        return 1.0/power(b,-p)
    else:
        return b&#42;power(b,p-1)
</pre>
						</div>
					</div>
				</div>
			</div>
		</div>		
		<?php require '../views/footer.php'; ?>	
	</body>
</html>