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
        <form method="post" action="<?php echo base_url("index.php/Admin/validateAnno");?>">
            <div class="container">
                <?php
                    if($this->uri->segment(2) == 'annoInserted')
                    {
                        echo '<div class="alert alert-success">
                                <span class="glyphicon glyphicon-check"></span> <strong>Data Inserted Successfully</strong>
                            </div>';
                    }
                ?>
                <h1>Announcement</h1>
                <hr/>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <label for="anno">Declare Announcement</label>
                            <input type="text" class="form-control" value="<?php echo set_value('anno'); ?>" name="anno" id="anno" placeholder="Announcement"/>
                            <!--<div class="help-block with-errors"></div>-->
                            <span class="text-danger"><?php echo form_error("anno"); ?></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">ADD</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
