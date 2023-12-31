<?php $currentPage = __FILE__; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nik's Personal Homepage</title>
    <link rel="stylesheet" href="/css/style.css">
    <script defer data-domain="nkud.me" src="https://plausible.io/js/script.js"></script>
</head>
<body>
    <?php include 'header.php';?>
    <h1>Nik's personal homepage</h1>
    <div>
        <p>
            I use this web page for structuring my experience and practical information. 
        </p>
        <p>
            ⚠️<b>Warning:</b> the project is in the early stage of development, and many links are not working yet. I apologize for the inconvenience. 
        </p>
    </div>
    <div class="flex-container">
        <a href="finance/index.php" class="box">
            <h3>💸 Financial topics</h3>
            <p>
                Basic information and tools for building and preserving wealth and asset management. 
            </p>
        </a>
        <a href="#" class="box">
            <h3>😌 Mental well-being</h3>
            <!-- <p>
                The essence of time tested techniques for achieving mental well-being.
            </p> -->
            <p>
                🚧 Under construction
            </p>
        </a>
        <a href="#" class="box">
            <h3>🛠️ IT Toolbox</h3>
            <!-- <p>
                Self-hosted tools for secure transfer of information and value.
            </p> -->
            <p>
                🚧 Under construction
            </p>
        </a>
        <a href="#" class="box">
            <h3>👥 Social issues</h3>
            <p>
                🚧 Under construction
            </p>            
        </a>
        <a href="#" class="box">
            <h3>🏃 Physical health</h3>
            <p>
                🚧 Under construction
            </p>
        </a>
        <a href="#" class="box">
            <h3>🧑‍💻 Side projects</h3>
            <p>
                🚧 Under construction
            </p>
        </a>
    </div>
    <?php include 'footer_home.php';?>
</body>
</html>