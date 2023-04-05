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
  <select name="wgtmsr" id="wgtmsr" style="width: 320px; height: 35px;">
  <option value="">2023</option>
    <option value="1940">1940</option>
    <option value="1941">1941</option>
    <option value="1942">1942</option>
    <option value="1943">1943</option>
    <option value="1944">1944</option>
    <option value="1945">1945</option>
    <option value="1946">1946</option>
    <option value="1947">1947</option>
    <option value="1948">1948</option>
    <option value="1949">1949</option>
    <option value="1950">1950</option>
    <option value="1951">1951</option>
    <option value="1952">1952</option>
    <option value="1953">1953</option>
    <option value="1954">1954</option>
    <option value="1955">1955</option>
    <option value="1956">1956</option>
    <option value="1957">1957</option>
    <option value="1958">1958</option>
    <option value="1959">1959</option>
    <option value="1960">1960</option>
    <option value="1961">1961</option>
    <option value="1962">1962</option>
    <option value="1963">1963</option>
    <option value="1964">1964</option>
    <option value="1965">1965</option>
    <option value="1966">1966</option>
    <option value="1967">1967</option>
    <option value="1968">1968</option>
    <option value="1969">1969</option>
    <option value="1970">1970</option>
    <option value="1971">1971</option>
    <option value="1972">1972</option>
    <option value="1973">1973</option>
    <option value="1974">1974</option>
    <option value="1975">1975</option>
    <option value="1976">1976</option>
    <option value="1977">1977</option>
    <option value="1978">1978</option>
    <option value="1979">1979</option>
    <option value="1980">1980</option>
    <option value="1981">1981</option>
    <option value="1982">1982</option>
    <option value="1983">1983</option>
    <option value="1984">1984</option>
    <option value="1985">1985</option>
    <option value="1986">1986</option>
    <option value="1987">1987</option>
    <option value="1988">1988</option>
    <option value="1989">1989</option>
    <option value="1990">1990</option>
    <option value="1991">1991</option>
    <option value="1992">1992</option>
    <option value="1993">1993</option>
    <option value="1994">1994</option>
    <option value="1995">1995</option>
    <option value="1996">1996</option>
    <option value="1997">1997</option>
    <option value="1998">1998</option>
    <option value="1999">1999</option>
    <option value="2000">2000</option>
    <option value="2001">2001</option>
    <option value="2002">2002</option>
    <option value="2003">2003</option>
    <option value="2004">2004</option>
    <option value="2005">2005</option>
    <option value="2006">2006</option>
    <option value="2007">2007</option>
    <option value="2008">2008</option>
    <option value="2009">2009</option>
    <option value="2010">2010</option>
    <option value="2011">2011</option>
    <option value="2012">2012</option>
    <option value="2013">2013</option>
    <option value="2014">2014</option>
    <option value="2015">2015</option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
    <option value="2022">2022</option>
    <option value="2023">2023</option>
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
  <option value="kg">1st Half</option>
  <option value="gm">2nd Half</option>
  
</select>
  </div>
</div>
<br></br>
<form action="" method="get">
  <button type="submit" value="Submit">View</button>
<br></br>

<div class="w3-row-padding">
  <div class="w3-third">
  <label>Total Earnings</label>
    <input class="w3-input w3-border" type="" placeholder="" value=""readonly>
  </div>
  <div class="w3-third">
  <label>Total Deductions</label>
    <input class="w3-input w3-border" type="" placeholder=""value=""readonly>
  </div>
  <label>Rate Per Hour</label>
  <div class="w3-third">
  <input class="w3-input w3-border" type="" placeholder=""value=""readonly>
</select>
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
    <a href="profile.php" class="button">ROXANNE FERNANDO</a>
    <a href="dashboard.php" class="button">HOME</a>
    <a href="attendance.php" class="button">ATTENDANCE</a>
    <a href="payroll.php" class="button">PAY SLIP</d>
    <a href="leavem.php" class="button">LEAVE MANAGEMENT</a>
    <a href="settings.php" class="button">SETTINGS</a>
    <a href="login.php" class="button">LOG OUT</a>
  
  </div>
  <div id="content1">
 
            
  </div>
  <div id="content2"><br></br><br></br></div>
  <div id="content3"></div>
</div>



</body>
</html>