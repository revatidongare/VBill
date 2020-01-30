<?php include 'config.php'?>
<div class="container-fluid actualcontent mb-5">
  <!-- Page Heading -->
  <div class="row mt-3">
     <div class="col-xl-8 col-md-10 mb-4 mx-auto">
       <p class="colortheme" style="letter-spacing: 3px;">YOUR SUBJECTS</p>
     </div>
   </div>
  <!-- Single Item -->
  <?php
    $email = $_SESSION['user_email'];
    $branch = $_SESSION['user_branch'];
    $year = "SELECT `year` FROM `registered_users` WHERE `email` = '$email'"; 
    $res_year = mysqli_query($con,$year);
    $row_year = mysqli_fetch_array($res_year);

    $user_year = $row_year['year'];
    
    if($user_year == 1){
        $i = 1;
        $subject = "SELECT * FROM `subject_master` WHERE `year` = '$user_year'";
        $res_subject = mysqli_query($con,$subject);
        while ($row_subject = mysqli_fetch_array($res_subject)) {
        ?>
        <div class="row mt-3">
           <div class="col-xl-8 col-md-10 mb-4 mx-auto">
                    <div class="card subjectcardshadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col-lg-8">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 colortheme">Subject <?php echo $i; ?></div>
                            <p><strong class="colorblack"><?php echo $row_subject['name'];?></strong></p>
                            <p class="subjectcardcontent">
                              <?php echo $row_subject['description'];?>
                            </p>
                          </div>
                          <div class="col-lg-4 text-center subjectcardbackground">
                            <a href="insempapers.php?q=<?php echo $row_subject['id'];?>" class="btn btn-theme-outline">View Papers</a>
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
        $i = 1;
        $subject = "SELECT * FROM `subject_master` WHERE `branch` = '$branch' AND `year` = '$user_year'";
        $res_subject = mysqli_query($con,$subject);
        while ($row_subject = mysqli_fetch_array($res_subject)) {
        ?>
        <div class="row mt-3">
           <div class="col-xl-8 col-md-10 mb-4 mx-auto">
                    <div class="card subjectcardshadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col-lg-8">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 colortheme">Subject <?php echo $i; ?></div>
                            <p><strong class="colorblack"><?php echo $row_subject['name'];?></strong></p>
                            <p class="subjectcardcontent">
                              <?php echo $row_subject['description'];?>
                            </p>
                          </div>
                          <div class="col-lg-4 text-center subjectcardbackground">
                            <a href="insempapers.php?q=<?php echo $row_subject['id'];?>" class="btn btn-theme-outline">View Papers</a>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>
        </div>
        <?php
        $i = $i + 1;
        }

    }

    mysqli_close($con);
  ?>
  <!-- Single Item -->
</div>