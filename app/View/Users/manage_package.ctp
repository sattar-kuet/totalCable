<div id="content" class="clearfix">
    <div class="contentwrapper"><!--Content wrapper-->

        <div class="heading">

            <h3>All Users</h3>                    


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
                <li class="active">All users</li>
            </ul>

        </div><!-- End .heading-->

        <!-- Build page from here: Usual with <div class="row-fluid"></div> -->

        <div class="row-fluid">
            <?php echo $this->Session->flash(); ?>
            <div class="span12">

                <div class="box gradient">

                    <div class="title">
                        <h4>
                            <span>All User list</span>
                        </h4>
                    </div>

                    <div class="content noPad clearfix">
                        <table cellpadding="0" cellspacing="0" border="0" class="responsive dynamicTable display table table-bordered" width="100%">
                            <thead>
                                <tr>
                                    <th>Package Name</th>
                                    <th>Duration (Month)</th>                                   
                                    <th>Total Charge($)</th>                                                                      
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php                                
                               foreach ($package_info as $single):                                 
                               $psetting = $single['Psetting'];     
                               $package_detail = $single['Package'];
                              //pr($single); exit;  
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $package_detail['name']; ?></td>
                                        <td><?php echo $psetting['duration']; ?></td>                                      
                                        <td><?php echo $psetting['amount']; ?></td>                                       
                                        <td>   
                                            <div class="controls center">                                               
                                        <a  href="<?php echo Router::url(array('controller'=>'users','action'=>'psetting', $psetting['id'])
                                                )?>" class="tip"><span class="icon12  icomoon-icon-pencil-4" title="Edit"></span></a>
                                                <a  href="<?php echo Router::url(array('controller'=>'users','action'=>'delete_package', $psetting['id'])
                                                )?>" class="tip"><span class="icon12  icon-remove" title="Delete"></span></a>
                                            </div>
                                            
                                        </td>
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