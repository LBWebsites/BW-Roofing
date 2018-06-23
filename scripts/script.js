function myFunction() {
    console.log("reaching");
    var top = document.getElementById("up");
    var mid = document.getElementById("mid");
    var low = document.getElementById("low");
    var list = document.getElementById("list")
    top.classList.toggle("up2");
    mid.classList.toggle("mid2");
    low.classList.toggle("low2");
    list.classList.toggle("showing");
}