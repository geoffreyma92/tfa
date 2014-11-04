$(document).ready(function() {
    $('#myTab a:first').tab('show');

    $('#myTab a').click(function(e) {
        e.preventDefault()
        $(this).tab('show')
    });

    $('#personal-next').click(function(e) {
        $('#travel-tab').addClass('active');
        $('#personal-tab').removeClass('active');
    });

    $(".datepicker").datepicker();


    $("#other_conf").hide();


    var myRadio = $("input[id='conference_quality-2']:checked").val();

    $(".conf_quality").click(function() {
        var conf_q = $(this).val();
        if (conf_q == "other") {
            if ($("input[id='conference_quality-2']").attr('checked')) {
                alert("checked");
            }
            $("#other_conf").show();
            $("#conference_quality_div").removeClass('col-xs-12');
            $("#conference_quality_div").addClass('col-xs-');
        } else {

        }
    });
});