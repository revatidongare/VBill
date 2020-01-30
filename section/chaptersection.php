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
  <?php
       
        $chapter = "SELECT * FROM `chapter_master` WHERE `subject_id` = '$subject_id'";
        $res_chapter = mysqli_query($con,$chapter);
        $count = mysqli_num_rows($res_chapter);
  ?>
  <!-- Page Heading -->
  <div class="row">
     <div class="col-xl-8 col-lg-8 col-md-10 mx-auto">
       <h3 class="colorblack mb-4"><?php echo $row_subject['name']; ?></h3>
       <p class="colortheme subjectcardcontent" style="letter-spacing: 2px;">TOTAL CHAPTERS : <?php echo $count; ?></p>
       <hr>
     </div>
   </div>
   <?php
         $i = 1;
        while ($row_chapter = mysqli_fetch_array($res_chapter)) {
   ?>
  <div class="row mt-3">
     <div class="col-xl-8 col-lg-8 col-md-10 mb-4 mx-auto">
              <div class="card subjectcardshadow2 h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col-lg-12">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 colortheme">Chapter <?php echo $i;?></div>
                      <p><strong class="colorblack"><?php echo $row_chapter['name'];?></strong></p>
                      <p class="subjectcardcontent mb-5">
                        <?php echo $row_chapter['description'];?>
                      </p>
                    </div>
                  </div>
                  <hr>
                  <div class="row no-gutters align-items-center">
                    <div class="col-lg-4 text-left subjectcardbackground mt-2">
                      <a href="mainpdf.php?q=<?php echo $row_chapter['notes'];?>" class="btn btn-theme-outline smallbuttonconent">Read Summary <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="col-lg-4 text-left subjectcardbackground mt-2">
                      <a href="mainpdf.php?q=<?php echo $row_chapter['notes'];?>" class="btn btn-theme-outline smallbuttonconent">Read Q&A <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="col-lg-4 text-left subjectcardbackground mt-2">
                      <a href="mainpdf.php?q=<?php echo $row_chapter['notes'];?>" class="btn btn-theme-outline smallbuttonconent">Question Papers <i class="fas fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
      </div>
  </div>
  <?php

    $i = $i + 1;
  
  }
   mysqli_close($con);


  ?>

</div>
