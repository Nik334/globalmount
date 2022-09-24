<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
    <marquee onmouseover="this.stop()" onmouseout="this.start()">
        <h2><?php echo $announcement; ?></h2>
    </marquee>
        <nav class="navbar navbar-default" data-spy="affix" data-offset-top="197">
            <div class="container-fluid">
                <div class="navbar-header">
<!--                    <div class="navbar-brand">
                        <span class="fa fa-globe"></span> Global Mount
                    </div>-->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="mainNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="<?php echo site_url('/Home');?>">
                                <span class="glyphicon glyphicon-home"></span> 
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" id="master" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-shopping-cart"></span> 
                                Product
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('/User/building');?>">Buildings</a></li>
                                <li><a href="<?php echo site_url('/User/department');?>">Departments</a></li>
                                <li><a href="<?php echo site_url('/User/courses');?>">Courses</a></li>
                                <li><a href="#">Designations</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <span class="glyphicon glyphicon-ok"></span> 
                                Our Clients and Distributors
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-info-sign"></span> 
                                About Us
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Register</a></li>
                                <li><a href="#">Lists</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= site_url('Home/contactUs'); ?>">
                                <span class="glyphicon glyphicon-phone"></span> 
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </body>
</html>
