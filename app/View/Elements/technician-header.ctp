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
                            <li><i class="fa fa-envelope-o"></i><span>info@totalcableusa.com</span></li>
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
//                                $packagesignup = Router::url(array('controller' => '/', 'action' => 'packagesignup'));
                                $links = array(
                                    array(
                                        'url' => $logout,
                                        'name' => 'Logout'
                                    ),
                                    array(
                                        'url' => $profile,
                                        'name' => 'Profile'
                                    )
//                                   , array(
//                                        'url' => $packagesignup,
//                                        'name' => 'Package Signup'
//                                    )
                                );
                            } else {
                                $login = Router::url(array('action' => 'login'));
                                $customerSignup = Router::url(array('action' => 'customerSignup'));
//                                $techRegistration = Router::url(array('action' => 'techregistration'));
                                $links = array(
                                    array(
                                        'url' => $login,
                                        'name' => 'Log in'
                                    ),
                                    array(
                                        'url' => $customerSignup,
                                        'name' => 'Service Order'
                                    )
//                                    ,array(
//                                        'url' => $techRegistration,
//                                        'name' => 'Tech Registration'
//                                    )
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

                <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

                <!-- **************************BEGIN MENU HERE -->
               
                <!-- END NAVIGATION -->
                <div class="clearboth">
                </div>
                <div id="info-container"> 
                </div>
            </div>
        </div>
    </div>
