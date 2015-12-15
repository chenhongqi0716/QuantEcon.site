<?php
	set_include_path($_SERVER['DOCUMENT_ROOT'] . '/includes');
	$page_title = 'Developers';
	include ('header.php');
?>

		
<h1>Developers</h1>

<p>QuantEcon is developed by the community for the community.  We welcome
submission of algorithms and high quality code in Python or Julia on all
topics concerning quantitative economics.  Less experienced developers who
wish to get involved can help improve documentation or work on smaller
enhancements.  To get ideas on how to contribute you can read the issue
trackers (<a href="https://github.com/QuantEcon/QuantEcon.py/issues">Python</a>/<a href="https://github.com/QuantEcon/QuantEcon.jl/issues">Julia</a>)
or browse the code on GitHub (<a href="https://github.com/QuantEcon/QuantEcon.py">Python</a>/<a href="https://github.com/QuantEcon/QuantEcon.jl">Julia</a>).</p>


Contributions to QuantEcon should follow the canonical open source pattern,
via forking the code libraries and sending pull requests.  If you're not
familiar with this kind of development there are many useful tutorials lying
around, including

<ul>
    <li><a href="https://guides.github.com/">The GitHub Guides</a></li>
    <li><a href="https://help.github.com/">GitHub Help</a></li>
    <li><a href="http://readwrite.com/2014/07/02/github-pull-request-etiquette">Pull request ettiquette</a></li>
</ul>

QuantEcon follows standard best practice coding protocols, such as unit
testing and continuous integration.  Read on for specific information on
development protocols for each language.

<div class="tab-panel">

	<div class="tab-nav clearfix">

		<p class="visuallyhidden">Choose language:</p>
	
		<ul>
			<li class="active"><a href="#python-tab" id="python-toggle">Python instructions</a></li>
			<li><a href="#julia-tab" id="julia-toggle">Julia instructions</a></li>
		</ul>
		
	</div>
	
	<div class="tab-content">
	
		<div class="tab">
		
			<h2 class="visuallyhidden" id="python-tab">Python</h2>
			
			<p>The current structure of the <code>QuantEcon</code> package is relatively flat where python <code>modules</code> contain most of the code. The majority of methods are available at the top level <code>namespace</code> for easy access. The python API is defined by the <code>__init__.py</code> files within the <code>quantecon</code> package. There is currently one subpackage <code>models</code> which contains a number of <code>classes</code> for working with various economic models</p>

			<h3 id="/wiki/py/Creating-a-Conda-development-environment.php">Setting up a Conda Development Environment</h3>
			<p>One of the advantages of the <a href="https://store.continuum.io/cshop/anaconda/">Anaconda Python environment</a> is that it is cheap to set up (and discard) Python environments for development versions of packages and populate them with your favorite scientific tools. For example, if you're working on <code>QuantEcon</code> you might find it useful to set up an environment (containing NumPy, SciPy, etc.) that uses your development version rather than the default ones. This facilitates contributing to <code>QuantEcon</code> without worrying about corrupting the Python environment on which your other work depends.</p>

			<p>Full instructions can be found <a href="/wiki/py/Creating-a-Conda-development-environment.php">here</a></p>

			<h3>Writing Documentation</h3>

			<p>Within the QuantEcon library we wish to maintain a simple and consistent format for inline documentation, known in the Python world as <em>docstrings</em>. The format we use is known as <a href="https://github.com/numpy/numpy/blob/master/doc/HOWTO_DOCUMENT.rst.txt">numpydoc</a>. It was developed by the <code>numpy</code> and <code>scipy</code> teams and is used in many popular packages. Adhering to this standard helps us</p>
			<ul>
			<li>Provide a sense of consistency throughout the library</li>
			<li>Give users instant access to necessary information at the interpreter prompt (either via the built-in python function <code>help(object_name)</code> or the ipython <code>object_name?</code>)</li>
			<li>Allow us to easily and automatically generate a reference manual using sphinx's <code>autodoc</code> and <code>apidoc</code> functionality.</li>
			</ul>

			<p>For full details and examples, this standard is discussed in more detail <a href="/wiki/py/Docstrings-and-Documentation.php">on this page</a></p>

			<h3>Writing Tests</h3>

			<p>One prerequisite for contributions to QuantEcon is that all functions and methods should be paired with tests verifying that they are functioning correctly. This type of <a href="http://en.wikipedia.org/wiki/Unit_testing">unit testing</a> is almost universal across high quality software projects. </p>
			<p><a href="/wiki/py/Unit-Testing-in-QuantEcon.php">This guide</a> is intended to help you get started writing tests for code to be included in QuantEcon.</p>

			<h3>Considering the API</h3>
			
			<p>As <code>QuantEcon</code> evolves the current structure will naturally move towards more sub-packages in the future. Every effort should be made to maintain the current API, however if you are submitting a Pull Request (PR) that results in a necessary change to the current API this needs to be explicitly highlighted and discussed as part of the PR discussion through Github</p>
			
			<h3></h3>

		</div>

		<div class="tab">
		
			<h2 class="visuallyhidden" id="julia-tab">Julia</h2>

			<p>QuantEcon is also supporting a library written for Julia. As a programming language, <code>Julia</code> is still new and thus some aspects of the language are still evolving as it matures. As a result there may be some changes from time to time in styles and conventions. The upside is that it is fast and quickly being adopted by the broader scientific computing community</p>

			<p>The <a href="http://julia.readthedocs.org/en/latest/manual/style-guide/">Julia style guide</a> is a good starting point for some Julia programming conventions 

			<h3>Writing Documentation</h3>

			<p>Julia is currently undergoing a decision process for standardization with regards to documentation. <a href="https://github.com/JuliaLang/julia/pull/8791">This issue</a> is tracking this discussion. Once a decision has been made and formalized a QuantEcon style guide will be updated to assist Julia contributions</p> 
			
			<h3>Writing Tests</h3>

			<p>One prerequisite for contributions to QuantEcon is that all functions and methods should be paired with tests verifying that they are functioning correctly. This type of <a href="http://en.wikipedia.org/wiki/Unit_testing">unit testing</a> is almost universal across high quality software projects. A guide to writing tests in <code>Julia</code> is currently in work</p>

			<h3></h3>
				        						
		</div>
	
	</div>
	
</div>



<?php
	include ('footer.php');
?>
