<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Estruturas condicionais e de repetição</title>
</head>
<style>
    *{
    max-width: 100vw!important;
    }
.conteudo{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    height: 1350px;
    width: 80%;
    position: relative;
}
.box{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 1350px;
    width: 60%;
    display: flex;
    flex-direction: column;
    z-index: 5;
}
h2{
    color: #073857;
    z-index: 5;
    position: relative;
    top:10px;
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
    height: 1350px;
    z-index: 3;
    background: linear-gradient(to left, #c0eaf1, #23abe0);
    display: flex;
    align-items: center;
    justify-content: center;
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
    z-index: 4;
}
.numeros {
    width: 50px;
    height: 50px; 
    border: 1px solid #073857;
    color: #073857;
    font-weight: bold;
    margin: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 2;
    position: relative;
    left: 30px;
}
.numeros2 {
    width: 50px;
    height: 50px; 
    color: #073857;
    font-weight: bold;
    margin: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 2;
    position: relative;
    right: 30px;
}
.ge{
    color: #073857;
    font-size: 45px;
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
    <h1>Estruturas condicionais e de repetição</h1>
        <div class="box">
        <h2>Imprimindo números de 1 a 100</h2>
            <div class="conteudo">
            <?php 
            for ($i= 1; $i < 101; $i++){
                echo "<br><div class='numeros'><span class='material-symbols-outlined ge'>
                fullscreen</div>";
                echo "<br><div class='numeros2'>$i</div>";
            }
            ?>
            </div>
        </div>
    </main>
</body>
</html>
