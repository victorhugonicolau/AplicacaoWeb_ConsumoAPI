<?php

$cidade = $_GET['cidade'] ?? '';

if (empty($cidade)) {
    echo "<h3>Digite uma cidade válida!</h3>";
    echo "<a href='index.php'>Voltar</a>";
    exit;
}

$url = "https://wttr.in/" . urlencode($cidade) . "?format=j1";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resposta = curl_exec($ch);


if ($resposta === false) {
    echo "<h3>Erro ao conectar com o servidor de clima.</h3>";
    echo "<a href='index.php'>Voltar</a>";
    curl_close($ch);
    exit;
}

curl_close($ch);

$dados = json_decode($resposta, true);


if (!$dados || !isset($dados["current_condition"][0])) {
    echo "<h3>Erro ao obter dados do clima. Verifique a cidade.</h3>";
    echo "<a href='index.php'>Voltar</a>";
    exit;
}

$clima = $dados["current_condition"][0];

echo "<h2>Clima em $cidade</h2>";
echo "<hr>";

echo "Temperatura: " . $clima["temp_C"] . "°C<br>";
echo "Sensação térmica: " . $clima["FeelsLikeC"] . "°C<br>";
echo "Clima: " . $clima["weatherDesc"][0]["value"] . "<br>";
echo "Umidade: " . $clima["humidity"] . "%<br>";

echo "<br><br>";
echo "<a href='index.php'>Voltar</a>";

?>