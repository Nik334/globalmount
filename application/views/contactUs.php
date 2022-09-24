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
        <form method="post" action="<?= site_url('Home/validateContactUs'); ?>">
            <div class="container-fluid bg-primary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <h2>Get In Touch</h2>
                            <hr/>
                            <div class="form-group">
                                <input type="text" class="form-control" value="<?= set_value('fullName') ?>" id="fullName" name="fullName" placeholder="Your Full Name"/>
                                <span class="text-danger"><?php echo form_error("fullName"); ?></span>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" value="<?= set_value('mobile') ?>" id="mobile" name="mobile" placeholder="Your Mobile Number"/>
                                <span class="text-danger"><?php echo form_error("mobile"); ?></span>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" value="<?= set_value('email') ?>" id="email" name="email" placeholder="Your Email Address"/>
                                <span class="text-danger"><?php echo form_error("email"); ?></span>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="4" value="<?= set_value('msg') ?>" id="msg" name="msg" placeholder="Write us somethings"></textarea>
                                <span class="text-danger"><?php echo form_error("msg"); ?></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-warning" id="send">Send Message</button>
                            </div>
                        </div>
                        <div class="col-md-5 col-md-offset-1 col-sm-12">
                            <h2>Contact Information</h2>
                            <hr/>
                            <div class="row input-lg form-group">
                                <div class="col-md-1 col-sm-2 col-xs-2">
                                    <span class="fa fa-font"></span>
                                </div>
                                <div class="col-md-11 col-sm-10 col-xs-10">
                                    Gaya College Gaya
                                    <br/>
                                    Near Asasingh More,Gaya
                                </div>
                            </div>
                            <div class="row input-lg form-group">
                                <div class="col-md-1 col-sm-2 col-xs-2">
                                    <span class="fa fa-phone"></span>
                                </div>
                                <div class="col-md-11 col-sm-10 col-xs-10">
                                    +91 3982837293
                                </div>
                            </div>
                            <div class="row input-lg form-group">
                                <div class="col-md-1 col-sm-2 col-xs-2">
                                    <span class="fa fa-envelope"></span>
                                </div>
                                <div class="col-md-11 col-sm-10 col-xs-10">
                                    gayacollege@gmail.com
                                </div>
                            </div>
                            <div class="row input-lg form-group">
                                <div class="col-md-1 col-sm-2 col-xs-2">
                                    <span class="fa fa-globe"></span>
                                </div>
                                <div class="col-md-11 col-sm-10 col-xs-10">
                                    www.gayacollege.com
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
