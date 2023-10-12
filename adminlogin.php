<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
        background-image: url('https://images.pexels.com/photos/616401/pexels-photo-616401.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260');
        color: black;;
		font-family: 'Roboto', sans-serif;
        /* text-align: center; */
        }
        .signup-form h1 {
		color: black;;
		font-weight: bold;
        margin-top: 40px;
        margin-bottom: 60px;
        font-size: 3.5rem;
        }
        .bar{
            margin: top 10px;
        }
        
        #box {
            border: 3px solid black;;
            height: 550px;
            width: 400px;
            margin: auto;
            margin-top: 150px;

        }
        .bar{
            margin: top 15px;
            padding: 25px;
            text-align: center;
            
        }
        .signup-form{
            text-align: center;
        }
        .form-control{
            font-size:25px;
        }

        /* .bar input[type="checkbox"]{
		margin: 30px;
    	} */
        .hint-text{
            padding-top: 10px;
        }
        p{
            font-size:22px;
            margin-bottom: 50px;
        }
        .btn{
            font-size:20px;
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
</head>
<body>
    <div  class="signup-form">
        <div id="box">
        <form action="logcode.php" method="post">
            <h1>Login</h1>
            <p>Please enter your Id and Passwors</p>
            <div class="bar">
            	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
            </div>
            <div class="bar">
                <input type="password" class="form-control" name="password" placeholder="password" required="required">
            </div>
            <div class="bar">
                <button type="submit" name="submit" class="btn">Login</button>
            </div>
        </form>
    </div>
    
        <div class="hint-text">New User? <a href="index.php">Signup here</a></div>
    </div>
</body>
</html>



