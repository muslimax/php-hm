<? 

// $route = isset($_GET["route"]) ? $_GET["route"] : "home";
$route = $_GET["route"] ?? "home";
$route = is_readable("./page/$route.php") ? $route : "404";

$arrayPages = [
    "home" => ["name"=>"Главная", "icon" => "fal fa-home"],
    "contact" => ["name"=>"Контакты", "icon" => "fal fa-address-book"],
    "table" => ["name"=>"Таблица умножения", "icon" => "fas fa-times"],
    "calc" => ["name"=>"Калькулятор", "icon" => "fas fa-calculator-alt"],
    "slide" => ["name"=>"Слайдер", "icon" => "far fa-presentation"],
    "guest" => ["name"=>"Гостевая книга", "icon" => "fal fa-books"],
    "test" => ["name"=>"Тест", "icon" => "fal fa-vial"],
    "login" => ["name"=>"Вход"],
    "registration" => ["name"=>"Регистрация"]
    
];

$title = $arrayPages[$route]["name"];
date_default_timezone_set("Asia/Tashkent");
$rusMonth = ["", "Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"];
$todayMonth = $rusMonth[date("n")];
$date = date ("Сегодня d $todayMonth Y год");