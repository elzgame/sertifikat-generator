const loading = document.querySelectorAll("button");

loading.forEach((item) => {
    var LockItem = item;
    LockItem.addEventListener("click", function(e) {
        var clickItem = e.target;
        var nilaiElement = document.querySelector("span");
        var nilaiElementText = document.querySelector("h");

        if (nilaiElement.classList.contains("spinner-border")) {

        } else {
            nilaiElement.classList.toggle("spinner-border");
            nilaiElementText.innerHTML = "LOADING!";
        }
    });
});