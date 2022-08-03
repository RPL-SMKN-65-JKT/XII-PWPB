function sec(nomre) {
    reqem = document.getElementById("iphoneTotal").innerHTML;
    reqem = reqem + nomre;
    document.getElementById("iphoneTotal").innerHTML = reqem;

}

function menfi() {
    reqem = document.getElementById("iphoneTotal").innerHTML;
    reqem = "-" + reqem;
    document.getElementById("iphoneTotal").innerHTML = reqem;
}

function faiz() {
    reqem = document.getElementById("iphoneTotal").innerHTML;
    reqem = reqem * 1 / 100;
    document.getElementById("iphoneTotal").innerHTML = reqem;
}

function noqte() {
    reqem = document.getElementById("iphoneTotal").innerHTML
    reqem = reqem + "."
    document.getElementById("iphoneTotal").innerHTML = reqem;
}

function resetIphone() {
    reset = document.getElementById("iphoneTotal").innerHTML
    reset = "";
    document.getElementById("iphoneTotal").innerHTML = reset;
}

function azaltReqemi() {
    reqem = document.getElementById("iphoneTotal").innerHTML
    document.getElementById("iphoneTotal").innerHTML = reqem.substring(0, reqem.length - 1);


} function vurma() {
    reqem = document.getElementById("iphoneTotal").innerHTML
    reqem = reqem + "*"
    document.getElementById("iphoneTotal").innerHTML = reqem;
}

function bolme() {
    reqem = document.getElementById("iphoneTotal").innerHTML
    reqem = reqem + "/"
    document.getElementById("iphoneTotal").innerHTML = reqem;
}
function cixma() {
    reqem = document.getElementById("iphoneTotal").innerHTML
    reqem = reqem + "-"
    document.getElementById("iphoneTotal").innerHTML = reqem;

}
function toplama() {
    reqem = document.getElementById("iphoneTotal").innerHTML
    reqem = reqem + "+"
    document.getElementById("iphoneTotal").innerHTML = reqem;

}



function yoxlama() {
    if (isNaN(eval(neticemiz)) !== false) {
        alert("Səhflik var")
    }
}

function neticeIphone() {
    neticemiz = document.getElementById("iphoneTotal").innerHTML
    yoxlama();
    document.getElementById("iphoneTotal").innerHTML = eval(neticemiz)

}