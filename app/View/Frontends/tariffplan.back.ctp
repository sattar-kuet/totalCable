<style>
    .alert-error {
        color: #b94a48;
        background-color: #f2dede;
        border-color: #eed3d7;
    }
</style>
<div class="main">
    <div class="container">


        <div class="row">
            <div class="col-md-12">
                <?php echo $this->Session->flash(); ?>
                <?php
                if (!isset($packageName)):
                    ?>
                    <div class="alert alert-error">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>Enter your ZIP code first and Hit 'Find your plan' button</strong> 
                    </div>
                    <?php
                else:
                    ?>
                    <!-- BEGIN INLINE NOTIFICATIONS PORTLET-->
                    <div class="portlet box grey-cascade">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa  fa-arrow-right"></i><?php echo $packageName; ?>

                            </div>


                            <div class="tools">
                                <button class="btn btn-default" style="height: 34px;">
                                    <?php
                                    $fullUrl = Router::url(array('action' => 'area_channels'), true);
                                    if ($packageName == "NABC special package") {
                                        //echo 'See your channels';
                                        
                                        echo $this->Html->link(
                                                'Channels for this package', array('controller' => 'Frontends', 'action' => 'area_channels'), array('target' => '_blank'));
                                    } else {
                                        echo $this->Html->link(
                                                'Channels for this package', array('controller' => 'Frontends', 'action' => 'channels'), array('target' => '_blank'));
                                    }
                                    ?>
                                </button>

                            </div>

                            <!--
                            <div class="tools">
                                <a href="javascript:;" class="collapse" data-original-title="" title="">
                                </a>

                            </div>
                            -->
                        </div>
                        <div class="portlet-body">
                            <div class="row margin-bottom-40">
                                <?php
                                foreach ($packages as $package):
                                    echo $package['psettings']['offer'];
                                    ?>
                                    <div class="pricing-footer">

                                        <?php
                                        if ($isloggedin == false) {
                                            ?>
                                        
                                            <a class="btn yellow-crusta subscribe-btn" id="<?php echo $package['psettings']['id']; ?>" data-toggle="" data-target="#bookForm" href="<?php echo Router::url(array('controller' => '/', 'action' => 'packagesignup', $package['psettings']['id'])) ?>"> Sign Up </a>
                                            <?php
                                        }
                                        ?>


                                    </div>
                                </div> 
                            </div>
                        <?php endforeach; ?>


                    </div>
                </div>




                <div class="alert alert-danger">
                    <span class="label label-danger">NOTE</span> $10 will be charged as additional per box bill. $50 will be charged as SD for per box. 
                <div class="btn btn-primary pull-right"  id="shipbutton" style="margin-right: 8px; margin-top: -8px;"><a style="color: aliceblue;" href="<?php echo Router::url(array('action' => 'shipping_and_returns')) ?>" >Return policy </a></div>
                </div>



            </div>
        <?php
        endif;
        ?>
        <!-- END INLINE NOTIFICATIONS PORTLET-->
    </div>

</div>


<div id="bookForm" style="position: absolute;top: 9%;height: 100%;" class="modal fade" role="dialog">
    <div class="modal-dialog" style="width: 76%;">

        <!-- Modal content-->
        <div class="modal-content">

            <style>
                .alert-danger, .alert-error,alert  {
                    color: red;
                    background-color: #f2dede;
                    border-color: #eed3d7;
                }
                .alert, .alert h4 {
                    color: red;
                }

                .alert-success {
                    background-color: #dff0d8;
                    border-color: #d6e9c6;
                    color: #3c763d;
                }
                .page-header-fixed .header {

                    z-index: 9 !important;
                }


            </style>

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!--  <a href="#" class="signup">signup</a>
                 <a href="#" class="login">login</a> -->
                <h4 class="modal-title">Already you registered? <a href="#" class="login1">login here</a> </h4>
            </div>
            <div class="modal-body" >

                <div class="main">
                    <div class="container">
                        <div class="col-md-12 col-sm-12" id="block-quicktabs-3">


                            <?php
                            echo $this->Form->create('User', array(
                                'inputDefaults' => array(
                                    'label' => false,
                                    'div' => false
                                ),
                                'id' => 'form-validate',
                                'class' => 'form-horizontal',
                                'novalidate' => 'novalidate',
                                'enctype' => 'multipart/form-data'
                                    )
                            );
                            ?>
                            <ul class="">

                            </ul>
                            <!-- BEGIN SIDEBAR & CONTENT -->
                            <div class="row margin-bottom-40">
                                <!-- BEGIN SIDEBAR -->

                                <!-- END SIDEBAR -->

                                <!-- BEGIN CONTENT -->


                                <div class="row">

                                    <div class="col-md-12"style="float: left; text-align: center; margin-left: 331px;">
                                        <div class="content-form-page " style="float: left; text-align: center;"  >
                                            <h2>FILL UP THE FOLLOWING INFORMATION</h2>
                                            <div id="info-container"> 
                                            </div>
                                            <?php echo $this->Session->flash(); ?>
                                            <?php
                                            if (isset($errors)):
                                                echo $errors;
                                            endif;
                                            ?>  
                                        </div>

                                    </div>
                                </div>


                                <!-- BEGIN SAMPLE FORM PORTLET-->
                                

                                <div class="row">
                                    <div class="col-md-12 ">
                                        <!-- BEGIN SAMPLE FORM PORTLET-->
                                        <div class="portlet box" style=" text-align: center; background-color:   #7c94aa;">
                                            <div class="portlet-title">
                                                <div class="caption" >
                                                    Customer Information
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="firstname" class="col-lg-1 control-label">Name: <span class="require">*</span></label>
                                    <div class="col-md-3">
                                        <?php
                                        echo $this->Form->input(
                                                'first_name', array(
                                            'class' => 'form-control required',
                                            'placeholder' => 'First',
                                                )
                                        );
                                        ?> 

                                    </div>
                                    <div class="col-md-4">                                 
                                        <?php
                                        echo $this->Form->input(
                                                'middle_name', array(
                                            'class' => 'form-control required',
                                            'placeholder' => 'Middle'
                                                )
                                        );
                                        ?> 
                                    </div>
                                    <div class="col-md-4">
                                        <?php
                                        echo $this->Form->input(
                                                'last_name', array(
                                            'class' => 'form-control required',
                                            'placeholder' => 'Last'
                                                )
                                        );
                                        ?> 
                                    </div>
                                </div>
                                &nbsp;
                                <div class="row">
                                    <label for="afs" class="col-lg-1 control-label">Address: <span class="require">*</span></label>
                                    <div class="col-md-6">                                   
                                        <?php
                                        echo $this->Form->input(
                                                'street', array(
                                            'class' => 'form-control required',
                                            'placeholder' => 'Address & Street'
                                                )
                                        );
                                        ?> 
                                    </div>                                
                                    <div class="col-md-5">
                                        <?php
                                        echo $this->Form->input(
                                                'afs', array(
                                            'class' => 'form-control required',
                                            'placeholder' => 'Apt/Floor/Suite'
                                                )
                                        );
                                        ?> 
                                    </div>
                                </div>

                                &nbsp;

                                <div class="row">
                                    <label for="city" class="col-lg-1 control-label">City: <span class="require">*</span></label>
                                    <div class="col-md-3">                                  

                                        <?php
                                        echo $this->Form->input(
                                                'city', array(
                                            'class' => 'form-control required',
                                            'placeholder' => 'City'
                                                )
                                        );
                                        ?> 
                                    </div>
                                    <label for="state" class="col-lg-1 control-label">State: <span class="require">*</span></label>
                                    <div class="col-md-3">                                   
                                        <?php
                                        echo $this->Form->input(
                                                'state', array(
                                            'class' => 'form-control required',
                                            'placeholder' => 'State'
                                                )
                                        );
                                        ?> 
                                    </div>
                                    <label for="zip_code" class="col-lg-1 control-label">Zip:<span class="require">*</span></label>
                                    <div class="col-md-3">

                                        <?php
                                        echo $this->Form->input(
                                                'zip_code', array(
                                            'class' => 'form-control',
                                            'type' => 'text',
                                            'placeholder' => 'Zip code'
                                                )
                                        );
                                        ?> 
                                    </div>
                                </div>

                                &nbsp;

                                <div class="row">
                                    <label for="home" class="col-lg-1 control-label">Phone:<span class="require">*</span></label>
                                    <div class="col-md-3">
                                        <?php
                                        echo $this->Form->input(
                                                'home', array(
                                            'class' => 'form-control',
                                            'placeholder' => 'Home'
                                                )
                                        );
                                        ?> 
                                    </div>
                                    <label for="cell" class="col-lg-1 control-label">Cell:<span class="require">*</span></label>
                                    <div class="col-md-3">
                                        <?php
                                        echo $this->Form->input(
                                                'cell', array(
                                            'class' => 'form-control required',
                                            'placeholder' => 'Cell'
                                                )
                                        );
                                        ?> 
                                    </div>
                                    <label for="other" class="col-lg-1 control-label">Other:</label>
                                    <div class="col-md-3">
                                        <?php
                                        echo $this->Form->input(
                                                'other', array(
                                            'class' => 'form-control',
                                            'placeholder' => 'Other'
                                                )
                                        );
                                        ?> 
                                    </div>
                                </div>


                                &nbsp;
                                <div class="row">
                                    <label for="fax" class="col-lg-1 control-label">Fax:</label>
                                    <div class="col-md-3">
                                        <?php
                                        echo $this->Form->input(
                                                'fax', array(
                                            'class' => 'form-control',
                                            'placeholder' => 'Fax'
                                                )
                                        );
                                        ?> 
                                    </div>

                                    <label for="email" class="col-lg-1 control-label">Email:</label>
                                    <div class="col-md-3">                                    
                                        <?php
                                        echo $this->Form->input(
                                                'email', array(
                                            'class' => 'form-control',
                                            'placeholder' => 'Type Your Email'
                                                )
                                        );
                                        ?> 
                                    </div>
                                    

                                </div>

                                &nbsp;

                                <div class="row">
                                    <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20"> 

                                        <?php
                                        echo $this->Form->button(
                                                'Sign up', array(
                                            'class' => 'btn btn-primary submitbtn',
                                            'type' => 'submit',
                                            'id' => 'signup'
                                        ));
                                        ?>

                                    </div>
                                </div>  

                            </div>
                            <?php echo $this->Form->end(); ?>


                        </div>
                        <div id="block-block-111" style="display:none;">
                            <h4 class="modal-title">Never registered <a href="#" class="signup">Signup here</a> 
                            </h4>

                            <?php
                            echo $this->Form->create('User', array(
                                'inputDefaults' => array(
                                    'label' => false,
                                    'div' => false
                                ),
                                'id' => 'form-validate',
                                'class' => 'form-horizontal',
                                'novalidate' => 'novalidate',
                                'enctype' => 'multipart/form-data',
                                'url' => array('controller' => '/', 'action' => 'login')
                                    )
                            );
                            ?>
                            <ul class="">

                            </ul>
                            <!-- BEGIN SIDEBAR & CONTENT -->
                            <div class="row margin-bottom-40">
                                <!-- BEGIN SIDEBAR -->
                                <div class="col-md-12 col-sm-12"> 


                                    <div class="row">
                                        <label for="firstname" class="col-lg-1 control-label">Email: <span class="require">*</span></label>
                                        <div class="col-md-3">
                                            <?php
                                            echo $this->Form->input(
                                                    'email', array(
                                                'class' => 'form-control needed',
                                                'placeholder' => 'Type your email here'
                                                    )
                                            );
                                            ?> 

                                        </div>

                                    </div>
                                    <div class="row">
                                        <label for="firstname" class="col-lg-1 control-label">Password: <span class="require">*</span></label>
                                        <div class="col-md-3">                                 
                                            <?php
                                            echo $this->Form->input(
                                                    'password', array(
                                                'class' => 'form-control',
                                                'placeholder' => 'Type your password here'
                                                    )
                                            );
                                            ?> 
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20"> 

                                            <?php
                                            echo $this->Form->button(
                                                    'Login', array(
                                                'class' => 'btn btn-primary submitbtn',
                                                'type' => 'submit',
                                                'id' => 'Login'
                                            ));
                                            ?>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <?php echo $this->Form->end(); ?>
                        </div>
                    </div>


                    <!-- END SIDEBAR & CONTENT -->


                </div>
            </div>
        </div>
    </div>
</div>