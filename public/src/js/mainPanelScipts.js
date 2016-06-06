
$(document).ready(function(){
    $("#showAnnosHref").click(function(){
      $("#showAnnosPanel").slideToggle(1000);
      if($("#addAnnoPanel").is(":visible")){
        $("#addAnnoPanel").slideToggle(1000);
      }
      if($("#showAboutPanel").is(":visible")){
        $("#showAboutPanel").slideToggle(1000);
      }
    });

    $("#addAnnoHref").click(function(){
      $("#addAnnoPanel").slideToggle(1000);
      if($("#showAnnosPanel").is(":visible")){
        $("#showAnnosPanel").slideToggle(1000);
      }
      if($("#showAboutPanel").is(":visible")){
        $("#showAboutPanel").slideToggle(1000);
      }
    });

    $("#showAbout").click(function(){
      $("#showAboutPanel").slideToggle(1000);
      if($("#addAnnoPanel").is(":visible")){
        $("#addAnnoPanel").slideToggle(1000);
      }
      if($("#showAnnosPanel").is(":visible")){
        $("#showAnnosPanel").slideToggle(1000);
      }
    });

});
