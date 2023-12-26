<?php $currentPage = __FILE__; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="bitcoin, cryptocurrency, finance, investing">
    <meta name="description" content="Practical methods to store bitcoins">
    <title>Storing Bitcoins - Nik's Homepage</title>
    <link rel="stylesheet" href="/css/style.css">
    <script defer data-domain="nkud.me" src="https://plausible.io/js/script.js"></script>
</head>
<body>
    <?php include '../../header.php';?>
    <p><a href="../../index.php">Home</a> / <a href="../index.php">Financial topics</a> / <a href="index.php">Bitcoin</a> / Storing bitcoins</p>

    <h1>Storing Bitcoins</h1>
    <h2>💻 Wallet software</h2>
    <p>Bitcoins should be stored by means of a software wallet which allows to store private keys locally. Such wallets are commonly referred to as cold wallets.</p>
    <p>
        My personal wallet of choice is <a href="https://electrum.org" class="external" target="_blank">Electrum</a> on Mac OS / Windows / Android and 
        <a href="https://bluewallet.io" class="external" target="_blank">BlueWallet</a> on iOS.<br>
        <b>Electrum</b> is an open-source wallet with a well-established history, being one of the first wallets.<br>
        <b>BlueWallet</b> is an open-source community built iOS alternative for Electrum, 
        as Apple's App Store doesn't support <a href="https://github.com/spesmilo/electrum/issues/8563#issuecomment-1663590086" class="external" target="_blank">reproducible application's builds</a>, 
        making it impossible to verify the integrity of the original application's source code.
    </p>

    <h2>🔐 Security setups</h2>
    <p>It is practical to implement a security level which is corresponding to the amount of bitcoins stored.</p>
    
    <h3>🥉 Basic level - a spending wallet 💸</h3>
    <ul>
        <li><b>Practical amount</b>: up to three monthly expenses.</li>
        <li><b>Setup</b>: a wallet file on a computer, smartphone, or both. Backup seed phrase handwritten on a piece of paper, stored securely at home.</li>
        <li><b>Rationale</b>: the setup allows to transfer bitcoins easily while being vulnerable to online theft as a trade-off.</li>
    </ul>

    <h3>🥈 Intermediate level - a short-term vault 🗄️</h3>

    <ul>
        <li><b>Practical amount</b>: up to one year of expenses.</li>
        <li>
            <b>Setup</b>: Electrum's two-factor authentication wallet type, or any 2/2 multi-signature software wallet.
            Wallet files are stored on separate devices.
            Backup seed phrases are handwritten on a piece of paper, stored securely at home.
        </li>
        <li>
            <b>Rationale</b>: the spending is subject to a two-factor authentication with separate devices. Infecting them both is relatively hard for an attacker.
        </li>
        <li>
            <b>Further improvements</b>: the backup seed phrases can be geographically separated, eliminating the risk of a single physical location being compromised.
    </ul>

    <h3>🥇 Advanced level - a long-term vault 🏦</h3>
    <ul>
        <li><b>Practical amount</b>: more than one year of expenses.</li>
        <li>
            <b>Setup</b>: 
            <ul>
                <li>2/2 multi-signature software wallet.</li>
                <li>
                    The first key is stored on any accessible device or devices. 
                    It is backed up by a seed phrase which is stored securely at home and at close friends' or relatives' geographically separated locations.
                </li>
                <li>
                    The second key in the form of a hardware wallet or paper backup, or both - is stored in safe deposit boxes at two separate banks.
                </li>
            </ul>
        </li>
        <li>
            <b>Rationale</b>: the spending requires a bank visit, which reduces the possibility of even a physical attack due to the risks for an attacker.
            All of the keys has multiple backups, which reduces the possibility of a single point of failure.
            The banks cannot cooperate to spend funds as they only possess the same key.
        </li>
        <li>
            <b>Further improvements</b>: two or more banks in different jurisdictions can be utilized for the storage of the second key.
        </li>
    </ul>
    <p>One can mix the setups, experiment with the number of keys in the multi-signature setup and the number of signatures required to spend funds, and the way of storing the keys.</p>

    <?php include '../../footer.php';?>
</body>
</html>