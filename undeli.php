<?php
    session_start();
    if($_SESSION['SESS_FIRST_NAME']=="")
    {
        header('location:admin.php');
        
    }
?>
<?php

require 'config.php';

  if (isset($_REQUEST['btnchange']))
    {
      $qry=$pdo->prepare("UPDATE users set DeliveryStatus=:status WHERE id=:id");

      echo $status=$_REQUEST['status'];
      echo $id=$_REQUEST['id'];

      $qry->bindParam(":status", $status, PDO::PARAM_STR);
      $qry->bindParam(":id", $id, PDO::PARAM_INT);

      $qry->execute();


      echo "<script language=\"javascript\">window.location.href=\"undeli.php\";</script>";
    }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>admin site</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="bootstrap4/js/jquery-1.12.4.js"></script>
    <script src="bootstrap4/js/bootstrap.js"></script>
  </head>
  <body>
        <?php

               $pdo_statement = $pdo->prepare("SELECT * FROM users where DeliveryStatus='undelivery'");
               $pdo_statement->execute();
               $result = $pdo_statement->fetchAll();      
        ?>

        ?>

          <nav class="navbar navbar-light bg-primary">
            <h3 class="text-white">Undelivered List</h3>
            <form class="form-inline" >
            <button type="button" class="btn btn-primary bc" style="background-color:lightblue;"><a href="deli.php" style="color:black;">Delivered List</a></button>
            <button type="button" class="btn btn-primary bc" style="background-color:lightblue;"><a href="logout.php" style="color:black;">Logout</a></button>
          </form>
        </nav><br><br>





          <table class="table table-striped">
            <thead>
              <tr>
                  <th scope="col">No</th>
                  <th scope="col">Username</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Email</th>
                  <th scope="col">Township</th>
                  <th scope="col">Address</th>
                  <th scope="col">Date</th>
                  <th scope="col">Delivery Status</th>
                  <th socpe="col">Action</th>

              </tr>
            </thead>
            <tbody>

              <?php
                $i=1;
                if (!empty($result)) {
                foreach ($result as $row) {
            ?>


            <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['phone'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['township'];?></td>
                <td><?php echo $row['address'];?></td>
                <td><?php echo $row['created'];?></td>
                <td><?php echo $row['DeliveryStatus'];?></td>
                <td>
                <form action="" method="GET">

                <!--------------------update--------------->

                <input type="button" value="Change to Delivery"  class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal<?php echo $row['id'];?>">

                <!-- Modal -->
                <div class="modal fade" id="exampleModal<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Update Status</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <p class="text-danger"> Are you sure to change to delivery status this record. </p>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" name="btnchange" class="btn btn-primary" value="12">Change</button>
                      <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                      <input type="hidden" value="delivery" name="status">
                  </div>
                  </div>
                </div>
                </div>
                <!-- End Modal --->
                <!--------------------End detete--------------->

                </form>
                </td>
            </tr>
            <?php
                $i++;
                }
              }
             ?>
             </tbody>
          </table>







    </div>


  </body>
</html>
