$(function(){
    $("#CenterContent > ul").tabs({
        fx: { opacity: "toggle", duration: "fast"}
    });
    $("#iResults").click(function(){$("#aResults").trigger("click")});
})
