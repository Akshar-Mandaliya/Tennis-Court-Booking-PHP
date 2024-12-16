<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tennis Carpet Court</title>
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
        #preloder {
            position: fixed;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            background: #f8f9fa;
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .loader {
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            width: 120px;
            height: 120px;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

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
            <h1 class="text-center text-success">Carpet Court</h1>
            <div class="row">
                <div class="col-md-6">
                    <img id="tennisImage" src="img/Carpet.jpeg" alt="Tennis Clay Court" style="width: 1100px;">
                    <iframe id="videoFrame" height="800px" width="1100px" name="myframe"
                        style="margin-left: 10px; display: none;"></iframe><br><br>
                    <a href="img/Car.webm" target="myframe" class="btn btn-danger" style="margin-left: 10px;"
                        onclick="showVideo()">Video</a>
                    <a id="showImageButton" href="#" class="btn btn-success" style="margin-left: 10px; display: none;"
                        onclick="showImage()">Show Image</a>
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
                    <h2 class="mt-4">About Our Carpet Courts</h2>
                    <p>Carpet courts in tennis refer to a type of playing surface used predominantly indoors, offering
                        unique characteristics distinct from other tennis court types like clay, grass, or hard courts.
                        Typically made from artificial turf, textile surfaces, or a combination of synthetic materials,
                        carpet courts are laid over concrete or wooden bases. The defining feature of carpet courts is
                        their smooth, cushioned texture, which provides a moderately fast playing surface, often
                        compared to hard courts but with slightly more give.</p>
                    <p>One of the main advantages of carpet courts is their consistency in play. Unlike grass or clay
                        courts, which can vary significantly based on weather conditions and maintenance, carpet courts
                        offer a stable, uniform playing surface year-round. This consistency is particularly beneficial
                        for players who prefer predictable ball behavior, aiding in the development of precise and
                        controlled shots. Additionally, the cushioning of carpet courts can be gentler on players'
                        joints, reducing the risk of injuries associated with harder surfaces.</p>
                    <h3>Available Cities</h3>
                    <ul>
                        <li>New York City, USA</li>
                        <li>London, UK</li>
                        <li>Tokyo, Japan</li>
                        <li>Paris, France</li>
                        <li>Dubai, UAE</li>
                    </ul>
                    <h3>Price</h3>
                    <p>The cost for booking our carpet courts is competitive and affordable. Prices vary depending on
                        the city
                        and time of booking. Please contact us for more details.</p>
                    <h3>Other Details</h3>
                    <p>In conclusion, carpet courts offer a unique and valuable playing experience in the world of
                        tennis. Their consistent and moderately fast surface, coupled with joint-friendly cushioning,
                        makes them an appealing choice for many players, particularly those favoring aggressive,
                        net-oriented play. Despite their limitations in availability and cost, carpet courts remain a
                        distinctive and respected option within the diverse landscape of tennis court surfaces.</p>
                </div>
            </div>
            <form action="index.php">
                <button class="btn btn-danger btn-lg mt-4" style="margin-left: 30px; margin-top: 30px;">Home</button>
            </form>
        </div>
    </div>

    <button id="back-to-top" onclick="scrollToTop()"><img src="img/BackToTop.png"
            style="width: 30px; height: 30px;"></button>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Wait for the window to fully load
        window.onload = function () {
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