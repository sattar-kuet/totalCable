<div id="content" class="clearfix">
    <div class="contentwrapper"><!--Content wrapper-->

        <div class="heading">

            <h3>All confirmed orders</h3>                    


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
                <li class="active">All Orders</li>
            </ul>
            

        </div><!-- End .heading-->

        <!-- Build page from here: Usual with <div class="row-fluid"></div> -->

        <div class="row-fluid">

            <div class="span12">

                <div class="box gradient">

                    
                    <?php echo $this->Session->flash(); ?>
                    <div class="content noPad clearfix">
                        <table cellpadding="0" cellspacing="0" border="0" class="responsive dynamicTable display table table-bordered" width="100%">
                            <thead>
                                <tr>
                                    <th>Phone no</th>
                                    <th>Email</th>
                                    <th>Customer Name</th>
                                    <th>Registration Date</th>
                                    <th>Installed by</th>
                                    <th>Detail</th>
                                    <th>Edit</th>
                                    
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                foreach ($customer_info as $single):
                                    $put = $single['PackageCustomer'];
                                    $tech_info = $single['User'];
                                //pr($tech_info);exit;
                                    ?>
                                
                                    <tr class="odd gradeX">
                                        <td><?php echo $put['home']; ?></td>
                                        <td><?php echo $put['email']; ?></td>
                                        <td><?php echo $put['first_name']; echo ' '; echo $put['middle_name']; echo ' '; echo $put['last_name']; ?></td>
                                        <td><?php
                                        $date = date("M d, Y", strtotime($put['created']));
                                        echo $date
                                        ?></td>
                                        <td>
                                            <?php echo $tech_info['name']; ?>
                                        </td>
                                        
                                        <td>   
                                            <div class="controls center">
                                                

                                        <a  href="<?php echo Router::url(array('controller'=>'users','action'=>'view_pdf_format',$put['id'])
                                                )?>" target="_blank" class="tip"><span class="icomoon-icon-file-pdf" title="View Detail"></span></a>


                                            </div>
                                        </td>
                                        <td>   
                                            <div class="controls center">
                                                

                                        <a  href="<?php echo Router::url(array('controller'=>'Frontends','action'=>'edit_service_order',$put['id'])
                                                )?>" target="_blank" class="tip"><span class="icon12  icomoon-icon-pencil-4" title="View Detail"></span></a>


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
