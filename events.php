<html>
  <head>
    <title>Date4Fun Events</title>
  </head>
  <body>
    <h1>Date4Provit</h1>
    <h1>Logo</h1>
    <table>
      <tr>
        <th COLSPAN="2"><br><h2>Events</h2></th>
       </tr>
       <tr>
        <th>Event 1</th>
        <th>Event 2</th>
      </tr>
       <tr>
        <td>Omschrijving 1</td>
        <td>Omschrijving 2</td>
      </tr> 
      <tr>
        <td>Locatie 1</td>
        <td>Locatie 2</td>
      </tr> 
      <tr>
        <td>Prijs 1</td>
        <td>Prijs 2</td>
      </tr> 
      <tr>
        <td><button type="button">Winkelmandje</button></td>
        <td><button type="button">Winkelmandje</button></td>
      </tr>
      <tr>
        <td><img src="https://images.duckduckgo.com/iu/?u=http%3A%2F%2Fbasketball.net.au%2Fwp-content%2Fuploads%2F2008%2F04%2Fplaceholder.jpg&f=1" width="320px" height="480px"></td>
        <td><img src="https://images.duckduckgo.com/iu/?u=http%3A%2F%2Fbasketball.net.au%2Fwp-content%2Fuploads%2F2008%2F04%2Fplaceholder.jpg&f=1" width="320px" height="480px"></td>
      </tr>
    </table>
  </BODY>
</HTML>

<?php

  include "config.php";

  $query = "SELECT * FROM events WHERE eventid ='";
  $result = mysqli_query($db, $query);

  if (!$result) {
    die("<br> Database query mislukt.");
  }

?>

<?php
// Titel
// Oschrijving
// Locatie + Kosten
// Aanmelden (in winkelwagentje)
// Drie naast elkaar
?>
