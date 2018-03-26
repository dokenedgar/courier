<!-- navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html"><h1><span class="fa fa-plane" aria-hidden="true"></span>Courier Store</h1></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li <?php if (strcmp ($_SESSION['page'], 'index') == 0):?>	class="active" <?php endif ?> > <a href="index.php">Home</a></li>
				<li <?php if (strcmp ($_SESSION['page'], 'about') == 0):?>	class="active" <?php endif ?> ><a href="about.php">About</a></li>
				<li <?php if (strcmp ($_SESSION['page'], 'service') == 0):?>	class="active" <?php endif ?>><a href="service.php">Services</a></li>
				<li <?php if (strcmp ($_SESSION['page'], 'work') == 0):?>	class="active" <?php endif ?>><a href="work.php">Our Work</a></li>
				<li <?php if (strcmp ($_SESSION['page'], 'track') == 0):?>	class="active" <?php endif ?>><a href="track.php">Track Order</a></li>
				<!--<li><a href="process.html">Process</a></li>
				<li><a href="typo.html">Typography</a></li>-->
				<li><a href="contact.html">Contact</a></li>
				<!--
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-truck" aria-hidden="true"></i> Track Order<b class="caret"></b></a>
					<div class="dropdown-menu">
						<div class="track-w3ls">
							<h3>Enter Your Tracking Code</h3>
							<form action="process.html" method="post">
								<input type="text" name="trackcode" placeholder="Enter Tracking Code" required />
								<button type="submit" class="btn btn-primary">Track</button>
							</form>
							<p class="track-p1">Contact Us :</p>
							<p class="track-p2"><a href="mailto:mail@example.com">mail@example.com</a></p>
						</div>
					</div>
				</li>
				-->

			</ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<!-- navigation -->
