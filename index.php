<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>T05_PPI_JavaScript</title>
    <link rel="stylesheet" href="CSS/css_fuente.css">
</head> 

<body>
<div class="main-wrapper">

    <h id="P01" class="section-title">01.   ¿Qué es JavaScript? </h><br>	
    <p class="summary box-answer">JavaScript es un lenguaje de programación de concatenación de comandos, lenguaje el cual se complementa muy bien con el desarrollo web. Ofreciendo formas de proyección de información más dinámicas, incluyendo interfaces en tiempo real, animaciones y manejo de gráficos. </p>

    <h id="P02" class="section-title">02.	¿Qué hace JavaScript?</h><br>	
    <p class="summary box-answer">JavaScript permite manejar ingresos y egresos de forma más dinámica con el navegador. Permitiendo rivalizar con las aplicaciones de escritorio, esto a través del uso de sockets.  </p>

    <h id="P03" class="section-title">03.	¿Qué es el DOM?</h><br>	
    <p class="summary box-answer">El DOM por sus siglas en ingles “Document Object Model” es una estructura de control usado en el desarrollo web el cual permite estandarizar y representar documentos HTML, XHTML y XML. Este objeto es útil para interactuar de forma dinámica con el entorno visual del usuario.  </p>

    <h id="P04" class="section-title">04.	¿Qué es una API web? </h><br>	
    <p class="summary box-answer">Una Web API es una API la cual puede ser accedida usando protocolos HTML o algún otro lenguaje tipo Web o compatible con este. Permitiendo realizar operaciones de interfaz comunes a nivel local o escritorio a pesar de no ser alojados internamente en estos.  </p>

    <h id="P05" class="section-title">05.	Ejemplo de 5 tipos de API web:</h><br>	
    <p class="summary box-answer"> -Web Audio Api. </p>
    <p class="summary box-answer"> -Web Speech Api.</p>
    <p class="summary box-answer"> -Web Bluetooth Api.</p>
    <p class="summary box-answer"> -Channel Messaging Web Api.</p>
    <p class="summary box-answer"> -Broadcast Channel Api. </p>


    <h id="P06" class="section-title">06.	¿Qué es lo que JavaScript hace en tu página web?</h><br>	
    <p class="summary box-answer"> JavaScript permite interactuar entre los ordenadores que acceden a la página web y esta. Ofreciendo la posibilidad de crear aspectos interactivos a tiempo real o semi real dentro de ella.</p>

    <h id="P07" class="section-title">07.	Menciona un ejemplo de como añadir JavaScript a tu pagina web</h><br>	
    <p class="summary box-answer">Una forma de añadir JavaScript es de manera directa dentro del HTML usando la etiqueta &ltscript&gt&lt/script&gt un ejemplo siendo el siguiente: </p>
    <p class="summary box-answer">
    &ltscript type="text/javascript"&gt<br>
        alert("This alert box was called with the onload event");<br>
    &lt/script&gt<br>
    </p>

    <h id="P08" class="section-title">08.	¿Cuáles son las dos maneras de añadir código JavaScript a tu página?</h><br>	
    <p class="summary box-answer"> Una es a través de inyección directa dentro del código HTML usando las etiquetas &ltscript&gt&lt/script&gt , la otra, haciendo referencia a este desde otro archivo.</p>

    <h id="P09" class="section-title">09.	¿Cómo se comenta el código JavaScript?</h><br>	
    <p class="summary box-answer"> Existen dos formas de comentar, la de una sola línea la cual consiste en poner “//” antes de cualquier comentario (//Ejemplo) y la forma de párrafo la cual inicia con “/*” y termina con “*/”.<br> 
        (/* Ejemplo<br>
        Ejemplo*/)<br>
        </p>

    <h id="P10" class="section-title">10.	¿Cómo se declara una variable y cuales son sus principales características?</h><br>	
    <p class="summary box-answer"> Una variable en el lenguaje JavaScript es sensible a los casos de mayúscula y minúscula, aparte de poder ser nombrada usando caracteres del espectro UTF-8. Son escaneadas de izquierda a derecha y responden a tres palabras claves las cuales son “var”, “let” y “const”. </p>
    <p class="summary box-answer"> La primera es una variable clásica como se maneja en casi cualquier lenguaje de programación, la segunda corresponde a una variable de tipo local con ámbitos de bloque finalmente la ultima consiste en una variable protegida a solo lectura.</p>
    <p class="summary box-answer">
        Ejemplo de declaración:<br>
        var x = 42
    </p>

    <h id="P11" class="section-title">11.	¿Cómo se declara una condición y cuales son sus principales características?</h><br>	
    <p class="summary box-answer"> El estamento “if” en el lenguaje JavaScript tiende a seguir la siguiente estructura:  </p>
    <p class="summary box-answer"> 
        if (condición) ejecuta código de ser verdadero (true)<br>
        else ejecuta este otro código 
    </p>
    <p class="summary box-answer"> Esta es la estructura de dos líneas, aunque si se busca una estructura más expansiva se suelen usar llaves, como se muestra en el siguiente ejemplo:</p>
    <p class="summary box-answer">
        if (condición) {<br>
            código a ejecutar si la condición es verdadera<br>
          } else {<br>
            ejecuta este otro código si la condición es falsa<br>
          }<br>
    </p>
    <p class="summary box-answer"> En cualquiera de los casos la estructura básica requiere del uso de la palabra reservada “if” seguida de un condicional entre paréntesis, el uso del “else” es opcional, aunque recomendado. También se permite el uso de “ifs” anidados en caso de ser conveniente. </p>


    <h id="P12" class="section-title">12.	¿Cómo se declara un bucle y sus principales características? </h><br>	
    <p class="summary box-answer">Los bucles e iteraciones dentro de JavaScript siguen reglas similares a aquellas que se usan en lenguajes tales como C/C++ o C#.  </p>
    <p class="summary box-answer">La estructura habitual suele ser la de la palabra reservada “while” seguida de una condición entre paréntesis y de una sentencia simple o de varias entre llaves. Las instrucciones se ejecutarán siempre y cuando el condicional sea verdadero. </p>
    <p class="summary box-answer">Ejemplos: </p>
    <p class="summary box-answer"> 
        while (condicion)<br>
            sentencia<br>
    </p>
    <p class="summary box-answer"> 
        while (condicion) {<br>
            sentencia <br>
            sentencia <br>
            }<br>
    </p>


    <h id="P13" class="section-title">13.	¿Cómo se declara una función y cuáles son sus principales características?</h><br>	
    <p class="summary box-answer">Una función usualmente se declara con la palabra clave “function” seguida de su nombre/identificador y entre paréntesis sus parámetros, seguidos de un par de llaves entre los cuales estará las sentencias de la función. </p>
    <p class="summary box-answer">function myFunction(parametro1, parametro2) {<br>
        &emsp;return parametro1 * parametro2;    <br>
      }<br>
       </p>

    <h id="P14" class="section-title">14.	¿Cómo se declara un objeto y cuáles son sus principales características?</h><br>	
    <p class="summary box-answer"> Los objetos del lenguaje JavaScript son una colección de datos los cuales a su vez pueden contener métodos con los cuales interactuar. Su estructura suele ser la palabra clave “const”, seguida de su identificador de objeto tras una asignación seguida de llaves entre las cuales se escribirán sus atributos y métodos. Ejemplo:</p>
    <p class="summary box-answer"> 
    const person = {<br>
        &emsp;firstName: "John",<br>
        &emsp;lastName : "Doe",<br>
        &emsp;id       : 5566,<br>
        &emsp;fullName : function() {<br>
            &emsp;&emsp;return this.firstName + " " + this.lastName;<br>
            &emsp;}<br>
      };
      </p>

    <h id="P15" class="section-title">15.   ¿Cómo se puede leer un evento con JavaScript?</h><br>	
    <p class="summary box-answer"> Un evento web suele poder ser accedido a través de hacer referencia al objeto en el DOM dentro de JS y hacer uso de alguna de las propiedades. Un ejemplo en código:</p>
    <p class="summary box-answer"> 
        const btn = document.querySelector('button');<br>
        function greet(event){<br>
            &emsp;// print the event object to console<br>
            &emsp;console.log('greet:', arguments)<br>
        }<br>
        btn.onclick = greet;<br>
    </p>

    <h id="P16" class="section-title">16.   ¿Qué eventos podemos leer con JavaScript menciónales y descríbalos?</h><br>	
    <p class="summary box-answer"> Los eventos que puede manejar el lenguaje JS son todo slos eventos estándar y un par de aquello son estandarizados manejados por navegadores tales como el MF o Google Chrome. </p>
    <p class="summary box-answer"> Algunos ejemplos de los estandarizados son:</p>
    <p class="summary box-answer"> abort: Que se aborto una transacción</p>
    <p class="summary box-answer"> afterprint: Se ha iniciado una impresión.</p>
    <p class="summary box-answer"> animationend: Una animación del CSS ha terminado.</p>
    <p class="summary box-answer"> animationiteration: Una animación a empezado a repetirse en su X ciclo.</p>
    <p class="summary box-answer"> animationstart: Una animación a empezado.</p>
    <p class="summary box-answer"> click: Un elemento ha sido clickeado.</p>
    <p class="summary box-answer"> close: Un websocket ha sido cerrado.</p>
    <p class="summary box-answer"> Entre muchos otros los cuales se pueden consultar en:</p>
    <a class="summary box-answer" href="https://developer.mozilla.org/es/docs/Web/Events">https://developer.mozilla.org/es/docs/Web/Events</a><br><br>

    <h id="P17" class="section-title">17.   Menciona un ejemplo donde JavaScript sea ejecutado del lado del cliente</h><br>	
    <p class="summary box-answer"> </p>
    <p class="summary box-answer"> Un ejemplo fácil es de guardar datos en el lado cliente en su navegador un ejemplo simple en código es el siguiente: </p>
    <p class="summary box-answer"> 
        localStorage.setItem('name','Chris');<br>
        let myName = localStorage.getItem('name');<br>
        myName<br>
         </p>
    <p class="summary box-answer"> En este ejemplo se recuperaría el registro “Chris”. </p>

    <h id="P18" class="section-title">18.   Menciona un ejemplo donde JavaScript sea ejecutado del lado del servidor:</h><br>	
    <p class="summary box-answer">Un ejemplo de esto es el uso de la base de datos conectada a través de JS para almacenar o recuperar datos de manera rápida. </p>

    <h id="P19" class="section-title">19.   ¿Qué tipo de errores podemos encontrar en JavaScript?</h><br>	
    <p class="summary box-answer">Existen tres tipos de errores comúnmente identificables; </p>
    <p class="summary box-answer">1-Errores de syntaxis: Los cuales se deben a que el interpretador no puede figurar las instrucciones dadas en el código por algún error de escritura en este. </p>
    <p class="summary box-answer">2-Errores de tiempo de ejecución: Los cuales suceden cuando el programa esta siendo ejecutado y se topa con algo lo cual no puede sortear o solucionar.</p>
    <p class="summary box-answer">3-Errores lógicos: Los cuales se deben a que la lógica manejada dentro del algoritmo asignado esta mal, causando comportamiento indebido o puntos muertos. </p>


    <h id="P20" class="section-title">20.   ¿De qué manera podemos ver los errores de JavaScript en el navegador?</h><br>	
    <p class="summary box-answer">Estos errores pueden ser vistos a través de la consola de comandos de los navegadores más famosos. O a través de fallos en la página a la hora de interactuar con ella. Mostrando errores tales como “x función no es valida o no existe.”</p>

    <h id="P21" class="section-title">21.   ¿Cómo puedo convertir Strings a Objetos?</h><br>	
    <p class="summary box-answer">Se tiene el siguiente string:  </p>
    <p class="summary box-answer">'{"name":"John", "age":30, "city":"New York"}' </p>
    <p class="summary box-answer">Se puede usar un analizador gramático enlazado a JSON el cual permite hacer algo como esto: </p>
    <p class="summary box-answer">const obj = JSON.parse('{"name":"John", "age":30, "city":"New York"}'); </p>

    <h id="P22" class="section-title">22.   ¿Cómo se usan los arreglos en JavaScript?</h><br>	
    <p class="summary box-answer">Los arreglos/arrays en JavaScript son usados para guardar información iterativa a nivel navegador. Suelen declarase de la siguiente forma: </p>
    <p class="summary box-answer">let frutas = ["Manzana", "Banana"] </p>
    <p class="summary box-answer">Se puede acceder a los elementos individuales a través de un acceso simple como el siguiente: </p>
    <p class="summary box-answer">let primero = frutas[0] </p>
    <p class="summary box-answer">console.log(primero) </p>


    <h id="P23" class="section-title">23-24 ¿Cuántas versiones de JavaScript/ECMAScript han existido menciona sus principales características?</h><br>	
    <table class="summary box-answer" style="width:100%; border:100px; padding-bottom: 1em;">
        <tr>
          <th>Iniciales: </th>
          <th>Nombre completo: </th>
          <th>Características: </th>
        </tr>
        <tr>
            <td>ES1</td>
            <td>ECMAScript 1 (1997) </td>
            <td>First Edition.</td>
        </tr>
        <tr>
            <td>ES2 </td>
            <td>ECMAScript 2 (1998) </td>
            <td>Editioral changes.</td>
        </tr>
        <tr>
            <td>ES3</td>
            <td>ECMAScript 3 (1999)</td>
            <td>Añadió: Expresiones regulares, try and catch switch y do-while.</td>
        </tr>
        <tr>
            <td>ES4</td>
            <td>ECMAScript 4</td>
            <td>Never released.</td>
        </tr>
        <tr>
            <td>ES5</td>
            <td>ECMAScript 5 (2009) </td>
            <td>Añadió: “strict mode”, soporte JSON, “String.trim()”,Array.isArray() e Iteraciones de arreglos.</td>
        </tr>
        <tr>
            <td>ES6</td>
            <td>ECMAScript 2016</td>
            <td>Añadió el operador exponencial y “Array.prototype.includes”.</td>
        </tr>
        <tr>
            <td>ES6 </td>
            <td>ECMAScript 2017 </td>
            <td>Añadió “string padding”, “Object.entries”, “Object.values”, “async.functions” y “shared memory”.</td>
        </tr>
        <tr>
            <td>ES6</td>
            <td>ECMAScript 2018 </td>
            <td>Añadió “rest / spread properties”, “asynchoroous iteration”, “Promise.finally()” y “RegExp”.</td>
        </tr>
      </table>

    <h id="P24" class="section-title">25.   ¿Qué es Firefox Developer Edition?</h><br>	
    <p class="summary box-answer"> Es una versión del navegador Fire Fox el cual posee una cantidad extra de herramientas para debbugear y desarrollar paginas web o documentos html de manera más rápida y sencilla.</p>

    <h id="P25" class="section-title">26.   ¿Cuáles son las principales funciones y características de Firefox Developer Edition?</h><br>	
    <p class="summary box-answer"> Su funcionalidad de modo desarrollador es más extensiva que aquellas de otros navegadores, permite una visualización rápida de los “grids/mallas” de las fuentes “CSS”, permite la visualización de múltiples consolas y tiene un depurador robusto para auxiliar en el proceso de desarrollo. </p>

    <h id="P26" class="section-title">27.   ¿Qué es WebGL?</h><br>	
    <p class="summary box-answer"> Es una API de desarrollo grafico basada en OpenGL la cual es usada para aplicaciones con uso de gráficos 2D o 3D, siendo estos juegos popularmente.</p>

    <h id="P27" class="section-title">28.   ¿Qué APIs existen para game development?</h><br>	
    <p class="summary box-answer"> WebGL, OpenGL, DirectX, XNA por mencionar algunas.</p>

    <h id="P28" class="section-title">29.   ¿Qué es un WebSocket?</h><br>	
    <p class="summary box-answer"> Un WebSocket es la versión web de los sockets de red, siendo esta característica proporcionada por una API. Esto permite la interacción a través de protocolos tales como el TCP. Pudiendo manejar mensajes entre usuarios y el servidor de manera más efectiva y a tiempo real o semi-real.</p>

    <h id="P29" class="section-title">30.   ¿Cómo gestiona la memoria JavaScript?</h><br>
    <p class="summary box-answer"> De manera automática haciendo uso del Garbagge Collector, este proceso reserva memoria cuando una variable es creada y la libera cuando esta se sale del “scope” o punto de mira en español.</p>

</div>
</body>
