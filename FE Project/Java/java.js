$(document).ready(function(){
    $('.toggle').click(function() {
        $('.sidebar-open').toggleClass('active')
        $('.toggle').toggleClass('active')

    })
})
function SpecDeals() {
    if(document.getElementById('checkbox').checked) {
        document.getElementById('receiveWhen').style.display='block';
    } else {
        document.getElementById('receiveWhen').style.display='none';
    }
}
