<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Villanova Climatological Data Project</title>
<!-- 

Highway Template

https://templatemo.com/tm-520-highway

-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/light-box.css">
        <link rel="stylesheet" href="css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>

    <nav>
        <div class="logo">
            <a href="index.html">Villanova <em>Climatological Data Project</em></a>
        </div>
      <div class="menu-icon">
        <span></span>
      </div>
    </nav>

    <div class="page-heading">
        <div class="container">
            <div class="heading-content">
                    
                <h1>Los Angeles <em>Climate Data</em></h1>
            </div>
        </div>
    </div>
    <div class="services">
            <center>
              <?php
               if($_SERVER["REQUEST_METHOD"] == "POST"){

                if(isset($_POST["Record"])){
                  $record = $_POST["Record"];
                  
                    
                  
                }

                else{
                
                $year = $_POST["Year"];
                $month = $_POST["Month"];
                if(isset($_POST["Day"])){
                    $day = $_POST["Day"];
                  }
              }

              if(!isset($_POST["Record"])){
              if(isset($_POST["Day"])){
                $date = "$month $day, $year";
                  }
                  else
                  $date = "$month $year";

                if($month=='January')
                  $month="1";
                
                if($month=='February')
                  $month="2";

                  if($month=='March')
                  $month="3";

                  if($month=='April')
                  $month="4";

                  if($month=='May')
                  $month="5";

                  if($month=='June')
                  $month="6";

                  if($month=='July')
                  $month="7";

                  if($month=='August')
                  $month="8";

                  if($month=='September')
                  $month="9";

                  if($month=='October')
                  $month="10";

                  if($month=='November')
                  $month="11";

                  if($month=='December')
                  $month="12";
                }
                }
                
                ?>
              <?php
                            

                     

                        $link = mysqli_connect("localhost", "root", "", "mysql");

                        if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
  
                        }
                        if(isset($_POST["Day"])){
                      $sql = "SELECT * FROM `losangeles` WHERE Year ='$year' AND Month ='$month' AND Day ='$day'";

              
                      if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                          echo "<table>";
                                echo "<tr>";
                                    echo "<th><h4>High Temperature&nbsp;&nbsp;</h4></th>";
                                    echo "<th><h4>Low Temperature&nbsp;&nbsp</h4></th>";
                                    echo "<th><h4>Average Temperature&nbsp;&nbsp</h4></th>";
                                    echo "<th><h4>Departure from normal&nbsp;&nbsp</h4></th>";
                                    echo "<th><h4>Total precipitation&nbsp;&nbsp</h4></th>";
                                    echo "<th><h4>Total snowfall&nbsp;&nbsp</h4></th>";
                                echo "</tr>";
                                echo "<h2>$date</h2>";
                            while($row = mysqli_fetch_array($result)){
                                echo "<tr>";
                                
                                    echo "<td>" . "<h2>" . $row['Max']. "</h2>" . "</td>";
                                    echo "<td>" . "<h2>" . $row['Min']. "</h2>" . "</td>";
                                    echo "<td>" . "<h2>" . $row['Avg']. "</h2>" . "</td>";
                                    echo "<td>" . "<h2>" . $row['AvgDeparture']. "</h2>" . "</td>";
                                    echo "<td>" . "<h2>" . $row['Precip']. "</h2>" . "</td>";
                                    echo "<td>" . "<h2>" . $row['Snowfall']. "</h2>" . "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                            // Close result set
                            mysqli_free_result($result);
                        } else{
                            echo "No records matching your query were found.";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }}
                    
                    if(isSet($_POST["Record"])){
                      if($record=="max"){
                      $sql = "SELECT * FROM `losangeles` ORDER BY Max DESC LIMIT 10";

                      
                      if($result = mysqli_query($link, $sql)){
                        
                        if(mysqli_num_rows($result) > 0){
                          
                          
                          echo "<table>";
                                echo "<tr>";
                                echo "<th><h4>Month&nbsp;&nbsp;</h4></th>";
                                    echo "<th><h4>Day&nbsp;&nbsp;</h4></th>";
                                    echo "<th><h4>Year of occurrence&nbsp;&nbsp;&nbsp;&nbsp;</h4></th>";                                    
                                    echo "<th><h4>High Temperature&nbsp;&nbsp;</h4></th>";
                                    echo "<th><h4>Low Temperature&nbsp;&nbsp;</h4></th>";
                                    echo "<th><h4>Average Temperature&nbsp;&nbsp;</h4></th>";
                                    echo "<th><h4>Departure from normal&nbsp;&nbsp;</h4></th>";
                                    
                                echo "</tr>";
                                echo "<h2>Top 10 hottest max temperatures</h2>";
                            while($row = mysqli_fetch_array($result)){
                                echo "<tr>";
                                echo "<td>" . "<h2>" . $row['Month']. "</h2>" . "</td>";
                                echo "<td>" . "<h2>" . $row['Day']. "</h2>" . "</td>";
                                echo "<td>" . "<h2>" . $row['Year']. "</h2>" . "</td>";
                                    
                                    echo "<td>" . "<h2>" . $row['Max']. "</h2>" . "</td>";
                                    echo "<td>" . "<h2>" . $row['Min']. "</h2>" . "</td>";
                                    echo "<td>" . "<h2>" . $row['Avg']. "</h2>" . "</td>";
                                    echo "<td>" . "<h2>" . $row['AvgDeparture']. "</h2>" . "</td>";
                                    
                                echo "</tr>";
                                
                            }
                            echo "</table>";
                            // Close result set
                            mysqli_free_result($result);
                        } else{
                            echo "No rekkids matching your query were found.";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }}

                    if($record=="min"){
                      $sql = "SELECT * FROM `losangeles` ORDER BY Min ASC LIMIT 10";

                      
                      if($result = mysqli_query($link, $sql)){
                        
                        if(mysqli_num_rows($result) > 0){
                          
                          
                          echo "<table>";
                                echo "<tr>";
                                echo "<th><h4>Month&nbsp;&nbsp;</h4></th>";
                                    echo "<th><h4>Day&nbsp;&nbsp;</h4></th>";
                                    echo "<th><h4>Year of occurrence&nbsp;&nbsp;&nbsp;&nbsp;</h4></th>";                                    
                                    echo "<th><h4>High Temperature&nbsp;&nbsp;</h4></th>";
                                    echo "<th><h4>Low Temperature&nbsp;&nbsp;</h4></th>";
                                    echo "<th><h4>Average Temperature&nbsp;&nbsp;</h4></th>";
                                    echo "<th><h4>Departure from normal&nbsp;&nbsp;</h4></th>";
                                    
                                echo "</tr>";
                                echo "<h2>Top 10 coldest min temperatures</h2>";
                            while($row = mysqli_fetch_array($result)){
                                echo "<tr>";
                                echo "<td>" . "<h2>" . $row['Month']. "</h2>" . "</td>";
                                echo "<td>" . "<h2>" . $row['Day']. "</h2>" . "</td>";
                                echo "<td>" . "<h2>" . $row['Year']. "</h2>" . "</td>";
                                    
                                    echo "<td>" . "<h2>" . $row['Max']. "</h2>" . "</td>";
                                    echo "<td>" . "<h2>" . $row['Min']. "</h2>" . "</td>";
                                    echo "<td>" . "<h2>" . $row['Avg']. "</h2>" . "</td>";
                                    echo "<td>" . "<h2>" . $row['AvgDeparture']. "</h2>" . "</td>";
                                    
                                echo "</tr>";
                                
                            }
                            echo "</table>";
                            // Close result set
                            mysqli_free_result($result);
                        } else{
                            echo "No rekkids matching your query were found.";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }}

                    if($record=="snow"){
                      $sql = "SELECT * FROM `losangeles` ORDER BY Snowfall DESC LIMIT 10";

                      
                      if($result = mysqli_query($link, $sql)){
                        
                        if(mysqli_num_rows($result) > 0){
                          
                          
                          echo "<table>";
                                echo "<tr>";
                                echo "<th><h4>Month&nbsp;&nbsp;</h4></th>";
                                    echo "<th><h4>Day&nbsp;&nbsp;</h4></th>";
                                    echo "<th><h4>Year of occurrence&nbsp;&nbsp;&nbsp;&nbsp;</h4></th>";                                    
                                    echo "<th><h4>High Temperature&nbsp;&nbsp;</h4></th>";
                                    echo "<th><h4>Low Temperature&nbsp;&nbsp;</h4></th>";
                                    echo "<th><h4>Average Temperature&nbsp;&nbsp;</h4></th>";
                                    echo "<th><h4>Departure from normal&nbsp;&nbsp;</h4></th>";
                                    echo "<th><h4>Total snowfall&nbsp;&nbsp;</h4></th>";
                                    
                                echo "</tr>";
                                echo "<h2>Top 10 snowiest days</h2>";
                            while($row = mysqli_fetch_array($result)){
                                echo "<tr>";
                                echo "<td>" . "<h2>" . $row['Month']. "</h2>" . "</td>";
                                echo "<td>" . "<h2>" . $row['Day']. "</h2>" . "</td>";
                                echo "<td>" . "<h2>" . $row['Year']. "</h2>" . "</td>";
                                    
                                    echo "<td>" . "<h2>" . $row['Max']. "</h2>" . "</td>";
                                    echo "<td>" . "<h2>" . $row['Min']. "</h2>" . "</td>";
                                    echo "<td>" . "<h2>" . $row['Avg']. "</h2>" . "</td>";
                                    echo "<td>" . "<h2>" . $row['AvgDeparture']. "</h2>" . "</td>";
                                    echo "<td>" . "<h2>" . $row['Snowfall']. "</h2>" . "</td>";
                                    
                                    
                                echo "</tr>";
                                
                            }
                            echo "</table>";
                            // Close result set
                            mysqli_free_result($result);
                        } else{
                            echo "No rekkids matching your query were found.";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }}

                    if($record=="rain"){
                      $sql = "SELECT * FROM `losangeles` ORDER BY Precip DESC LIMIT 10";
  
                      
                      if($result = mysqli_query($link, $sql)){
                        
                        if(mysqli_num_rows($result) > 0){
                          
                          
                          echo "<table>";
                                echo "<tr>";
                                echo "<th><h4>Month&nbsp;&nbsp;</h4></th>";
                                    echo "<th><h4>Day&nbsp;&nbsp;</h4></th>";
                                    echo "<th><h4>Year of occurrence&nbsp;&nbsp;&nbsp;&nbsp;</h4></th>";                                    
                                    echo "<th><h4>High Temperature&nbsp;&nbsp;</h4></th>";
                                    echo "<th><h4>Low Temperature&nbsp;&nbsp;</h4></th>";
                                    echo "<th><h4>Average Temperature&nbsp;&nbsp;</h4></th>";
                                    echo "<th><h4>Departure from normal&nbsp;&nbsp;</h4></th>";
                                    echo "<th><h4>Total precipitation&nbsp;&nbsp;</h4></th>";
                                    
                                echo "</tr>";
                                echo "<h2>Top 10 days with most precipitation</h2>";
                            while($row = mysqli_fetch_array($result)){
                                echo "<tr>";
                                echo "<td>" . "<h2>" . $row['Month']. "</h2>" . "</td>";
                                echo "<td>" . "<h2>" . $row['Day']. "</h2>" . "</td>";
                                echo "<td>" . "<h2>" . $row['Year']. "</h2>" . "</td>";
                                    
                                    echo "<td>" . "<h2>" . $row['Max']. "</h2>" . "</td>";
                                    echo "<td>" . "<h2>" . $row['Min']. "</h2>" . "</td>";
                                    echo "<td>" . "<h2>" . $row['Avg']. "</h2>" . "</td>";
                                    echo "<td>" . "<h2>" . $row['AvgDeparture']. "</h2>" . "</td>";
                                    echo "<td>" . "<h2>" . $row['Precip']. "</h2>" . "</td>";
                                    
                                    
                                echo "</tr>";
                                
                            }
                            echo "</table>";
                            // Close result set
                            mysqli_free_result($result);
                        } else{
                            echo "No rekkids matching your query were found.";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }}
                  
                  }

                  
                 

                    else if(!isset($_POST["Day"])){
                      $sql = "SELECT * FROM `losangeles` WHERE Year ='$year' AND Month ='$month'";

              
                      if($result = mysqli_query($link, $sql)){
                        
                        if(mysqli_num_rows($result) > 0){
                            echo "<table>";                            
                                echo "<tr>";
                                echo "<th><h4>Day of Month&nbsp;&nbsp;</h4></th>";
                                    echo "<th><h4>High Temperature&nbsp;&nbsp;</h4></th>";
                                    echo "<th><h4>Low Temperature&nbsp;&nbsp</h4></th>";
                                    echo "<th><h4>Average Temperature&nbsp;&nbsp</h4></th>";
                                    echo "<th><h4>Departure from normal&nbsp;&nbsp</h4></th>";
                                    echo "<th><h4>Total precipitation&nbsp;&nbsp</h4></th>";
                                    echo "<th><h4>Total snowfall&nbsp;&nbsp</h4></th>";
                                echo "</tr>";
                                echo "<h2>$date</h2>";
                            while($row = mysqli_fetch_array($result)){
                                echo "<tr>";
                                echo "<td>" . "<h2>" . $row['Day']. "</h2>" . "</td>";
                                echo "<td>" . "<h2>" . $row['Max']. "</h2>" . "</td>";
                                echo "<td>" . "<h2>" . $row['Min']. "</h2>" . "</td>";
                                echo "<td>" . "<h2>" . $row['Avg']. "</h2>" . "</td>";
                                echo "<td>" . "<h2>" . $row['AvgDeparture']. "</h2>" . "</td>";
                                echo "<td>" . "<h2>" . $row['Precip']. "</h2>" . "</td>";
                                echo "<td>" . "<h2>" . $row['Snowfall']. "</h2>" . "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                            // Close result set
                            mysqli_free_result($result);
                        } else{
                            echo "No records matching your query were found.";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }}

                     
                    // Close connection
                    mysqli_close($link);
               
        ?>

        


      
            </center>
                
            </div>
        
                    
                


    <footer>
        <div class="container-fluid">
            <div class="col-md-12">
                <p>Copyright &copy; 2019 Sam Rizzo & Nick Langan CSC 2053
    
    | All data collected from <a href="http://scacis.rcc-acis.org/">SC ACIS</a></p>
            </div>
        </div>
    </footer>


      <!-- Modal button -->
    <div class="popup-icon">
      <button id="modBtn" class="modal-btn"><img src="img/contact-icon.png" alt=""></button>
    </div>  

    <!-- Modal -->
    <div id="modal" class="modal">
      <!-- Modal Content -->
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h3 class="header-title">Say hello to <em>Villanova Climatological Data Project</em></h3>
          <div class="close-btn"><img src="img/close_contact.png" alt=""></div>    
        </div>
        <!-- Modal Body -->
        <div class="modal-body">
          <div class="col-md-6 col-md-offset-3">
            <form id="contact" action="" method="post">
                <div class="row">
                    <div class="col-md-12">
                      <fieldset>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="btn">Send Message Now</button>
                      </fieldset>
                    </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    

    <section class="overlay-menu">
      <div class="container">
        <div class="row">
          <div class="main-menu">
              <ul>
                  <li>
                      <a href="index.html">Home</a>
                  </li>
                  
                  <li>
                      <a href="about.html">About Us</a>
                  </li>
                  
              </ul>
              
          </div>
        </div>
      </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

      </div>
</body>
</html>

