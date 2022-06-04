$(function(){
    var header = $("#header");
    var introH =$("#intro").innerHeight();
    var scrollOffset = $(window).scrollTop();


    /*  Add static nav  */
    $(window).on("scroll", function(){
        scrollOffset = $(this).scrollTop();
        checkHeight(scrollOffset);
        
    })

    function checkHeight(scrollOffset){
        if(scrollOffset >= introH){
            header.addClass("fixed");
        }else{
            header.removeClass("fixed");
        }
    }



    /*    open burger menu   */
    $("#nav_toggle").on("click",function(event){
        event.preventDefault();

        $("#nav").toggleClass("active")
    })
});