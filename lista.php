<style>
      body{
             background-image: url(../WW/chuva.jpg);
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
      }
      div{
        background-color: rgba(0, 0, 0, 0.7);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        padding: 80px;
        border-radius: 15px;
        color: white;
      }
       
      input{
        padding: 15px;
        border: none;
        outline: none;
        font-size: 15px;
      }
      a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4f0d15;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        a:hover {
            background-color: #8b0000;
        }
    </style>
<body>
    <div>
<?php
include("conexao.php");


$query = "SELECT nome FROM login";
$resultado = mysqli_query($conexao, $query);

if ($resultado) {
    
    echo "<h1>Lista de Usuários Cadastrados</h1>";
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<li>" . $row['nome'] . "</li>";
    }
    echo "</ul>"; 
    echo '<a href="index.php">Voltar</a>' ;
} else {
    echo "Erro ao recuperar os usuários cadastrados.";
}

mysqli_close($conexao);
?>
</div>
</body>
