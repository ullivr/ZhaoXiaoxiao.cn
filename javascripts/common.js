$(document).ready(function(){
  $(".statement").hide();
  $(".resume").each(function(){
    $(this).hover(function(){
      $(this).find(".statement").slideDown('medium');
    },function(){
        $(this).find(".statement").slideUp('medium');
      });
    //add the behavior for each figure here
  });
});