<?php
echo "<span style=\"font-size: 18px;\"><b>INFO:</span><br></b>";
// Nome do servidor
$serverName = gethostname();
echo "Container Name:<b> $serverName\n</b><br>";  

// IP do servidor
$serverIP = gethostbyname($serverName);
echo "Container IP:<b> $serverIP\n</b><br>";

// IP do cliente
$clientIP = $_SERVER['REMOTE_ADDR'];
echo "Client IP:<b> $clientIP\n</b><br>";

// User agent do cliente
$userAgent = $_SERVER['HTTP_USER_AGENT'];
echo "User agent:<b> $userAgent\n</b><br>";

// Consulta o serviço de geolocalização (exemplo usando ip-api.com)
$geoIPUrl = "http://ip-api.com/json/$clientIP";
$geoIPData = file_get_contents($geoIPUrl);
$geoIPInfo = json_decode($geoIPData, true);

if ($geoIPInfo && $geoIPInfo['status'] == 'success') {
    $country = $geoIPInfo['country'];
    echo "Origin Country: <b>$country\n</b><br>";
} else {
    echo "Sorry. Does not possible to find geolocation info.\n</b><br>";
}

// Verifica se o user agent contém informações sobre o sistema operacional
if (strpos($userAgent, 'Windows') !== false) {
    echo "Operarion System: <b>Windows\n</b><br>";
} elseif (strpos($userAgent, 'Mac') !== false) {
    echo "Operarion System: <b>macOS\n</b><br>";
} elseif (strpos($userAgent, 'Linux') !== false) {
    echo "Operarion System: <b>Linux\n</b><br>";
} else {
    echo "Operarion System not identified\n";
}

// Obtém o nome do servidor web
$webServer = $_SERVER['SERVER_SOFTWARE'];

// Obtém a versão do PHP
$phpVersion = phpversion();

// Exibe as informações
echo "Webserver:<b> $webServer\n</b><br>";
echo "PHP Version:<b> $phpVersion</b><br>\n";
?>
