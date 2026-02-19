<?php
//manejo de formularios en php
//dos metodos de enviar formularios HTML a un script PHP:
//1. GET: los datos se envian a traves de la URL, es visible para el usuario, no es seguro para enviar informacion sensible, tiene un limite de caracteres (2048 caracteres).
    //ventajas del metodo GET:
        //1. Es facil de usar y entender, ya que los datos se envian a traves de la URL, lo que facilita la depuracion y el seguimiento de los datos enviados.
         //2. Es adecuado para enviar datos no sensibles, como busquedas o filtros, ya que los datos son visibles para el usuario y pueden ser compartidos facilmente a traves de la URL.
        //3. Es compatible con la mayoria de los navegadores y servidores web, lo que lo hace una opcion popular para enviar formularios HTML.
    //desventajas del metodo GET:
        //1. No es seguro para enviar informacion sensible, ya que los datos son visibles para el usuario y pueden ser interceptados por terceros, lo que puede comprometer la seguridad de la informacion.
        //2. Tiene un limite de caracteres (2048 caracteres), lo que puede ser insuficiente para enviar grandes cantidades de datos, como archivos o formularios complejos, lo que puede limitar su uso en ciertas situaciones.
    //caracteristicas del metodo GET:
        //1. Los datos se envian a traves de la URL, lo que los hace visibles para el usuario y facilita la depuracion y el seguimiento de los datos enviados.
        //2. No es seguro para enviar informacion sensible, ya que los datos pueden ser interceptados por terceros, lo que puede comprometer la seguridad de la informacion.
        //3. Tiene un limite de caracteres (2048 caracteres), lo que puede ser insuficiente para enviar grandes cantidades de datos, como archivos o formularios complejos, lo que puede limitar su uso en ciertas situaciones.
    //cuando usarlo:
        //1. Para enviar datos no sensibles, como busquedas o filtros, donde la visibilidad de los datos no representa un riesgo de seguridad.
        //2. Para enviar datos que no superen el limite de caracteres (2048 caracteres), como formularios simples o consultas de busqueda.
        //3. Para enviar datos que se beneficien de la visibilidad en la URL, como enlaces compartidos o marcadores, donde la facilidad de uso y la depuracion son importantes.
    //ejemplo:
        //formulario HTML:
        /*
        <form action="procesar_formulario.php" method="GET">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
            <input type="submit" value="Enviar">
        </form>
        //script PHP (procesar_formulario.php):
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $nombre = $_GET["nombre"];
            echo "Hola, " . htmlspecialchars($nombre) . "!";
        }
            ?>
        */
//2. POST: los datos se envian a traves del cuerpo de la solicitud HTTP, no es visible para el usuario, es seguro para enviar informacion sensible, no tiene limite de caracteres.
    //ventajas del metodo POST:
        //1. Es seguro para enviar informacion sensible, ya que los datos se envian a traves del cuerpo de la solicitud HTTP, lo que los hace invisibles para el usuario y dificulta su interceptacion por terceros, lo que mejora la seguridad de la informacion.
        //2. No tiene limite de caracteres, lo que permite enviar grandes cantidades de datos, como archivos o formularios complejos, lo que lo hace adecuado para situaciones donde se requiere enviar una gran cantidad de informacion.
        //3. Es compatible con la mayoria de los navegadores y servidores web, lo que lo hace una opcion popular para enviar formularios HTML.
    //desventajas del metodo POST:
        //1. No es tan facil de usar y entender como el metodo GET, ya que los datos se envian a traves del cuerpo de la solicitud HTTP, lo que puede dificultar la depuracion y el seguimiento de los datos enviados.
        //2. No es adecuado para enviar datos no sensibles, como busquedas o filtros, ya que los datos son invisibles para el usuario y no pueden ser compartidos facilmente a traves de la URL.
    //caracteristicas del metodo POST:
        //1. Los datos se envian a traves del cuerpo de la solicitud HTTP, lo que los hace invisibles para el usuario y mejora la seguridad de la informacion.
        //2. No tiene limite de caracteres, lo que permite enviar grandes cantidades de datos, como archivos o formularios complejos, lo que lo hace adecuado para situaciones donde se requiere enviar una gran cantidad de informacion.
    //cuando usarlo:
        //1. Para enviar informacion sensible, como contrasenas o datos personales, donde la seguridad es una preocupacion importante.
        //2. Para enviar grandes cantidades de datos, como archivos o formularios complejos, donde el limite de caracteres del metodo GET puede ser insuficiente.
        //3. Para enviar datos que no necesitan ser visibles en la URL, como formularios de contacto o registros de usuarios, donde la privacidad y la seguridad son prioritarias.
    //ejemplo:
        //formulario HTML:
        /*
        <form action="procesar_formulario.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
            <input type="submit" value="Enviar">
        </form>
        */
        //script PHP (procesar_formulario.php):
        /*
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];
            echo "Hola, " . htmlspecialchars($nombre) . "!";
        }
        ?>
        */