<div id="content" class="clearfix">
    <div class="contentwrapper"><!--Content wrapper-->

        <div class="heading">

            <h3>All Package</h3>                    


            <div class="resBtnSearch">
                <a href="#"><span class="icon16 icomoon-icon-search-3"></span></a>
            </div>

            <div class="search">

                <form id="searchform" action="search.html">
                    <input type="text" id="tipue_search_input" class="top-search" placeholder="Search here ..." />
                    <input type="submit" id="tipue_search_button" class="search-btn" value=""/>
                </form>

            </div><!-- End search -->

            <ul class="breadcrumb">
                <li>You are here:</li>
                <li>
                    <a href="#" class="tip" title="back to dashboard">
                        <span class="icon16 icomoon-icon-screen-2"></span>
                    </a> 
                    <span class="divider">
                        <span class="icon16 icomoon-icon-arrow-right-2"></span>
                    </span>
                </li>
                <li class="active">All Package</li>
            </ul>

        </div><!-- End .heading-->

        <!-- Build page from here: Usual with <div class="row-fluid"></div> -->

        <div class="row-fluid">

            <div class="span12">

                <div class="box gradient">

                    <div class="title">
                        <h4>
                            <span>All Package list</span>
                        </h4>
                    </div>
                    <?php echo $this->Session->flash(); ?>
                    <div class="content noPad clearfix">
                        <table cellpadding="0" cellspacing="0" border="0" class="responsive dynamicTable display table table-bordered" width="100%">
                            <thead>
                                <tr>
                                    <th>Technician Name</th>
                                    <th>Customer Name</th>
                                     <th>Package Name</th>
                                     <th>Charge</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Cell</th>
                                    <th>Email</th>                                                
                                    <th>Payment Type</th>
                                    <th>Bank</th>
                                    <th>Check No</th>
                                    <th>Exp date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                
                                foreach ($packages as $agent):
//                                    pr($agent);
//                                    $agent = $single['pc'];
                                  
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $agent['u']['name']; ?></td>
                                        <td><?php echo $agent['0']['name']; ?></td>
                                        <td><?php echo $agent['vp']['name']; ?></td>
                                         <td><?php echo $agent['pc']['charge_amount']; ?></td>
                                        <td><?php echo $agent['pc']['city']; ?></td>
                                        <td><?php echo $agent['pc']['state']; ?></td>
                                        <td><?php echo $agent['pc']['cell']; ?></td>
                                        <td><?php echo $agent['pc']['email']; ?></td>
                                        <td><?php echo $agent['pc']['payment_type']; ?></td>                                                
                                        <td><?php echo $agent['pc']['bank_name']; ?></td>
                                        <td><?php echo $agent['pc']['card_check_no']; ?></td>
                                        <td><?php echo $agent['pc']['exp_date']; ?></td>


<!--                                        <td>   
                                            <div class="controls center">
                                                <a aria-describedby="qtip-7" data-hasqtip="true" title="" oldtitle="Edit task" target="_blank" href="<?php echo Router::url(array('controller' => 'admins', 'action' => 'edit', $agent['id'])) ?>" class="tip"><span class="icon12 icomoon-icon-pencil"></span></a>

                                                <a aria-describedby="qtip-8" data-hasqtip="true" title="" oldtitle="Remove task"
                                                   onclick="if (confirm( & quot; Are you sure to delete this Agent? & quot; )) { return true; } return false;"
                                                   href="<?php
                                                   echo Router::url(array('controller' => 'admins', 'action' => 'delete', $agent['id'])
                                                   )
                                                   ?>" class="tip"><span class="icon12 icomoon-icon-remove"></span></a>                          
                                                   <?php if ($agent['status'] != 'blocked'): ?>

                                                    <a aria-describedby="qtip-7" data-hasqtip="true" title="" oldtitle="Edit task"
                                                       onclick="if (confirm( & quot; Are you sure to block this Agent? & quot; )) { return true; } return false;"

                                                       href="<?php
                                                       echo Router::url(array('controller' => 'admins', 'action' => 'block', $agent['id'])
                                                       )
                                                       ?>" class="tip"><span class="icon12 iconic-icon-move-horizontal-alt2"></span></a>
                                                   <?php endif; ?>

                                                <?php if ($agent['status'] != 'active'): ?>
                                                    <a aria-describedby="qtip-8" data-hasqtip="true" title="" oldtitle="Remove task" 
                                                       onclick="if (confirm( & quot; Are you sure to active this Agent? & quot; )) { return true; } return false;"

                                                       href="<?php
                                                       echo Router::url(array('controller' => 'admins', 'action' => 'active', $agent['id'])
                                                       )
                                                       ?>"
                                                       class="tip"><span class="icon12 icomoon-icon-checkmark"></span></a>
                                                    <?php endif; ?>
                                            </div>
                                        </td>-->
                                    </tr>

                                    <?php
                                endforeach;
                                ?>


                            </tbody>
                         
                        </table>
                    </div>

                </div><!-- End .box -->

            </div><!-- End .span12 -->

        </div><!-- End .row-fluid -->

        <!-- Page end here -->               
    </div><!-- End contentwrapper -->
</div><!-- End #content -->