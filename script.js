var count = 0;
document.getElementById("myButton").onclick = function () {
    count++;
    if (count % 2 == 0) {
        document.getElementById("demo").innerHTML = "";
    } else {
        var img = document.createElement("img");
        var link = document.getElementsByClassName("carousel-item active")[0].getElementsByTagName('img')[0].src;
        img.src = link;
        document.getElementById("demo").appendChild(img);
    }
}