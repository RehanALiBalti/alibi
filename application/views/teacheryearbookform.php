<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">

  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <title>Teacher</title>
</head>
<script>
  $( function() {
    $( "#datepicker" ).datepicker({
        dateFormat: 'dd-mm-yy'
    });
  } );
  
  </script>
<style>
    .w-width{
    width: 48%;
}
.form-label{
    font-weight:430;
}
</style>
<body>
      <form action="<?php echo base_url().'site/addsteacherdata' ?>" method="post" enctype="multipart/form-data">
    <div class="container w-75 my-5">
        <h3>Teacher of the class</h3>
      
            <div class="d-flex justify-content-between">
                <div class="my-3 w-width">
                    <label for="Vorname:" class="form-label">Vorname</label>
                    <input type="text" required class="form-control" name="vorname" id="vorname:" placeholder="Vorname">
                    <input type="hidden" name="code" value="<?php echo $code; ?>"/>
                </div>
                <div class="my-3 w-width">
                    <label for="Nachname" class="form-label">Nachname:</label>
                    <input type="text" required class="form-control" name="nachname" id="nachname">
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="my-3 w-width">
                    <label for="Spitzname" class="form-label">Spitzname:</label>
                    <input type="text" class="form-control" name="spitzname" id="spitzname">
                </div>
                <div class="my-3 w-width">
                    <label for="dob" class="form-label">Geburtsdatum</label>
                                   <input type="text" class="form-control" data-date="" data-date-format="DD MMMM YYYY" name="dob" id="datepicker" required="required"></input>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="my-3 w-width">
                    <label for="classname" class="form-label">Klassenname:</label>
                    <input type="text" class="form-control" name="classname" id="classname" required placeholder="e.g 22a etc">
                </div>

                <div class="my-3 w-width">
                    <label for="image" class="form-label">Upload Image:</label>
                    <input type="file" required class="form-control" name="image" id="image">
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="my-3 w-width">
                    <label for="alsTier" class="form-label">Als Tier wäre ich eine:</label>
                    <input type="text" required class="form-control" name="alsTier" id="alsTier" placeholder="Libelle">
                </div>
                <div class="my-3 w-width">
                    <label for="teacherQoute" class="form-label">Mein Spruch Motto Zitat:</label>
                    <textarea class="form-control" required name="teacherQoute" id="teacherQoute" rows="1"></textarea>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="my-3 w-width">
                    <label for="ques-1" class="form-label">Was ist Ihre schönste Erinnerung
                        mit dieser Klasse?</label>
                    <textarea class="form-control" required name="ques-1" id="ques-1" rows="1"></textarea>
                </div>
                <div class="my-3 w-width">
                    <label for="ques-2" class="form-label">Welchen Berufswunsch hatten
                        Sie mit 18 Jahren?</label>
                    <textarea class="form-control" required name="ques-2" id="ques-2" rows="1"></textarea>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="my-3 w-width">
                    <label for="ques-1" class="form-label">Wer ist Ihr Vorbild?</label>
                    <textarea class="form-control" required name="ques-3" id="ques-3" rows="1"></textarea>
                </div>
                <div class="my-3 w-width">
                    <label for="ques-4" class="form-label">Welche drei Adjektive beschreiben
                        Ihren Unterricht am Besten?</label>
                    <textarea required class="form-control" name="ques-4" id="ques-4" rows="1"></textarea>
                </div>
            </div>
           
    </div>


    <!-- Comment Section -->
   
            <div class="mt-5 text-center">
                <button type="submit" class="btn btn-primary"  id="postkoment">Kommentar hinzufügen</button>
            </div>
    </div>     */       
        </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>