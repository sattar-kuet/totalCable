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

                                <div class="panel-body">
                                     <?php
                                foreach ($packages as $package):
                                    echo $package['psettings']['offer'];
                                    ?>
                               
                            
                                    <?php endforeach;?>
                                   
                                </div>
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
        