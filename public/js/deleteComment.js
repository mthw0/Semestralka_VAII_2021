$(document).off('click', '.deleteComment').on('click', '.deleteComment', function (e) {
    if (confirm("Naozaj chcete vymazat?")) {
        e.preventDefault();
        let id = $(this).data("id");
        let token = $("meta[name='csrf-token']").attr("content");

        $.ajax(
            {
                url: "comments/" + id,
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
