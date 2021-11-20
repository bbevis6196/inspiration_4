// click listener and put reply at bottom =======================
var txtsend = document.getElementById('txtsend');

var app = document.getElementById('responses');
app.addEventListener('click', function (e) {
    //console.log(e);

    var clickedItem = e.target;

    var clickclass = clickedItem.getAttribute("class");
    //console.log(clickclass);

    if (clickclass == "btn") {
        //console.log(clickedItem.innerHTML);
        txtsend.innerHTML = clickedItem.innerHTML;
        txtsend.setAttribute("class", "pstyle bluemessage");
    }
});
//=================================================================
