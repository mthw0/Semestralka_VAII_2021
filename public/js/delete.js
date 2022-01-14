$(document).off('click', '.deleteObjednavka').on('click', '.deleteObjednavka', function (e) {
    e.preventDefault();
    if (confirm("Naozaj chcete vymazat?")) {
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
                    $('#grid').load(window.location.href+ " #grid");
                    $('#tabulka').load(window.location.href+ " #tabulka");
                    alert("Vymazanie prebehlo úspešne!");
                }
            });
    }
});
