<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Funções</title>
</head>
<style>
.conteudo{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.box{
    display: flex;
    align-items: center;
    width: 60%;
}
.form{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 200px;
    margin: 10px auto;
}
input{
    position: relative;
    top: 10px;
    width: 50%;
    height: 30px;
    border-radius: 5px;
    background-color: #fff;
    border: 2px solid white;
    margin: 10px;
    font-weight: bold;
    font-size: 18px;
    color: #073857;
    text-align: center;
}
input:focus{
    outline-color: #379ddd;
}
button{
    position: relative;
    top: 15px;
    width: 50%;
    height: 30px;
    border-radius: 5px;
    background-color: #fff;
    border: 2px solid white;
    font-weight: bold;
    font-size: 18px;
    color: #073857;
}
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
    height: 600px;
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