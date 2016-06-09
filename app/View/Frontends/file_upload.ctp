<div class="main">
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="portlet box purple">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i> Attachment form
                    </div>
                    <div class="tools">
                        <a href="" class="collapse" data-original-title="" title="">
                        </a>                        
                    </div>
                </div>
                <div class="portlet-body form">
                    
                        <?php echo $this->Session->flash(); ?> 

                        <?php
                        echo $this->Form->create('Attachment', array(
                            'inputDefaults' => array(
                                'label' => false,
                                'div' => false
                            ),
                            'id' => 'form-validate',
                            'class' => 'form-horizontal',
                            'novalidate' => 'novalidate',
                            'type' =>'file'
                                )
                        );
                        ?>
                        <div class="form-body">
                            <h4 class="block text-primary">Please upload a valid image file of your utility bill to facilitate verification of your address. (Take any of your utility bills and capture an image using your mobile camera. Now upload it.)</h4>
                            <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <p><span class="font-red">All fields are required</span></p>
                            </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Utility bill copy</label>
                                <div class="col-md-8">
                                    <?php
                                    echo $this->Form->input(
                                            'file', array(
                                        'type' => 'file',
                                        'class' => 'required',
                                        'id' => 'utility'
                                            )
                                    );
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Full Name</label>
                                <div class="col-md-8">
                                    <div class="input-icon right">
                                        <i class="fa fa-male tooltips" data-original-title="Full Name" data-container="body"></i>
                                        <?php
                                        echo $this->Form->input(
                                                'name', array(
                                            'class' => 'form-control required',
                                            'type' => 'text'
                                                )
                                        );
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Address</label>
                                <div class="col-md-8">
                                    <div class="input-icon right">
                                        <i class="fa fa-bars tooltips" data-original-title="Address" data-container="body"></i>
                                        <?php
                                        echo $this->Form->input(
                                                'address', array(
                                            'class' => 'form-control required',
                                            'type' => 'text'
                                                )
                                        );
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Cell Phone</label>
                                <div class="col-md-8">
                                    <div class="input-icon right">
                                        <i class="fa fa-mobile tooltips" data-original-title="Cell Phone" data-container="body"></i>
                                        <?php
                                        echo $this->Form->input(
                                                'cell', array(
                                            'class' => 'form-control required',
                                            'type' => 'text'
                                                )
                                        );
                                        ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-4 col-md-8">
                                 <!--   <a href="<?php echo Router::url(array('action' => 'index')) ?>" type="button" class="btn default">Cancel</a> -->
                                    <?php
                                    echo $this->Form->button(
                                            'Submit', array('class' => 'btn blue default submitbtn', 'type' => 'submit')
                                    );
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php echo $this->Form->end(); ?>
                   
                </div>
            </div>
        </div>
    </div>
</div>