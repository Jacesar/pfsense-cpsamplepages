<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>TuEmpresa Wi-Fi</title>
		<script src="captiveportal-jquery-1.9.1.min.js"></script>
	<?php
		include "captiveportal-mobile_detect.php";
		$detect = new Mobile_Detect();
		
		if ($detect->isMobile() || $detect->isTablet()) {
	?>
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'>
		<meta content='yes' name='apple-mobile-web-app-capable'>
		<meta content='black' name='apple-mobile-web-app-status-bar-style'>
		<link rel="stylesheet" href="captiveportal-jquery.mobile-1.3.0.min.css" />
		<script src="captiveportal-jquery.mobile-1.3.0.min.js"></script>
		</head>
	<body>
		<div data-role="page" data-theme="b" data-title="TuEmpresa Wi-Fi">
			<header data-role="header" data-theme="d">
				<h1>TuEmpresa S.A.</h1>
			</header>
			<section class="content" data-role="content">
				<p style="text-align: center">
					<img alt="Mobile Page" src="captiveportal-logo.png" />
				</p>
				<p>
					<form name="login-form" class="login-form" method="post" action="$PORTAL_ACTION$" data-ajax="false">
						<fieldset>
							<p>
								<input autocapitalize="off" data-role="input" data-theme="d" id="auth_user" name="auth_user" placeholder="Usuario" type="text">
							</p>
							<p>
								<input autocapitalize="off" data-role="input" data-theme="d" id="auth_pass" name="auth_pass" placeholder='Password' type="password">
							</p>
							<p>
								<input name="redirurl" type="hidden" value="$PORTAL_REDIRURL$" />
								<input name="zone" type="hidden" value="$PORTAL_ZONE$" />
							</p>
                                                        <p style="text-align: center">Al pulsar el bot&oacute;n <em>Acceder</em>, usted afirma haber le&iacute;do y aceptado las <a href="captiveportal-condiciones.html">condiciones de utilizaci&oacute;n</a></label> de la red de TuEmpresa
                                                          </p>
							<p>
								<input data-theme="a" type="submit" name="accept" value="Acceder" />
							</p>
						</fieldset>
					</form>
				</p>
			</section>
			<footer data-role="footer" data-theme="d">
				<p class="text-center">
					<h2>Departamento de Inform&aacute;tica</h2>
				</p>
			</footer>
		</div>
	</body>		
	<?php } else { ?>
		<link href="captiveportal-style.css" rel="stylesheet" type="text/css" />
		</head>
<body>
<form name="login-form" action="$PORTAL_ACTION$" method="post">
<p align="center">
	</p><div style="text-align:center;align:center;padding-top:90px;">
	       <table id="logintab1" style="text-align:center;" align="center">
		<tbody><tr>
			<td class="LoginInvitLogo" colspan="2"><img src="captiveportal-logo.png" alt="TuEmpresa" title="TuEmpresa" style=""></td>
		</tr>
		<tr>
			<td class="LoginInvitVersion"><br>
							</td>
				<!-- td class="LoginInvitDate"><br>29/11/2013</td -->
			</tr>
			<tr>
				<td colspan="2">
					<table id="logintab2">
					       <tbody><tr><td style="grayLine"></td><td></td></tr>
					       <tr>
							<td align="right"><label for="useralias">Usuario:</label></td>
							<td><input name="auth_user" class="inputclassic" type="text"></td>
						</tr>
						<tr>
							<td align="right"><label for="password">Password:</label></td>
							<td><input name="auth_pass" value="" class="inputclassicPass" type="password"></td>
						</tr>
						<tr>
							<td colspan="2" align="center">
							  <input name="redirurl" type="hidden" value="$PORTAL_REDIRURL$" />
							  <input name="zone" type="hidden" value="$PORTAL_ZONE$" />
								<input name="accept" value="Acceder" type="Submit">
							</td>
						</tr>
                                                <tr><td style="grayLine"></td><td></td></tr>
					</tbody></table>
				</td>
			</tr>
			<tr>    <td id="LoginInvitcpy" colspan="2"><br/>Al pulsar el bot&oacute;n <em>Acceder</em>, usted afirma haber le&iacute;do<br/>y aceptado las <b><a target="_blank" href="captiveportal-condiciones.html">condiciones de utilizaci&oacute;n</a></b> de la red de TuEmpresa</td>
			</tr>
			<tr>
				<td id="LoginInvitcpy" colspan="2"><br>TuEmpresa S.A. Productos y Servicios. Departamento de Inform&aacute;tica</td>
			</tr>
		</tbody></table>
	</div>
<p></p>
</form>

</body>
	<?php }	?>
</html>
