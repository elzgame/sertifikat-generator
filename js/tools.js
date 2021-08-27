const Element = document.querySelectorAll("input");

Element.forEach((item) => {
    var blockItem = item;
    blockItem.addEventListener("click", function (e) {
        var clickItem = e.target;  
        var nilaiOutput = document.querySelector("h[id=myTotal]");
        
        if(clickItem.classList.contains("PENDAFTARAN!")){ 
            console.log("PENDAFTARAN!");
        }else{ 
            console.log("DATA PENGIKUT!");
        }
        
        nilaiOutput.innerHTML = "Halo gaes";
    
    });
});