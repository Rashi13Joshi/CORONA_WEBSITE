<html>
 <head>
   <title>Covid-19</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300&display=swap" rel="stylesheet">
   <style>
   /************************************menu*****************************************************/

   .topnav {
     overflow: hidden;
     background-color: #DCDCDC;
   }

   .topnav a {
     float: left;
     display: block;
     color: grey;
     text-align: center;
     padding: 14px 16px;
     text-decoration: none;
     font-size: 17px;
   }

   .topnav a:hover {
     background-color: #ddd;
     color: black;
   }

   .topnav a.active {
     color: white;
   }

   .topnav .icon {
     display: none;
   }

   @media screen and (max-width: 600px) {
     .topnav a:not(:first-child) {display: none;}
     .topnav a.icon {
       float: right;
       display: block;
     }
   }

   @media screen and (max-width: 600px) {
     .topnav.responsive {position: relative;}
     .topnav.responsive .icon {
       position: absolute;
       right: 0;
       top: 0;
     }
     .topnav.responsive a {
       float: none;
       display: block;
       text-align: left;
     }
   }


/***************************************************************header******************************************************************************/
img{
  float:right;
  padding: 15px;
  height:35vw;
  width:50vw;
}

h1{
  padding-top: 15px;
  color:grey;
  font-size: 80px;
}

@media screen and (max-width:50rem){
  h1{
    color:grey;
    font-size: 23px;
    padding-top: 15px;
  }
}

.row{
  color:grey;
  font-family: 'Kiwi Maru', serif;
}

i{
  padding-top: 5px;
}

/************************************************************scrollbutton****************************************************************************/
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color:#fff;
  color:#696969;
  cursor: pointer;
  padding: 10px;
  border-radius: 15px;
}

#myBtn:hover {
  background-color: #DCDCDC;

}
html{
  scroll-behavior: smooth;
}

/***********************************************footer******************************************************************************************/
.footer{
  border: 1px solid grey;
  background-color:grey;
  color:#fff;
  height:20px;
  padding:20px;
  margin-top: 20px;
  width:1277px;
}

@media screen and (max-width:50rem){
  .footer{
      width:375px;
  }
}
</style>
</head>
<body>

<!-------------------------menu------------------------------------------------------------------------------------------------------------->

<div class="topnav" id="myTopnav">
<a href="Corona_Index.php"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
<a href="#home" class="active">Symptoms</a>
<a href="about_corona.php">Everything about Corona</a>
<a href="Prevent.php">How to Prevent?</a>
<a href="myths.php">Mythbusters</a>
<a href="India_live.php">India live Updates</a>
<a href="javascript:void(0);" class="icon" onclick="myFunction()">
 <i class="fa fa-bars"></i>
</a>
</div>

<script>
function myFunction() {
var x = document.getElementById("myTopnav");
if (x.className === "topnav") {
 x.className += " responsive";
} else {
 x.className = "topnav";
}
}
</script>


<!----------------------------------------header-------------------------------------------------------------------->
<div class="container">
   <div class="row">
     <div class="col">
   <h1>Symptoms</h1>
   </div>

   <div class="col-4">
    <img src="https://www.mines.edu/coronavirus/wp-content/uploads/sites/338/2020/08/sick.png">
   </div>
  </div>
   <div class="row">
     <div class="col">
     <p><b>COVID-19</b> affects different people in different ways. Most infected people will develop mild to moderate illness and recover without hospitalization.</p>
   </div>
  </div>
  <div class="row">
    <div class="col">
    <h2>Most common symptoms:</h2>
 </div>
   </div>
 <div class="row">
   <div class="col">
   <p><strong>1.</strong>&nbsp;fever<br>
   <strong>2.</strong>&nbsp;Dry cough<br>
   <strong>3.</strong>&nbsp;Tiredness<br></p>

  </div>
    </div>
<div class="row">
  <div class="col">
  <h2>Less common symptoms:</h2>

</div>
</div>
<div class="row">
  <div class="col">
  <p>
    <strong>1.</strong>&nbsp;Aches and pains<br>
    <strong>2.</strong>&nbsp;Sore throat<br>
    <strong>3.</strong>&nbsp;Diarrhoea<br>
    <strong>4.</strong>&nbsp;Conjunctivitis<br>
    <strong>5.</strong>&nbsp;Headache<br>
    <strong>6.</strong>&nbsp;Loss of taste or smell<br>
    <strong>7.</strong>&nbsp;A rash on skin, or discolouration of fingers or toes
</p>
</div>
  </div>
<div class="row">
  <div class="col">
  <h2>Serious symptoms:</h2><br><p>
    <strong>1.</strong>&nbsp;Difficulty breathing or shortness of breath<br>
    <strong>2.</strong>&nbsp;Chest pain or pressure<br>
    <strong>3.</strong>&nbsp;Loss of speech or movement</p>
</div>
  </div>
<div class="row">
  <div class="col">
    <p>Seek immediate medical attention if you have serious symptoms. Always call before visiting your doctor or health facility.</p>
    <p>People with mild symptoms who are otherwise healthy should manage their symptoms at home.</p>
    <p>On average it takes 5–6 days from when someone is infected with the virus for symptoms to show, however it can take up to 14 days.</p>
</div>
  </div>

  <!-----------------------------------------------scroll button----------------------------------------------------------------------------------->


  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>



  <script>
  //Get the button
  var mybutton = document.getElementById("myBtn");

  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;

  }
  </script>

 </div>
 <div class="row footer">
 </div>
  </body>
  </html>
