<?php if(isset($_GET['q'])){
    $Bill_no = $_GET['q'];
  }
  else{
    header('location:show_bill.php');
  }?>
<?php if(isset($_POST['billno'])){
    $Bill_no = $_POST['billno'];
  }?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php';?>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div>
            <?php   
          include 'config.php';
          $query = "SELECT * FROM `Table 1` WHERE `Billno` = '$Bill_no'";
          $res = mysqli_query($con,$query);
          $row = mysqli_fetch_array($res);
     ?>
<div class="col-lg-12">
  <table class="table table-borderless">
                  <tbody>
                    <thead>
                    <tr>
                      <td align="center"><img src="img/logo.png"> <br>Managed By RAS Hospitalities
                    <br><br>
                  GST NO: 27AAPFR9534F1ZP PAN NO:AAPFR9534F</td>
                      
                      <td><i class="fa fa-map-marker" aria-hidden="true" style="padding-right: 1.5rem;"></i>Ganesh Corner, Opp Kumar Resort, <br>Old Mumbai Pune Highway,Lonavla<br>
              <i class="fa fa-phone" aria-hidden="true" style="padding-right: 1.5rem;"></i>Tel:02114-270055 / 8380004198 / <br>8380096375<br>
              <i class="fa fa-envelope" aria-hidden="true" style="padding-right: 1.5rem;"></i> krushnairesort@gmail.com<br>
              <i class="fa fa-globe" aria-hidden="true" style="padding-right: 1.5rem;"></i>www.krushnairesort.com </td>
                    </tr>
                  </thead>
                  </tbody>
                </table>
</div>
<!--
          <div class="row">
            <div class="col-lg-7">
                <center>
                 <img src="img/logo.png">
                <br>Managed By RAS Hospitalities
                    <br><br>
                  GST NO: 27AAPFR9534F1ZP PAN NO:AAPFR9534F
                </center>
              </div>
            <div class="col-lg-4">
              <i class="fa fa-map-marker" aria-hidden="true" style="padding-right: 1.5rem;"></i>Ganesh Corner, Opp Kumar Resort, <br>Old Mumbai Pune Highway,Lonavla<br>
              <i class="fa fa-phone" aria-hidden="true" style="padding-right: 1.5rem;"></i>Tel:02114-270055 / 8380004198 / <br>8380096375<br>
              <i class="fa fa-envelope" aria-hidden="true" style="padding-right: 1.5rem;"></i> krushnairesort@gmail.com<br>
              <i class="fa fa-globe" aria-hidden="true" style="padding-right: 1.5rem;"></i>www.krushnairesort.com
            </div>
         </div>
-->
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800"></h1>
          <p class="mb-4"></p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
              <table class="table table-bordered" id="Table" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Bill No.</th>
                      <th colspan="2"><?php   echo $row['Billno'];?></th>
                      <!-- <th></th> -->
                     
                      <th colspan="2">Check-in:<?php   echo $row['Check_In'];?> <->
                      Check-Out: <?php   echo $row['Check_Out'];?></th>
                      <th colspan="2">10:14</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    <tr>
                      <td>Name:</td>
                      <td colspan="4"><?php   echo $row['Name'];?></td>
                      <!-- <td></td>
                      <td></td> -->
                      <td >RYE</td>
                      <!-- <td></td> -->
                    </tr>
                    <tr>
                      <td>Company:</td>
                      <td colspan="4"><?php   echo $row['Company_Name'];?></td>
                      <!-- <td></td>
                      <td></td> -->
                      <td>Room No.</td>
                      <td><?php   echo $row['Room_No.'];?></td>
                    </tr>
                    <tr>
                      <td>Cust GST ID:</td>
                      <td colspan="4"><?php   echo $row['GST_NO'];?></td>
                      <!-- <td>3202</td>
                      <td>ROOM TARIF Px.3</td> -->
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Address:</td>
                      <td colspan="4"></td>
                     <!--  <td></td>
                      <td></td> -->
                      <td>Category: </td>
                      <td>DEL</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td colspan="4"></td>
                      <!-- <td></td>
                      <td></td> -->
                      <td>Room Rt.5</td>
                      <td>5500</td>
                    </tr>
                    <tr>
                      <td>City:</td>
                      <td colspan="4"></td>
                      <!-- <td></td>
                      <td></td> -->
                      <td>Reg No.</td>
                      <td><?php   echo $row['Reg_No'];?></td>
                    </tr>
                  </tbody>
                </table>
            </div>

            <div class="card-body" style="padding-top: 0;">
              <div class="table-responsive">
                <table class="table table-bordered" id="Table" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>VDate</th>
                      <th>Vouc.</th>
                      <th>V.No.</th>
                     
                      <th>Description </th>
                      <th>Amount</th>
                      <th>Day Tot.</th>
                    </tr>
                  </thead>
                  <!-- <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Salary</th>
                    </tr>
                  </tfoot> -->
                
                  <tbody>
                    <tr>
                      <td>01/DEC'19</td>
                      <td>TARIF</td>
                      <td>3199</td>
                      <td>ROOM TARIF Px.4</td>
                      <td>3125</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>TARIF</td>
                      <td>3201</td>
                      <td>ROOM TARIF Px.3</td>
                      <td>3125</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>TARIF</td>
                      <td>3202</td>
                      <td>ROOM TARIF Px.3</td>
                      <td>3125</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>TARIF</td>
                      <td>3200</td>
                      <td>ROOM TARIF Px.3</td>
                      <td>3125</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>SGST</td>
                      <td>3197</td>
                      <td>SGST on TARIF 6%</td>
                      <td>187.5</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>SGST</td>
                      <td>3200</td>
                      <td>SGST on TARIF 6%</td>
                      <td>187.5</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>SGST</td>
                      <td>3198</td>
                      <td>SGST on TARIF 6%</td>
                      <td>187.5</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>SGST</td>
                      <td>3199</td>
                      <td>SGST on TARIF 6%</td>
                      <td>187.5</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>CGST</td>
                      <td>3198</td>
                      <td>CGST on TARIF 6%</td>
                      <td>187.5</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>CGST</td>
                      <td>3200</td>
                      <td>CGST on TARIF 6%</td>
                      <td>187.5</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>CGST</td>
                      <td>3199</td>
                      <td>CGST on TARIF 6%</td>
                      <td>187.5</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>CGST</td>
                      <td>3197</td>
                      <td>CGST on TARIF 6%</td>
                      <td>187.5</td>
                      <td></td>
                    </tr>
                    
                    <tr>
                      <td></td>
                      <td colspan="4">Total</td>
                      <!-- <td></td> -->
                      <!-- <td> </td>
                      <td></td> -->
                      <td>14000</td>
                    </tr>
                    <tr>
                      <td colspan="4">Bill Amount: </td>
                      <!-- <td></td>
                      <td></td>
                      <td></td> -->
                      <td><?php   echo $row['TOTAL'];?></td>
                      <td></td>
                    </tr>

                    <tr>
                      <td>01/DEC'19</td>
                      <td>ADVAN</td>
                      <td>1846</td>
                      <td>Advance</td>
                      <td>-14000</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td colspan="4">Net Payable Amount: </td>
                      <!-- <td></td>
                      <td></td>
                      <td></td> -->
                      <td>0.00</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td colspan="2">Payment Detail </td>
                      <!-- <td></td> -->
                      <td>Amount</td>
                      <td>Card No./Company Name</td>
                      <td>Card Invoice</td>
                      <td>Card Batch</td>
                    </tr>
                    
                  </tbody>
                </table>
 
          <div class="col-lg-4">
                <table class="table table-bordered">
                  <tbody>
                    <thead>
                    <tr>
                      <th>TARF</th>
                      <th>SGST.</th>
                      <th>CGST</th>
                      <th>ADVAN </th>
                    </tr>
                    <tr>
                      <th>12500</th>
                      <th>750</th>
                      <th>750</th>
                      <th>-14000 </th>
                    </tr>
                  </thead>
                  </tbody>
                </table>
<br>
<p>BY: <br><br><br></p>
</div>

<div class="col-lg-12">
  <table class="table table-borderless">
                  <tbody>
                    <thead>
                    <tr>
                      <td >Bill Clerk Signature</td>
                      <!-- <th colspan="2"></th> -->
                      <!-- <th>CGST</th> -->
                      <td align="right">Guest Signature </td>
                    </tr>
                  </thead>
                  </tbody>
                </table>
</div>
  <!-- <div class="col-lg-6"><p>Bill Clerk Signature</p></div>
  <div class="col-lg-12" align="right">Guest Signature</div> -->
 
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

<!--
      <div class="col-xl-6 col-md-2 mb-4 text-right">
                    <a  href= "invoice.php" class="btn btn-danger" target="_blank"><i class="fas fa-print "></i> Print Invoice</a>
                 </div>
      </div>
-->
      
       <script>
        window.print();
      </script>
      
  
      <!-- End of Main Content -->

      <!-- Footer -->

      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  

  <!-- Logout Modal-->
 
  <?php include 'includes/scripts.php'?>
</body>

</html>
