<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>MHVTL Settings</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td align=left valign=middle>
<img src="images/configuration.png" >
</td>
</tr>

<?php
echo "<pre><b>MHVTL Configuration :</b></pre>";
?>


<TABLE BORDER='4' CELLSPACING='4' CELLPADDING='4' bgcolor='#000000' <FONT COLOR='#FFFFFF'></FONT>
<TR>
<TD>
<div style="overflow:auto;height:250px;width:400px;">

<?php
$output = shell_exec('sudo -u root -S cat /etc/mhvtl/device.conf| grep -v ^#');
echo "<pre><FONT COLOR=#FFFFFF>$output</FONT></pre>";
?>

</div>
</TR>
</TD>
</TABLE>

<FORM ACTION="setup.php">
<INPUT TYPE=SUBMIT VALUE=" Return ">
</FORM>

</body>
</html>
