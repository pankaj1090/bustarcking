<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    ADD DRIVER
                </h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>ADD DRIVER</h2>
                        </div>
                        <div class="body">
                             <?php $attributes = array('id' => 'form_validation');
                            echo form_open_multipart('Webservice/add_driver', $attributes); ?>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" required="" name="name" class="form-control" aria-required="true">
                                        <label class="form-label">Name</label>
                                    </div>
                                </div>                                        
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" required="" name="mobile_no" class="form-control" aria-required="true" pattern="[789][0-9]{9}">
                                        <label class="form-label">Mobile No.</label>
                                    </div>
                                </div>
                                 <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" required="" name="password" class="form-control" aria-required="true">
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>
                                 <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" required="" name="route" class="form-control" aria-required="true">
                                        <label class="form-label">Route</label>
                                    </div>
                                </div>                                         
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea required="" class="form-control no-resize" rows="3" cols="20" name="address" aria-required="true" minlength="3" maxlength="250"></textarea>
                                        <label class="form-label">Address</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Select Bus No.</label>
                                        <select name="bus_no">
                                             <?php foreach ($merchant as $val) { ?>
                                            <option value="<?php echo isset($val->id) ? $val->id: ""; ?>"><?php echo isset($val->bus_no) ? $val->bus_no: ""; ?>
                                            </option>           
                                            <?php }?>
                                        </select>
                                    </div>
                                </div> 
                                <div class="form-group form-float">
                                    <div class="">
                                        <input type="file" required="" name="image" class="form-control" aria-required="true" style="padding: 0;">
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