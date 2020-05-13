$(".form-upload").on "submit", (x) ->
	x.preventDefault()
	$.post "/api/upload.php", $(@).serialize(), (data) ->
		alert(data)