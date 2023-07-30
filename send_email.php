<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем значение выбранной радио кнопки
    $selectedOption = isset($_POST["radioOption"]) ? $_POST["radioOption"] : "Не выбрано";

    // Ваш адрес электронной почты, на который нужно отправить выбранное значение радио кнопки
    $to = "starshova1309@gmail.com";

    // Тема письма
    $subject = "Выбранное значение радио кнопки";

    // Текст письма
    $message = "Выбранное значение радио кнопки: " . $selectedOption;

    // Дополнительные заголовки письма
    $headers = "From: sender@example.com" . "\r\n" .
               "Reply-To: sender@example.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Отправляем письмо
    if (mail($to, $subject, $message, $headers)) {
        echo "Письмо успешно отправлено!";
    } else {
        echo "Ошибка при отправке письма.";
    }
}
?>

