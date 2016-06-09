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

<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="note note-success">
                    <h4 class="block">Our Packages</h4>
                    <p>
                        Choose your package from below and click <code>Order</code> button. Fill up and submit your order and we will contact you soon.
                    </p>
                </div>
                <div class="" style="">
                    <div class="tabbable tabbable-custom">
                        <ul class="nav nav-tabs">
                            <?php
                            foreach ($filteredPackage as $n => $single):
                                $tab = $single['packages'];
                                $content = $single['psettings'];
                                //pr($tab);exit;
                                ?>
                                <li <?php
                                if (!$n) {
                                    echo 'class="active"';
                                }
                                ?>><a data-toggle="tab" href="#<?php echo $tab['id']; ?>"><?php if(strtolower(trim($tab['name'])) != "complementary"){echo $tab['name'];}  ?></a>

                                <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="tab-content">
                        <?php
                        foreach ($filteredPackage as $n => $single):
                            $tab = $single['packages'];
                            $content = $single['psettings'];
                            ?>
                            <div class="tab-pane <?php
                            if (!$n) {
                                echo 'active';
                            }
                            ?>" id="<?php echo $tab['id']; ?>">
                                <div class="panel-body">
                                    <?php foreach ($content as $package): ?>
                                        <div class="col-md-3">
                                            <div class="pricing hover-effect">
                                                <div id="fariff" class="pricing-head">
                                                    <h3><?php
                                                        
                                                        echo ($package['duration'] == 12) ? '1 Year' : $package['duration'].' Month';
                                                        ?>  <span> Billing Package </span></h3>
                                                    <h4><?php if(strtolower($tab['name']) == 'uk'){
                                                        echo '£'; 
                                                        }
                                                        else if(strtolower($tab['name']) == 'canada'){
                                                           echo 'c$'; 
                                                        }
                                                        else{
                                                          echo '$';   
                                                        }
                                                        ?>
                                                            <?php echo $package['amount']; ?> <span> For 1st Box </span>
                                                    </h4>
                                                </div>
                                                <ul class="pricing-content list-unstyled">
                                                    <?php echo $package['offer']; ?>
                                                </ul>
                                                <div class="pricing-footer">                                            
                                                    <a class="btn yellow-crusta subscribe-btn"  data-toggle="" data-target="#bookForm" href="<?php echo Router::url(array('controller' => '/', 'action' => 'customerSignup')) ?>"> Order </a>
                                                </div>
                                            </div>
                                        </div>

                                    <?php endforeach;
                                    ?>
                                </div>
                                <div class="alert alert-danger">
                                    <span class="label label-danger">NOTE</span> <?php if(strtolower($tab['name']) == 'uk'){
                                                        echo '£'; 
                                                        }
                                                        else if(strtolower($tab['name']) == 'canada'){
                                                           echo 'c$'; 
                                                        }
                                                        else{
                                                          echo '$';   
                                                        }
                                                        ?>10 will be charged as additional per box bill. 
                                                        <?php if(strtolower($tab['name']) == 'uk'){
                                                        echo '£'; 
                                                        }
                                                        else if(strtolower($tab['name']) == 'canada'){
                                                           echo 'c$'; 
                                                        }
                                                        else{
                                                          echo '$';   
                                                        }
                                                        ?>50 will be charged as SD for per box. 
                                    <div class="btn btn-primary pull-right"  id="shipbutton" style="margin-right: 8px; margin-top: -8px;"><a style="color: aliceblue;" href="<?php echo Router::url(array('action' => 'terms_and_conditions')) ?>" >Terms & conditions </a></div>
                                </div>
                            </div>

                            <?php
                        endforeach;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>