$(function() {
  $.post('dashboard/xhrGetListings', function(o) {
   for(var i = 0; i < o.length; i++) {
    $("#listInserts").append('<div>' + o[i].text + '<a href="#" class="del" rel="'+ o[i].id +'">X</a></div>');
   }
  }, 'json');
	
  $('#randomInsert').submit(function() {
   var url = $(this).attr('action');
   var data = $(this).serialize();
   $.post(url, data, function(o) {
    alert(1);
   });
   return false;
  })
  

   $(document).on('click','.del', function(){ 
   delItem = $(this); 
   var id = $(this).attr('rel'); 
   $.post('dashboard/xhrDeleteListing', {'id': id}, function() {  
     delItem.parent().remove(); 
   }); 
   return false; 
 });

  
  

});