<?php $currentPage = __FILE__; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="assets, finance, investing">
    <meta name="description" content="List of assets considered reliable by the author">
    <title>Reliable Assets - Nik's Homepage</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/tooltip.css">
    <link rel="stylesheet" href="/css/footnote.css">
    <script defer data-domain="nkud.me" src="https://plausible.io/js/script.js"></script>
</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/header.php';?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/breadcrumbs.php';?>

    <h1>Reliable assets</h1>
    <p>Here are assets which I consider reliable:</p>
    <p class="callout">
        ℹ️ Disclaimer: I am not affiliated with any of the asset providers. This is not a financial advice.
    </p>
    <ul style="line-height: 1.5em;">
        <li>📊 Classic<sup style="color:red"><a href="#footnote1">1</a></sup> market cap weighted index ETFs.</li>
        <li>🏢 Stocks and bonds of a well-established<sup style="color:red"><a href="#footnote1">1</a></sup> company.</li>
        <li>🏛️ Government bonds of a 
            <span class ="tooltip">reliable government
            <span class="tooltiptext">Not likely to default on its debt and not printing money too much.</span>
            </span>.
        </li>
        <li>🏦 Deposit in a well-established<sup style="color:red"><a href="#footnote1">1</a></sup> bank.</li>
        <li>🏠 Real estate in direct ownership.</li>
        <li>💾 Bitcoin in direct ownership or Bitcoin ETF.</li>
        <li>⚜️ Gold in direct ownership or Gold ETF.</li>
    </ul>
    <div class="footnotes">
        <p id="footnote1">
            1. Some definitions are intentionally given imprecise and should be considered relative. 
            This allows the content to remain relevant for longer.
        </p>
    </div>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';?>
</body>
</html>