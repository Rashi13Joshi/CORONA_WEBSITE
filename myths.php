<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
  font-family: 'Kiwi Maru', serif;
  color:grey;
}
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

h1{
  padding-top: 10px;
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

.collapsible {
  background-color: #1abc9c;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  border:3px solid white;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #f1f1f1;
}
</style>
</head>
<body>
  <!-------------------------menu------------------------------------------------------------------------------------------------------------->

  <div class="topnav" id="myTopnav">
  <a href="Corona_Index.php"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
  <a href="#home" class="active">Mythbusters</a>
  <a href="about_corona.php">Everything about Corona</a>
  <a href="#">Symptoms</a>
  <a href="#">How to Prevent?</a>
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


<h1>You Question, We Answer...</h1>

<button class="collapsible">The coronavirus disease (COVID-19) is caused by a virus, NOT by bacteria</button>

<div class="content">
  <p>The virus that causes COVID-19 is in a family of viruses called Coronaviridae. Antibiotics do not work against viruses.

Some people who become ill with COVID-19 can also develop a bacterial infection as a complication. In this case, antibiotics may be recommended by a health care provider.

There is currently no licensed medication to cure COVID-19. If you have symptoms, call your health care provider or COVID-19 hotline for assistance.</p>
</div>

<button class="collapsible">The prolonged use of medical masks* when properly worn, DOES NOT cause CO2 intoxication nor oxygen deficiency
</button>
<div class="content">
  <p>The prolonged use of medical masks can be uncomfortable. However, it does not lead to CO2 intoxication nor oxygen deficiency. While wearing a medical mask, make sure it fits properly and that it is tight enough to allow you to breathe normally. Do not re-use a disposable mask and always change it as soon as it gets damp.</p>
</div>

<button class="collapsible">Most people who get COVID-19 recover from it</button>
<div class="content">
  <p>Most people who get COVID-19 have mild or moderate symptoms and can recover thanks to supportive care. If you have a cough, fever and difficulty breathing seek medical care early - call your health facility by telephone first. If you have fever and live in an area with malaria or dengue seek medical care immediately.</p>
</div>

<button class="collapsible">Drinking alcohol does not protect you against COVID-19 and can be dangerous</button>
<div class="content">
<p>The harmful use of alcohol increases your risk of health problems.</p>
</div>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    }
  });
}
</script>

</body>
</html>
