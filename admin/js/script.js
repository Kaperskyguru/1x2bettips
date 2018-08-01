$(document).ready(function() {

    $('#addGame').click(function() {
        var time = $('#time').val();
        var League = $('#League').val();
        var match = $('#match').val();
        var tip1 = $('#tip1').val();
        var firstpercent = $('#firstpercent').val();
        var tip2 = $('#tip2').val();
        var matchdate = $('#matchdate').val();
        var secondpercent = $('#secondpercent').val();
        $.ajax({
            method: 'POST',
            url: 'handler.php',
            cache: false,
            data: {
                add:1,
                time: time,
                League: League,
                match: match,
                tip1: tip1,
                firstpercent: firstpercent,
                tip2: tip2,
                secondpercent: secondpercent,
                matchdate: matchdate,
            },
            success: function(data) {
                alert(data);
            },
            onerror: function(err) {
                alert(err);
            },
        });
    });


    $('body').delegate('#delete_btn', 'click', function() {
        var id = $(this).attr('gid');
        $.ajax({
            method: 'POST',
            url: 'handler.php',
            data: {
                del: 1,
                id: id
            },
            cache: false,
            success: function(data) {
                alert(data);
            },
            onerror: function(err) {
                alert(err);
            }
        });
    });

    $('#postTable').DataTable({
        "order": [
            [1, 'desc']
        ]
    });

    $('#hometable').DataTable();


    $('body').delegate('#updateGame', 'click', function() {
        var id = $(this).attr('gid');
        var league = $('#League').val();
        var time = $('#time').val();
        var date = $('#matchdate').val();
        var match = $('#match').val();
        var tip1 = $('#tip1').val();
        var firstpercent = $('#firstpercent').val();
        var tip2 = $('#tip2').val();
        var secondpercent = $('#secondpercent').val();

        $.ajax({
            method: 'POST',
            url: 'handler.php',
            cache: false,
            data: {
                update: 1,
                league: league,
                time: time,
                date: date,
                match: match,
                tip1: tip1,
                firstpercent: firstpercent,
                tip2: tip2,
                secondpercent: secondpercent,
                id: id
            },
            success: function(data) {
                alert(data);
            },
            onerror: function(err) {
                alert(err);
            },
        });
    });

    function how_to_submit_Image_using_AJAX() {
        
        // $('#form_btn').submit(function (e) {
        //     let form_data = new FormData($(this)[0]);
        //     $.ajax({
        //         url:"",
        //         type:"POST",
        //         data: form_data,
        //         processData:false,
        //         cache:false,
        //     });
        // });
    }


});
