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
        $("div.sss").show(1000); 
        $(":file").addClass("required");
    });    
    $("input[id*='sig1']").click(function() {        
        $("div.sss").hide(1000);  
        $(":file").removeClass("required");
    });
});