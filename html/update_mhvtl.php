<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>LIVE UPDATE</font></b>
<hr width="100%" size=1 color="blue">


<tr>
<td align=left valign=middle>
<img src="images/live_update.png" >
</td>
</tr>

<?php
echo "<pre><b>Updating MHVTL :</b></pre>";
?>


<TABLE BORDER=4 CELLSPACING=4 CELLPADDING=4 bgcolor=#000000 >

<TR>
 <TD>

<?php
$output = shell_exec('sudo -u root -S ../scripts/update_mhvtl.sh >/tmp/update_mhvtl.sh.out; cat /tmp/update_mhvtl.sh.out');
echo "<pre><font color=#FFFFFF>$output</font></pre>";
?>

</TD>
</TR>
</TABLE>


<FORM ACTION="update.php">
<INPUT TYPE=SUBMIT VALUE="Return">
</FORM>


</body>
</html>
