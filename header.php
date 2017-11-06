<?php

  function renderHead($titel) {

    echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
          <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
          <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
          <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
          <title>" . $titel . "</title>";

  }

  function renderNavbar() {

    include 'login.php';

    if (isset($_GET['mail'])) {
      $succes     = "Er is een mail met wachtwoord gestuurd!<br><br>
                    <button type=\"submit\" class=\"btn btn-default\">Login</button>";
      $script     = "<script> $(document).ready(function(){ $('#loginModal').modal('show'); }); </script>";
    }

    if (isIngelogd() == false) {

      echo "<nav class=\"navbar navbar-default\">
              <div class=\"container-fluid\">
                <ul class=\"nav navbar-nav navbar-right\">
                  <li><a data-toggle=\"modal\" href=\"#loginModal\">Login</a></li>
                </ul>
              </div>
            </nav>";

      echo "<div class=\"modal fade\" id=\"loginModal\" role=\"dialog\">
              <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Login</h4>
                  </div>
                  <div class=\"modal-body\" style=\"padding:40px 50px;\">
                    <form action=\"\" method=\"POST\">
                      <div class=\"form-group\">
                        <label for=\"Gebruikersnaam\">Gebruikersnaam</label><br>
                        <input type=\"text\" class=\"form-control\" maxlength=\"20\" placeholder=\"gebruikersnaam\" name=\"gebruikersnaam\" required>
                      </div>
                      <div class=\"form-group\">
                        <label for=\"Wachtwoord\">Wachtwoord</label><br>
                        <input type=\"password\" class=\"form-control\" maxlength=\"20\" placeholder=\"wachtwoord\" name=\"wachtwoord\" required>
                      </div>";

                      if(isset($error_msg)) {
                        echo $error_msg;
                      }
                      elseif (isset($succes)) {
                        echo $succes;
                      }
                      else {
                        echo "<button type=\"submit\" class=\"btn btn-default\">Login</button>";
                      }

      echo         "</form>
                  </div>
                </div>
              </div>
            </div>";

        if(isset($script)) {
          echo $script;
        }

    }
    else {
      echo "<nav class=\"navbar navbar-default\">
              <div class=\"container-fluid\">
                <ul class=\"nav navbar-nav\">
                  <li><a href=\"./profiel.php?id=" . $_SESSION['gebruikers_id'] . "\">Profiel</a></li>
                  <li><a href=\"./memberships.php\">Memberships</a></li>
                  <li><a href=\"./events.php\">Events</a></li>
                </ul>
                <ul class=\"nav navbar-nav navbar-right\">
                  <li><a href=\"./logout.php\">Loguit</a></li>
                </ul>
              </div>
            </nav>";
    }
  }

  function renderJumbotron() {

    echo "<div class=\"container\">
            <div class=\"jumbotron\">
              <h1>Date4Fun<br><small>Logo</small></h1>
            </div>
          </div>";
  }

?>
