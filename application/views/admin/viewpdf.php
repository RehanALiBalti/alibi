<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black View</title>

    <style>
        body {
            display: grid;
            place-content: center;
            margin: 0px;
            padding: 0px;
        }

        #container {
            width: 499px;
            height: 709px;
            padding: 36px;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url("https://mychapter.shop/frontend/assets/BlacBoard.jpg");
            color: white;
        }

        .outline {
           
            width: 100%;
            height: 100%;
        }

        .line {
            outline: 2px solid rgb(255, 255, 255);
            width: 100%;
        }

        .heading {
            display: flex;
            justify-content: center;
            width: 100%;
            height: 100%;
            margin: 0px;
            margin-bottom: 10px;

        }

        .body-content {
            display: flex;
            justify-content: space-between;
            margin-block: 18px;

        }

        .left-side {
            border-right: 2px solid rgb(255, 255, 255);
            width: 100%;
            padding-right: 20px;
        }

        .sec-one {
            font-size: 12px;
            display: flex;
            flex: 2;

        }

        .sec-two {
            font-size: 14px;
            flex-direction: column;
            padding-left: 20px;
            flex: 1;
        }

        .sec-two>img {
            width: 100%;
            aspect-ratio: 9/11;
            padding-bottom: 25px;
        }

        .profile>p {
            margin: 0px;
            padding-bottom: 5px;
        }

        .question {
            margin-bottom: 5px;
            font-weight: bold;
        }

        .ans {
            margin-bottom: 35px;
        }


        .ans-two {
            margin-bottom: 45px;
        }

        .ans-three {
            margin-bottom: 30px;
        }



        .comment-sec {
            display: flex;
            justify-content: center;
            margin: 0px;
            padding-block: 15px;
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
            height: 25px;
            width: 25px;
            border-radius: 25px;
            margin: 5px;
            /* object-fit: cover; */
            aspect-ratio: 1;

        }

        .user-comment {
            display: flex;
            align-items: center;
            font-size: 12px;
            margin-right: 5px;
            margin-left: 10px;
            margin-bottom: 10px;


        }

        .user-comment-two {
            display: flex;
            align-items: flex-end;
            font-size: 12px;
            margin-right: 10px;
            margin-left: 5px;
        }
    </style>


</head>

<body>
    <div id="container">

        <div class="outline">

            <div>
                <h1 class="heading"><?php echo $formdata['fullname']; ?></h1>
                <div class="line"> </div>

            </div>


            <div class="body-content">
                <div class="sec-one">
                    <div class="left-side ">

                        <p class="question">Wie heisst du mit vollem Namen?.<?php echo $formdata['fullname']; ?></p>
                        <p class="ans">Wie ist dein Spitzname?.<?php echo $formdata['nickname']; ?></p>

                        <p class="question">Was ist dein Geburtsdatum? <?php echo $formdata['dob']; ?></p>
                        <p class="ans-two">Als Tier wäre ich ein/e...<?php echo $formdata['animal']; ?></p>

                        <p class="question"><b>Was ist dein Berufswunsch?</b> <?php echo $formdata['q5']; ?></p>
                        <p class="ans">Wenn ich im Lotto gewinne, werde ich...
                        <?php echo $formdata['q6']; ?>    
                    </p>

                        <p class="question">Meine bisher grösste Herausforderung...<?php echo $formdata['q7']; ?></p>
                        <p class="ans-three">Meine Lieblingserinnerung in dieser Klasse...<?php echo $formdata['q8']; ?></p>

                        <p class="question">Ich wünsche meinen Klassenkameraden...</b><?php echo $formdata['q9']; ?></p>
                        <p class="ans-three">Mein Spruch/Motto/Zitat:<?php echo $formdata['q10']; ?></p>

                    </div>
                </div>


                <div class="sec-two">

                    <img src="<?php echo $formdata['image'];  ?>" alt="">
                    <div class="profile">
                        <p><strong>spitzman:</strong>&nbsp; <?php echo $formdata['nickname']; ?></p>
                        <p><strong>Pronoun:</strong>&nbsp;<?php echo $formdata['fullname']; ?></p>
                        <p><strong>Geburstag:</strong>&nbsp;<?php echo $formdata['dob']; ?></p>
                        <p><strong>Als Tier ware ich ein:</strong>&nbsp;<?php echo $formdata['animal']; ?></p>
                        <p><strong>Berufswunsch?:</strong>&nbsp;<?php echo $formdata['q5']; ?></p>

                    </div>

                </div>

            </div>

            <div class="line"> </div>

            <h1 class="comment-sec">Kommentare</h1>

            <div class="comment-content">

                <div class="comment-sec-one">

                    <div class="user-comment">
<?php
$q=$this->db->select('image')->like('fullname',$formdata['vorname1'],'both')->get('formdata')->row_array();
$imageurl="";
if(!empty($q) && $q['image'] !=""){
    $imageurl=$q['image'];
}else{
    $imageurl="http://via.placeholder.com/160x160";
}
?>

                        <img src="<?php echo $imageurl; ?>" class="circle-img" alt="">
                        <p><?php echo $formdata['koment1']; ?></p>
                    </div>
                    <div class="user-comment">
                    <?php
$q=$this->db->select('image')->like('fullname',$formdata['vorname2'],'both')->get('formdata')->row_array();
$imageurl="";
if(!empty($q) && $q['image'] !=""){
    $imageurl=$q['image'];
}else{
    $imageurl="http://via.placeholder.com/160x160";
}
?>


                    <img src="<?php echo $imageurl; ?>" class="circle-img" alt="">
                        <p><?php echo $formdata['koment2']; ?></p>
                    </div>
                </div>

                <div class="comment-sec-two">
                    <div class="user-comment-two">
                    <?php
$q=$this->db->select('image')->like('fullname',$formdata['vorname3'],'both')->get('formdata')->row_array();
$imageurl="";
if(!empty($q) && $q['image'] !=""){
    $imageurl=$q['image'];
}else{
    $imageurl="http://via.placeholder.com/160x160";
}
?>
                        <img src="<?php echo $imageurl; ?>" class="circle-img" alt="">
                        <p><?php echo $formdata['koment3']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>