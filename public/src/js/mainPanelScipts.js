
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

$('#specifyAnnounForm').submit(function(event){
  if(event.preventDefault) event.preventDefault();
  var title = $('#annoTitle').val();


  alert(title);



});

$('#submit_Announ').submit(function(event){
  if(event.preventDefault) event.preventDefault();
  var title = $('#annoTitle').val();
  var introText = $('#introText').val();
  var category = $('#selectCategory').val();
  var price = $('#price').val();
  $.post("/add",
  {title: title, introText: introText, category: category, price: price})
  .done(function(data){
    $("#addAnnoPanel").slideToggle(1000);

  });

  alert(title);



});
