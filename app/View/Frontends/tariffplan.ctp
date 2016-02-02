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
                        Choose your package from below and click <code>Sign Up</code> button. Fill up and submit your order and we will contact you soon.
                    </p>
                </div>
                <div class="" style="">
                    <div class="tabbable tabbable-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#full">Full Package</a></li>
                            <li><a data-toggle="tab" href="#nabc">NABC Special Package</a></li>
                            <li><a data-toggle="tab" href="#new_york">New York</a></li>
                            <li><a data-toggle="tab" href="#new_jersey">New Jersey</a></li>
                            <li><a data-toggle="tab" href="#michigan">Michigan</a></li>
                            <li><a data-toggle="tab" href="#texas">Texas</a></li>
                            <li><a data-toggle="tab" href="#canada">Canada</a></li>
                            <li><a data-toggle="tab" href="#uk">UK</a></li>

                        </ul>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane active" id="full">
                            <div class="panel-body">
                                <div class="col-md-3">
                                    <div class="pricing hover-effect">
                                        <div id="fariff" class="pricing-head">
                                            <h3>1 Month <span> Billing Package </span></h3>
                                            <h4><em>$</em>40<em>.00</em> <span> For 1st Box </span></h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>Bill (For 1st Box): <strong>$40</strong></li>
                                            <li>Security Deposit (SD): <strong>$50</strong></li>                                            
                                            <li>Bonus: <strong>N/A</strong></li>
                                        </ul>
                                        <div class="pricing-footer">                                            
                                            <a class="btn yellow-crusta subscribe-btn" id="" data-toggle="" data-target="#bookForm" href="<?php echo Router::url(array('controller' => '/', 'action' => 'customerSignup')) ?>"> Sign Up </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="pricing hover-effect">
                                        <div class="pricing-head">
                                            <h3>3 Month<span> Billing Package </span></h3>
                                            <h4><em>$</em>90<em>.00</em> <span> For 1st Box </span></h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>Bill (For 1st Box): <strong>$90</strong></li>
                                            <li>Security Deposit (SD): <strong>$50</strong></li>                                            
                                            <li>Bonus: <strong>N/A</strong></li>
                                        </ul>
                                        <div class="pricing-footer">
                                            <a class="btn yellow-crusta subscribe-btn" id="" data-toggle="" data-target="#bookForm" href="<?php echo Router::url(array('controller' => '/', 'action' => 'customerSignup')) ?>"> Sign Up </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="pricing hover-effect"><!-- pricing-active  -->
                                        <div class="pricing-head"><!-- pricing-head-active -->
                                            <h3>6 Month<span> Billing Package </span></h3>
                                            <h4><em>$</em>180<em>.00</em> <span> For 1st Box </span></h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>Bill (For 1st Box): <strong>$180</strong></li>
                                            <li>Security Deposit (SD): <strong>$50</strong></li>                                            
                                            <li>Bonus: <strong>1 Months addition or $40 calling card</strong></li>
                                        </ul>
                                        <div class="pricing-footer">
                                            <a class="btn yellow-crusta subscribe-btn" id="" data-toggle="" data-target="#bookForm" href="<?php echo Router::url(array('controller' => '/', 'action' => 'customerSignup')) ?>"> Sign Up </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="pricing hover-effect">
                                        <div class="pricing-head">
                                            <h3>1 Year<span> Billing Package </span></h3>
                                            <h4><em>$</em>360<em>.00</em> <span> For 1st Box </span></h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>Bill (For 1st Box): <strong>$360</strong></li>
                                            <li>Security Deposit (SD): <strong>$50</strong></li>                                           
                                            <li>Bonus: <strong>3 Months addition or $100 calling card</strong></li>
                                        </ul>
                                        <div class="pricing-footer">
                                            <a class="btn yellow-crusta subscribe-btn" id="" data-toggle="" data-target="#bookForm" href="<?php echo Router::url(array('controller' => '/', 'action' => 'customerSignup')) ?>"> Sign Up </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-danger">
                                <span class="label label-danger">NOTE</span> $10 will be charged as additional per box bill. $50 will be charged as SD for per box. 
                                <div class="btn btn-primary pull-right"  id="shipbutton" style="margin-right: 8px; margin-top: -8px;"><a style="color: aliceblue;" href="<?php echo Router::url(array('action' => 'terms_and_conditions')) ?>" >Terms & conditions </a></div>
                            </div>
                        </div>
                        <div class="tab-pane" id="nabc">
                            <div class="panel-body">
                                <div class="col-md-3">
                                    <div class="pricing hover-effect">
                                        <div id="fariff" class="pricing-head">
                                            <h3>1 Month <span> Billing Package </span></h3>
                                            <h4><em>$</em>19<em>.99</em> <span> For 1st Box </span></h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>Bill (For 1st Box): <strong>$19.99</strong></li> 
                                            <li>Security Deposit (SD): <strong>$50</strong></li>
                                            <li>Bonus: <strong>N/A</strong></li>
                                        </ul>
                                        <div class="pricing-footer">
                                            <a class="btn yellow-crusta subscribe-btn" id="" data-toggle="" data-target="#bookForm" href="<?php echo Router::url(array('controller' => '/', 'action' => 'customerSignup')) ?>"> Sign Up </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="pricing hover-effect">
                                        <div class="pricing-head">
                                            <h3>3 Month<span> Billing Package </span></h3>
                                            <h4><em>$</em>60<em>.00</em> <span> For 1st Box </span></h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>Bill (For 1st Box): <strong>$60</strong></li> 
                                            <li>Security Deposit (SD): <strong>$50</strong></li>
                                            <li>Bonus: <strong>N/A</strong></li>
                                        </ul>
                                        <div class="pricing-footer">
                                            <a class="btn yellow-crusta subscribe-btn" id="" data-toggle="" data-target="#bookForm" href="<?php echo Router::url(array('controller' => '/', 'action' => 'customerSignup')) ?>"> Sign Up </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="pricing hover-effect"><!-- pricing-active  -->
                                        <div class="pricing-head"><!-- pricing-head-active -->
                                            <h3>6 Month<span> Billing Package </span></h3>
                                            <h4><em>$</em>120<em>.00</em> <span> For 1st Box </span></h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>Bill (For 1st Box): <strong>$120</strong></li>
                                            <li>Security Deposit (SD): <strong>$50</strong></li>
                                            <li>Bonus: <strong>N/A</strong></li>
                                        </ul>
                                        <div class="pricing-footer">
                                            <a class="btn yellow-crusta subscribe-btn" id="" data-toggle="" data-target="#bookForm" href="<?php echo Router::url(array('controller' => '/', 'action' => 'customerSignup')) ?>"> Sign Up </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="pricing hover-effect">
                                        <div class="pricing-head">
                                            <h3>1 Year<span> Billing Package </span></h3>
                                            <h4><em>$</em>240<em>.00</em> <span> For 1st Box </span></h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>Bill (For 1st Box): <strong>$240</strong></li>
                                            <li>Security Deposit (SD): <strong>$50</strong></li>
                                            <li>Bonus: <strong>N/A</strong></li>
                                        </ul>
                                        <div class="pricing-footer">
                                            <a class="btn yellow-crusta subscribe-btn" id="" data-toggle="" data-target="#bookForm" href="<?php echo Router::url(array('controller' => '/', 'action' => 'customerSignup')) ?>"> Sign Up </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-danger">
                                <span class="label label-danger">NOTE</span> $10 will be charged as additional per box bill. $50 will be charged as SD for per box. 
                                <div class="btn btn-primary pull-right"  id="shipbutton" style="margin-right: 8px; margin-top: -8px;"><a style="color: aliceblue;" href="<?php echo Router::url(array('action' => 'terms_and_conditions')) ?>" >Terms & conditions </a></div>
                            </div>
                        </div>
                        <div class="tab-pane" id="new_york">
                            <div class="panel-body">
                                <div class="col-md-3">
                                    <div class="pricing hover-effect">
                                        <div id="fariff" class="pricing-head">
                                            <h3>1 Month <span> Billing Package </span></h3>
                                            <h4><em>$</em>40<em>.00</em> <span> For 1st Box </span></h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>Bill (For 1st Box): <strong>$40</strong></li>
                                            <li>Security Deposit (SD): <strong>$50</strong></li>                                            
                                            <li>Bonus: <strong>N/A</strong></li>
                                        </ul>
                                        <div class="pricing-footer">
                                            <a class="btn yellow-crusta subscribe-btn" id="" data-toggle="" data-target="#bookForm" href="<?php echo Router::url(array('controller' => '/', 'action' => 'customerSignup')) ?>"> Sign Up </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="pricing hover-effect">
                                        <div class="pricing-head">
                                            <h3>3 Month<span> Billing Package </span></h3>
                                            <h4><em>$</em>90<em>.00</em> <span> For 1st Box </span></h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>Bill (For 1st Box): <strong>$90</strong></li>
                                            <li>Security Deposit (SD): <strong>$50</strong></li>                                            
                                            <li>Bonus: <strong>N/A</strong></li>
                                        </ul>
                                        <div class="pricing-footer">
                                            <a class="btn yellow-crusta subscribe-btn" id="" data-toggle="" data-target="#bookForm" href="<?php echo Router::url(array('controller' => '/', 'action' => 'customerSignup')) ?>"> Sign Up </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="pricing hover-effect"><!-- pricing-active  -->
                                        <div class="pricing-head"><!-- pricing-head-active -->
                                            <h3>6 Month<span> Billing Package </span></h3>
                                            <h4><em>$</em>180<em>.00</em> <span> For 1st Box </span></h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>Bill (For 1st Box): <strong>$180</strong></li>
                                            <li>Security Deposit (SD): <strong>$50</strong></li>                                            
                                            <li>Bonus: <strong>1 Months addition or $40 calling card</strong></li>
                                        </ul>
                                        <div class="pricing-footer">
                                            <a class="btn yellow-crusta subscribe-btn" id="" data-toggle="" data-target="#bookForm" href="<?php echo Router::url(array('controller' => '/', 'action' => 'customerSignup')) ?>"> Sign Up </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="pricing hover-effect">
                                        <div class="pricing-head">
                                            <h3>1 Year<span> Billing Package </span></h3>
                                            <h4><em>$</em>360<em>.00</em> <span> For 1st Box </span></h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>Bill (For 1st Box): <strong>$360</strong></li>
                                            <li>Security Deposit (SD): <strong>$50</strong></li>                                           
                                            <li>Bonus: <strong>3 Months addition or $100 calling card</strong></li>
                                        </ul>
                                        <div class="pricing-footer">
                                            <a class="btn yellow-crusta subscribe-btn" id="" data-toggle="" data-target="#bookForm" href="<?php echo Router::url(array('controller' => '/', 'action' => 'customerSignup')) ?>"> Sign Up </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-danger">
                                <span class="label label-danger">NOTE</span> $10 will be charged as additional per box bill. $50 will be charged as SD for per box. 
                                <div class="btn btn-primary pull-right"  id="shipbutton" style="margin-right: 8px; margin-top: -8px;"><a style="color: aliceblue;" href="<?php echo Router::url(array('action' => 'terms_and_conditions')) ?>" >Terms & conditions </a></div>
                            </div>
                        </div>
                        <div class="tab-pane" id="new_jersey">
                            <div class="panel-body">
                                <div class="col-md-3">
                                    <div class="pricing hover-effect">
                                        <div id="fariff" class="pricing-head">
                                            <h3>1 Month <span> Billing Package </span></h3>
                                            <h4><em>$</em>40<em>.00</em> <span> For 1st Box </span></h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>Bill (For 1st Box): <strong>$40</strong></li>
                                            <li>Security Deposit (SD): <strong>$50</strong></li>                                            
                                            <li>Bonus: <strong>N/A</strong></li>
                                        </ul>
                                        <div class="pricing-footer">
                                            <a class="btn yellow-crusta subscribe-btn" id="" data-toggle="" data-target="#bookForm" href="<?php echo Router::url(array('controller' => '/', 'action' => 'customerSignup')) ?>"> Sign Up </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="pricing hover-effect">
                                        <div class="pricing-head">
                                            <h3>3 Month<span> Billing Package </span></h3>
                                            <h4><em>$</em>90<em>.00</em> <span> For 1st Box </span></h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>Bill (For 1st Box): <strong>$90</strong></li>
                                            <li>Security Deposit (SD): <strong>$50</strong></li>                                            
                                            <li>Bonus: <strong>N/A</strong></li>
                                        </ul>
                                        <div class="pricing-footer">
                                            <a class="btn yellow-crusta subscribe-btn" id="" data-toggle="" data-target="#bookForm" href="<?php echo Router::url(array('controller' => '/', 'action' => 'customerSignup')) ?>"> Sign Up </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="pricing hover-effect"><!-- pricing-active  -->
                                        <div class="pricing-head"><!-- pricing-head-active -->
                                            <h3>6 Month<span> Billing Package </span></h3>
                                            <h4><em>$</em>180<em>.00</em> <span> For 1st Box </span></h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>Bill (For 1st Box): <strong>$180</strong></li>
                                            <li>Security Deposit (SD): <strong>$50</strong></li>                                            
                                            <li>Bonus: <strong>1 Months addition or $40 calling card</strong></li>
                                        </ul>
                                        <div class="pricing-footer">
                                            <a class="btn yellow-crusta subscribe-btn" id="" data-toggle="" data-target="#bookForm" href="<?php echo Router::url(array('controller' => '/', 'action' => 'customerSignup')) ?>"> Sign Up </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="pricing hover-effect">
                                        <div class="pricing-head">
                                            <h3>1 Year<span> Billing Package </span></h3>
                                            <h4><em>$</em>360<em>.00</em> <span> For 1st Box </span></h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>Bill (For 1st Box): <strong>$360</strong></li>
                                            <li>Security Deposit (SD): <strong>$50</strong></li>                                           
                                            <li>Bonus: <strong>3 Months addition or $100 calling card</strong></li>
                                        </ul>
                                        <div class="pricing-footer">
                                            <a class="btn yellow-crusta subscribe-btn" id="" data-toggle="" data-target="#bookForm" href="<?php echo Router::url(array('controller' => '/', 'action' => 'customerSignup')) ?>"> Sign Up </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-danger">
                                <span class="label label-danger">NOTE</span> $10 will be charged as additional per box bill. $50 will be charged as SD for per box. 
                                <div class="btn btn-primary pull-right"  id="shipbutton" style="margin-right: 8px; margin-top: -8px;"><a style="color: aliceblue;" href="<?php echo Router::url(array('action' => 'terms_and_conditions')) ?>" >Terms & conditions </a></div>
                            </div>
                        </div>
                        <div class="tab-pane" id="michigan">
                            <div class="panel-body">
                                <div class="col-md-3">
                                    <div class="pricing hover-effect">
                                        <div id="fariff" class="pricing-head">
                                            <h3>1 Month <span> Billing Package </span></h3>
                                            <h4><em>$</em>30<em>.00</em> <span> For 1st Box </span></h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>Bill (For 1st Box): <strong>$30</strong></li>
                                            <li>Security Deposit (SD): <strong>$50</strong></li>                                            
                                            <li>Bonus: <strong>N/A</strong></li>
                                        </ul>
                                        <div class="pricing-footer">
                                            <a class="btn yellow-crusta subscribe-btn" id="" data-toggle="" data-target="#bookForm" href="<?php echo Router::url(array('controller' => '/', 'action' => 'customerSignup')) ?>"> Sign Up </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="pricing hover-effect">
                                        <div class="pricing-head">
                                            <h3>3 Month<span> Billing Package </span></h3>
                                            <h4><em>$</em>75<em>.00</em> <span> For 1st Box </span></h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>Bill (For 1st Box): <strong>$75</strong></li>
                                            <li>Security Deposit (SD): <strong>$50</strong></li>                                            
                                            <li>Bonus: <strong>N/A</strong></li>
                                        </ul>
                                        <div class="pricing-footer">
                                            <a class="btn yellow-crusta subscribe-btn" id="" data-toggle="" data-target="#bookForm" href="<?php echo Router::url(array('controller' => '/', 'action' => 'customerSignup')) ?>"> Sign Up </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="pricing hover-effect"><!-- pricing-active  -->
                                        <div class="pricing-head"><!-- pricing-head-active -->
                                            <h3>6 Month<span> Billing Package </span></h3>
                                            <h4><em>$</em>150<em>.00</em> <span> For 1st Box </span></h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>Bill (For 1st Box): <strong>$150</strong></li>
                                            <li>Security Deposit (SD): <strong>$50</strong></li>                                            
                                            <li>Bonus: <strong>1 Months addition or $40 calling card</strong></li>
                                        </ul>
                                        <div class="pricing-footer">
                                            <a class="btn yellow-crusta subscribe-btn" id="" data-toggle="" data-target="#bookForm" href="<?php echo Router::url(array('controller' => '/', 'action' => 'customerSignup')) ?>"> Sign Up </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="pricing hover-effect">
                                        <div class="pricing-head">
                                            <h3>1 Year<span> Billing Package </span></h3>
                                            <h4><em>$</em>300<em>.00</em> <span> For 1st Box </span></h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>Bill (For 1st Box): <strong>$300</strong></li>
                                            <li>Security Deposit (SD): <strong>$50</strong></li>                                           
                                            <li>Bonus: <strong>3 Months addition or $100 calling card</strong></li>
                                        </ul>
                                        <div class="pricing-footer">
                                            <a class="btn yellow-crusta subscribe-btn" id="" data-toggle="" data-target="#bookForm" href="<?php echo Router::url(array('controller' => '/', 'action' => 'customerSignup')) ?>"> Sign Up </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-danger">
                                <span class="label label-danger">NOTE</span> $10 will be charged as additional per box bill. $50 will be charged as SD for per box. 
                                <div class="btn btn-primary pull-right"  id="shipbutton" style="margin-right: 8px; margin-top: -8px;"><a style="color: aliceblue;" href="<?php echo Router::url(array('action' => 'terms_and_conditions')) ?>" >Terms & conditions </a></div>
                            </div>
                        </div>
                        <div class="tab-pane" id="texas">
                            <div class="panel-body">
                                <div class="col-md-3">
                                    <div class="pricing hover-effect">
                                        <div id="fariff" class="pricing-head">
                                            <h3>1 Month <span> Billing Package </span></h3>
                                            <h4><em>$</em>30<em>.00</em> <span> For 1st Box </span></h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>Bill (For 1st Box): <strong>$30</strong></li>
                                            <li>Security Deposit (SD): <strong>$50</strong></li>                                            
                                            <li>Bonus: <strong>N/A</strong></li>
                                        </ul>
                                        <div class="pricing-footer">
                                            <a class="btn yellow-crusta subscribe-btn" id="" data-toggle="" data-target="#bookForm" href="<?php echo Router::url(array('controller' => '/', 'action' => 'customerSignup')) ?>"> Sign Up </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="pricing hover-effect">
                                        <div class="pricing-head">
                                            <h3>3 Month<span> Billing Package </span></h3>
                                            <h4><em>$</em>90<em>.00</em> <span> For 1st Box </span></h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>Bill (For 1st Box): <strong>$90</strong></li>
                                            <li>Security Deposit (SD): <strong>$50</strong></li>                                            
                                            <li>Bonus: <strong>N/A</strong></li>
                                        </ul>
                                        <div class="pricing-footer">
                                            <a class="btn yellow-crusta subscribe-btn" id="" data-toggle="" data-target="#bookForm" href="<?php echo Router::url(array('controller' => '/', 'action' => 'customerSignup')) ?>"> Sign Up </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="pricing hover-effect"><!-- pricing-active  -->
                                        <div class="pricing-head"><!-- pricing-head-active -->
                                            <h3>6 Month<span> Billing Package </span></h3>
                                            <h4><em>$</em>180<em>.00</em> <span> For 1st Box </span></h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>Bill (For 1st Box): <strong>$180</strong></li>
                                            <li>Security Deposit (SD): <strong>$50</strong></li>                                            
                                            <li>Bonus: <strong>1 Months addition or $40 calling card</strong></li>
                                        </ul>
                                        <div class="pricing-footer">
                                            <a class="btn yellow-crusta subscribe-btn" id="" data-toggle="" data-target="#bookForm" href="<?php echo Router::url(array('controller' => '/', 'action' => 'customerSignup')) ?>"> Sign Up </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="pricing hover-effect">
                                        <div class="pricing-head">
                                            <h3>1 Year<span> Billing Package </span></h3>
                                            <h4><em>$</em>360<em>.00</em> <span> For 1st Box </span></h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>Bill (For 1st Box): <strong>$360</strong></li>
                                            <li>Security Deposit (SD): <strong>$50</strong></li>                                           
                                            <li>Bonus: <strong>3 Months addition or $100 calling card</strong></li>
                                        </ul>
                                        <div class="pricing-footer">
                                            <a class="btn yellow-crusta subscribe-btn" id="" data-toggle="" data-target="#bookForm" href="<?php echo Router::url(array('controller' => '/', 'action' => 'customerSignup')) ?>"> Sign Up </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-danger">
                                <span class="label label-danger">NOTE</span> $10 will be charged as additional per box bill. $50 will be charged as SD for per box. 
                                <div class="btn btn-primary pull-right"  id="shipbutton" style="margin-right: 8px; margin-top: -8px;"><a style="color: aliceblue;" href="<?php echo Router::url(array('action' => 'terms_and_conditions')) ?>" >Terms & conditions </a></div>
                            </div>
                        </div>
                        <div class="tab-pane" id="canada">
                            <div class="panel-body">
                                <div class="col-md-3">
                                    <div class="pricing hover-effect">
                                        <div id="fariff" class="pricing-head">
                                            <h3>1 Month <span> Billing Package </span></h3>
                                            <h4><em>c$</em>25<em>.00</em> <span> For 1st Box </span></h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>Bill (For 1st Box): <strong>c$25</strong></li>
                                            <li>Security Deposit (SD): <strong>c$50</strong></li>                                            
                                            <li>Bonus: <strong>N/A</strong></li>
                                        </ul>
                                        <div class="pricing-footer">
                                            <a class="btn yellow-crusta subscribe-btn" id="" data-toggle="" data-target="#bookForm" href="<?php echo Router::url(array('controller' => '/', 'action' => 'customerSignup')) ?>"> Sign Up </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="pricing hover-effect">
                                        <div class="pricing-head">
                                            <h3>3 Month<span> Billing Package </span></h3>
                                            <h4><em>c$</em>75<em>.00</em> <span> For 1st Box </span></h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>Bill (For 1st Box): <strong>c$75</strong></li>
                                            <li>Security Deposit (SD): <strong>c$50</strong></li>                                            
                                            <li>Bonus: <strong>N/A</strong></li>
                                        </ul>
                                        <div class="pricing-footer">
                                            <a class="btn yellow-crusta subscribe-btn" id="" data-toggle="" data-target="#bookForm" href="<?php echo Router::url(array('controller' => '/', 'action' => 'customerSignup')) ?>"> Sign Up </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="pricing hover-effect"><!-- pricing-active  -->
                                        <div class="pricing-head"><!-- pricing-head-active -->
                                            <h3>6 Month<span> Billing Package </span></h3>
                                            <h4><em>c$</em>150<em>.00</em> <span> For 1st Box </span></h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>Bill (For 1st Box): <strong>c$150</strong></li>
                                            <li>Security Deposit (SD): <strong>c$50</strong></li>                                            
                                            <li>Bonus: <strong>1 Months addition or c$40 calling card</strong></li>
                                        </ul>
                                        <div class="pricing-footer">
                                            <a class="btn yellow-crusta subscribe-btn" id="" data-toggle="" data-target="#bookForm" href="<?php echo Router::url(array('controller' => '/', 'action' => 'customerSignup')) ?>"> Sign Up </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="pricing hover-effect">
                                        <div class="pricing-head">
                                            <h3>1 Year<span> Billing Package </span></h3>
                                            <h4><em>c$</em>300<em>.00</em> <span> For 1st Box </span></h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>Bill (For 1st Box): <strong>c$300</strong></li>
                                            <li>Security Deposit (SD): <strong>c$50</strong></li>                                           
                                            <li>Bonus: <strong>3 Months addition or c$100 calling card</strong></li>
                                        </ul>
                                        <div class="pricing-footer">
                                            <a class="btn yellow-crusta subscribe-btn" id="" data-toggle="" data-target="#bookForm" href="<?php echo Router::url(array('controller' => '/', 'action' => 'customerSignup')) ?>"> Sign Up </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-danger">
                                <span class="label label-danger">NOTE</span> c$10 will be charged as additional per box bill. c$50 will be charged as SD for per box. 
                                <div class="btn btn-primary pull-right"  id="shipbutton" style="margin-right: 8px; margin-top: -8px;"><a style="color: aliceblue;" href="<?php echo Router::url(array('action' => 'terms_and_conditions')) ?>" >Terms & conditions </a></div>
                            </div>
                        </div>
                        <div class="tab-pane" id="uk">
                            <div class="panel-body">
                                <div class="col-md-4 col-md-offset-4">
                                    <div class="pricing hover-effect">
                                        <div class="pricing-head">
                                            <h3>1 Year<span> Billing Package </span></h3>
                                            <h4><em>‎£</em>85<em>.00</em> <span> For 1st Box </span></h4>
                                        </div>
                                        <ul class="pricing-content list-unstyled">
                                            <li>Bill (For 1st Box): <strong>£85</strong></li>
                                            <li>Security Deposit (SD): <strong>£50</strong></li>                                           
                                            <li>Bonus: <strong>N/A</strong></li>
                                        </ul>
                                        <div class="pricing-footer">
                                            <a class="btn yellow-crusta subscribe-btn" id="" data-toggle="" data-target="#bookForm" href="<?php echo Router::url(array('controller' => '/', 'action' => 'customerSignup')) ?>"> Sign Up </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="alert alert-danger">
                                <span class="label label-danger">NOTE</span> £80 will be charged as additional per box bill. £50 will be charged as SD for per box. 
                                <div class="btn btn-primary pull-right"  id="shipbutton" style="margin-right: 8px; margin-top: -8px;"><a style="color: aliceblue;" href="<?php echo Router::url(array('action' => 'terms_and_conditions')) ?>" >Terms & conditions </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>