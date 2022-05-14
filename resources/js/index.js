$("document").ready(function () {

    /*header scroll*/
    $("#nav_link").on("click",function() {
        $(this).addClass("active");
    });
    /*header collapse*/
    $("#collapse").on("click",function(){
        $("#collapsibleNavbar").slideToggle();
    })

    /*registration form*/
    $("#Modal").css({
        "width": "100%",
        "margin": "0 auto",
        "border-radius":"1%",
        "background": "#fafafa",
        "top": "0",
        "left": "0",
        "right": "0",
        "bottom": "0",
        "margin": "auto",
        "display": "block",
        "opacity": "1",
        "z-index": "38",
        "text-align": "center"
    });


    /*audio*/
    var audio = new Audio('/music/Robin Schulz feat. Francesco Yates-Sugar (feat. Francesco Ya.mp3');
    var counter = 0;
    $("#audio_icon").on("click",function(){
        if(counter == 0){
            audio.play();
            counter++;
            $("#audio_icon_1").css("display","none");
            $("#audio_icon_2").css("display","block")
        }
        else if(counter == 1){
            audio.pause();
            counter--;
            $("#audio_icon_1").css("display","block");
            $("#audio_icon_2").css("display","none")
        }

    })

    /*registration psw*/
    var a1 = $("#eye_icon_1");
    var b1 = $("#eye_icon_slash_1");
    var c1 = $("#psw_1");
    var a2 = $("#eye_icon_2");
    var b2 = $("#eye_icon_slash_2");
    var c2 = $("#psw_2");
    $("#eye_1").on("click",function(){
        if(c1.attr('type') == 'password'){
            c1.attr("type","text") ;
            a1.css("display","block");
            b1.css("display","none")
        }
        else{
            c1.attr("type","password");
            a1.css("display","none");
            b1.css("display","block")
        }
    })
    $("#eye_2").on("click",function(){
        if(c2.attr('type') == 'password'){
            c2.attr("type","text") ;
            a2.css("display","block");
            b2.css("display","none")
        }
        else{
            c2.attr("type","password");
            a2.css("display","none");
            b2.css("display","block")
        }
    })
});
