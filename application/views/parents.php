<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                All Parents
            </h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Parents Details
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Children Name</th>
                                <th>Address</th>
                                <th>Class </th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php  foreach ($merchant as $val ){ ?>
                                <tr>
                                    <td><?php echo $val->id; ?></td>
                                    <td><?php echo $val->fullname; ?></td>
                                    <td><?php echo $val->mobile_no; ?></td>
                                    <td><?php echo $val->children_name;  ?></td>
                                    <td><?php echo $val->address;  ?></td>
                                    <td><?php echo $val->standard;  ?></td>
                                    <td><a class="btn btn-danger" href="<?php echo base_url('Webservice/deleteparents');?>/<?php echo $val->id; ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
                                </tr>
                            <?php  } ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>