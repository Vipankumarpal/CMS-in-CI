<?php
$this->load->view('Admin/header');
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="my-4">Doctors</h1>
                        
                       <?php $success = $this->session->userdata('success'); ?>
                            <?php if(!empty($success)){ ?>


                            <div class="alert alert-success" role="alert">
                               <?php echo $success; ?>
                            </div>
                            <?php } ?>
                        <div class="card mb-4">
                            
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Add Doctor
                            </div>
                            <div class="card-body">
                                <form method="post" action="<?php echo base_url().'Admin/addDoctor'; ?>" name="addForm" id="addForm">
                                        
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="name" value="<?php echo set_value('name'); ?>" placeholder="Name">
                                        <p class="help-block"><?php echo form_error('name'); ?></p>
                                    </div>

                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="designation" value="<?php echo set_value('designation'); ?>" placeholder="Designation">
                                        <p class="help-block"><?php echo form_error('designation'); ?></p>
                                    </div>

                                    

                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="age" value="<?php echo set_value('age'); ?>" placeholder="Age">
                                        <?php echo form_error('age'); ?>
                                    </div>

                                    <div class="mb-3">
                                        <input type="tel" class="form-control" name="availability" value="<?php echo set_value('availability'); ?>" placeholder="Availability">
                                        <?php echo form_error('availability'); ?>
                                    </div>
                                    
                                    <button type="submit" name="submit" class="btn btn-success form-control">Add Doctor</button>
                                    </form>
                            </div>
                        </div>
                    </div>
                </main>
<?php
$this->load->view('Admin/footer');
?>