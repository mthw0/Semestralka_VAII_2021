$(document).off('click', '.deletePost').on('click', '.deletePost', function (e) {
    e.preventDefault();
    if (confirm("Naozaj chcete vymazat?")) {
        let id = $(this).data("id");
        let token = $("meta[name='csrf-token']").attr("content");
        $.ajax(
            {
                url: "admin/posts/" + id,
                type: 'DELETE',
                data: {
                    _token: token,
                    id: id
                },
                success: function (res) {
                    $('#clanky').load(window.location.href+ " #clanky");
                    alert("Vymazanie prebehlo úspešne!");
                }
            });
    }
});
