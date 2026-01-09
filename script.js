document.getElementById("search").addEventListener("keyup", function () {
    let searchValue = this.value;

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "search.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onload = function () {
        document.getElementById("result").innerHTML = this.responseText;
    };

    xhr.send("search=" + searchValue);
});
