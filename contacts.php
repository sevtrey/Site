<!DOCTYPE HTML PUBLIC "-//W3C?//DTD HTML 4.01 TRANSITIONAL//EN">

 <html>

 <head>

 <title>��������</title>

 <meta http-EQUIV="Content-Type" Content="text/html; charset=windows-1251">
 <link rel="icon" href="favicon.ico" type="images/x-icon">
 <link href="style.css" TYPE="text/css" rel="stylesheet">
 </head>

 <body>

 <?
   //���������� � ����� ������
    $link = mysql_connect ("localhost", "root", "") or die ("Could not connect");
   //����� ���� ������ 
    $base=mysql_select_db ("note");
    mysql_query("SET NAMES cp1251");
	
	//������ � ���� ������
    $query="select * from nt";		
  ?>

<table class="maintable">
<tr>
<td style="text-align: center;">
<img src="images/1.png" alt="HAT">
</td>
</tr>
 <tr>
  <td style="text-align: center;">
  <a href="index.php"><img src="images/main.png" alt="Main"></a>
  <a href="about.php"><img src="images/about.png" alt="About"></a>
  <a href="interests.php"><img src="images/interests.png" alt="Interests"></a>
  <a href="photo.php"><img src="images/photo.png" alt="Photo"></a>
  <a href="contacts.php"><img src="images/contacts.png" alt="Contacts"></a>
  </td>
 </tr>
 <tr>
 
 <td class="textcell">
 <div style="margin: 40px;">
 <table style="margin: auto; border: 0px;">
<form method="test" action="contacts.php">

	<b><i>�������� ���. ����</i></b>
	<br><br>
	<select name="spisok" size="1" onchange="document.location=this.options[this.selectedIndex].value"> 
							<option value="0">---------</option> 
							<option value="http://vk.com/flipper4me">���������</option> 
							<option value="https://twitter.com/FLlPPY">Twitter</option> 
							<option value="http://www.youtube.com/user/92sega">YouTube</option> 
							<option value="http://www.facebook.com/profile.php?id=100003830786092">Facebook</option> 
							<option value="Flipper4me">Skype</option> 
						</select>
&nbsp;
	<input type="text" name="txtName" size="10" maxlength="256" value="">
&nbsp;	
	<input type="submit" value="�������!">
	<br>
</form>
<br>
<br>
<CENTER>
   <TABLE width=800 border=1>
     <TR>
	   <TD> �����</TD>
	   <TD> ������ </TD>
	   <TD> ������ </TD>
	   <TD> ������� </TD>
	   <TD> ����� </TD>
	 </TR>
	<?
	$res=mysql_query ($query) or die ("�� ���� ������� ���������.<br> ������ � �������: ".$query);
    while(list($code,$login,$password,$group,$surname,$city)=mysql_fetch_array($res))
    {
    ?>	
	 <TR>
	   <TD> <?=$login?> </TD>
	   <TD> <?=$password?> </TD>
	   <TD> <?=$group?> </TD>
	   <TD> <? if(!$surname){ 
	   echo "�� �������" ;}
	   else {echo "$surname";}?></TD>
	   <TD> <?=$city?> </TD>
	 </TR>
	<?
	}
    ?>	
   </TABLE>
   </CENTER>


</table>
 </div>
 <!--<img src="images/sevntu_1.jpeg" alt="Me" >-->
 </td>
 </tr>
 </table>
 </body>
 </html>