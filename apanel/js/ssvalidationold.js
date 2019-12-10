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

function checkForMxLengthValidation(element, errorShowElement, errorMessage, maxlength) {
    var vaild = true;
    debugger;
    if ($('#' + element).val() > maxlength) {
        markFieldAsError(element, errorShowElement, errorMessage);
        vaild = false;
    } else {
        removeErrorFromField(element, errorShowElement)
        vaild = true;
    }
    return vaild;
}

function checkForEmailValidation(element, errorShowElement, errorMessage) {
    var re = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (re.test(element)) {
        removeErrorFromField(element, errorShowElement)
        vaild = true;

    } else {
        markFieldAsError(element, errorShowElement, errorMessage);
        vaild = false;
    }
    return vaild;
}

function markFieldAsError(element, elementShowElement, errorMessage) {
    document.getElementById(elementShowElement).innerHTML = errorMessage;
    $('#' + element).css('border-color', 'red');
}

function removeErrorFromField(element, elementShowElement) {
    document.getElementById(elementShowElement).innerHTML = "";
    $('#' + element).css('border-color', '');
}
