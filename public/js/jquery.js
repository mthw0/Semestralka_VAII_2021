$( document ).ready(function() {
    console.log( "document loaded" );
    $("#headingOne").click(function () {
        $("#collapseOne").css('display','block');
        $("#collapseTwo").css('display','none');
        $("#collapseThree").css('display','none');
    });
    $("#collapseOne").click(function () {
        $("#collapseOne").css('display','none');
    });
    $("#headingTwo").click(function () {
        $("#collapseOne").css('display','none');
        $("#collapseTwo").css('display','block');
        $("#collapseThree").css('display','none');
    });
    $("#collapseTwo").click(function () {
        $("#collapseTwo").css('display','none');
    });
    $("#headingThree").click(function () {
        $("#collapseOne").css('display','none');
        $("#collapseTwo").css('display','none');
        $("#collapseThree").css('display','block');
    });
    $("#collapseThree").click(function () {
        $("#collapseThree").css('display','none');
    });
});
