<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>API</title>
</head>
<style>
h2{
    color: #073857;
}
h1{
    margin: 10px auto;
    color: #073857;
}
a{
    text-decoration: none;
    color: #073857;
}
body{
    display:flex;
    flex-direction: column;
    display: flex;
    justify-content: start;
    align-items: start;
}
main{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    width: 100%;
    min-height: 600px;
    background: linear-gradient(to left, #c0eaf1, #23abe0);
}
ul{
    display: flex;
    flex-direction: row;
    margin: 10px;
}
li{
    list-style: none;
    margin: 5px;
    font-weight: bold;
}
.material-symbols-outlined{
    color: #073857;
}
nav{
    background: linear-gradient(to right, #0caae9, #23abe0);
    width: 100%;
    height: 50px;
    display: flex;
    align-items: center;
}
p{
        font-weight: bold;
        font-size: 18px;
        color: #073857;
}

</style>
<body>
    <nav>
        <ul>
            <li><span class="material-symbols-outlined">code</span></li>
            <li><a href="estruturas.php">Estruturas</a></li>
            <li><a href="array.php">Arrays</a></li>
            <li><a href="funcoes.php">Funções</a></li>
            <li><a href="index.php">Banco de Dados</a></li>
            <li><a href="pdo.php">PDO</a></li>
            <li><a href="api.php">API</a></li>
        </ul>
    </nav>
    <main>
        <h1>Consumindo API</h1>
        <div class="conteudo">
            <?php
                function api(){

                    $url = "https://www.canalti.com.br/api/pokemons.json";
                    $pokemons = json_decode(file_get_contents($url));

                    foreach($pokemons->pokemon as $postar){
                        print_r("<br><p>ID: $postar->id</p>");
                        print_r("<br><p>Nome: $postar->name</p>");
                        print_r("<br><p><img src= $postar->img /><hr></p>");
                    }
                }
                $resultado = api();
                return $resultado;
            ?>
        </div>
            
    </main>
</body>
</html>

