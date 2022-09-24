<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="imageCaroual" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#imageCaroual" data-slide-to="0" class="active"></li>
                            <li data-target="#imageCaroual" data-slide-to="1"></li>
                            <li data-target="#imageCaroual" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="<?php echo base_url('assests/images/b4.jpg');?>" class="img-responsive"/>
                                <div class="carousel-caption">
                                    <h3>Gaya College Gaya</h3>
                                    <p>Welcome to Gaya College</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url('assests/images/b5.jpg');?>" class="img-responsive"/>
                                <div class="carousel-caption">
                                    <h3>Gaya College Gaya</h3>
                                    <p>Welcome to Gaya College</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url('assests/images/b6.jpg');?>" class="img-responsive"/>
                                <div class="carousel-caption">
                                    <h3>Gaya College Gaya</h3>
                                    <p>Welcome to Gaya College</p>
                                </div>
                            </div>
                        </div>
                        <a href="#imageCaroual" class="carousel-control left" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a href="#imageCaroual" class="carousel-control right" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <br/>
    </body>
</html>
