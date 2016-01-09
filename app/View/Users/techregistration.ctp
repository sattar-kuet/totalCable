<div id="content" class="clearfix">
    <div class="contentwrapper"><!--Content wrapper-->

        <div class="heading">

            <h3>Technician Registration Form</h3>  
        </div><!-- End .heading-->

        <!-- Build page from here: Usual with <div class="row-fluid"></div> -->

        <div class="row-fluid">

            <div class="span12">

                <div class="box">

                    <div class="title">
                        <?php echo $this->Session->flash(); ?> 
                        <?php
                        if (isset($errors)):
                            echo $errors;
                        endif;
                        ?> 

                    </div>
                    <div class="content">
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

                        <div class="form-row row-fluid">
                            <div class="span12">
                                <div class="row-fluid">
                                    <label class="form-label span3" for="required">Full Name</label>

                                    <?php
                                    echo $this->Form->input(
                                            'name', array(
                                        'class' => 'span9 text required',
                                            )
                                    );
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-row row-fluid">
                            <div class="span12">
                                <div class="row-fluid">
                                    <label class="form-label span3" for="required">Email</label>
                                    <?php
                                    echo $this->Form->input(
                                            'email', array(
                                        'class' => 'span9 text required'
                                            )
                                    );
                                    ?>
                                </div>
                            </div>
                        </div> 
                        <div class="form-row row-fluid">
                            <div class="span12">
                                <div class="row-fluid">
                                    <label class="form-label span3" for="password">Password</label>
                                    <?php
                                    echo $this->Form->input(
                                            'password', array(
                                        'class' => 'span9 password required',
                                        'type' => 'password',
                                            )
                                    );
                                    ?>
                                </div>
                            </div>
                        </div>


                        <div class="form-row row-fluid">
                            <div class="span12">
                                <div class="row-fluid">
                                    <div class="form-actions">
                                        <div class="span3"></div>
                                        <div class="span9 controls">
                                            <?php
                                            echo $this->Form->button(
                                                    'Register', array('class' => 'btn marginR10 btn-primary pull-right', 'type' => 'submit')
                                            );
                                            ?>

                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <?php echo $this->Form->end(); ?>

                    </div>

                </div><!-- End .box -->

            </div><!-- End .span12 -->



        </div><!-- End .row-fluid -->  