                        <!--session alerts-->
                        <?php if($this->session->flashdata('student_registered')):?>
                        <?php echo
                        '<p class="alert alert-success  alert-dismissible" role="alert">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        '.$this->session->flashdata('student_registered').'
                                        </p>';?>
                                <?php
                                endif;?>

                                <?php if($this->session->flashdata('teacher_registered')):?>
                                <?php echo
                                '<p class="alert alert-success alert-dismissible" role="alert">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    '.$this->session->flashdata('teacher_registered').'
                                        </p>';?>
                                <?php
                                endif;?>

                                <?php if($this->session->flashdata('studentupdated')):?>
                                        <?php echo
                                        '<p class="alert alert-success alert-dismissible " role="alert">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            '.$this->session->flashdata('studentupdated').'
                                                </p>';?>
                                        <?php
                                        endif;?>

                                <?php if($this->session->flashdata('teacherupdated')):?>
                                        <?php echo
                                        '<p class="alert alert-success alert-dismissible " role="alert">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            '.$this->session->flashdata('teacherupdated').'
                                                </p>';?>
                                        <?php
                                        endif;?>        

                                        <?php if($this->session->flashdata('login_failed')):?>
                                        <?php echo
                                        '<p class="alert alert-danger alert-dismissible " role="alert">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                       
                                            '.$this->session->flashdata('login_failed').'
                                                </p>';?>
                                        <?php
                                        endif;?>      

                                           <?php if($this->session->flashdata('user_logged_in')):?>
                                        <?php echo
                                        '<p class="alert alert-success alert-dismissible " role="alert">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                       
                                            '.$this->session->flashdata('user_logged_in').'
                                                </p>';?>
                                        <?php
                                        endif;?>  
                                         <?php if($this->session->flashdata('user_logged_out')):?>
                                        <?php echo
                                        '<p class="alert alert-success alert-dismissible " role="alert">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                       
                                            '.$this->session->flashdata('user_logged_out').'
                                                </p>';?>
                                        <?php
                                        endif;?>      
                                        
                                        <?php if($this->session->flashdata('teacher_added')):?>
                                        <?php echo
                                        '<p class="alert alert-success alert-dismissible " role="alert">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                       
                                            '.$this->session->flashdata('teacher_added').'
                                                </p>';?>
                                        <?php
                                        endif;?> 
                                         <?php if($this->session->flashdata('remove_teacher')):?>
                                        <?php echo
                                        '<p class="alert alert-danger alert-dismissible " role="alert">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                       
                                            '.$this->session->flashdata('remove_teacher').'
                                                </p>';?>
                                        <?php
                                        endif;?> 