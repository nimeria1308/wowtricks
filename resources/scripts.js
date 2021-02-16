// https://www.w3schools.com/js/js_ajax_intro.asp
function loadDoc(url) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState === 4) {
            if (this.status === 200) {
                var el = document.getElementById("page_content");
                el.innerHTML = this.responseText;
            } else {
                alert("Page is not available");
                history.back();
            }
        }
    };
    xhttp.open("GET", url, true);
    xhttp.send();
}

// https://stackoverflow.com/questions/11662693/how-do-i-get-the-fragment-identifier-value-after-hash-from-a-url
// https://developer.mozilla.org/en-US/docs/Web/API/WindowEventHandlers/onhashchange
function locationHashChanged() {
    var page = "home";
    if (location.hash) {
        page = location.hash.substr(1);
    }
    loadDoc('pages/' + page + '.html');
}

window.onhashchange = locationHashChanged;

// segashnata godina v copyrighta
document.getElementById('year').innerHTML = new Date().getFullYear();

if (location.hash) {
    locationHashChanged();
} else {
    loadDoc('pages/home.html');
}