


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GameHound 🐶</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>


  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        
        
        
        <div class="container">

          <div class="row">
              <div class="col-sm">
                <a class="navbar-brand" href="./index.php">GameHound</a>   
                <button type="button" class="btn btn-light" href="./recommend.php">Recommend</button>
              </div>
    
            <div class="col-sm">
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="text" placeholder="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>          
            </div>
            
            <div class="col-sm">
              <a class="btn btn-primary" href="./login.php">Sign In</a>
              <a class="btn btn-info" href="./register.php">Sign Up</a>
            </div>
          </div>

      </div>

      </div>
    </nav>

    <!-- Hero -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">Welcome to GameHound</h1>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">

          </div>
        </div>
      </div>
    </header>

    <div class="featured">

    <div class="container">
      <div class="row">
        
        <div class="col">
        </div>
        
        <div class="col-6"> <!--coursel -->
          <h1 class="display-4 text-justify">Featured Games</h1>
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="./img/mario.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./img/watch_dogs.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./img/overwatch.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        </div> <!--end coursel-->
        
        <div class="col">
        </div>
        
      </div>
  </div>
      
      
    </div>
    
    
    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
      <div class="container">
          <h1 class="display-4 text-justify">Features</h1>

        <div class="row">
          <div class="col-lg-4">

            <div class="card" style="width: 20rem;">
              <img class="card-img-top" src="..." alt="Card image cap">
              <div class="card-block">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>


          </div>
          <div class="col-lg-4">
            <div class="card" style="width: 20rem;">
              <img class="card-img-top" src="..." alt="Card image cap">
              <div class="card-block">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card" style="width: 20rem;">
              <img class="card-img-top" src="..." alt="Card image cap">
              <div class="card-block">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

   
    <!-- Suggest Game -->
    <section class="call-to-action text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h2 class="mb-4">Have a game to suggest? Let us know!</h2>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">


            <form>
            
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationDefault01">Game Title</label>
                    <input type="text" class="form-control" id="validationDefault01" placeholder="Grand Theft Auto V" value="" required>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationDefault02">Game Genre</label>
                    <input type="text" class="form-control" id="validationDefault02" placeholder="2013 " value="" required>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationDefaultUsername">Username</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                      </div>
                      <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
                    </div>
                  </div>
                </div>
            
            
              <select class="custom-select custom-select-lg mb-3">
                <option selected>Console</option>
                <option value="1">Xbox One</option>
                <option value="2">PS4</option>
                <option value="3">Switch</option>
                <option value="4">Xbox 360</option>
                <option value="5">PS3</option>
                <option value="6">Wii U</option>
                <option value="7">3DS</option>
              </select>
              
              <select class="custom-select custom-select-sm">
                <option selected>Game Release Year</option>
                <option value="1">2018</option>
                <option value="2">2017</option>
                <option value="3">2016</option>
                <option value="4">2015</option>
                <option value="4">2014</option>
                <option value="5">2013</option>
                <option value="6">2012</option>
                <option value="7">2011</option>
                <option value="8">2010</option>
                <option value="9">2009</option>
                <option value="10">2008</option>
                <option value="11">2007</option>
                <option value="12">2006</option>
                <option value="13">2005</option>
              </select>
            
            <button type="submit" class="btn btn-primary">Submit</button>

            </form>
          </div>
          
          
 
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="#">Home</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Recommend</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Profile</a>
              </li>

            </ul>
            <p class="text-muted small mb-4 mb-lg-0">&copy; GameHound 2018. All Rights Reserved.</p>
          </div>

        </div>
      </div>
    </footer>

    <!-- Bootstrap JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
