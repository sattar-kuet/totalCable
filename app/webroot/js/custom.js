
$(document).ready(function () {

    $(".signup").click(function () {

        hidealltabs();
        $("#block-quicktabs-3").slideDown("medium", function () {
        });
    });

    $("a.login1").click(function () {
        hidealltabs();
        $("#block-block-111").slideDown("medium", function () {
        });
    });

    function hidealltabs() {
        $("#block-block-111,#block-quicktabs-3,#block-block-111 .modal-header .modal-title").hide();
    }

    $('.subscribe-btn').click(function () {

        var psetting_id = $(this).attr('id');
        $('#UserPsettingId').val(psetting_id);

    });


    $(function () {
        $("#info_source_id").change(function () {
            
            var value = $(this).val();
            
            if (value == 'Other') {
               $('#info').show();
                $('#othersource').addClass('required');
            }
            else {
               $('#info').hide();
                $('#othersource').removeClass('required');
            }
        });
    });
    
    // for existing customer
    $(function () {
        $("#info_source_id").change(function () {
            
            var value = $(this).val();
            
            if (value == 'Existing Customer') {
               $('#reference_info').show();
                $('#r_name').addClass('required');
                $('#r_no').addClass('required');
            }
            else {
               $('#reference_info').hide();
                $('#r_name').removeClass('required');
                $('#r_no').removeClass('required');
            }
        });
    });
    
    //Terms and Conditions 
    $(function () {        
        $("#signup").click(function (e) {
            if ($('#agree').prop('checked')) {
            
        } else {
            alert("You must agree with our Terms and Conditons");
            e.preventDefault(); // this will prevent from submitting the form.
        }                        
        });
    });
});

