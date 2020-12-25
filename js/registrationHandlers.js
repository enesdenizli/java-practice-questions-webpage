function checkFirstName() {
    var firstNameVal = document.getElementById("firstName").value;
    if(firstNameVal.length == ""){
        var nameFirstDiv = document.getElementById("firstNameDiv");
        if(nameFirstDiv){
            nameFirstDiv.classList.add("has-error");
            nameFirstDiv.classList.remove("has-success");
        }
        var firstNameErr = document.getElementById("firstNameEmpty");
        if(firstNameErr){
            firstNameErr.classList.add("show");
            firstNameErr.classList.remove("hide");
            // alert("You didn't enter a first name");
        }
        var firstNameErr2 = document.getElementById("firstNameTooLong");
        if(firstNameErr2){
            firstNameErr2.classList.add("hide");
            firstNameErr2.classList.remove("show");
        }
        return false;
    }
    else if(firstNameVal.length > 50) {
        var nameFirstDiv = document.getElementById("firstNameDiv");
        if(nameFirstDiv){
            nameFirstDiv.classList.add("has-error");
            nameFirstDiv.classList.remove("has-success");
        }
        var firstNameErr = document.getElementById("firstNameEmpty");
        if(firstNameErr){
            firstNameErr.classList.add("hide");
            firstNameErr.classList.remove("show");
        }
        var firstNameErr2 = document.getElementById("firstNameTooLong");
        if(firstNameErr2){
            firstNameErr2.classList.add("show");
            firstNameErr2.classList.remove("hide");
            // alert("First name is too long")
        }
        return false;
    }
    else {
        var nameFirstDiv = document.getElementById("firstNameDiv");
        if(nameFirstDiv){
            nameFirstDiv.classList.add("has-success");
            nameFirstDiv.classList.remove("has-error");
        }
        var firstNameErr = document.getElementById("firstNameEmpty");
        if(firstNameErr){
            firstNameErr.classList.add("hide");
            firstNameErr.classList.remove("show");
        }
        var firstNameErr2 = document.getElementById("firstNameTooLong");
        if(firstNameErr2){
            firstNameErr2.classList.add("hide");
            firstNameErr2.classList.remove("show");
        }
        return true;
    }
    return false;
}

function checkLastName() {
    var lastNameVal = document.getElementById("lastName").value;
    if(lastNameVal.length == ""){
        var nameLastDiv = document.getElementById("lastNameDiv");
        if(nameLastDiv){
            nameLastDiv.classList.add("has-error");
            nameLastDiv.classList.remove("has-success");
        }
        var lastNameErr = document.getElementById("lastNameEmpty");
        if(lastNameErr){
            lastNameErr.classList.add("show");
            lastNameErr.classList.remove("hide");
            // alert("You didn't enter a last name");
        }
        var lastNameErr2 = document.getElementById("lastNameTooLong");
        if(lastNameErr2){
            lastNameErr2.classList.add("hide");
            lastNameErr2.classList.remove("show");
        }
        return false;
    }
    else if(lastNameVal.length > 50) {
        var nameLastDiv = document.getElementById("lastNameDiv");
        if(nameLastDiv){
            nameLastDiv.classList.add("has-error");
            nameLastDiv.classList.remove("has-success");
        }
        var lastNameErr = document.getElementById("lastNameEmpty");
        if(lastNameErr){
            lastNameErr.classList.add("hide");
            lastNameErr.classList.remove("show");
        }
        var lastNameErr2 = document.getElementById("lastNameTooLong");
        if(lastNameErr2){
            lastNameErr2.classList.add("show");
            lastNameErr2.classList.remove("hide");
            // alert("Last name is too long")
        }
        return false;
    }
    else {
        var nameLastDiv = document.getElementById("lastNameDiv");
        if(nameLastDiv){
            nameLastDiv.classList.add("has-success");
            nameLastDiv.classList.remove("has-error");
        }
        var lastNameErr = document.getElementById("lastNameEmpty");
        if(lastNameErr){
            lastNameErr.classList.add("hide");
            lastNameErr.classList.remove("show");
        }
        var lastNameErr2 = document.getElementById("lastNameTooLong");
        if(lastNameErr2){
            lastNameErr2.classList.add("hide");
            lastNameErr2.classList.remove("show");
        }
        return true;
    }
    return false;
}

function checkAddLine1() {
    var addLine1Val = document.getElementById("addressLine1").value;
    if(addLine1Val.length == ""){
        var lineAdd1Div = document.getElementById("addressLine1Div");
        if(lineAdd1Div){
            lineAdd1Div.classList.add("has-error");
            lineAdd1Div.classList.remove("has-success");
        }
        var addLine1Err = document.getElementById("addressLine1Empty");
        if(addLine1Err){
            addLine1Err.classList.add("show");
            addLine1Err.classList.remove("hide");
            // alert("You didn't enter an address");
        }
        var addLine1Err2 = document.getElementById("addressLine1TooLong");
        if(addLine1Err2){
            addLine1Err2.classList.add("hide");
            addLine1Err2.classList.remove("show");
        }
        return false;
    }
    else if(addLine1Val.length > 100) {
        var lineAdd1Div = document.getElementById("addressLine1Div");
        if(lineAdd1Div){
            lineAdd1Div.classList.add("has-error");
            lineAdd1Div.classList.remove("has-success");
        }
        var addLine1Err = document.getElementById("addressLine1Empty");
        if(addLine1Err){
            addLine1Err.classList.add("hide");
            addLine1Err.classList.remove("show");
        }
        var addLine1Err2 = document.getElementById("addressLine1TooLong");
        if(addLine1Err2){
            addLine1Err2.classList.add("show");
            addLine1Err2.classList.remove("hide");
            // alert("Address is too long")
        }
        return false;
    }
    else {
        var lineAdd1Div = document.getElementById("addressLine1Div");
        if(lineAdd1Div){
            lineAdd1Div.classList.add("has-success");
            lineAdd1Div.classList.remove("has-error");
        }
        var addLine1Err = document.getElementById("addressLine1Empty");
        if(addLine1Err){
            addLine1Err.classList.add("hide");
            addLine1Err.classList.remove("show");
        }
        var addLine1Err2 = document.getElementById("addressLine1TooLong");
        if(addLine1Err2){
            addLine1Err2.classList.add("hide");
            addLine1Err2.classList.remove("show");
        }
        return true;
    }
    return false;
}

function checkAddLine2() {
    var addLine2Val = document.getElementById("addressLine2").value;
    if(addLine2Val.length > 100) {
        var lineAdd2Div = document.getElementById("addressLine2Div");
        if(lineAdd2Div){
            lineAdd2Div.classList.add("has-error");
            lineAdd2Div.classList.remove("has-success");
        }
        var addLine2Err = document.getElementById("addressLine2Empty");
        if(addLine2Err){
            addLine2Err.classList.add("hide");
            addLine2Err.classList.remove("show");
        }
        var addLine2Err2 = document.getElementById("addressLine2TooLong");
        if(addLine2Err2){
            addLine2Err2.classList.add("show");
            addLine2Err2.classList.remove("hide");
            // alert("Address is too long")
        }
        return false;
    }
    else {
        var lineAdd2Div = document.getElementById("addressLine2Div");
        if(lineAdd2Div){
            //     lineAdd2Div.classList.add("has-success");
            lineAdd2Div.classList.remove("has-error");
        }
        var addLine2Err2 = document.getElementById("addressLine2TooLong");
        if(addLine2Err2){
            addLine2Err2.classList.add("hide");
            addLine2Err2.classList.remove("show");
        }
        return true;
    }
    return false;
}

function checkCity() {
    var cityVal = document.getElementById("city").value;
    if(cityVal.length == ""){
        var divCity = document.getElementById("cityDiv");
        if(divCity){
            divCity.classList.add("has-error");
            divCity.classList.remove("has-success");
        }
        var cityErr = document.getElementById("cityEmpty");
        if(cityErr){
            cityErr.classList.add("show");
            cityErr.classList.remove("hide");
            // alert("You didn't enter a city name");
        }
        var cityErr2 = document.getElementById("cityTooLong");
        if(cityErr2){
            cityErr2.classList.add("hide");
            cityErr2.classList.remove("show");
        }
        return false;
    }
    else if(cityVal.length > 50) {
        var divCity = document.getElementById("cityDiv");
        if(divCity){
            divCity.classList.add("has-error");
            divCity.classList.remove("has-success");
        }
        var cityErr = document.getElementById("cityEmpty");
        if(cityErr){
            cityErr.classList.add("hide");
            cityErr.classList.remove("show");
        }
        var cityErr2 = document.getElementById("cityTooLong");
        if(cityErr2){
            cityErr2.classList.add("show");
            cityErr2.classList.remove("hide");
            // alert("City name is too long")
        }
        return false;
    }
    else {
        var divCity = document.getElementById("cityDiv");
        if(divCity){
            divCity.classList.add("has-success");
            divCity.classList.remove("has-error");
        }
        var cityErr = document.getElementById("cityEmpty");
        if(cityErr){
            cityErr.classList.add("hide");
            cityErr.classList.remove("show");
        }
        var cityErr2 = document.getElementById("cityTooLong");
        if(cityErr2){
            cityErr2.classList.add("hide");
            cityErr2.classList.remove("show");
        }
        return true;
    }
    return false;
}

function checkZip() {
    var zipVal = document.getElementById("zip").value;
    var pass = /(^\d{5}$)|(^\d{5}-\d{4}$)/;
    if(zipVal.length == ""){
        var divZip = document.getElementById("zipDiv");
        if(divZip){
            divZip.classList.add("has-error");
            divZip.classList.remove("has-success");
        }
        var zipErr = document.getElementById("zipEmpty");
        if(zipErr){
            zipErr.classList.add("show");
            zipErr.classList.remove("hide");
            // alert("You didn't enter a zip code");
        }
        var zipErr2 = document.getElementById("zipInvalid");
        if(zipErr2){
            zipErr2.classList.add("hide");
            zipErr2.classList.remove("show");
        }
        return false;
    }
    else if(!zipVal.match(pass)) {
        var divZip = document.getElementById("zipDiv");
        if(divZip){
            divZip.classList.add("has-error");
            divZip.classList.remove("has-success");
        }
        var zipErr = document.getElementById("zipEmpty");
        if(zipErr){
            zipErr.classList.add("hide");
            zipErr.classList.remove("show");
        }
        var zipErr2 = document.getElementById("zipInvalid");
        if(zipErr2){
            zipErr2.classList.add("show");
            zipErr2.classList.remove("hide");
            // alert("Zip code is invalid")
        }
        return false;
    }
    else {
        var divZip = document.getElementById("zipDiv");
        if(divZip){
            divZip.classList.add("has-success");
            divZip.classList.remove("has-error");
        }
        var zipErr = document.getElementById("zipEmpty");
        if(zipErr){
            zipErr.classList.add("hide");
            zipErr.classList.remove("show");
        }
        var zipErr2 = document.getElementById("zipInvalid");
        if(zipErr2){
            zipErr2.classList.add("hide");
            zipErr2.classList.remove("show");
        }
        return true;
    }
    return false;
}

function checkTel() {
    var telVal = document.getElementById("tel").value;
    var pass = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    if(telVal.length == ""){
        var divTel = document.getElementById("telDiv");
        if(divTel){
            divTel.classList.add("has-error");
            divTel.classList.remove("has-success");
        }
        var telErr = document.getElementById("telEmpty");
        if(telErr){
            telErr.classList.add("show");
            telErr.classList.remove("hide");
            // alert("You didn't enter a phone number");
        }
        var telErr2 = document.getElementById("telInvalid");
        if(telErr2){
            telErr2.classList.add("hide");
            telErr2.classList.remove("show");
        }
        return false;
    }
    else if(!telVal.match(pass)) {
        var divTel = document.getElementById("telDiv");
        if(divTel){
            divTel.classList.add("has-error");
            divTel.classList.remove("has-success");
        }
        var telErr = document.getElementById("telEmpty");
        if(telErr){
            telErr.classList.add("hide");
            telErr.classList.remove("show");
        }
        var telErr2 = document.getElementById("telInvalid");
        if(telErr2){
            telErr2.classList.add("show");
            telErr2.classList.remove("hide");
            // alert("Phone number is invalid")
        }
        return false;
    }
    else {
        var divTel = document.getElementById("telDiv");
        if(divTel){
            divTel.classList.add("has-success");
            divTel.classList.remove("has-error");
        }
        var telErr = document.getElementById("telEmpty");
        if(telErr){
            telErr.classList.add("hide");
            telErr.classList.remove("show");
        }
        var telErr2 = document.getElementById("telInvalid");
        if(telErr2){
            telErr2.classList.add("hide");
            telErr2.classList.remove("show");
        }
        return true;
    }
    return false;
}

function checkUsername() {
    var userNameVal = document.getElementById("userName").value;
    if(userNameVal.length == ""){
        var nameUserDiv = document.getElementById("userNameDiv");
        if(nameUserDiv){
            nameUserDiv.classList.add("has-error");
            nameUserDiv.classList.remove("has-success");
        }
        var nameUserErr = document.getElementById("userEmpty");
        if(nameUserErr){
            nameUserErr.classList.add("show");
            nameUserErr.classList.remove("hide");
            // alert("You didn't enter a username");
        }
        var nameUserErr2 = document.getElementById("userRestriction");
        if(nameUserErr2){
            nameUserErr2.classList.add("hide");
            nameUserErr2.classList.remove("show");
        }
        return false;
    }
    else if(userNameVal.length < 6 || userNameVal.length > 50) {
        var nameUserDiv = document.getElementById("userNameDiv");
        if(nameUserDiv){
            nameUserDiv.classList.add("has-error");
            nameUserDiv.classList.remove("has-success");
        }
        var nameUserErr = document.getElementById("userEmpty");
        if(nameUserErr){
            nameUserErr.classList.add("hide");
            nameUserErr.classList.remove("show");
        }
        var nameUserErr2 = document.getElementById("userRestriction");
        if(nameUserErr2){
            nameUserErr2.classList.add("show");
            nameUserErr2.classList.remove("hide");
            // alert("Enter a username in constraints")
        }
        return false;
    }
    else {
        var nameUserDiv = document.getElementById("userNameDiv");
        if(nameUserDiv){
            nameUserDiv.classList.add("has-success");
            nameUserDiv.classList.remove("has-error");
        }
        var nameUserErr = document.getElementById("userEmpty");
        if(nameUserErr){
            nameUserErr.classList.add("hide");
            nameUserErr.classList.remove("show");
        }
        var nameUserErr2 = document.getElementById("userRestriction");
        if(nameUserErr2){
            nameUserErr2.classList.add("hide");
            nameUserErr2.classList.remove("show");
        }
        return true;
    }
    return false;
}

function checkEmail() {
    var emailVal = document.getElementById("email").value;
    var pass = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(emailVal.length == ""){
        var divEmail = document.getElementById("emailDiv");
        if(divEmail){
            divEmail.classList.add("has-error");
            divEmail.classList.remove("has-success");
        }
        var emailErr = document.getElementById("emailEmpty");
        if(emailErr){
            emailErr.classList.add("show");
            emailErr.classList.remove("hide");
            // alert("You didn't enter an email address");
        }
        var emailErr2 = document.getElementById("emailInvalid");
        if(emailErr2){
            emailErr2.classList.add("hide");
            emailErr2.classList.remove("show");
        }
        return false;
    }
    else if(!emailVal.match(pass)) {
        var divEmail = document.getElementById("emailDiv");
        if(divEmail){
            divEmail.classList.add("has-error");
            divEmail.classList.remove("has-success");
        }
        var emailErr = document.getElementById("emailEmpty");
        if(emailErr){
            emailErr.classList.add("hide");
            emailErr.classList.remove("show");
        }
        var emailErr2 = document.getElementById("emailInvalid");
        if(emailErr2){
            emailErr2.classList.add("show");
            emailErr2.classList.remove("hide");
            // alert("Email address is invalid")
        }
        return false;
    }
    else {
        var divEmail = document.getElementById("emailDiv");
        if(divEmail){
            divEmail.classList.add("has-success");
            divEmail.classList.remove("has-error");
        }
        var emailErr = document.getElementById("emailEmpty");
        if(emailErr){
            emailErr.classList.add("hide");
            emailErr.classList.remove("show");
        }
        var emailErr2 = document.getElementById("emailInvalid");
        if(emailErr2){
            emailErr2.classList.add("hide");
            emailErr2.classList.remove("show");
        }
        return true;
    }
    return false;
}

function checkPassword() {
    var init = document.getElementById("initialPassword");
    var sec = document.getElementById("verifyPassword");
    var pass = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,50}$/;
    if (init && sec) {
        if (init.value == "") {
            var initDiv = document.getElementById("initPassDiv");
            if(initDiv){
                initDiv.classList.add("has-error");
                initDiv.classList.remove("has-success");
            }
            var initErr = document.getElementById("initPassEmpty");
            if(initErr){
                initErr.classList.add("show");
                initErr.classList.remove("hide");
            }
            return false;
        }
        else if(!init.value.match(pass)) {
            var initDiv = document.getElementById("initPassDiv");
            if(initDiv){
                initDiv.classList.add("has-error");
                initDiv.classList.remove("has-success");
            }
            var initErr = document.getElementById("initPassEmpty");
            if(initErr){
                initErr.classList.add("hide");
                initErr.classList.remove("show");
            }
            var initErr2 = document.getElementById("initPassInvalid");
            if(initErr2){
                initErr2.classList.add("show");
                initErr2.classList.remove("hide");
            }
            return false;
        }
        else {
            var initDiv = document.getElementById("initPassDiv");
            if(initDiv){
                initDiv.classList.add("has-success");
                initDiv.classList.remove("has-error");
            }
            var initErr = document.getElementById("initPassEmpty");
            if(initErr){
                initErr.classList.add("hide");
                initErr.classList.remove("show");
            }
            var initErr2 = document.getElementById("initPassInvalid");
            if(initErr2){
                initErr2.classList.add("hide");
                initErr2.classList.remove("show");
            }
        }

        if (init.value != sec.value) {
            var secDiv = document.getElementById("verPassDiv");
            if (secDiv) {
                secDiv.classList.add("has-error");
                secDiv.classList.remove("has-success");
            }
            var secErr = document.getElementById("verPassDifferent");
            if (secErr) {
                secErr.classList.remove("hide");
                secErr.classList.add("show");
            }

            // var subBtn = document.getElementById("submitButton");
            // if(subBtn) {
            //     subBtn.disabled = true;
            // }
            // return false;
        }
        else {
            var secDiv = document.getElementById("verPassDiv");
            if (secDiv) {
                secDiv.classList.remove("has-error");
                secDiv.classList.add("has-success");
            }
            var secErr = document.getElementById("unequal");
            if (secErr) {
                secErr.classList.add("hide");
                secErr.classList.remove("show");
            }

            // var subBtn = document.getElementById("submitButton");
            // if (subBtn) {
            //     subBtn.disabled = false;
            // }
            return true;
        }
    }
    return false;
}

function registrationHandlers() {
    document.getElementById("userName").onblur = checkUsername;
    document.getElementById("verifyPassword").onblur = checkPassword;
    // document.getElementById("myForm").onsubmit = checkPassword;
    document.getElementById("firstName").onblur = checkFirstName;
    document.getElementById("lastName").onblur = checkLastName;
    document.getElementById("addressLine1").onblur = checkAddLine1;
    document.getElementById("addressLine2").onblur = checkAddLine2;
    document.getElementById("city").onblur = checkCity;
    document.getElementById("zip").onblur = checkZip;
    document.getElementById("email").onblur = checkEmail;
    document.getElementById("tel").onblur = checkTel;
}
