<?php
session_start();
//include("includes/config.php");
$host = "localhost";
$user = "root";
$password = "";
$database = "hostel";
$prefix = "";
$cn = mysqli_connect($host, $user, $password) or die("Could not connect database");
mysqli_select_db($cn, $database) or die("Could not select database");
?>
<script language="javascript" type="text/javascript">
function f2()
{
window.close();
}
function f3()
{
window.print(); 
}
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Student  Information</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="hostel.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" border="0">
<?php 
		 $ret= mysqli_query($cn, "SELECT * FROM registration where emailid = '".$_GET['id']."'");
			while($row=mysqli_fetch_array($ret))
			{
			?>
			<tr>
			  <td colspan="2" align="center" class="font1">&nbsp;</td>
  </tr>
			<tr>
			  <td colspan="2" align="center" class="font1">&nbsp;</td>
  </tr>
			
			<tr>
			  <td colspan="2"  class="font"><?php echo ucfirst($row['firstName']);?> <?php echo ucfirst($row['lastName']);?>'s <span class="font1"> information &raquo;</span> </td>
  </tr>
			<tr>
			  <td colspan="2"  class="font">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		      <div align="right">Registration Date : <span class="comb-value"><?php echo $row['postingDate'];?></span></div></td>
  </tr>
			<tr>
			  <td colspan="2"  class="heading" style="color: red;">Room Information &raquo; </td>
  </tr>
			<tr>
			  <td colspan="2"  class="font1"><table width="100%" border="0">
                <tr>
                  <td width="32%" valign="top" class="heading">Room no : </td>
                  
                      <td class="comb-value1"><span class="comb-value"><?php echo $row['roomno'];?></span></td>
                    </tr>
                  <tr>
                  <td width="22%" valign="top" class="heading">Seater : </td>
                  
                      <td class="comb-value1"><span class="comb-value"><?php echo $row['seater'];?></span></td>
                    </tr>
                  
                    <tr>
                    <td width="12%" valign="top" class="heading">Fees (Per Month) : </td>
                      <td class="comb-value1"><?php echo $fpm=$row['feespm'];?></td>
                    </tr>

                    <tr>
                    <td width="12%" valign="top" class="heading">Staying From: </td>
                      <td class="comb-value1"><?php echo $row['stayfrom'];?></td>
                    </tr>
                    <tr>
                    <td width="12%" valign="top" class="heading">Duration: </td>
                      <td class="comb-value1"><?php echo $dr=$row['duration'];?></td>
                    </tr>
                    <tr>
                    <td width="12%" valign="top" class="heading">Total Fee: </td>
                      <td class="comb-value1">
                      <?php 
                          echo $dr*$fpm;
                      ?></td>
                    </tr>
  <tr>
   <td colspan="2" align="left"  class="heading" style="color: red;">Personal Information &raquo; </td>
  </tr>
<tr>
<td width="12%" valign="top" class="heading">Course: </td>
<td class="comb-value1"><?php echo $row['course'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">First Name: </td>
<td class="comb-value1"><?php echo $row['firstName'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Last Name: </td>
<td class="comb-value1"><?php echo $row['lastName'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Gender: </td>
<td class="comb-value1"><?php echo $row['gender'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Contact Number: </td>
<td class="comb-value1"><?php echo $row['contactno'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Email: </td>
<td class="comb-value1"><?php echo $row['emailid'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Emergency Contact Number: </td>
<td class="comb-value1"><?php echo $row['egycontactno'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Guardian Name: </td>
<td class="comb-value1"><?php echo $row['guardianName'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Guardian Relation: </td>
<td class="comb-value1"><?php echo $row['guardianRelation'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Guardian Contact Number: </td>
<td class="comb-value1"><?php echo $row['guardianContactno'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Address: </td>
<td class="comb-value1"><?php echo $row['corresAddress'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">City: </td>
<td class="comb-value1"><?php echo $row['corresCIty'];?></td>
</tr>


<?php } ?>


                   
                  </table></td>
                </tr>
               
					
                  </table></td>
                </tr>
              </table></td>
  </tr>
		
           
 
	 
    </table></td>
  </tr>

  
  <tr>
    <td colspan="2" align="right" ><form id="form1" name="form1" method="post" action="">
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="14%">&nbsp;</td>
          <td width="35%" class="comb-value"><label>
            <input name="Submit" type="submit" class="txtbox4" value="Prints this Document " onClick="return f3();" />
          </label></td>
          <td width="3%">&nbsp;</td>
          <td width="26%"><label>
            <input name="Submit2" type="submit" class="txtbox4" value="Close this document " onClick="return f2();"  />
          </label></td>
          <td width="8%">&nbsp;</td>
          <td width="14%">&nbsp;</td>
        </tr>
      </table>
        </form>    </td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
</body>
</html>
