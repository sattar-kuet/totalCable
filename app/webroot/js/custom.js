
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
        $("input:radio[name='data[Customer][service_type]']").change(function () {
            var value = $(this).val();
            if (value == 'other') {
               $('#CustomerComment').show();
                $('#CustomerComment').addClass('required');
            }
            else {
               $('#CustomerComment').hide();
                $('#CustomerComment').removeClass('required');
            }
        });
    });
});

