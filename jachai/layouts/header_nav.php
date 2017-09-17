
<!-- style codes for header -->
<link href="https://fonts.googleapis.com/css?family=Boogaloo" rel="stylesheet">


<style>

/*search bar header*/
	input[type=text] {
			width: 130px;
			box-sizing: border-box;
			border: 2px solid #ccc;
			font-size: 5px;
			background-color: white;
			background-image: url('searchicon.png');
			background-position: 10px 10px; 
			background-repeat: no-repeat;
			padding: 12px 20px 12px 40px;
			-webkit-transition: width 0.4s ease-in-out;
			transition: width 0.4s ease-in-out;
			font-family: 'Boogaloo', cursive;
			border-radius: 15px;
		}

		input[type=text]:focus {
			width: 100%;
  			border-color: #000000;
  			box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgb(0, 0, 0);
		}
	/*search bar header end*/

		.search_but{
			background-color: #c9c9c9;
			border: 1px;
		}

		.search_but:hover{
			background: rgb(0, 0, 0);
  			background: -webkit-gradient(linear, left top, left bottom, from(rgb(0, 0, 0)), to(rgb(0, 0, 0));
 			background: -moz-linear-gradient(top, rgb(0, 0, 0), rgb(0, 0, 0));
		}



</style>


<!-- Start Header -->

		<div class="row">
			
			<div class="col-sm-2" style="padding-left: 20px;">
				<img src="assets/logo/jachai_logo%20-%20209%20x%2094%20px.png" style="height: 60px; width:200px;"/>
			</div>
			<div class="col-sm-3" style="padding-left: 50px;">
				<!--  search bar deleted -->
				<div class="input-group input-group-lg">
			      <input type="text" class="form-control" placeholder="Search">
			      <div class="input-group-btn">
			        <button class="btn btn-info search_but" type="submit"><i class="glyphicon glyphicon-search"></i></button>
			      </div>
			    </div>
			</div>
			<div class="col-sm-7">
				<nav class="navbar navbar-default">
					  <div class="container-fluid" style="font-family: 'Boogaloo', cursive; font-size:20px;">
						<div class="navbar-header">
								<a class="navbar-brand" href="#"> <i class="fa fa-phone"></i> 01xxxxxxxxx</a>
						</div>
						<ul class="nav navbar-nav">
						  <li><a href="#">Everyday (9am-10pm)</a></li>
						  <li style="padding-left:40px;"><a href="login.html">Log In</a></li>
						  <li><a href="sign.html">Sign Up</a></li>
						  <li><a href="https://www.facebook.com/ewucopc" target="_blank" rel="nofollow"><i class="fa fa-facebook"></i></a></li>
						  <li><a href="https://twitter.com/" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a></li>
						  <li><a href="###" rel="nofollow" target="_blank"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					  </div>
				</nav>
			</div>
			
		</div>
		<!-- END Header -->