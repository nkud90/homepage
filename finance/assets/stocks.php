<?php $currentPage = __FILE__; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="stocks, assets, finance, investing">
    <meta name="description" content="List of assets considered reliable by the author">
    <title>Choosing Stocks - Nik's Homepage</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/accordion.css">
    <link rel="stylesheet" href="/css/tooltip.css">
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
        }
        .column {
            flex: 1;
            /* min-width: 300px; */
            /* padding: 10px; */
        }
        @media (max-width: 600px) {
            .column {
                flex-basis: 100%; /* Each column takes full width on small screens */
            }
        }
    </style>
    
    <script defer data-domain="nkud.me" src="https://plausible.io/js/script.js"></script>
</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/header.php';?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/breadcrumbs.php';?>

    <h1>How to pick stocks</h1>
    <p>
        I believe the primary purpose of picking stocks is to outperform 
        <span class ="tooltip">benchmarks <span class="tooltiptext">S&P 500, Nasdaq 100, Bitcoin, etc.</span></span>.
        Otherwise, just buying an index ETF or the benchmark asset would be a better option (and it usually is) in terms of time and effort saved.
    </p>
    <p>
        Nevertheless, beating a benchmark is still possible.
        To that end, if at any point I consider stocks to be an attractive asset class (which is far from always the case), 
        I pay attention to the following characteristics:
    </p>
    
    <div class="container">
        <div class="column">

            <h2>
                🧐 
                <span class ="tooltip">
                    Qualitative
                    <span class="tooltiptext" style="font-size:medium; font-weight: normal"> 
                        Requiring personal assessment
                    </span>
                </span> 
                Indicators
            </h2>

            <button class="accordion">🏆 Outstanding product or service</button>
                <div class="panel">
                    <p>
                        To consistently deliver reliable profits to its shareholders, 
                        a company should offer a product or service that remains relevant 
                        and continues to provide value to customers over a long period.
                    </p>
                </div>

                <button class="accordion">🔎 Clear business model</button>
                <div class="panel">
                    <p>
                        It is essential to clearly understand the business model — how the company generates revenue. 
                        Otherwise, the risk of mistakenly selling shares increases significantly in the face of unforeseen negative circumstances.
                    </p>
                    <p>
                        Effective measures of clear comprehension include being able to sketch the business processes simply or explain the business to a child.
                    </p>
                </div>

                <button class="accordion">Sustainable competitive advantage (economic 'moat')</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <button class="accordion">Potential for profit growth</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <button class="accordion">Long-term management approach</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <button class="accordion">Attitude towards staff</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <button class="accordion">Reliable auditor</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <button class="accordion">Exceptional leader</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
        </div>

        <span style="display: inline-block; width: 20px;"></span> <!-- Spacer -->

        <div class="column">

            <h2>
                📶 
                <span class ="tooltip">
                    Quantitative
                    <span class="tooltiptext" style="font-size:medium; font-weight: normal"> 
                        That can be described in numbers
                    </span>
                </span> 
                Indicators
            </h2>

            <button class="accordion">Stable growth in profit and revenue</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button class="accordion">Financial health of the company</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button class="accordion">Management efficiency</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button class="accordion">Margin of safety</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button class="accordion">Fair value of the company</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button class="accordion">Insiders' share</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div>
    <script src="/assets/scripts/accordion.js"></script>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';?>
</body>
</html>