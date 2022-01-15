<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sony Sugar | MYO</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <!-- The drop down payment div -->
    <div class="drp_pay_div">
        <nav class="dash_nav flex-row darken">
            <div class="flex-row" style="align-items: center;">
                <div class="nav_image">
                    <a href="../dashboard.php">
                        <img src="https://images.unsplash.com/photo-1545361367-3202270671e7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80" alt="image logo">
                    </a>
                </div>
                <h3 style="color: #fff; margin-left: .5rem; text-transform:capitalize;">sony sugar</h3>
            </div>
            <div class="trans_recrs">
                <a href="#">checkout / payment page</a>
            </div>
            <a href="../myo.php" class="btn btn-signOut" id="flipUp">Back to buying</a>
        </nav> 

        <div class="byf">
            <form action="mpesa_payment_form.php" method="POST">
                <div class="odp payment_d">
                    <h2>proceed to checkout</h2>
                    <div class="checkout_">
                        <label for="amount">Enter the order amount specified:</label>
                        <input type="number" name="amount" required>
                        <label for="phone">Please enter your phone number</label>
                        <input type="tel" name="phone" placeholder="254 756 123 456 or 0756 123 456" minlength="10" maxlength="12" required>
                        <input type="submit" value="Pay now" name="submit" class="btn_checkout">
                    </div>
                    <div class="pay_firm">
                        <img src="../images/mpesa.png" alt="M-Pesa Image">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>