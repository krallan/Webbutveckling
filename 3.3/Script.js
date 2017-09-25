alert("Tjabba! Detta är en alert!");

confirm("Tjenare! Här kommer en confirm!");

prompt("Svara på min hälsningsfras");

let popUp = open("https://www.google.se/");

let interval = setInterval(function () {
    alert("Störigt va?!?")
}, 3000)

function stopInterval() {
    clearInterval(interval)
}

let timeOut = setTimeout(function () {
    alert("Time!");
}, 5000);

function stopTimeout() {
    clearTimeout(timeOut);
}

function closePopUp() {
    popUp.close();
}