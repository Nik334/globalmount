<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Login</title>
    </head>
    <body>
        <br><br><br>
        <form method="post" action="<?php echo base_url("/Admin/loginValidate") ?>">
            <div class="container">
                <?= $this->session->flashdata('msg');?>
                <div class="row">
                    <div class="col-sm-offset-3 col-sm-6" style="box-shadow: 0px 30px 60px rgba(0,0,0,0.30)">
                        <div class="jumbotron form-group">
                            <div class="h2  text-center"><strong>Admin</strong></div>
                            <div class="form-group">
                                <input type="text" class="form-control" value="<?= set_value("email")?>" name="email" id="email" placeholder="Username or Email" autofocus=""/>
                                <span class="text-danger"><?php echo form_error("email"); ?></span>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" data-toggle="password" data-toggle="password"/>
                                <span class="text-danger"><?php echo form_error("password"); ?></span>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="form-control btn " id="login" name="login" value="Login" style="background-color: #cccccc">                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
