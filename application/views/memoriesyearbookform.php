
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        .rs-width{
    width: 38%;
}
.ls-width {
    width: 52%;
}
    </style>
</head>

<body>
    <div class="container w-50 mt-5">
        <h3>Memories</h3>
        <form action="<?php echo base_url().'site/addmemories' ?>" method="post" enctype="multipart/form-data">
            <div class="d-flex justify-content-between">
                <div class="my-3 rs-width">
                <input type="hidden" name="code" value="<?php echo $code; ?>"/>
                    <label for="image" class="form-label ">Bild hochladen:</label>
                    <input type="file" class="form-control" name="image1" id="image1" required="required">
                </div>
                <div class="my-3  ls-width">
                    <label for="caption" class="form-label">Bildunterschrift :</label>
                    <input type="text" class="form-control" name="caption1" id="caption1" required="required" placeholder="">
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="my-3 rs-width">
                    <label for="image" class="form-label">Bild hochladen:</label>
                    <input type="file" class="form-control" name="image2" id="image2" required="required">
                </div>
                <div class="my-3 ls-width">
                    <label for="caption" class="form-label">Bildunterschrift :</label>
                    <input type="text" class="form-control" name="caption2" id="caption2" required="required"
                        placeholder="">
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="my-3 rs-width">
                    <label for="image" class="form-label">Bild hochladen:</label>
                    <input type="file" class="form-control" name="image3" id="image3" required="required">
                </div>
                <div class="my-3 ls-width">
                    <label for="caption" class="form-label">Bildunterschrift :</label>
                    <input type="text" class="form-control" name="caption3" id="caption3" required="required"
                        placeholder="">
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="my-3 rs-width">
                    <label for="image" class="form-label">Bild hochladen:</label>
                    <input type="file" class="form-control" name="image4" id="image4" required="required">
                </div>
                <div class="my-3 ls-width">
                    <label for="caption" class="form-label">Bildunterschrift :</label>
                    <input type="text" class="form-control" name="caption4" id="caption4" required="required"
                        placeholder="">
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="my-3 rs-width">
                    <label for="image" class="form-label">Bild hochladen:</label>
                    <input type="file" class="form-control" name="image5" id="image5" required="required">
                </div>
                <div class="my-3 ls-width">
                    <label for="caption" class="form-label">Bildunterschrift :</label>
                    <input type="text" class="form-control" name="caption5" id="caption5" required="required"
                        placeholder="">
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="my-3 rs-width">
                    <label for="image" class="form-label">Bild hochladen:</label>
                    <input type="file" class="form-control" name="image6" id="image6" required="required">
                </div>
                <div class="my-3 ls-width">
                    <label for="caption" class="form-label">Bildunterschrift :</label>
                    <input type="text" class="form-control" name="caption6" id="caption6" required="required"
                        placeholder="">
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="my-3 rs-width">
                    <label for="image" class="form-label">Bild hochladen:</label>
                    <input type="file" class="form-control" name="image7" id="image7" required="required">
                </div>
                <div class="my-3 ls-width">
                    <label for="caption" class="form-label">Bildunterschrift :</label>
                    <input type="text" class="form-control" name="caption7" id="caption7" required="required"
                        placeholder="">
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="my-3 rs-width">
                    <label for="image" class="form-label">Bild hochladen:</label>
                    <input type="file" class="form-control" name="image8" id="image8" required="required">
                </div>
                <div class="my-3 ls-width">
                    <label for="caption" class="form-label">Bildunterschrift :</label>
                    <input type="text" class="form-control" name="caption8" id="caption8" required="required"
                        placeholder="">
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="my-3 rs-width">
                    <label for="image" class="form-label">Bild hochladen:</label>
                    <input type="file" class="form-control" name="image9" id="image9" required="required">
                </div>
                <div class="my-3 ls-width">
                    <label for="caption" class="form-label">Bildunterschrift :</label>
                    <input type="text" class="form-control" name="caption9" id="caption9" required="required"
                        placeholder="">
                </div>
            </div>
            
            <div class="text-center my-3">
                <button type="submit" class="btn btn-primary"  id="upload">Upload</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>