<html>
 <head>
   <title>Covid-19</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
  padding: 40px;
  color:grey;
  font-size: 80px;
}

@media screen and (max-width:50rem){
  h1{
    color:grey;
    font-size: 23px;
  }
}

/*********************************************updates around india**************************************************************************************/

.box_active{
  border:5px solid #fff;
  background-color: #ff3333;
  border-radius: 10px;
  color: #fff;
  padding:10px;
  width:30px;
  height:75px;
  text-align: center;
}

.box_recovered{
  border:5px solid #fff;
  background-color: #00ff80;
  border-radius: 10px;
  color: #fff;
  padding:10px;
  width:30px;
  height:75px;
  text-align: center;
}

.box_death{
  border:5px solid #fff;
  background-color: #00bfff;
  border-radius: 10px;
  color: #fff;
  padding:10px;
  width:30px;
  height:75px;
  text-align: center;
}

.box_total{
  border:5px solid #fff;
  background-color: #8c7373;
  border-radius: 10px;
  color: #fff;
  padding:10px;
  width:30px;
  height:75px;
  text-align: center;
}


h2{
  color:grey;
  font-size: 40px;
  padding-bottom: 10px;
  margin-left: 250px;
}

@media screen and (max-width:50rem){
  h2{
    color:grey;
    font-size: 15px;
    padding-bottom: 5px;
    margin-left: 50px;
  }

  .box_active{
    border:2px solid #fff;
    padding:5px;
    width:30px;
    height:55px;
    font-size: 10px;
  }

  .box_recovered{
    font-size: 10px;
    border:2px solid #fff;
    padding:5px;
    width:30px;
    height:55px;
  }

  .box_death{
    border:2px solid #fff;
    padding:5px;
    width:30px;
    height:55px;
    font-size:10px;
  }

  .box_total{
    border:2px solid #fff;
    padding:5px;
    width:30px;
    height:55px;
    font-size: 10px;
  }

}

/*********************************************helpline no.*********************************************************************************************/

/*****************************************update uttarakhand*******************************************************************************************/
h3{
  color:grey;
  font-size: 40px;
  padding-top: 20px;
  padding-bottom: 15px;

}

@media screen and (max-width:50rem){
  h3{
    color:grey;
    font-size: 15px;
    padding-bottom: 5px;
    padding-top: 10px;
  }
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
  background-color: grey;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 30px;
}

#myBtn:hover {
  background-color: #555;

}

html{
  scroll-behavior: smooth;
}


/***********************************************footer******************************************************************************************/
.footer{
  border: 1px solid grey;
  background-color:grey;
  color:#fff;
  width:1270px;
  height:800px;
  padding:20px;
  margin-top: 20px;
}

@media screen and (max-width:50rem){
  .footer{
    width:370px;
    height:1000px;
  }
}
a{
  color:#fff;
}

.space{
  padding-bottom: 20px;
}

   </style>
 </head>
 <body>

   <!-------------------------menu------------------------------------------------------------------------------------------------------------->

   <div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="about_corona.php">Everything about Corona</a>
  <a href="symptoms.php">Symptoms</a>
  <a href="Prevent.php">How to Prevent?</a>
  <a href="myths.php">Mythbusters</a>
  <a href="India_live.php">India live Updates</a>
  <a href="Contactform.php">Need Help?</a>
  <a href="bot.php">Quick reply</a>
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
      <h1>Covid 19<br>Tracker</h1>

      </div>
      <div class="col-4">
       <img src="cdc-k0KRNtqcjfw-unsplash.jpg">
      </div>
      </div>


<!-----------------------------------------------updates around INDIA---------------------------------------------------------------->

<script>
fetch('https://api.covid19api.com/summary')
.then((apidata)=>{
  //console.log(apidata);
  return apidata.json();
})
.then((actualdata)=>{
  const data=actualdata.Countries[76];
  document.getElementById('total_cases').innerHTML=data.TotalConfirmed;
  document.getElementById('total_recovered').innerHTML=data.TotalRecovered;
  document.getElementById('total_deaths').innerHTML=data.TotalDeaths;
  document.getElementById('total_active').innerHTML=data.NewConfirmed;
})
.catch((error)=>{
  console.log(error);
});
</script>
<h2>COVID 19 Updates Around India</h2>
<div class="row">

  <div class="col box_active">
  <p><strong>NEW ACTIVE CASES<br></strong><b id="total_active"></b> </p>
</div>

<div class="col box_total">
  <p><strong>TOTAL CASES<br></strong><b id="total_cases"></b> </p>
</div>

<div class="col box_recovered">
  <p><strong>CURED<br></strong><b id="total_recovered"></b> </p>
</div>

<div class="col box_death">
  <p><strong>DEATHS<br></strong><b id="total_deaths"></b> </p>
</div>


</div>




<!------------------------------------updates uttarakhand table-------------------------------------------------------------------------------------------------->

<section class="corona_update container-fluid">
     <h3 class="text-center"> COVID-19 Live Updates of Uttarakhand</h3>

<div class="table-responsive">

  <table class="table table-bordered table-striped text-center">
    <tr>
       <th class="text-capitalize">district</th>
       <th class="text-capitalize">confirmed</th>
       <th class="text-capitalize">active</th>
       <th class="text-capitalize">recovered</th>
       <th class="text-capitalize">deaths</th>
    </tr>

  <?php
  $data=file_get_contents('https://api.covid19india.org/state_district_wise.json');
  $corona=json_decode($data, true);
?>
  <tr>
    <td>Almora</td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Almora']['confirmed']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Almora']['active']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Almora']['recovered']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Almora']['deceased']?></td>
  </tr>

  <tr>
    <td>Chamoli</td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Chamoli']['confirmed']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Chamoli']['active']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Chamoli']['recovered']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Chamoli']['deceased']?></td>
  </tr>

  <tr>
    <td>Champawat</td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Champawat']['confirmed']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Champawat']['active']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Champawat']['recovered']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Champawat']['deceased']?></td>
  </tr>

  <tr>
    <td>Dehradun</td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Dehradun']['confirmed']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Dehradun']['active']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Dehradun']['recovered']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Dehradun']['deceased']?></td>
  </tr>

  <tr>
    <td>Haridwar</td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Haridwar']['confirmed']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Haridwar']['active']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Haridwar']['recovered']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Haridwar']['deceased']?></td>
  </tr>

  <tr>
    <td>Nainital</td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Nainital']['confirmed']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Nainital']['active']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Nainital']['recovered']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Nainital']['deceased']?></td>
  </tr>

  <tr>
    <td>Pauri Garhwal</td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Pauri Garhwal']['confirmed']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Pauri Garhwal']['active']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Pauri Garhwal']['recovered']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Pauri Garhwal']['deceased']?></td>
  </tr>

  <tr>
    <td>Pithoragarh</td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Pithoragarh']['confirmed']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Pithoragarh']['active']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Pithoragarh']['recovered']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Pithoragarh']['deceased']?></td>
  </tr>

  <tr>
    <td>Rudraprayag</td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Rudraprayag']['confirmed']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Rudraprayag']['active']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Rudraprayag']['recovered']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Rudraprayag']['deceased']?></td>
  </tr>

  <tr>
    <td>Tehri Garhwal</td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Tehri Garhwal']['confirmed']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Tehri Garhwal']['active']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Tehri Garhwal']['recovered']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Tehri Garhwal']['deceased']?></td>
  </tr>

  <tr>
    <td>Udham Singh Nagar</td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Udham Singh Nagar']['confirmed']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Udham Singh Nagar']['active']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Udham Singh Nagar']['recovered']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Udham Singh Nagar']['deceased']?></td>
  </tr>

  <tr>
    <td>Uttarkashi</td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Uttarkashi']['confirmed']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Uttarkashi']['active']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Uttarkashi']['recovered']?></td>
    <td><?php echo $corona['Uttarakhand']['districtData']['Uttarkashi']['deceased']?></td>
  </tr>

  </table>

</div>

</div>

</section>

<!------------------------------------------------footer------------------------------------------------------------------------------------------>

<div class="row footer">
  <div class="col space">
    <h5>Useful Links</h5>
    <a href="https://health.uk.gov.in/pages/view/102-dedicated-covid-facilities-in-state">https://health.uk.gov.in/pages/view/102-dedicated-covid-facilities-in-state</a><br>
    <a href="https://www.who.int/">https://www.who.int/</a><br>
    <a href="https://www.mohfw.gov.in/">https://www.mohfw.gov.in/</a><br>
    <a href="https://uk.gov.in/pages/display/983-districts">https://uk.gov.in/pages/display/983-districts</a>
    <a href="https://www.mygov.in/covid-19">https://www.mygov.in/covid-19</a><br>
    <a href="https://en.unesco.org/covid19/educationresponse">https://en.unesco.org/<br>covid19/educationresponse</a><br>
    <a href="https://www.un.org/en/coronavirus">https://www.un.org/en/coronavirus</a><br>
    <a href="https://novel-coronavirus.onlinelibrary.wiley.com">https://novel-coronavirus.onlinelibrary.wiley.com</a><br>
    <a href="https://www.nih.gov/coronavirus">https://www.nih.gov/coronavirus</a><br>
    <a href="https://www.imf.org/en/Topics/imf-and-covid19/Policy-Responses-to-COVID-19">https://www.imf.org/en/Topics/imf-and-covid19/Policy-Responses-to-COVID-19</a><br>
  </div>

  <div class="col space">
    <h5>API/Sources</h5>
    <p>https://api.covid19api.com/summary</p>
    <p>https://api.covid19india.org/state_district_wise.json</p>
    <p>https://api.covid19india.org/data.json</p>
    <a href="https://www.mohfw.gov.in/">https://www.mohfw.gov.in/</a><br>
    <a href="https://www.un.org/en/coronavirus">https://www.un.org/en/coronavirus</a><br>
  </div>

  <div class="col space">
    <h5>Contact Us</h5>
    <p>rashijoshi1999913@gmail.com</p>
    <p>riyabisht2617@gmail.com</p>
    <p>rs.sainiradhika123@gmail.com</p>
    <p>rneha0240@gmail.com</p>
  </div>
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

 </body>
 </html>
