<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PHP Tutorial - Login Form</title>
    <link rel="stylesheet" type="text/css" href="/loginsystem/assets/css/style.css">
</head>
<body>

<header>
    <nav>
        <div class="main-wrapper">
            <ul>
                <li><a href="index.php">Home</a></li>
            </ul>
            <div class="nav-login">
                <form>
                    <input type="text" name="uid" placeholder="Username/Email">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="submit">Login</button>
                </form>
                <a href="signup.php">Signup</a>
            </div>
        </div>
    </nav>
</header>
