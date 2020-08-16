<?php
session_start();
if(isset($_SESSION['file']))
{
ob_start();
$image=$_SESSION['file'];
$name=$_SESSION['name'];
$number=$_SESSION['number'];
$email=$_SESSION['email'];
$gender=$_SESSION['gender'];
$fname=$_SESSION['fname'];
$mname=$_SESSION['mname'];
$address=$_SESSION['address'];
$education=$_SESSION['education'];
$syear=$_SESSION['syear'];
$sname=$_SESSION['sname'];
$hyear=$_SESSION['hyear'];
$hname=$_SESSION['hname'];
$hstream=$_SESSION['hstream'];
$hboard=$_SESSION['hboard'];
$sboard=$_SESSION['sboard'];
$gyear=$_SESSION['gyear'];
$gname=$_SESSION['gname'];
$guniver=$_SESSION['guniver'];
$gcourse=$_SESSION['gcourse'];
$pcourse=$_SESSION['pcourse'];
$pname=$_SESSION['pname'];
$pyear=$_SESSION['pyear'];
$hobby=$_SESSION['hobby'];
$work=$_SESSION['work'];
$skill=$_SESSION['skill'];
$activity=$_SESSION['activity'];
$sper=$_SESSION['sper'];
$hper=$_SESSION['hper'];
$gper=$_SESSION['gper'];
$pper=$_SESSION['pper'];
$pass=$_SESSION['pass'];
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        td{
            font-size:large;
        }
    </style>
</head>
<body>
<center><h1 style="text-align:center">RESUME</h1></center>
<!--<center><img src='<?php echo $image?>' height="20%" width="20%" style="text-align:center"></center>
-->      
<hr>
<table class="table table-borderless" border='0' style='margin-bottom:20px;text-align:left;font-family:Times New Roman, Times, serif;font-size:large'>
     
  <tr>
                                
<th colspan="3" style="font-size:large;color:white;background:#331799;width:100%"><center>Full Details</center></th>

                           
</tr>
  <tr>
    <td>Name</td>
    <td><?php echo $name?></td>
  </tr>
  <tr>
    <td>Father Name</td>
    <td><?php echo $fname?></td>
  </tr>
  <tr>
    <td>Mother Name</td>
    <td><?php echo $mname?></td>
  </tr>
  <tr>
    <td>Mobile No</td>
    <td><?php echo $number?></td>
  </tr>
  <tr>
    <td>Email Id</td>
    <td><?php echo $email?></td>
  </tr>
  <tr>
    <td>Gender</td>
    <td><?php echo $gender?></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><?php echo $address?></td>
  </tr>
  <tr>
    <td>Hobbies</td>
    <td><?php echo $hobby?></td>
  </tr>
  <tr>
    <td>Work Experience</td>
    <td><?php echo $work?></td>
  </tr>
  <tr>
    <td>Skills</td>
    <td><?php echo $skill?></td>
  </tr>
  <tr>
    <td>Activities</td>
    <td><?php echo $activity?></td>
  </tr>
</table>
<table border='1px' class="table table-borderless" border='1' style='margin-bottom:20px;text-align:left;font-family:Times New Roman, Times, serif;font-size: large;'>
<tr>
<th colspan='6' style="color:white;background:#331799">
Education Details
</th>
</tr>
<tr>
<th>
Institute/School
</th>
<th>
Board/University
</th>
<th>
Stream
</th>
<th>
Passing year
</th>
<th>
Percentage/CGPA
</th>
</tr>

<tr>
<td>
<?php echo $sname?>
</td>
<td>
<?php echo $sboard?>
</td>
<td>
<?php echo "-"?>
</td>
<td>
<?php echo $syear?>
</td>
<td>
<?php echo $sper?>
</td>
</tr>

<tr>
<td>
<?php echo $hname?>
</td>
<td>
<?php echo $hboard?>
</td>
<td>
<?php echo $hstream?>
</td>
<td>
<?php echo $hyear?>
</td>
<td>
<?php echo $hper?>
</td>
</tr>

<tr>
<td>
<?php echo $gname?>
</td>
<td>
<?php echo $guniver?>
</td>
<td>
<?php echo $gcourse?>
</td>
<td>
<?php echo $gyear?>
</td>
<td>
<?php echo $gper?>
</td>
</tr>

<tr>
<td>
<?php echo $pname?>
</td>
<td>
<?php echo $pname?>
</td>
<td>
<?php echo $pcourse?>
</td>
<td>
<?php echo $pyear?>
</td>
<td>
<?php echo $pper?>
</td>
</tr>
</table>
<br>
<b>Declaration</b>
 <p>I hereby declare that all the information contained in this resume is in accordance with facts or truths to my knowledge. I take full responsibility for the correctness of the said information.</p>
 <div class="container-fluid">
    <div class="row">
        <div class="col-sm-4" style="text-align: left;">
          <center><img src='<?php echo $image?>' height="20%" width="20%" style="text-align:center"></center>
        
      </div>
      <div class="col-sm-4" style="text-align: right;">
          <?php echo $name?><br>
         <b> Signature</b>
        
      </div>
    
    </div>
  </div>
  
</body>
</html>
<?php
require_once 'vendor/autoload.php';
$body=ob_get_clean();
$mpdf = new \Mpdf\Mpdf();
$mpdf->addpage('P');
$mpdf->setTitle("RESUME");
$mpdf->WriteHTML($body);
$mpdf->SetProtection(array(), $pass, "123456");
$mpdf->Output("RESUME.pdf",'D');
}
?>