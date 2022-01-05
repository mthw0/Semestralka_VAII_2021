$(document).ready(function () {
    $("#prepinac").click(function () {
            if ($("#grid").css("display") === "grid") {
                $("#grid").css("display", "none");
                $("#tabulka").css("display", "inline-table");

            } else {
                $("#grid").css("display", "grid");
                $("#tabulka").css("display", "none");
            }
        }
    );

});
