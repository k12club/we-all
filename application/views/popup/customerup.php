<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            ecStock 1.0 | itoffside.com
        </title>
        <!-- tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- bootstrap 3.3.4-->
        <?php echo link_tag('bootstrap/css/bootstrap.min.css'); ?>
        <!-- font awesome icons-->
        <?php echo link_tag('bootstrap/css/font-awesome.min.css'); ?>
        <!-- ionicons-->
        <?php echo link_tag('bootstrap/css/ionicons.min.css'); ?>
        <!--Theme style-->
        <?php echo link_tag('dist/css/AdminLTE.min.css'); ?>
        <!--Theme skin -->
        <?php echo link_tag('dist/css/skins/skin-blue.min.css'); ?>
        <!--Theme skin -->
        <?php echo link_tag('plugins/datatables/dataTables.bootstrap.css'); ?>
        <!--My Custom-->
        <?php echo link_tag('dist/css/mycustom.css'); ?>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- REQUIRED JS SCRIPTS -->

        <!-- jQuery 2.1.4 -->
        <script src="<?php echo base_url(); ?>plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript">
        </script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js" type="text/javascript">
        </script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>dist/js/app.min.js" type="text/javascript">
        </script>
    </head>
    <body class="skin-blue sidebar-mini">
        <div class="wrapper">
            <div class="content-wrapper" style="margin-left: 0;">
                <!-- Main content -->
                <section class="content">
                    <!-- Your Page Content Here -->
                    <div class="box">
                        <div class="box-body">
                            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div id="" class="dataTables_filter" style="text-align: left;">
                                            <form action="" method="GET" name="search">
                                                <label>ค้นหา</label>:<input type="search" name="keyword" class="form-control input-sm" placeholder="ค้นหา Username"></label>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                        <table id="example1" class="table table-bordered table-hover table-striped" role="grid" aria-describedby="example1_info" >
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width:  10%">&nbsp;</th>
                                                    <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 5%;">id</th>
                                                    <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 5%;">#</th>
                                                   <!-- <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 30%;">ชื่อผู้ใช้</th> -->
                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 50%">ชื่อจริง-นามสกุล</th>
                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width:  10%">เบอร์โทร</th>
                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width:  10%">อีเมล์</th>
                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width:  10%">เฟสบุ๊ค</th>
                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width:  10%">ไลน์</th>
                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width:  10%">อินสตาร์แกรม</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (!empty($results)) {
                                                    foreach ($results as $data) { ?>
                                                        <tr role="row">
                                                            <td>
                                                                <a class="btn btn-primary btn-xs" href="#" role="button" onclick="setName('<?php echo $data->firstname;?>','<?php echo $data->id;?>');"><i class="fa fa-check-square-o"></i> เลือก</a>
                                                            </td>
                                                            <td><?php echo $data->id; ?></td>
                                                            <td><img src="<?php echo base_url() . 'pictures/user_' . $data->filename; ?>" alt="" class="img-circle c160"></td>
                                                           <!-- <td>
                                                                <?php echo $data->username; ?>
                                                            </td> -->
                                                            <td><?php echo $data->firstname . ' ' . $data->lastname; ?></td>
                                                            <td><?php echo $data->phone; ?></td>
                                                            <td><?php echo $data->email; ?></td>
                                                            <td><?php echo $data->Facebook; ?></td>
                                                            <td><?php echo $data->line; ?></td>
                                                            <td><?php echo $data->instargram; ?></td>
                                                            
                                                        </tr>
    <?php }
} ?>
                                            </tbody>

                                        </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Total <?php echo $total_rows; ?> entries</div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div id="example1_paginate" class="dataTables_paginate paging_simple_numbers">
<?php echo $link; ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                    </div>
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->
        </div><!-- ./wrapper -->
        <script type="text/javascript">
            function setName(username,id) {
                if (window.opener != null && !window.opener.closed) {
                    var txtusername = window.opener.document.getElementById("open_entry");
                    var txtid = window.opener.document.getElementById("open_id");
                    txtusername.value = username;
                    txtid.value = id;
                }
                //window.opener.document.getElementById("open_qty").focus();
                window.close();
            }
        </script>
    </body>
</html>