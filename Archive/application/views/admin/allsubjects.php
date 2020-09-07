
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <?php
            $this->load->view('admintemplates/sidebar')
            ?>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Subjects</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>All Subjects</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Subject Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>All Subjects</h3>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                      
                        <div class="table-responsive">
                            <table class="table display data-table text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Fees</th>
                                        <th>Teacher Id</th>
                                    </tr>
                                </thead>
                                <?php
                                    foreach($subjects as $subject):?>
                                    <tr>
                                      
                                        <td class="text-capitalize"><?= $subject['id']?></td>
                                        <td class="text-capitalize"><?= $subject['name']?></td>
                                        <td class="text-capitalize"><?= $subject['fees']?></td>
                                        <td class="text-capitalize"><?= $subject['teacher_id']?></td>
                                        <?php
                                        endforeach;?>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Subject Table Area End Here -->

      <script>
 $('table').DataTable(
    {
      order: [0,'desc'],
      responsive: true
    
    }
  );
</script>          

