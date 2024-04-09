<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Website with PHP and MySQL</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Product List</h1>
    </header>
    <main>
        <section id="products">
            <?php
            // Database connection details
            $db_host = '<DB_HOST>'; // Example: localhost
            $db_user = '<DB_USER>'; // Example: myuser
            $db_password = '<DB_PASSWORD>'; // Example: mypassword
            $db_name = '<DB_NAME>'; // Example: mydb

            // Create a database connection
            $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Query to retrieve products
            $sql = "SELECT product_id, product_name, product_description FROM products";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // Display products
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="product">';
                    echo '<h2>' . $row['product_name'] . '</h2>';
                    echo '<p>' . $row['product_description'] . '</p>';
                    echo '</div>';
                }
            } else {
                echo '<p>No products found.</p>';
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
        </section>
    </main>
    <script src="script.js"></script>
</body>
</html>
