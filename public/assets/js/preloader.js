
(function(){
    let preloader=document.createElement("div")
    let innerpreloader=document.createElement("div")
    preloader.classList.add("full-load")
    innerpreloader.classList.add("load")
    preloader.append(innerpreloader)
    function appendhr() {
    let innerhr = document.createElement("hr")
    innerpreloader.append(innerhr)
    }
    for(let i=0;i<4;i++){
    appendhr()
    }
    document.querySelector("body").prepend(preloader)
})()