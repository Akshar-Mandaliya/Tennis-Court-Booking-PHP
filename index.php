<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index Page</title>
  <link rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .banner {
      background: url("img/B6.jpeg");
      color: #fff;
      text-align: center;
      padding: 100px 20px;
    }

    .banner-content {
      max-width: 600px;
      margin: auto;
    }

    .banner h1 {
      font-size: 48px;
      margin: 0;
    }

    .banner p {
      font-size: 24px;
    }

    .btn {
      background-color: #f90;
      color: #fff;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
      transition: background 0.3s;
    }

    .btn:hover {
      background-color: #e68a00;
    }

    .court-cards,
    .coach-cards,
    .complex-cards {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
    }

    .court-card,
    .coach-card,
    .complex-card {
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 10px;
      margin: 10px;
      padding: 20px;
      width: 300px;
    }

    .court-card img,
    .coach-card img,
    .complex-card img {
      max-width: 100%;
      border-radius: 10px;
    }

    .court-card h3,
    .coach-card h3,
    .complex-card h3 {
      font-size: 20px;
      margin: 10px 0;
    }

    .court-card p,
    .coach-card p,
    .complex-card p {
      font-size: 16px;
      margin: 5px 0;
    }

    .image:hover img {
      transform: scale(1.2);
    }

    .heading {
      width: 90%;
      display: flex;
      flex-direction: column;
      margin: 0 auto;
    }

    .heading h5 {
      font-size: 20px;
      color: #000;
      margin-bottom: 25px;
      position: relative;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    .heading h5::after {
      content: "";
      position: absolute;
      width: 100%;
      height: 4px;
      display: block;
      margin: 0 auto;
      background-color: #4caf50;
    }

    .img {
      margin-left: 200px;
    }

    .question-content {
      padding: 20px;
      font-size: 16px;
      color: #333;
      display: none;
    }

    .rules-section ul {
      list-style-type: none;
      padding: 0;
    }

    .rules-section ul li {
      background-color: #f2f2f2;
      margin: 10px 0;
      padding: 10px;
      border-radius: 5px;
      font-size: 18px;
      text-align: left;
      color: #333;
    }

    .rules-section ul li::before {
      content: "•";
      color: #4caf50;
      display: inline-block;
      width: 1em;
      margin-left: -1em;
    }

    .book-now-container {
      position: relative;
      margin-left: 35px;
      margin-top: 20px;
    }

    .book-now-container img {
      width: 1300px;
      height: 500px;
    }

    /* 3D animation style for Book Now button */
    .book-now-button {
      position: absolute;
      top: 20px;
      left: 20px;
      padding: 15px 30px;
      font-size: 18px;
      font-family: 'Courier New', Courier, monospace;
      background-color: black;
      color: #fff;
      border: none;
      border-radius: 8px;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .book-now-button:hover {
      transform: translateY(-5px) scale(1.05);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
    }
  </style>
</head>

<body>
  <?php include("Header.php"); ?>
  <section id="home" class="banner" style="margin-top:120px;">
    <div class="banner-content">
      <h1 style="color:black;">Welcome To Smash Hit</h1>
      <p style="color: black; margin-top: 10px;">Tennis Court Booking Now</p>
    </div>
  </section>
  <section id="courts" class="courts-section">
    <h2 class="text-danger mt-4" style="margin-left:50px;"><u>Images</u></h2>
    <div class="court-cards">
      <div class="court-card">
        <img src="img/Clay.jpeg" style="height: 200px;" alt="Court Image">
        <h3 class="text-center mt-4">Clay Court</h3>
      </div>
      <div class="court-card">
        <img src="img/Carpet.jpeg" style="height: 200px;" alt="Court Image">
        <h3 class="text-center mt-4">Carpet Court</h3>
      </div>
      <div class="court-card">
        <img src="img/Grass.jpg" style="height: 200px;" alt="Court Image">
        <h3 class="text-center mt-4">Grass Court</h3>
      </div>
      <div class="court-card">
        <img src="img/HardCourt.png" style="height: 200px;" alt="Hard Image">
        <h3 class="text-center mt-4">Hard Court</h3>
      </div>
    </div>
  </section>
  <section id="coaches" class="coaches-section">
    <h2 class="text-danger mt-4" style="margin-left:50px;"><u>Coaches</u></h2>
    <div class="coach-cards">
      <div class="coach-card">
        <img src="img/Cotch1.webp" style="height: 200px;" alt="Coach Image">
        <h3 class="text-center mt-4">Darren Cahill</h3>
      </div>
      <div class="coach-card">
        <img src="img/Cotch2.jpg" style="height: 200px;" alt="Coach Image">
        <h3 class="text-center mt-4">Boris Becker</h3>
      </div>
      <div class="coach-card">
        <img src="img/Cotch3.webp" style="height: 200px;" alt="Coach Image">
        <h3 class="text-center mt-4">Brad Gilbert</h3>
      </div>
      <div class="coach-card">
        <img src="img/Cotch4.jpg" style="height: 200px;" alt="Coach Image">
        <h3 class="text-center mt-4">Paul Annacone</h3>
      </div>
    </div>
  </section>
  <h2 class="text-danger mt-4" style="margin-left:50px;"><u>Booking Rules</u></h2>
  <section class="card mt-4" style="margin-left:35px; margin-right:35px;">
    <div class="card-body" style="text-align: justify;">
      <li>Bookings must be made at least 24 hours in advance.</li>
      <li>Players must arrive 15 minutes before their scheduled time.</li>
      <li>Proper tennis attire and non-marking shoes are required.</li>
      <li>Each booking is for a duration of 1 hour unless specified otherwise</li>
      <li>Players are responsible for bringing their own equipment.</li>
    </div>
  </section>
  <section id="coaches" class="coaches-section">
    <h2 class="text-danger mt-4" style="margin-left:50px;"><u>Top Sports Complexes in Cities in Gujarat</u></h2>
    <div class="coach-cards">
      <div class="coach-card">
        <img src="img/Ahmadabad.webp" style="height: 200px; width:500px;" alt="Complex Image">
        <h3 class="text-center mt-4">Ahmedabad</h3>
      </div>
      <div class="coach-card">
        <img src="img/Vadodara.avif" style="height: 200px;" alt="Complex Image">
        <h3 class="text-center mt-4">Vadodara</h3>
      </div>
      <div class="coach-card">
        <img src="img/Surat.webp" style="height: 200px;" alt="Complex Image">
        <h3 class="text-center mt-4">Surat</h3>
      </div>
      <div class="coach-card">
        <img src="img/Rajkot.avif" style="height: 200px;" alt="Complex Image">
        <h3 class="text-center mt-4">Rajkot</h3>
      </div>
    </div>
  </section>
  <section class="book-now-container">
    <img src="img/White.avif" alt="Booking Image" style="width:1420px;height:900px;" class="mb-4">
    <a href="Packages.php" class="btn book-now-button btn-danger btn-lg"
      style="margin-top:400px;margin-left:100px;font-family:'Courier New', Courier, monospace;background-color:black;">Book
      Now</a>
  </section>
  <?php include("Footer.php"); ?>
</body>

</html>