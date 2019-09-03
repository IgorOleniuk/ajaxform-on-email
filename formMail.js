$(document).ready(function(){
    $("#form").submit(function(e) {
      e.preventDefault() //устанавливаем событие отправки для формы с id=form
               var formData = $(this).serialize(); //собераем все данные из формы
               $.ajax({
               type: 'POST', //Метод отправки
               url: 'handler.php', //путь до php фаила отправителя
               data: formData,
                       success: function(data){ // сoбытиe пoслe удaчнoгo oбрaщeния к сeрвeру и пoлучeния oтвeтa
                       alert('все ок'); // пoкaжeм eё тeкст
                       }
               });
       });
   });
  
