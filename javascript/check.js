setTimeout(() => {
    $(".random").attr( "readonly" , "readonly");
    $(".random").val("");
    $(".timerContainer").text('Your time has been finished !');
}, 91000);
let inputted = true;
var submited = true;
$('form').submit(function (event) {
    event.preventDefault();
    var input = $('.random').val();
    var numLetters = input.length;
    if ( submited ) {
        if ( input.trim() !== '' ) { 
            var data = {
                input : input
            };
            var url = 'process.php';
            $.post( url , data , function ( res ) {
                if ( res === 'exist' ) {
                    submited = false ;
                    alert( input + ' is ' + res );
                    $("#scoreContainer").attr( "style" , "color: green;");
                    $(".random").attr( "readonly" , "readonly");
                    $(".random").val("");
                    $('#try').text('You have already played you try');
                    $('#try').attr('style' , 'color: red;');
                    $('#score').text(numLetters + ' points');
                    $("#newScore").attr('style' , 'color: green;');
                    $("#newScore").text('Please refresh the page to see your new total score ...');
                    var Data = {
                        numLetters : numLetters
                    }
                    $.post("score.php" , Data , function (res) {
                        console.log(res);
                    })
                    inputted = false ;
                    timerValue = 0;
                }
            } )
        }
    }
});
let timerValue = 89;
let timerInterval;
function ubdateTimer() {
    document.getElementById("timer").textContent = timerValue ;
    if ( timerValue === 0 ) {
        clearInterval(timerInterval);
        if ( inputted === true ) {
            $(".timerContainer").text("You have no time")
            $('#try').text('Sorry your time hase been finished !');
            $('#try').attr('style' , 'color: red;');
            $("#newScore").attr('style' , 'color: red;');
            $("#newScore").text('You have not inputted any words so there is no score for this game , refresh to start new game ...');
        }
    };
    timerValue--;
};
document.addEventListener("DOMContentLoaded" , function () {
    timerInterval = setInterval( ubdateTimer , 1000 );
});