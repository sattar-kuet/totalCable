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
                <div class="col-sm-12">
                    <div class="content " style="width: 60%;">
                        <?php echo $this->Session->flash(); ?> 

                        <?php
                        echo $this->Form->create('Customer', array(
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
                            <div class="radio-list  ">
                                <label class="radio-inline">
                                    <span class=""><input type="radio" name="data[Customer][service_type]" id="service_type" value="new" checked=""></span> NEW INSTALLATION </label>
                                <label class="radio-inline">
                                    <span class="checked"><input type="radio" name="data[Customer][service_type]" id="service_type" value="repair"></span> SERVICE REPAIR </label>
                                <label class="radio-inline">
                                    <span class="checked"><input type="radio" name="data[Customer][service_type]" id="service_type" value="cancel"></span> CANCEL SERVICE </label>
                                <label class="radio-inline">
                                    <span class="checked"><input type="radio" name="data[Customer][service_type]" id="service_type" value="other"></span> OTHER SERVICE </label>
                            </div>
                        </div>
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
                                        'address', array(
                                    'class' => 'form-control required',
                                    'placeholder' => 'Address'
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
                                        'city', array(
                                    'class' => 'form-control required',
                                    'placeholder' => 'City'
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
                                    'class' => 'form-control required',
                                    'placeholder' => 'state'
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
                                        'zipe', array(
                                    'class' => 'form-control',
                                    'placeholder' => 'Zip Code'
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
                                    'class' => 'form-control required',
                                    'placeholder' => 'Cell'
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
                                        'fax', array(
                                    'class' => 'form-control',
                                    'placeholder' => 'Fax'
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
                                        'phone', array(
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
                                        'comment', array(
                                    'class' => 'form-control required display-hide',
                                    'type' => 'textarea',
                                    'placeholder' => 'Comment',
                                    'style' => 'height: 101px'
                                        )
                                );
                                ?>
                            </div>
                        </div>
                        <div class="form-actions">                  
                            <?php
                            echo $this->Form->button(
                                    'Sign up', array('class' => 'btn blue pull-right submitbtn', 'type' => 'submit')
                            );
                            ?>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>


