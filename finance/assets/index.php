<?php $currentPage = __FILE__; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choosing Assets - Nik's Homepage</title>
    <link rel="stylesheet" href="../../style.css">
    <script defer data-domain="nkud.me" src="https://plausible.io/js/script.js"></script>
</head>
<body>
    <?php include '../../header.php';?>
    <p><a href="/index.php">Home</a> / <a href="../index.php">Financial topics</a> / Choosing assets</p>
    <h1>Choosing assets</h1>    
    <p>    
        The list of high quality assets and quality parameters.
    </p>
    <div class="flex-container">
        <a href="factors.php" class="box">
            <h3>⚙️ Quality parameters</h3>
            <p>
                What factors to consider when choosing an asset.
            </p>
        </a>
        <a href="list.php" class="box">
            <h3>📋 Quality assets list</h3>
            <p>
                Investment vehicles of personal choice.
            </p>
        </a>

        <!-- Hidden placeholders  -->
        <!-- <a href="#" class="box" style="visibility: hidden">
            <h3>A hidden placeholder</h3>
            <p>
                A hidden placeholder.
            </p>
        </a> -->
        <!-- End of hidden placeholders -->

    </div>
    <?php include '../../footer.php';?>
</body>
</html>