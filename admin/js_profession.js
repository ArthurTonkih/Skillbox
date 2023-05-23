$('.profession-delete').click(function(){
	id=$(this).attr('id')
	el=$(this)
	$.ajax({
			url: 'req_profession.php',
			type: 'POST',
			data: {
				id: id,
				req: 'delprofession'
			},
			success: function(data){
				console. log(data)
				if (data.indexOf('ok')!=-1) {
					el.closest('tr').remove()
				}
			}
		})
})
