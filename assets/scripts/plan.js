function validateInput() {
    var res = true;

    var contributionAmount = document.getElementById("contributionAmount").value;
    var initialCapital = document.getElementById("initialCapital").value;
    var incomeGrowthRate = document.getElementById("incomeGrowthRate").value;
    var incomeGrowthDuration = document.getElementById("incomeGrowthDuration").value;
    var returnRate = document.getElementById("returnRate").value;
    var period = document.getElementById("period").value;
    var passiveIncomeRate = document.getElementById("passiveIncomeRate").value;
    /* var terminalGrowthAfter = document.getElementById("terminalGrowthAfter").value;
    var terminalGrowthRate = document.getElementById("terminalGrowthRate").value; */

    if (contributionAmount.trim().length == 0 || !Number.isFinite(Number(contributionAmount))) {
        displayError("contributionAmount");
        res = false;
    } else {
        hideError("contributionAmount");
    }

    if (initialCapital.trim().length == 0 || !Number.isFinite(Number(initialCapital))) {
        displayError("initialCapital");
        res = false;
    }
    else {
        hideError("initialCapital");
    }

    if (incomeGrowthRate.trim().length == 0 || !Number.isFinite(Number(incomeGrowthRate)) || Number(incomeGrowthRate) < 0) {
        displayError("incomeGrowthRate");
        res = false;
    } else {
        hideError("incomeGrowthRate");
    }

    if (incomeGrowthDuration.trim().length == 0 || !Number.isFinite(Number(incomeGrowthDuration)) || Number(incomeGrowthDuration) < 0) {
        displayError("incomeGrowthDuration");
        res = false;
    } else {
        hideError("incomeGrowthDuration");
    }

    if (returnRate.trim().length == 0 || !Number.isFinite(Number(returnRate))) {
        displayError("returnRate");
        res = false;
    } else {
        hideError("returnRate");
    }

    if (period.trim().length == 0 || !Number.isFinite(Number(period))) {
        displayError("period");
        res = false;
    }
    else {
        hideError("period");
    }

    if (passiveIncomeRate.trim().length == 0 || !Number.isFinite(Number(passiveIncomeRate))) {
        displayError("passiveIncomeRate");
        res = false;
    }
    else {
        hideError("passiveIncomeRate");
    }

    /*     if (terminalGrowthAfter.trim().length == 0 || !Number.isFinite(Number(terminalGrowthAfter)) || Number(terminalGrowthAfter) < Number(growthDuration)) {
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
    } */

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
    var contributionAmount = document.getElementById("contributionAmount").value;
    var initialCapital = document.getElementById("initialCapital").value;
    var period = parseInt(document.getElementById("period").value, 10);
    var incomeGrowthRate = document.getElementById("incomeGrowthRate").value;
    var incomeGrowthDuration = parseInt (document.getElementById("incomeGrowthDuration").value, 10); 
    var returnRate = document.getElementById("returnRate").value;
    var passiveIncomeRate = document.getElementById("passiveIncomeRate").value;

    var capitalFromContributions = 0;


    if (incomeGrowthRate == 0 || incomeGrowthDuration == 0) {
        for (i = 0; i < period; i++) {
            capitalFromContributions += contributionAmount * 12 * ((1 + returnRate/100) ** i);
        } 
    } 
    else {
            if (period < incomeGrowthDuration) {
            incomeGrowthDuration = period;
        }
    for (i = 0; i < incomeGrowthDuration; i++) {
        capitalFromContributions += contributionAmount * 12 * ((1 + (incomeGrowthRate/100)) ** i) * ((1 + returnRate/100) ** (period - i - 1));
    }
    if (incomeGrowthDuration < period) {
        for (i = incomeGrowthDuration; i < period; i++) {
            capitalFromContributions += contributionAmount * 12 * ((1 + incomeGrowthRate/100) ** incomeGrowthDuration) * ((1 + returnRate/100) ** (period - i - 1));
        }
    }
    } 


    var resultCapital = initialCapital * ((1 + (returnRate/100)) ** period) + capitalFromContributions;
    var resultIncome = resultCapital * (passiveIncomeRate/100) / 12;

    document.getElementById("result-capital").innerHTML = resultCapital.toFixed(2);
    document.getElementById("result-income").innerHTML = resultIncome.toFixed(2);
}

function resetView() {
    document.getElementById("result-capital").innerHTML = 0;
    document.getElementById("result-income").innerHTML = 0;
    document.getElementById("value-form").reset();
    hideError("initialCapital");
    hideError("contributionAmount");
    hideError("incomeGrowthRate");
    hideError("incomeGrowthDuration");
    hideError("returnRate");
    hideError("period");
}