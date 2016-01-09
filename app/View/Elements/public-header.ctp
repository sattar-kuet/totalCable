<!-- Body BEGIN -->
<body class="corporate">
    <!-- BEGIN STYLE CUSTOMIZER -->

    <!-- BEGIN HEADER -->
    <div class="header page-header-fixed">
        <!-- BEGIN TOP BAR -->
        <div class="pre-header">
            <div class="container">
                <div class="row">
                    <!-- BEGIN TOP BAR LEFT PART -->
                    <div class="col-md-6 col-sm-6 additional-shop-info">
                        <ul class="list-unstyled list-inline">
                            <li><i class="fa fa-phone"></i><span>1-212-444-8138</span></li>
                            <li><i class="fa fa-envelope-o"></i><span>Info@TotalCableUSA.com</span></li>
                        </ul>
                    </div>
                    <!-- END TOP BAR LEFT PART -->
                    <!-- BEGIN TOP BAR MENU -->
                    <div class="col-md-6 col-sm-6 additional-nav">
                        <ul class="list-unstyled list-inline pull-right">
                           <?php
                           $links = array();
                            if ($isloggedin == true) {
                                $logout = Router::url(array('controller' => '/', 'action' => 'logout'));
                                $profile = Router::url(array('controller' => '/', 'action' => 'profile'));
                                $packagesignup = Router::url(array('controller' => '/', 'action' => 'packagesignup'));
                                $links = array(
                                    array(
                                        'url' => $logout,
                                        'name' => 'Logout'
                                    ),
                                    array(
                                        'url' => $profile,
                                        'name' => 'Profile'
                                    ),
                                    array(
                                        'url' => $packagesignup,
                                        'name' => 'Package Signup'
                                    )
                                );
                            } else {
                                $login = Router::url(array('action' => 'login'));
                                $customerSignup = Router::url(array('action' => 'customerSignup'));
                                $techRegistration = Router::url(array('action' => 'techregistration'));
                                $links = array(
                                    array(
                                        'url' => $login,
                                        'name' => 'Log in'
                                    ),
                                    array(
                                        'url' => $customerSignup,
                                        'name' => 'Registration'
                                    ),
                                    array(
                                        'url' => $techRegistration,
                                        'name' => 'Tech Registration'
                                    )
                                );
                            }
                            ?>

                            <?php foreach ($links as $link): ?>
                                <li>  <a class="dropdown-toggle" href="<?php echo $link['url']; ?>">
                                        <?php echo $link['name']; ?> 
                                    </a></li>
                            <?php endforeach; ?>
                        </ul>
                        
                    </div>
                    <!-- END TOP BAR MENU -->
                </div>
            </div>        
        </div>
        <!-- END TOP BAR -->
        <div class="col-md-12 col-sm-12">

            <div class="container">
                <a class="site-logo" href="<?php echo Router::url(array('action' => 'index')) ?>"><img src="<?php echo $this->webroot; ?>assets/frontend/layout/img/logos/logo-corp-red.png" alt="Total Cable USA" title="Total Cable USA"></a>

                <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

                <!-- **************************BEGIN MENU HERE -->
                <div class="header-navigation pull-right font-transform-inherit">
                    <ul>
                        <li>
                            <a class="" href="<?php echo Router::url(array('action' => 'index')) ?>">
                                Home 
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-toggle" href="<?php echo Router::url(array('action' => 'tariffplan')) ?>">
                                Packages 
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-toggle" href="<?php echo Router::url(array('action' => 'troubleshoot')) ?>">
                                Troubleshoot
                            </a>
                        </li>
                        <li >
                            <a class="dropdown-toggle" href="<?php echo Router::url(array('action' => 'channels')) ?>">
                                Channels
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo Router::url(array('action' => 'whytotalcable')) ?>" > Why Total Cable </a>
                        </li>
                        <li><a href="<?php echo Router::url(array('action' => 'reseller')) ?>" >Reseller</a></li>                  
                        <li><a href="<?php echo Router::url(array('action' => 'newses')) ?>" >News</a></li>
                       <!-- <li><a href="<?php echo Router::url(array('action' => 'musical_night')) ?>" >Musical Night</a></li>-->
                        <li><a class="blink" style="color: #ff0000;" href="<?php echo Router::url(array('action' => 'hazaro_konthe_sonar_bangla')) ?>" >Events</a></li>
                        <li><a href="<?php echo Router::url(array('action' => 'contactus')) ?>" >Contact Us</a></li>



                        <!-- ***************************** END OF MENU HERE************ -->
                        <!--  <li><a href="http://keenthemes.com/preview/metronic/theme/templates/admin" target="_blank">Admin theme</a></li> -->

                        <!-- BEGIN TOP SEARCH -->
                        <!--                        <li class="menu-search">
                                                    <span class="sep"></span>
                                                    <i class="fa fa-search search-btn"></i>
                                                    <div class="search-box" style="display: none;">
                                                        <form action="#">
                                                            <div class="input-group">
                                                                <input type="text" placeholder="Search" class="form-control">
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn-primary" type="submit">Search</button>
                                                                </span>
                                                            </div>
                                                        </form>
                                                    </div> 
                                                </li>-->
                        <!-- END TOP SEARCH -->
                    </ul>
                </div>
                <!-- END NAVIGATION -->
                <div class="clearboth">
                </div>
                <div id="info-container"> 
                </div>
            </div>
        </div>
    </div>
