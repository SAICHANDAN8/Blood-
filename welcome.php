<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation Management System</title>
    <link rel="stylesheet" href="dashboard.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>

body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}
.title {
        font-family: "Arial", sans-serif;
        font-size: 40px;
        font-weight: bold;
        color: #ff5f5f;
        text-align: center;
        margin-top: 50px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }
.scrollable-section {
    overflow-y: auto;
    max-height: 300px;
}

.paragraph {
    margin-bottom: 20px;
    line-height: 1.6;
    font-size: 16px;
    color: #333;
}

/* Add any additional CSS styles as per your preference */

.sidebar {
    width: 250px;
    background-color: #f5f5f5;
    padding: 20px;
    height: 100vh;
    position: fixed;
}

.logo img {
    max-width: 100%;
    height: auto;
}

.menu {
    list-style: none;
    padding: 0;
    margin: 20px 0;
}

.menu-item {
    margin-bottom: 10px;
}

.menu-item a {
    color: #333;
    text-decoration: none;
    display: flex;
    align-items: center;
}

.menu-item a i {
    margin-right: 10px;
}

.menu-item.active a {
    color: #007bff;
    font-weight: bold;
}

.main-content {
    margin-left: 250px;
    padding: 20px;
}

.header-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.user-profile img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin-right: 10px;
}

.widget {
    background-color: #fff;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.widget-header {
    border-bottom: 1px solid #ccc;
    margin-bottom: 10px;
    padding-bottom: 10px;
}

.widget-header h2 {
    margin: 0;
    font-size: 18px;
    font-weight: bold;
}

.blood-type-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.blood-type-list li {
    margin-bottom: 5px;
}
.logout-label {
        font-family: "Arial", sans-serif;
        font-size: 14px;
        color: #666;
        margin-right: 5px;
    }

    .logout-link {
        font-family: "Arial", sans-serif;
        font-size: 14px;
        color: #ff5f5f;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .logout-link:hover {
        color: #e53935;
    }
    .welcome-message {
        font-family: "Arial", sans-serif;
        font-size: 20px;
        font-weight: bold;
        color: #333;
        text-align: center;
        margin: 20px 0;
    }

    .welcome-message img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 10px;
    }
</style>
</head>

<body>
    <div class="sidebar">
        <div class="logo">
            <img src="logo.png" alt="Logo">
        </div>
        <ul class="menu">
            <li class="menu-item active">
                <a href="#">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="donar.php">
                    <i class="fas fa-users"></i>
                    <span>Donors</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="Requests.php">
                    <i class="fas fa-clipboard-list"></i>
                    <span>Requests</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="Inventory.php">
                    <i class="fas fa-boxes"></i>
                    <span>Inventory</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="reports.php">
                    <i class="fas fa-chart-line"></i>
                    <span>Reports</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="bloodbank.php">
                    <i class="fas fa-hospital-alt"></i>
                    <span>Blood Bank</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="paitent.php">
                    <i class="fas fa-user-injured"></i>
                    <span>Patient</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="employee.php">
                    <i class="fas fa-users-cog"></i>
                    <span>Employee</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="main-content">
        <header>
            <div class="header-container">
            <h1 class="title">Blood Donation Management System</h1>
                <div class="user-profile">
                <div class="logout-container">
    <span class="logout-label">Logged in as:</span>
    <h4 class="welcome-message">
        <?php echo $_SESSION['username']; ?>
    </h4>
    <a class="logout-link" href="logout.php">Logout</a>
</div>
                </div>
            </div>
        </header>

        <div class="dashboard">
            <div class="widget">
                <div class="widget-header">
                <div class="scrollable-section">
    <p class="paragraph">Blood is a body fluid in the circulatory system of humans and other vertebrates that delivers necessary substances such as nutrients and oxygen to the cells, and transports metabolic waste products away from those same cells.[1] Blood in the circulatory system is also known as peripheral blood, and the blood cells it carries, peripheral blood cells.</p>

    <p class="paragraph">Blood donation is most often performed by inserting a large bore needle (16G or 18G) into a peripheral vein, usually within the antecubital fossa. Veins on the dorsum of the hand or other prominent veins may be used in some individuals who do not have an otherwise easily accessible antecubital vein.</p>

    <p class="paragraph">Blood donation for transfusion is a vital step in the management of many clinical problems, with the two primary indications being anemia and acute blood loss. Blood donation itself is also used to primarily treat a small subset of medical conditions. At the beginning of the 20th century, Karl Landsteiner identified ABO blood groups, at which time blood typing of individuals was only beginning to be adopted as a universally standard practice.[2] Due to the inability to prevent blood from clotting once removed from the donor and thus store and transfer blood to be delivered when needed later, transfusions were only carried out on a limited basis. Blood was transfused directly from donor to recipient without intervening storage or transport. This method worked for small numbers of patients and only on a small scale, as donors and recipients needed to be connected both in time and space. There was a time when lists of donors were maintained of persons locally available to be called in to donate to patients at any time as needed. Necessity drove the development of more flexible donation and storage practices when World War I began. "On-demand" blood donation was not feasible for such a large-scale effort. Soldiers were dying of otherwise non-fatal wounds due mainly to the inability to perform a timely blood transfusion.</p>
</div>

                </div>
            </div>
            <!-- Add more widgets for other sections of the dashboard -->
        </div>
    </div>
</body>

</html>
