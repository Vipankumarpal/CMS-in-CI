<?php
$this->load->view('Admin/header');
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="my-4">Patients</h1>
                        
                       <?php $success = $this->session->userdata('success'); ?>
                            <?php if(!empty($success)){ ?>


                            <div class="alert alert-success" role="alert">
                               <?php echo $success; ?>
                            </div>
                            <?php } ?>
                        <div class="card mb-4">
                            
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Edit Patient
                            </div>
                            <div class="card-body">
                                <form method="post" action="<?php echo base_url().'Admin/addPatient'; ?>" name="addForm" id="addForm">
                                        
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="name" value="<?php echo set_value('name',$patient['name']); ?>">
                                        <p class="help-block"><?php echo form_error('name'); ?></p>
                                    </div>

                                    <div class="mb-3">
                                        <select name="gender" id="gender" class="form-control">
                                          <option value="">--Select Gender--</option>
                                          <option value="male">Male</option>
                                          <option value="female">Female</option>
                                          <option value="others">Others</option>
                                        </select>
                                        <p class="help-block"><?php echo form_error('gender'); ?></p>
                                    </div>

                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="age" value="<?php echo set_value('age'); ?>" placeholder="Age">
                                        <?php echo form_error('age'); ?>
                                    </div>

                                    <div class="mb-3">
                                        <input type="tel" class="form-control" name="contact" value="<?php echo set_value('contact'); ?>" placeholder="Contact">
                                        <?php echo form_error('contact'); ?>
                                    </div>

                                    <div class="mb-3" >
                                        <textarea placeholder="Type your address here... " class="form-control" name="address"></textarea>
                                        <?php echo form_error('address'); ?>
                                    </div>

                                     <div class="mb-3" >
                                        <textarea placeholder="Type your reason/medician here... " class="form-control" name="reason_medician"></textarea>
                                        <?php echo form_error('reason_medician'); ?>
                                    </div>
                                    
                                    
                                    <button type="submit" name="submit" class="btn btn-success form-control">Edit Patient</button>
                                    </form>
                            </div>
                        </div>
                    </div>
                </main>
<?php
$this->load->view('Admin/footer');
?>