<?php $currentPage = __FILE__; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retirement Planner - Nik's Homepage</title>
    <link rel="stylesheet" href="../style.css">
    <script defer data-domain="nkud.me" src="https://plausible.io/js/script.js"></script>
    <script src="../assets/scripts/plan.js"></script>
</head>
<body>
    <?php include '../header.php';?>
    <p><a href="../index.php">Home</a> / <a href="index.php">Financial topics</a> / Retirement planner</p>
    <h1>Retirement planning tool</h1>
    <p>The tool estimates future passive income with given personal inputs.</p>
    <p class="callout">
        ✅ Data is not collected. The script runs on your local machine so you can download the page to run it locally.
    </p>
    <form class="form" onsubmit="return false;" id="value-form">
        <div class="flex-container">
            <div>
                <p style="font-size:large">Capital inputs:</p> 
                <div>
                    <label for="initialCapital">
                        Initial capital
                    </label><br>
                    <input type="text" name="initialCapital" value="100000" class="input" required="true" id="initialCapital">
                </div>

                <div>
                    <label for="contributionAmount">
                        Monthly contributions
                    </label><br>
                    <input type="text" name="contributionAmount" value="300" class="input" required="true" id="contributionAmount">
                </div>
            </div>

            <span style="display: inline-block; width: 20px;"></span> <!-- Spacer -->
            
            <div>
                <p style="font-size:large">Income growth:</p>
                <div>
                    <label for="incomeGrowthRate">
                        Income growth rate per year, %
                    </label><br>
                    <input type="text" name="incomeGrowthRate" value="0" class="input" required="true" id="incomeGrowthRate">
                </div>
                <div>
                    <label for="incomeGrowthDuration">
                        Growth duration, years <!-- (how many years from now I expect to expand my income) -->
                    </label><br>
                    <input type="text" name="incomeGrowthDuration" value="0" class="input" required="true" id="incomeGrowthDuration">
                </div>
            </div>

            <span style="display: inline-block; width: 20px;"></span> <!-- Spacer -->
            
            <div>
                <p style="font-size:large">Investments return:</p>
                <div>
                    <label for="returnRate">
                        Investment return rate per year, %
                    </label><br>
                    <input type="text" name="returnRate" value="9" class="input" required="true" id="returnRate">
                </div>
                <div>
                    <label for="passiveIncomeRate">
                        Passive income rate per year, %
                    </label><br>
                    <input type="text" name="passiveIncomeRate" value="4" class="input" required="true" id="passiveIncomeRate">
                </div>
            </div>

            <span style="display: inline-block; width: 20px;"></span> <!-- Spacer -->
            
            <div>
                <p style="font-size:large">Calculation parameters:</p>
                    <label for="period">
                        Time period, years
                    </label><br>
                    <input type="text" name="period" value="15" class="input" required="true" id="period">
                </div>
        </div>
        <br>

        <div>
            <button type="button" tabindex="1" onclick="calculate(); return false;">
                Calculate
            </button>
            <span style="display: inline-block; width: 10px;"></span> <!-- Spacer -->
            <button type="reset" tabindex="2" onclick="resetView(); return false;">
                Reset
            </button>
        </div>

    </form>    
    <br>
    <div class="results" style="font-size: 1.25em">
        <p class="result-label">Resulting capital: <span class="result" id="result-capital">0</span></p>
        <p class="result-label">Resulting monthly passive income: <span class="result" id="result-income">0</span></p>
    </div>

    <?php include '../footer.php';?>
</body>
</html>