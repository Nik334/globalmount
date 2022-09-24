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
                            <a href="<?php echo base_url('/Home');?>">
                                <span class="glyphicon glyphicon-home"></span> 
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('/Admin/editAnno'); ?>">
                                <span class="glyphicon glyphicon-edit"></span> 
                                Edit Announcement
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('Admin/viewContactUs'); ?>">
                                <span class="glyphicon glyphicon-phone"></span> 
                                View Contact Us
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?php echo site_url('/Admin/logout');?>">
                                <span class="glyphicon glyphicon-log-out"></span> 
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </body>
</html>
