function showComment(cislo) {
    $("#koment_answer"+cislo).css('display','none');

    $("#koment_input"+cislo).css('display','block');

    $("#koment_send"+cislo).css('display','block');
    $("#koment_send"+cislo).css('maxWidth','100px');
    $("#koment_send"+cislo).css('marginLeft','20px');

    $("#koment_hide"+cislo).css('display','block');
    $("#koment_hide"+cislo).css('maxWidth','100px');
    $("#koment_hide"+cislo).css('marginLeft','20px');
}

function hideComment(cislo) {
    $("#koment_answer"+cislo).css('display','block');
    //$("#koment_answer"+cislo).css('maxWidth','100px');
    //$("#koment_answer"+cislo).css('marginLeft','20px');

    $("#koment_input"+cislo).css('display','none');

    $("#koment_send"+cislo).css('display','none');

    $("#koment_hide"+cislo).css('display','none');

}
