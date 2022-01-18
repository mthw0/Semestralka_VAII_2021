$(document).off('click', '.deleteComment').on('click', '.deleteComment', function (e) {
    e.preventDefault();
    if (confirm("Naozaj chcete vymazat?")) {
        let id = $(this).data("id");
        let token = $("meta[name='csrf-token']").attr("content");

        $.ajax(
            {
                url: "/comments/" + id,
                type: 'DELETE',
                data: {
                    _token: token,
                    id: id
                },
                success: function (res) {
                    $('.koment_div').load(window.location.href+ " .koment_div");
                    alert("Vymazanie prebehlo úspešne!");
                }
            });
    }
});
