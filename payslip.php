<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
  :root {
  --main-radius: 5px;
  --main-padding: 5px;
}

body {
  font-family: "Inter", sans-serif;
  background: #52B2BF;
}

.container {
  display: grid;
  height: 100vh;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  grid-template-rows: 0.2fr 1.5fr 1.2fr 0.8fr;
  grid-template-areas:
    "nav nav nav nav"
    "sidebar main main main"
    "sidebar content1 content2 content3"
    "sidebar footer footer footer";
  grid-gap: 0.2rem;
  font-weight: 800;
  text-transform: uppercase;
  font-size: 12px;
  color: #004d40;
  text-align: center;
}

nav {
  background: #52B2BF;
  grid-area: nav;
  border-radius: var(--main-radius);
  padding-top: var(--main-padding);
  font-size: 25px;
}

main {
  background: #F5F5F5;
  grid-area: main;
  border-radius: var(--main-radius);
  padding-top: var(--main-padding);
  
  background-repeat: no-repeat;
  background-size: 100% 100%;
  color: black;
  font-family: Serif;
  height: 500px;
}

#sidebar {
  background: #F5F5F5;
  grid-area: sidebar;
  border-radius: var(--main-radius);
  padding-top: var(--main-padding);
  font-size: 15px;
 
  
  
}




@media only screen and (max-width: 550px) {
  .container {
    grid-template-columns: 1fr;
    grid-template-rows: 0.4fr 0.4fr 2.2fr 1.2fr 1.2fr 1.2fr 1fr;
    grid-template-areas:
      "nav"
      "sidebar"
      "main"
      "content1"
      "content2"
      "content3"
      "footer";
  }
}

.button{
  align-items: center;
  appearance: none;
  background: #FAFAFA;
  border: 0;
  box-sizing: border-box;
  color: #004d40;
  cursor: pointer;
  display: inline-flex;
  font-family: "JetBrains Mono",monospace;
  height: 60px;
  justify-content: center;
  line-height: 1;
  list-style: none;
  overflow: hidden;
  padding-left: 16px;
  padding-right: 16px;
  position: relative;
  text-align: left;
  text-decoration: none;
  transition: box-shadow .15s,transform .15s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
  will-change: box-shadow,transform;
  font-size: 18px;
  width:100%;
  margin-top: 1px;
  background: #F5F5F5;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
  
}

.button:focus {
  box-shadow: #3c4fe0 0 0 0 1.5px inset, rgba(45, 35, 66, .4) 0 2px 4px, rgba(45, 35, 66, .3) 0 7px 13px -3px, #3c4fe0 0 -3px 0 inset;
}

.button:hover {
  box-shadow: rgba(45, 35, 66, .4) 0 4px 8px, rgba(45, 35, 66, .3) 0 7px 13px -3px, #3c4fe0 0 -3px 0 inset;
  transform: translateY(-2px);
}

.button:active {
  box-shadow: #3c4fe0 0 3px 7px inset;
  transform: translateY(2px);
}
textarea {
  width: 70%;
  height: 100px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}
* {
  box-sizing: border-box;
  align-content: center;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 35%;
  padding: 100px;
  height: 20px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
h2{
  font-size: 30px;
}

    </style>
<body>

<head>
  <link href="https://fonts.googleapis.com/css?family=Inter:400,800,900&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Code by Angela Delise
https://codepen.io/angeladelise/pen/YzXLdyq
  Video Tutorial: https://www.youtube.com/watch?v=68O6eOGAGqA -->

</head>

<div class="container">
  <nav></nav>
  <main>
    <br></br>
  
    <div class="w3-container">
  
</div>

<div class="w3-row-padding">
<div class="w3-third">
  <label>YEAR</label>
  <form method="post" action="days.php" >
  <select id="yearDropdown" name="year" style="width: 320px; height: 35px;">
    <option value="">Year</option>
    <script>
      for (var i = 2023; i >= 1900; i--) {
        document.write('<option value="' + i + '">' + i + '</option>');
      }
    </script>
  </select>
  


  </div>
  
  <div class="w3-third">
  <label>MONTH</label>
  <select name="wgtmsr" id="wgtmsr" style="width: 320px; height: 35px;">
    <option value="01">January</option>
    <option value="02">February</option>
    <option value="03">March</option>
    <option value="04">April</option>
    <option value="05">May</option>
    <option value="06">June</option>
    <option value="07">July</option>
    <option value="08">August</option>
    <option value="09">September</option>
    <option value="10">October</option>
    <option value="11">November</option>
    <option value="12">December</option>
</select>
  </div>
  <label>SELECT</label>
  <div class="w3-third">
  <select name="wgtmsr" id="wgtmsr" style="width: 320px; height: 35px;">
  <option value="una">1st Half</option>
  <option value="duha">2nd Half</option>
  
</select>
  </div>
</div>
<br></br>

<input type="hidden" name="selectedYear" id="selectedYear">
  <button type="submit">View</button>
</form>
<br></br>
<script>
  var yearDropdown = document.getElementById("yearDropdown");
  var selectedYearInput = document.getElementById("selectedYear");
  yearDropdown.addEventListener("change", function() {
    var selectedYear = yearDropdown.value;
    if (selectedYear !== "") {
      selectedYearInput.value = selectedYear;
    }
  });
</script>
<div class="w3-row-padding">
  <div class="w3-third">
  <label>Total Earnings</label>
    <input class="w3-input w3-border" type="" placeholder="" value=""readonly>
  </div>
  <div class="w3-third">
  <label>Total Deductions</label>
    <input class="w3-input w3-border" type="" placeholder=""value=""readonly>
  </div>
</div>

<br></br>
<div class="row">
  <div class="column" style="border: ridge;">
    
  </div>
  <div class="column" style="border: ridge; ">
    
  </div>
</div>
  </main>
  <div id="sidebar">
    <img src = "https://dm0qx8t0i9gc9.cloudfront.net/thumbnails/image/rDtN98Qoishumwih/graphicstock-sleepy-tired-business-woman-holding-cup-of-coffee-and-yawning-while-working-in-office-exhausted-business-woman-yawning-and-drinking-coffee-at-work-vector-flat-design-illustration-square-layout_SQeBTBdILb_thumb.jpg" alt="Image" height="80" width= "80" border-radius: 50%;>
    <br></br>EMPLOYEE ID: 246810<br></br>
   
    <a href="dashboard.php" class="button">HOME</a>
   
  
  </div>
  <div id="content1">
 
            
  </div>
  <div id="content2"><br></br><br></br></div>
  <div id="content3"></div>
</div>



</body>
</html>