$(function () {
  $("#free-call-form").submit(function (e) {
    e.preventDefault();
    var form_data = $(this).serialize();
    $.ajax({
      type: "POST",
      url: "send.php",
      dataType: "json",
      data: form_data
    }).success(function (data) {
        console.log(data);
        alert("Success!");
    }).fail(function (data) {
        console.log(data);
    });
  });
});
