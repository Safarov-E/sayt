 
$(document).ready(function(){
   $('.spoiler_links').click(function(){
      if ($(this).parent().children('div.spoler_body').css("display")=="none") {
         $("div[class^='spoler_body']").hide('normal');
         $(this).parent().children('div.spoler_body').toggle('normal');
         $('div[class^="spoler_body"]').closest('.spoiler').find('.plus_minus').html("+");
         $(this).closest('.spoiler').find('.plus_minus').html("-");
      }
      else {
         $("div[class^='spoler_body']").hide('normal');
         $(this).closest('.spoiler').find('.plus_minus').html("+");
      }
      return false;
   });
});