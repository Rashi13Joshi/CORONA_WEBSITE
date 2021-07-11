<html>
<head>
<title>India Cases live</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
tr{
  margin-bottom: 20px;
}

/***********************************************footer******************************************************************************************/
.footer{
  border: 1px solid grey;
  background-color:grey;
  color:#fff;
  height:20px;
  padding:20px;
  margin-top: 20px;
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


</style>
</head>
<body>
<section class="corona_update container-fluid">
  <div class="p-5 bg-light text-center my-3">
    <h1>Covid-19 India Tracker</h1>
    <h5 class="text-muted">
      Open Source Project for Tracking Covid 19 cases in India
    </h5>
  </div>

<div class="table-responsive">

  <table class="table table-bordered table-striped text-center">
    <tr>
       <th class="text-capitalize">last updated time</th>
       <th class="text-capitalize">state</th>
       <th class="text-capitalize">confirmed</th>
       <th class="text-capitalize">active</th>
       <th class="text-capitalize">recovered</th>
       <th class="text-capitalize">deaths</th>
    </tr>

  <?php
  $data=file_get_contents('https://api.covid19india.org/data.json');
  $corona=json_decode($data, true);

/*echo "<pre>";

print_r($corona);

echo "</pre>"*/

$statecount=count($corona['statewise']);

$i=1;
while($i < $statecount){?>
  <tr>
    <td><?php echo $corona['statewise'][$i]['lastupdatedtime']."<br>"; ?></td>
    <td><?php echo $corona['statewise'][$i]['state']."<br>"; ?></td>
    <td><?php echo $corona['statewise'][$i]['confirmed']."<br>"; ?></td>
    <td><?php echo $corona['statewise'][$i]['active']."<br>"; ?></td>
    <td><?php echo $corona['statewise'][$i]['recovered']."<br>"; ?></td>
    <td><?php echo $corona['statewise'][$i]['deaths']."<br>"; ?></td>

<?php
$i++;
}
  ?>

  </table>

</div>

</div>
<div class="p-5 bg-light text-center my-3">
  <h3 class="text-muted">
    Graphical Analysis
  </h3>
</div>
  <canvas id="mychart"></canvas>
    <canvas id="mychart2"></canvas>
      <canvas id="mychart3"></canvas>

</section>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script src="script.js"></script>

<!------------------------------------------------footer------------------------------------------------------------------------------------------>

<div class="row footer">
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

</html>
