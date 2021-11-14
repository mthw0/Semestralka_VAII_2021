$("#map").on("load", function() {
    let head = $("#map").contents().find("head");
    let css = '<style>body {padding: 10px !important;}</style>';
    $(head).append(css);
});
