
<!-- Start css for table design and icon-->

<style>
    .ui-datepicker-multi-3 {
        display: table-row-group !important;

    }

    .ui-datepicker .ui-datepicker-next span {
        display: block;
        position: absolute;
        left: 50%;
        margin-left: -8px;
        top: 35%;
        margin-top: -8px;
        height: 0px !important;
        width: 20px;
        color: red !important;
        width: 0;
        height: 0;
        border-top: 11px solid transparent;
        border-bottom: 11px solid transparent;
        border-left: 11px solid green;
    }

    .ui-datepicker .ui-datepicker-prev span{
        display: block;
        position: absolute;
        left: 50%;
        margin-left: -8px;
        top: 35%;
        margin-top: -8px;
        height: 0px !important;
        width: 20px;
        color: red !important;
        width: 0;
        height: 0;
        border-top: 11px solid transparent;
        border-bottom: 11px solid transparent;
        border-right:  11px solid green;

    } 
</style>

<!-- End css for table design and icon-->

<div id="content" class="clearfix">

    <div class="contentwrapper"><!--Content wrapper-->

        <div class="heading">

            <h3>Search transaction</h3>                    

            <div class="resBtnSearch">
                <a href="#"><span class="icon16 icomoon-icon-search-3"></span></a>
            </div>

            <div class="search">

                <form id="searchform" action="search.html">
                    <input type="text" id="tipue_search_input" class="top-search text" placeholder="Search here ...">
                    <input type="submit" id="tipue_search_button" class="search-btn nostyle" value="">
                </form>

            </div><!-- End search -->

            <ul class="breadcrumb">
                <li>You are here:</li>
                <li>
                    <a href="#" class="tip" oldtitle="back to dashboard" title="" data-hasqtip="true">
                        <span class="icon16 icomoon-icon-screen-2"></span>
                    </a> 
                    <span class="divider">
                        <span class="icon16 icomoon-icon-arrow-right-2"></span>
                    </span>
                </li>
                <li class="active">Fill up </li>
            </ul>

        </div><!-- End .heading--> 

        <div class="row-fluid">

            <div class="span12">

                <div class="box">

                    <div class="title">

                        <h4>
                            <span>Search transaction information</span>
                        </h4>

                        <?php echo $this->Session->flash(); ?>

                        <?php
                        if (isset($errors)):
                            echo $errors;
                        endif;
                        ?>   
                    </div>
                    <div class="content">
                        <?php
                        echo $this->Form->create('transactions', array(
                            'inputDefaults' => array(
                                'label' => false,
                                'div' => false
                            ),
                            'id' => 'form-validate',
                            'class' => 'form-horizontal',
                            'novalidate' => 'novalidate',
                            array('controller' => 'transactions', 'action' => 'manage')
                                )
                        );
                        ?>


                        <div class="form-row row-fluid">
                            <div class="span12">
                                <div class="row-fluid">
                                    <label class="form-label span3" for="required">Select date</label>
                                    <?php
                                    echo $this->Form->input(
                                            'created', array(
                                        'id' => 'e1',
                                        'name' => 'e1',
                                        'class' => 'span9 text'
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
                                                    'Search', array('class' => 'btn btn-success','controller' => 'transactions', 'action' => 'manage', 'type' => 'submit')
                                            );
                                            ?>

                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <?php echo $this->Form->end(); ?>

                        <!--<input id="e1" name="e1">
                        <button class="btn btn-success" type="submit">Search</button>-->

                    </div>

                </div><!-- End .box -->

            </div><!-- End .span12 -->

        </div><!-- End .row-fluid -->  