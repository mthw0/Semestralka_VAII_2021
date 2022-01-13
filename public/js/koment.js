function showComment(cislo) {
    $("#koment_answer" + cislo).css('display', 'none');
    $("#koment_input" + cislo).css('display', 'block');
    $("#koment_send" + cislo).css('display', 'block').css('maxWidth', '100px').css('marginLeft', '20px');
    $("#koment_hide" + cislo).css('display', 'block').css('maxWidth', '100px').css('marginLeft', '20px');
    $(".form-group").css('margin-bottom','1rem');
}

function hideComment(cislo) {
    $("#koment_answer" + cislo).css('display', 'block');
    $("#koment_input" + cislo).css('display', 'none');
    $("#koment_send" + cislo).css('display', 'none');
    $("#koment_hide" + cislo).css('display', 'none');
    $(".form-group").css('margin-bottom','0');

}
