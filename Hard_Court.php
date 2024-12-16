<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tennis Hard Court</title>
    <meta charset="UTF-8">
    <meta name="description" content="Tennis Court Booking">
    <meta name="keywords" content="Tennis, Court, Booking, Sports">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tennis Court Booking | Review View</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <style>
        body {
            background-color: #232f3e;
        }

        header {
            background-color: #343a40;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #007bff;
        }

        h3 {
            color: #28a745;
        }

        /* Loader CSS */
       
       

        /* Hide the content until the loader is hidden */
        .content {
            display: none;
        }

        #back-to-top {
            position: fixed;
            bottom: 40px;
            right: 40px;
            display: none;
            background-color: #FF9900;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        #back-to-top:hover {
            background-color: #e58f00;
        }
    </style>
</head>

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <div class="content mb-4">
        <div class="container mt-4">
            <h1 class="text-center text-success">Hard Court</h1>
            <div class="row">
                <div class="col-md-6">
                    <img id="tennisImage" src="img/HardCourt.png" alt="Tennis Clay Court" style="width: 1100px;">
                    <iframe id="videoFrame" height="800px" width="1100px" name="myframe" style="margin-left: 10px; display: none;"></iframe><br><br>
                    <a href="img/HardVideo.webm" target="myframe" class="btn btn-danger" style="margin-left: 10px;" onclick="showVideo()">Video</a>
                    <a id="showImageButton" href="#" class="btn btn-success" style="margin-left: 10px; display: none;" onclick="showImage()">Show Image</a>
                </div>
                <script>
                    function showVideo() {
                        document.getElementById('tennisImage').style.display = 'none';
                        document.getElementById('videoFrame').style.display = 'block';
                        document.getElementById('showImageButton').style.display = 'inline-block';
                    }

                    function showImage() {
                        document.getElementById('tennisImage').style.display = 'block';
                        document.getElementById('videoFrame').style.display = 'none';
                        document.getElementById('showImageButton').style.display = 'none';
                    }
                </script>
                <div class="col-md-12">
                    <h2 class="mt-4">About Our Hard Courts</h2>
                    <p>Tennis hard courts are one of the most common surfaces used in the sport, known for their durability, consistency, and adaptability. Made from a combination of asphalt or concrete and acrylic layers, hard courts provide a flat, even playing surface that offers a balanced game for players of all styles. The surface is typically coated with a layer of acrylic material, which can include various color options and finishes.</p>
                    <p>One of the primary advantages of hard courts is their consistency. The surface provides a reliable bounce and speed, allowing players to develop and execute their game strategies with a high degree of predictability. Unlike clay courts, which can be affected by weather conditions and wear, hard courts offer a uniform playing field throughout the year. This consistency is beneficial for players who prefer a stable surface and can lead to fewer unexpected bounces or irregularities during play.</p>
                    <h3>Available Cities</h3>
                    <ul>
                        <li>Melbourne, Australia</li>
                        <li>New York City, USA</li>
                        <li>Indian Wells, USA</li>
                        <li>Toronto, Canada</li>
                        <li>Miami, USA</li>
                    </ul>
                    <h3>Price</h3>
                    <p>The cost for booking our hard courts is competitive and affordable. Prices vary depending on the city and time of booking. Please contact us for more details.</p>
                    <h3>Other Details</h3>
                    <p>The popularity of hard courts is evident in their widespread use at both professional and recreational levels. Major tournaments, including the Australian Open and the US Open, are held on hard courts, showcasing their prominence in the sport. Additionally, many public and private tennis facilities around the world feature hard courts, making them accessible to a wide range of players.</p>
                </div>
            </div>
            <form action="index.php">
            <button class="btn btn-danger btn-lg mt-4" style="margin-left: 30px; margin-top: 30px;">Home</button>
        </form>
        </div>
    </div>

    <button id="back-to-top" onclick="scrollToTop()"><img src="img/BackToTop.png" style="width: 30px; height: 30px;"></button>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Wait for the window to fully load
        window.onload = function() {
            // Hide the loader and show the content
            document.getElementById('preloder').style.display = 'none';
            document.querySelector('.content').style.display = 'block';

            window.onscroll = function () {
                var backToTopButton = document.getElementById("back-to-top");
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    backToTopButton.style.display = "block";
                } else {
                    backToTopButton.style.display = "none";
                }
            };
        };

        function scrollToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>

</html>
