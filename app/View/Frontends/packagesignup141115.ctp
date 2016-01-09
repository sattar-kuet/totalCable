<div class="main" style="background-color: #D8E3F2;">
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
                            <div style="border: 5px solid rgba(75,172,198,1);">
                                <div id="headingborder">

                                    SERVICE ORDER FORM

                                </div>
                            </div>
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
                            e-mail:info@totalcableusa.com <br>
                            www.totalcablueusa.com <br>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="radio-list" style="margin-left: 20px;">
                        <label class="radio-inline"><input type="radio" name="optradio">NEW INSTALLATION</label>
                        <label class="radio-inline"><input type="radio" name="optradio">SERVICE REPAIR</label>
                        <label class="radio-inline"><input type="radio" name="optradio">CANCEL SERVICE</label>
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
                            Address: Street: 
                        </div>
                        <div class="col-md-6">
                            <div class="input-list style-4 clearfix">
                                <div>
                                    <?php
                                    echo $this->Form->input(
                                            'street', array(
                                        'class' => 'required'
                                            )
                                    );
                                    ?> 
                                </div>                            
                            </div>
                        </div>
                        <div class="col-md-2 signupfont">
                            Apt/Floor/Suite: 

                        </div>


                        <div class="col-md-2">
                            <div class="input-list style-4 clearfix">
                                <div>
                                    <?php
                                    echo $this->Form->input(
                                            'afs', array(
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

                        <div class="col-md-1 signupfont">
                            City: 
                        </div>
                        <div class="col-md-3">
                            <div class="input-list style-4 clearfix">
                                <div>
                                    <?php
                                    echo $this->Form->input(
                                            'city', array(
                                        'class' => 'required',
                                            )
                                    );
                                    ?> 
                                </div>                            
                            </div>
                        </div>
                        <div class="col-md-1 signupfont">
                            State:

                        </div>
                        <div class="col-md-3">
                            <div class="input-list style-4 clearfix">
                                <div>
                                    <?php
                                    echo $this->Form->input(
                                            'state', array(
                                        'class' => 'required',
                                            )
                                    );
                                    ?> 
                                </div>                            
                            </div>
                        </div>
                        <div class="col-md-2 signupfont">
                            Zip Code: 
                        </div>
                        <div class="col-md-2">
                            <div class="input-list style-4 clearfix">
                                <div>
                                    <?php
                                    echo $this->Form->input(
                                            'zip_code', array(
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
                        <div class="col-md-2">
                            <div class="input-list style-4 clearfix">
                                <div>
                                    <?php
                                    echo $this->Form->input(
                                            'home', array(
                                        'class' => 'required',
                                        'type' => 'number'
                                            )
                                    );
                                    ?> 
                                </div>                            
                            </div>
                        </div>
                        <div class="col-md-1 signupfont">
                            Cell:

                        </div>
                        <div class="col-md-3">
                            <div class="input-list style-4 clearfix">
                                <div>
                                    <?php
                                    echo $this->Form->input(
                                            'cell', array(
                                        'class' => '',
                                        'type' => 'number'
                                            )
                                    );
                                    ?>
                                </div>                            
                            </div>
                        </div>
                        <div class="col-md-1 signupfont">
                            Other: 
                        </div>
                        <div class="col-md-3">
                            <div class="input-list style-4 clearfix">
                                <div>
                                    <?php
                                    echo $this->Form->input(
                                            'other', array(
                                        'class' => '',
                                        'type' => 'number'
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

                        <div class="col-md-1 signupfont">
                            Fax: 
                        </div>
                        <div class="col-md-3">
                            <div class="input-list style-4 clearfix">
                                <div>
                                    <?php
                                    echo $this->Form->input(
                                            'fax', array(
                                        'class' => '',
                                        'type' => 'number',
                                        'placeholder' => 'Optional'
                                            )
                                    );
                                    ?> 
                                </div>                            
                            </div>
                        </div>
                        <div class="col-md-1 signupfont">
                            E-Mail

                        </div>
                        <div class="col-md-7">
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

                    </div>
                </div>
                &nbsp;








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
                            <input type="checkbox" name="vehicle" value="Bike"> CHARGE P/M $ 
                        </div>
                        <div class="col-md-1">
                            <div class="input-list style-4 clearfix">
                                <div>
                                    <?php
                                    echo $this->Form->input(
                                            'charge', array(
                                        'class' => 'required partial',
                                            )
                                    );
                                    ?> 
                                </div>                            
                            </div>
                        </div>
                        <div class="col-md-2">
                            <input type="checkbox" name="vehicle" value="Bike"> <span style="color: #e94d1c">SEC.</span> DEPOSIT $ 

                        </div>
                        <div class="col-md-1">
                            <div class="input-list style-4 clearfix">
                                <div>
                                    <?php
                                    echo $this->Form->input(
                                            'deposit', array(
                                        'class' => 'required partial',
                                            )
                                    );
                                    ?> 
                                </div>                            
                            </div>
                        </div>
                        <div class="col-md-1" style="font-size: 12px; padding-left: 0px; padding-right: 0px;">
                            <input type="checkbox" name="vehicle" value="Bike"> ROUTER $
                        </div>
                        <div class="col-md-1">
                            <div class="input-list style-4 clearfix">
                                <div >
                                    <?php
                                    echo $this->Form->input(
                                            'router', array(
                                        'class' => 'required partial',
                                            )
                                    );
                                    ?> 
                                </div>                            
                            </div>
                        </div>
                        <div class="col-md-1" style="font-size: 12px; padding-left: 0px; padding-right: 0px;">
                            <input type="checkbox" name="vehicle" value="Bike"> WIRING $
                        </div>
                        <div class="col-md-1">
                            <div class="input-list style-4 clearfix">
                                <div>
                                    <?php
                                    echo $this->Form->input(
                                            'wiringe', array(
                                        'class' => 'required partial',
                                        'type' => 'number'
                                            )
                                    );
                                    ?> 
                                </div>                            
                            </div>
                        </div>
<!--                        <div class="col-md-1" style="font-size: 12px; padding-left: 0px; padding-right: 0px;">
                            <input type="checkbox" name="vehicle" value="Bike"> TOTAL $
                        </div>
                        <div class="col-md-1">
                            <div class="input-list style-4 clearfix">
                                <div>
                                    <input type="text">
                                </div>                            
                            </div>
                        </div>-->


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
                                        <td class="signupfont">

                                            

                                            <div class="form-group" style="margin-left: 0px;">
                                                <div class="">
                                                    <label><input type="radio" name="optradio">CARD (DEBIT/CREDIT)</label>
                                                </div>
                                                <div class="">
                                                    <label><input type="radio" name="optradio">PERSONAL CHECK</label>
                                                </div>
                                                <div class="">
                                                    <label><input type="radio" name="optradio">CERTIFIED CHECK</label>
                                                </div>
                                                <div class="">
                                                    <label><input type="radio" name="optradio">MONEY ORDER</label>
                                                </div>
                                              
                                            </div>
                                            
                                            
                                                <div class="">
                                                <label  class="signupfont" for="exampleInputFile1">Card Holder's Signature:</label>&nbsp;

                                            <input type="file" name="data[User][ch_signature]" id="required">  
                                                </div>
                                            






                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group" style="margin-left: 0px;">

                                                        <div class="radio-list">
                                                            <label style="padding-top: 0px;" class="radio-inline"><input type="radio" name="optradio1">VISA</label>
                                                            <label style="padding-top: 0px;" class="radio-inline"><input type="radio" name="optradio1">MASTER Card </label>

                                                        </div>
                                                    </div>     

                                                </div>
                                                <div class="col-md-8">
                                                    <div class="col-md-4 signupfont">
                                                        Bank Name: 
                                                    </div>
                                                    <div class="col-md-8">
                                                        <?php
                                                        echo $this->Form->input(
                                                                'address_on_card', array(
                                                            'type' => 'text',
                                                            'class' => 'form-control input-sm required'
                                                        ));
                                                        ?>
                                                    </div>


                                                </div>
                                            </div>
                                            
                                            
                                            
                                            <div class="row">
                                                <div class="col-md-2 signupfont">
                                                    Name: 
                                                </div>
                                                <div class="col-md-4">
                                                    <?php
                                                    echo $this->Form->input(
                                                            'name', array(
                                                        'type' => 'text',
                                                        'class' => 'form-control input-sm required'
                                                    ));
                                                    ?>
                                                </div>
                                                <div class="col-md-2 signupfont">
                                                    <span style="color: #e94d1c;">CHECK NO:</span>
                                                </div>
                                                <div class="col-md-4">
                                                    <?php
                                                    echo $this->Form->input(
                                                            'check', array(
                                                        'type' => 'text',
                                                        'class' => 'form-control input-sm required'
                                                    ));
                                                    ?>
                                                </div>
                                            </div>
                                            
                                            &nbsp;
                                            
                                            <div class="row">
                                                <div class="col-md-2 signupfont" style="padding-right: 0px;">
                                                    Card/Check No: 
                                                </div>
                                                <div class="col-md-4">
                                                    <?php
                                                    echo $this->Form->input(
                                                            'card_check_no', array(
                                                        'type' => 'text',
                                                        'class' => 'form-control input-sm required'
                                                    ));
                                                    ?>
                                                </div>
                                                <div class="col-md-2 signupfont">
                                                    Exp. Date:
                                                </div>
                                                <div class="col-md-4">
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
                                                <div class="col-md-2 signupfont">
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
                                                    Charged Amount: $ 
                                                </div>
                                                <div class="col-md-4">
                                                    <?php
                                                    echo $this->Form->input(
                                                            'charge_amount', array(
                                                        'class' => 'form-control input-sm required total',
                                                        'type' => 'text',
                                                                'disabled' => 'disabled',
                                                                
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
                                                    'class' => 'form-control input-sm required'
                                                ));
                                                ?>
                                            </div>
                                            </div>
                                            
                                            
                                            
                                            


                                        </td>

                                    </tr>
                                    
                                    
<!--                                    <tr>
                                        <td class="signupfont" >
                                           <label  class="signupfont" for="exampleInputFile1">Card Holder's Signature:</label>&nbsp;

                                            <input type="file" name="data[User][ch_signature]" id="required">  
                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-2 signupfont">
                                                    Name: 
                                                </div>
                                                <div class="col-md-4">
                                                    <?php
                                                    echo $this->Form->input(
                                                            'name', array(
                                                        'type' => 'text',
                                                        'class' => 'form-control input-sm required'
                                                    ));
                                                    ?>
                                                </div>
                                                <div class="col-md-2 signupfont">
                                                    <span style="color: #e94d1c;">CHECK NO:</span>
                                                </div>
                                                <div class="col-md-4">
                                                    <?php
                                                    echo $this->Form->input(
                                                            'check', array(
                                                        'type' => 'text',
                                                        'class' => 'form-control input-sm required'
                                                    ));
                                                    ?>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="signupfont">
                                          
                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-2 signupfont" style="padding-right: 0px;">
                                                    Card/Check No: 
                                                </div>
                                                <div class="col-md-4">
                                                    <?php
                                                    echo $this->Form->input(
                                                            'card_check_no', array(
                                                        'type' => 'text',
                                                        'class' => 'form-control input-sm required'
                                                    ));
                                                    ?>
                                                </div>
                                                <div class="col-md-2 signupfont">
                                                    Exp. Date:
                                                </div>
                                                <div class="col-md-4">
                                                    <div>
                                                        <?php
                                                        echo $this->Form->input(
                                                                'exp_date', array(
                                                            'type' => 'date',
                                                        ));
                                                        ?>
                                                    </div>
                                                       exp_date     
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="signupfont">
                                            
                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-2 signupfont">
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
                                                    Charged Amount: $ 
                                                </div>
                                                <div class="col-md-4">
                                                    <?php
                                                    echo $this->Form->input(
                                                            'charge_amount', array(
                                                        'class' => 'form-control input-sm required',
                                                        'type' => 'text',
                                                                'disabled' => 'disabled',
                                                                'value' => '123'
                                                            )
                                                    );
                                                    ?>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                           
                                        </td>
                                        <td>

                                        </td>
                                        <td >
                                            <div class="row">
                                            <div class="col-md-3 signupfont">
                                                Address on Card: 
                                            </div>
                                            <div class="col-md-9">
                                                <?php
                                                echo $this->Form->input(
                                                        'address_on_card', array(
                                                    'type' => 'text',
                                                    'class' => 'form-control input-sm required'
                                                ));
                                                ?>
                                            </div>
                                            </div>

                                        </td>

                                    </tr>
-->

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>




                <!-- BEGIN BUTTONS PORTLET-->



                &nbsp; &nbsp; &nbsp;
                <div class="row">
                    <div class="col-md-12 col-sm-12" style="text-align: justify;">  

                        <div class="checkbox-list">
                            <label class="checkbox-inline" >

                                <?php
                                echo $this->Form->input(
                                        'agreement', array(
                                    'type' => 'checkbox',
                                ));
                                ?> 

                                I agree to pay one time installation fee, security deposit and all charges associated with the services selected by me. I have read and fully understood the terms and conditions mentioned overleaf and unconditionally accept them as binding on me. I do understand that I will be billed $ _______ every ____ months for service. Postpaid bill is due by the <strong>7th</strong>7th day of the every _____ months. I can be charged an additional $5/$10/$15 service charge for reconnecting service due to late or non-payment. Total Cable has the right to discontinue service or change/remove contents offered as required by law without prior notice.

                            </label>

                        </div>
                        &nbsp;
                        <br>
                        <div class="checkbox-list">
                            <label class="checkbox-inline" >
                                <b>Termination of Service:</b> If you (above customer) leave or move from your 
                                current resident, it is your responsibility to notify Total Cable to discontinue 
                                your service. Failure to do so will result in your continued responsibility for 
                                all Total Cable service charges. To complete cancellation/termination of this 
                                subscription, you must return all equipment provided to you by Total Cable in 
                                good working condition immediately along with a check (if applicable) of total 
                                due balance.
                            </label>
                        </div>

                        <div class="checkbox-list">
                            <label class="checkbox-inline require" >

                                <?php
                                echo $this->Form->input(
                                        'agreement', array(
                                    'type' => 'checkbox',
                                ));
                                ?> 

                                By signing below I agree to the term and condition on other side of the page.

                            </label>

                        </div>

                    </div>
                </div>

                &nbsp;






                &nbsp;

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




<!--                <div class="portlet box" style=" text-align: center; background-color: black;">
                    <div class="portlet-title">
                        <div class="caption" id="blackcaption">
                            Official Use Only
                        </div>

                    </div>
                </div>-->
<!--                <div class="row">
                    <div class="col-md-12 ">

                        <div class="col-md-3 signupfont">
                            <input type="checkbox"> Installation Date: 
                        </div>
                        <div class="col-md-3">
                            <div class="input-list style-4 clearfix">
                                <div>
                                    <input type="text">
                                </div>                            
                            </div>
                        </div>
                        <div class="col-md-2 signupfont">
                            <input type="checkbox"> Box Mac: 
                        </div>
                        <div class="col-md-4">
                            <div class="input-list style-4 clearfix">
                                <div>
                                    <input type="text">
                                </div>                            
                            </div>
                        </div>

                    </div>
                </div>-->
<!--                &nbsp;
                <div class="row">
                    <div class="col-md-12 ">

                        <div class="col-md-2 signupfont">
                            <input type="checkbox"> Referred By:  
                        </div>
                        <div class="col-md-4">
                            <div class="input-list style-4 clearfix">
                                <div>
                                    <input type="text">
                                </div>                            
                            </div>
                        </div>
                        <div class="col-md-3 signupfont">
                            <input type="checkbox"> Installation completed by  
                        </div>
                        <div class="col-md-3">
                            <div class="input-list style-4 clearfix">
                                <div>
                                    <input type="text">
                                </div>                            
                            </div>
                        </div>

                    </div>
                </div>
                &nbsp;-->




            </div>



            <?php echo $this->Form->end(); ?>


        </div>



        
    </div>


    <!-- END SIDEBAR & CONTENT -->


</div>

