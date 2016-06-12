$(document).ready(function () {
    $("#showAnnosHref").click(function () {
        $("#showAnnosPanel").slideToggle(1000);
        if ($("#addAnnoPanel").is(":visible")) {
            $("#addAnnoPanel").slideToggle(1000);
        }
        if ($("#showAboutPanel").is(":visible")) {
            $("#showAboutPanel").slideToggle(1000);
        }
    });

    $("#addAnnoHref").click(function () {
        $("#addAnnoPanel").slideToggle(1000);
        if ($("#showAnnosPanel").is(":visible")) {
            $("#showAnnosPanel").slideToggle(1000);
        }
        if ($("#showAboutPanel").is(":visible")) {
            $("#showAboutPanel").slideToggle(1000);
        }
    });

    $("#showAbout").click(function () {
        $("#showAboutPanel").slideToggle(1000);
        if ($("#addAnnoPanel").is(":visible")) {
            $("#addAnnoPanel").slideToggle(1000);
        }
        if ($("#showAnnosPanel").is(":visible")) {
            $("#showAnnosPanel").slideToggle(1000);
        }
    });

});

//Kuulutuste kuvamise nupp
$('#specifyAnnounForm').submit(function (event) {
    if (event.preventDefault) event.preventDefault();
    var title = $('#annoTitle').val();
    var category = $('#selectCategory').val();
    var minPrice = $('#minPrice').val();
    var maxPrice = $('#maxPrice').val();
    var token = $('#token').val();

    //alert(title);

    //alert(title);
    $.post("/veeb/kuulutaja/public/specifyAnno", {
            title: title
            , category: category
            , minPrice: minPrice
            , maxPrice: maxPrice
            , _token: token
        })
        .done(function (data) {
            var len = data.len;
            var success = data.success;
            var announs = data.announs;
            console.log(success);
            $("#showAnnouns").empty();;
            if (success) {
                if (len == 0) {
                    $("#findAnnouns").hide();
                    $("#showAnnounsEmpty").show("slow");
                    $("#noAnnouns").show("slow");
                }


                for (var Nya = 0; Nya < announs.length; Nya++) {
                    console.log(announs[Nya].title);
                    $("#showAnnounsEmpty").hide("slow");



                    var ad_div = $('#copy-that').html();
                    var ad = ad_div.replace("TITLE", announs[Nya].title).replace("CAT", announs[Nya].category).replace("ID", announs[Nya].id).replace("PRICE", announs[Nya].price).replace("INTROTEXT", announs[Nya].introText).replace("CREATED", announs[Nya].created_at);


                    $('#showAnnouns').append(ad);
                    $('.announs-animate-' + announs[Nya].id).slideDown(2000);




                }
            }
        });
});



//Kuulutuste lisamise nupp
$('#submit_Announ').submit(function (event) {
    if (event.preventDefault) event.preventDefault();
    var title = $('#addedAnnoTitle').val();
    var introText = $('#addedintroText').val();
    var category = $('#addedselectCategory').val();
    var price = $('#addedprice').val();
    var token = $('#token').val();

    $.post("/veeb/kuulutaja/public/postAnno", {
            title: title
            , introText: introText
            , category: category
            , price: price
            , _token: token
        })
        .done(function (data) {
            var message = data.message;
            var success = data.success;
            var announ = data.announ;
            if (success) {
                alert(message);

            }
            //$("#addAnnoPanel").slideToggle(1000);

        });
});
