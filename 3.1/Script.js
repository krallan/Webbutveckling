let games = ["World of Warcraft", "Player Unknown's Battlegrounds", "League of Legends"];
let d = new Date();

function onLoad() {
    let gamesElement = document.getElementById("games");
    let date = document.getElementById("date");
    let mathPi = document.getElementById("math");
    let number = document.getElementById("number");
    let string = document.getElementById("string");
    let regExp = document.getElementById("regExp");
    let global = document.getElementById("global");
    let gamesString = "";
    for (let i = 0; i < games.length; i++) {
        gamesString += games[i] + "<br>";
    }
    gamesElement.innerHTML = gamesString;
    date.innerHTML = "Dagens Datum: " + d.getFullYear() + "/" + (d.getMonth() + 1) + "/" + d.getDate() + " Tid:  " + d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();

    let booleanTrue = document.getElementById("booleanTrue");
    booleanTrue.innerHTML = (1 == 1);
    let booleanFalse = document.getElementById("booleanFalse");
    booleanFalse.innerHTML = (1 == 2);
    mathPi.innerHTML = "PI utskrivet med hjälp av Math.PI: " + Math.PI;
    number.innerHTML = "Högsta möjliga värdet av ett numberobjekt: " + Number.MAX_VALUE.toString();
    let str1 = "Första delen av strängen slås ihop";
    let str2 = " med andra delen av strängen med hjälp av concat()";
    let resStr = str1.concat(str2);
    string.innerHTML = resStr;
    let patt = /SearchAndDestroy/g;
    regExp.innerHTML = "Pattern = " + patt + "<br>" + "Test1 = " + "Destroy" + "  , res: " + patt.test("Destroy") + "<br>" + "Test2: " + "SearchAndDestroy"
        + "  , res: " + patt.test("SearchAndDestroy");
    global.innerHTML = "Konverterar String till float mha parseFloat() : " + parseFloat("25.14");

}