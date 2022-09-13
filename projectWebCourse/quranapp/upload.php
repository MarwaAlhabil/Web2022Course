<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@500;600&display=swap" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload video</title>
    <link rel="stylesheet" href="styl.css">
   
    <?php 
    
    include('config.php');
    $subject='';
    $title='';
    $location='';

    if(isset($_POST['subject'])){
        $subject = $_POST['subject'];
    }

    if(isset($_POST['title'])){
        $title = $_POST['title'];
    }

    if(isset($_POST['location'])){
        $title = $_POST['location'];
    }

    if(isset($_POST['but_upload'])){
        $maxsize = 5242880; // 5 ميجا بايت حجم الفيديو الكلي المرفوع
        $name=$_FILES['file']['name']; 
        $target_dir="videos/";
        $target_file= $target_dir . $_FILES['file']['name'] ;
        $videoFileType=strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $extenstions_arr=array("mp4","mpeg","avi","3gp");
        if(in_array($videoFileType,$extenstions_arr)){
            if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"]==0)){
                echo"<center><h3 class='faild'>الملف كبير جدا يجب ان يكون حجم الفيديو اقل من 5 ميجا بايت</h3></center>";
            }
            else{
                //مرحلة الرفع
                if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
                     $query="INSERT INTO videos(name,location,subject,title) VALUES('.$name.','.$location.','$subject','$title')";
                     mysqli_query($con,$query);
                     echo"<center><h3 class='succes'>تم رفع الفيديو</h3></center>";
                }
            }
        }
        else{
            echo"<center><h3 class='choose'> الرجاء قم بتحديد فيديو</h3></center>";
        }
   
    }

    ?>
  
    
</head>
<body>
    <div class="container">

          <center>
             <img src="images/logo.png" >
          </center>
          <div class="form">

              <form method="post" enctype="multipart/form-data">
                <input type="file" name="file" ><br>
                <input type="text" name="subject" id="subject" placeholder="اكتب عنوانا للفيديو"><br>
                <input type="text" name="title" id="title" placeholder="وصف عن الفيديو"><br>
                <input type="submit" value="رفع الفيديو" name="but_upload"><br>
                <a href="http://localhost/quranapp/readvideos.php" class="linko">الرجوع للتطبيق</a>

              </form>

          </div>

    </div>
</body>
</html>