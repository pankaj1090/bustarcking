<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                All data
<!--                <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small>-->
            </h2>
        </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Business Template
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
                                <th>Business Type</th>
                                <th>Urls</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php  foreach ($urls as $val ){ ?>
                            <tr>
                                <td><?php echo $val->id; ?></td>
                                <td><?php echo $val->businesstype; ?></td>
                                <td><?php echo $val->url; ?></td>

                                <td><a href="<?php echo  base_url('Urls/urls_edit/').$val->id; ?>">Edit</a></td>
                                <td><a href="<?php echo  base_url('Urls/urls_delete/').$val->id; ?>">Delete</a></td>
                            </tr>
                                <?php  } ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->

    </div>
</section>