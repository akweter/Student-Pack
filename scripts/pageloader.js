
var = newVal;

function loadPage() {
    newVal = setTimeout(showPage, 3000);
}

function showPage() {
    document.getElementById('loader').style.display = "none";
    document.getElementById('content-loader').style.display = "block";
}