$(function() {
    $(".js-delete-row").on("click", function() {
        const id = $(this).attr("data-id");

        $.ajax({
            method: "GET",
            url: "/KasparKais.github.io/backend/delete.php?id=" + id + "&redirect=false"
        }).then(function() {
            window.location = "/KasparKais.github.io/backend/"
            
        })
    })
})
