<html>
    <head>
        <meta charset="UTF-8">
        <link href="<?php echo base_url('assests/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assests/css/bootstrap-theme.min.css');?>" rel="stylesheet" type="text/css"/>
        <script src="<?php echo base_url('assests/js/jquery-2.2.0.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assests/js/bootstrap.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assests/js/bootstrap-show-password.min.js');?>" type="text/javascript"></script>
        <link href="<?php echo base_url('assests/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="<?php echo base_url('assests/images/LogoGlobalMount.jpg');?>" type="image/gif">
        <title>Global Mount</title>
        <style>
            #social .fa
            {
                color: white;
            }
            #header
            {
                padding-top: 10px;
                background-color: black;
            }
            .affix 
            {
                top: 0;
                width: 100%;
                z-index: 9999;
            }
            
        </style>
        <script>
            $(document).ready(function(){
                $('#social .fa').mouseover(function(){
                    $(this).addClass('fa-lg');
                });
                $('#social .fa').mouseout(function(){
                    $(this).removeClass('fa-lg');
                });
            });
        </script>
    </head>
    <body>
        <div id="header" class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <img src="<?php echo base_url('assests/images/LogoGlobalMount.jpg');?>" class="img-responsive" style="margin-left: 60px;height:100px;"/>
                </div>
                <div class="col-md-8">
                    <img src="<?php echo base_url('assests/images/LogoMakr_4MOscp.png');?>" class="img-responsive" style="margin-left: 60px;height:100px;"/>
                </div>
                <div id="social" class="col-md-2 col-sm-3 col-xs-6 pull-right fa-2x">
                    <a href="#" class="fa fa-facebook-square"></a>
                    <a href="#" class="fa fa-twitter-square"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-skype"></a>
                </div>
            </div>
        </div>
    </body>
</html>
