<?php $currentPage = __FILE__; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="bitcoin, cryptocurrency, finance, investing">
    <meta name="description" content="How to efficiently transfer bitcoins">
    <title>Spending Bitcoins - Nik's Homepage</title>
    <link rel="stylesheet" href="/css/style.css">
    <script defer data-domain="nkud.me" src="https://plausible.io/js/script.js"></script>
</head>
<body>
    <?php include '../../header.php';?>
    <p><a href="../../index.php">Home</a> / <a href="../index.php">Financial topics</a> / <a href="index.php">Bitcoin</a> / Spending bitcoins</p>

    <h1>Spending Bitcoins</h1>
    
    <p>
        Currently I find the most convenient way to easily and almost instantly make bitcoin transactions with close to zero fees is to use the ⚡Lightning Network.
    </p>

    <p class="callout">
        ℹ️ Disclaimer: I am not affiliated with any of the services mentioned on the page. 
        Consider doing your own research before using them.
    </p>
    
    <p>
        I use a combination of <b>Electrum Wallet</b> as a main wallet on my laptop, <b>Alby Wallet</b> as a browser extension and <b>BlueWallet</b> on my smartphone.
    </p>
    
    <p>
        The whole process is as follows:
    </p>
    <ul>
        <li>
            💻 I have my bitcoin in Electrum wallet on my desktop computer. I use Lightning channel opened with Electrum Trampoline or ACINQ to further fund my other Lightning Network wallet.
        </li>
        <li>
            🌐 I have an Alby account and a browser extension as my browser spending wallet. It is funded from Electrum wallet.
        </li>
        <li>
            📱 I have Alby's Lightning wallet imported into BlueWallet on my smartphone, so I can spend my bitcoin with my smartphone, using the same funds as in Alby.
        </li>
    </ul>
    
    <p>
        This setup is just an example. I'm sure there are many other ways to do it. I've tested other wallets, such as Wallet of Satoshi and Zeus Wallet and they are also great. 
        I use Electrum and BlueWallet just because I find them more customizable.
    </p>
    
    <p>
        You can do your own wallet's research with the help of <a href="https://bitcoin.org/en/choose-your-wallet">bitcoin.org</a> and <a href="https://walletscrutiny.com/">Wallet Scrutiny</a>.
    </p>

    <?php include '../../footer.php';?>
</body>
</html>