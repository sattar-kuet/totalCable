<div id="content" class="clearfix">
    <div class="contentwrapper"><!--Content wrapper-->

        <div class="heading">

            <h3>Psettings</h3>                    

            <div class="resBtnSearch">
                <a href="#"><span class="icon16 icomoon-icon-search-3"></span></a>
            </div>

        </div><!-- End .heading-->

        <!-- Build page from here: Usual with <div class="row-fluid"></div> -->

        <div class="row-fluid">

            <div class="span12">

                <div class="box">

                    <div class="title">

                        <h4>
                            <span>Set your package details</span>
                        </h4>

                        <?php echo $this->Session->flash(); ?>

                    </div>
                    <div class="content">
                        
                            <?php
                            echo $this->Form->create('Psetting', array(
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
                                        <label class="form-label span3" for="normal">Packages</label>
                                        <?php
                                        echo $this->Form->input('package_id', array(
                                            'type' => 'select',
                                            'options' => $package,
                                            'class' => 'span9 uniform',
                                            'div' => array('class' => 'span9')
                                                )
                                        );
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row row-fluid">
                                <div class="span12">
                                    <div class="row-fluid">
                                        <label class="form-label span3" for="normal">Duration</label>
                                        <?php
                                        $package_duration = array('1' => '1 Month', '3' => '3 Month', '6' => '6 Month', '12' => '1 Year');
                                        echo $this->Form->input('duration', array(
                                            'type' => 'select',
                                            'options' => $package_duration,
                                            'class' => 'span9 uniform',
                                            'div' => array('class' => 'span9')
                                                )
                                        );
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row row-fluid">
                                <div class="span12">
                                    <div class="row-fluid">
                                        <label class="form-label span3" for="required">Amount</label>

                                        <?php
                                        echo $this->Form->input(
                                                'amount', array(
                                            'id' => 'required',
                                            'class' => 'span9 text',
                                            'type' => 'number'
                                                )
                                        );
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <!--  -->
                            <div class="form-row row-fluid">
                                <div class="span12">
                                    <div class="row-fluid">
                                        <label class="form-label span3" for="normal">Offer</label>
                                        <?php
                                        // echo $this->Form->input('offer', array(
                                        //     'type' => 'textarea',
                                        //     'class' => 'span9 uniform',
                                        //     'div' => array('class' => 'span9')
                                        //         )
                                        // );
                                        ?>
                                        <?php
                                        // echo $this->Tinymce->input('Newses.details');
                                        //echo $this->Form->input('title');
                                        echo $this->Tinymce->input('Psetting.offer', array(
                                            //'id'=>'required',
                                            'class' => 'span9'
                                                ), array(
                                            'language' => 'en'
                                                ), 'full'
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
                                                        'Save', array('class' => 'btn marginR10', 'type' => 'submit')
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

        </div><!-- End .span12 -->

    </div><!-- End .row-fluid -->  

</div><!-- End .row-fluid -->  
</div>