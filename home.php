<!DOCTYPE html>
<html>

<head>
    <title>Blood Donation Management</title>
    <link rel="stylesheet" href="home.css">
    <style>
        * {
            margin: 0;
            padding: 0;

        }

        .main {
            width: 100;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.5)50%, rgba(0, 0, 0, 0.5)50%), url(home2.png);
            background-position: center;
            background-size: cover;
            height: 109vh;
        }

        .navbar {
            width: 1300px;
            height: 75px;
            margin: auto;
        }

        .icon {
            width: 200px;
            float: left;
            height: 70px;
        }

        .logo {
            color: orange;
            font-size: 55px;
            font-family: Arial;
            padding-left: 20px;
            float: left;
            padding-top: 5px;
        }

        .menu {
            width: 1000px;
            float: left;
            height: 100px;
        }

        ul {
            float: left;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        ul li {
            list-style: none;
            margin-left: 62px;
            margin-top: 27px;
            font-size: 14px;
        }

        ul li a {
            text-decoration: none;
            color: whitesmoke;
            font-family: Arial;
            font-weight: bold;
            transition: 0.4 ease-in-out;
        }

        ul li a:hover {
            color: #ff7200;
        }

        .content .par {
            padding-left: 20px;
            padding-bottom: 25px;
            font-family: Arial;
            letter-spacing: 1.2px;
            line-height: 30px;
        }

        .content h1 {
            font-family: 'Times New Roman';
            font-size: 70px;
            padding-left: 20px;
            margin-top: 1%;
            letter-spacing: 2px;
            color: cyan;
        }

        .content .par {
            padding-left: 0ch;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: url(bghome.png) no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">BDM</h2>
            </div>

            <div class="menu">

                <ul>
                    <li><a href="adminindex.php">ADMIN</a>
                    <li><a href="login.php">LOGIN </a></li>
                    <li><a href="register.php">REGISTER</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                    <li><a href="about.php">ABOUT US</a></li>
                </ul>


            </div>
            <br><br><br><br><br>
            <div class="content">
                <h1>BLOOD DONATION MANAGEMENT</h1>
            </div>

        </div>
    </div>
</body>

</html>