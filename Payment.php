<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Payment Method - Amazon Style</title>
    <meta name="description" content="Tennis Court Booking">
    <meta name="keywords" content="Tennis, Court, Booking, Sports">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <style>
        body {
            font-family: 'Amazon Ember', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url("img/D4.webp");
            color: #333;
        }

        header {
            background-color: #131921;
            color: #fff;
            padding: 15px 20px;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        header .header-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        header .header-content h1 {
            font-size: 24px;
            margin: 0;
        }

        header .nav {
            display: flex;
            gap: 15px;
        }

        header .nav a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
        }

        main {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        main h1 {
            font-size: 28px;
            color: #131921;
            margin-bottom: 20px;
            border-bottom: 2px solid #f3c230;
            padding-bottom: 10px;
        }

        .payment-options {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .payment-option {
            display: flex;
            align-items: center;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .payment-option:hover {
            background-color: #f0f0f0;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .payment-option img {
            max-width: 60px;
            margin-right: 15px;
        }

        .payment-option label {
            font-size: 18px;
            font-weight: 400;
            color: #333;
        }

        .payment-option input[type="radio"] {
            margin-right: 10px;
        }

        footer {
            background-color: #131921;
            color: #fff;
            padding: 15px;
            text-align: center;
            font-size: 14px;
        }
    </style>
</head>

<body>
<form action="Booking_Court.php"><input type="submit" value="Back" class="btn btn-warning btn-lg" style="margin-top: 15px;margin-left: 15px;color:white;"></form>
    <main style="margin-top: 190px; width: 500px;">
        <h1>Select Your Payment Method</h1>
        <form id="payment-form">
            <section class="payment-options">
                <div class="payment-option">
                    <input type="radio" id="credit-card" name="payment-method" value="credit-card">
                    <label for="credit-card">Credit Card</label>
                </div>
                <div class="payment-option">
                    <input type="radio" id="internet-banking" name="payment-method" value="internet-banking">
                    <label for="internet-banking">Internet Banking</label>
                </div>
                <button type="button" class="btn btn-warning" style="color:white;height:50px;" onclick="handleSubmit()">Submit</button>
            </section>
        </form>
    </main>

    <script>
        function handleSubmit() {
            const form = document.getElementById('payment-form');
            const selectedMethod = form.querySelector('input[name="payment-method"]:checked');

            if (selectedMethod) {
                // Redirect to credit.php if credit card is selected
                if (selectedMethod.value === 'credit-card') {
                    window.location.href = 'credit.php';
                }
                // Redirect to internet-banking.php if Internet Banking is selected
                else if (selectedMethod.value === 'internet-banking') {
                    window.location.href = 'internet-banking.php';
                }
            } else {
                alert('Please select a payment method.');
            }
        }
    </script>

</body>

</html>
