// Login || Signin Form Start ------------------
const xBtn = document.querySelector(".x-btn");

xBtn.addEventListener("click", ()=>{
    document.querySelector(".log-background").style.opacity=0;
    document.querySelector(".log-background").style.visibility="hidden";
})

const logBtn = document.querySelector(".log-button-container .log-buttons button:nth-child(2)");
const signBtn = document.querySelector(".log-button-container .log-buttons button:last-child");
const backAni = document.querySelector(".log-button-container .log-buttons .backAni");
const logContainer = document.querySelector(".log-body-container .login-container");
const signContainer = document.querySelector(".log-body-container .signin-container");
const logBody = document.querySelector(".log-body-container");

signBtn.addEventListener("click", () => {
    if (backAni.style.left == "51%") {
        backAni.style.left = "-10px";
        logContainer.style.left = "0%";
        signContainer.style.left = "100%";
        signBtn.style.color = "#fff";
        logBtn.style.color = "#000";
        logBody.style.height = "28rem"
    } else {
        backAni.style.left = "51%";
        logContainer.style.left = "-100%";
        signContainer.style.left = "0%";
        signBtn.style.color = "#000";
        logBtn.style.color = "#fff";
        logBody.style.height = "47rem"
    }
})

logBtn.addEventListener("click", () => {
    if (backAni.style.left == "51%") {
        backAni.style.left = "-10px";
        logContainer.style.left = "0%";
        signContainer.style.left = "100%";
        logBtn.style.color = "#000";
        signBtn.style.color = "#fff";
        logBody.style.height = "28rem"
    } else {
        backAni.style.left = "51%";
        logContainer.style.left = "-100%";
        signContainer.style.left = "0%";
        logBtn.style.color = "#fff";
        signBtn.style.color = "#000";
        logBody.style.height = "47rem"
    }
})



// Validation
const inputType = document.querySelectorAll(".signin-container .form-group input");
const labelName = document.querySelectorAll(".signin-container .form-group label");
const form2 = document.getElementById("form2");

function iFocus(index) {
    labelName[index].style.bottom = "0rem";
    labelName[index].style.left = "0rem";
    labelName[index].style.color = "#000";
}

function iFocusout(index) {
    if (inputType[index].value.length == 0) {
        labelName[index].style.bottom = "-2.5rem";
        labelName[index].style.left = "1rem";
        labelName[index].style.color = "";
    }

}

form2.addEventListener("submit", (e) => {
    if (checkInput()) {
        e.preventDefault();
    }
})

function checkInput() {
    let result = true;

    if (inputType[0].value === '' || inputType[0].value == null) {
        result = setError(inputType[0]);
    } else {
        result = setSuccess(inputType[0]);
    }
    if (inputType[1].value === '' || inputType[1].value == null) {
        result = setError(inputType[1]);
    } else {
        result = setSuccess(inputType[1]);
    }
    if (inputType[2].value === '' || inputType[2].value == null) {
        result = setError(inputType[2]);
    } else {
        result = setSuccess(inputType[2]);
    }
    if (inputType[3].value === '' || inputType[3].value == null) {
        result = setError(inputType[3]);
    } else if (inputType[3].value === inputType[4].value) {
        result = setSuccess(inputType[4]);
    } else {
        result = setError(inputType[3]);
    }
    if (inputType[4].value === '' || inputType[4].value == null) {
        result = setError(inputType[4]);
    } else if (inputType[3].value === inputType[4].value) {
        result = setSuccess(inputType[4]);
    } else {
        result = setError(inputType[4]);
    }

    return result;
}

function setError(input) {
    input.className = "error";
    return true;
}

function setSuccess(input) {
    input.className = "success";
    return false;
}

function conditionCheckOnFocus() {
    const emailChecker = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    const numberChecker = /^[0-9]+$/;

    inputType[0].addEventListener("focusout", () => {
        if (inputType[0].value === '' || inputType[0].value == null) {
            result = setError(inputType[0]);
        } else {
            result = setSuccess(inputType[0]);
        }
    })
    inputType[1].addEventListener("focusout", () => {
        if (inputType[1].value === '' || inputType[1].value == null) {
            result = setError(inputType[1]);
        } else if (inputType[1].value.match(emailChecker)) {
            result = setSuccess(inputType[1]);
        } else {
            result = setError(inputType[1]);
        }
    })
    inputType[2].addEventListener("focusout", () => {
        if (inputType[2].value === '' || inputType[2].value == null) {
            result = setError(inputType[2]);
        } else if (inputType[2].value.match(numberChecker)) {
            if (inputType[2].value.length < 10 || inputType[2].value.length > 10) {
                result = setError(inputType[2]);
            } else {
                result = setSuccess(inputType[2]);
            }
        } else {
            result = setError(inputType[2]);
        }
    })
    inputType[3].addEventListener("focusout", () => {
        if (inputType[3].value === '' || inputType[3].value == null) {
            result = setError(inputType[3]);
        } else if (inputType[3].value === inputType[4].value) {
            result = setSuccess(inputType[3]);
        } else {
            result = setError(inputType[3]);
            result = setError(inputType[4]);
        }
    })
    inputType[4].addEventListener("keyup", () => {
        if (inputType[4].value === '' || inputType[4].value == null) {
            result = setError(inputType[4]);
        } else if (inputType[3].value === inputType[4].value) {
            result = setSuccess(inputType[3]);
            result = setSuccess(inputType[4]);
        } else {
            result = setError(inputType[3]);
            result = setError(inputType[4]);
        }
    })
}
conditionCheckOnFocus()

document.getElementById("file").addEventListener("click", ()=>{
    document.getElementById("fileLabel").innerText="";
})
// x Login || Signin Form End x ------------------ x


