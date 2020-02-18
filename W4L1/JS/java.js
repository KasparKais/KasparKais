/*$(function() {
    $makeRequest = $('.make-request');

    $makeRequest.on('click', function() {
        $.ajax({
            method: "GET",
            url: "https://reqres.in/api/users"
        }) .done(function(response) {
            response.data.forEach(function(value, index) {
                const img = "<img src=\""+value.avatar+"\">"
                const row = "\
                <tr>\
                    <td>"+value.id+"</td>\
                    <td class=\"cell-img\">"+img+"</td>\
                    <td>"+value.first_name+"</td>\
                    <td>"+value.last_name+"</td>\
                    <td>"+value.email+"</td>\
                </tr>";

                $('#data-table').find('tbody').append(row)
             })
             $makeRequest.attr('disabled', true);
        })
    })
})*/


$(function() {
    var $makeRequest = $('.make-request');
    var page = 1;
    var progressInterval

    $makeRequest.on('click', function() {
        $.ajax({
            method: "GET",
            url: "https://reqres.in/api/users?page=" +  page
            }) .done(handleResponse) 
    })

    function handleResponse(response) {
        response.data.forEach(function(value,index) {
            const img = "<img src=\""+value.avatar+"\">"
            const row = "\
            <tr>\
                "+ addCell(value.id, "cell-id") +"\
                "+ addCell(img, "cell-img") +"\
                "+ addCell(value.first_name) +"\
                "+ addCell(value.last_name) +"\
                "+ addCell(value.email) +"\
            </tr>";

            $('#data-table').find('tbody').append(row)
        })

        page ++;

        if (!response.data.length) {
            $makeRequest.attr('disabled', true);
        }
    }

    function addCell(val, className = "") {
        return "<td class=\""+ className +"\">"+val+"</td>"
    }


    $('.start-action').on('click', startProgress)
    $('.stop-action').on('click', stopProgress)
    $('.reset-action').on('click', resetProgress) 

    function startProgress() {
        const cycleInterval = $('#cycle-interval').val()
        let width = 0;

        if (cycleInterval > 0) {
            $('.progress').width(0);

            console.log(new Date())
            progressInterval = setInterval(function() {
                width ++;
                $('.progress').width(width + "%");
                
                if (width >= 100) {
                    stopProgress();
                }
             }, cycleInterval * 1000 / 100)
        }
    
}
    function stopProgress() {
        clearInterval(progressInterval);
        console.log(new Date())
    }
    function resetProgress() {
        stopProgress()
        $('#cycle-interval').val("")
        $('.progress').width(0);

    }

})
        