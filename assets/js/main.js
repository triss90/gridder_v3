jQuery(document).on('click','#download',function(){
    var ajax = jQuery.ajax({
        method : 'get',
        url : '/index.php',
        data : { 'increase' : '1' }
    }) ;
    ajax.done(function(data){
        jQuery('#counter').html(data) ;
    }) ;
    ajax.fail(function(data){
        alert('ajax fail : url of ajax request is not reachable') ;
    }) ;
}) ;
