
                <?php
                // Process the submitted form data
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Retrieve product details from the form
                    $product_names = $_POST["product_name"];
                    $quantities = $_POST["quantity"];
                    $prices = $_POST["rate"];

                    // Display the invoice
                    echo "<h2>Invoice</h2>";
                    echo "<table>";
                    echo "<tr><th>Product Name</th><th>Quantity</th><th>Price</th></tr>";
                    for ($i = 0; $i < count($product_names); $i++) {
                        echo "<tr><td>{$product_names[$i]}</td><td>{$quantities[$i]}</td><td>{$prices[$i]}</td></tr>";
                    }
                    echo "</table>";
                }
                ?>
