<?php
$this->load->view('Admin/header');
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="my-4">Appointments</h1>
                        
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                All Appointments
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Contact</th>
                                            <th>Age</th>
                                            <th>Appointment Date</th>
                                            <th>Appointment Time</th>
                                            <th>Message</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    

                                    <tbody>
                                        <?php if(!empty($appointments)){ 
                                    foreach ($appointments as $appointment){

                                         //print_r($appointment);  exit;
                                    ?>
                                        <tr>
                                            <td><?php echo $appointment['name']; ?></td>
                                            <td><?php echo $appointment['email']; ?></td>
                                            <td><?php echo $appointment['contact']; ?></td>
                                            <td><?php echo $appointment['age']; ?></td>
                                            <td><?php echo $appointment['appointment_date']; ?></td>
                                            <td><?php echo $appointment['appointment_date']; ?></td>
                                            <td><?php echo $appointment['message']; ?></td>
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