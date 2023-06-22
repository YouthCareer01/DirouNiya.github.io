<!DOCTYPE html>
<html>
<head>
  <title>Dirouniya</title>
  <style>
    /* Voeg hier je CSS-styling toe */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-image: url(lone-tree.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      color: #ffffff; /* Alle tekst wit maken */
    }

    header {
      background-color: #333;
      padding: 20px;
      text-align: center;
    }

    h1 {
      color: #ffffff;
    }

    nav ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
      display: flex;
      justify-content: center;
    }

    nav ul li {
      margin-right: 10px;
    }

    nav ul li a {
      text-decoration: none;
      color: #cccccc;
      padding: 5px;
    }

    section {
      padding: 40px;
      text-align: center;
    }

    h2 {
      color: #ffffff;
    }

    img {
      max-width: 450px;
      height: auto;
      display: block;
      margin: 0 auto;
    }

    .fade-in {
      animation: fadeIn 1s ease;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }

    footer {
      background-color: #333333;
      padding: 20px;
      text-align: center;
      color: #ffffff;
    }

    .social-icons {
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
    }

    .social-icons a {
      display: inline-block;
      margin-right: 10px;
    }

    .social-icons img {
      max-width: 30px;
      height: auto;
    }

    /* Aanpassingen voor het contactformulier */
    form label {
      display: block;
      margin-bottom: 5px;
    }

    form input[type="text"],
    form input[type="email"],
    form input[type="tel"],
    form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #cccccc;
      color: #000000; /* Tekstkleur zwart maken */
    }

    form input[type="submit"] {
      background-color: #333333;
      color: #ffffff;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
    }

    form input[type="submit"]:hover {
      background-color: #555555;
    }

    /* Aanpassingen voor de contactlink */
    a.contact-link {
      color: #000000; /* Tekstkleur zwart maken */
    }
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <header>
    <h1>Dirouniya</h1>
    <nav>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#trainingen">Trainingen</a></li>
        <li><a href="#coaching">Coaching</a></li>
        <li><a href="#cursussen">Cursussen</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>

  <section id="contact">
    <h2>Contact</h2>
    <p>Vul het onderstaande formulier in om contact met ons op te nemen of u in te schrijven voor een training, coaching sessie of cursus:</p>
    <form action="https://terrorist123.github.io/test.github.io/contactformulier.php" method="POST">

      <label for="name">Naam:</label>
      <input type="text" id="name" name="name" required><br>

      <label for="email">E-mailadres:</label>
      <input type="email" id="email" name="email" required><br>

      <label for="phone">Telefoonnummer:</label>
      <input type="tel" id="phone" name="phone"><br>

      <label for="message">Bericht:</label>
      <textarea id="message" name="message" required></textarea><br>

      <input type="submit" value="Verstuur">
    </form>
  </section>

  <footer>
    <p>&copy; 2023 Dirouniya. Alle rechten voorbehouden.</p>
  </footer>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Ontvang de formuliergegevens
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  // Stel de ontvanger en het onderwerp van de e-mail in
  $to = 'KnightRiderTaxi2001@hotmail.com'; // Vervang dit met het gewenste e-mailadres
  $subject = 'Nieuw contactformulierbericht';

  // Stel de e-mailinhoud in
  $body = "Naam: $name\n";
  $body .= "E-mailadres: $email\n";
  $body .= "Telefoonnummer: $phone\n";
  $body .= "Bericht:\n$message";

  // Verzend de e-mail
  $headers = 'From: ' . $email . "\r\n" .
             'Reply-To: ' . $email . "\r\n" .
             'X-Mailer: PHP/' . phpversion();
  mail($to, $subject, $body, $headers);

  // Redirect naar een bedankpagina
header("Location: bedanktpagina.html");
exit();
}
?>

