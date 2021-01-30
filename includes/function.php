<? 

// $route = isset($_GET["route"]) ? $_GET["route"] : "home";
$route = $_GET["route"] ?? "home";
$route = is_readable("./page/$route.php") ? $route : "404";