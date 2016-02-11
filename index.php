<?PHP 
/* //////////////////////////////*/
/*          VARIABLES            */
/* //////////////////////////////*/

    // Fetured Offer
$a_featured_offer_title = "Nuestra Boda"; 
$a_featured_offer_description = "Hola, para nosotros usted es muy importante y por eso que queremos invitarle a nuestra boda. <br> <br> Hemos resevado para usted <strong style='font-size:22px;'>1</strong> espacio. Por favor confirmar su asistencia en nuestro sitio web."; 
$a_featured_offer_url = "http://www.daniloyflori.com";

    // Commonly used styles
$style_img = "text-align: left; vertical-align:top; line-height:18px !important; padding-top:0px !important; padding-right:0px !important; padding-bottom:0px !important; padding-left:0px !important; margin-top:0px !important; margin-right:0px !important; margin-bottom:0px !important; margin-left:0px !important;white-space: nowrap;";

$style_mobile_content_initial = "display:none; width:0px; overflow:hidden; float:left; height:0px; max-height:0px;";


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html xmlns:v="urn:schemas-microsoft-com:vml" style="-webkit-text-size-adjust: none;" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?PHP /*
    <!-- START to prevent image blocking -->
    <meta http-equiv="cache-control" content="max-age=0"/>
    <meta http-equiv="cache-control" content="no-cache"/>
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <!-- END to prevent image blocking -->
    */ ?>

    <title><?PHP echo $date?></title>
    <style type="text/css">
        /* Based on The MailChimp Reset INLINE:Yes. */
        /* Client-specific Styles */
        * {-webkit-text-size-adjust:none}
        #outlook a {padding:0;} /* Force Outlook to provide a "view in browser" menu link. */
        body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;font-family:"Helvetica";}
        /* Prevent Webkit and Windows Mobile platforms from changing default font sizes.*/
        .ReadMsgBody { width:100%;}
        .ExternalClass {width:100%;}
        .ExternalClass * {line-height:100%;}
        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height:100%;}
        /* Forces Hotmail to display normal line spacing.  More on that:http://www.emailonacid.com/forum/viewthread/43/ */
        #backgroundTable {padding-top:0px !important; padding-right:0px !important; padding-bottom:0px !important; padding-left:0px !important; margin-top:0px !important; margin-right:0px !important; margin-bottom:0px !important; margin-left:0px !important; width:100% !important; line-height:100% !important;}
        /* End reset */
        /* Some sensible defaults for images
        Bring inline:Yes. */
        img {outline:none; text-decoration:none; -ms-interpolation-mode:bicubic; display:block;}
        a img {border:none; display:block;}
        .image_fix {display:block;}
        
        table,tr,td,span,a {
            mso-line-height-rule:exactly;
        }
        /* Yahoo paragraph fix
        Bring inline:Yes. */
        p {margin:1em 0;}
        p {padding-top:0px !important; padding-right:0px !important; padding-bottom:0px !important; padding-left:0px !important; margin-top:0px !important; margin-right:0px !important; margin-bottom:0px !important; margin-left:0px !important; -webkit-text-size-adjust:none;}
        h1, h2, h3, h4, h5, h6 {color:black !important;}
        h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {color:blue !important;}
        h1 a:active, h2 a:active,  h3 a:active, h4 a:active, h5 a:active, h6 a:active {color:red !important;}
        h1 a:visited, h2 a:visited,  h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited {color:purple !important;}
        table {border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;}
        table td p {font-family:Arial; }
        /* Outlook 07, 10 Padding issue fix
        Bring inline:No.*/
        table td {border-collapse:collapse; padding:0;}
        /* Remove spacing around Outlook 07, 10 tables
        Bring inline:Yes */
        table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }
        /* Styling your links has become much simpler with the new Yahoo.  In fact, it falls in line with the main credo of styling in email and make sure to bring your styles inline.  Your link colors will be uniform across clients when brought inline.
        Bring inline:Yes. */
        a {color:#3399cc;}
        .fullWidth {
            min-width: 600px;
            width: 100%;
        }
        .mobile-only-content {
            max-height: 0px; 
            height: 0px;
            font-size: 0; 
            display : none !important;
        }
        @media only screen and (max-width:600px) {
            *[class].mobileWidth {
                width:100% !important;
                min-width: 100% !important;
            }
            *[class].mobileWidthText {
                width:95% !important;
                min-width: 95% !important;
            }

            *[class].mobileWidth.email-security-zone {
                width: 90% !important;
                min-width: 90% !important;
            }
        }
        @media only screen and (max-width:550px) {
            body {
                width: 96% !important;
                margin-left: 2%;
            }
            .fullWidth {
                min-width: 280px;
            }
            *[class].mobileWidth {
                width:100% !important;
            }
            *[class].mobileWidthText {
                width:95% !important;
            }
            *[class].desktop-only-content {
                display:none;
            }
            *[class].mobile-only-content {
                display:block !important;
                width:100% !important;
                height:100% !important;
                float:initial !important;
                overflow:initial !important; 
                font-size: 12px !important; 
            }
            tr[class].mobile-only-content {
                display: table-row !important;
            }
            *[class].center {
                text-align:center !important;
            }
        }
    </style>
</head>
<body style="background-color:#000; width:100%; background-repeat:no-repeat;" width="100%">
    <!-- START HEADER -->
    <table width="100%" bgcolor="#302f2a" style="background-color:#302f2a;" border="0" cellpadding="0" cellspacing="0" align="center">
        <!-- START DESKTOP CONTENT - HERO -->
        <tr class="desktop-only-content">
            <td>
                <table width="600" align="center">
                    <tr valign="top">
                        <td align="center">
                            <table width="300" style="min-width:300px;" border="0" cellpadding="0" cellspacing="0">
                                <tr><td colspan="2" style="line-height:30px;">&nbsp;</td></tr>
                                <tr>
                                    <td cellpadding="0" width="27" cellspacing="0" style="width:27px;border-top:2px solid #fff;line-height:0px;"></td>
                                    <td style="width:273px; border-top: 4px solid #302f2a;line-height:0px;"></td>
                                </tr>
                                <tr>
                                    <td cellpadding="0" cellspacing="0" border="0" style="color:fff;padding-top:5px;padding-bottom:20px;" colspan="2">
                                        <a target="_blank" href="<?PHP echo $a_featured_offer_url?>" style="color:#fff;text-decoration:none;font-family:serif;font-size:22px;font-style:italic;"><?PHP echo $a_featured_offer_title?></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-bottom:20px;color:#fff;font-family:Helvetica;font-size:13px;line-height:20px;" colspan="2">
                                        <?PHP echo $a_featured_offer_description?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td width="164" height="40" bgcolor="#d4af37" style="border-right: 2px solid #ddd;border-bottom: 2px solid #ddd;background-color:#d4af37; text-transform:uppercase; text-align:center; font-size:14px; mso-line-height-rule:exactly; line-height:15px !important; display:block;">
                                                    <a target="_blank" href="<?PHP echo $a_featured_offer_url?>" style="mso-line-height-rule:exactly; line-height:40px; width:164px; display:inline-block; text-decoration:none; color:#fff;"><font face="arial"><strong>Más Info</strong></font></a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table width="300" style="min-width:300px;" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td cellpadding="0" cellspacing="0" border="0" >
                                        <a target="_blank" href="<?PHP echo $a_featured_offer_url?>" style="text-decoration:none;">
                                            <img 
                                            border="0" 
                                            width="300" 
                                            height="276" 
                                            alt=" "
                                            style="<?PHP echo $style_img?> min-width:53px; display: inline;" 
                                            src="images/main_image.jpg"
                                            >
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <!-- END DESKTOP CONTENT - HERO -->

        <!-- START MOBILE WRAPPER -->
        <tr style="<?PHP echo $style_mobile_content_initial; ?>" class="mobile-only-content">
            <!--[if !mso]><!-->
            <td>
                <table width="100%" style="min-width:100%;" border="0" cellpadding="0" cellspacing="0" align="center">
                    <tr>
                        <td colspan="3"cellpadding="0" cellspacing="0" border="0"  >
                            <a target="_blank" href="<?PHP echo $a_learn_more_url?>" style="text-decoration:none;">
                                <img 
                                border="0" 
                                width="100%" 
                                height="auto" 
                                alt=" "
                                style="<?PHP echo $style_img?>display: inline;" 
                                src="images/main_image.jpg"
                                >
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:35px;">&nbsp;</td>
                        <td cellpadding="0" cellspacing="0" border="0" >
                            <table width="100%" style="min-width:100%;" border="0" cellpadding="0" cellspacing="0" align="center">
                                <tr>
                                    <td style="width:100%;line-height:30px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td >
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td style="width:27px;width:27pxmax-height:2px;line-height:1px;background-color:#fff;height:2px;">
                                                    &nbsp;    
                                                </td>
                                                <td style="border:0;height:2px;line-height:1px;">&nbsp;</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color:fff; text-transform:uppercase;padding-top:5px;padding-bottom:20px;" colspan="2">
                                        <a target="_blank" href="<?PHP echo $a_featured_offer_url?>" style="color:#fff;text-decoration:none;font-family:serif;font-size:22px;font-style:italic;"><?PHP echo $a_featured_offer_title?></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-bottom:20px;color:#fff;font-family:Helvetica;font-size:13px;line-height:20px;" colspan="2">
                                        <?PHP echo $a_featured_offer_description?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="100%" height="40" bgcolor="#d4af37" style="border-right: 2px solid #ddd;border-bottom: 2px solid #ddd;background-color:#d4af37; text-transform:uppercase; text-align:center; font-size:14px; mso-line-height-rule:exactly; line-height:15px !important; display:block;">
                                        <a target="_blank" href="<?PHP echo $a_featured_offer_url?>" style="mso-line-height-rule:exactly; line-height:40px; width:164px; display:inline-block; text-decoration:none; color:#fff;"><font face="arial"><strong>Más Info</strong></font></a>
                                    </td>                              
                                </tr>
                            </table>
                        </td>
                        <td cellpadding="0" cellspacing="0" border="0" style="width:35px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td cellpadding="0" cellspacing="0" border="0" style="line-height:30px;" colspan="3">&nbsp;</td>
                    </tr>
                </table>

            </td>
            <!--<![endif]-->
        </tr>
        <!-- END MOBILE CONTENT - HERO -->    
    </table>
