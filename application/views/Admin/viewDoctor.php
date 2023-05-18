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
                                All Doctors
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Designation</th>
                                            <th>Age</th>
                                            <th>Availability</th>
                                            
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    

                                    <tbody>
                                        <?php if(!empty($doctors)){ 
                                    foreach ($doctors as $doctor){

                                         // print_r($doctor);  exit;
                                    ?>
                                        <tr>
                                            <td><?php echo $doctor['name']; ?></td>
                                            <td><?php echo $doctor['designation']; ?></td>
                                            <td><?php echo $doctor['age']; ?></td>
                                            <td><?php echo $doctor['availability']; ?></td>
                                            
                                            
                                  <td>          
                                <a href="#" class="text-light btn btn-dark"><i class="fas fa-edit me-1"></i></a> 

                                <a onclick="return confirm('Are you sure to delete this?')" href="#" class="text-light btn btn-danger"><i class="fas fa-trash me-1"></i></a>
                            </td>
                                            
                                        </tr>
                                        <?php } 
                                    } else{
                                ?>
                                 <tr>
                                    <td colspan="5">Records Not Found!</td>
                                </tr>
                                <?php
                                    }
                                ?>
                       
                                        
                                    </tbody>

                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
<?php
$this->load->view('Admin/footer');
?>