
<!DOCTYPE html>
<html lang="en">

<head>
  <title>vBill - Dashboard</title>
  <?php include 'includes/head.php';?>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include 'includes/sidebar.php'; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content" class="maincontent">

        <!-- Topbar -->
        <?php include 'includes/navbar.php';?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <?php include 'config.php'?>
            <div class="container-fluid actualcontent mb-5">
              <!-- Page Heading -->
              <div class="row mt-3">
                 <div class="col-xl-10 col-md-8 mb-4 mx-auto">
                   <p class="colortheme" style="letter-spacing: 3px;">MANAGE GUESTS</p>
                 </div>
<!--                  <div class="col-xl-2 col-md-2 mb-4 ">
                    <a href="#" class="btn btn-theme-outline" data-toggle="modal" data-target="#add_branch">+ Add Guest</a>
                 </div> -->
               </div>
               <!--<div class="row mt-3">
                  <?php   if(isset($_GET['q'])){
                          if($_GET['q'] == 1){
                            ?>
                              <div class="col-xl-11 col-md-10 mb-4 mx-auto bg-success">
                                  <p class="py-2" style="letter-spacing: 3px;color:white;margin-bottom: 0px;">GUEST ADDED SUCCESSFULLY!</p>
                              </div>  
                            <?php
                          }
                          if($_GET['q'] == 2){
                            ?>
                              <div class="col-xl-11 col-md-10 mb-4 mx-auto bg-danger">
                                  <p class="py-2" style="letter-spacing: 3px;color:white;margin-bottom: 0px;">PROBLEM IN ADDING GUEST</p>
                              </div>  
                            <?php
                          }
                          if($_GET['q'] == "updated"){
                            ?>
                              <div class="col-xl-11 col-md-10 mb-4 mx-auto bg-success">
                                  <p class="py-2" style="letter-spacing: 3px;color:white;margin-bottom: 0px;">GUEST UPDATED.</p>
                              </div>  
                            <?php
                          }
                          if($_GET['q'] == "notupdated"){
                            ?>
                              <div class="col-xl-11 col-md-10 mb-4 mx-auto bg-danger">
                                  <p class="py-2" style="letter-spacing: 3px;color:white;margin-bottom: 0px;">PROBLEM IN UPDATING GUEST</p>
                              </div>  
                            <?php
                          }

                        } 
                  ?>
                   
               </div>-->
              <!-- Single Item -->

                    <div class="row mt-3">
                       <div class="col-xl-12 col-md-10 mb-4 mx-auto">
                          <div class="card shadow mb-4">
                            <div class="card-body">
                              <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                  <thead>
                                    <tr>
                                      <th>Reg. No.</th>
                                      <th>Billno</th>
                                      <th>Room No.</th>
                                      <th>Name</th>
                                      <th>Company Name</th>
                                      <th>Check In</th>
                                      <th>Check Out</th>
                                      <th>No. of Days</th>
                                      <th>No. of Rooms</th>
                                      <th>NORS</th>
                                      <th>GST No.</th>
                                      <th>Per Day Tariff</th>
                                      <th>Room Tariff</th>
                                      <th>Room Tariff</th>
                                      <th>CGST 6%</th>
                                      <th>SGST 6%</th>
                                      <th>Room Tariff</th>
                                      <th>CGST 9%</th>
                                      <th>SGST 9%</th>
                                      <th>R/S</th>
                                      <th>Total</th>
                                      <th>GST</th>
                                      <!-- <th>Details</th>
                                      <th>Update</th>
                                      <th>Delete</th> -->
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      $query = "SELECT * FROM `table 1` WHERE 1";
                                      $res = mysqli_query($con,$query);
                                      while ($row = mysqli_fetch_array($res)) {
                                    ?>
                                    <tr>
                                      <td><?php echo $row['Reg_No'];?></td>
                                      <td><a href="show_bill.php?q=<?php echo $row['Billno'];?>"><?php echo $row['Billno'];?></a></td>
                                      <td><?php echo $row['Room_No.']; ?></td>
                                      <td><?php echo $row['Name']; ?></td>
                                      <td><?php echo $row['Company_Name']; ?></td>
                                      <td><?php echo $row['Check_In']; ?></td>
                                      <td><?php echo $row['Check_Out']; ?></td>
                                      <td><?php echo $row['No_of_Days']; ?></td>
                                      <td><?php echo $row['No_of_Rooms']; ?></td>
                                      <td><?php echo $row['NORS']; ?></td>
                                      <td><?php echo $row['GST_NO']; ?></td>
                                      <td><?php echo $row[' Per_day_tariff']; ?></td>
                                      <td><?php echo $row['ROOM_TARIFF']; ?></td>
                                      <td><?php echo $row['ROOM_TARIFF1']; ?></td>
                                      <td><?php echo $row['CGST_6%']; ?></td>
                                      <td><?php echo $row['SGST_6%']; ?></td>
                                      <td><?php echo $row['ROOM_TARIFF2']; ?></td>
                                      <td><?php echo $row['CGST_9%']; ?></td>
                                      <td><?php echo $row['SGST_9%']; ?></td>
                                      <td><?php echo $row['R/S']; ?></td>
                                      <td><?php echo $row['TOTAL']; ?></td>
                                      <td><?php echo $row['GST']; ?></td>
                                      <!--<td><a class="btn btn-success" href="addbill.php?q=<?php echo $row['id'];?>">Details</a></td>
                                      <td><button class="btn btn-theme" name="update" id="update" data-toggle="modal" data-target="#update_branch" onclick="sendUpdate(<?php echo $row['id']; ?>)">Update</button></td>
                                      <td><a class="btn btn-danger" href="delete.php?q=<?php echo $row['id'];?>&delete=user" >Delete</a></td>-->
                                    </tr>
                                  <?php } ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                      </div>
                       </div>
                    </div>
              <!-- Single Item -->
            </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include 'includes/footer.php';?>
      <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <!-- <div class="modal fade" id="add_branch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title" id="exampleModalLabel">Add New Guest</h6>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="back.php" method="post">
        <div class="modal-body">
            <p class="colortheme text-center">Personal Details</p>
            <div class="form-row">
             <div class="col-lg-12">
             <label for="name">Guest Name</label>
             <input type="text" name="name" class="form-control" placeholder="Enter guest name.."  required>
             </div>
            </div>
            <div class="form-row mt-2">
             <div class="col-lg-12">
             <label for="name">Guest Address</label>
             <input type="text" name="address" class="form-control" placeholder="Enter guest name.."  required>
             </div>
            </div>
            <div class="form-row mt-2">
                <div class="col-lg-12">
                <label for="invoiceno">Invoice Number</label>
                <input type="text" name="invoiceno" class="form-control" placeholder="Enter invoice number.." required>
                </div> 
            </div>
            <div class="form-row mt-2">
                <div class="col-lg-6">
                <label for="invoiceno">Arrival Date</label>
                <input type="date" name="adate" class="form-control" placeholder="Enter arrival date" required>
                </div>
                <div class="col-lg-6">
                <label for="invoicedate">Departure Date</label>
                <input type="date" name="ddate" class="form-control" placeholder="Enter departure date" required>
                </div>  
            </div>
            <div class="form-row mt-2">
                <div class="col-lg-6">
                <label for="nationality">Nationality</label>
                <input type="text" name="nationality" class="form-control" placeholder="Enter nationality" required>
                </div>
                <div class="col-lg-6">
                <label for="roomnights">Room Nights</label>
                <input type="number" name="roomnights" class="form-control" placeholder="Enter no of nights" required>
                </div>  
            </div>
            <div class="form-row mt-2">
                <div class="col-lg-6">
                <label for="invoiceno">Room Type</label>
                <select name="roomtype" class="form-control">
                    <option value="AC Super Deluxe">AC Super Deluxe</option>
                </select>
                </div>
                <div class="col-lg-6">
                <label for="invoicedate">Plan</label>
                <select name="plan" class="form-control">
                    <option value="EP">EP</option>
                </select>                
                </div>  
            </div>
            <div class="form-row mt-2">
                <div class="col-lg-6">
                <label for="invoiceno">Check In</label>
                <input type="time" name="checkin" class="form-control" required>
                </div>
                <div class="col-lg-6">
                <label for="invoicedate">Check Out</label>
                <input type="time" name="checkout" class="form-control" required>
                </div>  
            </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-theme" name="add_guest">+ Add Guest</button>
        </div>
         </form>
      </div>
    </div>
  </div> -->

 <!-- <div class="modal fade" id="update_branch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title" id="exampleModalLabel">Update Guest</h6>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="back.php" method="post">
        <div class="modal-body">
            <p class="colortheme text-center">Personal Details</p>
            <div class="form-row">
             <div class="col-lg-12">
             <label for="name">Guest Name</label>
             <input type="text" name="name" id="name" class="form-control" placeholder="Enter guest name.."  required>
             </div>
            </div>
            <div class="form-row mt-2">
             <div class="col-lg-12">
             <label for="name">Guest Address</label>
             <input type="text" name="address" id="address" class="form-control" placeholder="Enter PAN number.."  required>
             </div>
            </div>
            <div class="form-row mt-2">
                <div class="col-lg-6">
                <label for="invoiceno">Invoice Number</label>
                <input type="text" name="invoiceno" id="invoiceno" class="form-control" placeholder="Enter invoice number.." required>
                </div>
                <div class="col-lg-6">
                <label for="invoicedate">Invoice Date</label>
                <input type="date" name="invoicedate" id="invoicedate" class="form-control" required>
                </div>  
            </div>
            <div class="form-row mt-2">
                <div class="col-lg-6">
                <label for="invoiceno">Arrival Date</label>
                <input type="date" name="adate" id="adate" class="form-control" placeholder="Enter arrival date" required>
                </div>
                <div class="col-lg-6">
                <label for="invoicedate">Departure Date</label>
                <input type="date" name="ddate" id="ddate" class="form-control" placeholder="Enter departure date" required>
                </div>  
            </div>
            <div class="form-row mt-2">
                <div class="col-lg-6">
                <label for="nationality">Nationality</label>
                <input type="text" name="nationality" id="nationality" class="form-control" placeholder="Enter nationality" required>
                </div>
                <div class="col-lg-6">
                <label for="roomnights">Room Nights</label>
                <input type="number" name="roomnights" id="roomnights" class="form-control" placeholder="Enter no of nights" required>
                </div>  
            </div>
            <div class="form-row mt-2">
                <div class="col-lg-6">
                <label for="invoiceno">Room Type</label>
                <select name="roomtype" id="roomtype" class="form-control" >
                    <option value="AC Super Deluxe">AC Super Deluxe</option>
                </select>
                </div>
                <div class="col-lg-6">
                <label for="invoicedate">Plan</label>
                <select name="plan" id="plan" class="form-control">
                    <option value="EP">EP</option>
                </select>
                </div>  
            </div>
            <div class="form-row mt-2">
                <div class="col-lg-6">
                <label for="invoiceno">Check In</label>
                <input type="time" name="checkin" id="checkin" class="form-control" required>
                </div>
                <div class="col-lg-6">
                <label for="invoicedate">Check Out</label>
                <input type="time" name="checkout" id="checkout" class="form-control" required>
                <input type="hidden" name="userid" id="userid">
                </div>  
            </div>
            
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-theme" name="update_guest">+ Update Guest</button>
        </div>
         </form>
      </div>
    </div>
  </div>-->

  <?php include 'includes/script.php';?>
  <script>
    function sendUpdate(id){
      $.ajax({
        url: "back.php",
        method: "POST",
        data: {id: id, update: "guest"}, 
        success: function(result){
          var data = JSON.parse(result)
          $("#Reg_No").val(data['Reg_No'])
          $("#Billno").val(data['Billno'])
          $("#Room_No.").val(data['Room_No.'])
          $("#Name").val(data['Name'])
          $("#Company_Name").val(data['Company_Name'])
          $("#Check_In").val(data['Check_In'])
          $("#Check_Out").val(data['Check_Out'])
          $("#No_of_Days").val(data['No_of_Days'])
          $("#No_of_Rooms").val(data['No_of_Rooms'])
          $("#NORS").val(data['NORS'])
          $("#GST_NO").val(data['GST_NO'])
          $("#Per_day_tariff").val(data['Per_day_tariff'])
          $("#ROOM_TARIFF").val(data['ROOM_TARIFF'])
          $("#ROOM_TARIFF1").val(data['ROOM_TARIFF1'])
          $("#CGST_6%").val(data['CGST_6%'])
          $("#CGST_6%").val(data['SGST_6%'])
          $("#ROOM_TARIFF2").val(data['ROOM_TARIFF2'])
          $("#CGST_9%").val(data['CGST_9%'])
          $("#CGST_9%").val(data['CGST_9%'])
          $("#R/S").val(data['R/S'])
          $("#TOTAL").val(data['TOTAL'])
          $("#GST").val(data['GST'])
        }
      });
    }
  </script>

</body>

</html>
