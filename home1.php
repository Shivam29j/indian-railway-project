<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
        indian railway
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/respond.min.js"></script>

    <link rel="shortcut icon" href="favicon.png">



</head>

<body>
    <!-- *** TOPBAR ***
 _________________________________________________________ -->
    <div id="top1" style="background-color:#AB4C46">
        <div class="container">
		<div class="welcome">
		<marquee><h1 style="color:white"><span>WELCOME </span>TO INDIAN<span> RAILWAY</span></h1></marquee>
          </div>  
          <!--  <div class="col-md-6" data-animate="fadeInDown">
                <marquee>WELCOME TO INDIAN RAILWAY</marquee>
            </div>
			<div class="col-md-6" data-animate="fadeInDown">
                <marquee>WELCOME TO INDIAN RAILWAY</marquee>
            </div> -->
        </div>
        

    </div>
	<div class="modal fade" id="seat-availability" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Check seat availability</h4>
                    </div>
                    <div class="modal-body">
                        <form action="seat-avail.php" method="post" name="seat-availability">
                            <div class="form-group">
							ENTER TRAIN NUMBER:
                                <input type="text" class="form-control" name="a" id="aa" placeholder="train number">
                            </div>
                            <div class="form-group">
							ENTER DATE OF JOURNEY:
                                <input type="date" class="form-control" name="b" id="bb">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-primary">GO!</button>
                            </p>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="#" data-animate-hover="bounce">
                    <img src="img/indian-rail.png" alt="Obaju logo" class="hidden-xs">
                    <img src="img/indian-rail.png" alt="Obaju logo" class="visible-xs"><span class="sr-only">Obaju - go to homepage</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="home.php">Home</a>
                    </li>
					
					<li><a href="register.php">register</a>
                    </li>
					<li><a href="#" data-toggle="modal" data-target="#seat-availability">seat availability</a>
                    </li>
                    
                </ul>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">

               <!-- <div class="navbar-collapse collapse right" id="basket-overview">
                    <a href="basket.html" class="btn btn-primary navbar-btn">
					<i class="fa fa-shopping-cart"></i><span class="hidden-sm">3 items in cart</span></a>
                </div> -->
                <!--/.nav-collapse -->

                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>

            </div>

             <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">

			<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

		    </span>
                    </div>
                </form>

            </div> 
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->

    <div id="all">

        <div id="content" style="background-color:#787715  ">
            <div class="container" style="background-color:#AB4C46  ">

                <div class="col-md-12">
                    
                </div>
				<div class="col-md-9">
                <div class="box">
				<div class="modal-content">
				<center><h2 class="modal-title" id="Login" style="color:red">User Not Exist</h2></center>
				<center><h4 class="modal-title" id="Login">Please Re Enter Email And Password</h4></center>
				</div><br>
				<div class="modal-content">
                    <div class="modal-header">
                        
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="login.php" method="post" name="login">
                            <div class="form-group">
                                <input type="text" class="form-control" name="a" id="email-modal" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="b" id="password-modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="register.php"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute</p>

                    </div>
                </div>
                       <!-- <h1>Ladies</h1>
                        <p>In our Ladies department we offer wide selection of the best products we have found and carefully selected worldwide.</p>
                       -->
				   </div>

                    <div class="box info-bar">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 products-showing">
                                <h5>Please Fill All Detail Carefully</h5>
                            </div>

                           
                        </div>
                    </div>
                    
  				</div>

                <div class="col-md-3">
                    <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">FIND TRAIN:</h3>
                        </div>
						<div class="panel-body">
						
						<form method="POST" action="#" name="find-train">
						FROM:<br>
						<input type="text" name="a" id="aa"><br>
						TO:<br>
						<input type="text" name="b" id="bb"><br>
						JOURNEY DATE:
						<input type="date" name="c" id="cc"><br><br>
						<input type="submit" value="GO"><br><br>
						<input type="reset" value="RESET"><br>
						</form>
						</div>

                     
                    </div>
					<div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">CHECK PNR:</h3>
                        </div>
						<div class="panel-body">
						
						<form method="POST" action="#" name="check-pnr">
						ENTER YOUR PNR NUMBER:<br>
						<input type="text" name="a"><br><br>
						<input type="submit" value="CHECK"><br>
						
						</form>
						</div>

                     
                    </div>

                    

                    <!-- *** MENUS AND FILTERS END *** -->

                    
                </div>

                
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <!-- *** FOOTER ***
 _________________________________________________________ -->
        <div id="footer" data-animate="fadeInUp">
            <div class="container">
                <div class="col-md-12">
                    <div id="main-slider">
                        
                        <div class="item">
                            <img class="img-responsive" src="img/r2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="img/r3.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="img/r4.jpg" alt="">
                        </div>
                    </div>
                    <!-- /#main-slider -->
                </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->




        <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
        <div id="copyright" style="background-color:#AB4C46">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">© copyright indian railway.</p>

                </div>
                <div class="col-md-6">
                    <h4 class="pull-right">Help desk: <br>123-4567890
                    </h4>
                </div>
            </div>
        </div>
        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->


    

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>






</body>

</html>