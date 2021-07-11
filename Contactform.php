<html>
 <head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Comic Sans MS, Comic Sans, cursive;  background-image: url('dd.png');
    background-size: cover;border:5px solid #ccc; border-radius:15px;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 15px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  padding: 20px;
}
h2{text-align:center;}

/************************************menu*****************************************************/

.topnav {
  overflow: hidden;
  background-color: #DCDCDC;
  border-radius: 10px;
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


</style>
</head>
<body>
  <div class="topnav" id="myTopnav">
  <a href="Corona_Index.php"><i class="fa fa-arrow-circle-left" aria-hidden="true">Home</i></a>
  <h2>Share your details and queries and we will contact you!!</h2>

</div>

<div class="container">
  <form action="setup2.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="first_name" required placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="last_name" required placeholder="Your last name..">

    <label for="Gender">Gender</label>
    <select id="Gender" name="Gender" required>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Other">Other</option>
    </select>

	 <label for="phone" >Enter your phone number</label>
<input type="tel" required pattern="^[789]\d{9}$" id="phone" name="phone" placeholder="+91" style="border:1px solid #ccc; border-radius:15px;height:30px"><br><br>

       <label for="symptom"> Symptoms you are going through:</label>
    <textarea id="symptom" required name="symptom" placeholder="Write something.." style="height:100px"></textarea>


	<br>
    <label for="address">Address</label>
    <textarea id="address" required name="address" placeholder="Write something.." style="height:100px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
