<?php $currentPage = __FILE__; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial Literacy - Nik's Homepage</title>
    <link rel="stylesheet" href="../style.css">
    <script defer data-domain="nkud.me" src="https://plausible.io/js/script.js"></script>
</head>
<body>
    <?php include '../header.php';?>
    <p><a href="/index.php">Home</a> / Financial literacy</p>
    <h1>Financial literacy</h1>    
    <p>    
        Basic information and tools for building wealth and managing assets.
    </p>
    <div class="flex-container">
        <a href="principles.php" class="box">
            <h3>📋 Key prosperity principles</h3>
            <p>
                Basic information on how to build and preserve wealth.
            </p>
        </a>
        <a href="dcf.php" class="box">
            <h3>🧮 DCF Calculator</h3>
            <p>
                A tool to calculate the fair value of an investment object.
            </p>
        </a>
        <a href="planner.php" class="box">
            <h3>🗓️ Retirement planner</h3>
            <p>
                A calculation tool to estimate resources needed to achieve financial independence. 
            </p>
        </a>
        <a href="books.php" class="box">
            <h3>📚 Books</h3>
            <p>
                Books and materials on building and preserving wealth, managing financial assets and understanding economics.
            </p>
        </a>
        <a href="links.php" class="box">
            <h3>🔗 Financial services</h3>
            <p>
                Links to third-party services for financial management.
            </p>
        </a>
    </div>
    <?php include '../footer.php';?>
</body>
</html>