<?php
// Ваш API-ключ
$apiKey = "b8eb9a80346dc7f46f5a01aa21b6a094";

// Получаем ID города из запроса
$cityId = $_GET['city_id'];

// Формируем URL для запроса к API OpenWeatherMap
$url = "http://api.openweathermap.org/data/2.5/weather?id={$cityId}&units=metric&lang=ru&appid={$apiKey}";

// Выполняем запрос к API
$response = file_get_contents($url);

// Возвращаем ответ в формате JSON
echo $response;
?>
