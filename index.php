<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مستشفى الشفـاء</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="main">
        <div class="logo">
            <img src="images/logo.png" alt="logo">
            <h2>مستشفى الشفاء</h2>
        </div>
    </div>

    <div class="book">
        <p>أهلا بك فى مستشفى الشفاء،، للحجز املأ الإستمارة أدناه</p>
        <form action="index.php" method="POST">
            <input type="text" placeholder="أدخل الإسم" name="name">
            <input type="email" placeholder="أدخل البريد الإلكترونى" name="email">
            <input type="date" name="date">
            <input type="submit" value="إحجز الآن" name="send">
        </form>

        <?php
            $host = "localhost";
            $user = "";
            $password = "";
            $dbName = "";

            $conn = mysqli_connect($host, $user, $password, $dbName);

            // if (isset($conn)) {
            //     echo "Connected to DB";
            // } else {
            //     echo "Failed to connect";
            // }

            $pName = $_POST["name"];
            $pEmail = $_POST["email"];
            $pDate = $_POST["date"];
            $pSend = $_POST["send"];
            
            if ($pSend) {   
                $query = "INSERT INTO patients(name, email, date) VALUE('$pName', '$pEmail', '$pDate')";
                $result = mysqli_query($conn, $query);
                echo "<p style='color: green'>تم الحجز</p>";
            } else {
                echo "<p style='color: red'>عفوا حدث خطأ ما .. حاول مجددآ</p>";
            }
        ?>
    </div>
</body>
</html>
