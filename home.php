<!DOCTYPE html>
<html lang="en">

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
    
    <script type="text/javascript">
        function openSlideMenu() {
            document.getElementById('menu').style.width = '250px';
            document.getElementById('right-side-dash').style.marginLeft = '250px';
        }

        function closeSlideMenu() {
            document.getElementById('menu').style.width = '0px';
            document.getElementById('right-side-dash').style.marginLeft = '50px';
            document.getElementById('right-side-dash').style.marginRight = '50px';
        }
    </script>
</head>

<style>

    .nav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #212422;
        opacity: .9;
        padding-top: 60px;
        transition: 0.7s;
        overflow-x: hidden;
    }
    
    .nav li:hover {
        border-left: 9px solid #3e84c1;
        background-color: #38483d;
        height:auto;
        padding: 5px;
    }
    
    .nav a {
        display: block;
        color: white;
        text-decoration: none;
        font-size: 15px;
    }
    
    .nav a:hover {
        color: #fff;
        transition: .5s;
    }
    
    .nav .close {
        position: absolute;
        font-size: 30px;
        top:5px;
        right:10px;
        text-decoration: none;
        color: white;
    }
    
    .slide a {
        font-size: 25px;
        color: #212422;
    }
    
    /* #content {
        transition: margin-left .7s;
        width: 100%;
    } */
</style>

<body>
    <div id="content" class="container-fluid p-2">

        <span class="slide">
            <a href="#" class="open" onclick="openSlideMenu()">
                <i class="fas fa-bars"></i>
            </a>
        </span>

        <div id="menu" class="nav">
            <a href="#" class="close" onclick="closeSlideMenu()"><i class="fas fa-times"></i></a>
            <div class="logo">
                <h3 class="text-center text-white">HOPIA DE TRES INVENTORY</h3>
            </div>
            <p class="align-items-center text-white"><img id= "dash" src= "imgs/dash.png">ADMIN DASHBOARD</p>
            <ul class="list-unstyled components pl-2 pr-2" >
                <li><a href="#top-selling" ><img id= "dash" src = "imgs/cart.png">TOP SELLING</a><br></li>
                <li><a href="#income"><img id= "dash" src = "imgs/income.png">INCOME</a><br></li>
                <li><a href="#expenses"><img id= "dash" src = "imgs/expense.png">EXPENSES</a><br></li>
                <li><a href="#financial-status"><img id= "dash" src = "imgs/finance.png">FINANCE STATUS</a><br></li>
                <li><a href="#incoming-delivery"><img id= "dash" src = "imgs/incoming.png">INCOMING DELIVERY</a><br></li>
                <li><a href="#received-delivery"><img id= "dash" src = "imgs/delivered.png">RECEIVED DELIVERY</a></li>
            </ul>
        </div>
    </div>

        <div class="container" id="right-side-dash"> 
            <section id="top-selling">
                TOP SELLING <br>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </section>
            <section id="income">
                INCOME<br>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </section>
            <section id="expenses">
                EXPENSES <br>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </section>
            <section id="financial-status">
                FINANCIAL STATUS <br>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </section>
            <section id="incoming-delivery">
                INCOMING DELIVERY <br>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </section>
            <section id="received-delivery">
                RECEIVED DELIVERY <br>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </section>
        </div>



</body>

</html>