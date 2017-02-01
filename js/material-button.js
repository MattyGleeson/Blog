/**
 * Created by matty on 27/01/17.
 */

/* Material Design button animation */

$(function(){
    var ink, d, x, y;
    $(".material-ripple").click(function(e){
        if($(this).find(".ink").length === 0){
            $(this).prepend("<span class='ink'></span>");
        }

        ink = $(this).find(".ink");
        ink.removeClass("animate");

        if(!ink.height() && !ink.width()){
            d = Math.max($(this).outerWidth(), $(this).outerHeight());
            ink.css({height: d, width: d});
        }

        x = e.pageX - $(this).offset().left - ink.width()/2;
        y = e.pageY - $(this).offset().top - ink.height()/2;

        ink.css({top: y+'px', left: x+'px'}).addClass("animate");
    });
});

/* Post character limit */

$(function () {
    $(".post-text").each(function (index) {
        if ($(this).text.replace(/[^A-Z]/gi, "").length > 100) {
            $(this).text = $(this).substring(0, 100) + "..."
        }
    });
});