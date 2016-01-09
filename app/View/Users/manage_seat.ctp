<div class="main">
    <div class="container">

        <div class="col-md-12 ">
            <div class="row quote-v1 margin-bottom-30">
                <div class="col-md-9">
                    <span>Seat Management</span>
                </div>

            </div>
        </div>
        <div class="content-page">
            <div class="row">
                <!-- BEGIN SERVICE BLOCKS -->               
                <div class="col-md-12">





                    <div class="dashboard-stat2">
                        <div class="display">
                            <div class="number">
                                <h3 class="font-blue-sharp">Change Default Setting</h3>
                            </div>
                            <div class="icon">
                                <i class="icon-basket"></i>
                            </div>
                        </div>
                        <div class="progress-info">
                            <div class="progress">
                                <span style="width: 45%;" class="progress-bar progress-bar-success blue-sharp">
                                <span class="sr-only">45% grow</span>
                                </span>
                            </div>
                            <div class="status">
                                
                                <div class="status-number">
                                     45%
                                </div>
                            </div>
                        </div>
                    </div>






                   



                </div>
                <div class="col-md-12">

                    <div id="showprview" class="localcss" align="center" style="width: 100%; margin-left: auto; margin-right: auto; position: relative;">
                        <!-- OUR PopupBox DIV-->

        
                        <div id="currentcart">
                            <div style="width: 100%">
                                <div style="display:inline-block;">
                                    <!-- <span class="notbooked showseats"></span> -->
                                    <div class="input-group color colorpicker-default" data-color="#3865a8" data-color-format="rgba" style="float: left;">
                                                <span class="input-group-btn" style="float: left;">
                                                <button class="btn default" type="button">
                                                    <i style="background-color: rgb(65, 168, 56);"></i>&nbsp;</button>
                                                </span>
                                    </div>
                                    <span class="show-text" style="float: left;">Available seats  </span>
                                
                                    <div class="input-group color colorpicker-default" data-color="#3865a8" data-color-format="rgba" style="float: left;">
                                               <span class="input-group-btn" style="float: left;">
                                                <button class="btn default" type="button">
                                                    <i style="background-color: rgb(232, 125, 163);"></i>&nbsp;
                                                </button>
                                                </span>
                                    </div>
                                    <span class="show-text" style="float: left;">Your reserved seats  </span>
                                

                                
                                    <div class="input-group color colorpicker-default" data-color="#3865a8" data-color-format="rgba" style="float: left;">
                                                <span class="input-group-btn" style="float: left;">
                                                <button class="btn default" type="button">
                                                    <i style="background-color: rgb(95, 77, 204);"></i>&nbsp;</button>
                                                </span>
                                    </div>
                                    <span class="show-text" style="float: left;">Other's reserved seats  </span>
                                
                                   <div class="input-group color colorpicker-default" data-color="#3865a8" data-color-format="rgba" style="float: left;">
                                                <span class="input-group-btn" style="float: left;">
                                                <button class="btn default" type="button">
                                                    <i style="background-color: rgb(237, 18, 97);"></i>&nbsp;</button>
                                                </span>
                                    </div>
                                     <span class="show-text" style="float: left;">Booked seats  </span>
                                </div>
                                <br><br>
                            </div>
                        </div>

                        <div class="stage-hdng" style="width:640px; border:1px solid;border-radius:5px;box-shadow: 5px 5px 2px #888888;">Seat structure
                        </div>


                        <div class="main seatplan" id="showid_10" style="width:100%  !important;">
                            <div class="seatplan" id="showid_10" style="width:640px;">
                                <div style="float:left;">
                                    




                                    <div class="tiles">
                                        <?php foreach($seats as $seat): 
                                         
                                        ?>
                                            <div class="tile selected bg-blue">
                                                <div class="corner">
                                                </div>
                                                <div class="check">
                                                </div>
                                                <div class="tile-body">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <div class="tile-object">
                                                    <div class="name">
                                                         <?php echo $seat; ?>
                                                    </div>
                                                    <div class="number">
                                                         $100
                                                    </div>
                                                </div>
                                                
                                            </div>
                                           
                                        <?php 
                                        endforeach; ?>
                                       
                                           <!--  <div class="tile bg-blue selected">
                                                            <div class="corner">
                                                            </div>
                                                            
                                                            <div class="tile-body">
                                                                <i class="fa fa-cogs"></i>
                                                            </div>
                                                            <div class="tile-object">
                                                                <div class="name">
                                                                     Settings
                                                                </div>
                                                            </div>
                                            </div> -->
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div id="gap" style="clear:both;float:left;">&nbsp;</div>
                        <a name="view_cart"></a>
                            <div class="cartitems" style="width:100%; border:1px solid;border-radius:5px;box-shadow: 5px 5px 2px #888888;">
                                
                                <div class="clearfix"></div>
                                <div class="cart_text icon-basket">book now</div>
                            </div>
                    </div>
                </div>
                <!-- END SERVICE BLOCKS --> 



            </div>
            <!-- END BEGIN VIDEO AND TESTIMONIALS -->   
        </div>




    </div>
</div>