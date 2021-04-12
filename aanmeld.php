<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="shortcut icon" href="./img/icon dark.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

<!--Favicon-->
    <link rel="shortcut icon" href="./img/basketball_GIF.gif" type="image/x-icon">

    <title>De basketbal opleiding - De opleiding waar jij jezelf kan zijn!</title>

</head>
<body>

    <!-- Dit is collapse -->
    <!-- <i class="bi bi-shop" style="font-size: 2rem; color: cornflowerblue;"></i> -->

  <!--Begin of the navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3 pl-0 w-100 sticky-top">
            <a class="navbar-brand" href="#"></a>
            <img src="./img/basketball_GIF.gif" width="35" height="35" alt="" loading="lazy">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.mboutrecht.nl/opleidingen/">Opleidingen</a>
                    </li>

                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                          <a class="nav-link" href="./aanmeld.php">Inschrijven</a>
                      </li>
                        <li class="nav-item">
                          <a class="nav-link" href="./inlog.php">Inloggen</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="./contact.php">Contact</a>
                      </li>
                      </ul>
                  </div>
              </nav> 

<!--End of the navbar-->


<!--Begin of the jumbotron -->
    </div>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h2 class="display-4">Welkom bij de inschrijfpagina voor de opleiding</h2>
                        <p class="lead">Vul je gegevens in!</p>
                    </div>
                </div>
            </div>
        </div>

<!-- End of the Jumbotron -->


<!-- Begin of the form -->
    <form class="dropdown-menu p-4">
  <div class="form-group">
    <label for="exampleDropdownFormEmail2">E-mail</label>
    <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">
  </div>
  <div class="form-group">
    <label for="exampleDropdownFormPassword2">Wachtwoord</label>
    <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
  </div>
  <div class="form-group">
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="dropdownCheck2">
      <label class="form-check-label" for="dropdownCheck2">
        Remember me
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>


<form>
    
    <div class="form-group">
        <label for="inputAddress">Adres:</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputCity">Stad:</label>
        <input type="text" class="form-control" id="inputCity" placeholder="Bijv. Utrecht">
        </div>
        <div class="form-group col-md-4">
        <label for="inputState">Provincie:</label>
        <select id="inputState" class="form-control">
            <option selected>Kies een provincie...</option>
            <option>Groningen</option>
            <option>Friesland (Fryslân)</option>
            <option>Drenthe</option>
            <option>Overijssel</option>
            <option>Flevoland</option>
            <option>Gelderland</option>
            <option>Utrecht</option>
            <option>Noord-Holland</option>
            <option>Zuid-Holland</option>
            <option>Zeeland</option>
            <option>Noord-Brabant</option>
            <option>Limburg</option>
        </select>
        </div>
        <div class="form-group col-md-2">
        <label for="inputZip">Postcode:</label>
        <input type="text" class="form-control" id="inputZip" placeholder="1234 AB">
        </div>
    </div>
</form>
<!-- End of the form -->


<!-- Begin of the form -->
<form>
        <div class="row">
        </div class="col-6">
            <form action="./create.php" method="post">
                <div class="form-group">
                    <label for="BSN">Burgerservicenummer:</label>
                    <input type="text" class="form-control" id="BSN"
                        aria-describedby="burgerservicenummerlHelp" placeholder="Burgerservicenummer"
                        name="BSN">
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="text" class="form-control" id="e-mail" aria-describedby="emailHelp"
                        placeholder="E-mailadres" name="email">

                    <div class="row">
                    </div class="col-6">

                    <div class="form-group">
                        <label for="phonenumber">Telefoonnummer:</label>
                        <input type="text" class="form-control" id="phonenumber" aria-describedby="phonenumberHelp"
                            placeholder="+31 6 1234567" name="phonenumber">
                    </div>

                    <div class="row">
                    </div class="col-6">
                    <div class="form-group">
                        <label for="firstname">Voornaam:</label>
                        <input type="text" class="form-control" id="firstname" aria-describedby="firstlHelp"
                            placeholder="Jan" name="firstname">
                    </div>
                    <div class="form-group">
                        <label for="infix">Tussenvoegsel:</label>
                        <input type="text" class="form-control" id="infix" aria-describedby="infixlHelp"
                            placeholder="van" name="infix">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Achternaam:</label>
                        <input type="text" class="form-control" id="lastname" aria-describedby="lastnameHelp"
                            placeholder="Zuijlen" name="lastname">

                    </div>
                    <div class="form-group">
                        <label for="password">Wachtwoord:</label>
                        <input type="password" class="form-control" id="password" aria-describedby="password"
                            placeholder="Voer een sterk wachtwoord in" name="password">
                    </div>

                    <div class="form-group my-1">
                        <input type="radio" id="gender" name="gender" value="Man">
                        <label for="male">Man</label><br>
                        <input type="radio" id="gender" name="gender" value="Vrouw">
                        <label for="female">Vrouw</label><br>
                        <input type="radio" id="gender" name="gender" value="Anders">
                        <label for="other">Anders</label>
                    </div>

                    <input type="date" id="brith" name="date_of_birth">

                    <!-- <div class="row">
                        </div class="col-12">
                    </div>
                    </div> -->
                    
                    <div class="alert alert-danger mt-2" role="alert">Wij zullen uw gegevens <a class="alert-link">Nooit delen met derde partijen!</a>
                    </div>
                    <input type="checkbox" id="voorwaarden" name="voorwaarden" value="voorwaarden">
                    <label for="voorwaarden">Ik ga akkoord met de <a href="voorwaarden.html" class="alert-link">voorwaarden</label>
                    <br>

                    <input type="checkbox" id="privacy" name="privacy" value="privacy">
                    <label for="privacy">Ik ga akkoord met de  <a href="privacypolicy.html" class="alert-link">Privacy policy</label><br>
                    <button type="submit" class="btn btn-outline-dark">Versturen</button> 

            </form>

        </div>
        </div class="col-6">
        </div>
</form>
<!-- End of the form -->

<!-- Begin of the footer -->

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="footer-widget">
          <h3>Stay in touch</h3>
          <div class="footer-widget-content">
            <a href="mailto:sales@example.com" class="contact-link">sales@example.com</a>
            <a href="mailto:support@example.com" class="contact-link red"> support@example.com </a>
            <a href="tel:0121234" class="contact-link">(123) 456-789</a>
            <div class="footer-social">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa fa-rss"></i></a></li>
            </ul>
              </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
      <div class="footer-widget">
        <h3>Latest Events</h3>
        <div class="footer-widget-content">
          <div class="media">
              <div class="media-left">
                 <a href="#"><img class="media-object" src="https://placehold.it/60x60" alt="..."></a>
              </div>
              <div class="media-body">
                 <p><a href="#">vulputate velit esse consequat. </a></p>
                 <span>September 30, 2016 </span>
              </div>
           </div>
          <div class="media">
              <div class="media-left">
                 <a href="#."><img class="media-object" src="https://placehold.it/60x60" alt="..."></a>
              </div>
              <div class="media-body">
                 <p><a href="#">vulputate velit esse consequat. </a></p>
                 <span>September 30, 2016 </span>
              </div>
           </div>
        </div>
        </div>
      </div>
      <div class="col-sm-3">
      <div class="footer-widget">
        <h3>Opening Hour</h3>
        <div class="footer-widget-content">
        <div class="open-time ">
          <ul class="opening-time">
            <li><span><i class="fa fa-times"></i></span><p class="clock-time"><strong>monday :</strong> closed</p>
             </li>
            <li><span><i class="fa fa-check"></i></span><p><strong>tue-fri :</strong> 8am - 12am</p></li>
            <li><span><i class="fa fa-check"></i></span><p><strong>sat-sun :</strong> 7am - 1am</p></li>
            <li><span><i class="fa fa-check"></i></span><p><strong>holydays :</strong> 12pm-12am</p></li>
          </ul>
           </div>
        </div>
        </div></div>
      
      <div class="col-sm-3">
      <div class="footer-widget">
        <h3>Latest Events</h3>
        <div class="footer-widget-content">
          <div class="images-gellary">
            <ul>
              <li><a href="#"><img src="https://placehold.it/85x85" alt="Instagram 01"></a></li>
              <li><a href="#"><img src="https://placehold.it/85x85" alt="Instagram 02"></a></li>
              <li><a href="#"><img src="https://placehold.it/85x85" alt="Instagram 03"></a></li>
              <li><a href="#"><img src="https://placehold.it/85x85" alt="Instagram 04"></a></li>
              <li><a href="#"><img src="https://placehold.it/85x85" alt="Instagram 05"></a></li>
              <li><a href="#"><img src="https://placehold.it/85x85" alt="Instagram 06"></a></li>
            </ul>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- End of the footer -->


    </main>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    <script scr="./js/app.js"></script>

</body>
</html>