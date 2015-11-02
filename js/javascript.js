jQuery(document).ready(function($) {
	$('.folder').on('click', function () {
		console.log("folder");
	});
	$('.file').bind('click', function(event) {
		var test = $(this).innerText;
		$('.selected').removeClass('selected').removeClass('red');
		$(this).addClass('selected').addClass('red');
		var file = $('#dir')[0].innerHTML + $('.selected')[0].innerHTML;
		console.log(file);
		// console.log($(this));
		// console.log(test);
		$.post(
			'parser.php', // La ressource ciblée
			{'file':file,'filename':$('.selected')[0].innerHTML},
			edit,
			'html'
			// datatype : 'html',
			// success: function(resp) {
			// 	// alert("success");
			// },
			// error: function() {
			// 	// alert("error");
			// },
			// complete : function(resultat, statut){
			// 	// alert("complete");
			// }
		);
	});

	function edit(data){
		// alert("test");
		$('.edit').html(data);
		console.log(data);	
	}
});