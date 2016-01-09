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
                        <h3> Tech Registration</h3>
                        <hr>
                        <?php echo $this->Session->flash(); ?> 
                        <?php
                        echo $this->Form->create('User', array(
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
                                        'password', array(
                                    'class' => 'form-control required',
                                    
                                    'placeholder' => 'Password',
                                     'type' => 'password',
                                        )
                                );
                                ?>
                            </div>
                        </div>
                        <div class="form-actions">                  
                            <?php
                            echo $this->Form->button(
                                    'Register', array('class' => 'btn blue pull-right submitbtn', 'type' => 'submit')
                            );
                            ?>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>


