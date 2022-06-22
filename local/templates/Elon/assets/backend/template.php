<?php 

/* VARIABLES(START) */

$to = 'coder.il.sagirov@gmail.com';
$name = $_POST['name'];
$surname = $_POST['surname'];
$contact = $_POST['contact'];
$message = $_POST['message'];

/* VARIABLES(END) */

if($name && $surname && $contact){
    if(is_phone($contact)){
        mail("coder.il.sagirov@gmail.com", "Рассылка", $name . " " . $surname . " хотел бы связаться с вами."  . "\r\nЕго номер: " . $contact  . "\r\nСообщение: " . $message);
        echo 'Письмо полетело';
    } else if(test_mail($contact)){
        if(mail($to, "Рассылка", $name . " " . $surname . " хотел бы связаться с вами." . "\r\nЕго email: " . $contact . "\r\nЕго сообщение: " . $message)){
            echo 'Письмо полетело';
        }
    } else {
        header("HTTP/1.1 500 Email/Tel failed server-side validation.");
    }
} else {
    header("HTTP/1.1 500 First name, Last Name and Phone/Email are required fields.");
}





function test_mail($char) //Валидация 
{
   if (filter_var($char, FILTER_VALIDATE_EMAIL)) return true;
   return false;
}

function is_phone($val) //Валидация телефона
{

    if (!preg_match('/^(\+7|7|8)?[\s\-]?\(?[1-9][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/', $val) && !preg_match('/^(\+?[1-9]{1}?[\s\-]?\(?[0-9]{2,3}\)?[\s\-]?[0-9]{2,3})$/', $val)) {
        return false;
    }

    
    return true;
}
?>