<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Singleton</h1>
    <hr>
	<h2>Problema a resolver</h2>
	<p>
	O padrão Singleton prega a ideia da instância única, onde quando você tenta criar uma instância da sua classe, essa classe deve verificar a existência da instância para que se a instância não existir, criar uma nova, e caso contrário retornar a mesma instância sem criar uma nova, garantindo assim menor consumo de memória e um único ponto de acesso global para esse recurso.
    </p>
    <hr>
	<h2>Teste</h2>
    <p> Resultado query (show databases):
    <?php
    include_once 'Conexao.php';
 
    $conn = Conexao::getInstance();
 
    $sql = 'show databases';
 
    $stmt = $conn->query($sql);
    $result = $stmt->fetch();

    echo( $result["Database"] );
?>
    </p>
</body>
</html>
