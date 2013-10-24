$(window).load(function() {

	setTimeout(function() {
        $(".words li").css({'height': 'auto'});
        $(".words ul").css({'left': '0 !important'});

        $(".share-boxes iframe").css({'background-color': '#FFF'});
        $(".fb-like").addClass("fb-like-bg");
    }, 1000);

    // News

    $("section.news ul li ul li a:first-child").click(function() {
        $(this).parent().find(".share-boxes .facebook").show();
        $(".share-boxes .twitter").hide();
        $(".share-boxes .gplus").hide();
    });

    $("section.news ul li ul li a+a").click(function() {
        $(this).parent().find(".share-boxes .twitter").show();
        $(".share-boxes .facebook").hide();
        $(".share-boxes .gplus").hide();
    });

    $("section.news ul li ul li a+a+a").click(function() {
        $(this).parent().find(".share-boxes .gplus").show();
        $(".share-boxes .facebook").hide();
        $(".share-boxes .twitter").hide();
    });

    $("section.news ul li ul li a+a+a+a").click(function() {
        $(".share-boxes .facebook").hide();
        $(".share-boxes .twitter").hide();
        $(".share-boxes .gplus").hide();
        return false;
    });

    // Testimonies

    $("section.testimonies ul li ul li a:first-child").click(function() {
        $(this).parent().find(".share-boxes .facebook").show();
        $(".share-boxes .twitter").hide();
        $(".share-boxes .gplus").hide();
    });

    $("section.testimonies ul li ul li a+a").click(function() {
        $(this).parent().find(".share-boxes .twitter").show();
        $(".share-boxes .facebook").hide();
        $(".share-boxes .gplus").hide();
    });

    $("section.testimonies ul li ul li a+a+a").click(function() {
        $(this).parent().find(".share-boxes .gplus").show();
        $(".share-boxes .facebook").hide();
        $(".share-boxes .twitter").hide();
    });

    $("section.testimonies ul li ul li a+a+a+a").click(function() {
        $(".share-boxes .facebook").hide();
        $(".share-boxes .twitter").hide();
        $(".share-boxes .gplus").hide();
        return false;
    });

    // Hide

    $(".share-boxes .facebook").mouseleave(function() {
       $(".share-boxes .facebook").hide();
    });

    $(".share-boxes .twitter").mouseleave(function() {
       $(".share-boxes .twitter").hide();
    });

    $(".share-boxes .gplus").mouseleave(function() {
       $(".share-boxes .gplus").hide();
    });
});