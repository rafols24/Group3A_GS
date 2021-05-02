<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Torres_webdev</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script>
    function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    }
</script>

<script>
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            document.getElementById("navbar").style.height = "50px";
        } else {
            document.getElementById("navbar").style.height = "400px";
        }
    }
</script>

<style>
    body { 
    margin-top:100px;
    font-family: Arial, Helvetica, sans-serif;
    position:static;
    }

    #navbar {
        overflow: hidden;
        background-color: #e74c3c;
        padding-bottom: 70px;
        transition: 0.4s;
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 4;
        height:400px;
    }
    .sidebar {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 5;
        top: 0;
        left: 0;
        background-color: #212422;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
    }

    .sidebar .nav a {
        padding: 8px 8px 8px 20px;
        text-decoration: none;
        font-size: 15px;
        color: white;
        display: block;
        transition: 0.3s;
        width: 100%;
        margin-bottom: 10px;
    }

    .sidebar .nav a:hover {
        padding: 50px 35px 35px 50px;
        font-size: 25px;
        border-left: 10px solid #3e84c1;
        background-color: #fc4e03;
        height:auto;
        padding: 5px;
        width: 100%;
        transition:.5s;
    }

    .sidebar .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
        color: white;
    }

    .openbtn {
        font-size: 45px;
        cursor: pointer;
        color: black;
        border: none;
        margin-left:3%;
        position:fixed;

    }

    .openbtn:hover {
        color:white;
    }

    #main {
       padding-top:450px;
    }

    .slide a {
        font-size: 25px;
        color: #212422;
    }

    .header{
        height: 500px;
        background-color:black;
    }

</style>

</head>
<body>

    <div id="navbar">
        <a class="openbtn"  onclick="openNav()">
            <i class="fas fa-bars"></i>
        </a>
    </div>

        <div id="mySidebar" class="sidebar">
            <span>
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            </span>
            <div class="logo">
                <h3 class="text-center text-white">HOPIA DE TRES</h3>
            </div>
            <br><br>
            <p class="align-items-center text-white bg-warning p-2"><img id= "dash" src= "imgs/dash.png">ADMIN DASHBOARD</p>
            <br><br>
            <div class="nav">
                <a href="#top-selling" ><img id= "dash" src = "imgs/cart.png">TOP SELLING</a><br>
                <a href="#purchase"><img id= "dash" src = "imgs/income.png">PURCHASE</a><br><br>
                <a href="#expenses"><img id= "dash" src = "imgs/expense.png">EXPENSES</a><br>
                <a href="#financial-report"><img id= "dash" src = "imgs/finance.png">FINANCIAL REPORT</a><br>
                <a href="#incoming-delivery"><img id= "dash" src = "imgs/incoming.png">INCOMING DELIVERY</a><br>
                <a href="#received-delivery"><img id= "dash" src = "imgs/delivered.png">RECEIVED DELIVERY</a>
            </div>
        </div>
   

    <div id="main">
        <div class="container ">
            <section id="top-selling">
                <h1 class="text-center"> TOP SELLING </h1>
                     <br>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </section>
            <br>
            <br>
            <section id="purchase">
                <h1 class="text-center"> PURCHASES </h1>
                    <br>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </section>
            <br>
            <br>
            <section id="expenses">
                <h1 class="text-center"> EXPENSES </h1>
                     <br>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </section>
            <br>
            <br>
            <hr>
            <section id="financial-report">
                  <h1 class="text-center"> FINANCIAL REPORT </h1>
                    <br>
                    <br>
                    <div class="row">
                        <div class="card col-md-8 " >
                            <div id="chart_div" style="height:500px;" ></div>
                        </div>
                        <div class="col-md-4">
                            <div class="card w-75 h-25 float-right mb-4 mt-4 text-center">
                                <div class="card-header bg-primary h2 text-white">
                                    Sold
                                </div>
                                <div class="card-body h3">
                                   <p id="sold">5000</p>
                                </div>
                            </div>
                            <div class="card w-75 h-25 float-right mb-4 text-center">
                                <div class="card-header bg-danger h2 text-white">
                                    Expenses
                                </div>
                                <div class="card-body h3">
                                   <p id="sold">5000</p>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="card w-75 h-25 float-right text-center">
                                <div class="card-header bg-warning h2 text-white">
                                    Income
                                </div>
                                <div class="card-body h3">
                                   <p id="sold">5000</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    
            </section>
            <br>
            <br>
            <section id="incoming-delivery">
                    INCOMING DELIVERY <br>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </section>
            <br>
            <br>
            <section id="received-delivery">
                    RECEIVED DELIVERY <br>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </section>
        </div>
    </div>  
</body>
</html> 


<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Month', 'SOLD',    'EXPENSES', 'INCOME'],
          ['01', 3000,         1000,      2000],
          ['02', 599,         288,      682],
          ['03',  587,        397,      623],
          ['04', 615,         215,      609.4],
          ['05', 629,         366,      569.6],
          ['06', 800,         1000,      500],
          ['07', 599,         288,      682],
          ['08',  587,        397,      623],
          ['09', 615,         215,      609.4],
          ['10', 629,         366,      569.6],
          ['11', 1500,         1000,     200],
          ['12', 599,         288,      682],
          ['13',  587,        397,      623],
          ['14', 615,         215,      609.4],
          ['15', 629,         366,      569.6]
        ]);

        var options = {
          title : 'Daily Transaction Report for the Month of May 2021',
          vAxis: {title: 'no. of boxes'},
          hAxis: {title: 'Daily Report'},
          seriesType: 'bars',
          series: {2: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
