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
  width:60vw;
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
html{
  scroll-behavior: smooth;
}

#myBtn:hover {
  background-color: #DCDCDC;

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
<a href="#home" class="active">Everything about Corona</a>
<a href="symptoms.php">Symptoms</a>
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
   <h1>About Covid 19</h1>
   </div>

   <div class="col-4">
    <img src="https://shrm-res.cloudinary.com/image/upload/c_crop,h_822,w_1464,x_456,y_0/w_auto:100,w_1200,q_35,f_auto/v1/Tools%20and%20Samples/SHRM_COVID_Quiz_ctbrzn_sgc6cm.jpg">
   </div>
  </div>
   <div class="row">
     <div class="col">
     <p><b>C</b>oronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</p>
   </div>
  </div>
  <div class="row">
    <div class="col">
    <p>Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.

    The best way to prevent and slow down transmission is to be well informed about the COVID-19 virus, the disease it causes and how it spreads. </p>
 </div>
   </div>
 <div class="row">
   <div class="col">
   <p>Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face. </p>

  </div>
    </div>
<div class="row">
  <div class="col">
  <p> The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).</p>

</div>
</div>
<div class="row">
  <div class="col">
  <h2>How does the new coronavirus spread?</h2><br><p>
As of now, researchers know that the new coronavirus is spread through droplets released into the air when an infected person coughs or sneezes. The droplets generally do not travel more than a few feet, and they fall to the ground (or onto surfaces) in a few seconds — this is why physical distancing is effective in preventing the spread.

</p>
</div>
  </div>
<div class="row">
  <div class="col">
  <h2>How did this new coronavirus spread to humans?</h2><br><p>
  COVID-19 appeared in Wuhan, a city in China, in December 2019. Although health officials are still tracing the exact source of this new coronavirus, early hypotheses thought it may be linked to a seafood market in Wuhan, China. Some people who visited the market developed viral pneumonia caused by the new coronavirus. A study that came out on Jan. 25, 2020, notes that the individual with the first reported case became ill on Dec. 1, 2019, and had no link to the seafood market. Investigations are ongoing as to how this virus originated and spread.</p>
</div>
  </div>
<div class="row">
  <div class="col">
   <h2>What is the incubation period for COVID-19?</h2><br><p>
    It appears that symptoms are showing up in people within 14 days of exposure to the virus.</p>
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
