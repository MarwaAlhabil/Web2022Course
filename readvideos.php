<?php 
include ('config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quran App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 
   <div class="app-vedio">


   <?php $query ="SELECT * from videos";
$result=mysqli_query($con,$query) ;
if(mysqli_num_rows($result)>0){
// while ($row =mysqli_fetch_assoc($result)){
//   echo '<tr>' . '<td>' . $row['id'] . '</td>' . '<td>' . $row['email'] . '</td>' . '<td>' . $row['password']  . '</td>' . '<td><a href="editdb.php?id=' . $row['id'] . '">Edit</a></td>' . '<td><form action="deldb.php" method="POST"><input type="hidden" name="id" value="' . $row['id'] . '"> <button type="button" class="btn btn-danger" id="delete-btn"0>DELETE</button> </form></td>' . '</tr>';
 //};

while($row=mysqli_fetch_assoc($result)){

    $location=$row['location'];
    $subject=$row['subject'];
    $title=$row['title'];

       
        echo' <div class="vedio"> ';

        echo'  <video src="'.$location.'" class="vedio-player"></video>';

        echo' <div class="footer"> ';

        echo'  <div class="footer-text"> ';

        echo' <h3>Marwa Al-habil</h3> ';
        echo' <p class="description"> '.$subject.'</p> ';
        echo'  <div class="img-marq"> ';
        echo' <a href="http://localhost/quranapp/upload.php"><img src="images/ups.png" > </a>';
        echo' <marquee >'.$title.'</marquee> ';
        echo'  </div> ';

        echo'  </div> ';
        echo'  <img src="images/disc.png"  class="image-play"> ';
        echo' </div> ';

        echo'  </div> ';

}


};



    // <?php

    // $fechAllVidos=mysqli_query($con,"SELECT * videos ORDER BY id DESC ");
    // while($row=mysqli_fetch_assoc($fechAllVidos)){

    //     $location=$row['location'];
    //     $subject=$row['subject'];
    //     $title=$row['title'];

           
    //         echo' <div class="vedio"> ';

    //         echo'  <video src="'.$location.'" class="vedio-player"></video>';
  
    //         echo' <div class="footer"> ';

    //         echo'  <div class="footer-text"> ';

    //         echo' <h3>Marwa Al-habil</h3> ';
    //         echo' <p class="description"> '.$subject.'</p> ';
    //         echo'  <div class="img-marq"> ';
    //         echo' <a href="http://localhost/quranapp/upload.php"><img src="images/ups.png" > </a>';
    //         echo' <marquee >'.$title.'</marquee> ';
    //         echo'  </div> ';

    //         echo'  </div> ';
    //         echo'  <img src="images/disc.png"  class="image-play"> ';
    //         echo' </div> ';

    //         echo'  </div> ';

    // }

      
 
      
    //  ?>

   </div> 




<script>
    const vedios=document.querySelectorAll('video');
    for(const video of vedios ){
        video.addEventListener('click',function (){
            if(video.paused){
                video.play();
            }
            else{
                video.pause();
            }

        })
    }
</script>
</body>
</html>

