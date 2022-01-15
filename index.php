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
    <style>
body{
    padding: 0;
    font-family: 'Source Sans Pro', sans-serif;
    background: #000000;
}

*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

html{
    scroll-behavior: smooth;
}

a{
    text-decoration: none;
}
ul{
    list-style: none;
}
.flex-row{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
}

.nav{
    justify-content: space-between;
    height: 10vh;
    padding: 0 1rem;
    align-items: center;
}
.nav .logo a img{
    width: 60px;
    height: 60px;
    border-radius: 50%;
}
.lk > a{
    width: 100px;
    text-align: center;
}
        /* <!-- The drop down payment div --> */
.drp_pay_div{
    /* position: absolute;
    top: 0;
    left: 0;
    right: 0; */
    position: relative;
    background: linear-gradient(to bottom, rgb(4, 126, 15), rgb(97, 99, 6));
    width: 100%;
    height: 100vh;
    /* z-index: 5; */
    /* transform: translateY(-100%); */
    /* transition: all .4s linear; */
}

.drp_pay_div_toggle{
    transform: translateY(0%);
}

.darken{
    background: #000000;
}

.dash_nav{
    min-height: 10vh;
    align-items: center;
    justify-content: space-between;
    padding: 0 1rem;
    background: #00000099;
}

.dash_nav h2{
    font-size: 1.5rem;
    text-transform: capitalize;
}

.nav_image{
    width: 50px;
    height: 50px;
    background: yellow;
    border-radius: 50%;
    overflow: hidden;
}


.byf form{
    min-height: 90vh;
    padding: 1rem;
    display: flex;
    justify-content: space-around;
    flex-direction: row;
    flex-wrap: wrap;
}

.odp{
    min-height: 450px;
    width: 400px;
    border-radius: .5rem;
    background: #00000099;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    padding: 1rem;
}

:is(.payment_d, .order_d) h2{
    text-align: center;
    text-transform: capitalize;
    font-size: 1.8rem;
    line-height: 2;
    color: #ffffff;
}

:is(.payment_d, .order_d) h2:first-child{
    border-bottom: 1px solid #fff;
}

.pay_firm{
    width: 100%;
    height: 150px;
    /* background: rosybrown; */
    border-radius: .5rem;
    overflow: hidden;
}

.pay_firm img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.btn_checkout{
    font-size: 1rem;
    letter-spacing: 2px;
    text-transform: capitalize;
    cursor: pointer;
    color: rgb(4, 126, 15);
}

img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.btn{
    cursor: pointer;
    border: none;
    font-size: 1rem;
    padding: .6rem 1.2rem;
    text-transform: capitalize;
    color: #fff;
    border-radius: 2rem;
}


.checkout_{
    width: 100%;
    height: 250px;
    background: rgb(4, 126, 15);
    padding: 1rem;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    border-radius: .5rem;
}

.checkout_ label{
    text-transform: capitalize;
    font-size: 1.1rem;
    color: #ffffff;
}

.checkout_ input{
    padding: 0 1rem;
    height: 40px;
    border-radius: 2rem;
    outline: none;
    border: none;
}
    </style>
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
            <a href="#" class="btn btn-signOut" id="flipUp">Back to buying</a>
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
                        <img src="mpesa.png" alt="M-Pesa Image">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>