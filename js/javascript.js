jQuery(document).ready(function($) {
	// console.log($(this));
	$('.file').bind('click', function(event) {
		var test = $(this).innerText;
		$('.selected').removeClass('selected').removeClass('red');
		$(this).addClass('selected').addClass('red');
		var file = $('#dir')[0].innerHTML + $('.selected')[0].innerHTML;
		var filename = $('.selected')[0].innerHTML;
		console.log(file, filename);
		// console.log($(this));
		console.log(test);
		$.post(
			'parser.php',
			{'file':file,'filename':$('.selected')[0].innerHTML},
			edit,
			'html'
		);
	});

	$('.folder').on('click', function(event) {
		currentDir = $('#dir')[0].innerHTML;
		var folder = $(this)[0].innerHTML;
		folderArray = folder.split(" ");
		folder = folderArray[1];
		if (folderArray.length > 2) {
			for (var i = 2; i <= folderArray.length - 1; i++) {
				folder += " " + folderArray[i];
			};
		};
		// console.log(currentDir + folder);

		$.post(
			'repository.php',
			{'dir':currentDir + folder},
			folders,
			'html'
		);
	});

	$('.root').on('click', function(event){
		console.log('back to root');
	});

	function edit(data){
		$('.edit').html(data);
		$(document).attr('title', $('.selected')[0].innerHTML+" - Live Editor"); //change page title
		// console.log(data);
	}
	function folders(data){
		$('.repository').html(data);
		// console.log(data);
	}
});