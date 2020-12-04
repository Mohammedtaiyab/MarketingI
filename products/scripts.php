<script type="text/javascript">


$(function(){
  $(document).on('click', '.custmtext', function(e){
    e.preventDefault();
    $('#custmtext').modal('show');
    var id = $(this).data('id');
     $('.proid').val(id);
  });

  $(document).on('click', '.model', function(e){
    e.preventDefault();
    $('#model').modal('show');
    var id = $(this).data('id');
      $('.proid').val(id);
  });

  $(document).on('click', '.photo', function(e){
    e.preventDefault();
     $('#photo').modal('show');
    var id = $(this).data('id');
    $('.proid').val(id);
  });
   $(document).on('click', '.deleteAdd', function(e){
    e.preventDefault();
     $('#deleteAdd').modal('show');
    var id = $(this).data('id');
    $('.addressid').val(id);
  });
      $(document).on('click', '.editaddress', function(e){
    e.preventDefault();
     $('#editaddress').modal('show');
    var id = $(this).data('id');
      getRow(id);
  });
});
  function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'address.php',
    data: {addressid:id},
    dataType: 'json',
    success: function(response){
      $('#name').html(response.Name);
      $('.name').html(response.Address);
      $('.prodid').val(response.Address2);
      $('#phone').val(response.Phone);
      $('#edit_price').val(response.State);
      $('#edit_mrp').val(response.City);
      $('#edit_dealer').val(response.Pin);
      $('#edit_cust').val(response.Country);
    }
  });
}

</script>