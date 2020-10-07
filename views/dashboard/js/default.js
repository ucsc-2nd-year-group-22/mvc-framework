$(function(){

    $.get('dashboard/xhrGetListings', function(o){

        // console.log(o[0].text);

        for(var i = 0; i<o.length; i++) {
            $('#listInserts').append('<div>' + o[i].text + '<a class="del" href="#"> [X]</a></div>');
        }

    }, 'json');
    
    
    $('#randomInsert').submit(function() {
        var url = $(this).attr('action');
        var data = $(this).serialize();

        $.post(url, data, function(o) {
            // console.log(o);
            $('#listInserts').append('<div>'+ o.text + '<a class="del" rel="'+o.id+'" href="#"> [X]</a></div>');
        }, 'json');

        return false;
    });

    $('.del').click(function() {

        return false;
    });
});