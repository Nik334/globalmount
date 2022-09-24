<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="imageMultiCaroual" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#imageMultiCaroual" data-slide-to="0" class="active"></li>
                            <li data-target="#imageMultiCaroual" data-slide-to="1"></li>
                            <li data-target="#imageMultiCaroual" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <img src="<?php echo base_url('assests/images/aquaminz-1507271003.JPG');?>" class="img-responsive"/>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="item">
                                            <img src="<?php echo base_url('assests/images/parth-star-1507198480.JPG');?>" class="img-responsive"/>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="item">
                                            <img src="<?php echo base_url('assests/images/parthmannual-1321102372.jpg');?>" class="img-responsive"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <img src="<?php echo base_url('assests/images/b4.jpg');?>" class="img-responsive"/>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="item">
                                            <img src="<?php echo base_url('assests/images/b5.jpg');?>" class="img-responsive"/>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="item">
                                            <img src="<?php echo base_url('assests/images/b6.jpg');?>" class="img-responsive"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#imageMultiCaroual" class="carousel-control left" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a href="#imageMultiCaroual" class="carousel-control right" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
