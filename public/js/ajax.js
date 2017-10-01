$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
});


var httpRequest = new XMLHttpRequest;

$(document).ready(function(){
  $('#fw1').submit(function(e){
    var weap1 = $('#w1').val();
    var weap2 = $('#w2').val();
    var w = $('#win').val();
    var token = $('meta[name="csrf-token"]').attr('content');

    /*
    $.post('./storeVote', {  _token:token, weapon1:weap1, weapon2:weap2, win:w}, function(data){
      console.log(data);
    });
*/

    var dataString = "weapon1="+weap1+"&weapon2="+weap2+"&win="+w;
    $.ajax({
      type: "POST",
      url:"storeVote",
      data: dataString,
      success:
      function(data){
            $( "#vote" ).load( "/vote div#vote" );
         }


    });
    e.preventDefault();

    return false;
  });
})
