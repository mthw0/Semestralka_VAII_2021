$(document).off('click', '.deleteMiesto').on('click', '.deleteMiesto', function (e) {
    e.preventDefault();
    if (confirm("Naozaj chcete vymazat?")) {
        let id = $(this).data("id");
        let token = $("meta[name='csrf-token']").attr("content");

        $.ajax(
            {
                url: "/admin/miesta/" + id,
                type: 'DELETE',
                data: {
                    _token: token,
                    id: id
                },
                success: function (res) {
                    $("#grid").load(location.href+" #grid>*","");
                    alert("Vymazanie prebehlo úspešne!");
                }
            });
    }
});
