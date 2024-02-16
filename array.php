<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Arrays</title>
</head>
<style>
    a{
    text-decoration: none;
    color: #073857;
}
    .conteudo{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    height: 450px;
    width: 100%;
    position: relative;
}
.box{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 450px;
    width: 80%;
    display: flex;
    flex-direction: column;
    z-index: 5;
}
    .form{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 70%;
        height: 200px;
        margin: 10px auto;
    }
    input{
        position: relative;
        top: 10px;
        width: 80%;
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
    .button{
        position: relative;
        top: 15px;
        width: 80%;
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
    .formularios{
        width: 50%;
        height: 150px;
        position: relative;
        display: flex;
        flex-direction: row;
        align-items: start;
        justify-content: start;
        z-index:4;
    }
    .array{
        width: 90%;
        height: 200px;
        position: relative;
        bottom: 20px;
        display: flex;
        flex-direction: row;
        align-items: start;
        justify-content: start;
        z-index:3;
    }
    .nome{
        font-weight: bold;
        font-size: 18px;
        color: #073857; 
    }
    .nomes{
        width:100%;
        margin: 10px auto;
    }ul{
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
        <h1>Arrays simples e associativos</h1>
        <div class="box">
            <div class="conteudo">
                <div class="formularios">
                    <form class="form" action="" method="post">
                        <h2>Adicione um nome</h2>
                        <input type="text" id='nome' name='nome'>
                        <input class="button" type="submit" name="button" value="Adicionar">
                    </form>
                </div>
                <div class="formularios">
                    <form class="form" action="" method="get">
                        <h2>Exclua um nome [0 a 4]</h2>
                        <input type="number" id='indice' name='indice'>
                        <input class="button2" type="submit" name="button2" value="Excluir">
                    </form>
                </div>
            </div>
            <div class="array">
                
                <div class="nomes">
                <h2>Impressão do Array</h2>
                    <?php
                    
                    $nomes = array('Carlos', 'Ana', 'Rodolfo', 'Paulo');

                    if(isset($_POST['button']) && isset($_POST['nome'])) {
                        $novo_nome = $_POST['nome'];
                        array_push($nomes, "$novo_nome");
                    }
                    foreach ($nomes as $nome) {
                        echo "<div class='nome'>$nome</div>";
                    }
                    ?>
                </div>
                <div class="nomes">
                <h2>Array sem um nome</h2>
                    <?php 
                    if(isset($_GET['button2']) && isset($_GET['indice'])) {
                        $number = $_GET["indice"];
                        unset($nomes[$number]); 
                        foreach ($nomes as $nome) {
                            echo "<div class='nome'>$nome</div>";
                        }
                    }
                    ?>
                </div>
            </div>
            
        </div>
       
    </main>
</body>
</html>