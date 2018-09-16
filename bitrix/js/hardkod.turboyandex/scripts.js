$(document).ready(function() {
    $(".infoblock_types").each(function() {
        if($(this).data('id')) {
            var count = $("[data-infoblock_type_id='"+$(this).data('id')+"']").length;
            var checked_count = $("[data-infoblock_type_id='"+$(this).data('id')+"']:checked").length
            if(count == checked_count) {
                $(this).prop('checked', true);
            }
        }
    });
    $(".infoblock_types").change(function() {
        if($(this).prop('checked')) {
            $("[data-infoblock_type_id='"+$(this).data('id')+"']").prop("checked", true);
        } else {
            $("[data-infoblock_type_id='"+$(this).data('id')+"']").prop("checked", false);
        }
    });
    $(".infoblocks").change(function() {
        var count = $("[data-infoblock_type_id='"+$(this).data('infoblock_type_id')+"']").length;
        var checked_count = $("[data-infoblock_type_id='"+$(this).data('infoblock_type_id')+"']:checked").length;
        if(count == checked_count) {
            $("#infoblock_types_" + $(this).data('infoblock_type_id')).prop('checked', true);
        } else {
            $("#infoblock_types_" + $(this).data('infoblock_type_id')).prop('checked', false);
        }
    });
});