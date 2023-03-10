<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Stick+No+Bills&display=swap');

        * {
            margin: 0;
            padding: 0;
        }

        .container {
            height: 100vh;
            width: 100vw;
            background-color: aliceblue;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .container h1 {
            font-weight: bold;
            /* color: coral; */
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .text h1 {
            text-transform: uppercase;
            color: black;
            font-family: 'Stick No Bills', sans-serif;
        }

        .login {
            min-height: 70vh;
            min-width: 50vh;
            /* border: 1px solid black; */
            border-radius: 15px;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        }

        .container span {
            color: coral;
            font-family: 'Stick No Bills', sans-serif;

        }

        .text {
            height: 20%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .input {
            height: 80%;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .input input {
            width: 80%;
            height: 5vh;
            margin: 15px;
            border: 1px solid coral;
            border-radius: 15px;
            padding-left: 10px;
            outline: none;
        }

        .btn {
            background-color: coral;
            border: none;
            color: white;
            height: 4vh;
            width: 30%;
            border-radius: 15px;
            margin-top: 40px;
            transition: 1s all ease;
        }

        .btn:hover {
            background-color: transparent;
            border: 1px solid coral;
            transform: translateY(-10px);
            color: coral;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>WELCOME TO <span> ENCYCLOPEDIA</span></h1>
        <div class="login">
            <div class="text">
                <h1>Login</h1>
            </div>



            <div class="input">

                <input type="text" name="name" id="name" placeholder="Enter Your Name ">
                <input type="email" name="email" id="email" placeholder="Enter Your Email">
                <input type="password" name="password" id="psd" placeholder="Enter Password">

                <button class="btn" onclick="login()">Login</button>
            </div>
        </div>
    </div>



    <script type="text/javascript">
        function login() {
            var names = document.getElementById("name").value;
            var mail = document.getElementById("email").value;
            var pswrd = document.getElementById("psd").value;
            var regName = /^[a-zA-Z]+ [a-zA-Z]+$/;
            var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            var regpass = "sahil123";

            if (names.match(regName)) {
                console.log("valid name")
            } else {
                document.getElementById("name").style.border = " 2px solid red";
                document.getElementById("name").style.borderRadius = " 10px";
                alert("invalid Name")
            }



            if (mail.match(validRegex)) {
                console.log("valid mail");
            } else {
                document.getElementById("email").style.border = " 2px solid red";
                document.getElementById("email").style.borderRadius = " 10px";
                alert("invalid Email ID")
            }




            if (pswrd.match(psd)) {
                alert("Login Successfull !");
                location.replace("index.php");
            } else {
                document.getElementById("psd").style.border = " 2px solid red";
                document.getElementById("psd").style.borderRadius = " 10px";
                alert("invalid Password")
            }

        }
    </script>
</body>

</html>