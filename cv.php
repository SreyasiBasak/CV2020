<?php
$name=strip_tags(strtoupper($_POST['name']));
$number=strip_tags(strtoupper($_POST['number']));
$email=strip_tags(strtoupper($_POST['email']));
$gender=strip_tags(strtoupper($_POST['gender']));
$fname=strip_tags(strtoupper($_POST['fname']));
$mname=strip_tags(strtoupper($_POST['mname']));
$address=strip_tags(strtoupper($_POST['address']));
$education=strip_tags(strtoupper($_POST['education']));
$syear=strip_tags(strtoupper($_POST['syear']));
$sname=strip_tags(strtoupper($_POST['sname']));
$hyear=strip_tags(strtoupper($_POST['hyear']));
$hname=strip_tags(strtoupper($_POST['hname']));
$gyear=strip_tags(strtoupper($_POST['gyear']));
$guniver=strip_tags(strtoupper($_POST['guniver']));
$gname=strip_tags(strtoupper($_POST['gname']));
$gcourse=strip_tags(strtoupper($_POST['gcourse']));
$pcourse=strip_tags(strtoupper($_POST['pcourse']));
$pname=strip_tags(strtoupper($_POST['pname']));
$pyear=strip_tags(strtoupper($_POST['pyear']));
$hobby=strip_tags(strtoupper($_POST['hobby']));
$work=strip_tags(strtoupper($_POST['work']));
$skill=strip_tags(strtoupper($_POST['skill']));
$activity=strip_tags(strtoupper($_POST['activity']));
$sper=strip_tags(strtoupper($_POST['sper']));
$pper=strip_tags(strtoupper($_POST['pper']));
$gper=strip_tags(strtoupper($_POST['gper']));
$hper=strip_tags(strtoupper($_POST['hper']));
$stream=strip_tags(strtoupper($_POST['stream']));
$hboard=strip_tags(strtoupper($_POST['hboard']));
$sboard=strip_tags(strtoupper($_POST['sboard']));
$pass=strip_tags($_POST['pass']);
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists


// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    $_SESSION['file']=$target_file;
    $_SESSION['name']=$name;
    $_SESSION['number']=$number;
    $_SESSION['email']=$email;
    $_SESSION['gender']=$gender;
    $_SESSION['fname']=$fname;
    $_SESSION['mname']=$mname;
    $_SESSION['address']=$address;
    $_SESSION['education']=$education;
    $_SESSION['sname']=$sname;
    $_SESSION['syear']=$syear;
    $_SESSION['hyear']=$hyear;
    $_SESSION['hname']=$hname;
    $_SESSION['gyear']=$gyear;
    $_SESSION['gname']=$gname;
    $_SESSION['guniver']=$guniver;
    $_SESSION['gcourse']=$gcourse;
    $_SESSION['pcourse']=$pcourse;
    $_SESSION['pname']=$pname;
    $_SESSION['pyear']=$pyear;
    $_SESSION['hobby']=$hobby;
    $_SESSION['work']=$work;
    $_SESSION['skill']=$skill;
    $_SESSION['activity']=$activity;
    $_SESSION['sper']=$sper;
    $_SESSION['gper']=$gper;
    $_SESSION['hper']=$hper;
    $_SESSION['pper']=$pper;
    $_SESSION['hstream']=$stream;
    $_SESSION['hboard']=$hboard;
    $_SESSION['sboard']=$sboard;
    $_SESSION['pass']=$pass;
    ?>
    <script>
    toastr.success('RESUME Create Success','Success',{timeOut:2000});
    </script>
    <?php
    echo "<script>location.href='form.php'</script>";
    
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>