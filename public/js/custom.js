var postId = 0;
var postBodyElement = null;

$('.post').find('.interaction').find('.edit').on('click', function (event) {
    event.preventDefault();

    postBodyElement = event.target.parentNode.parentNode.childNodes[1];
    var postBody = postBodyElement.textContent;
    postId = event.target.parentNode.parentNode.dataset['postid'];
    $('#post-body').val(postBody);
    $('#edit-modal').modal();
});

$('#modal-save').on('click', function () {
    $.ajax({
            method: 'POST',
            url: urlEdit,
            data: {body: $('#post-body').val(), postId: postId, _token: token}
        })
        .done(function (msg) {
            $(postBodyElement).text(msg['new_body']);
            $('#edit-modal').modal('hide');
        });
});

/*function roleView() {
   /* $('#editRole').click(function(e){
        e.preventDefault();
    })
    $(document).on({
        'click':function(e){
            //e.preventDefault();
            var role_id=$(".post").data('postid');
            var updateUrl=location.origin+'/dashboard/'+role_id;
            var url=location.origin+'/dashboard/'+role_id+'/edit';
             $.get(url,function(data){
              $('[name="post-body"]').val();
             $('[".edit_role_from"]').attr('action',updateUrl);
            });
        },
    },'.edit');
} */


