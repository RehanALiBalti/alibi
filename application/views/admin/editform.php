<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/toplinks.php'); ?>
</head>

<body>
    <?php include('includes/navigation.php'); ?>


<!-- Content   offers -->
<div class="main">
  
    <div class="containe mb-5">
        <br>
    <h2 class="mb-4">Edit Blog</h2>


<?php include('includes/alert-msgs.php'); ?>        
    <form enctype="multipart/form-data" action="<?php echo base_url().'admin/editformdata/'.$no ;?>" method="post">

<div class="row my-5">

<?php 
// echo "<pre>";
// print_r($formdata);
// echo "</pre>";
?>

    <div class="col-12 col-md-8">
    <div class="form-group">
            <label class="label-ls" for="school">Tile:</label>
            <input type="TExt" name="Title" value="<?php echo $formdata['Title']; ?>" required class="form-control input-ls" required  placeholder="write here">
        </div>
        <div class="form-group">
            <label class="label-ls" for="class">Description:</label>
            <textarea name="Description" required class="form-control input-ls" required  placeholder="write here"><?php echo $formdata['Description']; ?></textarea>
        </div>
        <div class="form-group">
            <label class="label-ls" for="class">Feature Image:</label>
            <input type="file" name="userfile"  class="form-control input-ls"   placeholder="write here">
      
            <?php if($formdata['Image']!=""){?>
      <br><br>
                <img src="<?php echo $formdata['Image']; ?>" class="img img-thumbnail" style="height:200px;width:200px;"/>

              <?php }  ?>  
        
        </div>
 



    </div>
    <div class="col-12 col-md-12 d-flex justify-content-end">
        <button class="btn btn-success" type="submit">Update </button>
                  
    </div>

</div>
</form>

    </div>
    
   


</div>





    <?php include('includes/footer.php'); ?>
    <?php include('includes/bottom_links.php'); ?>
    
</body>

</html>