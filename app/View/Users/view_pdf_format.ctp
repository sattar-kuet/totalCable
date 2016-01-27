<?php
//App::import('Vendor', 'MPDF57', array('file' => 'mpdf.php'));
require_once(APP . 'Vendor' . DS . 'MPDF57' . DS . 'mpdf.php');
$mpdf = new mPDF();
// Buffer the following html with PHP so we can store it to a variable later
$mpdf = new mPDF('win-1252', 'Legal', '', '', 20, 15, 48, 25, 10, 10);

$mpdf->useOnlyCoreFonts = true;    // false is default
$mpdf->SetProtection(array('print'));
$mpdf->SetTitle("Customer Order");
$mpdf->SetAuthor("Total IT Solutions");
$mpdf->SetWatermarkText("Total Cable USA");
$mpdf->showWatermarkText = true;
$mpdf->watermark_font = 'DejaVuSansCondensed';
$mpdf->watermarkTextAlpha = 0.1;
$mpdf->SetDisplayMode('fullpage');

ob_start();
?>
<html>
    <head>
        <style>
            body {font-family: sans-serif;
                  font-size: 10pt;
            }
            p {    margin: 0pt;
            }
            td { vertical-align: top; }
            .items td {
                border-left: 0.1mm solid #000000;
                border-right: 0.1mm solid #000000;
            }
            table thead td { background-color: #EEEEEE;
                             text-align: center;
                             border: 0.1mm solid #000000;
            }
            .items td.blanktotal {
                background-color: #FFFFFF;
                border: 0mm none #000000;
                border-top: 0.1mm solid #000000;
                border-right: 0.1mm solid #000000;
            }
            .items td.totals {
                text-align: right;
                border: 0.1mm solid #000000;
            }
            td { 
    padding: 5px;
}
        </style>
    </head>
    <body>


    <htmlpageheader name="myheader">
        <table width="100%"><tr>
                <td width="50%" style="color:#0000BB;"><span style="font-weight: bold; font-size: 14pt;">Total Cable USA</span><br />P.O. BOX 770068,<br /> WOODSIDE, <br />NY 11377<br /><span style="font-size: 15pt;">&#9742;</span>1-212-444-8138</td>
                <td width="50%" style="text-align: right;">Customer Care:<br /><strong>(212) 444- 8138</strong> <br><strong>(718)-395-9958</strong><br><strong>(718)-569-7014</strong><br>e-mail:info@totalcableusa.com <br>www.totalcablueusa.com <br></td>
            </tr></table>
    </htmlpageheader>

    <htmlpagefooter name="myfooter">
        <div style="border-top: 1px solid #000000; font-size: 9pt; text-align: center; padding-top: 3mm; ">
            Page {PAGENO} of {nb}
        </div>
    </htmlpagefooter>

    <sethtmlpageheader name="myheader" value="on" show-this-page="1" />
    <sethtmlpagefooter name="myfooter" value="on" />

    <table width="100%" style="font-family: serif; text-align: center; margin-top: 0px; margin-top: -50px;" cellpadding="10">  
        <tr>
            <td width="20%"></td>
            <td width="20%" style="border: 0.1mm solid #888888;"><span style="font-weight: bold; font-size: 14pt; font-family: sans; color: #0000BB;">SERVICE ORDER FORM</span></td>
            <td width="20%"></td>
        </tr>
    </table>
    <table width="100%" style="text-align: left; margin-top: 0px;" cellpadding="10">  
        <tr>

            <td width="20%">
                Installation type:              
                   <?php echo $temp['PackageCustomer']['service_type'];?>                 
            </td>

        </tr>
    </table>
    <table class="items" width="100%" style="font-size: 9pt; border-collapse: collapse;" cellpadding="8">
        <thead>
            <tr>               
                <td>
                    Personal Information    
                </td>               
            </tr>
        </thead>        
    </table>



    <table class="items" width="100%" style="font-size: 9pt; border-collapse: collapse;" cellpadding="8">

        <tbody>
            <tr style="border-left: 0.1mm solid #888888; border-right: 0.1mm solid #888888;">                
                <td width="33%" style="border: none;">
                    Name: 
                    <?php echo $temp['PackageCustomer']['first_name'];
                    echo ' ';
                     echo $temp['PackageCustomer']['middle_name'];
                     echo ' ';
                     echo $temp['PackageCustomer']['last_name'];
                     ?>
                </td>               
            </tr>            
        </tbody>
    </table>
    <table width="100%" cellpadding="8" style="font-size: 9pt; border-collapse: collapse;">
        <tr style="border-left: 0.1mm solid #888888; border-right: 0.1mm solid #888888;">                
            <td width="100%" style="border: none;">
                Address: <?php               
                echo $temp['PackageCustomer']['address'];
                ?>
            </td>                               
        </tr>
    </table>
    <table width="100%" cellpadding="8" style="font-size: 9pt; border-collapse: collapse;">
        <tr style="border-left: 0.1mm solid #888888; border-right: 0.1mm solid #888888;">                
            <td width="50%" style="border: none;">
                Phone: Home: <?php                
                echo $temp['PackageCustomer']['home'];
                ?>
            </td>
            <td width="50%" style="border: none;">
                Cell: <?php               
                echo $temp['PackageCustomer']['cell'];
                ?>
            </td>

        </tr>
    </table>
    <table width="100%" cellpadding="8" style="font-size: 9pt; border-collapse: collapse;">
        <tr style="border-left: 0.1mm solid #888888; border-right: 0.1mm solid #888888;">                
            <td width="50%" style="border: none;">
                E-Mail: <?php                
                echo $temp['PackageCustomer']['email'];
                ?>
            </td>
            <td width="50%" style="border: none;">
                Fax: <?php               
                echo $temp['PackageCustomer']['fax'];
                ?>
            </td>

        </tr>
    </table>
    <table width="100%" cellpadding="8" style="font-size: 9pt; border-collapse: collapse;">
        <tr style="border-left: 0.1mm solid #888888; border-right: 0.1mm solid #888888;">                
            <td width="100%" style="border: none;">
                Mac No: <?php                
                echo $temp['PackageCustomer']['mac'];
                ?>
            </td>                               
        </tr>
    </table>
    <table width="100%" cellpadding="8" style="font-size: 9pt; border-collapse: collapse;">
        <tr style="border-left: 0.1mm solid #888888; border-right: 0.1mm solid #888888; border-bottom: 0.1mm solid #888888;">                
            <td width="50%" style="border: none;">
                Referred by: <?php                
                echo $temp['PackageCustomer']['referred_name'];
                ?>
            </td>
            <td width="50%" style="border: none;">
                Phone: <?php               
                echo $temp['PackageCustomer']['referred_phone'];
                ?>
            </td>

        </tr>
    </table>

    &nbsp;
    <table class="items" width="100%" style="font-size: 9pt; border-collapse: collapse;" cellpadding="8">
        <thead>
            <tr>               
                <td>
                    Payment    
                </td>               
            </tr>
        </thead>        
    </table>
    <table width="100%" cellpadding="8" style="font-size: 9pt; border-collapse: collapse;">
        <tr style="border-left: 0.1mm solid #888888; border-right: 0.1mm solid #888888;">                
            <td width="25%" style="border: none;">
                Security Deposit: <?php                
                echo $temp['PackageCustomer']['deposit'];
                ?>
            </td>
            <td width="25%" style="border: none;">
                Monthly Bill: <?php                
                echo $temp['PackageCustomer']['monthly_bill'];
                ?>
            </td>
            <td width="25%" style="border: none;">
                Others: <?php               
                echo $temp['PackageCustomer']['others'];
                ?>
            </td>
            <td width="25%" style="border: none;">
                Total: <?php                
                echo $temp['PackageCustomer']['total'];
                ?>
            </td>
        </tr>
    </table>
    <table width="100%" cellpadding="8" style="border: 0.1mm solid #888888; font-size: 9pt; border-collapse: collapse;">
        <thead>
            <tr>
                <td width="30%" style="border: 0.1mm solid #888888;">
                    PAYMENT METHOD
                </td>
                <td width="70%" style="border: 0.1mm solid #888888;">
                    CARD/CHECK INFORMATION
                </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td width="30%" style="border: 0.1mm solid #888888;">
                    <?php                    
                    echo $temp['PackageCustomer']['payment_type'];
                    ?>
                </td>
                <td width="70%" style="border: 0.1mm solid #888888;">
                    <table width="100%">
                        <tr>
                            <td width="50%">
                                Card/Bank: 
                            </td>
                            <td width="50%">
                                <?php                               
                                echo $temp['PackageCustomer']['card_type'];
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="50%">
                                Name:
                            </td>
                            <td width="50%">
                                <?php                                
                                echo $temp['PackageCustomer']['card_username'];
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="50%">
                                Card/Check No:
                            </td>
                            <td width="50%">
                                <?php                                
                                echo $temp['PackageCustomer']['card_check_no'];
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="50%">
                                Exp. Date:
                            </td>
                            <td width="50%">
                                <?php                               
                                echo $temp['PackageCustomer']['exp_date'];
                                ?>
                            </td>
                        </tr>
                        
                        <tr>
                            <td width="50%">
                                Charged Amount:  
                            </td>
                            <td width="50%">
                                <?php                               
                                echo $temp['PackageCustomer']['charge_amount'];
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="50%">
                                Address on Card: 
                            </td>
                            <td width="50%">
                                <?php                                
                                    if ($temp['PackageCustomer']['address_on_card'] == '') {
                                        echo 'SAME AS BILLING ADDRESS';
                                    } else {                                       
                                        echo $temp['PackageCustomer']['address_on_card'];
                                    }
                                ?>
                            </td>
                        </tr>
                    </table> 
                </td>
            </tr>
        </tbody>
    </table>
    &nbsp;
    <table class="items" width="100%" style="font-size: 9pt; border-collapse: collapse;" cellpadding="8">
        <thead>
            <tr>               
                <td>
                    EQUIPMENT  
                </td>               
            </tr>
        </thead>        
    </table>
    <table width="100%" cellpadding="8" style="border: 0.1mm solid #888888; font-size: 9pt; border-collapse: collapse;">
        <thead>
            <tr>
                <td width="50%" style="border: 0.1mm solid #888888;">
                    EQUIPMENT 
                </td>
                <td width="50%" style="border: 0.1mm solid #888888;">
                    DESCRIPTION 
                </td>
            </tr>
        </thead>
        <tbody>          
            <tr>
                <td>
                    STE TOP BOX 
                </td>
                <td>
                    <?php                    
                    echo $temp['PackageCustomer']['equipment_top_box'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    HDMI
                </td>
                <td>
                    <?php                   
                    echo $temp['PackageCustomer']['equipment_hdmi'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    AV CABLE
                </td>
                <td>
                    <?php                    
                    echo $temp['PackageCustomer']['equipment_av_cable'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    ETHERNET
                </td>
                <td>
                    <?php                    
                    echo $temp['PackageCustomer']['equipment_ethernet'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    REMOTE
                </td>
                <td>
                    <?php                    
                    echo $temp['PackageCustomer']['equipment_remote'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    POWER ADAPTER  
                </td>
                <td>
                    <?php                   
                    echo $temp['PackageCustomer']['equipment_adapter'];
                    ?>
                </td>
            </tr>

        </tbody>
    </table>
    &nbsp;
    <table class="items" width="100%" style="font-size: 9pt; border-collapse: collapse;" cellpadding="8">
        <thead>
            <tr>               
                <td>
                    WARRANTY   
                </td>               
            </tr>
        </thead>        
    </table>
    <table width="100%" cellpadding="8" style="border: 0.1mm solid #888888; font-size: 9pt; border-collapse: collapse;">
        <thead>
            <tr>
                <td width="50%" style="border: 0.1mm solid #888888;">
                    EQUIPMENT 
                </td>
                <td width="50%" style="border: 0.1mm solid #888888;">
                    DESCRIPTION 
                </td>
            </tr>
        </thead>
        <tbody>          
            <tr>
                <td>
                    STE TOP BOX 
                </td>
                <td>
                    <?php
                    echo 'N/A';
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    HDMI/AV CABLE
                </td>
                <td>
                    <?php                    
                    echo $temp['PackageCustomer']['warranty_hdmi_av'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    POWER ADAPTER
                </td>
                <td>
                    <?php                    
                    echo $temp['PackageCustomer']['warranty_adapter'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    REMOTE
                </td>
                <td>
                    <?php                    
                    echo $temp['PackageCustomer']['warranty_remote'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    ROUTER/DONGLE
                </td>
                <td>
                    <?php
                    echo 'NO WARRANTY';
                    ?>
                </td>
            </tr>                        
        </tbody>
    </table>
    
    <table class="items" width="100%" style="font-size: 9pt; border-collapse: collapse;" cellpadding="2">
        <tbody>
            <tr>
                <td  style="border: none;">
                    Signature:  <img height="30p" width="100" src="<?php echo $this->webroot; ?>card_holder_signature/<?php echo $temp['PackageCustomer']['ch_signature'];?>">
                </td>
                <td  style="border: none;">
                    Installed by: <?php
                    echo $temp['User']['name'];
                    ?>
                </td>
                <td  style="border: none;">
                    Date: <?php               
                    $date = $temp['PackageCustomer']['created'];                    
                    echo date("m/d/Y", strtotime($date));                
                ?>
                </td>
            </tr>
        </tbody>
    </table>
    
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();

// send the captured HTML from the output buffer to the mPDF class for processing
$mpdf->WriteHTML($html);

$mpdf->Output();
exit;
?>



