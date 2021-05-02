<!DOCTYPE html>
<html>

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Torres_webdev</title>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
          integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
     </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
          integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
     </script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
          integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
     </script>
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="try.css">
     <script>
     function openNav() {
          document.getElementById("mySidebar").style.width = "250px";
          document.getElementById("main").style.marginLeft = "250px";
     }

     function closeNav() {
          document.getElementById("mySidebar").style.width = "0";
          document.getElementById("main").style.marginLeft = "0";
     }
     </script>



</head>

<body>
     <div class="openNav-div">
          <a href="#" class="openbtn" onclick="openNav()">
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
          <p class="align-items-center text-white bg-warning p-2"><img id="dash" src="imgs/dash.png">ADMIN DASHBOARD</p>
          <br><br>
          <div class="nav">
               <a href="#top-selling"><img id="dash" src="imgs/cart.png">TOP SELLING</a><br>
               <a href="#income"><img id="dash" src="imgs/income.png">INCOME</a><br><br>
               <a href="#expenses"><img id="dash" src="imgs/expense.png">EXPENSES</a><br>
               <a href="#financial-report"><img id="dash" src="imgs/finance.png">FINANCIAL REPORT</a><br>
               <a href="#incoming-delivery"><img id="dash" src="imgs/incoming.png">INCOMING DELIVERY</a><br>
               <a href="#received-delivery"><img id="dash" src="imgs/delivered.png">RECEIVED DELIVERY</a>
          </div>
     </div>

     <div id="main">
          <section id="top-selling">
               <h1>HOPIA DE TRES' BEST OF SALES </h1>
               <!-- PRODUCT CARDS -->
               <div id="cards_landscape_wrap-2">
                    <div class="container">
                         <div class="row">
                              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                   <a href="">
                                        <div class="card-flyer">
                                             <div class="text-box">
                                                  <div class="image-box" style="position: relative;">
                                                       <img src="https://ph-test-11.slatic.net/p/385dd5173c2d5c31441122ce13dad22c.jpg"
                                                            alt="" style="display: block;" />
                                                       <i class="material-icons"
                                                            style="font-size:48px;color:black;position:absolute;bottom:84%; left:0;">filter_1</i>
                                                  </div>
                                                  <div class="card">
                                                       <h6 class="mt-3 text-center" style="font-size:27px;">UBE HOPIA
                                                       </h6>
                                                       <p class="price text-center"
                                                            style="font-size:25px;color:#5C5454;font-weight:bold">$19.99
                                                       </p>
                                                       <p class="p-3">Lorem Ipsum is simply dummy text of the printing
                                                            ahsuhsjha.</p>
                                                       <p class="mb-3"><span
                                                                 class="fa fa-star checked float-left ml-4"></span>
                                                            <span class="fa fa-star checked float-left ml-1"></span>
                                                            <span class="fa fa-star checked float-left ml-1"></span>
                                                            <span class="fa fa-star float-left ml-1"></span>
                                                            <span class="fa fa-star float-left ml-1"></span>
                                                       </p>
                                                       <p><button>See Sales Report</button></p>
                                                  </div>
                                             </div>
                                        </div>
                                   </a>
                              </div>
                              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                   <a href="">
                                        <div class="card-flyer">
                                             <div class="text-box">
                                                  <div class="image-box" style="position: relative;">
                                                       <img src="https://cdn.shopify.com/s/files/1/0451/1016/5671/products/2040x2048_HH_mongospecial_2040x.jpg?v=1618542703"
                                                            alt="" style="display: block;" />
                                                       <i class="material-icons"
                                                            style="font-size:48px;color:#FF0000;position: absolute;bottom:84%; left:0;">filter_2</i>
                                                  </div>
                                                  <div class="card">
                                                       <h6 class="mt-3 text-center" style="font-size:26px;">HOPIANG
                                                            MONGO</h6>
                                                       <p class="price text-center"
                                                            style="font-size:25px;color:#5C5454;font-weight:bold">$19.99
                                                       </p>
                                                       <p class="p-3">Lorem Ipsum is simply dummy text of the printing
                                                            ahsuhsjha.</p>
                                                       <p class="mb-3"><span
                                                                 class="fa fa-star checked float-left ml-4"></span>
                                                            <span class="fa fa-star checked float-left ml-1"></span>
                                                            <span class="fa fa-star checked float-left ml-1"></span>
                                                            <span class="fa fa-star float-left ml-1"></span>
                                                            <span class="fa fa-star float-left ml-1"></span>
                                                       </p>
                                                       <p><button>See Sales Report</button></p>
                                                  </div>
                                             </div>
                                        </div>
                                   </a>
                              </div>
                              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                   <a href="">
                                        <div class="card-flyer">
                                             <div class="text-box">
                                                  <div class="image-box" style="position: relative;">
                                                       <img src="https://cf.shopee.ph/file/6a15f06c53f587d039ddcb585224370a"
                                                            alt="" style="display: block;" />
                                                       <i class="material-icons"
                                                            style="font-size:48px;color:#FF0000;position: absolute;bottom:84%; left:0;">filter_3</i>
                                                  </div>
                                                  <div class="card">
                                                       <h6 class="mt-3 text-center" style="font-size:26px;">HOPIANG
                                                            PRESA</h6>
                                                       <p class="price text-center"
                                                            style="font-size:25px;color:#5C5454;font-weight:bold">$19.99
                                                       </p>
                                                       <p class="p-3">Lorem Ipsum is simply dummy text of the printing
                                                            ahsuhsjha.</p>
                                                       <p class="mb-3"><span
                                                                 class="fa fa-star checked float-left ml-4"></span>
                                                            <span class="fa fa-star checked float-left ml-1"></span>
                                                            <span class="fa fa-star checked float-left ml-1"></span>
                                                            <span class="fa fa-star float-left ml-1"></span>
                                                            <span class="fa fa-star float-left ml-1"></span>
                                                       </p>
                                                       <p><button>See Sales Report</button></p>
                                                  </div>
                                             </div>
                                        </div>
                                   </a>
                              </div>
                         </div>
                    </div>
                    <!-- END PRODUCT CARDS  -->
          </section>
          </span>
          <br>
          <div class="cart transition is-open">
               <div class="table table-bordered border-dark">
                    <div class="layout-inline row th border border-dark">
                         <div class="col col-pro">Product by Flavor</div>
                         <div class="col col-price align-center">Price</div>
                         <div class="col col-qty align-center">QTY by Box</div>
                         <div class="col">Expenses</div>
                         <div class="col">Total</div>
                    </div>
                    <div class="layout-inline row p-4">
                         <div class="col col-pro layout-inline">
                              <img src="https://www.foxyfolksy.com/wp-content/uploads/2016/03/hopia-recipe-1.jpg"
                                   alt="ube" class="img" />
                              <p>MONGO FLAVOR</p>
                         </div>
                         <div class="col col-price col-numeric align-center ">
                              <p>£59.99</p>
                         </div>
                         <div class="col col-qty layout-inline">
                              <a href="#" class="qty qty-minus">-</a>
                              <input type="numeric" value="3" />
                              <a href="#" class="qty qty-plus">+</a>
                         </div>
                         <div class="col col-vat col-numeric">
                              <p>£2.95</p>
                         </div>
                         <div class="col col-total col-numeric">
                              <p> £182.95</p>
                         </div>
                    </div>
                    <div class="layout-inline row row-bg2  p-4">
                         <div class="col col-pro layout-inline">
                              <img src="https://nolisoli.ph/wp-content/uploads/2020/12/eng-bee-tin.jpg" alt="kitten"
                                   class="img" />
                              <p>CHOCO FLAVOR</p>
                         </div>

                         <div class="col col-price col-numeric align-center ">
                              <p>£23.99</p>
                         </div>

                         <div class="col col-qty  layout-inline">
                              <a href="#" class="qty qty-minus ">-</a>
                              <input type="numeric" value="1" />
                              <a href="#" class="qty qty-plus">+</a>
                         </div>

                         <div class="col col-vat col-numeric">
                              <p>£1.95</p>
                         </div>
                         <div class="col col-total col-numeric">
                              <p>£25.94</p>
                         </div>

                    </div>

                    <div class="layout-inline row p-4">
                         <div class="col col-pro layout-inline">
                              <img src="https://i.ytimg.com/vi/vxcCxWH8mgQ/maxresdefault.jpg" alt="kitten"
                                   class="img" />
                              <p>PANDAN FLAVOR</p>
                         </div>

                         <div class="col col-price col-numeric align-center ">
                              <p>£59.99</p>
                         </div>

                         <div class="col col-qty layout-inline">
                              <a href="#" class="qty qty-minus">-</a>
                              <input type="numeric" value="3" />
                              <a href="#" class="qty qty-plus">+</a>
                         </div>

                         <div class="col col-vat col-numeric">
                              <p>£2.95</p>
                         </div>
                         <div class="col col-total col-numeric">
                              <p>£182.95</p>
                         </div>
                    </div>
            
               </div>
               <br>
               <section id="income">
                    INCOME<br>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                    officia deserunt mollit anim id est laborum."
               </section>
               <br>
               <br>
               <section id="expenses">
                    EXPENSES <br>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                    officia deserunt mollit anim id est laborum."
               </section>
               <br>
               <br>
               <section id="financial-report">
                    FINANCIAL STATUS <br>
                    <div id="chart_div" style="width: 900px; height: 500px;"></div>
               </section>
               <br>
               <br>
               <section id="incoming-delivery">
                    INCOMING DELIVERY <br>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea
                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                    anim id est laborum."
               </section>
               <br>
               <br>
               <section id="received-delivery">
                    RECEIVED DELIVERY <br>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea
                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                    anim id est laborum."
               </section>
          </div>


          <script type="text/javascript">
          google.charts.load('current', {
               'packages': ['corechart']
          });
          google.charts.setOnLoadCallback(drawVisualization);

          function drawVisualization() {
               // Some raw data (not necessarily accurate)
               var data = google.visualization.arrayToDataTable([
                    ['Month', 'Expenses', 'SOLD'],
                    ['2004/05', 165, 938],
                    ['2005/06', 135, 1120],
                    ['2006/07', 157, 1167],
                    ['2007/08', 139, 1110],
                    ['2008/09', 136, 691]
               ]);

               var options = {
                    title: 'Monthly Coffee Production by Country',
                    vAxis: {
                         title: 'Cups'
                    },
                    hAxis: {
                         title: 'Month'
                    },
                    seriesType: 'bars',
                    series: {
                         5: {
                              type: 'line'
                         }
                    }
               };

               var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
               chart.draw(data, options);
          }


          function myFunction() {
               var dots = document.getElementById("dots");
               var moreText = document.getElementById("more");
               var btnText = document.getElementById("myBtn");

               if (dots.style.display === "none") {
                    dots.style.display = "inline";
                    btnText.innerHTML = "Read more";
                    moreText.style.display = "none";
               } else {
                    dots.style.display = "none";
                    btnText.innerHTML = "Read less";
                    moreText.style.display = "inline";
               }
          }
          </script>
</body>

</html>