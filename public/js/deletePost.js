$(document).off('click', '.deletePost').on('click', '.deletePost', function (e) {
    if (confirm("Naozaj chcete vymazat?")) {
        e.preventDefault();
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
                    window.location.reload();
                }
            });
    }
});
