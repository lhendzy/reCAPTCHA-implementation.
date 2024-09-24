<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form recaptcha v2</title>
    <style>

         * {
            margin: 5px;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background-color: #f0f0f0;
            padding: 300px;
            border radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0,1);
            width: 350px;
        }
        form{
            background-color: white;
            padding: 20px;
            border radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0,1);
            width: 350px;
        }
        input{
            align: block;
            display: block;
            margin: 10px 0;
            padding: 10px 0;
            width: 200px;
        }
        button{
            margin-top: 10px;
            padding: 5px 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <form id=loginform >
        <input id=username type="text" placeholder="Username">
        <input id=password type="password" placeholder="Password">
        <button type="submit">Login</button>
        <div class="g-recaptcha" data-sitekey="6LfkcEwqAAAAAHQs6-pDG-Sl4hD4FhUzjno6fWyi"></div>
    </form>
    <form action="process.php" method="post">
        <input type="submit" value="Submit">
    </form>
    
    
    <script>
        document.getElementById('loginform').addEventListener('submit',function(event){
            event.preventDefault();
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            var recaptchaResponse = grecaptcha.getResponse();
        
            if (!recaptchaResponse){
                alert('Please complete the reCaptcha')
                return
            }
            // for demo the log in server

            if (username === "lhensay" && password === "iyot"){
                alert('Login successful');
            }else{
                alert('invalid username or password');
            }

            console.log('Form submitted',{username,password,recaptchaResponse});
        });
    </script>
</body>
</html>
    