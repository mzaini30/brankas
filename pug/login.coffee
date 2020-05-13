$(".login").on "submit", (x) ->
  x.preventDefault()
  $.get "/api/cek-password.php?username=#{$(".nama").val()}&password=#{$(".password").val()}", (data) ->
    if data is 0
      $(".info").removeClass("sembunyi")
    else
      location.href = "/login/proses.php?username=#{$(".nama").val()}&password=#{$(".password").val()}"