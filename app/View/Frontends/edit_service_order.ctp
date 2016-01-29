<style>
    .nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus {
        color: #555;
        cursor: default;
        background-color: #fff;
        border: 1px solid #ddd !important;

        //border-bottom-color: transparent !important;
        z-index: 55 !important;
        line-height: 35px;
    }

    .tabbable-custom {
        margin-bottom: 0px !important;
        padding: 0px;
        overflow: hidden;
    }
    .tabbable-custom > .tab-content {
        background-color: #fff;
        border: 1px solid #ddd !important;
        padding: 10px;}
    .tabbable-custom > .nav-tabs > li.active > a {
        border-top: none !important;
        font-weight: 400;}
    .nav-tabs>li>a {
        margin-right: 2px;
        line-height: 1.42857143;
        border: 1px solid transparent;
        line-height: 35px;
    }
    .tabbable-custom > .nav-tabs {
        margin-bottom: -1px;
    }
    .tabbable-custom > .tab-content {
        background-color: #fff;
        border: 1px solid #ddd !important;
        padding: 10px;
    }
    .tab-content {
        border: 1px solid #ddd !important;
        padding: 0px !important;
    }

</style>

<!-- style="background-color: #D8E3F2;" -->
<div class="main">

    <div class="container">
        <div class="col-md-12 col-sm-12" id="block-quicktabs-3">


            <?php
            echo $this->Form->create('PackageCustomer', array(
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
            <div class="row margin-bottom-40" style="background-color: #fff; padding: 10px; box-shadow: 0px 0px 20px 3px #888888">
                <!-- BEGIN SIDEBAR -->

                <!-- END SIDEBAR -->

                <!-- BEGIN CONTENT -->


                <div class="row">

                    <div class="col-md-12">
                        <div class="col-md-4" id="signuplogo">
                            <div class="">
                                <img style="border-bottom: 2px solid black;" alt="" src="<?php echo $this->webroot; ?>images/totalcableusalogo.jpg"><br>
                                <span style="font-size: 16px; text-align: left;">P.O. BOX 770068, WOODSIDE, NY 11377</span>
                            </div>

                        </div>

                        <div class="col-md-4">
                            <!--                            <div style="border: 5px solid rgba(75,172,198,1);">-->
                            <div id="headingborder" style="text-align: center; border: 5px solid rgba(75,172,198,1);">
                                SERVICE ORDER FORM
                            </div>
                            <h6> <?php echo $this->Session->flash(); ?></h6>
                            <!--</div>-->
                        </div>
                        <div class="col-md-1">

                        </div>
                        <div class="col-md-3" id="custormercare">
                            Customer Care: <br>
                            <strong>(212) 444- 8138</strong> <br>
                            <strong>(718)-395-9958</strong>   <br>     
                            <strong>(718)-569-7014</strong>   <br>

                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-1">

                        </div>
                        <div class="col-md-3" id="custormercare">
                            e-mail: info@totalcableusa.com <br>
                            www.totalcablueusa.com <br>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="text-center">
                        <div class="radio-list" style="margin-left: 20px;">
                            <label class="radio-inline"><input type="radio" value="NEW INSTALLATION" name="data[PackageCustomer][service_type]">NEW INSTALLATION</label>
                            <label class="radio-inline"><input type="radio" value="SERVICE REPAIR" name="data[PackageCustomer][service_type]">SERVICE REPAIR</label>
                            <label class="radio-inline"><input type="radio" value="CANCEL SERVICE" name="data[PackageCustomer][service_type]">CANCEL SERVICE</label>
                        </div>
                    </div>
                </div>


                <!-- BEGIN SAMPLE FORM PORTLET-->



                <div class="row">
                    <div class="col-md-12 ">
                        <!-- BEGIN SAMPLE FORM PORTLET-->
                        <div class="portlet box"  style=" text-align: center; background-color: black;">
                            <div class="portlet-title">
                                <div class="caption" id="blackcaption" >
                                    Customer Information
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 ">

                        <div class="col-md-2 signupfont">
                            Name: First:
                        </div>
                        <div class="col-md-2">
                            <div class="input-list style-4 clearfix">
                                <div>
                                    <?php
                                    echo $this->Form->input(
                                            'first_name', array(
                                        'class' => 'required',
                                            )
                                    );
                                    ?> 
                                </div>                            
                            </div>
                        </div>
                        <div class="col-md-1 signupfont">
                            Middle:

                        </div>
                        <div class="col-md-3">
                            <div class="input-list style-4 clearfix">
                                <div>
                                    <?php
                                    echo $this->Form->input(
                                            'middle_name', array(
                                        'class' => ''
                                            )
                                    );
                                    ?> 
                                </div>                            
                            </div>
                        </div>
                        <div class="col-md-1 signupfont">
                            Last: 
                        </div>
                        <div class="col-md-3">
                            <div class="input-list style-4 clearfix">
                                <div>
                                    <?php
                                    echo $this->Form->input(
                                            'last_name', array(
                                        'class' => 'required'
                                            )
                                    );
                                    ?> 
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
                &nbsp;
                <div class="row">
                    <div class="col-md-12 ">

                        <div class="col-md-2 signupfont">
                            Address:
                        </div>
                        <div class="col-md-10">
                            <div class="input-list style-4 clearfix">
                                <div>
                                    <?php
                                    echo $this->Form->input(
                                            'address', array(
                                        'class' => 'required',
                                            )
                                    );
                                    ?> 
                                </div>                            
                            </div>
                        </div>                        
                    </div>
                </div>
                &nbsp;
                <div class="row">
                    <div class="col-md-12 ">

                        <div class="col-md-2 signupfont">
                            Phone: Home:  
                        </div>
                        <div class="col-md-4">
                            <div class="input-list style-4 clearfix">
                                <div>
                                    <?php
                                    echo $this->Form->input(
                                            'home', array(
                                        'class' => 'required',
                                            )
                                    );
                                    ?> 
                                </div>                            
                            </div>
                        </div>
                        <div class="col-md-1 signupfont">
                            Cell:

                        </div>
                        <div class="col-md-5">
                            <div class="input-list style-4 clearfix">
                                <div>
                                    <?php
                                    echo $this->Form->input(
                                            'cell', array(
                                        'class' => ''
                                            )
                                    );
                                    ?>
                                </div>                            
                            </div>
                        </div>                        
                    </div>
                </div>
                &nbsp;
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="col-md-2 signupfont">
                            E-Mail

                        </div>
                        <div class="col-md-4">
                            <div class="input-list style-4 clearfix">
                                <div>
                                    <?php
                                    echo $this->Form->input(
                                            'email', array(
                                        'class' => 'required',
                                            )
                                    );
                                    ?>

                                </div>                            
                            </div>
                        </div>

                        <div class="col-md-1 signupfont">
                            Fax: 
                        </div>
                        <div class="col-md-5">
                            <div class="input-list style-4 clearfix">
                                <div>
                                    <?php
                                    echo $this->Form->input(
                                            'fax', array(
                                        'class' => '',
                                        'placeholder' => 'Optional'
                                            )
                                    );
                                    ?> 
                                </div>                            
                            </div>
                        </div>


                    </div>
                </div>
                &nbsp;
                <div class="row">
                    <div class="col-md-12 ">

                        <div class="col-md-2 signupfont">
                            Mac No:
                        </div>
                        <div class="col-md-10">
                            <div class="input-list style-4 clearfix">
                                <div>
                                    <?php
                                    echo $this->Form->input(
                                            'mac', array(
                                        'class' => 'required',
                                            )
                                    );
                                    ?> 
                                </div>                            
                            </div>
                        </div>                        
                    </div>
                </div>
                &nbsp;
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="col-md-2 signupfont">
                            Referred by:

                        </div>
                        <div class="col-md-4">
                            <div class="input-list style-4 clearfix">
                                <div>
                                    <?php
                                    echo $this->Form->input(
                                            'referred_name', array(
                                        'class' => 'required',
                                            )
                                    );
                                    ?>

                                </div>                            
                            </div>
                        </div>

                        <div class="col-md-1 signupfont">
                            Phone: 
                        </div>
                        <div class="col-md-5">
                            <div class="input-list style-4 clearfix">
                                <div>
                                    <?php
                                    echo $this->Form->input(
                                            'referred_phone', array(
                                        'class' => '',
                                            )
                                    );
                                    ?> 
                                </div>                            
                            </div>
                        </div>                        
                    </div>
                </div>
                &nbsp;

                <!--               
                                             
                                Start of package info 
                <?php
                if ($isloggedin == true) {
                    ?>
                                
                                                    <div class="row">
                                                        <div class="col-md-12 ">
                                                             BEGIN SAMPLE FORM PORTLET
                                                            <div class="portlet box"  style=" text-align: center; background-color: black;">
                                                                <div class="portlet-title">
                                                                    <div class="caption" id="blackcaption" >
                                                                        Package Information
                                                                    </div>
                                
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                
                                
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="panel-group accordion" id="accordion1">
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_1" aria-expanded="false">
                                                                                Full package </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="collapse_1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                                        <div class="panel-body">
                                                                            <div class="">
                                                                                <div class="">
                                                                                    <div class="">
                                
                    <?php
                    foreach ($packages_full as $package):
                        echo $package['psettings']['offer'];
                        $pid = $package['psettings']['id'];
                        ?>
                                                                                                            <input class="PSID" type="hidden" value="<?php echo $pid; ?>">
                                                
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                    <?php endforeach; ?>
                                                                        </div>
                                                                    </div>
                                
                                
                                
                                
                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading">
                                                                            <h4 class="panel-title">
                                                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_2" aria-expanded="false">
                                                                                    NABC special package </a>
                                                                            </h4>
                                                                        </div>
                                                                        <div id="collapse_2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                                            <div class="panel-body">
                                
                                
                                
                                
                    <?php
                    foreach ($packages_special as $package):
                        echo $package['psettings']['offer'];
                        $pid1 = $package['psettings']['id'];
                        ?>
                                                                                                    <input class="PSID" type="hidden" value="<?php echo $pid1; ?>">
                                                
                                                                                                </div>
                                                                                            </div>
                                                
                    <?php endforeach; ?> 
                                
                                                                    </div>
                                                                </div>
                                                            </div>
                                
                                                        </div> 
                                                    </div>
                                
                                
                                
                                                </div>
                    <?php
                }
                ?>
                            End of package info -->
                <div class="row">
                    <div class="col-md-12 ">
                        <!-- BEGIN SAMPLE FORM PORTLET-->
                        <div class="portlet box"  style=" text-align: center; background-color: black;">
                            <div class="portlet-title">
                                <div class="caption" id="blackcaption" >
                                    Package Information
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-group accordion" id="accordion1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_1" aria-expanded="false">
                                            All Packages </a>
                                    </h4>
                                </div>
                                <div id="collapse_1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                    <div class="panel-body">

                                        <div class="" style="">
                                            <div class="tabbable tabbable-custom">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a data-toggle="tab" href="#full">Full Package</a></li>
                                                    <li><a data-toggle="tab" href="#nabc">NABC Special Package</a></li>
                                                    <li><a data-toggle="tab" href="#new_york">New York</a></li>
                                                    <li><a data-toggle="tab" href="#new_jersey">New Jersey</a></li>
                                                    <li><a data-toggle="tab" href="#michigan">Michigan</a></li>
                                                    <li><a data-toggle="tab" href="#texas">Texas</a></li>
                                                    <li><a data-toggle="tab" href="#canada">Canada</a></li>
                                                    <li><a data-toggle="tab" href="#uk">UK</a></li>
                                                    <li><a data-toggle="tab" href="#contemporary">Contemporary</a></li>
                                                    <li><a data-toggle="tab" href="#custom">Custom</a></li>
                                                </ul>
                                            </div>

                                            <div class="tab-content">
                                                <div class="tab-pane active" id="full">
                                                    <div class="panel-body">
                                                        <div class="col-md-3">
                                                            <div class="pricing hover-effect" id="30">
                                                                <div id="fariff" class="pricing-head">
                                                                    <h3>1 Month <span> Billing Package </span></h3>
                                                                    <h4><em>$</em>40<em>.00</em> <span> For 1st Box </span></h4>
                                                                </div>
                                                                <ul class="pricing-content list-unstyled">
                                                                    <li>Bill (For 1st Box): <strong>$40</strong></li>
                                                                    <li>Security Deposit (SD): <strong>$50</strong></li>                                            
                                                                    <li>Bonus: <strong>N/A</strong></li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="pricing hover-effect" id="31">
                                                                <div class="pricing-head">
                                                                    <h3>3 Month<span> Billing Package </span></h3>
                                                                    <h4><em>$</em>90<em>.00</em> <span> For 1st Box </span></h4>
                                                                </div>
                                                                <ul class="pricing-content list-unstyled">
                                                                    <li>Bill (For 1st Box): <strong>$90</strong></li>
                                                                    <li>Security Deposit (SD): <strong>$50</strong></li>                                            
                                                                    <li>Bonus: <strong>N/A</strong></li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="pricing hover-effect" id="32"><!-- pricing-active  -->
                                                                <div class="pricing-head"><!-- pricing-head-active -->
                                                                    <h3>6 Month<span> Billing Package </span></h3>
                                                                    <h4><em>$</em>180<em>.00</em> <span> For 1st Box </span></h4>
                                                                </div>
                                                                <ul class="pricing-content list-unstyled">
                                                                    <li>Bill (For 1st Box): <strong>$180</strong></li>
                                                                    <li>Security Deposit (SD): <strong>$50</strong></li>                                            
                                                                    <li>Bonus: <strong>1 Months addition or $40 calling card</strong></li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="pricing hover-effect" id="33">
                                                                <div class="pricing-head">
                                                                    <h3>1 Year<span> Billing Package </span></h3>
                                                                    <h4><em>$</em>360<em>.00</em> <span> For 1st Box </span></h4>
                                                                </div>
                                                                <ul class="pricing-content list-unstyled">
                                                                    <li>Bill (For 1st Box): <strong>$360</strong></li>
                                                                    <li>Security Deposit (SD): <strong>$50</strong></li>                                           
                                                                    <li>Bonus: <strong>3 Months addition or $100 calling card</strong></li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="tab-pane" id="nabc">
                                                    <div class="panel-body">
                                                        <div class="col-md-3">
                                                            <div class="pricing hover-effect" id="34">
                                                                <div id="fariff" class="pricing-head">
                                                                    <h3>1 Month <span> Billing Package </span></h3>
                                                                    <h4><em>$</em>19<em>.99</em> <span> For 1st Box </span></h4>
                                                                </div>
                                                                <ul class="pricing-content list-unstyled">
                                                                    <li>Bill (For 1st Box): <strong>$19.99</strong></li> 
                                                                    <li>Security Deposit (SD): <strong>$50</strong></li>
                                                                    <li>Bonus: <strong>N/A</strong></li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="pricing hover-effect" id="35">
                                                                <div class="pricing-head">
                                                                    <h3>3 Month<span> Billing Package </span></h3>
                                                                    <h4><em>$</em>60<em>.00</em> <span> For 1st Box </span></h4>
                                                                </div>
                                                                <ul class="pricing-content list-unstyled">
                                                                    <li>Bill (For 1st Box): <strong>$60</strong></li> 
                                                                    <li>Security Deposit (SD): <strong>$50</strong></li>
                                                                    <li>Bonus: <strong>N/A</strong></li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="pricing hover-effect" id="36"><!-- pricing-active  -->
                                                                <div class="pricing-head"><!-- pricing-head-active -->
                                                                    <h3>6 Month<span> Billing Package </span></h3>
                                                                    <h4><em>$</em>120<em>.00</em> <span> For 1st Box </span></h4>
                                                                </div>
                                                                <ul class="pricing-content list-unstyled">
                                                                    <li>Bill (For 1st Box): <strong>$120</strong></li>
                                                                    <li>Security Deposit (SD): <strong>$50</strong></li>
                                                                    <li>Bonus: <strong>N/A</strong></li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="pricing hover-effect" id="37">
                                                                <div class="pricing-head">
                                                                    <h3>1 Year<span> Billing Package </span></h3>
                                                                    <h4><em>$</em>240<em>.00</em> <span> For 1st Box </span></h4>
                                                                </div>
                                                                <ul class="pricing-content list-unstyled">
                                                                    <li>Bill (For 1st Box): <strong>$240</strong></li>
                                                                    <li>Security Deposit (SD): <strong>$50</strong></li>
                                                                    <li>Bonus: <strong>N/A</strong></li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="tab-pane" id="new_york">
                                                    <div class="panel-body">
                                                        <div class="col-md-3">
                                                            <div class="pricing hover-effect" id="38">
                                                                <div id="fariff" class="pricing-head">
                                                                    <h3>1 Month <span> Billing Package </span></h3>
                                                                    <h4><em>$</em>40<em>.00</em> <span> For 1st Box </span></h4>
                                                                </div>
                                                                <ul class="pricing-content list-unstyled">
                                                                    <li>Bill (For 1st Box): <strong>$40</strong></li>
                                                                    <li>Security Deposit (SD): <strong>$50</strong></li>                                            
                                                                    <li>Bonus: <strong>N/A</strong></li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="pricing hover-effect" id="39">
                                                                <div class="pricing-head">
                                                                    <h3>3 Month<span> Billing Package </span></h3>
                                                                    <h4><em>$</em>90<em>.00</em> <span> For 1st Box </span></h4>
                                                                </div>
                                                                <ul class="pricing-content list-unstyled">
                                                                    <li>Bill (For 1st Box): <strong>$90</strong></li>
                                                                    <li>Security Deposit (SD): <strong>$50</strong></li>                                            
                                                                    <li>Bonus: <strong>N/A</strong></li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="pricing hover-effect" id="40"><!-- pricing-active  -->
                                                                <div class="pricing-head"><!-- pricing-head-active -->
                                                                    <h3>6 Month<span> Billing Package </span></h3>
                                                                    <h4><em>$</em>180<em>.00</em> <span> For 1st Box </span></h4>
                                                                </div>
                                                                <ul class="pricing-content list-unstyled">
                                                                    <li>Bill (For 1st Box): <strong>$180</strong></li>
                                                                    <li>Security Deposit (SD): <strong>$50</strong></li>                                            
                                                                    <li>Bonus: <strong>1 Months addition or $40 calling card</strong></li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="pricing hover-effect" id="41">
                                                                <div class="pricing-head">
                                                                    <h3>1 Year<span> Billing Package </span></h3>
                                                                    <h4><em>$</em>360<em>.00</em> <span> For 1st Box </span></h4>
                                                                </div>
                                                                <ul class="pricing-content list-unstyled">
                                                                    <li>Bill (For 1st Box): <strong>$360</strong></li>
                                                                    <li>Security Deposit (SD): <strong>$50</strong></li>                                           
                                                                    <li>Bonus: <strong>3 Months addition or $100 calling card</strong></li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="tab-pane" id="new_jersey">
                                                    <div class="panel-body">
                                                        <div class="col-md-3">
                                                            <div class="pricing hover-effect">
                                                                <div id="fariff" class="pricing-head" id="42">
                                                                    <h3>1 Month <span> Billing Package </span></h3>
                                                                    <h4><em>$</em>40<em>.00</em> <span> For 1st Box </span></h4>
                                                                </div>
                                                                <ul class="pricing-content list-unstyled">
                                                                    <li>Bill (For 1st Box): <strong>$40</strong></li>
                                                                    <li>Security Deposit (SD): <strong>$50</strong></li>                                            
                                                                    <li>Bonus: <strong>N/A</strong></li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="pricing hover-effect" id="43">
                                                                <div class="pricing-head">
                                                                    <h3>3 Month<span> Billing Package </span></h3>
                                                                    <h4><em>$</em>90<em>.00</em> <span> For 1st Box </span></h4>
                                                                </div>
                                                                <ul class="pricing-content list-unstyled">
                                                                    <li>Bill (For 1st Box): <strong>$90</strong></li>
                                                                    <li>Security Deposit (SD): <strong>$50</strong></li>                                            
                                                                    <li>Bonus: <strong>N/A</strong></li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="pricing hover-effect" id="44"><!-- pricing-active  -->
                                                                <div class="pricing-head"><!-- pricing-head-active -->
                                                                    <h3>6 Month<span> Billing Package </span></h3>
                                                                    <h4><em>$</em>180<em>.00</em> <span> For 1st Box </span></h4>
                                                                </div>
                                                                <ul class="pricing-content list-unstyled">
                                                                    <li>Bill (For 1st Box): <strong>$180</strong></li>
                                                                    <li>Security Deposit (SD): <strong>$50</strong></li>                                            
                                                                    <li>Bonus: <strong>1 Months addition or $40 calling card</strong></li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="pricing hover-effect" id="45">
                                                                <div class="pricing-head">
                                                                    <h3>1 Year<span> Billing Package </span></h3>
                                                                    <h4><em>$</em>360<em>.00</em> <span> For 1st Box </span></h4>
                                                                </div>
                                                                <ul class="pricing-content list-unstyled">
                                                                    <li>Bill (For 1st Box): <strong>$360</strong></li>
                                                                    <li>Security Deposit (SD): <strong>$50</strong></li>                                           
                                                                    <li>Bonus: <strong>3 Months addition or $100 calling card</strong></li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="tab-pane" id="michigan">
                                                    <div class="panel-body">
                                                        <div class="col-md-3">
                                                            <div class="pricing hover-effect" id="46">
                                                                <div id="fariff" class="pricing-head">
                                                                    <h3>1 Month <span> Billing Package </span></h3>
                                                                    <h4><em>$</em>30<em>.00</em> <span> For 1st Box </span></h4>
                                                                </div>
                                                                <ul class="pricing-content list-unstyled">
                                                                    <li>Bill (For 1st Box): <strong>$30</strong></li>
                                                                    <li>Security Deposit (SD): <strong>$50</strong></li>                                            
                                                                    <li>Bonus: <strong>N/A</strong></li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="pricing hover-effect" id="47">
                                                                <div class="pricing-head">
                                                                    <h3>3 Month<span> Billing Package </span></h3>
                                                                    <h4><em>$</em>75<em>.00</em> <span> For 1st Box </span></h4>
                                                                </div>
                                                                <ul class="pricing-content list-unstyled">
                                                                    <li>Bill (For 1st Box): <strong>$75</strong></li>
                                                                    <li>Security Deposit (SD): <strong>$50</strong></li>                                            
                                                                    <li>Bonus: <strong>N/A</strong></li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="pricing hover-effect" id="48"><!-- pricing-active  -->
                                                                <div class="pricing-head"><!-- pricing-head-active -->
                                                                    <h3>6 Month<span> Billing Package </span></h3>
                                                                    <h4><em>$</em>150<em>.00</em> <span> For 1st Box </span></h4>
                                                                </div>
                                                                <ul class="pricing-content list-unstyled">
                                                                    <li>Bill (For 1st Box): <strong>$150</strong></li>
                                                                    <li>Security Deposit (SD): <strong>$50</strong></li>                                            
                                                                    <li>Bonus: <strong>1 Months addition or $40 calling card</strong></li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="pricing hover-effect" id="49">
                                                                <div class="pricing-head">
                                                                    <h3>1 Year<span> Billing Package </span></h3>
                                                                    <h4><em>$</em>300<em>.00</em> <span> For 1st Box </span></h4>
                                                                </div>
                                                                <ul class="pricing-content list-unstyled">
                                                                    <li>Bill (For 1st Box): <strong>$300</strong></li>
                                                                    <li>Security Deposit (SD): <strong>$50</strong></li>                                           
                                                                    <li>Bonus: <strong>3 Months addition or $100 calling card</strong></li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="tab-pane" id="texas">
                                                    <div class="panel-body">
                                                        <div class="col-md-3">
                                                            <div class="pricing hover-effect" id="50">
                                                                <div id="fariff" class="pricing-head" >
                                                                    <h3>1 Month <span> Billing Package </span></h3>
                                                                    <h4><em>$</em>30<em>.00</em> <span> For 1st Box </span></h4>
                                                                </div>
                                                                <ul class="pricing-content list-unstyled">
                                                                    <li>Bill (For 1st Box): <strong>$30</strong></li>
                                                                    <li>Security Deposit (SD): <strong>$50</strong></li>                                            
                                                                    <li>Bonus: <strong>N/A</strong></li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="pricing hover-effect" id="51">
                                                                <div class="pricing-head">
                                                                    <h3>3 Month<span> Billing Package </span></h3>
                                                                    <h4><em>$</em>90<em>.00</em> <span> For 1st Box </span></h4>
                                                                </div>
                                                                <ul class="pricing-content list-unstyled">
                                                                    <li>Bill (For 1st Box): <strong>$90</strong></li>
                                                                    <li>Security Deposit (SD): <strong>$50</strong></li>                                            
                                                                    <li>Bonus: <strong>N/A</strong></li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="pricing hover-effect" id="52"><!-- pricing-active  -->
                                                                <div class="pricing-head"><!-- pricing-head-active -->
                                                                    <h3>6 Month<span> Billing Package </span></h3>
                                                                    <h4><em>$</em>180<em>.00</em> <span> For 1st Box </span></h4>
                                                                </div>
                                                                <ul class="pricing-content list-unstyled">
                                                                    <li>Bill (For 1st Box): <strong>$180</strong></li>
                                                                    <li>Security Deposit (SD): <strong>$50</strong></li>                                            
                                                                    <li>Bonus: <strong>1 Months addition or $40 calling card</strong></li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="pricing hover-effect" id="53">
                                                                <div class="pricing-head">
                                                                    <h3>1 Year<span> Billing Package </span></h3>
                                                                    <h4><em>$</em>360<em>.00</em> <span> For 1st Box </span></h4>
                                                                </div>
                                                                <ul class="pricing-content list-unstyled">
                                                                    <li>Bill (For 1st Box): <strong>$360</strong></li>
                                                                    <li>Security Deposit (SD): <strong>$50</strong></li>                                           
                                                                    <li>Bonus: <strong>3 Months addition or $100 calling card</strong></li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="tab-pane" id="canada">
                                                    <div class="panel-body">
                                                        <div class="col-md-3">
                                                            <div class="pricing hover-effect" id="54">
                                                                <div id="fariff" class="pricing-head">
                                                                    <h3>1 Month <span> Billing Package </span></h3>
                                                                    <h4><em>c$</em>25<em>.00</em> <span> For 1st Box </span></h4>
                                                                </div>
                                                                <ul class="pricing-content list-unstyled">
                                                                    <li>Bill (For 1st Box): <strong>c$25</strong></li>
                                                                    <li>Security Deposit (SD): <strong>c$50</strong></li>                                            
                                                                    <li>Bonus: <strong>N/A</strong></li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="pricing hover-effect" id="55">
                                                                <div class="pricing-head">
                                                                    <h3>3 Month<span> Billing Package </span></h3>
                                                                    <h4><em>c$</em>75<em>.00</em> <span> For 1st Box </span></h4>
                                                                </div>
                                                                <ul class="pricing-content list-unstyled">
                                                                    <li>Bill (For 1st Box): <strong>c$75</strong></li>
                                                                    <li>Security Deposit (SD): <strong>c$50</strong></li>                                            
                                                                    <li>Bonus: <strong>N/A</strong></li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="pricing hover-effect" id="56"><!-- pricing-active  -->
                                                                <div class="pricing-head"><!-- pricing-head-active -->
                                                                    <h3>6 Month<span> Billing Package </span></h3>
                                                                    <h4><em>c$</em>150<em>.00</em> <span> For 1st Box </span></h4>
                                                                </div>
                                                                <ul class="pricing-content list-unstyled">
                                                                    <li>Bill (For 1st Box): <strong>c$150</strong></li>
                                                                    <li>Security Deposit (SD): <strong>c$50</strong></li>                                            
                                                                    <li>Bonus: <strong>1 Months addition or c$40 calling card</strong></li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="pricing hover-effect" id="57">
                                                                <div class="pricing-head">
                                                                    <h3>1 Year<span> Billing Package </span></h3>
                                                                    <h4><em>c$</em>300<em>.00</em> <span> For 1st Box </span></h4>
                                                                </div>
                                                                <ul class="pricing-content list-unstyled">
                                                                    <li>Bill (For 1st Box): <strong>c$300</strong></li>
                                                                    <li>Security Deposit (SD): <strong>c$50</strong></li>                                           
                                                                    <li>Bonus: <strong>3 Months addition or c$100 calling card</strong></li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="tab-pane" id="uk">
                                                    <div class="panel-body">
                                                        <div class="col-md-3 col-md-offset-4">
                                                            <div class="pricing hover-effect" id="58">
                                                                <div class="pricing-head">
                                                                    <h3>1 Year<span> Billing Package </span></h3>
                                                                    <h4><em>‎£</em>85<em>.00</em> <span> For 1st Box </span></h4>
                                                                </div>
                                                                <ul class="pricing-content list-unstyled">
                                                                    <li>Bill (For 1st Box): <strong>£85</strong></li>
                                                                    <li>Security Deposit (SD): <strong>£50</strong></li>                                           
                                                                    <li>Bonus: <strong>N/A</strong></li>
                                                                </ul>

                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="tab-pane" id="contemporary">
                                                    <div class="panel-body">
                                                        <div class="col-md-3">
                                                            <div class="pricing hover-effect" id="59">
                                                                <div id="fariff" class="pricing-head">
                                                                    <h3>1 Month <span> Billing Package </span></h3>
                                                                    <h4><em>$</em>0<em>.00</em> <span> For 1st Box </span></h4>
                                                                </div>
                                                                <ul class="pricing-content list-unstyled">
                                                                    <li>Bill (For 1st Box): <strong>c$25</strong></li>
                                                                    <li>Security Deposit (SD): <strong>c$50</strong></li>                                            
                                                                    <li>Bonus: <strong>N/A</strong></li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="pricing hover-effect" id="60">
                                                                <div class="pricing-head">
                                                                    <h3>3 Month<span> Billing Package </span></h3>
                                                                    <h4><em>$</em>0<em>.00</em> <span> For 1st Box </span></h4>
                                                                </div>
                                                                <ul class="pricing-content list-unstyled">
                                                                    <li>Bill (For 1st Box): <strong>c$75</strong></li>
                                                                    <li>Security Deposit (SD): <strong>c$50</strong></li>                                            
                                                                    <li>Bonus: <strong>N/A</strong></li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="pricing hover-effect" id="61"><!-- pricing-active  -->
                                                                <div class="pricing-head"><!-- pricing-head-active -->
                                                                    <h3>6 Month<span> Billing Package </span></h3>
                                                                    <h4><em>$</em>0<em>.00</em> <span> For 1st Box </span></h4>
                                                                </div>
                                                                <ul class="pricing-content list-unstyled">
                                                                    <li>Bill (For 1st Box): <strong>c$150</strong></li>
                                                                    <li>Security Deposit (SD): <strong>c$50</strong></li>                                            
                                                                    <li>Bonus: <strong>1 Months addition or c$40 calling card</strong></li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="pricing hover-effect" id="62">
                                                                <div class="pricing-head">
                                                                    <h3>1 Year<span> Billing Package </span></h3>
                                                                    <h4><em>$</em>0<em>.00</em> <span> For 1st Box </span></h4>
                                                                </div>
                                                                <ul class="pricing-content list-unstyled">
                                                                    <li>Bill (For 1st Box): <strong>c$300</strong></li>
                                                                    <li>Security Deposit (SD): <strong>c$50</strong></li>                                           
                                                                    <li>Bonus: <strong>3 Months addition or c$100 calling card</strong></li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="tab-pane" id="custom">
                                                    <div class="panel-body">
                                                        <div class="col-md-6 col-md-offset-3">
                                                            <div class="pricing hover-effect">
                                                                <div class="pricing-head">
                                                                    <h3>Custom<span> Billing Package </span></h3>

                                                                </div>
                                                                <div style="padding: 10px;">
                                                                    <div class="form-group">
                                                                        <label class="col-md-4 control-label">Duration</label>
                                                                        <div class="col-md-8">
                                                                            <?php
                                                                            $arrCategory = array("1 Month" => "1 Month", "3 Month" => "3 Month", "6 Month" => "6 Month", "1 Year" => "1 Year");
                                                                            echo $this->Form->input(
                                                                                    'duration', array(
                                                                                'class' => 'form-control',
                                                                                'options' => $arrCategory,
                                                                                'label' => false,
                                                                                'empty' => '--Select one--',
                                                                                    )
                                                                            );
                                                                            ?>
                                                                        </div>

                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="col-md-4 control-label">Charged Amount</label>
                                                                        <div class="col-md-8">
                                                                            <?php
                                                                            echo $this->Form->input(
                                                                                    'charge', array(
                                                                                'class' => 'form-control',
                                                                                'type' => 'number'
                                                                                    )
                                                                            );
                                                                            ?>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                        </div>

                    </div> 
                </div>




                <div class="row">
                    <div class="col-md-12 ">
                        <!-- BEGIN SAMPLE FORM PORTLET-->
                        <div class="portlet box"  style=" text-align: center; background-color: black;">
                            <div class="portlet-title">
                                <div class="caption" id="blackcaption" >
                                    Payment
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 ">

                        <div class="col-md-2">
                            <span class="signupfont"> Security Deposit: </span>
                        </div>
                        <div class="col-md-2">
                            <div class="input-list style-4 clearfix">
                                <div>
                                    <?php
                                    echo $this->Form->input(
                                            'deposit', array(
                                        'class' => 'required partial',
                                        'type' => 'number'
                                            )
                                    );
                                    ?> 
                                </div>                            
                            </div>
                        </div>
                        <div class="col-md-2">
                            <span class="signupfont">Monthly Bill: </span>
                        </div>
                        <div class="col-md-1">
                            <div class="input-list style-4 clearfix">
                                <div>
                                    <?php
                                    echo $this->Form->input(
                                            'monthly_bill', array(
                                        'class' => 'required partial',
                                        'type' => 'number'
                                            )
                                    );
                                    ?> 
                                </div>                            
                            </div>
                        </div>
                        <div class="col-md-1">
                            <span class="signupfont">Others: </span>
                        </div>
                        <div class="col-md-1">
                            <div class="input-list style-4 clearfix">
                                <div>
                                    <?php
                                    echo $this->Form->input(
                                            'others', array(
                                        'class' => 'partial',
                                        'type' => 'number'
                                            )
                                    );
                                    ?> 
                                </div>                            
                            </div>
                        </div>
                        <div class="col-md-1 signupfont">
                            Total: 
                        </div>
                        <div class="col-md-2">
                            <?php
                            echo $this->Form->input(
                                    'total', array(
                                'class' => 'form-control input-sm total',
                                'type' => 'text',
                                'readonly' => 'readonly'
                                    )
                            );
                            ?>
                        </div>                                                                          
                    </div>
                </div>
                &nbsp;



                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th class="tablehead">
                                            PAYMENT METHOD
                                        </th>
                                        <th>

                                        </th>
                                        <th class="tablehead">
                                            CARD/CHECK INFORMATION
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="signupfont" style="min-width: 200px;">
                                            <div class="form-group" style="margin-left: 0px;">
                                                <div class="">
                                                    <label><input id="sig1" type="radio" value="CARD (DEBIT/CREDIT)" name="data[PackageCustomer][payment_type]">CARD (DEBIT/CREDIT)</label>
                                                </div>
                                                <div class="">
                                                    <label><input id="sig2" type="radio" value="PERSONAL CHECK" name="data[PackageCustomer][payment_type]">PERSONAL CHECK</label>
                                                </div>
                                                <div class="">
                                                    <label><input id="sig2" type="radio" value="CERTIFIED CHECK" name="data[PackageCustomer][payment_type]">CERTIFIED CHECK</label>
                                                </div>
                                                <div class="">
                                                    <label><input id="sig2" type="radio" value="MONEY ORDER" name="data[PackageCustomer][payment_type]">MONEY ORDER</label>
                                                </div>

                                            </div>


                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-3">
                                                    <div class="form-group" style="margin-left: 0px;">

                                                        <div class="radio-list">
                                                            <label style="padding-top: 0px;" class="radio-inline"><input type="radio" value="VISA" name="data[PackageCustomer][card_type]">VISA</label>
                                                            <label style="padding-top: 0px;" class="radio-inline"><input type="radio" value="MASTER Card" name="data[PackageCustomer][card_type]">MASTER Card </label>
                                                            <label style="padding-top: 0px;" class="radio-inline"><input type="radio" value="MASTER Card" name="data[PackageCustomer][card_type]">BANK </label>
                                                        </div>
                                                    </div>     

                                                </div>

                                            </div>



                                            <div class="row">
                                                <div class="col-md-3 signupfont">
                                                    Name: 
                                                </div>
                                                <div class="col-md-9">
                                                    <?php
                                                    echo $this->Form->input(
                                                            'card_username', array(
                                                        'type' => 'text',
                                                        'class' => 'form-control input-sm required'
                                                    ));
                                                    ?>
                                                </div>

                                            </div>

                                            &nbsp;

                                            <div class="row">
                                                <div class="col-md-3 signupfont" style="padding-right: 0px;">
                                                    Card/Check No: 
                                                </div>
                                                <div class="col-md-9">
                                                    <?php
                                                    echo $this->Form->input(
                                                            'card_check_no', array(
                                                        'type' => 'text',
                                                        'class' => 'form-control input-sm required'
                                                    ));
                                                    ?>
                                                </div>

                                            </div>

                                            &nbsp;

                                            <div class="row">
                                                <div class="col-md-3 signupfont">
                                                    Exp. Date:
                                                </div>
                                                <div class="col-md-9">
                                                    <div>
                                                        <?php
                                                        echo $this->Form->input(
                                                                'exp_date', array(
                                                            'type' => 'date',
                                                        ));
                                                        ?>
                                                    </div>
                                                    <!--   exp_date     -->
                                                </div>

                                            </div>

                                            &nbsp;
                                            <div class="row">
                                                <div class="col-md-3 signupfont">
                                                    CVV Code: 
                                                </div>
                                                <div class="col-md-3">
                                                    <?php
                                                    echo $this->Form->input(
                                                            'cvv_code', array(
                                                        'type' => 'text',
                                                        'class' => 'form-control input-sm required'
                                                    ));
                                                    ?>
                                                </div>
                                                <div class="col-md-3 signupfont">
                                                    Charged Amount: 
                                                </div>
                                                <div class="col-md-3">
                                                    <?php
                                                    echo $this->Form->input(
                                                            'charge_amount', array(
                                                        'class' => 'form-control input-sm total',
                                                        'type' => 'text',
                                                            )
                                                    );
                                                    ?>
                                                </div>
                                            </div>
                                            &nbsp;
                                            <div class="row">
                                                <div class="col-md-3 signupfont">
                                                    Address on Card: 
                                                </div>
                                                <div class="col-md-9">
                                                    <?php
                                                    echo $this->Form->input(
                                                            'address_on_card', array(
                                                        'type' => 'text',
                                                        'class' => 'form-control input-sm'
                                                    ));
                                                    ?>
                                                </div>
                                            </div>
                                            &nbsp;
                                            <div class="row">
                                                <div class="col-md-10 col-md-offset-3">
                                                    <input type="checkbox" name="data[PackageCustomer][same_address]" value="YES" id="PostPublished" /> <span class="signupfont">SAME AS BILLING ADDRESS </span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 ">
                        <!-- BEGIN SAMPLE FORM PORTLET-->
                        <div class="portlet box"  style=" text-align: center; background-color: black;">
                            <div class="portlet-title">
                                <div class="caption" id="blackcaption" >
                                    EQUIPMENT
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th class="tablehead">
                                            EQUIPMENT
                                        </th>

                                        <th class="tablehead">
                                            DESCRIPTION
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="signupfont">SITE TOP BOX</span>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="text-center" style="margin-left: 0px;">
                                                        <div class="radio-list">
                                                            <label style="padding-top: 0px;" class="radio-inline"><input type="radio" value="1 BOX" name="data[PackageCustomer][equipment_top_box]">1 BOX</label>
                                                            <label style="padding-top: 0px;" class="radio-inline"><input type="radio" value="2 BOX" name="data[PackageCustomer][equipment_top_box]">2 BOX</label>
                                                            <label style="padding-top: 0px;" class="radio-inline"><input type="radio" value="3 BOX" name="data[PackageCustomer][equipment_top_box]">3 BOX</label>
                                                        </div>
                                                    </div>     
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="signupfont">HDMI</span> 
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="text-center" style="margin-left: 0px;">
                                                        <div class="radio-list">
                                                            <label style="padding-top: 0px;" class="radio-inline"><input type="radio" value="YES" name="data[PackageCustomer][equipment_hdmi]">YES</label>
                                                            <label style="padding-top: 0px;" class="radio-inline"><input type="radio" value="NO" name="data[PackageCustomer][equipment_hdmi]">NO</label>                                                       
                                                        </div>
                                                    </div>     
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="signupfont">AV CABLE</span> 
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="text-center" style="margin-left: 0px;">
                                                        <div class="radio-list">
                                                            <label style="padding-top: 0px;" class="radio-inline"><input type="radio" value="YES" name="data[PackageCustomer][equipment_av_cable]">YES</label>
                                                            <label style="padding-top: 0px;" class="radio-inline"><input type="radio" value="NO" name="data[PackageCustomer][equipment_av_cable]">NO</label>                                                       
                                                        </div>
                                                    </div>     
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="signupfont">ETHERNET</span>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="text-center" style="margin-left: 0px;">
                                                        <div class="radio-list">
                                                            <label style="padding-top: 0px;" class="radio-inline"><input type="radio" value="YES" name="data[PackageCustomer][equipment_ethernet]">YES</label>
                                                            <label style="padding-top: 0px;" class="radio-inline"><input type="radio" value="NO" name="data[PackageCustomer][equipment_ethernet]">NO</label>                                                       
                                                        </div>
                                                    </div>     
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="signupfont">REMOTE</span>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="text-center" style="margin-left: 0px;">
                                                        <div class="radio-list">
                                                            <label style="padding-top: 0px;" class="radio-inline"><input type="radio" value="YES" name="data[PackageCustomer][equipment_remote]">YES</label>
                                                            <label style="padding-top: 0px;" class="radio-inline"><input type="radio" value="NO" name="data[PackageCustomer][equipment_remote]">NO</label>                                                       
                                                        </div>
                                                    </div>     
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="signupfont">POWER ADAPTER</span> 
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="text-center" style="margin-left: 0px;">
                                                        <div class="radio-list">
                                                            <label style="padding-top: 0px;" class="radio-inline"><input type="radio" value="YES" name="data[PackageCustomer][equipment_adapter]">YES</label>
                                                            <label style="padding-top: 0px;" class="radio-inline"><input type="radio" value="NO" name="data[PackageCustomer][equipment_adapter]">NO</label>                                                       
                                                        </div>
                                                    </div>     
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="signupfont">OTHER</span>
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 ">
                        <!-- BEGIN SAMPLE FORM PORTLET-->
                        <div class="portlet box"  style=" text-align: center; background-color: black;">
                            <div class="portlet-title">
                                <div class="caption" id="blackcaption" >
                                    WARRANTY
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th class="tablehead">
                                            EQUIPMENT
                                        </th>

                                        <th class="tablehead">
                                            DESCRIPTION
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="signupfont">SITE TOP BOX</span>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class=" text-center"><span class="signupfont">N/A</span></div>     
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="signupfont">HDMI/AV CABLE</span> 
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="text-center" style="margin-left: 0px;">
                                                        <div class="radio-list">
                                                            <label style="padding-top: 0px;" class="radio-inline"><input type="radio" value="3 MONTH" name="data[PackageCustomer][warranty_hdmi_av]">3 MONTH</label>
                                                            <label style="padding-top: 0px;" class="radio-inline"><input type="radio" value="6 MONTH" name="data[PackageCustomer][warranty_hdmi_av]">6 MONTH</label>                                                       
                                                        </div>
                                                    </div>     
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <span class="signupfont">POWER ADAPTER</span>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="text-center" style="margin-left: 0px;">
                                                        <div class="radio-list">
                                                            <label style="padding-top: 0px;" class="radio-inline"><input type="radio" value="3 MONTH" name="data[PackageCustomer][warranty_adapter]">3 MONTH</label>
                                                            <label style="padding-top: 0px;" class="radio-inline"><input type="radio" value="6 MONTH" name="data[PackageCustomer][warranty_adapter]">6 MONTH</label>                                                       
                                                        </div>
                                                    </div>     
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="signupfont">REMOTE</span>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="text-center" style="margin-left: 0px;">
                                                        <div class="radio-list">
                                                            <label style="padding-top: 0px;" class="radio-inline"><input type="radio" value="3 MONTH" name="data[PackageCustomer][warranty_remote]">3 MONTH</label>
                                                            <label style="padding-top: 0px;" class="radio-inline"><input type="radio" value="6 MONTH" name="data[PackageCustomer][warranty_remote]">6 MONTH</label>
                                                        </div>     
                                                    </div>
                                                </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="signupfont">ROUTER/DONGLE</span>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="text-center"><span class="signupfont">NO WARRANTY</span></div>     
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- BEGIN BUTTONS PORTLET-->



                &nbsp; &nbsp; &nbsp;
               


                <?php
                echo $this->Form->input(
                        'psetting_id', array(
                    'id' => 'packageid',
                    'type' => 'hidden',
                        )
                );
                ?>



                &nbsp;

                &nbsp;

                <div class="row">
                    <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20"> 

                        <?php
                        echo $this->Form->button(
                                'Done', array(
                            'class' => 'btn btn-primary submitbtn',
                            'type' => 'submit',
                            
                        ));
                        ?>

                    </div>
                </div> 
            </div>

            <?php echo $this->Form->end(); ?>

        </div>
    </div>
</div>



