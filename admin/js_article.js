$('.article-delete').click(function(){
	id=$(this).attr('id')
	el=$(this)
	$.ajax({
			url: 'req_article.php',
			type: 'POST',
			data: {
				id: id,
				req: 'delarticle'
			},
			success: function(data){
				console. log(data)
				if (data.indexOf('ok')!=-1) {
					el.closest('tr').remove()
				}
			}
		})
})