/*$(document).ready(function(){
    $("#form").submit(function() { //устанавливаем событие отправки для формы с id=form
            var form_data = $(this).serialize(); //собераем все данные из формы
            $.ajax({
            type: "POST", //Метод отправки
            url: "send.php", //путь до php фаила отправителя
            data: form_data,
            success: function() {
                   //код в этом блоке выполняется при успешной отправке сообщения
                   alert("Ваше сообщение отпрвлено!");
            });
    });
});*/
$(function () {
  $("#free-call-form").submit(function (e) {
    e.preventDefault();
    var form_data = $(this).serialize();
    $.ajax({
      type: "POST",
      url: "send.php",
      dataType: "json", // Add datatype
      data: form_data
    }).done(function (data) {
        console.log(data);
        alert("It OK!");
    }).fail(function (data) {
        console.log(data);
    });
  });
});
