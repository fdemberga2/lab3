<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> [ My Masterclass ] </title>
	<link rel="stylesheet" type="text/css" href = "css/validation.css">
</head>
<body>

<center>
<br><br><br><br><br><br><br>
<div id="contents">
<?php
include("Table.php");
$query = "SELECT NAME, EMAIL, WEBSITE, COMMENT, GENDER FROM fdemberga_masterclass";
$result = $conn->query($query);
?>
<table>
  <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>EMAIL</th>
    <th>WEBSITE</th>
    <th>COMMENT</th>
    <th>GENDER</th>
  </tr>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
 <tr>
   <td><?php echo $sn; ?> </td>
   <td><?php echo $data['NAME']; ?> </td>
   <td><?php echo $data['EMAIL']; ?> </td>
   <td><?php echo $data['WEBSITE']; ?> </td>
   <td><?php echo $data['COMMENT']; ?> </td>
   <td><?php echo $data['GENDER']; ?> </td>
 <tr>
 <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
  </table>
  </div>
  <p style="font-size: 20px; font-family: joane_stencilregular; color: white;" id="explore"><a href="validation" id="explore">Return to Registration!</a></p>
</center>
</body>
</html>