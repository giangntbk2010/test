$(function(){
    $('#date').datepicker({
        dateFormat :'yy-mm-dd',
        inline: true,
        changeMonth: true,
        changeYear: true,
        yearRange: "1950:2020",
        showOtherMonths: true,
        dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
    });
    $('#date1').datepicker({
        dateFormat :'yy-mm-dd',
        inline: true,
        changeMonth: true,
        changeYear: true,
        yearRange: "1950:2020",
        showOtherMonths: true,
        dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
    });
});