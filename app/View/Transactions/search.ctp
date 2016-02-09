
<!-- Start css for table design and icon-->

<style>
    .ui-datepicker-multi-3 {
        display: table-row-group !important;

    }                                           
</style>

<!-- End css for table design and icon-->

<div id="content" class="clearfix">

    <div class="contentwrapper"><!--Content wrapper-->

        <div class="heading">

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
                        echo $this->Form->create('Transaction', array(
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
                                    <label class="form-label span3" for="required">Select date</label>
                                    <?php
                                    echo $this->Form->input(
                                            'daterange', array(
                                        'id' => 'e1',
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
                                                    'Search', array('class' => 'btn btn-success', 'type' => 'submit')
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

        <?php if ($clicked): ?>

            <div class="row-fluid">
                <table cellpadding="0" cellspacing="0" border="0" class="responsive dynamicTable display table table-bordered" width="100%">
                    <thead>
                        <tr>                                           
                            <th>Transactions Id</th>
                            <th>Authentication Code</th>
                            <th>Error Message</th>
                            <th>Status</th>
                            <th>Transaction Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($transactions as $single):
                            $info = $single['Transaction'];
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $info['trx_id']; ?></td>
                                <td><?php echo $info['auth_code']; ?></td>
                                <td><?php echo $info['error_msg']; ?></td>
                                <td><?php echo $info['status']; ?></td>
                                <td><?php echo $info['created']; ?></td>
                            </tr>
                            <?php
                        endforeach;
                        ?>
                    </tbody>

                </table>
            </div>

            <?php
        endif;
        ?>

