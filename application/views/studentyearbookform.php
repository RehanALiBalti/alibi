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
    <title>Steckbrief Formular</title>
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
    <div class="container w-50 my-5">
        <h3>Steckbrief Formular</h3>
        <form action="<?php echo base_url().'Site/adddata' ?>"  method="post" enctype="multipart/form-data">
          <div class="d-flex justify-content-between">
            <div class="my-3 w-width">
                <label for="fullname" class="form-label">Wie heisst du mit vollem Namen?</label>
                <input type="text" class="form-control" name="fullname" id="fullname" required="required"></input>
            </div>
            <div class="my-3 w-width">
                <label for="nickname" class="form-label">Wie ist dein Spitzname?</label>
                <input type="text" class="form-control" name="nickname" id="nickname" required="required"></input>
            </div>
            <input type="hidden" name="code" value="<?php echo $code; ?>"/>
            
                
            
              </div>
               <div class="d-flex justify-content-between">
            <div class="my-3 w-width">
                    <label for="image" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bild hochladen:</font></font></label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
             <div class="my-3 w-width"">
                <label for="dob" class="form-label">Was ist dein Geburtsdatum?</label>
                <input type="text" class="form-control" data-date="" data-date-format="DD MMMM YYYY" name="dob" id="datepicker" required="required"></input>
            </div>
              </div>
    

            <div class="my-3">
                <label for="animal" class="form-label">Als Tier wäre ich ein</label>
                <input type="text" class="form-control" name="animal" id="animal" required="required"></input>
            </div>
            <div class="my-3">
                <label for="q5" class="form-label">Was ist dein Berufswunsch?</label>
                <input type="text" class="form-control" name="q5" id="q5" required="required"></input>
            </div>
            <div class="my-3">
                <label for="q6" class="form-label">Wenn ich im Lotto gewinne werde ich...</label>
                <input type="text" class="form-control" name="q6" id="q6" required="required"></input>
            </div>
            <div class="my-3">
                <label for="q7" class="form-label">Meine bisher grösste Herausforderung war...</label>
                <input type="text" class="form-control" name="q7" id="q7" required="required"></input>
            </div>
            <div class="my-3">
                <label for="q8" class="form-label">Meine Lieblingserinnerung in dieser Klasse ist...</label>
                <input type="text" class="form-control" name="q8" id="q8" required="required"></input>
            </div>
            <div class="my-3">
                <label for="q9" class="form-label">Ich wünsche meinen Klassenkameraden...</label>
                <input type="text" class="form-control" name="q9" id="q9" required="required"></input>
            </div>
            <div class="my-3">
                <label for="q10" class="form-label">Mein Spruch/Motto/Zitat</label>
                <textarea class="form-control" name="q10" id="q10" rows="1" required="required"></textarea>
            </div>
                <div class="text-center">
            <h3>Comment Section</h3>
        </div>
        <div class="mt-3">
            <h6>Kommentar 1</h6>
        </div>
        <div class="d-flex justify-content-between">
            <div class="my-3 w-width">
                <label for="Vorname" class="form-label">Vorname:</label>
                <input type="text" class="form-control" name="vorname1" id="vorname1" required="required"></input>
            </div>
            <div class="my-3 w-width">
                <label for="Nachname" class="form-label">Nachname</label>
                <input type="text" class="form-control" name="nachname1" id="nachname1" required="required"></input>
            </div>
        </div>
        <div class="my-3">
            <label for="koment1" class="form-label">Schreibe hier deinen Kommentar</label>
            <textarea rows="4" class="form-control" name="koment1" id="koment1" placeholder="Schreibe hier deinen Kommentar"
                rows="4">
                </textarea>
        </div>
        <div class="mt-5">
            <h6>Kommentar 2</h6>
        </div>
        <div class="d-flex justify-content-between">
            <div class="my-3 w-width">
                <label for="Vorname" class="form-label">Vorname:</label>
                <input type="text" class="form-control" name="vorname2" id="vorname2" required="required"></input>
            </div>
            <div class="my-3 w-width">
                <label for="Nachname" class="form-label">Nachname</label>
                <input type="text" class="form-control" name="nachname2" id="nachname2" required="required"></input>
            </div>
        </div>
        <div class="my-3">
            <label for="koment1" class="form-label">Schreibe hier deinen Kommentar</label>
            <textarea class="form-control" name="koment2" id="koment2" placeholder="Schreibe hier deinen Kommentar"
                rows="4">
                </textarea>
        </div>
        <div class="mt-5">
            <h6>Kommentar 3</h6>
        </div>
        <div class="d-flex justify-content-between">
            <div class="my-3 w-width">
                <label for="Vorname" class="form-label">Vorname:</label>
                <input type="text" class="form-control" name="vorname3" id="vorname3" required="required"></input>
            </div>
            <div class="my-3 w-width">
                <label for="Nachname" class="form-label">Nachname</label>
                <input type="text" class="form-control" name="nachname3" id="nachname3" required="required"></input>
            </div>
        </div>
        <div class="my-3">
            <label for="koment1" class="form-label">Schreibe hier deinen Kommentar</label>
            <textarea class="form-control" name="koment3" id="koment3" placeholder="Schreibe hier deinen Kommentar"
                rows="4">
                </textarea>
        </div>
            <br><h3>Schülerranking</h3><br>
            
             <div class="my-3">
                 
                 <label for="ersterAuswanderer" class="form-label">Erste*r Auswanderer*in</label>
                 <div class="col-sm-12 row gx-4 d-flex justify-content-between">
                 <div class="col-sm-6">
                     <input type="text" class="form-control" name="fersterAuswanderer" id="fersterAuswanderer" required="required" placeholder="Vorname"></input>
                 </div>
                 <div class="col-sm-6">
                      <input type="text" class="form-control" name="lersterAuswanderer" id="lersterAuswanderer" required="required" placeholder="Nachname"></input>
                 </div>
                 </div>
                   
                    </div>
               
             
              <div class="my-3">
                  <label for="q10" class="form-label">Labertasche</label>
                  <div class="col-sm-12 row gx-4 d-flex justify-content-between">
                 <div class="col-sm-6">
                     <input type="text" class="form-control" name="flabertasche" id="flabertasche" required="required" placeholder="Vorname"></input>
                 </div>
                 <div class="col-sm-6">
                      <input type="text" class="form-control" name="llabertasche" id="llabertasche" required="required" placeholder="Nachname"></input>
                 </div>
                 </div>
               
                  
              </div>
            
              <div class="my-3">
                  <label for="q10" class="form-label">Stand Up Comedian:</label>
            <div class="col-sm-12  row gx-4 d-flex justify-content-between">
                 <div class="col-sm-6">
                     <input type="text" class="form-control" name="fcomedian" id="fcomedian" required="required" placeholder="Vorname"></input>
                 </div>
                 <div class="col-sm-6">
                      <input type="text" class="form-control" name="lcomedian" id="lcomedian" required="required" placeholder="Nachname"></input>
                 </div>
                 </div>
              </div>
           
              <div class="my-3">
                  <label for="q10" class="form-label">Minimalist*in</label>
                  <div class="col-sm-12 row gx-4 d-flex justify-content-between">
                 <div class="col-sm-6">
                     <input type="text" class="form-control" name="fminimalist" id="fminimalist" required="required" placeholder="Vorname"></input>
                 </div>
                 <div class="col-sm-6">
                      <input type="text" class="form-control" name="lminimalist" id="lminimalist" required="required" placeholder="Nachname"></input>
                 </div>
                 </div>
            
                
              </div>
              <div class="my-3">
                  <label for="q10" class="form-label">Sportfanatiker*in</label>
           <div class="col-sm-12 row gx-4 d-flex justify-content-between">
                 <div class="col-sm-6">
                     <input type="text" class="form-control" name="fsportfanatiker" id="fsportfanatiker" required="required" placeholder="Vorname"></input>
                 </div>
                 <div class="col-sm-6">
                      <input type="text" class="form-control" name="lsportfanatiker" id="lsportfanatiker" required="required" placeholder="Nachname"></input>
                 </div>
                 </div>
                
              </div>
              <div class="my-3">
                  <label for="q10" class="form-label">Wird später berühmt</label>
                  <div class="col-sm-12 row gx-4 d-flex justify-content-between">
                 <div class="col-sm-6">
                     <input type="text" class="form-control" name="fwird" id="fwird" required="required" placeholder="Vorname"></input>
                 </div>
                 <div class="col-sm-6">
                      <input type="text" class="form-control" name="lwird" id="lwird" required="required" placeholder="Nachname"></input>
                 </div>
                 </div>
               
              </div>
              <div class="mt-5 text-center">
                  <button type="submit" class="btn btn-primary"  id="submit">Submit</button>
              </div>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"/> </script>
        
        <script>
            $("#dob").on("change", function() {
                alert();
    this.setAttribute(
        "data-date",
        moment(this.value, "YYYY-MM-DD")
        .format( this.getAttribute("data-date-format") )
    )
}).trigger("change")
        </script>
   
</body>

</html>