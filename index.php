<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Agencia de viajes</title>
</head>

<body>

  <?php
  include "includes/arriba.php"
  ?>


  <div class="foto">

    <div class="fomu">
      <form id="form1" action="">
        <input class="campos" type="text" name="" id="" placeholder="Origen">
        <input class="campos" type="text" name="" id="" placeholder="Destino">
        <select class="campos" name="" id="">
          <option selected value="">Adultos</option>
          <option value="1">Ninguno</option>
          <option value="1">1 adulto</option>
          <option value="1">2 adulto</option>
          <option value="1">3 adultos o mas</option>
        </select>
        <select class="campos" name="" id="">
          <option selected value="">Niños</option>
          <option value="1">Ninguno</option>
          <option value="1">1 Niño</option>
          <option value="1">2 Niños</option>
          <option value="1">3 Niños o mas</option>
        </select>
        <input class="campos" type="date" name="" placeholder="Fecha" id="">
        <input class="btn" type="button" value="Buscar">
      </form>
    </div>

    <div class="text">
      <h1>Turismo, reservar hoteles y viajes.</h1>
      <h2>Guías turísticas gratis e información para viajar.</h2>
    </div>
  </div>

  <div class="informacion">

    <div class="tit">
      <h1>Todo lo que buscas</h1>
      <hr>
    </div>


    <div class="contenido">

      <div class="ima">
        <img src="img/vuelo-en-avion.png" alt="">
      </div>

      <div class="titulo">
        <h2>Viajes y vuelos</h2>
      </div>

      <div class="info">
        <p> Si, como lo lees, con nosotros vas a poder hacer tu reserva y tener toda la información para que tus viajes sean baratos. </p>
        <br>
        <p> Trabajamos con las mejores compañías aéreas, con nuestro buscador de vuelos, podrás reservar vuelos baratos a varios lugares del mundo y de igual manera poder viajar con una diversidad de aerolineas.</p>
        <br>
        <p> Gracias a las nuevas tecnologías y sistemas de reservas online podemos reducir el coste de tu viaje para que puedas viajar por poco.
        </p>
      </div>

      <div class="mas">
        <a href="#">Leer Mas...</a>
      </div>

    </div>

    <div class="contenido">
      <div class="ima">
        <img src="img/signo-del-hotel.png" alt="">
      </div>

      <div class="titulo">
        <h2>Hoteles</h2>
      </div>

      <div class="info">
        <p> En cada destino de nuestra agencia de viajes vas a encontrar la mejor selección de hoteles baratos para que puedas reservar online.</p>
        <br>
        <p><span class="negritas">¿Quién dice que hoteles baratos no significa que sean de calidad?</span></p>
        <br>
        <p>La oferta turística de muchas ciudades ha crecido mucho a lo largo de estos años y ahora es fácil reservar un hotel lowcost, en una zona totalmente céntrica o en la misma playa. Nosotros hemos buscado esos hoteles y te los ofrecemos para ti en nuestro portal de viajes, resérvalos con los mejores precios.</p>
      </div>

      <div class="mas">
        <a href="#">Leer Mas...</a>
      </div>
    </div>

    <div class="contenido">
      <div class="ima">
        <img src="img/guia-turistico.png" alt="">
      </div>


      <div class="titulo">
        <h2>Guías turísticas</h2>
      </div>

      <div class="info">
        <p> Nuestra página web de viajes tiene todo lo que necesitas para pensar tu próximo destino vacacional.</p>
        <br>
        <p>Dentro de cada guía están las cosas más importantes qué hacer y qué ver como monumentos, museos, o lugares emblemáticos. También tienes una guía gastronómica o información de interés para viajeros.</p>
      </div>

      <div class="mas">
        <a href="#">Leer Mas...</a>
      </div>
    </div>
  </div>

  <div class="gal">

    <div class="tit">
      <h1>¿A que pais te gustaria viajar?</h1>
      <hr>
    </div>

    <div class="g">
      <p>Te proponemos países para tu viaje, ahora solo elige cuál te llama más la atención y ¡reserva tu viaje!</p>
      <br>

      <ol class="lista">
        <li>Italia</li>
        <li>Egipto</li>
        <li>Escocia</li>
        <li>India</li>
        <li>Tailandia</li>
        <li>Colombia</li>
        <li>Marruecos</li>
        <li>Japón</li>
        <li>Sudáfrica</li>
        <li>México</li>
      </ol>
      <br><br>
      <p>Aunque cabe mencionar que en nuestra pagina podra encontrar vijes para cualquier ocacion y para el pais o lugar que desee visitar.</p>


    </div>

    <div class="g">
      <div class="galeria">
        <input class="estilo" type="radio" name="navegacion" id="_1" checked>
        <input class="estilo" type="radio" name="navegacion" id="_2">
        <input class="estilo" type="radio" name="navegacion" id="_3">
        <input class="estilo" type="radio" name="navegacion" id="_4">
        <input class="estilo" type="radio" name="navegacion" id="_2">
        <input class="estilo" type="radio" name="navegacion" id="_6">
        <input class="estilo" type="radio" name="navegacion" id="_7">
        <input class="estilo" type="radio" name="navegacion" id="_8">
        <input class="estilo" type="radio" name="navegacion" id="_9">
        <input class="estilo" type="radio" name="navegacion" id="_10">


        <img class="fotogal" src="img/colombia.jpg" alt="Galeria CSS 1" />

        <img class="fotogal" src="img/egipto.jpg" alt="Galeria CSS 2" />

        <img class="fotogal" src="img/india.jpg" alt="Galeria CSS 3" />

        <img class="fotogal" src="img/italia.jpg" alt="Galeria CSS 4" />

        <img class="fotogal" src="img/japon.jpg" alt="Galeria CSS 5" />

        <img class="fotogal" src="img/marruecos.jpg" alt="Galeria CSS 6" />

        <img class="fotogal" src="img/mexico.jpg" alt="Galeria CSS 7" />

        <img class="fotogal" src="img/sudafrica.jpg" alt="Galeria CSS 8" />

        <img class="fotogal" src="img/tailandia.jpg" alt="Galeria CSS 9" />

        <img class="fotogal" src="img/Escocia.jpg" alt="Galeria CSS 10" />
      </div>
    </div>


    <div id="inline-gallery-container" class="inline-gallery-container"></div>

  </div>

  <div class="ok">
    <div class="tit">
      <h1>¡Encuentra Paquetes de Viajes al mejor precio!</h1>
      <hr>
    </div>

    <div class="preguntas">
      <div class="uno">
        <p><span class="negritas">¿Cómo elegir los mejores paquetes de viajes en Internet?</span></p>
        <br>
        <p>Pensar en los posibles destinos, las atracciones, los vuelos y demás puedes ser una experiencia abrumante. Por ello, te ofrecemos la opción de diseñar tus paquetes de viajes sin tanta complicación.</p>
        <br>
        <p>Conocer que es lo que estás comprando te ayudará a planear mejor tus vacaciones, ahorrar un poco de dinero y saber cuáles servicios adicionales tienes que contratar.</p>
      </div>

      <div class="uno">
        <p><span class="negritas">¿Qué incluye un paquete de viaje?</span></p>
        <br>
        <p>Un paquete vacacional puede incluir dos o más de los siguientes servicios: Hospedaje, Vuelos, Traslados de aeropuerto y tours. </p>
      </div>

      <div class="uno">
        <p><span class="negritas">¿Qué es un Paquete Todo Incluido?</span></p>
        <br>
        <p>Los paquetes todo incluido se refieren a que incluyen un hotel que cuenta con un plan de alimentos todo incluido y aunque varía de un hotel a otro, usualmente además del vuelo; incluye las comidas y bebidas en los restaurantes del hotel durante todo el día. Es importante que verifiques todo lo que ofrece cada hotel en su servicio todo incluido, para tomar la decisión más acertada.</p>
      </div>
    </div>


  </div>

  <div class="pago">
    <a href="#"><img src="img/pago.jpg" alt=""></a>
  </div>

  <?php
  include "includes/abajo.php"
  ?>
</body>


</html>