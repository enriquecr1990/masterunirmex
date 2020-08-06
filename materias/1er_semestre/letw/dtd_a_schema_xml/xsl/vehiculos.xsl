<?xml version="1.0" encoding="UTF-8" ?>
<!-- se cargan las etiquetas de html y el atributo xsl para manejar la informacion del XML -->
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <head>
        <!-- se obtiene el nombre dela compañia de la consecionaria -->
        <title>Concecionaria <xsl:value-of select="Concesionaria/attribute::Compania" /> </title>
        <!-- se integra el style css del html (tome el css que se hizo en la actividad anterior de pagina html y css) -->
        <link rel="stylesheet" href="css/vehiculos.css" />
    </head>
    <!-- se pone el fondo del body -->
    <body>
        <!-- cargamos el header del html con el nombre de la compañia que -->
        <header>
            <strong>Concecionaria de autos <xsl:value-of select="Concesionaria/attribute::Compania" /></strong>
        </header>
        <!-- Cargamos la lista de motos y la iteramos para mostralo en la pagina del xml de la etiqueta Concesionaria/ListaVehiculos y lo metemos en una
         tabla de html (como el dicionario del DTD Moto debe existir por lo menos un elemento del nodo motos siempre cargamos la seccion de motos) -->
        <div class="contenedor">
            <fieldset>
                <legend>Motos</legend>
                <table>
                    <tbody>
                        <xsl:for-each select="Concesionaria/ListaVehiculos/Motos/Moto">
                            <tr>
                                <td>
                                    <!-- tomamos la informacion de la imagen de la moto y el id como informacion alt de la imagen -->
                                    <img>
                                        <!-- pasamos los atributos de la imagen como xsl para tomar las variables del xml -->
                                        <xsl:attribute name="src"><xsl:value-of select="Automovil/attribute::Imagen" /></xsl:attribute>
                                        <xsl:attribute name="alt">Moto <xsl:value-of select="attribute::motoID" /></xsl:attribute>
                                    </img>
                                </td>
                                <td>
                                    <!-- cargamos los detalles de la moto con la informacion contenida en el elmento de automovil -->
                                    <strong>Marca: </strong><xsl:value-of select="Automovil/Marca" /><!-- pintamos el valor del Automovil/Marca -->
                                    <br/><strong>Modelo: </strong><xsl:value-of select="Automovil/Modelo" /><!-- pintamos el valor del Automovil/Modelo -->
                                    <xsl:if test="Automovil/Modelo/Anio != ''"><!-- evaluamos si hay valor en anio dentro del modelo, si existe pintamos el valor del Automovil/Marca/Anio -->
                                        <br /> <strong>Año: </strong><xsl:value-of select="Automovil/Modelo/Anio" />
                                    </xsl:if>
                                    <xsl:if test="Automovil/Modelo/Version != ''"><!-- evaluamos si hay valor en anio dentro del modelo, si existe pintamos el valor del Automovil/Marca/Version -->
                                        <br /> <strong>Versión: </strong><xsl:value-of select="Automovil/Modelo/Version" />
                                    </xsl:if>
                                    <br/><strong>Condición: </strong><xsl:value-of select="Automovil/attribute::Condicion" /><!-- cargamos la informacion de la condicion de la moto si es nueva o seminueva, esta es por el atributo de automovil-->
                                    <br/><strong>Transmisión: </strong><xsl:value-of select="Automovil/attribute::Transmision" /><!-- cargamos la informacion de la Transmision de la moto si manual o atuomatica, esta es por el atributo de automovil-->
                                    <br/><strong>Color: </strong><xsl:value-of select="Automovil/Color" /><!-- pintamos el valor del Automovil/Color -->
                                    <br/><strong>Precio: </strong>$<xsl:value-of select="Automovil/Precio" /><!-- pintamos el valor del Automovil/Precio -->
                                    <br/><strong>Kilometraje: </strong><xsl:value-of select="Automovil/Kilometraje" /> Kilometros<!-- pintamos el valor del Automovil/Kilometraje -->
                                    <br/><strong>Descripcion: </strong><xsl:value-of select="Automovil/Descripcion" /><!-- pintamos el valor del Automovil/Descripcion -->
                                </td>
                            </tr>
                        </xsl:for-each>
                    </tbody>
                </table>
            </fieldset>
        </div>

        <!-- Cargamos la lista de Carros y la iteramos para mostralo en la pagina del xml de la etiqueta Concesionaria/ListaVehiculos y lo metemos en una
         tabla de html (como el dicionario del DTD Moto debe existir por lo menos un elemento del nodo motos siempre cargamos la seccion de motos) -->
        <div class="contenedor">
            <fieldset>
                <legend>Carros</legend>
                <table>
                    <tbody>
                        <xsl:for-each select="Concesionaria/ListaVehiculos/Carros/Carro">
                            <tr>
                                <td>
                                    <!-- tomamos la informacion de la imagen del carro y el id como informacion alt de la imagen -->
                                    <img>
                                        <!-- pasamos los atributos de la imagen como xsl para tomar las variables del xml -->
                                        <xsl:attribute name="src"><xsl:value-of select="Automovil/attribute::Imagen" /></xsl:attribute>
                                        <xsl:attribute name="alt">Carro <xsl:value-of select="attribute::carroID" /></xsl:attribute>
                                    </img>
                                </td>
                                <td>
                                    <!-- cargamos los detalles de la moto con la informacion contenida en el elmento de automovil -->
                                    <strong>Marca: </strong><xsl:value-of select="Automovil/Marca" /><!-- pintamos el valor del Automovil/Marca -->
                                    <br/><strong>Modelo: </strong><xsl:value-of select="Automovil/Modelo" /><!-- pintamos el valor del Automovil/Modelo -->
                                    <!-- cargamos el tipoCarro de Carro, es un elemento (nodo) hermano de Automovil-->
                                    <br/><strong>Tipo: </strong><xsl:value-of select="TipoCarro/attribute::Diseno" />
                                    <xsl:if test="Automovil/Modelo/Anio != ''"><!-- evaluamos si hay valor en anio dentro del modelo, si existe pintamos el valor del Automovil/Marca/Anio -->
                                        <br /> <strong>Año: </strong><xsl:value-of select="Automovil/Modelo/Anio" />
                                    </xsl:if>
                                    <xsl:if test="Automovil/Modelo/Version != ''"><!-- evaluamos si hay valor en anio dentro del modelo, si existe pintamos el valor del Automovil/Marca/Version -->
                                        <br /> <strong>Versión: </strong><xsl:value-of select="Automovil/Modelo/Version" />
                                    </xsl:if>
                                    <br/><strong>Condición: </strong><xsl:value-of select="Automovil/attribute::Condicion" /><!-- cargamos la informacion de la condicion de la moto si es nueva o seminueva, esta es por el atributo de automovil-->
                                    <br/><strong>Transmisión: </strong><xsl:value-of select="Automovil/attribute::Transmision" /><!-- cargamos la informacion de la Transmision de la moto si manual o atuomatica, esta es por el atributo de automovil-->
                                    <br/><strong>Color: </strong><xsl:value-of select="Automovil/Color" /><!-- pintamos el valor del Automovil/Color -->
                                    <br/><strong>Precio: </strong>$<xsl:value-of select="Automovil/Precio" /><!-- pintamos el valor del Automovil/Precio -->
                                    <br/><strong>Kilometraje: </strong><xsl:value-of select="Automovil/Kilometraje" /> Kilometros<!-- pintamos el valor del Automovil/Kilometraje -->
                                    <br/><strong>Descripcion: </strong><xsl:value-of select="Automovil/Descripcion" /><!-- pintamos el valor del Automovil/Descripcion -->
                                </td>
                            </tr>
                        </xsl:for-each>
                    </tbody>
                </table>
            </fieldset>
        </div>

        <div class="contenedor">
            <fieldset>
                <legend>Camionetas</legend>
                <!-- para el apartado de camionetas primero evaluamos si existen para mostrar el contenido-->
                <xsl:if test="count(Concesionaria/ListaVehiculos/Camionetas/Camioneta) > '0'">
                    <table>
                        <tbody>
                            <xsl:for-each select="Concesionaria/ListaVehiculos/Camionetas/Camioneta">
                                <tr>
                                    <td>
                                        <!-- tomamos la informacion de la imagen del carro y el id como informacion alt de la imagen -->
                                        <img>
                                            <!-- pasamos los atributos de la imagen como xsl para tomar las variables del xml -->
                                            <xsl:attribute name="src"><xsl:value-of select="Automovil/attribute::Imagen" /></xsl:attribute>
                                            <xsl:attribute name="alt">Carro <xsl:value-of select="attribute::carroID" /></xsl:attribute>
                                        </img>
                                    </td>
                                    <td>
                                        <!-- cargamos los detalles de la moto con la informacion contenida en el elmento de automovil -->
                                        <strong>Marca: </strong><xsl:value-of select="Automovil/Marca" /><!-- pintamos el valor del Automovil/Marca -->
                                        <br/><strong>Modelo: </strong><xsl:value-of select="Automovil/Modelo" /><!-- pintamos el valor del Automovil/Modelo -->
                                        <!-- cargamos el TipoCamioneta de Camioneta, es un elemento (nodo) hermano de Automovil-->
                                        <br/><strong>Tipo: </strong><xsl:value-of select="TipoCamioneta/attribute::Diseno" />
                                        <xsl:if test="Automovil/Modelo/Anio != ''"><!-- evaluamos si hay valor en anio dentro del modelo, si existe pintamos el valor del Automovil/Marca/Anio -->
                                            <br /> <strong>Año: </strong><xsl:value-of select="Automovil/Modelo/Anio" />
                                        </xsl:if>
                                        <xsl:if test="Automovil/Modelo/Version != ''"><!-- evaluamos si hay valor en anio dentro del modelo, si existe pintamos el valor del Automovil/Marca/Version -->
                                            <br /> <strong>Versión: </strong><xsl:value-of select="Automovil/Modelo/Version" />
                                        </xsl:if>
                                        <br/><strong>Condición: </strong><xsl:value-of select="Automovil/attribute::Condicion" /><!-- cargamos la informacion de la condicion de la moto si es nueva o seminueva, esta es por el atributo de automovil-->
                                        <br/><strong>Transmisión: </strong><xsl:value-of select="Automovil/attribute::Transmision" /><!-- cargamos la informacion de la Transmision de la moto si manual o atuomatica, esta es por el atributo de automovil-->
                                        <br/><strong>Color: </strong><xsl:value-of select="Automovil/Color" /><!-- pintamos el valor del Automovil/Color -->
                                        <br/><strong>Precio: </strong>$<xsl:value-of select="Automovil/Precio" /><!-- pintamos el valor del Automovil/Precio -->
                                        <br/><strong>Kilometraje: </strong><xsl:value-of select="Automovil/Kilometraje" /> Kilometros<!-- pintamos el valor del Automovil/Kilometraje -->
                                        <br/><strong>Descripcion: </strong><xsl:value-of select="Automovil/Descripcion" /><!-- pintamos el valor del Automovil/Descripcion -->
                                    </td>
                                </tr>
                            </xsl:for-each>
                        </tbody>
                    </table>
                </xsl:if>
                <!-- Para cuando se evalua que no hay camionetas solo mostramos la no disponibilidad,
                la comparacion con 0 se hace con el signo igual (no es asignación) -->
                <xsl:if test="count(Concesionaria/ListaVehiculos/Camionetas/Camioneta) = '0'">
                    <h1>Camionetas no disponibles en este momento</h1>
                </xsl:if>

            </fieldset>
        </div>

        <!-- cargamos el pie de pagina de la concecionaria -->
        <footer>
            <xsl:value-of select="Concesionaria/PiePagina" />
        </footer>
    </body>
</html>