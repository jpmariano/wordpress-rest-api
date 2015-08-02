<?php include('header.php'); ?>
<div id="firstpage" data-role="page">
<div data-role="header" data-theme="b">
	<h1>My Site</h1>
</div>
  <div data-role="content" class="content">
		<h1>My App</h1>
		<nav data-role="navbar">
			<ul>
				<li><a href="#firstpage" data-icon="home" data-role="Button" data-transition="pop">Home</a></li>
				<li><a href="#secondpage" data-icon="info" data-role="Button"  data-transition="flip">Second Page</a></li>
			</ul>
			
		</nav>
	    <div data-role="content" class="content">
	    	 <form class="ui-filterable">
		      <input id="myFilter" data-type="search">
		    </form>
			<ul class="ui-listview-outer" data-filter="true" data-input="#myFilter" data-inset="true" id="entries">
			</ul>
		</div>
	</div>
	<div data-role="footer" data-theme="a" role="contentinfo">
	<h1>&copy; Copyright Info or Site URL</h1>
</div>
</div>
<div id="secondpage" data-role="page">
	<div data-role="header" data-theme="b">
		<h1>My Site</h1>
	</div>
	<div data-role="content">
	<h1>My App</h1>
	<nav data-role="navbar">
		<ul>
			<li><a href="#firstpage" data-icon="home" data-role="Button">Home</a></li>
			<li><a href="#secondpage" data-icon="info" data-role="Button" data-iconpos="right">Second Page</a></li>
		</ul>
		
	</nav>
	<div data-role="content" class="content">
		<ul data-role="listview" data-themes="a" data-filter="true" data-inset="true" id="entries">
		</ul>
	</div>
	</div>
	<div data-role="footer" data-theme="c" role="contentinfo">
	<h1>&copy; Copyright Info or Site URL</h1>
	</div>
 
</div>
 <?php include('footer.php'); ?>