$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
});

$(document).ready(function(){
	$(document).on("click", '#fw1', function(event) {
			$('#fw1').submit(function(e){
				e.preventDefault();
				var weap1 = $('#w1').val();
				var weap2 = $('#w2').val();
				var w = $('#win').val();
				var token = $('meta[name="csrf-token"]').attr('content');
				var dataString = "weapon1="+weap1+"&weapon2="+weap2+"&win="+w;

				$.ajax({
					type: "POST",
					url:"storeVote",
					data: dataString,
					cache: false,
	        dataType: "html",
					beforeSend: function( xhr ) {
							$('#btn1').attr('disabled',true);
							$('#btn2').attr('disabled',true);
							$('#btn3').attr('disabled',true);
							$('#elo1').css("background-color","#4CAF50");
							$('#elo2').css("background-color","#F44336");
							$('#w1up').show();
							$('#w2up').show();
							setTimeout(function(){ $( "#w1scoreup" ).load( "weapon/"+weap1 );$('#w1scoreup').show();  }, 500);
							setTimeout(function(){ $( "#w2scoredown" ).load( "weapon/"+weap2 );$('#w2scoredown').show();  }, 500);
					},
					success:
					function(data){
						setTimeout(function(){ $( "#vote" ).load( "vote div#vote" ) }, 1500);
						}
				});
				return false;
			});
	});

	$(document).on("click", '#fw2', function(event) {
		$('#fw2').submit(function(e){
			e.preventDefault();
			var weap1 = $('#w12').val();
			var weap2 = $('#w22').val();
			var w = $('#win2').val();
			var token = $('meta[name="csrf-token"]').attr('content');
			var dataString = "weapon1="+weap1+"&weapon2="+weap2+"&win="+w;
			$.ajax({
				type: "POST",
				url:"storeVote",
				data: dataString,
				cache: false,
				dataType: "html",
				beforeSend: function( xhr ) {
					$('#btn1').attr('disabled',true);
					$('#btn2').attr('disabled',true);
					$('#btn3').attr('disabled',true);
					$('#elo2').css("background-color","#4CAF50");
					$('#elo1').css("background-color","#F44336");
					$('#w1up').show();
					$('#w2up').show()
					setTimeout(function(){ $( "#w1scoredown" ).load( "weapon/"+weap1 );$('#w1scoredown').show();  }, 500);
					setTimeout(function(){ $( "#w2scoreup" ).load( "weapon/"+weap2 );$('#w2scoreup').show();  }, 500);
				},
				success:
				function(data){
					setTimeout(function(){ $( "#vote" ).load( "vote div#vote" ) }, 1500);
					}
			});
			return false;
		});
	});

	$(document).on("click", "#fw3", function(event){
		$('#fw3').submit(function(e){
			e.preventDefault();
			var weap1 = $('#w13').val();
			var weap2 = $('#w23').val();
			$('#btn1').attr('disabled',true);
			$('#btn2').attr('disabled',true);
			$('#btn3').attr('disabled',true);
			$('#elo2').css("background-color","#FF9800");
			$('#elo1').css("background-color","#FF9800");
			$('#w1up').show();
			$('#w2up').show()
			setTimeout(function(){ $( "#w1scoredown" ).load( "weapon/"+weap1 );$('#w1scoredown').show();  }, 500);
			setTimeout(function(){ $( "#w2scoreup" ).load( "weapon/"+weap2 );$('#w2scoreup').show();  }, 500);
			setTimeout(function(){ $( "#vote" ).load( "vote div#vote" ) }, 1500);
			return false;
		});
	});
})
