<!DOCTYPE html>
<html>
<head>
    <title>Calculate Amount Before Tax</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        h2 {
            color: #333;
        }
        form {
            margin-top: 20px; 
        }
        label {
            display: block;
            margin-bottom: 10px;
            color: #555;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #5cb85c;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #4cae4c;
        }
        p {
            margin-top: 20px;
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Calculate Amount Before Tax</h2>
        <form method="post" action="">
            <label for="amount">Enter the amount inclusive of tax:</label>
            <input type="number" id="amount" name="amount" step="0.01" required>
            <button type="submit">Calculate</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $x = $_POST["amount"];
            
            /**
             * Calculate the amount before tax.
             *
             * @param float $x The amount inclusive of tax.
             * @return float The amount before tax was applied.
             */
            function calculateAmountBeforeTax($x) {
                // Tax rate is 29%
                $taxRate = 0.29;
                
                // Calculate the amount before tax
                $y = $x / (1 + $taxRate);
                
                return $y;
            }

            $amountBeforeTax = calculateAmountBeforeTax($x);
            echo "<p>The amount before tax is: " . number_format($amountBeforeTax, 2) . "</p>";
        }
        ?>
    </div>
</body>
</html>
