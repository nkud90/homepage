<?php $currentPage = __FILE__; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial literacy - Nik's Homepage</title>
    <link rel="stylesheet" href="../style.css">
    <script defer data-domain="nkud.me" src="https://plausible.io/js/script.js"></script>
</head>
<body>
    <!-- <button onclick="darkMode()" style="float: right; background-color: transparent; border: none;">
        <img id="dark_mode_button" class="regular-mode-icon" src="assets/icons/darkmode.svg" alt="Dark mode icon" width="24" height="24">
    </button>
    <script src="darkmode.js"></script> -->
    <?php include '../header.php';?>
    <p><a href="../index.php">Home</a> / <a href="index.php">Financial literacy</a> / Key prosperity principles</p>
    <h1>Key prosperity principles</h1>    
    <p>    
        Basic information on how to build and preserve wealth
    </p>
    <div class="flex-container">
        <a href="build_wealth.php" class="box">
            <h3>📈 How to build wealth</h3>
            <p>
                Three basic principles on how to achieve financial independence.
            </p>
        </a>
        <a href="preserve_wealth.php" class="box">
            <h3>💰 How to preserve wealth</h3>
            <p>
                Passing value in time.
            </p>
        </a>
    </div>
    <?php include '../footer.php';?>
</body>
</html>