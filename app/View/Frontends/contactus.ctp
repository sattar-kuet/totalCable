<!-- BEGIN LOGO -->

<div class="main">
    <div class="services-block content content-center" id="services">
        <div class="container">            
            <div class="row">                
                
            </div>
        </div>
    </div>
<div class="login backstretch">

    <div class="container"> 
    
    <div class="row">
        <div class="col-sm-4">
            <div class="portlet box grey-cascade">

                <div class="portlet-body">
                    <div id="gmap_static" class="gmaps">
                        <div style="height:100%; width: 100%">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.557653684581!2d-73.905213!3d40.74975800000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25f1bece75213%3A0x43f4dd9a13836756!2s37-19+57th+St%2C+Woodside%2C+NY+11377!5e0!3m2!1sen!2sus!4v1435187762734" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="content ">
              
                <?php echo $this->Session->flash(); ?> 
              
                <?php
                echo $this->Form->create('Contactus', array(
                    'inputDefaults' => array(
                        'label' => false,
                        'div' => false
                    ),
                    'id' => 'form-validate',
                    'class' => 'form-horizontal',
                    'novalidate' => 'novalidate'
                        )
                );
                ?>

                <div class="form-group">
                    <div class="input-icon">
                        <i></i>
                        <?php
                        echo $this->Form->input(
                                'name', array(
                           
                            'class' => 'form-control required',
                            'placeholder' => 'Your Name'
                                )
                        );
                        ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-icon">
                        <i></i>
                        <?php
                        echo $this->Form->input(
                                'phone_number', array(
                            
                            'class' => 'form-control required',
                            'placeholder' => 'Your Phone Number'
                                )
                        );
                        ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-icon">
                        <i></i>
                        <?php
                        echo $this->Form->input(
                                'email', array(
                            
                            'class' => 'form-control required',
                            'placeholder' => 'Your Email Address'
                                )
                        );
                        ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-icon">
                        <i></i>
                        <?php
                        echo $this->Form->input(
                                'message', array(
                            
                            'class' => 'form-control required',
                            'type' => 'textarea',
                            'placeholder' => 'Your Message',
                            'style' => 'height: 101px'
                                )
                        );
                        ?>
                    </div>
                </div>
                <div class="form-actions">                  
                    <?php
                    echo $this->Form->button(
                            'Send', array('class' => 'btn blue pull-right submitbtn', 'type' => 'submit')
                    );
                    ?>
                </div>

            </div> 
        </div>
        <div class="col-sm-4">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab-1" data-toggle="tab" >Telephonic Support</a></li>
                <li><a href="#tab-2" data-toggle="tab">Email Support</a></li>

            </ul>
            <div class="tab-content">
                 <div class="tab-pane row fade in active" id="tab-1">
                    <div class="col-md-12 col-sm-12">
                        <div class="service-box-heading">
                            <div class="col-md-12 col-sm-12">
                               <h4 style="line-height: 32px;"> Our professional support staffs are available 8:00am – 10:00PM (EST Time) to help you. Please contact us at the following phone numbers:
                                    <br>Phone: 212-444-8138</h4>
                            </div>

                        </div>
                    </div>

                </div>
                  <div class="tab-pane row fade" id="tab-2">

                        <div class="col-md-12 col-sm-12">

                            <div class="service-box-heading">
                                <div class="col-md-12 col-sm-12">
                                    <h4 style="line-height: 32px;">Our customers can always email their questions to following email addresses for answers in a timely fashion:
                                        <br> info@totalcableusa.com</h4>

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

