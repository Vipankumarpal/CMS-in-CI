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
                                All Patients
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>Age</th>
                                            <th>Contact</th>
                                            <th>Address</th>
                                            <th>Reason/Medician</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    

                                    <tbody>
                                        <?php if(!empty($patients)){ 
                                    foreach ($patients as $patient){

                                         // print_r($patient);  exit;
                                    ?>
                                        <tr>
                                            <td><?php echo $patient['name']; ?></td>
                                            <td><?php echo $patient['gender']; ?></td>
                                            <td><?php echo $patient['age']; ?></td>
                                            <td><?php echo $patient['contact']; ?></td>
                                            
                                            <td><?php echo $patient['address']; ?></td>
                                            <td><?php echo $patient['reason_medician']; ?></td>
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