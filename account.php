<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduce Yourself!</title>
</head>

<body>
    <form action="">

        <div class="profilepic">
            <img src="71316.jpg">
        </div>

        <div class="container">
            <label for="username">
                <b>Username : </b>
            </label>
            <input type="text" name="username" id="username" placeholder="Enter Username">

            <label for="password">
                <b>Password : </b>
            </label>
            <input type="password" name="password" id="password" placeholder="Enter password">

            <button type="submit">
                Login
            </button>

            <div>
                <label for="rememberme">
                    <input type="checkbox" checked="checked" name="rememberme">
                    Remember Me
                </label>
            </div>
        </div>

        <div class="container">
            <span class="forgotpassword">
                <a href="#">Forgot password?</a>
            </span>
            <span class="createaccount">
                <a href="#">Create an account</a>
            </span>
        </div>
        <style>
            * {
                box-sizing: border-box;
            }

            img {
                width: 400px;
                border-radius: 50%;
            }

            form {
                border: 3px solid black;
                margin: 20%;
            }

            input[type="text"],
            input[type="password"] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }

            .profilepic {
                text-align: center;
                margin: 24px 0 12px 0;
            }

            span.forgotpassword {
                float: right;
            }

            @media screen and (max-width: 300px) {
                span.forgotpassword {
                    display: block;
                    float: none;
                }
            }

            .container {
                padding: 16px;
            }

            button {
                background-color: blue;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }

            button:hover {
                opacity: 0.8;
            }
        </style>
    </form>
</body>

</html>