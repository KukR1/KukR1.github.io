$(document).ready(function () {
    $("g, path").hover(function (e) {
        $("#info-box").css("display", "block");
        $("#info-box").html($(this).data("info"));
        $("#info-box").css("margin-top", "-50px");
        $("#ITALY path").css("fill", "#da1a35");
    });
    $("g, path").mouseleave(function (e) {
        $("#info-box").css("display", "none");
        $("#ITALY path").css("fill", "#b32d36");
    });
    $("g, polygon").hover(function (e) {
        $("#info-box").css("display", "block");
        $("#info-box").html($(this).data("info"));
        $("#info-box").css("margin-top", "-50px");
        $("#ITALY path").css("fill", "#da1a35");
    });

    $("g, polygon").mouseleave(function (e) {
        $("#info-box").css("display", "none");
        $("#ITALY path").css("fill", "#b32d36");
    });

    $(document)
        .mousemove(function (e) {
            if ($(window).width() >= 600) {
                $("#info-box").css(
                    "top",
                    e.pageY - $("#info-box").height() - 30
                );
                $("#info-box").css(
                    "left",
                    e.pageX - $("#info-box").width() / 3
                );
            }
        })
        .mouseover();

    //? Hover Info
    $("#NETHERLANDS").data("info", "<div>Cities: 1</div><div>Rooms: 4</div>");
    $("#DENMARK").data("info", "<div>Cities: 10</div><div>Rooms: 27</div>");
    $("#FRANCE").data("info", "<div>Cities: 5</div><div>Rooms: 27</div>");
    $("#GERMANY").data("info", "<div>Cities: 39</div><div>Rooms: 130</div>");
    $("#SWITZERLAND").data("info", "<div>Cities: 5</div><div>Rooms: 10</div>");
    $("#UK").data("info", "<div>Cities: 4</div><div>Rooms: 12</div>");
    $("#ITALY").data("info", "<div>Cities: 4</div><div>Rooms: 29</div>");
    $("#USA").data("info", "<div>Coming <br> Soon</div>");
    $("#PORTUGAL").data("info", "<div>Cities: 2</div><div>Rooms: 9</div>");
    $("#GREECE").data("info", "<div>Cities: 1</div><div>Rooms: 4</div>");
    $("#AUSTRALIA").data("info", "<div>Cities: 5</div><div>Rooms: 11</div>");
    $("#KUWAIT").data("info", "<div>Cities: 1</div><div>Rooms: 4</div>");
    $("#SAUDI_ARABIA").data("info", "<div>Cities: 2</div><div>Rooms: 8</div>");
    $("#NEW_ZEALAND").data("info", "<div>Cooming <br> Soon</div>");
    $("#SLOVENIA").data("info", "<div>Cities: 1</div><div>Rooms: 12</div>");
});
