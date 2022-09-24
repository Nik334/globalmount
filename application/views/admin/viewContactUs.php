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
                <div class="table-responsive">
                    <table class="table table-hover table-condensed table-responsive">
                        <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Time</th>
                                <th>Show Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($unread as $row){ ?>
                            <tr class="danger">
                                <td><?= $row->fullName; ?></td>
                                <td><?= $row->mobile; ?></td>
                                <td><?= $row->email; ?></td>
                                <td><?= $row->date; ?></td>
                                <td><a href="<?= site_url('Admin/viewDetails'); ?>/<?= $row->id ?>">Show</a></td>
                            </tr>
                            <?php } ?>
                            <?php foreach ($read as $row){ ?>
                            <tr>
                                <td><?= $row->fullName; ?></td>
                                <td><?= $row->mobile; ?></td>
                                <td><?= $row->email; ?></td>
                                <td><?= $row->date; ?></td>
                                <td><a href="<?= site_url('Admin/viewDetails'); ?>/<?= $row->id ?>">Show</a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
