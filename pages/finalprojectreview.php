
  <title>CS101Fall2017 - CS101GoldPracticeExam</title>


</p><p>

</p><p>
<a name="top"></a>
</p><p>
</p>
<p>
</p><p>
</p>
<p>
</p><div class="main">
<a name="text"></a><h2><a name="CS_101_final_exam_review_materials"></a> CS 101 final exam review materials </h2>
<p>
</p><p>
<br><br>
</p>
</p><p>
<br>
</p><p>
</p><h4><a name="Review_session"></a> Review session </h4>
<p>
We will hold a review session -- on TBD 7pm (at HMC's Galileo
</li> <li> Questions are welcome at any time
</li> <li> There's no requirement to stay for the whole span: we'll strive for 50 min. total
</li> <li> The plan will be to cover the CS101 practice exam's problems <ul>
<li> Those are a reasonable tour through all of CS101's topics
</li> <li> Though they're not 100% comprehensive...
</li></ul>
</li></ul>
<p>
</p><p>
<br>
</p><p>
</p><h4><a name="Pages_of_Notes"></a> Pages-of-Notes </h4>
<p>
Remember that you may bring up to <b>two</b> two-sided 8.5x11" pages of notes, hand-written and/or printed, with any material you'd like to have for the exam.
</p><p>
As with the midterm, the emphasis is on understanding and applying the core concepts and skills in CS 101.
</p><p>
If there is anything you'd like to look up, don't bother memorizing it -- simply place it on one of your pages of notes!
</p><p>
<br>
</p><p>
</p><h4><a name="How_to_Study"></a> How to Study </h4>
<p>
Please note that the exam will be cumulative: you may want to look over the midterm exam too. </p><ul>
<li> Below, we have a pretty-complete set of topics that CS101 has covered (and that would be reasonable to include on the final)
</li> <li> Admittedly, we can't include them all on the final!
</li></ul>
<p>
Approaches to studying include: </p><ul>
<li> Review your lecture notes, the in-class "quiz" (aka "worksheet") problems, and the midterm.  Be sure that you feel comfortable with all of the ideas presented there.
</li> <li> Go through your homework solutions to review the big ideas.
</li> <li> Make up to 2 notes pages that you plan to bring with you to the final exam.
</li> <li> Try the practice problems.
</li></ul>
</li></ul>
<p>
<br>
</p><p>
</p><h4><a name="Practice_problems_exams_solution"></a> Practice problems, exams, solutions, and materials </h4>
<p>
</p><ul>

</p><p>
</p><p>
</p><h2><a name="CS101_final_topics"></a> CS101 final topics </h2>
<p>
</p><h4><a name="Functions_from_class"></a> Functions from class </h4>
<p>
Just as a reminder, some of the useful functions and Classes from CS101 include </p><ul>
<li> <tt>removeAll( e, L )</tt>- removes all <tt>e</tt>s from <tt>L</tt>
</li> <li> <tt>removeOne( e, L )</tt>- removes one <tt>e</tt> from <tt>L</tt>
</li> <li> <tt>removeUpto( e, L )</tt>- removes all of the characters upto and including the first <tt>e</tt> in <tt>L</tt> <font size="-2">(removes everything if there is no e in L!)</font>
</li> <li> <tt>ind( e, L )</tt>- returns the index of <tt>e</tt> in <tt>L</tt> or, if not there, <tt>len(L)</tt>
</li> <li> <tt>count( e, L )</tt> - returns the number of <tt>e</tt>s in <tt>L</tt>
</li> <li> <tt>frontNum( L )</tt> - returns the number of repetitions of <tt>L[0]</tt> at the front of <tt>L</tt> (0 if <tt>L</tt> is empty)
</li> <li> <tt>binaryToNum( binstr )</tt> - returns the decimal value of the string <tt>binstr</tt>, which is a string of 0s and 1s
</li> <li> <tt>numToBinary( N )</tt> - returns the string of 0s and 1s that is the binary representation of the decimal value <tt>N</tt>
</li> <li> <tt>Date, Board, Player</tt> - three classes you built and used in weeks 10 and 11
</li> <li> <tt>min, max, abs, sort</tt> - and other functions built-in to Python
</li></ul>
<p>
You'll be able to use the functions on the exam without re-implementing them (unless a problem specifically prohibits one -- or specifically asks for its implementation...)
</p><p>
Here are several sets of topics (including a reminder of the pre-midterm topics):
</p><p>
<br>
</p><p>
</p><h4><a name="Basics_of_Functional_Programming"></a> Basics of Functional Programming and Python </h4> <ul>
<li> Writing recursive functions
</li> <li> Working with lists and strings (slicing, indexing, etc)
</li> <li> Using list comprehensions <tt>LC</tt>
</li> <li> Lists of lists <tt>LoL</tt> and nested list comprehensions
</li> <li> Using the print statement for debugging
</li> <li> <code>print</code> vs. <code>return</code>
</li></ul>
<p>
</p><h4><a name="Problem_solving_and_algorithm_de"></a> Problem solving and algorithm development/use </h4> <ul>
<li> Breaking a problem down into functions
</li> <li> Specifying data representation/flow (i.e., specifying function inputs and outputs)
</li> <li> Caesar cipher algorithm (encipher and decipher)
</li></ul>
<p>
</p><h4><a name="Representing_Data"></a> Representing Data </h4> <ul>
<li> Types of data (<code>int</code>, <code>str</code>, <code>float</code>, etc.), when to use each and converting between types
</li> <li> Representing characters (<code>chr</code> and <code>ord</code>)
</li> <li> Base conversion
</li> <li> Base-N arithmetic, etc.
</li></ul>
<p>
</p><h4><a name="Circuits_and_Assembly"></a> Circuits and Assembly </h4> <ul>
<li> What the basic gates do (OR, AND, NOT)
</li> <li> How minterm expansion works (an OR of ANDs, each selecting one input)
</li> <li> How to use subcircuits (using the adders in the multiplier, e.g.)
</li> <li> How to write simple looping programs in Hmmm, e.g., factorial, power, Fibonacci
</li> <li> What the stack is, what load and store do (officially, they're named <tt>storen</tt> and <tt>loadn</tt>), and why they're necessary for implementing functions in Hmmm.
</li> <li> <i>The exam won't ask you to implement functions or recursion in Hmmm... .</i>
</li></ul>
<p>
</p><h4><a name="Loops_and_iteration"></a> Loops and iteration </h4> <ul>
<li> How for loops and while loops work
</li> <li> How nested loops work
</li> <li> The pi-estimation problem
</li> <li> The TTY securities (statistical menu) problem
</li> <li> 2d loops (nested <tt>for</tt> loops, especially - but also other nested loops)
</li> <li> the use of a while loop for menu-based (text) interactions
</li> <li> 2d data structures: the lists-of-lists used in the <tt>Board</tt> class (and <tt>Picobot</tt> project)
</li> <li> Data handled by value (numeric data and strings) vs. data handled by reference (lists, dictionaries, and objects of user-defined types)
</li></ul>
<p>
</p><h4><a name="Dictionaries_and_data_structures"></a> Dictionaries and data structures (classes and objects) </h4> <ul>
<li> How dictionaries work and how they're different from lists (and lists of lists)
</li> <li> How a class defines a new datatype
</li> <li> The difference between a class (a type) and an object (a variable or value of that type)
</li> <li> What <tt>__init__</tt> and <tt>__repr__</tt> are - and what they do
</li> <li> How to define and call a <i>method</i>
</li> <li> What <tt>self</tt> is and why it's needed...
</li> <li> How the <tt>Date</tt>, <tt>Board</tt>, and <tt>Player</tt> classes worked and what they did...
</li></ul>
<p>
</p><h4><a name="Reasoning_about_Computation_and"></a><a name="Reasoning_about_Computation_and_"></a> Reasoning about Computation and abstract models of computers... </h4> <ul>
<li> How Finite-state-machines (FSMs) work (and how you could build them to perform a specific task)
</li> <li> How Turing machines work (and, again, how you could build them to accomplish a task)
</li> <li> Some computational tasks are impossible to accomplish with an FSM, but are possible with a Turing machine
</li> <li> Some computational tasks are not even possible with a Turing machine (they're not computable by any program at all!) <ul>
<li> Examples: Kolmogorov Complexity and the Halting Problem
</li></ul>
</li></ul>
<p>
<br>
</p><p>
</p><p>
</p><p>
</p><p>
</p><p>
</p><p>
<br><br>
</p><p>
</p><p>
</p><p>
</p><p><a name="bottom"></a>
</p></div>
<p>
</p><div class="footer">
<p>
</p></div>
<p>

</p></body></html>