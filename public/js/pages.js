$(document).ready(function(){

    $(document).on('click', '.page-link', function(event){
        event.preventDefault();
        let page = $(this).attr('href').split('page=')[1];
        fetch_data(page);
    });

    function fetch_data(page)
    {
        $.ajax({
            url:"objednavky/fetch?page="+page,
            success:function(data)
            {
                $('#tabulka').html(data);
            }
        });
    }

});
