/*$(document).on('click','.delBtn',function (){
  alert('hello');
});*/
function check_all() {
  // item_checkbox
  $('input[class="item_checkbox"]:checkbox').each(function () {
    if ( $('input[class="check_all"]:checkbox:checked').length == 0) {
      $(this).prop('checked', false)
    } else {
      $(this).prop('checked', true)
    }
  });
}

function delete_all(){
  $(document).on('click','.del_all',function (){
    $('#form_data').submit();
  });
  $(document).on('click','.delBtn',function (){
    var iten_checked = $('input[class="item_checkbox"]:checkbox').filter(":checked").length;
    if(iten_checked > 0){
      $('.record_count').text(iten_checked);
      $('.not_empty_record').removeClass('d-none');
      $('.empty_record').addClass('d-none');
    }else {
      $('.record_count').text('');
      $('.not_empty_record').addClass('d-none');
      $('.empty_record').removeClass('d-none');
    }
    $('#multipleDelete').modal('show');
  });
}
