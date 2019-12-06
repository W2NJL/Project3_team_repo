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

    <div class="tampa-page-heading">
        <div class="container">
            <div class="heading-content">
                    
                <h1>Tampa <em>Climate Data</em></h1>
            </div>
        </div>
    </div>
    <div class="services">
            <center>
                    <h2>By month (select a month)</h2>
                    <form method = post action="tampadb.php">
                            <p>
                            <select name="Month">
                                <option value="0">Choose a month</option>
                                <option>January</option>
                                <option>February</option>
                                <option>March</option>
                                <option>April</option>
                                <option>May</option>
                                <option>June</option>
                                <option>July</option>
                                <option>August</option>
                                <option>September</option>
                                <option>October</option>
                                <option>November</option>
                                <option>December</option>
        
                            </select>
                            
                             
                                        <?php                                       
                                       
                                        // Sets the top option to be the current year. (IE. the option that is chosen by default).
  $currently_selected = "Choose a year"; 
  // Year to start available options at
  $earliest_year = 1919; 
  // Set your latest year you want in the range, in this case we use PHP to just set it to the current year.
  $latest_year = 2018; 

  print '<select name="Year">';
  print "<option>$currently_selected</option>"; 
  // Loops over each int[year] from current year, back to the $earliest_year [1950]
  foreach ( range( $latest_year, $earliest_year ) as $i ) {
    // Prints the option with the next year in range.
    print '<option value="'.$i.'"'.($i === $currently_selected ? ' selected="selected"' : '').'>'.$i.'</option>';
  }
  print '</select>';
  ?>
                                    
                            <button type="submit">Select</button>
                            </form>
               <h2>By day (select a day)</h2>
            <form method = post action="tampadb.php">
                    <p>
                    <select name="Month">
                        <option value="0">Choose a month</option>
                        <option>January</option>
                        <option>February</option>
                        <option>March</option>
                        <option>April</option>
                        <option>May</option>
                        <option>June</option>
                        <option>July</option>
                        <option>August</option>
                        <option>September</option>
                        <option>October</option>
                        <option>November</option>
                        <option>December</option>

                    </select>
                    <select name="Day">
                            <option value="0">Choose a day</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                            <option>25</option>
                            <option>26</option>
                            <option>27</option>
                            <option>28</option>
                            <option>29</option>
                            <option>30</option>
                            <option>31</option>
    
                        </select>
                        <?php                                       
                                       
                                        // Sets the top option to be the current year. (IE. the option that is chosen by default).
  $currently_selected = "Choose a year"; 
  // Year to start available options at
  $earliest_year = 1919; 
  // Set your latest year you want in the range, in this case we use PHP to just set it to the current year.
  $latest_year = 2018; 

  print '<select name="Year">';
  print "<option>$currently_selected</option>"; 
  // Loops over each int[year] from current year, back to the $earliest_year [1950]
  foreach ( range( $latest_year, $earliest_year ) as $i ) {
    // Prints the option with the next year in range.
    print '<option value="'.$i.'"'.($i === $currently_selected ? ' selected="selected"' : '').'>'.$i.'</option>';
  }
  print '</select>';
  ?>
                    <button type="submit">Select</button>
                    </form>
                    <h2>Select a Top 10 event</h2>
            <form method = post action="tampadb.php">
                    <p>
                    <select name="Record">
                        <option value="0">Choose an event</option>
                        <option value="max">Top 10 hottest max temperatures</option>
                        <option value="min">Top 10 coldest min temperatures</option>
                        <option value="snow">Top 10 snowiest days</option>
                        <option value="rain">Top 10 days with most precipitation</option>
                      

                    </select>
                    <button type="submit">Select</button>
                    </form>
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

</body>
</html>