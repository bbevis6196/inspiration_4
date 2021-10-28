// get question out of url & put on page =======================
var url_string = window.location;
var url = new URL(url_string);
var question = url.searchParams.get("question");
console.log(question);
document.getElementById("txtquestion").innerHTML = question;
//==============================================================
// use angular to get responses from responses.json ============
window.app = angular.module('hi-angular', []);

app.controller('MainController', function ($scope, $http) {
    $scope.user = null;

    $http.get('/tap-to-reply/tapapp/responses.json')
        .then(response => {
            console.log(response.data);

            $scope.msg = response.data;
        });

});
//==============================================================
// click listener and put message at the bottom ================
var txtsend = document.getElementById('txtsend');

var app = document.getElementById('responses');
app.addEventListener('click', function (e) {
    //console.log(e);

    var clickedItem = e.target;

    var clickclass = clickedItem.getAttribute("class");
    console.log(clickclass);

    if (clickclass == "msg") {
        console.log(clickedItem.childNodes[1].innerHTML);
        txtsend.innerHTML = clickedItem.childNodes[1].innerHTML;

    } else if (clickclass == "responses ng-binding") {
        console.log(clickedItem.innerHTML);
        txtsend.innerHTML = clickedItem.innerHTML;
    }

});
//================================================================

function settingsFunction() {
    console.log("clicked on setting icon");
}