<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form action="resultado.php" method="post">
        <select name="operador">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select><br />
        Ingresa tu primer número:<br />
        <input type="text" name="valor1"><br />
        Ingresa tu segundo valor:<br />
        <input type="text" name="valor2"><br>
        <input type="reset" value="Borrar">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
    
