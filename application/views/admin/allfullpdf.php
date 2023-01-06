<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Index</title>
</head>

<body>
	<style>
		body {
			display: grid;
			place-content: center;
			margin: calc(1.000*0px);
			content: calc(1.000*0px);
		}

		#index-container {
			width: calc(1.000* 499px);
			height: calc(1.000*709px);
			padding: calc(1.000*36px);
			background-image: url("https://mychapter.shop/frontend/assets/BlacBoard.jpg");
			color: white;

		}

		@font-face {
			font-family: "Marker";
			src: url("../fonts/Youth\ Power.ttf");
		}

		.outline {
			width: 100%;
			height: 100%;
			display: flex;
			flex-direction: column;

		}

		.index-b-parent {
			/* padding-left: calc(1.000*100px); */
			margin: 0px;
			display: flex;
			flex-direction: column;
			justify-content: space-around;
			flex: 1;


		}

		.index-b-class {
			align-self: center;
			width: 65%;
			/* left: 560px; */
			/* width: calc(1.000*80px); */
			font-size: calc(1.000*60px);
			font-family: "Marker";

			letter-spacing: 1px;
			line-height: calc(1.000*60px);

		}

		.index-b-name {
			font-size: calc(1.000*300px);
			font-family: "Marker";
			align-self: center;
			letter-spacing: 1px;
			margin: 0px;

		}

		@font-face {
			font-family: "Halvatica";
			src: url("../fonts/Helvetica-Neue-LT-Std-35-Thin_22514.ttf");
		}

		@font-face {
			font-family: "Hey October";
			src: url("../fonts/Marker\ Felt.ttf");
		}

		#container-two {
			width: calc(1.000*499px);
			height: calc(1.000*709px);
			padding: calc(1.000*36px);
			background-repeat: no-repeat;
			background-size: cover;
			background-image: url("https://mychapter.shop/frontend/assets/BlacBoard.jpg");
			color: white;
		}

		.three-outline {
			width: 100%;
			height: 100%;

		}

		.three-page-posation {

			display: flex;
			flex-direction: column;
			align-items: center;


		}

		.three-parent-posation {
			position: relative;

		}

		.three-img-pos {

			object-fit: cover;
			width: calc(1.000*350px);
			padding: calc(1.000*20px);
		}

		.three-horizantal {
			position: absolute;
			width: 0%;
			left: 49%;
			top: calc(1.000*68px);

		}

		.three-vertical {
			position: absolute;
			height: 110%;
			bottom: -5%;
		}

		.three-horizantal-top {
			position: absolute;
			width: 110%;
			/* top: 0px; */
			bottom: calc(1.000*68px);
			left: 49%;
		}

		.three-vertical-right {
			position: absolute;
			height: 110%;
			right: calc(1.000*0px);
			bottom: -5%;
			display: flex;
			justify-content: flex-end;
		}

		.three-text-posation {

			display: flex;
			flex-direction: column;
			align-items: center;
			text-align: center;

		}

		.three-head {

			font-size: calc(1.000*40px);
			padding: calc(1.000*0px);
			margin: calc(1.000*0px);
			font-family: "Hey October";

		}

		.three-paragraph-font {

			font-size: calc(1.000*16px);
			font-family: "Halvatica";

		}

		.three-footer {

			font-size: calc(1.000*40px);
			padding: calc(1.000*0px);
			margin: calc(1.000*0px);
			font-family: "Hey October";
			margin-top: calc(1.000*40px);
		}

		.three-dots-size {
			padding: calc(1.000*0px);
			margin: calc(1.000*0px);

		}

		.three-test {
			position: relative;
			/* width: calc(1.000*5px); */
			height: 100%;
		}

		.three-test-two {
			width: calc(1.000*6px);
			transform: rotate(270deg);

		}

		.three-test-three {
			position: relative;
			/* width: calc(1.000*5px); */
			height: 100%;
		}

		.three-test-four {
			width: calc(1.000*6px);
			transform: rotate(270deg);

		}


		.three-img-pos {
			/* position: relative; */
			/* object-fit: fill; */
			width: calc(1.000*380px);
			height: calc(1.000*250px);
			/* padding: calc(1.000*20px); */

		}

		#container-three {
			width: calc(1.000*499px);
			height: calc(1.000*709px);
			padding: calc(1.000*36px);
			background-repeat: no-repeat;
			background-size: cover;
			background-image: url("https://mychapter.shop/frontend/assets/BlacBoard.jpg");
			color: white;
		}

		.five-outline {
			display: flex;
			flex-direction: column;
			justify-content: space-between;
			width: 100%;
			height: 100%;
		}

		@font-face {
			font-family: "Halvatica";
			src: url("../fonts/Helvetica-Neue-LT-Std-35-Thin_22514.ttf");
		}

		@font-face {
			font-family: "October";
			src: url("../fonts/Hey\ October.otf");
		}

		.five-img-style {
			width: calc(1.000*100px);
			height: calc(1.000*110px);
		}

		.five-std-name {
			margin: calc(1.000*0px);
			font-weight: bolder;
			width: calc(1.000*100px);
			letter-spacing: calc(1.000*1px);
			font-size: calc(1.000*12px);
		}

		.five-std-desc {
			margin: calc(1.000*0px);
			width: calc(1.000*100px);
			font-size: calc(1.000*12px);
			letter-spacing: calc(1.000*1px);
			font-family: "Halvatica";
		}

		.five-row {
			width: 100%;
			height: 100%;

			display: grid;
			grid-template-columns: repeat(4, 1fr);
			/*   grid-auto-rows: 200px; */
			justify-items: center;

		}

		.five-head {
			width: calc(1.000*350px);
			font-size: calc(1.000*45px);
			word-spacing: calc(1.000*5px);
			letter-spacing: calc(1.000*2px);
			margin-top: 0%;
		}

		.five-font-side {
			font-size: calc(1.000*140px);
			margin-top: calc(1.000*-136px);
			margin-left: calc(1.000*278px);
			margin-bottom: calc(1.000*0px);
		}

		.five-font-family {
			font-family: "October";
		}

		.five-wrapper {
			display: flex;
			flex-direction: column;
			flex: 1;
			justify-content: space-between;
		}

		#container-four {
			width: calc(1.000*499px);
			height: calc(1.000*799px);
			padding: calc(1.000*36px);
			background-repeat: no-repeat;
			background-size: cover;
			background-image: url("https://mychapter.shop/frontend/assets/BlacBoard.jpg");
			color: white;
		}

		.four-outline {
			display: flex;
			flex-direction: column;
			justify-content: space-between;
			width: 100%;
			height: 100%;
		}

		@font-face {
			font-family: "Halvatica";
			src: url("../fonts/Helvetica-Neue-LT-Std-35-Thin_22514.ttf");
		}

		.four-img-style {
			width: calc(1.000*100px);
			height: calc(1.000*110px);
		}

		.four-std-name {
			margin: calc(1.000*0px);
			font-weight: bolder;
			width: calc(1.000*100px);
			letter-spacing: calc(1.000*1px);
			font-size: calc(1.000*12px);
		}

		.four-std-desc {
			margin: calc(1.000*0px);
			width: calc(1.000*100px);
			font-size: calc(1.000*12px);
			letter-spacing: calc(1.000*1px);
			font-family: "Halvatica";
		}



		.four-row {
			width: 100%;
			height: 100%;

			display: grid;
			grid-template-columns: repeat(4, 1fr);
		}

		#container-five {
			width: calc(1.000*499px);
			height: calc(1.000*709px);
			padding: calc(1.000*36px);
			background-repeat: no-repeat;
			background-size: cover;
			background-image: url("https://mychapter.shop/frontend/assets/BlacBoard.jpg");
			color: white;
		}

		@font-face {
			font-family: "October";
			src: url("../fonts/Hey\ October.otf");
		}

		@font-face {
			font-family: "Nimbus";
			src: url("../fonts/Nimbus-Sans-D-OT-Light_32752.ttf");
		}

		.outline {
			width: 100%;
			height: 100%;
			/* outline: 2px solid salmon; */
		}

		.seven-paper-style {
			display: flex;
			justify-content: space-between;
		}

		.seven-heading-two {
			text-align: right;
			font-family: "October";
			font-size: calc(1.000*140px);
			margin: calc(1.000* 0px) calc(1.000*30px) calc(1.000*0px) calc(1.000*72px);
			letter-spacing: 4px;
		}

		.seven-heading-one {
			font-family: "October";
			font-size: calc(1.000*50px);
			margin: calc(1.000*0px);
		}

		.seven-section {
			width: calc(1.000*200px);
			font-size: calc(1.000*12px);
			font-weight: calc(1.000*400);
			font-family: "Nimbus";
			/* letter-spacing: 1px; */
			line-height: calc(1.000*15px);
		}

		.seven-chat-adjust {
			display: flex;
			outline: calc(1.000*3px) saddlebrown;
		}

		#container-six {
			width: calc(1.000*499px);
			height: calc(1.000*709px);
			padding: calc(1.000*36px);
			background-repeat: no-repeat;
			background-size: cover;
			background-image: url("https://mychapter.shop/frontend/assets/BlacBoard.jpg");
			color: white;
		}

		@font-face {
			font-family: "Halvatica";
			src: url("../fonts/Nimbus-Sans-D-OT-Light_32752.ttf");
		}

		@font-face {
			font-family: "October";
			src: url("../fonts/Hey\ October.otf");
		}


		.six-outline {
			width: 100%;
			height: 100%;
			/* outline: 2px solid salmon; */
		}

		.six-page-posation {
			display: flex;
			margin: calc(1.000*0px);
			justify-content: space-between;
			padding: calc(1.000*0px);
		}

		.six-parent-posation {
			position: relative;

		}

		.six-img-pos {
			/* position: relative; */
			/* object-fit: fill; */
			width: calc(1.000*130px);
			height: calc(1.000*150px);
			padding-bottom: calc(1.000*20px);
			padding-left: calc(1.000*20px);

		}

		.six-horizantal {
			position: absolute;
			height: 36%;
			bottom: 22%;
			left: calc(1.000*61px);
		}

		.six-vertical {
			position: absolute;
			height: 90%;
			bottom: 11%;
			;
		}

		.six-test {
			position: relative;
			/* width: 5px; */
			height: 100%;
		}

		.six-test-two {
			width: calc(1.000*5px);
			transform: rotate(90deg);

			height: 280%;
		}

		.six-header-text {
			font-family: "October";
			letter-spacing: 1px;
			margin-top: calc(1.000*0px);
			font-size: calc(1.000*35px);
			margin-bottom: calc(1.000*0);
		}

		.six-profile {
			display: flex;
			flex-direction: column;
			align-items: flex-start;
		}

		.six-profile-paper {
			display: flex;
			margin: calc(1.000*0px);
			padding: calc(1.000*0px);
		}

		.six-profile-paper+p {
			font-family: "Youth Power";
			margin: calc(1.000*0px);
			padding: calc(1.000*0px);
		}

		.six-font-style {
			margin: calc(1.000*0px);
			font-family: "October";
			font-size: calc(1.000*14px);
			letter-spacing: calc(1.000*2px);
		}

		.six-font-style+span {
			margin: calc(1.000*0px);
			font-family: "Halvatica";
			font-size: calc(1.000*14px);
		}

		.six-chat-parent {
			display: flex;
			align-items: flex-end;
		}

		.six-body {
			display: flex;
			justify-content: space-between;
			margin-top: calc(1.000*30px);
		}

		.six-one {
			font-size: calc(1.000*13px);
			width: calc(1.000*200px);
			font-family: "Halvatica";
		}

		.six-one>h5 {
			font-size: calc(1.000*13px);
		}

		.six-two {
			font-size: calc(1.000*13px);
			width: calc(1.000*200px);
			font-family: "Halvatica";
		}

		.six-two>h5 {
			font-size: calc(1.000*13px);
		}

		.six-footer {
			text-align: center;
			font-family: "October";
			letter-spacing: calc(1.000*3px);
			font-size: calc(1.000*22px);
			margin-top: calc(1.000*80px);
		}

		.six-top {
			margin-top: calc(1.000*25px);
		}

		#container-seven {
			width: calc(1.000*499px);
			height: calc(1.000*709px);
			padding: calc(1.000*36px);
			background-repeat: no-repeat;
			background-size: cover;
			background-image: url("https://mychapter.shop/frontend/assets/BlacBoard.jpg");
			color: white;
		}


		@font-face {
			font-family: "Youth Power";
			src: url("../fonts/Marker\ Felt.ttf");
		}

		@font-face {
			font-family: "October";
			src: url("../fonts/Hey\ October.otf");
		}



		.eight-outline {
			display: flex;
			flex-direction: column;
			width: 100%;
			height: 100%;

		}

		.eight-page-posation {

			display: flex;
			margin: calc(1.000*0px);
			justify-content: space-between;
			padding: calc(1.000*0px);

		}

		.eight-parent-posation {
			position: relative;

		}

		.eight-img-pos {
			/* position: relative; */
			/* object-fit: fill; */
			width: calc(1.000*130px);
			height: calc(1.000*150px);
			padding-bottom: calc(1.000*20px);
			padding-left: calc(1.000*20px);

		}

		.eight-horizantal {
			position: absolute;
			height: 36%;
			bottom: 22%;
			left: calc(1.000*61px);
		}

		.eight-vertical {
			position: absolute;
			height: 90%;
			bottom: 11%;

		}

		.eight-test {
			position: relative;
			/* width: 5px; */
			height: 100%;
		}

		.eight-test-two {
			width: calc(1.000*5px);
			transform: rotate(90deg);

			height: 280%;
		}

		.eight-header-text {
			font-size: calc(1.000*24px);

			font-family: "October";
			letter-spacing: calc(1.000*1px);
			margin-top: calc(1.000*0px);

		}

		.eight-header-text+p {

			font-family: "Youth Power";
			font-size: calc(1.000*24px);
			margin: calc(1.000*0px);

		}

		.eight-profile {
			display: flex;
			flex-direction: column;

		}

		.eight-profile-paper {
			display: flex;
			margin: calc(1.000*0px);
			padding: calc(1.000*0px);
		}

		span {

			font-size: calc(1.000*14px);
		}

		.eight-profile-paper+p {
			font-family: "Youth Power";
			margin: calc(1.000*0px);
			padding: calc(1.000*0px);
			font-size: calc(1.000*14px);
		}

		.eight-font-style {
			margin: 0px;
			font-family: "October";
			font-size: calc(1.000*14px);
			letter-spacing: calc(1.000*1px);
		}



		.eight-img-test {
			width: calc(1.000*40px);
			height: calc(1.000*40px);
			aspect-ratio: 1;
			object-fit: cover;
			border-radius: calc(1.000*50px);
			/* margin-top: 50px; */

		}

		.eight-comment {
			text-align: center;
			font-family: "October";
			font-size: calc(1.000*30px);
			background-color: white;
			margin-bottom: 0%;
			color: black;
		}

		.eight-sec {
			background-color: white;

		}

		.eight-relative {
			position: relative;
			height: auto;
			padding: calc(1.000*10px);
			margin: calc(1.000*20px);
			width: calc(1.000*130px);
			font-size: calc(1.000*09px);
			background-color: #e7c985;
			border-radius: calc(1.000*20px);
		}

		.eight-absolute {
			position: absolute;
			bottom: calc(1.000*3px);
			left: calc(1.000*-7px);

		}


		.eight-absolute>img {
			height: auto;
			width: calc(1.000*15px);
		}


		.eight-chat-two {
			display: flex;

		}

		.eight-chat-one {
			display: flex;
			flex-direction: column;
			flex: 1;
			justify-content: space-around;
		}

		.eight-chat-paper {
			display: flex;
			align-items: center;

		}

		.eight-chat-paper-two {
			display: flex;
			align-items: center;
			margin-left: calc(1.000*58px);
		}

		.eight-chat-parent {
			display: flex;
			flex: 1;
			background-color: white;

		}

		.eight-paper-style {

			display: flex;
			flex-direction: column;

		}

		.eight-body-content {

			display: flex;
			justify-content: space-around;
			margin-block: calc(1.000*30px);

		}

		.eight-left-side {
			width: calc(1.000*200px);

			display: flex;
			flex-direction: column;
		}

		.eight-right-side {
			width: calc(1.000*200px);
			border: calc(1.000*2px);
		}

		.eight-wrapper {
			background-color: white;
			display: flex;
			flex-direction: column;
			flex: 1;
			margin: calc(1.000*0px) calc(1.000*-36px) calc(1.000*-36px) calc(1.000*-36px);
			padding: calc(1.000*0px) calc(1.000*36px) calc(1.000*36px) calc(1.000*36px);
		}

		.eight-quest {
			font-size: calc(1.000*13px);
			font-weight: bolder;
		}

		.eight-ans {
			font-size: calc(1.000*12px);
			margin: calc(1.000*0px);
			padding-bottom: calc(1.000*15px);
		}


		#container-eight {
			width: calc(1.000*499px);
			height: calc(1.000*709px);
			padding: calc(1.000*36px);
			background-repeat: no-repeat;
			background-size: cover;
			background-image: url("https://mychapter.shop/frontend/assets/BlacBoard.jpg");
			color: white;
		}

		.nine-outline {
			width: 100%;
			height: 100%;
			/* outline: 2px solid salmon; */
			display: flex;
			flex-direction: column;
			/* justify-content: center; */
		}

		@font-face {
			font-family: "October";
			src: url("../fonts/Hey\ October.otf");
		}

		@font-face {
			font-family: "Nimbus";
			src: url("../fonts/Avenir.ttc");
		}

		.nine-img-size {
			width: calc(1.000*50px);
			height: calc(1.000*50px);
			border-radius: calc(1.000*50px);
		}

		.nine-std-style {
			display: flex;
			flex-direction: column;
		}

		.nine-std-posation {
			display: flex;
			align-items: flex-end;
		}

		.nine-box {
			width: calc(1.000*60px);
			height: calc(1.000*65px);
			color: black;
			background-color: rgb(255, 255, 255);
			color: black;
			display: flex;
			justify-content: center;
			align-items: flex-end;
			font-family: "October";
			font-size: calc(1.000*30px);
			margin: calc(1.000*0px);
			margin-top: calc(1.000*10px);

		}

		.nine-box-paper {
			align-items: center;
			display: flex;
			flex-direction: column;



		}

		.nine-box-two {
			width: calc(1.000*60px);
			height: calc(1.000*80px);
			background-color: white;
			display: flex;
			justify-content: center;
			align-items: flex-end;
			color: black;
			font-family: "October";
			font-size: calc(1.000*30px);
			margin: calc(1.000*0px);
			margin-top: calc(1.000*10px);
		}

		.nine-box-three {
			width: calc(1.000*60px);
			height: calc(1.000*50px);
			background-color: white;
			color: black;
			display: flex;
			justify-content: center;
			align-items: flex-end;
			font-family: "October";
			font-size: calc(1.000*30px);
			margin: calc(1.000*0px);
			margin-top: calc(1.000*10px);

		}

		.nine-parent {
			display: flex;
			justify-content: space-between;
			margin-block: calc(1.000*20px);
			padding-bottom: 200px;

		}

		.nine-name {
			font-family: "October";
			align-self: center;
			letter-spacing: calc(1.000*1px);
			margin: 0%;
			font-size: calc(1.000*14px);


		}


		.nine-header {
			text-align: center;
			margin: 0%;
			font-family: "October";
			font-size: calc(1.000*40px);
		}

		.nine-box-margin {
			margin-inline: calc(1.000*15px);
		}

		.nine-name-paper {
			font-size: calc(1.000*12px);
		}

		#container-nine {
			width: calc(1.000*499px);
			height: calc(1.000*709px);
			padding: calc(1.000*36px);
			background-repeat: no-repeat;
			background-size: cover;
			background-image: url("https://mychapter.shop/frontend/assets/BlacBoard.jpg");
			color: white;
		}


		.ten-outline {
			width: 100%;
			height: 100%;
			/* outline: 2px solid salmon; */
			display: flex;
			flex-direction: column;
			/* justify-content: center; */
		}

		@font-face {
			font-family: "October";
			src: url("../fonts/Hey\ October.otf");
		}

		@font-face {
			font-family: "Nimbus";
			src: url("../fonts/Avenir.ttc");
		}

		.ten-img-size {
			width: calc(1.000*50px);
			height: calc(1.000*50px);
			border-radius: calc(1.000*50px);
		}

		.ten-std-style {
			display: flex;
			flex-direction: column;
		}

		.ten-std-posation {
			display: flex;
			align-items: flex-end;
		}

		.ten-box {
			width: calc(1.000*60px);
			height: calc(1.000*65px);
			color: black;
			background-color: rgb(255, 255, 255);
			color: black;
			display: flex;
			justify-content: center;
			align-items: flex-end;
			font-family: "October";
			font-size: calc(1.000*30px);
			margin: calc(1.000*0px);
			margin-top: calc(1.000*10px);
		}

		.ten-box-paper {
			align-items: center;
			display: flex;
			flex-direction: column;
		}

		.ten-box-two {
			width: calc(1.000*60px);
			height: calc(1.000*80px);
			background-color: white;
			display: flex;
			justify-content: center;
			align-items: flex-end;
			color: black;
			font-family: "October";
			font-size: calc(1.000*30px);
			margin: calc(1.000*0px);
			margin-top: calc(1.000*10px);
		}

		.ten-box-three {
			width: calc(1.000*60px);
			height: calc(1.000*50px);
			background-color: white;
			color: black;
			display: flex;
			justify-content: center;
			align-items: flex-end;
			font-family: "October";
			font-size: calc(1.000*30px);
			margin: calc(1.000*0px);
			margin-top: calc(1.000*10px);
		}

		.ten-parent {
			display: flex;
			justify-content: space-between;
			margin-block: calc(1.000*20px);
		}

		.ten-name {
			font-family: "October";
			align-self: center;
			letter-spacing: calc(1.000*1px);
			font-size: calc(1.000*14px);
		}

		.ten-header {
			text-align: center;
			margin: 0%;
			font-family: "October";
			font-size: calc(1.000*40px);
		}

		.ten-box-margin {
			margin-inline: calc(1.000*15px);
		}

		.ten-name-paper {
			font-size: calc(1.000*12px);

		}

		body {
			display: grid;
			place-content: center;
			margin: calc(1.000*0px);
			content: calc(1.000*0px);
		}

		#container-eleven {
			width: calc(1.000* 499px);
			height: calc(1.000*709px);
			padding: calc(1.000*36px);
			background-image: url("https://mychapter.shop/frontend/assets/BlacBoard.jpg");


		}

		.mem-outline {
			width: 100%;
			height: 100%;
		}

		@font-face {
			font-family: "franca";
			src: url("../fonts/Franca-ExtraBold.ttf");
		}

		.mem-heading {

			font-size: calc(1.000*42px);
			font-family: "franca";
			margin: calc(1.000* 0px);
			font-style: italic;
			padding: 0px;

		}

		.mem-img {
			width: calc(1.000*250px);
			height: calc(1.000*160px);
		}

		.mem-img-two {
			width: calc(1.000*330px);
			height: calc(1.000* 230px);
		}

		.mem-img {
			width: calc(1.000* 250px);
			height: 1 calc(1.000* 60px);
		}

		.mem-img-two {
			width: calc(1.000* 330px);
			height: calc(1.000* 230px);
		}

		.mem-img-one {
			padding-top: calc(1.000* 10px);
			display: flex;
			justify-content: center;
		}


		.mem-parent {
			display: flex;
			flex-direction: column;
			justify-content: space-between;
			width: 100%;
			height: 100%;
		}

		@font-face {
			font-family: "franca";
			src: url("../fonts/Franca-ExtraBold.ttf");
		}

		@font-face {
			font-family: "Youth power";
			src: url("../fonts/Franca-ExtraBold.ttf");
		}

		.mem-heading {

			font-size: calc(1.000* 42px);
			font-family: "franca";
			margin: calc(1.000* 0px);
			font-style: italic;
			text-align: center;
			font-family: "October";

		}

		.mem-img {
			width: calc(1.000* 250px);
			height: 1 calc(1.000* 60px);
		}

		.mem-img-two {
			width: calc(1.000* 330px);
			height: calc(1.000* 230px);
		}

		.mem-img-one {
			padding-top: calc(1.000* 10px);
			display: flex;
			justify-content: center;
		}



		.mem-img-three {
			display: flex;
		}

		.mem-parent {
			display: flex;
			flex-direction: column;
			justify-content: space-between;
			width: 100%;
			height: 100%;
		}
	</style>

	</head>
	<?php 
echo "<pre>";
print_r($form);
echo "</pre>";

?>

	<body>

		<div id="index-container">
			<div class="outline">

				<div class="index-b-parent">
					<p class="index-b-class"><?php echo $form['school']; ?></p>

					<p class="index-b-name"><?php echo $form['class']; ?></p>

				</div>
			</div>
		</div>



		<!-- Page two -->
		<div id="container-two">

			<div class="three-outline">

				<div class="three-page-posation">

					<div>

						<div class="three-text-posation">
							<p class="three-head">Vorwort</p>
							<h1 class="three-dots-size">...</h1>

							<p class="three-paragraph-font">
								Vier Jahre... Vier Jahre, in denen wir gemeinsam gewachsen sind und
								uns gegenseitig motiviert und unterstützt haben. Ich danke jedem
								einzelnen Mitschüler und all unseren Lehrern für diese interessante,
								lustige und lehrreiche Zeit und wünsche euch alles Gute für die
								Zukunft!
							</p>
							<p class="three-paragraph-font">Noam Hunkeler, Klassensprecher</p>
						</div>

					</div>


					<div>
						<div>
							<div class="three-parent-posation">
								<img src="https://mychapter.shop/frontend/assets/pexels-cori-rodriguez-1187086.jpg"
									class="three-img-pos" alt="" />

								<div class="three-horizantal"><img
										src="https://mychapter.shop/frontend/assets/png's/vertical-thin.png"
										class="three-test-two" alt="">
								</div>

								<div class="three-vertical"><img
										src="https://mychapter.shop/frontend/assets/png's/vertical-thin.png"
										class="three-test" alt="">
								</div>

								<div class="three-horizantal-top"><img
										src="https://mychapter.shop/frontend/assets/png's/vertical-thin.png"
										class="three-test-four" alt=""></div>

								<div class="three-vertical-right"><img
										src="https://mychapter.shop/frontend/assets/png's/vertical-thin.png"
										class="three-test-three" alt=""></div>

							</div>
						</div>
					</div>
					<p class="three-footer">2019 - 2022</p>

				</div>
			</div>
		</div>
		<!-- Page two End-->


		<div id="container-three">
			<div class="five-outline">
				<div class="five-font-family">
					<p class="five-head">Schüler*innen der Klasse</p>
					<p class="five-font-side"><?php echo $form['class']; ?></p>
				</div>
				<div class="five-wrapper">
					<!-- Row 1 start -->
					<div class="five-row">
						<?php 
        //  echo "<pre>";
        //  echo count($formdata);
        //  echo "<br>";
        
        $noofpages=0;
        if(count($formdata)>8){
            $newcount=count($formdata)-8;
            $outs=$newcount/12;
         //  echo "<br>";
          $noofpages=ceil($outs);

        }

 //echo "</pre>";
        $firstend=count($formdata);
        if(count($formdata)>8){
            $firstend=8;
        }

        
        for($i=0;$i<$firstend;$i++){ ?>
						<div>
							<img src="<?php echo base_url().$formdata[$i]['image']; ?>" class="five-img-style" alt="" />
							<p class="five-std-name"><?php echo $formdata[$i]['fullname']; ?></p>
							<p class="five-std-desc"><?php echo $formdata[$i]['q10']; ?></p>
						</div>
						<?php } ?>


					</div>
					<!-- Row 1 End -->


				</div>
			</div>
		</div>
		<!-- Page three End -->

		<!-- Page four -->
		<?php 
$intailpoint=8;
for($j=0;$j<$noofpages;$j++) {
    $newlimit=$intailpoint+12;
    if($newlimit>=count($formdata)){
        $newlimit=count($formdata);
    }
   
    ?>
		<div id="container-four">
			<div class="four-outline">
				<!-- Row 1 start -->
				<div class="four-row">
					<?php for($i=$intailpoint;$i<$newlimit;$i++){ ?>
					<div>
						<img src="<?php echo base_url().$formdata[$i]['image']; ?>" class="four-img-style" alt="" />
						<p class="four-std-name"><?php echo $formdata[$i]['fullname']; ?></p>
						<p class="four-std-desc"><?php echo $formdata[$i]['q10']; ?></p>
					</div>
					<?php }
    $intailpoint=$newlimit;
    
    ?>

					<!-- Row 1 End -->


					<!-- Row 3 End -->
				</div>
			</div>
		</div>
		<?php } ?>

		<!-- page four End -->


		<!-- page Five -->
		<div id="container-five">
			<div class="seven-outline">
				<p class="seven-heading-one">Lehrerin der Klasse</p>

				<p class="seven-heading-two"><?php echo $form['class']; ?></p>

				<div class="seven-paper-style">
					<div class="seven-section">
						<div>
							<strong>Was ist Ihre schönste Erinnerung mit dieser Klasse?</strong>
						</div>
						<p>
							<?php echo $teacherdata['ques-1']; ?>
						</p>
					</div>

					<div class="seven-section">
						<div>
							<strong>Welchen Berufswunsch hatten Sie mit 18 Jahren?</strong>
						</div>
						<p>
							<?php echo $teacherdata['ques-2']; ?>
						</p>

						<strong>Wer ist Ihr Vorbild?</strong>
						<p>
							<?php echo $teacherdata['ques-3']; ?>
						</p>

						<strong>Welche drei Adjektive beschreiben Ihren Unterricht am
							Besten?</strong>
						<p> <?php echo $teacherdata['ques-4']; ?></p>
					</div>
				</div>
			</div>
		</div>
		<!-- Page five  End-->


		<!-- Page Six -->
		<div id="container-six">
			<div class="six-outline">
				<div class="six-page-posation">
					<div class="six-profile">
						<p class="six-header-text"> <?php echo $teacherdata['vorname']; ?></p>
						<div class="six-top">
							<div class="six-profile-paper">
								<p class="six-font-style">Spitzname:</p>
								<span><?php echo $teacherdata['spitzname']; ?></span>
							</div>
							<div class="six-profile-paper">
								<p class="six-font-style">Geburtstag:</p>
								<span><?php echo $teacherdata['dob']; ?></span>
							</div>
							<div class="six-profile-paper">
								<p class="six-font-style">Als Tier wäre ich eine:</p>
								<span><?php echo $teacherdata['alsTier']; ?></span>
							</div>
						</div>
					</div>
					<div>
						<div class="six-parent-posation">
							<img src="<?php echo $teacherdata['image'] ?>" class="six-img-pos" alt="" />

							<div class="six-horizantal"><img
									src="https://mychapter.shop/frontend/assets/png's/vertical-thick.png"
									class="six-test-two" alt="">
							</div>
							<div class="six-vertical"><img
									src="https://mychapter.shop/frontend/assets/png's/vertical-thick.png"
									class="six-test" alt=""></div>

						</div>
					</div>
				</div>

				<div>
					<div>
						<div class="six-body">
							<div class="six-one">
								<h5>Was ist Ihre schönste Erinnerung mit dieser Klasse?</h5>
								<p>
									<?php echo $teacherdata['ques-1']; ?>
								</p>

								<h5>
									Welche drei Adjektive beschreiben Ihren Unterricht am Besten?
								</h5>
								<p>
									<?php echo $teacherdata['ques-4']; ?>
								</p>
							</div>
							<div class="six-two">
								<h5>Welchen Berufswunsch hatten Sie mit 18 Jahren?</h5>
								<p>
									<?php echo $teacherdata['ques-2']; ?>
								</p>
								<h5>Wer ist Ihr Vorbild?</h5>
								<p>
									<?php echo $teacherdata['ques-3']; ?>
								</p>
							</div>
						</div>
						<p class="six-footer">Die besten Lehrer lernen von ihren Schülern.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- Page Six -end-->

		<!-- Page-seven Comment-->
		<?php
        $myarra=array();
        $topname1="";
        $topmarks1=0;
        $topname2="";
        $topmarks2=0;
        $topname3="";
        $topmarks3=0;
        
        foreach($formdata  as $formdat) {
            $myarray=array();
            $myarray['name']=$formdat['fullname'];
            $myarray['image']=$formdat['image'];
            $checkfullname=explode(" ",$formdat['fullname']);
            $myarray["q1"]=count($this->db->where_in('fersterAuswanderer',$checkfullname)->get('formdata')->result_array());
            if($topname1==""){
                $topname1 =$myarray['name'];
                $topmarks1=$myarray["q1"];
            }else{
                if($topmarks1>=$myarray["q1"] && $topname3 =="" ){
                    $topname2=$myarray['name'];
                    $topmarks2=$myarray["q1"];                    
                }else if($topmarks1<$myarray["q1"] && $topname3 ==""){
                    $local1=$topname1;
                    $localmarks=$topmarks1;
                    $topname1 =$myarray['name'];
                    $topmarks1=$myarray["q1"];
                    $topname2=$local1;
                    $topmarks2=$localmarks;    
                }else{}
                if($topname3 ==""){
                    if($myarray["q1"]>$topmarks1){
                        $local1=$topname1;
                    $localmarks=$topmarks1;
                    $local2=$topname2;
                    $localmarks2=$topmarks2;
                    $topname1 =$myarray['name'];
                    $topmarks1=$myarray["q1"];
                    $topname2=$local1;
                    $topmarks2=$localmarks;   


                        


                    } 


                }


            }

            
            $myarray["q2"]=count($this->db->where_in('flabertasche',$checkfullname)->get('formdata')->result_array());
            $myarray["q3"]=count($this->db->where_in('fcomedian',$checkfullname)->get('formdata')->result_array());
            $myarray["q4"]=count($this->db->where_in('fminimalist',$checkfullname)->get('formdata')->result_array());
            $myarray["q5"]=count($this->db->where_in('fsportfanatiker',$checkfullname)->get('formdata')->result_array());
            $myarray["q6"]=count($this->db->where_in('fwird',$checkfullname)->get('formdata')->result_array());
            array_push($myarra,$myarray);
//fcomedian
//fminimalist
//fsportfanatiker
//fwird
            
            ?>
		<div id="container-seven">

			<div class="eight-outline">

				<div class="eight-page-posation">

					<div class="eight-profile">
						<h1 class="eight-header-text"><?php echo $formdat['fullname'];?></h1>
						<div>
							<div class="eight-profile-paper">
								<p class="eight-font-style">Spitzname:</p>
								<span><?php echo $formdat['nickname']; ?></span>
							</div>
							<div class="eight-profile-paper">
								<p class="eight-font-style">Geburtstag:</p>
								<span> <?php echo $formdat['dob']; ?></span>
							</div>
							<div class="eight-profile-paper">
								<p class="eight-font-style">Berufswunsch:
								</p>
								<span> <?php echo $formdat['q5']; ?></span>
							</div>

						</div>


					</div>
					<div>
						<div class="eight-parent-posation">
							<img src="<?php echo base_url().$formdat['image'];  ?>" class="eight-img-pos" alt="" />

							<div class="eight-horizantal"><img
									src="https://mychapter.shop/frontend/assets/png's/vertical-thick.png"
									class="eight-test-two" alt="">
							</div>
							<div class="eight-vertical"><img
									src="https://mychapter.shop/frontend/assets/png's/vertical-thick.png"
									class="eight-test" alt=""></div>

						</div>
					</div>
				</div>


				<div class="eight-body-content">


					<div class="eight-left-side">
						<p class="eight-quest">In fünf Jahren bin ich...</p>
						<p class="eight-ans">hoffentlich an der Schule für Design
							in Paris. </p>
						<p class="eight-quest">In fünf Jahren bin ich... </p>
						<p class="eight-ans">meinem Traum näher Tierärztin zu
							werden.</p>

					</div>
					<div class="eight-right-side">

						<p class="eight-quest">Das erste was ich tun würde wenn
							ich im Lotto gewinne...</p>
						<p class="eight-ans">Ein Pferdealtersheim gründen.
						</p>
						<p class="eight-quest">Das erste was ich tun würde wenn
							ich im Lotto gewinne...</p>
						<p class="eight-ans">Ein Pferdealtersheim gründen.
						</p>
					</div>

				</div>





				<div class="eight-wrapper">

					<p class="eight-comment ">Kommentare</p>

					<?php 
                        $q=$this->db->select('image')->like('fullname', $formdat['vorname1'], 'both')->get('formdata')->row_array();
		$imageurl="";

		if( !empty($q) && $q['image'] !="") {
			$imageurl=base_url().$q['image'];
		}

		else {
			$imageurl=base_url()."/uploads/common/noimage.png";
		}

?>
					<div class="eight-chat-parent">
						<div class="eight-chat-one ">
							<div class="eight-chat-paper">
								<img src="<?php echo $imageurl; ?>" class="eight-img-test " alt="">
								<div class="eight-relative">
									<b> <i><?php echo $formdat['koment1'];?></i></b>
									<div class="eight-absolute"><img
											src="https://mychapter.shop/frontend/fonts/Frame%201.png" alt=""></div>
								</div>
							</div>
							<?php $q=$this->db->select('image')->like('fullname', $formdat['vorname2'], 'both')->get('formdata')->row_array();
$imageurl="";

if( !empty($q) && $q['image'] !="") {
	$imageurl=base_url().$q['image'];
}

else {
	$imageurl=base_url()."uploads/common/noimage.png";
}
?>
							<div class="eight-chat-paper">
								<img src="<?php echo $imageurl; ?>" class="eight-img-test" alt="">
								<div class="eight-relative">
									<b> <i><?php echo $formdat['koment2'];?></i></b>
									<div class="eight-absolute"><img
											src="https://mychapter.shop/frontend/fonts/Frame%201.png" alt=""></div>
								</div>
							</div>
						</div>
						<?php $q=$this->db->select('image')->like('fullname', $formdat['vorname3'], 'both')->get('formdata')->row_array();
$imageurl="";

if( !empty($q) && $q['image'] !="") {
	$imageurl=base_url().$q['image'];
}

else {
	$imageurl=base_url()."uploads/common/noimage.png";
}

?>
						<div class="eight-chat-one ">
							<div class="eight-chat-paper">
								<img src="<?php echo $imageurl; ?>" class="eight-img-test " alt="">
								<div class="eight-relative">
									<b> <i><?php echo $formdat['koment3'];?></i></b>
									<div class="eight-absolute"><img
											src="https://mychapter.shop/frontend/fonts/Frame%201.png" alt=""></div>
								</div>
							</div>
							<!--
                    <div class="eight-chat-paper">
                        <img src="https://mychapter.shop/frontend/assets/images/Teacher.jpg" class="eight-img-test" alt="">
                        <div class="eight-relative">
                            <b> <i>Vielen Dank dass
                                    Sie uns mit Ihrer aufgestellten Art immer
                                    so motiviert haben.</i></b>
                            <div class="eight-absolute"><img src="https://mychapter.shop/frontend/fonts/Frame%201.png" alt=""></div>
                        </div>
                    </div>
-->
						</div>
					</div>
				</div>



			</div>
		</div>
		<?php } ?>

		<!-- page seven End -->
<?php
echo "<pre>";
print_r($myarra);
echo "</pre>";

?>
		<!-- Page eight Rating -->
		<div id="container-eight">
			<div class="nine-outline">
				<div style="height: calc(4.1666* 60px)">
					<p class="nine-header">Ranking</p>
				</div>
				<div class="nine-parent">
					<div class="nine-std-style">
						<div class="nine-std-posation">
							<div class="nine-box-paper">
								<img src="../assets/profile-pic.jpg" class="nine-img-size" alt="" />
								<p class="nine-box">2</p>
								<p class="nine-name-paper">suro</p>
							</div>

							<div class="nine-box-margin">
								<div class="nine-box-paper">
									<img src="../assets/profile-pic.jpg" class="nine-img-size" alt="" />
									<p class="nine-box-two">1</p>
									<p class="nine-name-paper">Ericx</p>
								</div>
							</div>

							<div class="nine-box-paper">
								<img src="../assets/profile-pic.jpg" class="nine-img-size" alt="" />

								<p class="nine-box-three">3</p>
								<p class="nine-name-paper">jamilx</p>
							</div>
						</div>
						<p class="nine-name">Erste*r Auswanderer*in</p>
					</div>

					<div>
						<div class="nine-std-style">
							<div class="nine-std-posation">
								<div class="nine-box-paper">
									<img src="../assets/profile-pic.jpg" class="nine-img-size" alt="" />

									<p class="nine-box">2</p>
									<p class="nine-name-paper">suro</p>
								</div>

								<div class="nine-box-margin">
									<div class="nine-box-paper">
										<img src="../assets/profile-pic.jpg" class="nine-img-size" alt="" />
										<p class="nine-box-two">1</p>
										<p class="nine-name-paper">Ericz</p>
									</div>
								</div>

								<div class="nine-box-paper">
									<img src="../assets/profile-pic.jpg" class="nine-img-size" alt="" />

									<p class="nine-box-three">3</p>
									<p class="nine-name-paper">jamilz</p>
								</div>
							</div>
							<p class="nine-name">Labertasche</p>
						</div>
					</div>
					<div class="nine-std-style">
						<div class="nine-std-posation">
							<div class="nine-box-paper">
								<img src="../assets/profile-pic.jpg" class="nine-img-size" alt="" />

								<p class="nine-box">2</p>
								<p class="nine-name-paper">suro</p>
							</div>

							<div class="nine-box-margin">
								<div class="nine-box-paper">
									<img src="../assets/profile-pic.jpg" class="nine-img-size" alt="" />
									<p class="nine-box-two">12</p>
									<p class="nine-name-paper">Eric</p>
								</div>
							</div>

							<div class="nine-box-paper">
								<img src="../assets/profile-pic.jpg" class="nine-img-size" alt="" />

								<p class="nine-box-three">3</p>
								<p class="nine-name-paper">jamil</p>
							</div>
						</div>
						<p class="nine-name">Philosoph*in</p>
					</div>

					<div>
						<div class="nine-std-style">
							<div class="nine-std-posation">
								<div class="nine-box-paper">
									<img src="../assets/profile-pic.jpg" class="nine-img-size" alt="" />

									<p class="nine-box">2</p>
									<p class="nine-name-paper">suro</p>
								</div>

								<div class="nine-box-margin">
									<div class="nine-box-paper">
										<img src="../assets/profile-pic.jpg" class="nine-img-size" alt="" />
										<p class="nine-box-two">1</p>
										<p class="nine-name-paper">Eric</p>
									</div>
								</div>

								<div class="nine-box-paper">
									<img src="../assets/profile-pic.jpg" class="nine-img-size" alt="" />

									<p class="nine-box-three">3</p>
									<p class="nine-name-paper">jamil</p>
								</div>
							</div>
							<p class="nine-name">Stand Up Komiker*in</p>
						</div>
					</div>

				</div>


			</div>
		</div>
		<!-- Page eight Rating End -->

		<!-- Page NiNe Rating Start -->
		<div id="container-nine">
			<div class="ten-outline">
				<div style="height:  calc(4.1666*60px)"></div>
				<div class="ten-parent">
					<div class="ten-std-style">
						<div class="ten-std-posation">
							<div class="ten-box-paper">
								<img src="../assets/profile-pic.jpg" class="ten-img-size" alt="" />
								<p class="ten-box">2</p>
								<p class="ten-name-paper">suro</p>
							</div>

							<div class="ten-box-margin">
								<div class="ten-box-paper">
									<img src="../assets/profile-pic.jpg" class="ten-img-size" alt="" />
									<p class="ten-box-two">1</p>
									<p class="ten-name-paper">Ericx</p>
								</div>
							</div>

							<div class="ten-box-paper">
								<img src="../assets/profile-pic.jpg" class="ten-img-size" alt="" />

								<p class="ten-box-three">3</p>
								<p class="ten-name-paper">jamilx</p>
							</div>
						</div>
						<p class="ten-name">Erste*r Auswanderer*in</p>
					</div>

					<div>
						<div class="ten-std-style">
							<div class="ten-std-posation">
								<div class="ten-box-paper">
									<img src="../assets/profile-pic.jpg" class="ten-img-size" alt="" />

									<p class="ten-box">2</p>
									<p class="ten-name-paper">suro</p>
								</div>

								<div class="ten-box-margin">
									<div class="ten-box-paper">
										<img src="../assets/profile-pic.jpg" class="ten-img-size" alt="" />
										<p class="ten-box-two">1</p>
										<p class="ten-name-paper">Ericz</p>
									</div>
								</div>

								<div class="ten-box-paper">
									<img src="../assets/profile-pic.jpg" class="ten-img-size" alt="" />

									<p class="ten-box-three">3</p>
									<p class="ten-name-paper">jamilz</p>
								</div>
							</div>
							<p class="ten-name">Labertasche</p>
						</div>
					</div>
					<div class="ten-std-style">
						<div class="ten-std-posation">
							<div class="ten-box-paper">
								<img src="../assets/profile-pic.jpg" class="ten-img-size" alt="" />

								<p class="ten-box">2</p>
								<p class="ten-name-paper">suro</p>
							</div>

							<div class="ten-box-margin">
								<div class="ten-box-paper">
									<img src="../assets/profile-pic.jpg" class="ten-img-size" alt="" />
									<p class="ten-box-two">12</p>
									<p class="ten-name-paper">Eric</p>
								</div>
							</div>

							<div class="ten-box-paper">
								<img src="../assets/profile-pic.jpg" class="ten-img-size" alt="" />

								<p class="ten-box-three">3</p>
								<p class="ten-name-paper">jamil</p>
							</div>
						</div>
						<p class="ten-name">Philosoph*in</p>
					</div>

					<div>
						<div class="ten-std-style">
							<div class="ten-std-posation">
								<div class="ten-box-paper">
									<img src="../assets/profile-pic.jpg" class="ten-img-size" alt="" />

									<p class="ten-box">2</p>
									<p class="ten-name-paper">suro</p>
								</div>

								<div class="ten-box-margin">
									<div class="ten-box-paper">
										<img src="../assets/profile-pic.jpg" class="ten-img-size" alt="" />
										<p class="ten-box-two">1</p>
										<p class="ten-name-paper">Eric</p>
									</div>
								</div>

								<div class="ten-box-paper">
									<img src="../assets/profile-pic.jpg" class="ten-img-size" alt="" />

									<p class="ten-box-three">3</p>
									<p class="ten-name-paper">jamil</p>
								</div>
							</div>
							<p class="ten-name">Stand Up Komiker*in</p>
						</div>
					</div>


				</div>
			</div>
		</div>
		<!-- Page NiNe Rating End -->


		<!-- Page Ten -->
		<div id="container-nine">
			<div class="outline">
				<div class="mem-parent">
					<p class="mem-heading" style="height:calc(1.000*50px);">Memories</p>
					<div class="mem-img-two">
						<?php if($memoriesdata['image1'] !=""){ ?>
						<img src="<?php echo $memoriesdata['image1']; ?>" class="mem-img" alt="" />
						<?php } ?>
					</div>
					<div class="mem-img-three">
						<?php if($memoriesdata['image2'] !=""){ ?>
						<img src="<?php echo $memoriesdata['image2']; ?>" class="mem-img" alt="" />
						<?php } ?>
					</div>
					<div class="mem-img-one">
						<?php if($memoriesdata['image3'] !=""){ ?>
						<img src="<?php echo $memoriesdata['image3']; ?>" class="mem-img-two" alt="" />
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<!-- Page Ten End-->


		<!-- Page Eleven memory -->

		<div id="container-eleven">
			<div class="mem-outline">
				<div class="mem-parent">
					<p class="mem-heading" style="height: calc(1.000*50px); margin: 0px;"></p>
					<div class="mem-img-one">
						<?php if($memoriesdata['image4'] !=""){ ?>
						<img src="<?php echo $memoriesdata['image4']; ?>" class="mem-img-two" alt="" />
						<?php } ?>
					</div>
					<div class="mem-img-two">
						<?php if($memoriesdata['image5'] !=""){ ?>
						<img src="<?php echo $memoriesdata['image5']; ?>" class="mem-img" alt="" />
						<?php } ?>
					</div>
					<div class="mem-img-three">
						<?php if($memoriesdata['image6'] !=""){ ?>
						<img src="<?php echo $memoriesdata['image6']; ?>" class="mem-img" alt="" />
						<?php } ?>
					</div>

				</div>
			</div>
		</div>
		<!-- PAge Eleven End -->
		<!-- Page Eleven memory -->

		<div id="container-eleven">
			<div class="mem-outline">
				<div class="mem-parent">
					<p class="mem-heading" style="height: calc(1.000*50px); margin: 0px;"></p>
					<div class="mem-img-one">
						<?php if($memoriesdata['image7'] !=""){ ?>
						<img src="<?php echo $memoriesdata['image7']; ?>" class="mem-img-two" alt="" />
						<?php } ?>
					</div>
					<div class="mem-img-two">
						<?php if($memoriesdata['image8'] !=""){ ?>
						<img src="<?php echo $memoriesdata['image8']; ?>" class="mem-img" alt="" />
						<?php } ?>
					</div>
					<div class="mem-img-three">
						<?php if($memoriesdata['image9'] !=""){ ?>
						<img src="<?php echo $memoriesdata['image9']; ?>" class="mem-img" alt="" />
						<?php } ?>
					</div>

				</div>
			</div>
		</div>
		<!-- PAge Eleven End -->

	</body>

</html>