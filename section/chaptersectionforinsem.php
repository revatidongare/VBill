<?php
  
  include 'config.php';

  if(isset($_GET['q'])){

    $subject_id = $_GET['q'];

    $subject = "SELECT * FROM `subject_master` WHERE `id` = '$subject_id'";
    $res_subject = mysqli_query($con,$subject);
    $row_subject = mysqli_fetch_assoc($res_subject);
  }else{
    header('location:index.php');
  }

?>
<div class="container-fluid actualcontent mb-5">
  <!-- Page Heading -->
  <div class="row">
     <div class="col-xl-8 col-lg-8 col-md-10 mx-auto">
       <h3 class="colorblack mb-4"><?php echo $row_subject['name']; ?></h3>
       <p class="colortheme subjectcardcontent" style="letter-spacing: 2px;">UNIVERSITY QUESTION PAPERS</p>
       <hr>
     </div>
   </div>
   <?php
         $i = 1;
         $insem = "SELECT * FROM `insem_master` WHERE `subject_id` = '$subject_id'";
         $res_insem = mysqli_query($con,$insem);
         $count = mysqli_num_rows($res_insem);
         if($count > 0){
        while ($row_insem = mysqli_fetch_array($res_insem)) {
   ?>
  <div class="row mt-3">
           <div class="col-xl-8 col-md-10 mb-4 mx-auto">
                    <div class="card subjectcardshadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col-lg-8">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 colortheme">Paper <?php echo $i; ?></div>
                            <p><strong class="colorblack"><?php echo $row_insem['name'];?></strong></p>
                          </div>
                          <div class="col-lg-4 text-center subjectcardbackground">
                            <a href="mainpdf.php?q=<?php echo $row_insem['notes'];?>" class="btn btn-theme-outline">Read Paper</a>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>
        </div>
  <?php

    $i = $i + 1;
  
  }
}else{
  ?>
  <div class="row mt-3">
           <div class="col-xl-8 col-md-10 mb-4 mx-auto">
                    <div class="card subjectcardshadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col-lg-8">
                            <p><strong class="colorblack">Sorry, We do not have papers for this subject!</strong></p>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>
        </div>
  <?php  
}
   mysqli_close($con);


  ?>

</div>
