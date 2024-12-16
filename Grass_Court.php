<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tennis Grass Court</title>
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
            <h1 class="text-center text-success">Grass Court</h1>
            <div class="row">
                <div class="col-md-6">
                    <img id="tennisImage" src="img/Grass.jpg" alt="Tennis Clay Court" style="width: 1100px;">
                    <iframe id="videoFrame" height="800px" width="1100px" name="myframe"
                        style="margin-left: 10px; display: none;"></iframe><br><br>
                    <a href="img/GrassVideo.mp4" target="myframe" class="btn btn-danger" style="margin-left: 10px;"
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
                    <h2 class="mt-4">About Our Grass Courts</h2>
                    <p>Grass courts are one of the most traditional and iconic surfaces in tennis, known for their
                        unique playing characteristics and historical significance in the sport. These courts are made
                        of natural grass that is meticulously maintained to provide a smooth and even surface. Unlike
                        other court types, grass courts offer a fast-paced game with a distinctive playing experience,
                        influenced heavily by the natural properties of the grass.</p>
                    <p>One of the most notable features of grass courts is their speed. The grass surface allows the
                        ball to skid and bounce lower compared to other surfaces like clay or hard courts. This fast
                        pace of play can benefit players with strong serve-and-volley techniques, as the low bounce and
                        quick surface favor aggressive play close to the net. Grass courts also require players to adapt
                        their movement and shot techniques, as the ball's unpredictable bounce can lead to a variety of
                        challenges and opportunities.</p>
                    <h3>Available Cities</h3>
                    <ul>
                        <li>Wimbledon, London, UK</li>
                        <li>Queen’s Club, London, UK</li>
                        <li>Halle Open, Halle, Germany</li>
                        <li>Rothesay International, Eastbourne, UK</li>
                        <li>Rothesay International, Eastbourne, UK</li>
                    </ul>
                    <h3>Price</h3>
                    <p>The cost for booking our grass courts is competitive and affordable. Prices vary depending on the
                        city
                        and time of booking. Please contact us for more details.</p>
                    <h3>Other Details</h3>
                    <p>Another distinctive characteristic of grass courts is their effect on the style of play. The
                        surface tends to support a more classical and attacking style of tennis, rewarding players who
                        can capitalize on quick, precise shots and net play. The grass's natural wear over the course of
                        a match or tournament can also create variations in the playing conditions, affecting the bounce
                        and speed of the ball.</p>
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