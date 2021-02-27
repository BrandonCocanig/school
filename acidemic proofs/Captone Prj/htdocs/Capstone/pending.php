<?php
include('mysqlconnection.php'); 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!-- utf-8 works for most cases -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Forcing initial-scale shouldn't be necessary -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Use the latest (edge) version of IE rendering engine -->
<title>EmailTemplate-Fluid</title>
<!-- The title tag shows in email notifications, like Android 4.4. -->

<!-- Please use an inliner tool to convert all CSS to inline as inpage or external CSS is removed by email clients -->
<!-- important in CSS is used to prevent the styles of currently inline CSS from overriding the ones mentioned in media queries when corresponding screen sizes are encountered -->

<!-- CSS Reset -->
<style type="text/css">
/* What it does: Remove spaces around the email design added by some email clients. */
      /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
html, body {
	margin: 0 !important;
	padding: 0 !important;
	height: 100% !important;
	width: 100% !important;
}
/* What it does: Stops email clients resizing small text. */
* {
	-ms-text-size-adjust: 100%;
	-webkit-text-size-adjust: 100%;
}
/* What it does: Forces Outlook.com to display emails full width. */
.ExternalClass {
	width: 100%;
}
/* What is does: Centers email on Android 4.4 */
div[style*="margin: 16px 0"] {
	margin: 0 !important;
}
/* What it does: Stops Outlook from adding extra spacing to tables. */
table, td {
	mso-table-lspace: 0pt !important;
	mso-table-rspace: 0pt !important;
}
/* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
table {
	border-spacing: 0 !important;
	border-collapse: collapse !important;
	table-layout: fixed !important;
	margin: 0 auto !important;
}
table table table {
	table-layout: auto;
}
/* What it does: Uses a better rendering method when resizing images in IE. */
img {
	-ms-interpolation-mode: bicubic;
}
/* What it does: Overrides styles added when Yahoo's auto-senses a link. */
.yshortcuts a {
	border-bottom: none !important;
}
/* What it does: Another work-around for iOS meddling in triggered links. */
a[x-apple-data-detectors] {
	color: inherit !important;
}
</style>

<!-- Progressive Enhancements -->
<style type="text/css">
/* What it does: Hover styles for buttons */
.button-td, .button-a {
	transition: all 100ms ease-in;
}
.button-td:hover, .button-a:hover {
	background: #555555 !important;
	border-color: #555555 !important;
}
</style>
</head>
<body width="100%" height="100%" bgcolor="#e0e0e0" style="margin: 0;" yahoo="yahoo">
<table cellpadding="0" cellspacing="0" border="0" height="100%" width="100%" bgcolor="#e0e0e0" style="border-collapse:collapse;">
  <tr>
    <td><center style="width: 100%;">
        
        <!-- Visually Hidden Preheader Text : BEGIN -->
        <div style="display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide:all;font-family: sans-serif;"> (Optional) This text will appear in the inbox preview, but not the email body. </div>
        <!-- Visually Hidden Preheader Text : END -->
        
        <div style="max-width: 600px;"> 
          <!--[if (gte mso 9)|(IE)]>
            <table cellspacing="0" cellpadding="0" border="0" width="600" align="center">
            <tr>
            <td>
            <![endif]--> 
          
          <!-- Email Header : BEGIN -->
          <table cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 600px;">
            <tr>
              <td style="padding: 20px 0; text-align: center"><img src="https://www.pngkey.com/png/detail/336-3366953_password-reset-icon-reset-password-icon.png" width="200" height="200" alt="alt_text" border="0"></td>
            </tr>
          </table>
          <!-- Email Header : END --> 
          
          <!-- Email Body : BEGIN -->
          <table cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#ffffff" width="100%" style="max-width: 600px;">
            
            <!-- Hero Image, Flush : BEGIN -->
            <tr>
              <td class="full-width-image" align="center" ><img src="https://www.humanesociety.org/sites/default/files/styles/1240x698/public/2018/06/cat-217679.jpg?h=c4ed616d&itok=3qHaqQ56" width="600" alt="alt_text" border="0" style="width: 100%; max-width: 600px; height: auto;"></td>
            </tr>
            <!-- Hero Image, Flush : END --> 
            
            <!-- 1 Column Text : BEGIN -->
            <tr>
              <td><table cellspacing="0" cellpadding="0" border="0" width="100%">
                  <tr>
                    <td style="padding: 40px; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555;"> We will send your auth code to your the email entered, if it is regitered for an account. Well ths would be securly sent to your email using php-send-mail with email + expireing timestamps, but google kept blocking it.<br> <br>
                      
                      <!-- Button : Begin -->
                      
                      <table cellspacing="0" cellpadding="0" border="0" align="center" style="margin: auto;">
                        <tr>
                          <td style="border-radius: 3px; background: #222222; text-align: center;" class="button-td"><a href="new_password.php" style="background: #222222; border: 15px solid #222222; padding: 0 10px;color: #ffffff; font-family: sans-serif; font-size: 13px; line-height: 1.1; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;" class="button-a"> 
                            <!--[if mso]>&nbsp;&nbsp;&nbsp;&nbsp;<![endif]-->Next<!--[if mso]>&nbsp;&nbsp;&nbsp;&nbsp;<![endif]--> 
                            </a></td>
                        </tr>
                      </table>
                      
                      <!-- Button : END --> 
                      <br>
                      Title   18,   United   States   Code,   Section 1030(a)(2) provides:Whoever— (2) intentionally accesses a computer without   authorization   or   exceeds authorized    access,    and    thereby    obtains—(A)  information  contained  in  a  financial  record  of  a  financial institution,  or  of  a  card  issuer  as  defined  in  section  1602(n)  of  title 15, or contained in a file of a consumer reporting agency on a consumer, as such terms are defined in the Fair Credit Reporting Act (15 U.S.C. 1681 et seq.);(B) information from any department or agency of the United States; or(C) information from any protected computer . . .shall be punished as provided in subsection (c) of this section.
					  </td>
                  </tr>
                </table></td>
            </tr>
            <!-- 1 Column Text : BEGIN --> 
            
            <!-- Two Even Columns : BEGIN -->
            <tr>
              <td bgcolor="#ffffff" align="center" height="100%" valign="top" width="100%"><!--[if mso]>
                        <table cellspacing="0" cellpadding="0" border="0" align="center" width="560">
                        <tr>
                        <td align="center" valign="top" width="560">
                        <![endif]-->
                
                <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="max-width:560px;">
                  <tr> </tr>
                </table>
                
                <!--[if mso]>
                        </td>
                        </tr>
                        </table>
                        <![endif]--></td>
            </tr>
            <!-- Two Even Columns : END -->
            
          </table>
          <!-- Email Body : END --> 
          
          <!-- Email Footer : BEGIN -->
          <table cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 680px;">
            <tr>
              <td style="padding: 40px 10px;width: 100%;font-size: 12px; font-family: sans-serif; mso-height-rule: exactly; line-height:18px; text-align: center; color: #888888;"><webversion style="color:#cccccc; text-decoration:underline; font-weight: bold;">&nbsp;</webversion>
                <br>                
            </tr>
          </table>

        </div>
      </center></td>
  </tr>
</table>
</body>
</html>
