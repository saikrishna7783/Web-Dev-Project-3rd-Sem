<head>
    <title>Checkout Page</title>
    <style>
        /* Add your CSS styles here */
        /* Example styles */
        form {
            width: 50%;
            margin: 30px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php
    require_once "header.php";
    ?>
    <form action="" method="post">
        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="tel">Telephone:</label>
        <input type="tel" id="tel" name="tel" required>

        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea>

        <label for="upi_id">UPI ID:</label>
        <input type="text" id="upi_id" name="upi_id" required>

        <input id="submitBtn" type="submit" name="submit" value="Submit">
    </form>
</body>

</html>
<script>
    document.getElementById("submitBtn").addEventListener("click", function() {
        alert("Order Confirmed , you will receive an sms regardig the confirmation of order ");
    });

    document.getElementById("submitBtn").addEventListener("click", function() {
        localStorage.removeItem("cart");
    });
</script>

<?php
error_reporting(0);
if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $address = $_POST['address'];
    $upi_id = $_POST['upi_id'];

    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $dbname = "WebDevProject";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insert the user data into the database

    $sql = "INSERT INTO checkout (fullname, email, tel, address, upi_id)
        VALUES ('$fullname', '$email', '$tel', '$address', '$upi_id')";

    if (mysqli_query($conn, $sql)) {
        echo "   ";
    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }

    // Close the connection
    mysqli_close($conn);
}



?>
<?php
// error_reporting(0);

// include the Twilio PHP library
require_once "vendor/autoload.php";

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'ACc5cf063d4af908e7372d684e58e8e2c1';
$auth_token = 'b0d85d7266bf5691ae45a4d7022efdbe';

// Your Twilio phone number
$twilio_number = "+15342203274";

// The phone number the message will be sent to
$to_number = $_POST["tel"];

// The message to be sent
$message = "Your order is confirmed. Thank you for shopping with us.";

// Create a new instance of the Twilio client
$client = new Client($account_sid, $auth_token);

// Send the message
$client->messages->create(
    $to_number,
    array(
        'from' => $twilio_number,
        'body' => $message
    )
);

header("Location: c.php");
?>