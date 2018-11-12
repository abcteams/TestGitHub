
$(document).ready(function () {

    //****************get last 5 notifications form database *****************************
    function load_unseen_notifications(view = '') {
        var url = '';
        if(view != ''){
            url  = '/updateComments';
        }
        else{
            url = '/getComments';
        }
        $.ajax({
            url:url,
            method:'GET',
            data:{view:view},
            dataType:'json',
            success:function (data) {
                $('.dropdown-menu').html(data.notification);
                $('.unread_notifications').html(data.unseen_notification);
                $('#table_body').html(data.tableData);
            }
        });
    }
    load_unseen_notifications();

    //********** submit form and show notification of commnent ******************************
    $('#comment_form').on('submit',function (event) {
        event.preventDefault();
        if($('#comment_subject').val() != '' &&  $('#comment_text').val() != '')
        {
            var comment_subject = $('#comment_subject').val();
            var comment_text = $('#comment_text').val();
            var token = $('input[name=_token]').val();
            $.ajax({
                url:'addComments',
                method:'POST',
                data:{_token: token , comment_subject:comment_subject,comment_text:comment_text },
                success:function (data) {
                    $('#comment_form')[0].reset();
                    load_unseen_notifications();
                }
            })
        }
        else {
            alert('Both Fields are required');
        }
    });

    //*********************** Set notification label to empty *****************************
    $(document).on('click', '.dropdown-toggle',function () {
        $('.unread_notifications').html('');
        load_unseen_notifications('yes');
    });

    //********************refresh page after 1 second *************************************************
    setInterval(function () {
        load_unseen_notifications();
    },1000)
});
