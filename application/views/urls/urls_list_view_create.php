<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Add URL </h2>
        </div>


        <!-- Vertical Layout | With Floating Label -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Add New Business And Urls
                            <small>please add the new business & Urls</small>
                        </h2>

                    </div>
                    <div class="body">
                        <form method="post" action="<?php echo base_url('Urls/store'); ?>">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="businesstype" id="email_address" class="form-control">
                                    <label class="form-label">Business Type</label>
                                </div>
                            </div>
                            <div class="form-group form-float demo-tagsinput-area  ">
                                <div class="form-line">
                                    <input type="text" name="url" class="form-control" data-role="tagsinput" value="">
<!--                                    <label class="form-label">New Urls</label>-->
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Add </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Vertical Layout | With Floating Label -->
        <!-- #END# Multi Column -->

    </div>
</section>
