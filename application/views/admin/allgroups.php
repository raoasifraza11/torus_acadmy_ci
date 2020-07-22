
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
                    <h3>Groups</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>All Groups</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Subject Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>All Groups</h3>
                            </div>
                         
                        </div>
                      
                        <div class="table-responsive">
                            <table class="table display data-table text-nowrap">
                                <thead>
                                    <tr>
                                     
                                        <th>Group Name</th>
                                       
                                        <th>Teacher Name</th>
                                    </tr>
                                </thead>
                                <?php
                                    foreach($groups as $group):?>
                                    <tr>
                                      
                                      
                                        <td class="text-capitalize"><?= $group['group_name']?></td>
                                      
                                        <td class="text-capitalize"><?= $group['fname'].' '.$group['lname']?></td>
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
      order: [0,'asc'],
      responsive: true
    
    }
  );
</script>          

