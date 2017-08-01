<section class="content">
<?php  ?>
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    Add Bus
                </h2>
            </div>
            <!-- Add category Validation -->
            <div class="row clearfix">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="card">
                        <div class="header">
                            <h2>Add Bus</h2>
                        </div>
                        <div class="body">
                            <?php $attributes = array('id' => 'form_validation');
                            echo form_open_multipart('Webservice/add_bus', $attributes); ?>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="bus_no" required>
                                        <label class="form-label">Bus No</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="sevice_provider" required>
                                        <label class="form-label">Service Provider</label>
                                    </div>
                                </div>
                               <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="owner_name" required>
                                        <label class="form-label">Owner Name</label>
                                    </div>
                                </div>
                               <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="owner_no" pattern="[789][0-9]{9}" required>
                                        <label class="form-label">Owner No</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                     <div class="card">
                        <div class="header">
                            <h2>Bus Track</h2>
                        </div>
                        <div class="body">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        </div>
                     </div>
                </div>
            </div>
            <!-- #END# Add category Validation -->
        </div>
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    List of Bus
                </h2>
            </div>
            <!-- List of category -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                List of Bus
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0);">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-12">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 135px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">S. No.</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 217px;" aria-label="Position: activate to sort column ascending">Bus No</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 217px;" aria-label="Position: activate to sort column ascending">Service Provider</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 217px;" aria-label="Position: activate to sort column ascending">Owner Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 217px;" aria-label="Position: activate to sort column ascending">Owner No</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 41px;" aria-label="Age: activate to sort column ascending">Status</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 41px;" aria-label="Age: activate to sort column ascending">Delete</th></tr>
                                </thead>
                                <tfoot>
                                    <tr><th rowspan="1" colspan="1">S. No.</th>
                                    <th rowspan="1" colspan="1">Bus No.</th>
                                    <th rowspan="1" colspan="1">Service Provider</th>
                                    <th rowspan="1" colspan="1">Owner Name</th>
                                    <th rowspan="1" colspan="1">Owner No.</th>
                                    <th rowspan="1" colspan="1">Status</th>
                                    <th rowspan="1" colspan="1">Delete</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                <?php foreach ($merchant as $val) {

                               ?>
                                   <tr role="row" class="odd">
                                        <td class="sorting_1"><?php echo $val->id; ?></td>
                                        <td><?php echo $val->bus_no; ?></td>
                                        <td><?php echo $val->sevice_provider; ?></td>
                                        <td><?php echo $val->owner_name; ?></td>
                                        <td><?php echo $val->owner_no; ?></td>
                                        <td><?php echo $val->status; ?></td>
                                        <td><a class="btn btn-danger" href="<?php echo base_url('Webservice/deletebus');?>/<?php echo $val->id; ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
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
