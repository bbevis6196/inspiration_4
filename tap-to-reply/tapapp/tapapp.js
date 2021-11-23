$(window).bind("unload", function () { });

window.history.forward(1);


delresponses();
angularfunction();

function angularfunction() {
    window.app = angular.module('hi-angular', []);

    app.controller('MainController', function ($scope, $http) {
        $scope.user = null;

        $http.get('responses.json')
            .then(response => {
                console.log(response.data);

                $scope.msg = response.data;
            });

    });
    console.log("got responses.json");
};

function delresponses() {
    window.app = angular.module('hi-angular', []);

    app.controller('MainController', function ($scope, $http) {
        $scope.user = null;

        $http.delete('responses.json')
        // .then(response => {
        //     console.log(response.data);

        //     $scope.msg = response.data;
        // });

    });
    console.log("deleted");
};

function delCache() {
    caches.open('v1').then(function (cache) {
        cache.delete('responses.json').then(angularfunction());
    });
};

//==============================================================
// click listener and put message at the bottom ================
var txtsend = document.getElementById('txtsend');

var app = document.getElementById('responses');
app.addEventListener('click', function (e) {
    //console.log(e);

    var clickedItem = e.target;

    var clickclass = clickedItem.getAttribute("class");
    //console.log(clickclass);

    if (clickclass == "msg") {
        //console.log(clickedItem.childNodes[1].innerHTML);
        txtsend.innerHTML = clickedItem.childNodes[1].innerHTML;
        txtsend.setAttribute("class", "pstyle bluemessage");

    } else if (clickclass == "responses ng-binding") {
        //console.log(clickedItem.innerHTML);
        txtsend.innerHTML = clickedItem.innerHTML;
        txtsend.setAttribute("class", "pstyle bluemessage");

    }

});
//================================================================

function settingsFunction() {
    //console.log("clicked on setting icon");
    window.location.replace("settings.php");
}

// function goBack() {
//     window.location.replace("tapapp2.php");
// }