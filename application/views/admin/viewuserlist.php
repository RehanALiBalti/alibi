<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/toplinks.php'); ?>
</head>

<body>
    <?php include('includes/navigation.php'); ?>


<!-- Content   offers -->

<div class="main">
  
<div class="col-12 col-md-12 d-flex justify-content-end">
                </div>
    <div class="containe mb-5">
        <h2 class="mb-4">Form's List  <?php echo $maindata['class'] ?>/<?php echo $maindata['school'] ?>/<?php echo $maindata['city'] ?></h2>
        <table class="table table-fluid" id="myTable">
        <thead>
         <tr><th>Full Name</th><th>Nick Name</th> <th>Dob</th><th>View PDf</th> <th>Action</th> </tr>
        </thead>
        <tbody>
        <?php foreach($userlistinfo as $ad){ ?>
            <tr>
                <td><?php echo $ad['fullname']; ?></td>
                <td><?php echo $ad['nickname']; ?></td>
                <td><?php echo $ad['dob']; ?></td>

                <td>Dark View:  <a href="<?php echo base_url().'admin/viewpdf/balck/formdata/'.$ad['formdata_id']; ?>">View</a>
                <br>
                Light View:  <a href="<?php echo base_url().'admin/viewpdf/white/formdata/'.$ad['formdata_id']; ?>">View</a>
                
                
                </td>
                <td><a href="<?php echo base_url().'admin/deletedata/formdata/'.$ad['formdata_id'] .'/'.$code;?>">Delete</a></td>
            </tr>
            <?php } ?>
    </tbody>
        </table>
    </div>
    
   


</div>





    <?php include('includes/footer.php'); ?>
    <?php include('includes/bottom_links.php'); ?>
    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
    } );
        </script>

</body>

</html>