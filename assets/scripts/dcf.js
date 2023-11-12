function validateInput() {
    var res = true;

    var eps = document.getElementById("eps").value;
    var growthRate = document.getElementById("growthRate").value;
    var growthDuration = document.getElementById("growthDuration").value;
    var discountRate = document.getElementById("discountRate").value;
    var terminalGrowthAfter = document.getElementById("terminalGrowthAfter").value;
    var terminalGrowthRate = document.getElementById("terminalGrowthRate").value;

    if (eps.trim().length == 0 || !Number.isFinite(Number(eps))) {
        displayError("eps");
        res = false;
    } else {
        hideError("eps");
    }

    if (growthRate.trim().length == 0 || !Number.isFinite(Number(growthRate))) {
        displayError("growthRate");
        res = false;
    } else {
        hideError("growthRate");
    }

    if (growthDuration.trim().length == 0 || !Number.isFinite(Number(growthDuration))) {
        displayError("growthDuration");
        res = false;
    } else {
        hideError("growthDuration");
    }

    if (discountRate.trim().length == 0 || !Number.isFinite(Number(discountRate))) {
        displayError("discountRate");
        res = false;
    } else {
        hideError("discountRate");
    }

    if (terminalGrowthAfter.trim().length == 0 || !Number.isFinite(Number(terminalGrowthAfter)) || Number(terminalGrowthAfter) < Number(growthDuration)) {
        displayError("terminalGrowthAfter");
        res = false;
    } else {
        hideError("terminalGrowthAfter");
    }

    if (terminalGrowthRate.trim().length == 0 || !Number.isFinite(Number(terminalGrowthRate))) {
        displayError("terminalGrowthRate");
        res = false;
    } else {
        hideError("terminalGrowthRate");
    }

    return res;
}

function displayError(inputId) {
    document.getElementById(inputId).parentElement.classList.add("error");
}

function hideError(inputId) {
    document.getElementById(inputId).parentElement.classList.remove("error");
}

function calculate() {
    if (!validateInput()) {
        return;
    }
    var eps = document.getElementById("eps").value;
    var growthRate = document.getElementById("growthRate").value;
    var growthDuration = document.getElementById("growthDuration").value;
    var discountRate = document.getElementById("discountRate").value;
    var terminalGrowthAfter = document.getElementById("terminalGrowthAfter").value;
    var terminalGrowthRate = document.getElementById("terminalGrowthRate").value;

    var resultGrowthRateDecline = ((growthRate - terminalGrowthRate) / (terminalGrowthAfter - growthDuration));
    var resultIntrinsicValue = 0;
    var prevCurrentValue = eps;
    var prevYearGrowthRate = 0;

    for (i = 0; i < 100; i++) {
        var yearGrowthRate = i < growthDuration ?
            growthRate :
            i < terminalGrowthAfter ?
                prevYearGrowthRate - resultGrowthRateDecline :
                terminalGrowthRate;
        var currentValue = prevCurrentValue * (1 + yearGrowthRate / 100);
        var discountedValue = currentValue / Math.pow(1 + discountRate / 100, i + 1);
        resultIntrinsicValue += discountedValue;
        if (discountedValue < 0.001) {
            // Whichever comes first - 100 years or discounted value becames negligibly small.
            break;
        }
        prevCurrentValue = currentValue;
        prevYearGrowthRate = yearGrowthRate;
    }
    document.getElementById("result-intrinsic-value").innerHTML = resultIntrinsicValue.toFixed(2);
}

function resetView() {
    document.getElementById("result-intrinsic-value").innerHTML = 0;
    document.getElementById("value-form").reset();
    hideError("eps");
    hideError("growthRate");
    hideError("growthDuration");
    hideError("discountRate");
    hideError("terminalGrowthAfter");
    hideError("terminalGrowthRate");
}