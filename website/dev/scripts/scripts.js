/*
Mon..thru fri..8 to 6
Sat 7 to 5
Close Sunday
*/

var d = new Date();
var day = d.getDay();
var days = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday"
];
var hours = {
    weekdays: {
        open: 8,
        close: 18
    },
    saturday: {
        open: 7,
        close: 18
    }
};
var time = d.getHours();


var getOpen = function () {

    var msg = '',
        today = days[day],
        nextDay = (day + 1 > 6) ? 1 : day + 1,
        tomorrow = days[ nextDay ];

    if (
        (day > 0 && day < 6 && time >= hours.weekdays.open && time < hours.weekdays.close )
        || (day === 6 && time >= hours.saturday.open && time < hours.saturday.close )
    ) {
        msg = 'Open Now!';
    } else if( day < 5 && time < hours.weekdays.open) {
        msg = 'Open Today At ' + hours.weekdays.open + 'A.M.!';
    } else if( day < 5 ) {
        msg = 'Open Tomorrow At ' + hours.weekdays.open + 'A.M.!';
    } else if( day === 5 && time < hours.saturday.open) {
        msg = 'Open Today At ' + hours.saturday.open + 'A.M.!';
    } else if( day === 5) {
        msg = 'Open Tomorrow At ' + hours.saturday.open + 'A.M.!';
    } else {
        msg = 'Open Monday At ' + hours.weekdays.open + 'A.M.!';
    }

    return msg;
};


$( document ).ready(function() {
    $('.store-open-component').each(function(index){
        $(this).html(getOpen());
    });
});