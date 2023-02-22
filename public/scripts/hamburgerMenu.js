$(document).ready(function() {
    if ($(window).width() < 600) {
            $('#nav').addClass('hidden');
            $('#hamburgermenu').removeClass('hidden');
    } else {
            $('#nav').removeClass('hidden');
            $('#hamburgermenu').addClass('hidden');
           }
    });

    $(window).resize(function() {
        if ($(window).width() < 600) {
            $('#nav').addClass('hidden');
            $('#hamburgermenu').removeClass('hidden');
        } else{
            $('#nav').removeClass('hidden');
            $('#hamburgermenu').addClass('hidden');
        }
})

  $('#hamburgermenu').click(function(){
    $('#nav').removeClass('hidden');
    $('#nav').addClass('narrow');
    $('#cancel').removeClass('hidden');
    $('#hamburgermenu').addClass('hidden');
    })

 $('#cancel').click(function(){
    $('#cancel').addClass('hidden');
    $('#hamburgermenu').removeClass('hidden');
    $('#nav').addClass('hidden');
  })
