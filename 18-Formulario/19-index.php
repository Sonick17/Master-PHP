<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP y HTMl</title>
</head>
<body>


    <h1>Formulario</h1>
    <form action="" metho="POST" enctype = "multipart/form-data">
    
        <label for="nombre">Nombre</label>
        <p><input type="text" name="nombre" ></p>
        
        <label for="apellido">Apellido</label>
        <p><input type="text" name="Apellido" ></p>

        <label for="sexo">Sexo</label>
        <p>
            <input type="checkbox" name="sexo" value="hombre" checked>Hombre
            <input type="checkbox" name="sexo" value="mujer">Mujer
        </p>

        <label for="color">Color</label>
        <p><input type="color" name="color" ></p>

        <label for="date">Date</label>
        <p><input type="date" name="date" ></p>

        <label for="email">Email</label>
        <p><input type="email" name="email" ></p>

        <label for="File">Archivo:</label>
        <p><input type="file" name="file" multiple="multiple" ></p>

        <label for="hidden">Hidden</label>
        <p><input type="hidden" name="hidden" ></p>

        <label for="numero">Numero</label>
        <p><input type="number" name="numero" ></p>
        
        <label for="pass">Contraseña</label>
        <p><input type="password" name="pass" ></p>
        
        <label for="continente">Numero</label>
        <p>
            Asia <input type="radio" name="contienente" value ="Asia" checked >
            Europa <input type="radio" name="contienente" value ="Europa" >
            America <input type="radio" name="contienente" value ="America Latina" >
            Oceania <input type="radio" name="contienente" value ="Oceania" >
        </p>

        <label for="web">Contraseña</label>
        <p><input type="url" name="web" ></p>

        <textarea name="" id="" cols="30" rows="10"></textarea>

        <label for="peli">Peliculas</label>
        <select name="peli" id="">
            <option value="hombreAraña">Hombre Araña</option>
            <option value="Batman">Batman</option>
            <option value="PaseoRecordar">PaseoRecordar</option>
        </select>

        <br>
        <input type="submit" value = "Enviar">
    </form>
    
</body>
</html>