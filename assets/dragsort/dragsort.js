$(document).ready(function(){ 
               
  $(function() {
    $("#contentLeft ul").sortable({ opacity: 0.6, cursor: 'move', update: function() {
      var order = $(this).sortable("serialize") + '&action=updateRecordsListings'; 
      $.post("dragdrop", order, function(theResponse){
        $("#contentRight").html(theResponse);
      });                                
    }                 
    });
  });

});
