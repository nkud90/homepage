<?php $currentPage = __FILE__; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="bitcoin, cryptocurrency, finance, investing">
    <meta name="description" content="Basic information on Bitcoin as a modern store of value and digital money.">
    <title>Bitcoin - Nik's Homepage</title>
    <link rel="stylesheet" href="/css/style.css">
    <script defer data-domain="nkud.me" src="https://plausible.io/js/script.js"></script>
</head>
<body>
    <?php include '../../header.php';?>
    <p><a href="/index.php">Home</a> / <a href="../index.php">Financial topics</a> / Bitcoin</p>
    <h1>Bitcoin</h1>    
    <p>    
        Basic information on the modern store of value and digital money.
    </p>
    <div class="flex-container">
        <a href="rationale.php" class="box">
            <h3>🤔 Why Bitcoin?</h3>
            <p>
                The rationale behind Bitcoin versus competitors.
            </p>
        </a>
        <a href="buy.php" class="box">
            <h3>💳 Buying bitcoins</h3>
            <p>
                Some details on the digital currency purchase.
            </p>
        </a>
        <a href="store.php" class="box">
            <h3>💾 Storing bitcoins</h3>
            <p>
                A calculation tool to estimate resources needed to achieve financial independence. 
            </p>
        </a>
        <a href="spend.php" class="box">
            <h3>💸 Spending bitcoins</h3>
            <p>
                Transferring the digital money with the speed of light by means of the Lightning Network.
            </p>

        <!-- Hidden placeholders  -->
        <a href="#" class="box" style="visibility: hidden">
            <h3>A hidden placeholder</h3>
            <p>
                A hidden placeholder.
            </p>
        </a>
        <a href="#" class="box" style="visibility: hidden">
            <h3>A hidden placeholder</h3>
            <p>
                A hidden placeholder.
            </p>
        </a>
        <!-- End of hidden placeholders -->

    </div>
    <?php include '../../footer.php';?>
</body>
</html>