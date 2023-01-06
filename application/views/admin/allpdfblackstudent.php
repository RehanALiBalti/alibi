<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>index</title>

	<style>
        body {
            /* -moz-transform: scale(0.24, 0.24); */
            /* zoom: 0.24; */
            /* zoom: 24%; */
            display: grid;
            place-content: center;
            min-width: 2400px;
            margin: calc(4.1666*0px);
            padding: calc(4.1666*0px);
        }

        #container {
            /* box-sizing: content-box; */
            width: 2079px;
            height: 2953px;
            padding: calc(4.1666*36px);
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url(<?= base_url("uploads/common/blackbg.jpg") ?>);
            color: white;
        }

        .outline {

            width: 100%;
            height: 100%;
        }

        .line {
            /* outline: calc(4.1666*2px) solid rgb(255, 255, 255); */
            height: calc(4.1666*2px);
            background: #ffffff;
            width: 100%;
        }

        .heading {
            display: flex;
            justify-content: center;
            width: 100%;
            height: 100%;
            margin: calc(4.1666*0px);
            margin-bottom: calc(4.1666*10px);
            font-size: calc(4.1666*24px);
        }

        .body-content {
            display: flex;
            justify-content: space-between;
            margin-block: calc(4.1666*18px);

        }

        .left-side {
            border-right: calc(4.1666*2px) solid rgb(255, 255, 255);
            width: 100%;
            padding-right: calc(4.1666*20px);
        }

        .sec-one {
            font-size: calc(4.1666*12px);
            display: flex;
            flex: 2;

        }

        .sec-two {
            font-size: calc(4.1666*14px);
            flex-direction: column;
            padding-left: calc(4.1666*20px);
            flex: 1;
        }

        .sec-two>img {
            width: 100%;
            aspect-ratio: 9/11;
            padding-bottom: calc(4.1666*25px);
        }

        .profile>p {
            margin: calc(4.1666*0px);
            padding-bottom: calc(4.1666*5px);
        }

        .question {
            margin-bottom: calc(4.1666*5px);
            font-weight: bold;
        }

        .ans {
            margin-bottom: calc(4.1666*35px);
        }


        .ans-two {
            margin-bottom: calc(4.1666*45px);
        }

        .ans-three {
            margin-bottom: calc(4.1666*30px);
        }



        .comment-sec {
            display: flex;
            justify-content: center;
            margin: calc(4.1666*0px);
            padding-block: calc(4.1666*15px);
            font-size: calc(4.1666*24px);
        }

        /* Comment Section */

        .comment-content {

            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .comment-sec-one {
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        .comment-sec-two {
            display: flex;
            flex: 1;
        }

        .circle-img {
            height: calc(4.1666*25px);
            width: calc(4.1666*25px);
            border-radius: calc(4.1666*25px);
            margin: calc(4.1666*5px);
            /* object-fit: cover; */
            aspect-ratio: 1;

        }

        .user-comment {
            display: flex;
            align-items: center;
            font-size: calc(4.1666*12px);
            margin-right: calc(4.1666*5px);
            margin-left: calc(4.1666*10px);
            margin-bottom: calc(4.1666*10px);


        }

        .user-comment-two {
            display: flex;
            align-items: flex-end;
            font-size: calc(4.1666*12px);
            margin-right: calc(4.1666*10px);
            margin-left: calc(4.1666*5px);
        }
    </style>


</head>

<body>
	<button onclick="Convert_HTML_To_PDF();">Click to Generate PDF</button>
    <div id="maindiv"> 
    <?php
	$i=0;
	foreach($ff as $formdata){
	
		?>   
    <div id="container" class="<?php echo "container".$i;  ?>">

	<?php  	$i++; ?>
		<div class="outline">

			<div>
				<h1 class="heading"><?php echo $formdata['fullname'];?></h1>
				<div class="line"> </div>

			</div>


			<div class="body-content">
				<div class="sec-one">
					<div class="left-side ">

						<p class="question">Wie heisst du mit vollem Namen?.<?php echo $formdata['fullname']; ?></p>
						<p class="ans">Wie ist dein Spitzname?.<?php echo $formdata['nickname']; ?></p>
						<p class="question">Was ist dein Geburtsdatum? <?php echo $formdata['dob']; ?></p>
						<p class="ans-two">Als Tier wäre ich ein/e...<?php echo $formdata['animal']; ?></p>
						<p class="question"><b>Was ist dein Berufswunsch?</b><?php echo $formdata['q5']; ?></p>
						<p class="ans">Wenn ich im Lotto gewinne, werde ich... <?php echo $formdata['q6']; ?></p>
						<p class="question">Meine bisher grösste Herausforderung...<?php echo $formdata['q7']; ?></p>
						<p class="ans-three">Meine Lieblingserinnerung in dieser Klasse...<?php echo $formdata['q8']; ?>
						</p>
						<p class="question"><b>Ich wünsche meinen Klassenkameraden...</b><?php echo $formdata['q9']; ?>
						</p>
						<p class="ans-three">Mein Spruch/Motto/Zitat:<?php echo $formdata['q10']; ?></p>

					</div>
				</div>


				<div class="sec-two">

					<img src="<?php echo base_url().$formdata['image'];  ?>" alt="">
					<div class="profile">
						<p><strong>spitzman:</strong>&nbsp;
							<?php echo $formdata['nickname']; ?></p>
						<p><strong>Pronoun:</strong>&nbsp;
							<?php echo $formdata['fullname']; ?></p>
						<p><strong>Geburstag:</strong>&nbsp;
							<?php echo $formdata['dob']; ?></p>
						<p><strong>Als Tier ware ich ein:</strong>&nbsp;
							<?php echo $formdata['animal']; ?></p>
						<p><strong>Berufswunsch?:</strong>&nbsp;
							<?php echo $formdata['q5']; ?></p>
					</div>

				</div>

			</div>

			<div class="line"> </div>

			<h1 class="comment-sec">Kommentare</h1>

			<div class="comment-content">

				<div class="comment-sec-one">

					<div class="user-comment">
						<?php 
                        $q=$this->db->select('image')->like('fullname', $formdata['vorname1'], 'both')->get('formdata')->row_array();
		$imageurl="";

		if( !empty($q) && $q['image'] !="") {
			$imageurl=base_url().$q['image'];
		}

		else {
			$imageurl=base_url()."/uploads/common/noimage.png";
		}

?>
						<img src="<?php echo $imageurl; ?>" class="circle-img" alt="">
						<p><?php echo $formdata['koment1'];
?></p>
					</div>
					<div class="user-comment">
						<?php $q=$this->db->select('image')->like('fullname', $formdata['vorname2'], 'both')->get('formdata')->row_array();
$imageurl="";

if( !empty($q) && $q['image'] !="") {
	$imageurl=base_url().$q['image'];
}

else {
	$imageurl=base_url()."uploads/common/noimage.png";
}

?><img src="<?php echo $imageurl; ?>" class="circle-img" alt="">
						<p><?php echo $formdata['koment2'];
?></p>
					</div>
				</div>

				<div class="comment-sec-two">
					<div class="user-comment-two">
						<?php $q=$this->db->select('image')->like('fullname', $formdata['vorname3'], 'both')->get('formdata')->row_array();
$imageurl="";

if( !empty($q) && $q['image'] !="") {
	$imageurl=base_url().$q['image'];
}

else {
	$imageurl=base_url()."uploads/common/noimage.png";
}

?><img src="<?php echo $imageurl; ?>" class="circle-img" alt="">
						<p><?php echo $formdata['koment3'];
?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
    <?php } ?>
</div>
</body>
<!-- html2canvas library -->
<script src="http://demos.codexworld.com/convert-html-to-pdf-using-javascript-jspdf/js/html2canvas.min.js"></script>

<!-- jsPDF library -->
<script src="http://demos.codexworld.com/3rd-party/jsPDF/dist/jspdf.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    /*
     * Generate 2 pages PDF document
     */

    /*
     * Convert HTML content to PDF
     */
	
    function Convert_HTML_To_PDF() {
		fruits=[];
		var pdf = new jsPDF('p', 'px', [2079, 2953]);
		for(var ij=0;ij<2;ij++){
			var elementHTML = $(".container"+ij);
		

        html2canvas(elementHTML, {
            useCORS: true,
            onrendered: function(canvas) {
				//pdf.setPage(fruits.length+1);
		
				console.log("loop",fruits.length);
				fruits.push(Math.random());
				console.log(fruits);



                var pageHeight = 2953;
                var pageWidth = 2079;
                // console.log(elementHTML.height, pageHeight, elementHTML.clientHeight / pageHeight)
         for (let i = 0; i <= 0; i++) {
                    let srcImg = canvas;
					console.log("src",srcImg);
					
                    const sX = 0;
                    const sY = pageHeight * i; // start 1 pageHeight down for every new page
                    const sWidth = pageWidth;
                    const sHeight = pageHeight;
                    const dX = 0;
                    const dY = 0;
                    const dWidth = pageWidth;
                    const dHeight = pageHeight;

                    window.onePageCanvas = document.createElement("canvas");
                    onePageCanvas.setAttribute('width', pageWidth + (4.1666 * 36 * 2));
                    onePageCanvas.setAttribute('height', pageHeight + (4.1666 * 36 * 2));
                    var ctx = onePageCanvas.getContext('2d');
                    ctx.drawImage(srcImg, sX, sY, sWidth + (4.1666 * 36 * 2), sHeight + (4.1666 * 36 * 2), dX, dY, dWidth, dHeight);

                    let canvasDataURL = onePageCanvas.toDataURL("image/png", 1.0);

            //         console.log(onePageCanvas, canvasDataURL);
                    const width = onePageCanvas.width;
                    const height = onePageCanvas.clientHeight;
					onePageCanvas.remove();
					console.log("after delete",onePageCanvas);
             //       if (i > 0) // if we're on anything other than the first page, add another page
                        //pdf.addPage([2079, 2953]);
				//		pdf.addPage();
				//pdf.addPage();
                    pdf.setPage(fruits.length + 1); // now we declare that we're working on that page
                    pdf.addImage(canvasDataURL, 'PNG', 0, 0, width, height); // add content to the page
			//	console.log(canvasDataURL);
			if(fruits.length<2){	
			 pdf.addPage();
			}
                    
			     // document.getElementsByTagName('body')[0].appendChild(onePageCanvas);
                }

                // Save the PDF
				if(fruits.length==2){
 
					pdf.save('document-html.pdf');
				}
                
            }
        });
		}

    }
</script>
</html>