<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Contact - CMS</title>


        <link href="<?php echo base_url().'assets/css/styles.css';?>" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Book an Appointment</h3></div>
                                    <div class="card-body">
                                        <?php $success = $this->session->userdata('success'); ?>
            <?php if(!empty($success)){ ?>


            <div class="alert alert-success" role="alert">
               <?php echo $success; ?>
            </div>
            <?php } ?>
                                        

                                    <form method="post" action="<?php echo base_url().'Contact'; ?>" name="contactForm" id="contactForm">
                                        
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="name" value="<?php echo set_value('name'); ?>" placeholder="Name">
                                        <p class="help-block"><?php echo form_error('name'); ?></p>
                                    </div>

                                    <div class="mb-3">
                                        <input type="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email">
                                        <?php echo form_error('email'); ?>
                                    </div>

                                    <div class="mb-3">
                                        <input type="tel" class="form-control" name="contact" value="<?php echo set_value('contact'); ?>" placeholder="Contact">
                                        <?php echo form_error('contact'); ?>
                                    </div>

                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="age" value="<?php echo set_value('age'); ?>" placeholder="Age">
                                        <?php echo form_error('age'); ?>
                                    </div>

                                    <div class="mb-3">
                                        <input type="date" class="form-control" name="appointment_date" placeholder="Apointment Date">
                                        <?php echo form_error('appointment_date'); ?>
                                    </div>

                                    <div class="mb-3">
                                        <input type="time" class="form-control" name="appointment_time" placeholder="Appointment Time">
                                        <?php echo form_error('appointment_time'); ?>
                                    </div>

                                    <div class="mb-3" >
                                        <textarea placeholder="Type your essential message here... " class="form-control" name="message"></textarea>
                                        <?php echo form_error('message'); ?>
                                    </div>
                                    
                                    
                                    <button type="submit" name="submit" class="btn btn-success form-control">Make an Appointment</button>
                                    </form>

                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url().'assets/js/scripts.js';?>" ></script>
    </body>
</html>
