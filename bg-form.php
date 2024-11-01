<style>

input[type=checkbox] {
	visibility: hidden;
}
#cont2 input[type=text] {
  display: block;
  margin: 0;
  width: 80px;
  font-family:Arial, Helvetica, sans-serif;
  font-size: 12px;
  appearance: none;
  box-shadow: none;
  border-radius: none;
  background-color:#FF9;
border:1px solid #999999;
padding:6px;
}
#cont2 input[type="text"]:focus {
  outline: none;
}

#cont1 input[type=text] {
  display: block;
  margin: 0;
  width: 160px;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 12px;
  appearance: none;
  box-shadow: none;
  border-radius: none;
  background-color:#FF9;
border:1px solid #999999;
padding:6px;
}
#cont1 input[type="text"]:focus {
  outline: none;
}
#cont1 select {
  display: block;
  margin: 0;
  width: 160px;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 12px;
  appearance: none;
  box-shadow: none;
  border-radius: none;
  background-color:#FF9;
border:1px solid #999999;
padding:6px;
}


/* SLIDE THREE */
.slideThree {
	width: 80px;
	height: 26px;
	background: #333;
	margin: 10px auto;

	-webkit-border-radius: 50px;
	-moz-border-radius: 50px;
	border-radius: 50px;
	position: relative;

	-webkit-box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,0.2);
	-moz-box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,0.2);
	box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,0.2);
}

.slideThree:after {
	content: 'OFF';
	font: 12px/26px Arial, sans-serif;
	color: #000;
	position: absolute;
	right: 10px;
	z-index: 0;
	font-weight: bold;
	text-shadow: 1px 1px 0px rgba(255,255,255,.15);
}

.slideThree:before {
	content: 'ON';
	font: 12px/26px Arial, sans-serif;
	color: #00bf00;
	position: absolute;
	left: 10px;
	z-index: 0;
	font-weight: bold;
}

.slideThree label {
	display: block;
	width: 34px;
	height: 20px;

	-webkit-border-radius: 50px;
	-moz-border-radius: 50px;
	border-radius: 50px;

	-webkit-transition: all .4s ease;
	-moz-transition: all .4s ease;
	-o-transition: all .4s ease;
	-ms-transition: all .4s ease;
	transition: all .4s ease;
	cursor: pointer;
	position: absolute;
	top: 3px;
	left: 3px;
	z-index: 1;

	-webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
	-moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
	box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
	background: #fcfff4;

	background: -webkit-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: -moz-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: -o-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: -ms-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fcfff4', endColorstr='#b3bead',GradientType=0 );
}

.slideThree input[type=checkbox]:checked + label {
	left: 43px;
}

/* SLIDE FOUR */
.slideFour {
	width: 80px;
	height: 26px;
	background: #333;
	margin: 10px auto;

	-webkit-border-radius: 50px;
	-moz-border-radius: 50px;
	border-radius: 50px;
	position: relative;

	-webkit-box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,0.2);
	-moz-box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,0.2);
	box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,0.2);
}

.slideFour:after {
	content: 'OFF';
	font: 12px/26px Arial, sans-serif;
	color: #000;
	position: absolute;
	right: 10px;
	z-index: 0;
	font-weight: bold;
	text-shadow: 1px 1px 0px rgba(255,255,255,.15);
}

.slideFour:before {
	content: 'ON';
	font: 12px/26px Arial, sans-serif;
	color: #00bf00;
	position: absolute;
	left: 10px;
	z-index: 0;
	font-weight: bold;
}

.slideFour label {
	display: block;
	width: 34px;
	height: 20px;

	-webkit-border-radius: 50px;
	-moz-border-radius: 50px;
	border-radius: 50px;

	-webkit-transition: all .4s ease;
	-moz-transition: all .4s ease;
	-o-transition: all .4s ease;
	-ms-transition: all .4s ease;
	transition: all .4s ease;
	cursor: pointer;
	position: absolute;
	top: 3px;
	left: 3px;
	z-index: 1;

	-webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
	-moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
	box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
	background: #fcfff4;

	background: -webkit-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: -moz-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: -o-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: -ms-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fcfff4', endColorstr='#b3bead',GradientType=0 );
}

.slideFour input[type=checkbox]:checked + label {
	left: 43px;
}

/* SLIDE FIVE */
.slideFive {
	width: 80px;
	height: 26px;
	background: #333;
	margin: 10px auto;

	-webkit-border-radius: 50px;
	-moz-border-radius: 50px;
	border-radius: 50px;
	position: relative;

	-webkit-box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,0.2);
	-moz-box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,0.2);
	box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,0.2);
}

.slideFive:after {
	content: 'OFF';
	font: 12px/26px Arial, sans-serif;
	color: #000;
	position: absolute;
	right: 10px;
	z-index: 0;
	font-weight: bold;
	text-shadow: 1px 1px 0px rgba(255,255,255,.15);
}

.slideFive:before {
	content: 'ON';
	font: 12px/26px Arial, sans-serif;
	color: #00bf00;
	position: absolute;
	left: 10px;
	z-index: 0;
	font-weight: bold;
}

.slideFive label {
	display: block;
	width: 34px;
	height: 20px;

	-webkit-border-radius: 50px;
	-moz-border-radius: 50px;
	border-radius: 50px;

	-webkit-transition: all .4s ease;
	-moz-transition: all .4s ease;
	-o-transition: all .4s ease;
	-ms-transition: all .4s ease;
	transition: all .4s ease;
	cursor: pointer;
	position: absolute;
	top: 3px;
	left: 3px;
	z-index: 1;

	-webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
	-moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
	box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
	background: #fcfff4;

	background: -webkit-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: -moz-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: -o-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: -ms-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fcfff4', endColorstr='#b3bead',GradientType=0 );
}

.slideFive input[type=checkbox]:checked + label {
	left: 43px;
}

/* SLIDE SIX */
.slideSix {
	width: 80px;
	height: 26px;
	background: #333;
	margin: 10px auto;

	-webkit-border-radius: 50px;
	-moz-border-radius: 50px;
	border-radius: 50px;
	position: relative;

	-webkit-box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,0.2);
	-moz-box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,0.2);
	box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,0.2);
}

.slideSix:after {
	content: 'OFF';
	font: 12px/26px Arial, sans-serif;
	color: #000;
	position: absolute;
	right: 10px;
	z-index: 0;
	font-weight: bold;
	text-shadow: 1px 1px 0px rgba(255,255,255,.15);
}

.slideSix:before {
	content: 'ON';
	font: 12px/26px Arial, sans-serif;
	color: #00bf00;
	position: absolute;
	left: 10px;
	z-index: 0;
	font-weight: bold;
}

.slideSix label {
	display: block;
	width: 34px;
	height: 20px;

	-webkit-border-radius: 50px;
	-moz-border-radius: 50px;
	border-radius: 50px;

	-webkit-transition: all .4s ease;
	-moz-transition: all .4s ease;
	-o-transition: all .4s ease;
	-ms-transition: all .4s ease;
	transition: all .4s ease;
	cursor: pointer;
	position: absolute;
	top: 3px;
	left: 3px;
	z-index: 1;

	-webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
	-moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
	box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
	background: #fcfff4;

	background: -webkit-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: -moz-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: -o-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: -ms-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fcfff4', endColorstr='#b3bead',GradientType=0 );
}

.slideSix input[type=checkbox]:checked + label {
	left: 43px;
}

/* SLIDE SEVEN */
.slideSeven {
	width: 80px;
	height: 26px;
	background: #333;
	margin: 10px auto;

	-webkit-border-radius: 50px;
	-moz-border-radius: 50px;
	border-radius: 50px;
	position: relative;

	-webkit-box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,0.2);
	-moz-box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,0.2);
	box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,0.2);
}

.slideSeven:after {
	content: 'OFF';
	font: 12px/26px Arial, sans-serif;
	color: #000;
	position: absolute;
	right: 10px;
	z-index: 0;
	font-weight: bold;
	text-shadow: 1px 1px 0px rgba(255,255,255,.15);
}

.slideSeven:before {
	content: 'ON';
	font: 12px/26px Arial, sans-serif;
	color: #00bf00;
	position: absolute;
	left: 10px;
	z-index: 0;
	font-weight: bold;
}

.slideSeven label {
	display: block;
	width: 34px;
	height: 20px;

	-webkit-border-radius: 50px;
	-moz-border-radius: 50px;
	border-radius: 50px;

	-webkit-transition: all .4s ease;
	-moz-transition: all .4s ease;
	-o-transition: all .4s ease;
	-ms-transition: all .4s ease;
	transition: all .4s ease;
	cursor: pointer;
	position: absolute;
	top: 3px;
	left: 3px;
	z-index: 1;

	-webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
	-moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
	box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
	background: #fcfff4;

	background: -webkit-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: -moz-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: -o-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: -ms-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fcfff4', endColorstr='#b3bead',GradientType=0 );
}

.slideSeven input[type=checkbox]:checked + label {
	left: 43px;
}

.slideTxt {
	width: 80px;
	height: 26px;

	margin: 10px auto;
	
}
.slideTxr {


	height: 26px;
	width:auto;
	
}

/* SLIDE EIGHT */
.slideEight {
	width: 80px;
	height: 26px;
	background: #333;
	margin: 10px auto;

	-webkit-border-radius: 50px;
	-moz-border-radius: 50px;
	border-radius: 50px;
	position: relative;

	-webkit-box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,0.2);
	-moz-box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,0.2);
	box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,0.2);
}

.slideEight:after {
	content: 'OFF';
	font: 12px/26px Arial, sans-serif;
	color: #000;
	position: absolute;
	right: 10px;
	z-index: 0;
	font-weight: bold;
	text-shadow: 1px 1px 0px rgba(255,255,255,.15);
}

.slideEight:before {
	content: 'ON';
	font: 12px/26px Arial, sans-serif;
	color: #00bf00;
	position: absolute;
	left: 10px;
	z-index: 0;
	font-weight: bold;
}

.slideEight label {
	display: block;
	width: 34px;
	height: 20px;

	-webkit-border-radius: 50px;
	-moz-border-radius: 50px;
	border-radius: 50px;

	-webkit-transition: all .4s ease;
	-moz-transition: all .4s ease;
	-o-transition: all .4s ease;
	-ms-transition: all .4s ease;
	transition: all .4s ease;
	cursor: pointer;
	position: absolute;
	top: 3px;
	left: 3px;
	z-index: 1;

	-webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
	-moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
	box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
	background: #fcfff4;

	background: -webkit-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: -moz-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: -o-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: -ms-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fcfff4', endColorstr='#b3bead',GradientType=0 );
}

.slideEight input[type=checkbox]:checked + label {
	left: 43px;
}

/* SLIDE NINE */
.slideNine {
	width: 80px;
	height: 26px;
	background: #333;
	margin: 10px auto;

	-webkit-border-radius: 50px;
	-moz-border-radius: 50px;
	border-radius: 50px;
	position: relative;

	-webkit-box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,0.2);
	-moz-box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,0.2);
	box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,0.2);
}

.slideNine:after {
	content: 'OFF';
	font: 12px/26px Arial, sans-serif;
	color: #000;
	position: absolute;
	right: 10px;
	z-index: 0;
	font-weight: bold;
	text-shadow: 1px 1px 0px rgba(255,255,255,.15);
}

.slideNine:before {
	content: 'ON';
	font: 12px/26px Arial, sans-serif;
	color: #00bf00;
	position: absolute;
	left: 10px;
	z-index: 0;
	font-weight: bold;
}

.slideNine label {
	display: block;
	width: 34px;
	height: 20px;

	-webkit-border-radius: 50px;
	-moz-border-radius: 50px;
	border-radius: 50px;

	-webkit-transition: all .4s ease;
	-moz-transition: all .4s ease;
	-o-transition: all .4s ease;
	-ms-transition: all .4s ease;
	transition: all .4s ease;
	cursor: pointer;
	position: absolute;
	top: 3px;
	left: 3px;
	z-index: 1;

	-webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
	-moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
	box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
	background: #fcfff4;

	background: -webkit-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: -moz-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: -o-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: -ms-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fcfff4', endColorstr='#b3bead',GradientType=0 );
}

.slideNine input[type=checkbox]:checked + label {
	left: 43px;
}

/* SLIDE TEN */
.slideTen {
	width: 80px;
	height: 26px;
	background: #333;
	margin: 10px auto;

	-webkit-border-radius: 50px;
	-moz-border-radius: 50px;
	border-radius: 50px;
	position: relative;

	-webkit-box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,0.2);
	-moz-box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,0.2);
	box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,0.2);
}

.slideTen:after {
	content: 'OFF';
	font: 12px/26px Arial, sans-serif;
	color: #000;
	position: absolute;
	right: 10px;
	z-index: 0;
	font-weight: bold;
	text-shadow: 1px 1px 0px rgba(255,255,255,.15);
}

.slideTen:before {
	content: 'ON';
	font: 12px/26px Arial, sans-serif;
	color: #00bf00;
	position: absolute;
	left: 10px;
	z-index: 0;
	font-weight: bold;
}

.slideTen label {
	display: block;
	width: 34px;
	height: 20px;

	-webkit-border-radius: 50px;
	-moz-border-radius: 50px;
	border-radius: 50px;

	-webkit-transition: all .4s ease;
	-moz-transition: all .4s ease;
	-o-transition: all .4s ease;
	-ms-transition: all .4s ease;
	transition: all .4s ease;
	cursor: pointer;
	position: absolute;
	top: 3px;
	left: 3px;
	z-index: 1;

	-webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
	-moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
	box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
	background: #fcfff4;

	background: -webkit-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: -moz-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: -o-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: -ms-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fcfff4', endColorstr='#b3bead',GradientType=0 );
}

.slideTen input[type=checkbox]:checked + label {
	left: 43px;
}
#cont1 {
	width:80%;
}
#cont2 {
	width:80%;
}
</style>
<style>
.datagrid table { border-collapse: collapse; text-align: left; width: 100%; } .datagrid {font: normal 12px/150% Arial, Helvetica, sans-serif; background: #fff; overflow: hidden; border: 4px solid #006699; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; }.datagrid table td, .datagrid table th { padding: 9px 15px; }.datagrid table thead th {background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #006699), color-stop(1, #00557F) );background:-moz-linear-gradient( center top, #006699 5%, #00557F 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#006699', endColorstr='#00557F');background-color:#006699; color:#FFFFFF; font-size: 15px; font-weight: bold; } .datagrid table thead th:first-child { border: none; }.datagrid table tbody td { color: #00496B; font-size: 12px;font-weight: normal; }.datagrid table tbody .alt td { background: #E1EEF4; color: #00496B; }.datagrid table tbody td:first-child { border-left: none; }.datagrid table tbody tr:last-child td { border-bottom: none; }.datagrid table tfoot td div { border-top: 1px solid #006699;background: #E1EEF4;} .datagrid table tfoot td { padding: 0; font-size: 12px } .datagrid table tfoot td div{ padding: 7px; }
</style>

<div class="wrap">
  <div id="icon-options-general" class="icon32"><br />
  </div>
  <h2>WooCommerce Simple Wholesale Manager</h2>
  <br />
  <form method="post" action="options.php">
<?php settings_fields( 'bg_form_fields' ); ?>
<div id="cont1">
<div class="datagrid">
<table>
<thead><tr><th>Display Settings</th><th>&nbsp;</th><th>&nbsp;</th></tr></thead>
<tfoot><tr><td colspan="3"><div id="no-paging">&nbsp;</div></tr></tfoot>
<tbody><tr><td>Show Savings:</td><td><div class="slideThree">	
	<input type="checkbox" value="1" id="slideThree" name="bg_savings" <?php checked( '1', get_option( 'bg_savings' ) ); ?> />
	<label for="slideThree"></label>
</div></td><td>*Turn On/Off to show or hide the amount customer saves</td></tr>
<tr class="alt"><td>Show Percentage Saving:</td><td><div class="slideFour">	
	<input type="checkbox" value="1" id="slideFour" name="bg_percentage" <?php checked( '1', get_option( 'bg_percentage' ) ); ?> />
	<label for="slideFour"></label>
</div></td><td>*Turn On/Off to show or hide the percentage customer saves</td></tr>
<tr><td>Show Regular Price:</td><td><div class="slideFive">	
	<input type="checkbox" value="1" id="slideFive" name="bg_regular_price" <?php checked( '1', get_option( 'bg_regular_price' ) ); ?> />
	<label for="slideFive"></label>
</div></td><td>*Turn On/Off to show or hide the Regular selling price</td></tr>

<tr><td>Label for Save:</td><td><div class="slideTxr">	
	<input size="50" name="bg_save_label" type="text" value="<?php echo get_option( 'bg_save_label' ); ?>" />
</div></td><td>*Set You Save Lable</td></tr>
<tr><td>Label for Regular Price:</td><td><div class="slideTxr">	
	<input size="50" name="bg_regular_label" type="text" value="<?php echo get_option( 'bg_regular_label' ); ?>" />
</div></td><td>*Set Regular Price Label</td></tr>
<tr><td>Label for Wholesale Price:</td><td><div class="slideTxr">	
	<input size="50" name="bg_wholesale_label" type="text" value="<?php echo get_option( 'bg_wholesale_label' ); ?>" />
</div></td><td>*Set Wholesale Price Label</td></tr>
<tr><td>Assign Wholesale Role</td><td><div class="slideTxr">	
	<select name="bg_wholesale_role">
            <?php
 global $wp_roles;
 $roles = $wp_roles->get_names();
 foreach($roles as $role) { 
 	$role = str_replace(' ', '_', $role);
	$role = strtolower($role); ?>
            <option name="role" <?php if ( get_option('bg_wholesale_role') == $role ) { echo 'selected="selected"'; } ?> value="<?php echo $role; ?>"><?php echo $role; ?></option>
            <?php } ?>
          </select>
</div></td><td>*Select a role for wholesale</td></tr>
</tbody>
</table></div>
</div>
<p></p>
<?php submit_button(); ?>
 </form>
