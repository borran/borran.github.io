<HTML>
<HEAD>
	<TITLE>Question PHP</TITLE>
</HEAD>
<BODY>
    <FORM method="post" action="PHP.php">
    	<INPUT type="checkbox" name="sig"/>
		<INPUT type="text" name="op1" size="3"/>
		<SELECT name="op" size="1">
			<OPTION value="+">+</OPTION>
			<OPTION value="-">-</OPTION>
			<OPTION value="*">*</OPTION>
			<OPTION value="/">/</OPTION>									
		</SELECT>			       
		<INPUT type="text" name="op2" size="3"/>			
		<INPUT type="submit" value="?"/>
	</FORM>	
</BODY>
</HTML>

<?php
	session_start();
	if (($_POST['op1'] == '') OR ($_POST['op2'] == '')) {
		echo "Message1!";
	}
	else {
	if (($_POST['op1'] < '0') OR ($_POST['op1'] > '100') OR ($_POST['op2'] < '0') OR ($_POST['op2'] > '100')) {
		echo "Message2!";
	}	
	else {
		if ($_POST['op'] == '+')
			$res = $_POST['op1'] + $_POST['op2'];
		if ($_POST['op'] == '-')
			$res = $_POST['op1'] - $_POST['op2'];
		if ($_POST['op'] == '*')
			$res = $_POST['op1'] * $_POST['op2'];
		if ($_POST['op'] == '/')
			$res = $_POST['op1'] / $_POST['op2'];
		if (isset($_POST['sig']))
			$res = -1 * $res;
		echo "{$res}";
	}
	}
	session_destroy();
?>