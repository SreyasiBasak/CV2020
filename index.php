<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Genaration</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha256-3blsJd4Hli/7wCQ+bmgXfOdK7p/ZUMtPXY08jmxSSgk=" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" integrity="sha256-ENFZrbVzylNbgnXx0n3I1g//2WeO47XxoPe0vkp3NC8=" crossorigin="anonymous" />
</head>
<body onload="load0()">
<div class="container">
<form action="" method="POST" enctype="multipart/form-data">
   <!--Start Details--->
<div class="card-header" style="background-color:#0c2663;color:white">
<h5 class="card-title">User & Parents Details</h5>
</div>
<div class="card">
<div class="row">

<div class="col-sm-6 my-2">
<input type="text" id="name0" name="name" placeholder="Enter your name" required class="form-control">
</div>

<div class="col-sm-6 my-2">
<input type="number" id="number" name="number" onblur="number0()" placeholder="Enter your Number" required class="form-control">
</div>
<div class="col-sm-6 my-2">
<input type="email" id="email" name="email" onblur="mail()" placeholder="Enter your Email" required class="form-control">
</div>
<div class="col-sm-6 my-2">
<select name="gender" id="gender" class="form-control" >
<option value="" seleted >Select gender</option>
<option>Male</option>
<option>Female</option>
<option>Other</option>
</select>
</div>
<div class="col-sm-6 my-2">
<input type="text" id="fname" name="fname" placeholder="Enter your Father Name" required class="form-control">
</div>
<div class="col-sm-6 my-2">
<input type="text" id="mname" name="mname" placeholder="Enter your Mother Name" required class="form-control">
</div>
</div>
</div>
            <!--Start Details--->
<div class="card-header" style="background-color:#0c2663;color:white">
<h5 class="card-title">Address Details</h5>
</div>
<div class="card">
<div class="row">

<div class="col-sm-12 my-2">
<textarea class="form-control" id="address" name="address" placeholder="Enter Your Full Address" required  style="margin-top: 0px; margin-bottom: 0px; height: 99px;"></textarea>
</div>
</div>
           <!--ENd Details--->
            <!--Start Details--->
<div class="card-header" style="background-color:#0c2663;color:white">
<h5 class="card-title">Education Details</h5>
</div>
<div class="card">
<div class="row">
<div class="col-sm-12 my-2">
<select name="education" onChange="my()" id="qual" class="form-control">
<option value="" seleted >--Select Highest Qualification--</option>
<option value="10th">10th</option>
<option value="12th">12th</option>
<option value="Graduation">Graduation</option>
<option value="Post Graduation">Post Graduation</option>
</select>
</div>

</div>
</div>
           <!--ENd Details--->
           <!--Start Details--->
           <div id="10show" style="display:none">
<div class="card-header" style="background-color:#0c2663;color:white">
<h5 class="card-title">10th Education Details</h5>
</div>
<div class="card">
<div class="row">
<div class="col-sm-6 my-2">
<textarea class="form-control" id="sname" name="sname" required placeholder="Enter School Name" style="margin-top: 0px; margin-bottom: 0px; height: 40px;"></textarea>

</div>
<div class="col-sm-6 my-2">
<textarea class="form-control" id="sboard" name="sboard" required placeholder="Enter board Name" style="margin-top: 0px; margin-bottom: 0px; height: 40px;"></textarea>

</div>
<div class="col-sm-6 my-2">
<input type="text" class="form-control" id="syear" onblur="school()" name="syear" minlength="4" maxlength="4" placeholder="Enter your passing year">

<!--<textarea class="form-control" id="syear" name="syear" required placeholder="Enter Your passing year" style="margin-top: 0px; margin-bottom: 0px; height: 40px;"></textarea>
-->
</div>
<div class="col-sm-6 my-2">
<input type="number" class="form-control" id="sper" onblur="schoolper()" minlength="2" maxlength="5" name="sper" required placeholder="Enter Percentages">

</div>

</div>
</div>
</div>
           <!--ENd Details--->

           <!--Start Details--->
           <div id="12show" style="display:none">
<div class="card-header" style="background-color:#0c2663;color:white">
<h5 class="card-title">12th Education Details</h5>
</div>
<div class="card">
<div class="row">
<div class="col-sm-6 my-2">
<textarea class="form-control" id="hname" name="hname" placeholder="Enter School Name" style="margin-top: 0px; margin-bottom: 0px; height: 40px;"></textarea>

</div>
<div class="col-sm-6 my-2">
<textarea class="form-control" id="hboard" name="hboard" placeholder="Enter Board Name" style="margin-top: 0px; margin-bottom: 0px; height: 40px;"></textarea>
</div>
<div class="col-sm-6 my-2">
<input type="number" class="form-control" id="hyear" onblur="hs()" name="hyear" minlength="4" maxlength="4" placeholder="Enter your passing year">

<!--<textarea class="form-control" id="hyear" name="hyear" placeholder="Enter Your passing year" style="margin-top: 0px; margin-bottom: 0px; height: 40px;"></textarea>
-->
</div>
<div class="col-sm-6 my-2">
<select name="stream" id="stream" class="form-control">
<option>--Select Stream--</option>
<option>Arts</option>
<option>Science</option>
<option>Commerce</option>
</select>
</div>
<div class="col-sm-6 my-2">
<input type="number" class="form-control" id="hper" name="hper"  onblur="hsper()" placeholder="Enter Percentages" >

</div>
</div>
</div>
</div>
           <!--ENd Details--->

           <!--Start Details--->
           <div id="gshow" style="display:none">
<div class="card-header" style="background-color:#0c2663;color:white">
<h5 class="card-title">Graduation Education Details</h5>
</div>
<div class="card">
<div class="row">
<div class="col-sm-6 my-2">
<input type="text" class="form-control" id="gyear" onblur="UG()" name="gyear" minlength="4" maxlength="4" placeholder="Enter your passing year">

<!--<textarea class="form-control" id="gyear" name="gyear" placeholder="Enter Passing Year" style="margin-top: 0px; margin-bottom: 0px; height: 40px;"></textarea>
-->
</div>
<div class="col-sm-6 my-2">
<textarea class="form-control" id="gname" name="gname" placeholder="Enter College Name" style="margin-top: 0px; margin-bottom: 0px; height: 40px;"></textarea>
</div>
<div class="col-sm-6 my-2">
<select id="gcourse" name="gcourse" class="form-control" >
<option value="" seleted >--Select Your Course--</option>
<option>B.SC COMPUTER</option>
<option>BCA COMPUTER APPLICATION</option>
<option>B.TECH</option>
<option>MICROBIOLOGY</option>
<option>PHYSIC HONOURS</option>
<option>MATHEMATICS HONOURS</option>
<option>ARTS</option>
<option>BBA</option>
</select>

</div>
<div class="col-sm-6 my-2">
<textarea class="form-control" id="guniver" name="guniver" placeholder="Enter Your University Name" style="margin-top: 0px; margin-bottom: 0px; height: 40px;"></textarea>

</div>
<div class="col-sm-6 my-2">
<input type="number" class="form-control" id="gper" name="gper"  onblur="ugper()" placeholder="Enter Percentages/CGPA" >

</div>
</div>

</div>
</div>
           <!--ENd Details--->
           <!--Start Details--->
           <div id="pshow" style="display:none">
<div class="card-header" style="background-color:#0c2663;color:white">
<h5 class="card-title">Post Graduction Education Details</h5>
</div>
<div class="card">
<div class="row">
<div class="col-sm-6 my-2">
<select id="pcourse" name="pcourse" class="form-control" >
<option value="" seleted >--Select Course Name--</option>
<option>M.SC COMPUTER</option>
<option>MCA COMPUTER APPLICATION</option>
<option>M.TECH</option>
<option>COMMERSE PART</option>
<option>P.H.D</option>
<option>ARTS</option>
</select>
</div>
<div class="col-sm-6 my-2">
<textarea class="form-control" id="pname" name="pname" placeholder="Enter University Name" style="margin-top: 0px; margin-bottom: 0px; height: 40px;"></textarea>
</div>
<div class="col-sm-6 my-2">
<input type="text" class="form-control" id="pyear" onblur="PG()" name="pyear" minlength="4" maxlength="4" placeholder="Enter your passing year">
<!--<textarea class="form-control" id="pyear" name="pyear" placeholder="Enter your passing year" style="margin-top: 0px; margin-bottom: 0px; height: 40px;"></textarea>
--></div>
<div class="col-sm-6 my-2">
<input type="number" class="form-control" id="pper" onblur="pgper()" name="pper"  placeholder="Enter Percentages/CGPA">
<span><font color='red'>CGPA Convert into Percentages</font></span>
</div>
</div>


</div>
</div>
</div>
           <!--ENd Details--->
           
            <!--Start Details--->
            
<div class="card-header"  style="background-color:#0c2663;color:white;">
<h5 class="card-title">Hobbies & Work Experience</h5>
</div>
<div class="card">
<div class="row">

<div class="col-sm-12 my-2">
<textarea class="form-control" id="hobby" name="hobby" placeholder="Enter your Hobbies" required  style="margin-top: 0px; margin-bottom: 0px; height: 99px;"></textarea>
</div>

<div class="col-sm-12 my-2">
<select id="work" name="work" required class="form-control">
<option seleted>--Select Work Experience--</option>
<option>0-1 Year</option>
<option>1-2 Years</option>
<option>2-3 Years</option>
<option>3-4 Years</option>
<option>4-5 Years</option>
</select>
</div>

</div>
</div>
           <!--ENd Details---> <!--Start Details--->
<div class="card-header" style="background-color:#0c2663;color:white">
<h5 class="card-title">Skills & Activities</h5>
</div>
<div class="card">
<div class="row">

<div class="col-sm-6 my-2">
<textarea class="form-control" id="skill" name="skill" placeholder="Enter Your Skills" required style="margin-top: 0px; margin-bottom: 0px; height: 97px;"></textarea>

</div>

<div class="col-sm-6 my-2">
<textarea class="form-control" id="activity" name="activity" placeholder="Enter Your Activities " required  style="margin-top: 0px; margin-bottom: 0px; height: 97px;"></textarea>

</div>


</div>
</div>
           <!--ENd Details---> <!--Start Details--->
<div class="card-header" style="background-color:#0c2663;color:white">
<h5 class="card-title">User Images</h5>
</div>
<div class="card">
<div class="row">

<div class="col-sm-12 my-2">
<input type="file" name="fileToUpload" id="fileToUpload" accept="image/*" required placeholder="Enter your name" class="form-control">
</div>

</div>
<div class="card-header" style="background-color:#0c2663;color:white">
<h5 class="card-title">Check Information</h5>
</div>
<div class="card">
<div class='col-12'>
<input type="checkbox" id="check"  required onclick="abc()"> User Information
</div>
<div class="col-sm-12 my-2">
<input type="text" name="pass"  placeholder="Enter File Password" class="form-control" required>
</div>
</div>
<div class="card-footer">
<input type="submit" value="Submit" name="submit" class="btn btn-success"> &nbsp&nbsp
<button type="reset" id="reset" class="btn btn-danger" onclick="abc()">Reset</button>
</div>
</div>
           <!--ENd Details--->

</div>
</form>
</div>
<?php
if(isset($_POST['submit']) && isset($_POST['email']) && isset($_POST['name']) && isset($_POST['number']))
{
    /*&& !empty($_POST['number']) && !empty($_POST['email']) && !empty($_POST['fname']) && !empty($_POST['mname']) && !empty($_POST['gender']) && !empty($_POST['address'])
&& !empty($_POST['sname']) && !empty($_POST['syear']) && !empty($_POST['sboard']) && !empty($_POST['hobby']) && !empty($_POST['work']) && !empty($_POST['skill']) && !empty($_POST['activity']) && !empty($_POST['pass']))
{*/
require('cv.php');
}
?>
</body>
<script>
function my()
{
    var a=document.getElementById('qual').value;
    if(a=='')
    {
        document.getElementById('10show').style.display="none";
        document.getElementById('12show').style.display="none";
        document.getElementById('gshow').style.display="none";
        document.getElementById('pshow').style.display="none";
    }
    else if(a=='10th')
    {
        document.getElementById('10show').style.display="block";
        document.getElementById('12show').style.display="none";
        document.getElementById('gshow').style.display="none";
        document.getElementById('pshow').style.display="none";
        
        /*$('#hname').attr("reuired",false);
        $('#hyear').attr("reuired",false);
        $('#hboard').attr("reuired",false);*/
    }
    else if(a=='12th')
    {
        document.getElementById('12show').style.display="block";
        document.getElementById('10show').style.display="block";
        document.getElementById('gshow').style.display="none";
        document.getElementById('pshow').style.display="none";
        document.getElementById("hname").required='true';
        document.getElementById("hboard").required='true';
        document.getElementById("hyear").required='true';
        document.getElementById("stream").required='true';
    }
    else if(a=='Graduation')
    {
        document.getElementById('gshow').style.display="block";
        document.getElementById('12show').style.display="block";
        document.getElementById('10show').style.display="block";
        document.getElementById('pshow').style.display="none";
        document.getElementById("stream").required='true';
        document.getElementById("hname").required='true';
        document.getElementById("hboard").required='true';
        document.getElementById("hyear").required='true';
        document.getElementById("gname").required='true';
        document.getElementById("guniver").required='true';
        document.getElementById("gyear").required='true';
        document.getElementById("gcourse").required='true';
    }
    else if(a=='Post Graduation')
    {
        document.getElementById('pshow').style.display="block";
        document.getElementById('12show').style.display="block";
        document.getElementById('gshow').style.display="block";
        document.getElementById('10show').style.display="block";
        document.getElementById("stream").required='true';
        document.getElementById("hname").required='true';
        document.getElementById("hboard").required='true';
        document.getElementById("hyear").required='true';
        document.getElementById("gname").required='true';
        document.getElementById("guniver").required='true';
        document.getElementById("gyear").required='true';
        document.getElementById("gcourse").required='true';
        document.getElementById("pcourse").required='true';
        document.getElementById("pyear").required='true';
        document.getElementById("pname").required='true';

    }
}
</script>
<script>
function number0(){
    var number=$('#number').val();
     if(number.length!=10)
     {
    $('#number').val('');
      toastr.error('Please Enter Valid Number','Error',{timeOut:2000});
	 return 0;  
     
     }
     if(number.length>10)
     {
        $('#number').val('');
      toastr.error('Please Enter Valid Number','Error',{timeOut:2000});
	 return 0;   
     } 
}
function mail()
{
    var email=$('#email').val();
    if(IsEmail(email)==false){
        $('#email').val('');
        toastr.error('Please Enter Valid Email','Error',{timeOut:2000});
	 return 0;
    }
}
function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!regex.test(email)) {
    return false;
  }else{
    return true;
  }
}
function school()
{
    var syear=$('#syear').val();
     if(syear.length!=4)
     {
    $('#syear').val('');
      toastr.error('Please Enter Valid Year','Error',{timeOut:2000});
	 return 0;  
     
     }
     if(syear.length>4)
     {
        $('#syear').val('');
      toastr.error('Please Enter Valid Year','Error',{timeOut:2000});
	 return 0;   
     }
}
function schoolper()
{
    var sper=$('#sper').val();
     
     if(sper.length>5)
     {
        $('#sper').val('');
      toastr.error('Please Enter Valid Percentage','Error',{timeOut:2000});
	 return 0;   
     }
}

function hs()
{
    var hyear=$('#hyear').val();
     if(hyear.length!=4)
     {
        $('#hyear').val('');
      toastr.error('Please Enter Valid Year','Error',{timeOut:2000});
	 return 0;   
     }
     if(hyear.length>4)
     {
        $('#hyear').val('');
      toastr.error('Please Enter Valid Year','Error',{timeOut:2000});
	 return 0;   
     }

}
function hsper()
{
    var hper=$('#hper').val();
     if(hper.length>5)
     {
        $('#hper').val('');
      toastr.error('Please Enter Valid percentages','Error',{timeOut:2000});
	 return 0;   
     }
     
}
function UG()
{
    var gyear=$('#gyear').val();
     if(gyear.length!=4)
     {
        $('#gyear').val('');
      toastr.error('Please Enter Valid Year','Error',{timeOut:2000});
	 return 0;   
     }
     if(gyear.length>4)
     {
        $('#gyear').val('');
      toastr.error('Please Enter Valid Year','Error',{timeOut:2000});
	 return 0;   
     }
}
function ugper()
{
    var gper=$('#gper').val();
     if(gper.length>5)
     {
        $('#gper').val('');
      toastr.error('Please Enter Valid percentages','Error',{timeOut:2000});
	 return 0;   
     }
     
}
function PG()
{
    var pyear=$('#pyear').val();
     if(pyear.length!=4)
     {
        $('#pyear').val('');
      toastr.error('Please Enter Valid Year','Error',{timeOut:2000});
	 return 0; 
       
     }
     if(pyear.length>4)
     {
        $('#pyear').val('');
      toastr.error('Please Enter Valid Year','Error',{timeOut:2000});
	 return 0;   
     }
}
function pgper()
{
    var pper=$('#pper').val();
     if(pper.length>5)
     {
        $('#pper').val('');
      toastr.error('Please Enter Valid percentages','Error',{timeOut:2000});
	 return 0;   
     }
     
}
</script>
<script>
function abc(){
   var name=$('#name0').val();
   var number=$('#number').val();
   var gender=$('#gender').val();
   var email=$('#email').val();
   var fname=$('#fname').val();
   var mname=$('#mname').val();
   var address=$('#address').val();
   var qual=$('#quals').val();
   var sname=$('#sname').val();
   var sboard=$('#sboard').val();
   var syear=$('#syear').val();
   var hname=$('#hname').val();
   var hboard=$('#hboard').val();
   var hyear=$('#hyear').val();
   var gyear=$('#gyear').val();
   var gname=$('#gname').val();
   var gcourse=$('#gcourse').val();
   var guniver=$('#guniver').val();
   var pcourse=$('#pcourse').val();
   var pname=$('#pname').val();
   var pyear=$('#pyear').val();
   var hobby=$('#hobby').val();
   var work=$('#work').val();
   var skill=$('#skill').val();
   var activity=$('#activity').val();
 
   if(name=='')
   {
    toastr.error('Please Enter Name','Error',{timeOut:2000});
	 return 0; 
   } 
   if(number=='')
   {
    toastr.error('Please Enter Number','Error',{timeOut:2000});
	 return 0; 
   } 
   if(email=='')
   {
    toastr.error('Please Enter Email','Error',{timeOut:2000});
	 return 0; 
   } 
   if(gender=='')
   {
    toastr.error('Please Enter Gender','Error',{timeOut:2000});
	 return 0; 
   } 
   if(fname=='')
   {
    toastr.error('Please Enter fname','Error',{timeOut:2000});
	 return 0; 
   } 
   if(mname=='')
   {
    toastr.error('Please Enter mname','Error',{timeOut:2000});
	 return 0; 
   } 
   if(address=='')
   {
    toastr.error('Please Enter address','Error',{timeOut:2000});
	 return 0; 
   } 
   if(sname=='')
   {
    toastr.error('Please Enter school name','Error',{timeOut:2000});
	 return 0; 
   } 
   if(syear=='')
   {
    toastr.error('Please Enter School Year','Error',{timeOut:2000});
	 return 0; 
   } 
   if(sboard=='')
   {
    toastr.error('Please Enter School Board Name','Error',{timeOut:2000});
	 return 0; 
   } 
   if(hobby=='')
   {
    toastr.error('Please Enter Your Hobby','Error',{timeOut:2000});
	 return 0; 
   } 
   if(work=='')
   {
    toastr.error('Please Enter Your Work Experience','Error',{timeOut:2000});
	 return 0; 
   } 
   if(skill=='')
   {
    toastr.error('Please Enter Your Skill','Error',{timeOut:2000});
	 return 0; 
   } 
   if(activity=='')
   {
    toastr.error('Please Enter Your Activities','Error',{timeOut:2000});
	 return 0; 
   } 
}
</script>
<script>
   function load0()
   {
    toastr.info('This Site Created By Sreyasi Basak','SREYASI BASAK',{timeOut:5000});   
   }
</script>
<script>
$(document).ready(function(){
 $(document).on('change', '#fileToUpload', function(){
  var name = document.getElementById("fileToUpload").files[0].name;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
  {
      $('#fileToUpload').val('');
   toastr.error('Invalid Image File','Error',{timeOut:2000});
   //location.href='upload2.php'; 
   return 0;
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("fileToUpload").files[0]);
  var f = document.getElementById("fileToUpload").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 500000)
  {
    $('#fileToUpload').val('');
    toastr.warning('File Size less than 500KB','Warning',{timeOut:3000}); 
    return 0;
  }
  
 });
});
</script>
</html>