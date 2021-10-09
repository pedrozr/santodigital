<?php
//including the database connection file
include_once("connectionDB.php");


$result = mysqli_query($connection, "SELECT * FROM clientes");
?>

<html>
<head>
	<title>MOSTRAR CLIENTES</title>
    <link rel="stylesheet" href="./styles/home.css"/>
</head>

<body>
    <header>
        <nav>
            <a class="logo" href="./index.php"><img src="./images/TechEducation.png" alt="Logo da empresa"></a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list">
                <li><a href="./index.php">Início</a></li>
                <li><a href="./admin.php">Admistração</a></li>
                <li><a href="./contact.php">Contato</a></li>
                <li><a id="login_li" href="./logout.php">Sair</a></li>
            </ul>
        </nav>
    </header>
	
	<table width='80%' border=0>
		<tr bgcolor='#CCCCCC'>
			<td>Id</td>
			<td>Data de Criação</td>
			<td>Código do Cliente</td>
			<td>Nome do Cliente</td>
			<td>Telefone</td>
		</tr>
		<?php
		while($res = mysqli_fetch_array($result)) {		
			echo "<tr>";
			echo "<td>".$res['id']."</td>";
			echo "<td>".$res['created_at']."</td>";
			echo "<td>".$res['codigo']."</td>";	
			echo "<td>".$res['nome_cliente']."</td>";	
			echo "<td>".$res['telefone_cliente']."</td>";	
            echo "</tr>";
		}
		?>
	</table>	
</body>
</html>