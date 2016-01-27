//$('.partial').each(function () {
//    var totalPoints = 0;
//    $('.partial').bind("change paste keyup", function () {
//        totalPoints += parseInt($(this).val());
//    });
//    alert(totalPoints);
//});

$(document).on("change", ".partial", function() {
    var sum = 0;
    $(".partial").each(function(){
        sum += +$(this).val();
    });
    $(".total").val(sum);
});

$(document).ready(function() {
    $("div.sss").hide();
   // $("#cardsig").remove(".required");
    $("input[id*='sig2']").click(function() {        
        $("div.sss").show(200); 
        $(":file").addClass("required");
    });    
    $("input[id*='sig1']").click(function() {        
        $("div.sss").hide(200);  
        $(":file").removeClass("required");
    });
});


$(document).ready(function(){
    $('.hover-effect').click(function() {
      $('.hover-effect').css({"border": "3px solid #eee", "font-size": "100%"});  
    $(this).css({"border": "3px solid gray", "font-size": "200%"});
   
   // var pkid = jQuery(this).find('.PSID').val();
    
    
    
   // $("#packageid").val(pkid);
   
     //alert($(this).attr('id'));
     var ps_id = $(this).attr('id');
      $("#packageid").val(ps_id);  
});
});
    
