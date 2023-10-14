$(".newScore").click(function () {
    var Url = "newScore.php";
    $.get( Url , function () {
        location.reload();
    } );
});