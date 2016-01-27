<div class="main">
    <div class="services-block content content-center" id="services">
        <div class="container">            
            <div class="row">                

            </div>
        </div>
    </div>
    <div class="login" style="background-color: #E5E5E5 !important;">
        <div class="container"> 
            <div class="row">
                <div class="col-sm-8 col-md-offset-2">
                    <div class="content">
                        <?php echo $this->Session->flash(); ?> 

                        <?php
                        echo $this->Form->create('Customer', array(
                            'inputDefaults' => array(
                                'label' => false,
                                'div' => false,
                            ),
                            'id' => 'form-validate',
                            'class' => 'form-horizontal'
                                )
                        );
                        ?>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 style="color: #333333; text-align: justify; font-weight: 300;"> Thank you for visiting us. We are providing an IP television service which means our set-up box only needs Internet. Our requirement is just 5 Mbps Internet download speed. You can use our one box for your one television.</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 style="color: #5bc0de; text-transform: inherit;">Please fill up the required information below to confirm your order.</h1>
                                </div>                            
                            </div> 
                        </div>

                        <div class="form-group">
                            <div>
                                <h4 style="color: #333333;"><strong>Personal Details</strong></h4>
                            </div>
                            <div class="input-icon">
                                <i></i>
                                <?php
                                echo $this->Form->input(
                                        'name', array(
                                    'class' => 'form-control required',
                                    'placeholder' => 'Full Name'
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
                                        'address', array(
                                    'class' => 'form-control',
                                    'placeholder' => 'Street Address (Including Apt./Floor/Suite Number)'
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
                                        'state', array(
                                    'class' => 'form-control',
                                    'placeholder' => 'State and Zip Code'
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
                                        'home_business', array(
                                    'class' => 'form-control required',
                                    'placeholder' => 'Home/Business Phone Number'
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
                                        'cell', array(
                                    'class' => 'form-control',
                                    'placeholder' => 'Cell Phone Number'
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
                                        'internet_provider', array(
                                    'class' => 'form-control',
                                    'placeholder' => 'Internet Provider'
                                        )
                                );
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <h4 style="color: #333333;"><strong>Internet Speed</strong></h4>
                            </div>
                            <?php
                            $arrCategory = array("1 Mbps -5 Mbps" => "1 Mbps -5 Mbps", "6 Mbps -10 Mbps" => "6 Mbps -10 Mbps", "11 Mbps -15 Mbps" => "11 Mbps -15 Mbps", "16 Mbps -20 Mbps" => "16 Mbps -20 Mbps", "More Than 20 Mbps" => "More Than 20 Mbps", "Does Not Know" => "Does Not Know");
                            echo $this->Form->input(
                                    'internet_speed', array(
                                'class' => 'form-control',
                                'options' => $arrCategory,
                                'label' => false,
                                'empty' => '--Select one--',
                                    )
                            );
                            ?>

                        </div>
                        <div class="form-group">
                            <div>
                                <h4 style="color: #333333;"><strong>How did you hear about us?</strong></h4>
                            </div>
                            <?php
                            $arrCategory = array("Existing Customer" => "Existing Customer", "Management" => "Management", "Dealer/Agent" => "Dealer/Agent", "Technician" => "Technician", "Newspaper" => "Newspaper", "TV" => "TV", "Marketing Material (Poster/ Flyer/ Bill board)" => "Marketing Material (Poster/ Flyer/ Bill board)", "Website/Social Media" => "Website/Social Media", "Search Engine" => "Search Engine", "Other" => "Other");
                            echo $this->Form->input(
                                    'information_source', array(
                                'class' => 'form-control required',
                                'options' => $arrCategory,
                                'label' => false,
                                'empty' => '--Select one--',
                                'id' => 'info_source_id',
                                'name' => 'data[Customer][information_source]'
                                    )
                            );
                            ?>

                        </div>
                        <div class="form-group" id="reference_info" style="display: none;">
                            <div class="input-group">
                                <?php
                                echo $this->Form->input(
                                        'reference_name', array(
                                    'class' => 'form-control',
                                    'id' => 'r_name',
                                    'placeholder' => 'Reference Name'
                                        )
                                );
                                ?>
                                <span class="input-group-addon">-</span>
                                <?php
                                echo $this->Form->input(
                                        'reference_no', array(
                                    'class' => 'form-control',
                                    'id' => 'r_no',
                                    'placeholder' => 'Reference Cell no'
                                        )
                                );
                                ?>
                            </div>
                        </div>

                        <div class="form-group" id="info" style="display: none;">
                            <div class="input-icon">
                                <i></i>
                                <?php
                                echo $this->Form->input(
                                        'other_source', array(
                                    'class' => 'form-control',
                                    'id' => 'othersource',
                                    'placeholder' => 'Your Source'
                                        )
                                );
                                ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div>
                                <h4 style="color: #333333;"><strong>Sale Status</strong></h4>
                            </div>
                            <?php
                            $arrCategory = array("Yes" => "Yes", "May be" => "May be");
                            echo $this->Form->input(
                                    'sale_status', array(
                                'class' => 'form-control required',
                                'options' => $arrCategory,
                                'label' => false,
                                'empty' => '--Select one--',
                                    )
                            );
                            ?>

                        </div>

                        <!--                        <div class="form-group">
                                                    <div>
                                                        <h4 style="color: #333333;"><strong>Internet Speed</strong></h4>
                                                    </div>
                                                    <div class="radio-list">
                                                        <label class="radio-inline" style="color: #333333">
                                                            <span class=""><input type="radio" name="data[Customer][internet_speed]" id="service_type" value="1 Mbps -5 Mbps"></span> 1 Mbps -5 Mbps </label>
                                                        <label class="radio-inline" style="color: #333333">
                                                            <span class="checked"><input type="radio" name="data[Customer][internet_speed]" id="service_type" value="6 Mbps -10 Mbps"></span> 6 Mbps -10 Mbps </label>
                                                        <label class="radio-inline" style="color: #333333">
                                                            <span class="checked"><input type="radio" name="data[Customer][internet_speed]" id="service_type" value="11 Mbps -15 Mbps"></span> 11 Mbps -15 Mbps </label>
                                                        <label class="radio-inline" style="color: #333333">
                                                            <span class="checked"><input type="radio" name="data[Customer][internet_speed]" id="service_type" value="16 Mbps -20 Mbps"></span> 16 Mbps -20 Mbps </label>
                                                        <label class="radio-inline" style="color: #333333">
                                                            <span class="checked"><input type="radio" name="data[Customer][internet_speed]" id="service_type" value="16 Mbps -20 Mbps"></span> 16 Mbps -20 Mbps </label>
                                                        <label class="radio-inline" style="color: #333333">
                                                            <span class="checked"><input type="radio" name="data[Customer][internet_speed]" id="service_type" value="More Than 20 Mbps"></span> More Than 20 Mbps </label>
                                                        <label class="radio-inline" style="color: #333333">
                                                            <span class="checked"><input type="radio" name="data[Customer][internet_speed]" id="service_type" value="Does Not Know"></span> Does Not Know </label>                               
                                                    </div>
                                                </div>-->
                        <!--                        <div class="form-group">
                                                    <div>
                                                        <h4 style="color: #333333;"><strong>How did you hear about us?</strong></h4>
                                                    </div>                            
                                                    <div class="radio-list  ">
                                                        <label class="radio-inline" style="color: #333333">
                                                            <span class=""><input type="radio" name="data[Customer][information_source]" id="service_type" value="Existing Customer" required></span> Existing Customer </label>
                                                        <label class="radio-inline" style="color: #333333">
                                                            <span class="checked"><input type="radio" name="data[Customer][information_source]" id="service_type" value="Management" required></span> Management </label>
                                                        <label class="radio-inline" style="color: #333333">
                                                            <span class="checked"><input type="radio" name="data[Customer][information_source]" id="service_type" value="Dealer/Agent" required></span> Dealer/Agent </label>
                                                        <label class="radio-inline" style="color: #333333">
                                                            <span class="checked"><input type="radio" name="data[Customer][information_source]" id="service_type" value="Technician" required></span> Technician </label>
                                                        <label class="radio-inline" style="color: #333333">
                                                            <span class="checked"><input type="radio" name="data[Customer][information_source]" id="service_type" value="Newspaper" required></span> Newspaper </label>
                                                        <label class="radio-inline" style="color: #333333">
                                                            <span class="checked"><input type="radio" name="data[Customer][information_source]" id="service_type" value="TV" required></span> TV </label>
                                                        <label class="radio-inline" style="color: #333333">
                                                            <span class="checked"><input type="radio" name="data[Customer][information_source]" id="service_type" value="Marketing Material" required></span> Marketing Material (Poster/ Flyer/ Bill board) </label> 
                                                        <label class="radio-inline" style="color: #333333">
                                                            <span class="checked"><input type="radio" name="data[Customer][information_source]" id="service_type" value="Website/Social Media" required></span> Website/Social Media </label>
                                                        <label class="radio-inline" style="color: #333333">
                                                            <span class="checked"><input type="radio" name="data[Customer][information_source]" id="service_type" value="Search Engine" required></ span> Search Engine </label>
                                                                <label class="radio-inline" style="color: #333333">
                                                                    <span class="checked"><input type="radio" name="data[Customer][information_source]" id="service_type" value="other" required></span> Other </label>
                                                                </div>
                                                                </div>-->



                        <div class="form-group">
                            <div>
                                <h4 style="color: #333333;"><strong>Comment / Note</strong></h4>
                            </div>                           
                            <div class="input-icon">
                                <i></i>
                                <?php
                                echo $this->Form->input(
                                        'note', array(
                                    'class' => 'form-control',
                                    'type' => 'textarea',
                                    'placeholder' => 'Comment / Note',
                                    'style' => 'height: 101px'
                                        )
                                );
                                ?>
                            </div>
                        </div>
                      <!--
                        <div class="form-group">
                            <div class="input-icon">
                                <i></i>
                                <?php
                                echo $this->Form->input(
                                        'submitted_by', array(
                                    'class' => 'form-control',
                                    'placeholder' => 'Submmitted by'
                                        )
                                );
                                ?>
                            </div>
                        </div>
                      -->
                        <div class="form-actions">                  
                            <?php
                            echo $this->Form->button(
                                    'Submit', array('class' => 'btn blue pull-right submitbtn', 'type' => 'submit')
                            );
                            ?>
                        </div>

                        <?php echo $this->Form->end(); ?>


                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>


