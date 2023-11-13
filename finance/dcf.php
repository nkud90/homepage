<?php $currentPage = __FILE__; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial Literacy - Nik's Homepage</title>
    <link rel="stylesheet" href="../style.css">
    <script defer data-domain="nkud.me" src="https://plausible.io/js/script.js"></script>
    <script src="../assets/scripts/dcf.js"></script>
</head>
<body>
    <?php include '../header.php';?>
    <p><a href="../index.php">Home</a> / <a href="index.php">Financial literacy</a> / DCF Calculator</p>
    <h1>DCF Calculator</h1>
    <p>
        The tool calculates the intrinsic (fair) value of a cash flow generating investment object using the discounted cash flow (DCF) method.
    </p>
    <p class="callout">
        ✅ Data is not collected. The script runs on your local machine so you can download the page to run it locally.
    </p>
    <form class="form" onsubmit="return false;" id="value-form">
        <div class="flex-container">         
            <div>
                <label for="eps">
                    <!-- Net income per year.  -->EPS <!-- (Earnings per share) in case of valuing a stock. -->
                </label><br>
                <input type="text" name="eps" value="" class="input" required="true" id="eps"><br>
                <label for="growthRate">
                    Growth rate, %
                </label><br>
                <input type="text" name="growthRate" value="10" class="input" required="true" id="growthRate"><br>
                <label for="growthDuration">
                    Growth duration, years
                </label><br>
                <input type="text" name="growthDuration" value="3" class="input" required="true" id="growthDuration">
            </div>
        
            <div>
                <label for="discountRate">
                    Discount rate, %
                </label><br>
                <input type="text" name="discountRate" value="9" class="input" required="true" id="discountRate"><br>
                <label for="terminalGrowthAfter">
                    Terminal growth after, years
                </label><br>
                <input type="text" name="terminalGrowthAfter" value="10" class="input" required="true" id="terminalGrowthAfter"><br>
                <label for="terminalGrowthRate">
                    Terminal growth rate, %
                </label><br>
                <input type="text" name="terminalGrowthRate" value="2" class="input" required="true" id="terminalGrowthRate">
            </div>
        </div>
        <br>
        <div>
            <button type="button" tabindex="1" onclick="calculate(); return false;">
                Calculate
            </button>
            <button type="reset" tabindex="2" onclick="resetView(); return false;">
                Reset
            </button>
        </div>
        
    </form>   
    <br>
    <div class="results" style="font-size: 1.5em">
        <div class="result-label">Intrinsic value: <span class="result" id="result-intrinsic-value">0</span></div>
    </div>

    <?php include '../footer.php';?>
</body>
</html>