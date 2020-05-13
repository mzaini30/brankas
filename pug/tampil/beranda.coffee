$(".form-upload").on "submit", (x) ->
	x.preventDefault()
	$.ajax
		url: '/api/upload.php'
		data: @serialize()
		method: 'post'
		contentType: 'multipart/form-data'
		success: ->
			alert('berhasil')