<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Banco de dados</title>
</head>
<style>
.conteudo{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: #050035;
    width: 60%;
    height: 500px;
    border-radius: 15px;
}
.form{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 60%;
    height: 400px;
    margin: 10px auto;
}
input{
    position: relative;
    width: 100%;
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
    width: 100%;
    height: 30px;
    border-radius: 5px;
    background-color: #fff;
    border: 2px solid white;
    font-weight: bold;
    font-size: 18px;
    color: #050035;
}
h2{
    color: #fff;
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
div.usuarios{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: start;
    background: #050035;
    width: 60%;
    min-height: 500px;
    border-radius: 15px;
    margin: 10px auto;
    color: white;
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
<?php
include 'conectDB.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
    } else {
        echo "";
    }

?>
    <main>
        <h1>Conectando ao Banco de Dados</h1>
            <div class="conteudo">
                <form class="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <h2>Digite Seu Nome</h2>
                        <input type="text" name="nome"><br>
                    <h2>Digite Seu Email</h2>
                        <input type="text" name="email"><br>
                    <h2>Digite Sua Senha</h2> 
                        <input type="password" name="senha"><br>
                    <button type="submit" value="Enviar">Enviar</button>
                </form>
            </div>
    </main>
    <div class="usuarios">
        <br>
        <br>
    <h2>Formulário de Novo Usuário</h2>
    <br>
            <?php
            $sql = "SELECT id, nome, email FROM usuarios";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<h2>Usuários Registrados:</h2>";
                echo "<br>";
                while($row = $result->fetch_assoc()) {
                    echo "<h3>* ID: " . $row["id"]. " - Nome: " . $row["nome"]. " - Email: " . $row["email"]. "<br></h3>";
                }
            } else {
                echo "Nenhum resultado encontrado";
            }
            $conn->close();
            ?>
    </div>
    
</body>

</html>
