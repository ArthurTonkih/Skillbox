$('.btn-courses').click(function(){
	id_courses = this.id;
	console.log(id_courses);
	$.ajax({
		url: 'save.php',
		type: 'POST',
		data: {
            id_courses: id_courses
				},
		success:function (data) {
			console.log(data)
			if (data=='ok'){
				let n = parseInt($('.number-courses').text())
				n++
				$('.number-courses').text(n)
					}
			else{ console.log('Данные не сохранены') }
		}
	});
})