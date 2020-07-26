<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Brotherhood Schools</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="content">
                <div class="title m-b-md">
                  Brotherhood Matriculation.
                  Neelankarai.
                </div>
                <div class="container"></div>
                @yield('mainContent')
                <div>
                  <div>
                    <div class="dropdown-menu">
                      <span class="dropdown-menu">About</span>
                      <a class="dropdown-item" href="Board_of_Governors">Board of Governors</a>
                      <a class="dropdown-item" href="Our_Start">Our Start</a>
                      <a class="dropdown-item" href="Vision_&_Mission">Vision & Mission</a>
                      <a class="dropdown-item" href="Our_Partnerships">Our Partnerships</a>
                      <a class="dropdown-item" href="Our_Faculty">Our Faculty</a>
                      <a class="dropdown-item" href="Our_Students">Our Students</a>
                      <a class="dropdown-item" href="Our_Premises">Our Premises</a>
                    </div>
                    <div class="dropdown-menu">
                      <span class="dropdown-menu">Programs</span>
                      <a class="dropdown-item" href="Pre-School">Pre-School</a>
                      <a class="dropdown-item" href="Primary">Primary</a>
                      <a class="dropdown-item" href="Secondary">Secondary</a>
                      <a class="dropdown-item" href="Higher_Secondary">Higher Secondary</a>
                    </div>
                    <div class="dropdown-menu">
                      <span class="dropdown-item-text">Admission</span>
                      <a class="dropdown-item" href="How_to_Apply">How to Apply</a>
                      <a class="dropdown-item" href="Scholarships">Scholarships</a>
                      <a class="dropdown-item" href="Tuition_Fees">Tuition Fees</a>
                      <a class="dropdown-item" href="Terms_&_Conditions">Terms & Conditions</a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="maindiv">
          <img class="d-block w-100" src="1.jpg">
        </div>
        <div class="maindiv">
          <img class="d-block w-100" src="2.jpg">
        </div>
        <div class="maindiv">
          <img class="d-block w-100" src="3.jpg">
        </div>
      </div>
      <a class = "btn btn-light">
        <span class="maindiv" aria-hidden="false"><</span>
      </a>
      <a class="btn btn-light">
        <span class="maindiv" aria-hidden="false">></span>
      </a>
     </div>
    </body>
</html>
d
