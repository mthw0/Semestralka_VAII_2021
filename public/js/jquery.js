$(document).ready(function () {
    console.log("document loaded");
    $("#headingOne").click(function () {
        if ($("#collapseOne").css('display') === 'block') {
            $("#collapseOne").css('display', 'none');
        } else {
            $("#collapseOne").css('display', 'block');
        }
        $("#collapseTwo").css('display', 'none');
        $("#collapseThree").css('display', 'none');
    });
    $("#collapseOne").click(function () {
        if ($("#collapseOne").css('display') === 'block') {
            $("#collapseOne").css('display', 'none');
        } else {
            $("#collapseOne").css('display', 'block');
        }
        $("#collapseTwo").css('display', 'none');
        $("#collapseThree").css('display', 'none');
    });
    $("#headingTwo").click(function () {
        if ($("#collapseTwo").css('display') === 'block') {
            $("#collapseTwo").css('display', 'none');
        } else {
            $("#collapseTwo").css('display', 'block');
        }
        $("#collapseOne").css('display', 'none');
        $("#collapseThree").css('display', 'none');
    });
    $("#collapseTwo").click(function () {
        if ($("#collapseTwo").css('display') === 'block') {
            $("#collapseTwo").css('display', 'none');
        } else {
            $("#collapseTwo").css('display', 'block');
        }
        $("#collapseOne").css('display', 'none');
        $("#collapseThree").css('display', 'none');
    });
    $("#headingThree").click(function () {
        if ($("#collapseThree").css('display') === 'block') {
            $("#collapseThree").css('display', 'none');
        } else {
            $("#collapseThree").css('display', 'block');
        }
        $("#collapseOne").css('display', 'none');
        $("#collapseTwo").css('display', 'none');
    });
    $("#collapseThree").click(function () {
        if ($("#collapseThree").css('display') === 'block') {
            $("#collapseThree").css('display', 'none');
        } else {
            $("#collapseThree").css('display', 'block');
        }
        $("#collapseOne").css('display', 'none');
        $("#collapseTwo").css('display', 'none');
    });
});
