<?php session_start();error_reporting(1);include "../secure/talk2db.php";include "../functions/manufactureXML.php";?>
<html>
<head>
<title>Open Learning Exchange - Ghana</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="../stylesheet/img/devil-icon.png">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" media="all" href="../css/jsDatePick_ltr.min.css" />
<script type="text/javascript" src="../js/jsDatePick.min.1.3.js"></script>
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"dateFrom",
			dateFormat:"%Y-%m-%d"
		});
		new JsDatePick({
			useMode:2,
			target:"dateTo",
			dateFormat:"%Y-%m-%d"
		});
	};
</script>
</head>
<?php

?>

<body  style="background-color:#FFF">
<div id="wrapper" style="background-color:#FFF; width:600px;">
  <div id="rightContent" style="float:none; margin-left:auto; margin-right:auto; width:500px; margin-left:auto; margin-right:auto;">
  <span style="color:#00C; font-weight: bold;">Ready to Sync Tablets</span><br><br>
    <form name="form1" method="post" action="">
      <table width="98%">
        <tr>
          <td width="94"><b> Sync from date :</b></td>
          <td width="156"><span id="sprytextfield1">
            <input type="text" name="dateFrom" id="dateFrom" style="width:100px;">
          <span class="textfieldRequiredMsg">&nbsp;&nbsp;</span></span></td>
          <td width="78"><b>Sync to date:</b></span></td>
          <td width="132"><span id="sprytextfield2">
          <input type="text" name="dateTo" id="dateTo" style="width:100px;">
          <span class="textfieldRequiredMsg">&nbsp;&nbsp;</span></span></td>
        </tr>
        <tr>
          <td></td>
          <td colspan="3"><input type="submit" class="button" value="Compile Now">
            <input type="reset" class="button" value="Reset">
              <input type="hidden" name="systemDateForm" id="systemDateForm">
            </td>
        </tr>
      </table>
    </form>
    <form name="form1" method="post" action="">
      <table width="72%" align="center">
      <tr>        </tr>
      <tr>        </tr>
      </table>
      <table width="72%" align="center">
        <tr> </tr>
        <tr> </tr>
      </table>
    </form>
  </div>
<div class="clear"></div>
</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
</script>
</body>
<script type="text/javascript">
	var now = new Date()
	///now = now.toGMTString();
	var fmat= now.getFullYear()+'-'+ (now.getMonth()+1)+'-'+(now.getDay()+10)+' '+(now.getHours())+':'+(now.getMinutes())+':'+(now.getSeconds());
	document.getElementById('systemDateForm').value = fmat;
</script>
</html>