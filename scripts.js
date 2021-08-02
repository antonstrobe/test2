$(document).ready(function(){

var inProgress = false;
var startFrom = 10;
    $('#more').click(function() {
        if($(window).scrollTop() + $(window).height() >= $(document).height() - 200 && !inProgress) {
        $.ajax({
            url: 'server.test.php',
            method: 'POST',
            data: {"startFrom" : startFrom},
            beforeSend: function() {
            inProgress = true;}
            }).done(function(data){
            data = jQuery.parseJSON(data);
            if (data.length > 0) {
            $.each(data, function(index, data){
            var set = 10;
            $("#store").append(" " + data.store_id + " " + data.type + " " + data.product + " ");
            });
            inProgress = false;
            startFrom += 10;
            }});
        }
    });
});