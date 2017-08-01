<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    EDIT DRIVER
                </h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>EDIT DRIVER</h2>
                        </div>
                        <div class="body">
                             <?php $attributes = array('id' => 'form_validation');
                            echo form_open_multipart('Webservice/update_driver', $attributes); ?>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" required="" name="name" class="form-control" aria-required="true" value="<?php echo isset($get_driver[0]->name) ? $get_driver[0]->name:''; ?>">
                                         <input class="form-control" type="hidden" value="<?php echo $get_driver[0]->id; ?>" name="id" required>
                                        <label class="form-label">Name</label>
                                    </div>
                                </div>                                        
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" required="" name="mobile_no" class="form-control" aria-required="true" value="<?php echo isset($get_driver[0]->mobile_no) ? $get_driver[0]->mobile_no:''; ?>">
                                        <label class="form-label">Mobile No.</label>
                                    </div>
                                </div>
                                 <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" required="" name="password" class="form-control" aria-required="true" value="<?php echo isset($get_driver[0]->password) ? $get_driver[0]->password:''; ?>">
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>
                                 <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" required="" name="route" class="form-control" aria-required="true" value="<?php echo isset($get_driver[0]->route) ? $get_driver[0]->route:''; ?>">
                                        <label class="form-label">Route</label>
                                    </div>
                                </div>                                         
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea required="" class="form-control no-resize" rows="3" cols="20" name="address" aria-required="true" minlength="3" maxlength="250" value=""><?php echo isset($get_driver[0]->address) ? $get_driver[0]->address:''; ?></textarea>
                                        <label class="form-label">Address</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" required="" name="bus_no" class="form-control" aria-required="true" value="<?php echo isset($get_driver[0]->bus_no) ? $get_driver[0]->bus_no:''; ?>" readonly>
                                        <label class="form-label">Bus No.</label>
                                    </div>
                                </div> 
                                <div class="form-group form-float">
                                    <div class="col-md-6 col-sm-6">
                                        <input type="file"  name="image" class="form-control" aria-required="true" style="padding: 0;">
                                    </div>
                                    <div class="col-md-6 col-sm-6">                             
                                    	<img style="max-height: 100px;" src="<?php echo base_url($get_driver[0]->image);  ?>">
                                    </div>
                                </div>                                       
                                <button type="submit" class="btn btn-primary waves-effect">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>