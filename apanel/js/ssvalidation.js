function checkForRequiredValidation(element, errorShowElement, errorMessage) {
    var vaild = true;
    if ($('#' + element).val() === '') {
        markFieldAsError(element, errorShowElement, errorMessage);
        vaild = false;
    } else {
        removeErrorFromField(element, errorShowElement)
        vaild = true;
    }
    return vaild;
}
function validatedob(element, errorShowElement, errorMessage) {
    var d = new Date();
    var n = d.getFullYear();
    var date = $('#' + element).val();
    var res = date.split("-");
    var year = res[0];
    if ((n - year) <= 0) {
        markFieldAsError(element, errorShowElement, errorMessage);

    }
    else {
        removeErrorFromField(element, errorShowElement);

    }

}
function checkForMaxLengthValidation(element, errorShowElement, errorMessage, maxlength) {

    var vaild = true;

    if ($('#' + element).val().length < maxlength) {
        markFieldAsError(element, errorShowElement, errorMessage);
        vaild = false;
    } else {
        removeErrorFromField(element, errorShowElement);
        vaild = true;
    }
    return vaild;
}
function checkForMobileNumber(element, errorShowElement, errorMessage, maxlength) {

    var vaild = true;

    if ($('#' + element).val().length != maxlength) {
        markFieldAsError(element, errorShowElement, errorMessage);
        vaild = false;
    } else {
        removeErrorFromField(element, errorShowElement)
        vaild = true;
    }
    return vaild;
}


function checkForNameValidation(element, errorShowElement, errorMessage) {

    var valid = true;
    var patt = new RegExp(/^[a-zA-Z ]{2,30}$/);
    var res = patt.test(element);

    if (!res) {
        markFieldAsError(element, errorShowElement, errorMessage);
        vaild = false;

    }
    else {
        removeErrorFromField(element, errorShowElement)
        valid = true;

    }
    return valid;
}

function markFieldAsError(element, elementShowElement, errorMessage) {
    document.getElementById(elementShowElement).innerHTML = errorMessage;
    $('#' + element).css('border-color', 'red');
    debugger;

}
function removeErrorFromField(element, elementShowElement) {
    document.getElementById(elementShowElement).innerHTML = " ";
    $('#' + element).css('border-color', '');
}
