<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>2014 Leadership Academy - Puerto Rico, October 23-25, 2014</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">	
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:300,400,700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #FFF !important;
			font-weight: 400;
		}

		.panel-top{
			background: #4d6c9f;
			height: 140px;
			color: #fffefe;
		}
/*div { width: 300px; }*/
ul li { float: left; border-right: 1px solid black; padding: 0 .5em; }
ul li:last-child { border: 0; }	
		.text-left{
			text-align: left;
			margin-top: 50px;
		}
		.text-right{
			text-align: right;
			margin-top: 50px;
			font-size: 32px;
		}
		.panel-one{
			min-height: 920px;
		}
		.content-one-text{
			font-size: 25px;
			padding: none;
		}
		.panel-two{
			height: 910px;
		}
		.panel-three{
			color: #000;
		}
		.schedule-text{
			font-size: 24px;
			font-weight: 300;
		}
	</style>


</head>
<body>
<!-- 	<div class="container-fluid panel-top">
		<div class="col-md-6 text-left">Presented by</div>
		<div class="col-md-6 text-right">
			<ul class="nav nav-pills">
			  <li class="active"><a href="#">Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</a></li>
			  <li><a href="#">Speakers&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</a></li>
			  <li><a href="#">Schedule&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</a></li>
			  <li><a href="#">Location&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</a></li>
			  <li><a href="#">Register</a></li>
			</ul>			
		</div>
	</div> -->


<nav class="navbar navbar-default panel-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      Presented by
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
		  <li class="active"><a href="#">Home</a></li>
		  <li><a href="#">Speakers</a></li>
		  <li><a href="#">Schedule</a></li>
		  <li><a href="#">Location</a></li>
		  <li><a href="#">Register</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>	

	<div class="container-fluid panel-one">
		<div class="container">
			<div style="margin-top: 70px;">
				<img src="/images/leadership_logo.png" class="pull-left img-responsive" style="margin-bottom: 160px">
			</div>
			<div class="col-md-12 text-center">
				<h1>Welcome to Puerto Rico</h1>
				<div class="col-md-2"></div> 
				<div class="col-md-8">
					<div class="content-one-text text-center">In its eighth year, the 2014 Leadership Academy is an opportunity for you to enrich your career and enhance your leadership skills. We'll inspire you to reach new heights with AFP and within the profession, while engaging with other AFP members. Leadership Academy is a members-only event and a benefit for leaders within the AFP community.<br>We look forward to seeing you in Puerto Rico in October!</div>
				</div>
				<div class="col-md-2"></div>
			</div>
			<div class="col-md-12">
				<img src="/images/relationship_science.png" class="pull-left img-responsive">
			</div>
		</div>
	</div>

	<div class="container-fluid panel-two">
		<div class="col-md-6 speaker-one"></div>
		<div class="col-md-6 speaker-two"></div>
	</div>	

	<div class="container-fluid panel-three">
		<div class="col-md-3 text-left">
			<h2>Thursday, October 30, 2014</h2>
			<div class="schedule-text">7:30 - 5:00 PM<br>Registration</div>
		</div>
		<div class="col-md-3 text-left">
			<h2>Friday, October 30, 2014</h2>			
		</div>
		<div class="col-md-3 text-left">
			<h2>Friday, October 30, 2014</h2>			
		</div>
		<div class="col-md-3 text-left">
			<h2>Saturday, October 30, 2014</h2>			
		</div>
	</div>

</body>
</html>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>	
<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>	
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js"></script>	
<script type="text/javascript" src="javascript/jquery.anystretch.min.js"></script>	

<script type="text/javascript">
	$(document).ready(function(){
		$(".panel-one").anystretch('images/panel_one_bkg_image.png', {speed: 150});
		$(".panel-two").anystretch('images/speaker_one.jpg');
	});
</script>
