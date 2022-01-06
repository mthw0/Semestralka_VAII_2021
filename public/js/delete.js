$(document).off('click', '.deleteObjednavka').on('click', '.deleteObjednavka', function (e) {
    if (confirm("Naozaj chcete vymazat?")) {
        e.preventDefault();
        var id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");

        $.ajax(
            {
                url: "objednavky/" + id,
                type: 'DELETE',
                data: {
                    _token: token,
                    id: id
                },
                success: function (res) {
                    window.location.reload();
                }
            });
    }
});
