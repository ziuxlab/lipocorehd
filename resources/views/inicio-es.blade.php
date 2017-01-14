@extends('layouts.app')

@section('html')
    <html lang="en">
    @endsection

    @section('meta')
        <!-- MINIFIED -->
        {!! SEO::generate() !!}

        <meta name="language" content="english">
        <link rel="alternate" hreflang="es" href="https://lipocorehd.com/">
    @endsection

    @section('content')
        @if (Session::has('send'))
            <div class="alert alert-success alerta mt70px">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="glyphicon glyphicon-remove text-white"></i>
                </button>
                Mensaje enviado correctamente
            </div>
        @endif

        <section class="bg0 parallax">
            <div class="col-lg-12">
                <div class="center-block container fw700">
                    <div class="col-md-10">
                        <div class="height150px">
                            <div class="h1 mt-100px">
                                <div id="typed-strings">
                                    <p><h1>ÚLTIMA REDUCCIÓN DE GRASA CORPORAL FÓRMULA </h1>
                                </div>
                                <strong><span class="element float-left"></span></strong>
                            </div>
                        </div>
                        <p class="h2">
                            <b>LIPOCORE</b> HD   es la fórmula definitiva para ganar la guerra contra la grasa.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bgnone">
            <div class="col-lg-12">
                <div class=" col-md-6 col-md-offset-3">
                    <h2 class="center-b">ÚLTIMA REDUCCIÓN DE GRASA CORPORAL FÓRMULA</h2>
                    <hr class="center-b">
                    <p class="text-center">
                        Su avanzada combinación de ingredientes en las dosis precisas, no ha demostrado científicamente el quemador más efectivo, seguro y natural que garantiza resultados reales en la quema de grasa y la activación metabólica.
                    </p>
                </div>
            </div>
            <br>
            <br>
            <div class="col-lg-12 mt50px">
                <div class="center-block container center-b">
                    <div class="col-sm-4 center-b">
                        <span class="glyphicon glyphicon-star wow fadeInUp center-b fontOne"></span>
                        <h3 class="center-b">FÓRMULA RENOVADA</h3>
                        <hr class="center-b">
                        <p>Hemos actualizado y mejorado la fórmula para mejorar los efectos de  <u>LIPOCORE</u>.</p>
                    </div>
                    <div class="col-sm-4 center-b">
                        <span class="glyphicon glyphicon-flash wow fadeInUp center-b fontTwo"></span>
                        <h3 class="center-b ">PODER & ENERGIA </h3>
                        <hr class="center-b ">
                        <p><u>LIPOCORE HD</u> contiene una mezcla de extractos de plantas que dan mucha energía con el factor termogénico.</p>
                    </div>
                    <div class="col-sm-4 center-b">
                        <span class="glyphicon glyphicon-ok wow fadeInUp fontThree"></span>
                        <h3>RESULTADOS REALES</h3>
                        <hr class="center-b ">
                        <p><u>LIPOCORE HD</u> tiene los mejores resultados para reducir el porcentaje de grasa corporal, mientras que la preservación de la masa muscular</p>
                    </div>
                </div>
            </div>

        </section>

        <section class="bg3 fw700 parallax2" id="lipocore">
            <div class="col-lg-12">
                <div class="center-block container">
                    <div class="col-md-7 mt5l">

                        <h2 class="center-b ">¿QUE ES <strong>LIPOCORE HD</strong>?</h2>
                        <hr class="center-b ">
                        <p class="text-justify">
                            <strong>LIPOCORE</strong> fue diseñado específicamente para reducir
                            el porcentaje de grasa corporal, mientras que la preservación de la
                            masa muscular mediante estimulación metabólica progresiva y la activación
                            de los mecanismos de la lipólisis (la oxidación de grasa) en el cuerpo.
                        </p>
                    </div>
                    <div class="col-sm-3 center-b">
                        <img src="{{url('images/lipocore1.png')}}" class=" wow fadeIn width400px " data-wow-duration="1s" alt="testabolichd" title="lipocore HD">
                    </div>
                </div>
            </div>
        </section>

        <section class="paddingout">
            <iframe class="width100" height="505" src="https://www.youtube.com/embed/6618KXy4RF4" allowfullscreen></iframe>
        </section>

        <section class="bg4" id="active-ingredients">
            <div class="center-b">
                <h2>INGREDIENTES CUIDADOSAMENTE SELECCIONADOS</h2>
                <hr class="center-b">
            </div>
            <div class="col-lg-12">
                <div class="center-b container ">
                    <div class="col-sm-3 wow fadeInUp" data-wow-duration="1s">
                        <img class="img-circle  img-responsive center-b"
                             src="{{url('images/activein-1.jpg')}}" alt="Café-verde" title="Café verde">
                        <p class="fw700 center-b"><span class="glyphicon glyphicon-minus"></span>Café verde<span
                                    class="glyphicon glyphicon-minus"></span></p>
                    </div>
                    <div class="col-sm-3 wow fadeInUp" data-wow-duration="1s">
                        <img class="img-circle img-responsive center-b"
                             src="{{url('images/activein-2.jpg')}}" alt="Yohimbina" title="Yohimbina">
                        <p class="fw700 center-b"><span class="glyphicon glyphicon-minus"></span>Yohimbina<span
                                    class="glyphicon glyphicon-minus"></span></p>
                    </div>
                    <div class="col-sm-3 wow fadeInUp" data-wow-duration="1s">
                        <img class="img-circle img-responsive center-b"
                             src="{{url('images/activein-3.jpg')}}" alt="Cafeína anhidra" title="Cafeína anhidra">
                        <p class="fw700 center-b"><span class="glyphicon glyphicon-minus"></span> Cafeína anhidra<span
                                    class="glyphicon glyphicon-minus"></span></p>
                    </div>
                    <div class="col-sm-3 wow fadeInUp" data-wow-duration="1s">
                        <img class="img-circle img-responsive center-b"
                             src="{{url('images/activein-4.jpg')}}" alt="Garcinia cambogia" title="Garcinia cambogia">
                        <p class="fw700 center-b"><span class="glyphicon glyphicon-minus"></span>Garcinia cambogia<span
                                    class="glyphicon glyphicon-minus"></span></p>
                    </div>
                    <hr class="center-b op0">
                </div>
                <div class="center-b container ">
                    <div class="col-md-6">
                        <p class="text-justify mt10px">
                            <i>LIPOCORE</i> HD   fue diseñado específicamente para reducir el porcentaje de
                            grasa corporal, mientras que la preservación de la masa muscular mediante estimulación
                            metabólica progresiva y la activación de los mecanismos de la lipólisis
                            (la oxidación de grasa) en el cuerpo.
                            <br><br>
                            <i>LIPOCORE</i> HD es la fórmula patentada, desarrollada clínicamente más avanzado a "derretir" la grasa.

                            <br><br>
                            La sinergia de ingredientes - extracto de café verde - cafeína anhidra
                            <br><br>
                            LIPOCORE HD incluye una mezcla sinérgica de dos ingredientes clave para facilitar la quema de grasa:
                            <br><br>
                            El extracto de café verde (C. canephora robusta) es una muy potente acelerador del metabolismo que
                            aumenta los procesos naturales de la lipólisis ( la quema de grasa)
                            <br><br>
                            cafeína anhidra, que estudios recientes han puesto de manifiesto dos usos importantes en la quema
                            de grasa: la primera es un diurético que afecta positivamente a la eliminación de la grasa corporal,
                            y el segundo estudio afirma que después de su ingesta observa una concentración de ácido graso
                            superior en la sangre plasma, por lo que la disponibilidad de los lípidos en la sangre ayuda a
                            utilizar directamente en el metabolismo energético, significa que la grasa corporal tiende a ser
                            utilizado como combustible para la transformación de la energía.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="text-justify mt10px">
                            La solución definitiva para la reducción de porcentajes de grasa corporal.
                            <br><br>
                            <i>LIPOCORE</i> HD   combina los ingredientes activos científicamente demostrado para estimular la pérdida
                                de peso a través de los patrones naturales de grasa quema la termogénesis y la lipólisis:
                            <br><br>
                            extracto de café verde (C. canephora robusta), cafeína anhidra, Garcinia cambogia y yohimbina de la
                            más pura calidad, formulados en términos precisos para la destrucción de dosis tejido adiposo.
                            <br><br>
                            Fórmula avanzada <i>LIPOCORE</i> HD   incorpora Garcinia cambogia también conocido como "Malabar Tamarind".
                            La Garcinia Cambogia tiene altos niveles de ácido hidroxicítrico, una sustancia que tiene potentes
                            propiedades terapéuticas, ya que no sólo es eficaz para reducir el apetito y en consecuencia limitar
                            la ingesta de alimentos, pero la lipogénesis también la inhibición, que es el proceso por el cuerpo
                            fabrica colesterol y los ácidos grasos y tiendas.
                            <br><br>
                            El ácido hidroxicítrico es uno de los quemadores de grasa natural más potente que se conoce y
                            simplemente inhibe el proceso en el que el cuerpo produce y almacena y elimina no deseado ya
                            depositadas en los adipocitos o células grasas. Estudios recientes muestran que el control
                            del peso con ácido hidroxicítrico, controla el efecto de salto de los inhibidores del apetito
                            sintéticos cuando dejan de usar, y esta es la razón por la cual las cápsulas de Garcinia cambogia
                            son altamente recomendados por profesionales de la salud para controlar
                            el peso y prevenir problemas cardiovasculares.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg5">
            <div class="col-lg-12">
                <div class="center-b container">
                    <div class="col-sm-4 col-md-offset-1">
                        <img src="{{url('/images/lipocoreenglish.png')}}"
                             class="img-responsive wow fadeIn" data-wow-duration="1s" alt="lipocore-comparacion" title="lipocore Comparison">
                    </div>
                    <div class="col-sm-6 ">
                        <h5 class="h2 center-b"><strong>LIPOCORE HD </strong> LA MEJOR FORMULA</h5>
                        <hr class="center-b">
                        <p class="text-justify mt50px">
                            <i>LIPOCORE</i> HD   proporciona una yohimbina exacta estandarizada que estimula el efecto de la quema de grasa en
                            el cuerpo y, además, funciona como un vasodilatador, estimulando el flujo sanguíneo, especialmente en la
                            hipodermis, en beneficio de tono muscular en dosis extracto de tejido
                            afectada de celulitis (estética), también conocido como <i>gynoid lipodistrofia</i> o "síndrome de piel de naranja".
                            <br><br>
                            Lipocore es La solución definitiva para reducir el porcentaje de grasa corporal, aumentar los niveles de energía
                            y tienen un metabolismo más activo.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bgnone" id="how-to-use">
            <div class="col-lg-12">
                <div class="center-block container">
                    <div class="col-sm-6">
                        <h3 class="center-b">FAQS</h3>
                        <hr class="center-b">
                        <!-- VER MAS -->

                        <p role="button" data-toggle="collapse" data-target="#1" aria-expanded="false" >
                            <span class="glyphicon glyphicon-plus"></span> ¿Las mujeres consumen<strong>LIPOCORE HD</strong>?
                        </p>
                        <div class="collapse" id="1">
                            <div class="well">
                                <p>R / Sí, tanto hombres como mujeres pueden recibir todos los beneficios de comer <u>LIPOCORE</u> HD  ,
                                    la estimulación del metabolismo, la movilización de la grasa para su uso como fuente
                                    de energía, y la quema de grasa. <u>LIPOCORE</u> HD   no debe ser consumido por mujeres embarazadas
                                    o en periodo de lactancia, o los hombres o las mujeres con enfermedades del corazón.</p>
                            </div>
                        </div>

                        <br>

                        <p role="button" data-toggle="collapse" data-target="#2" aria-expanded="false" >
                            <span class="glyphicon glyphicon-plus"></span>¿Cuánto debo consumir <strong>LIPOCOREHD</strong>?
                        </p>
                        <div class="collapse" id="2">
                            <div class="well">
                                <p>R / Es importante que tanto los hombres como las mujeres siguen el protocolo de compatibilidad del producto.
                                    El primer día sólo consumen 1 cápsula con la primera comida del día.
                                    El segundo y tercer días consumen 2 cápsulas con la primera comida del día.
                                    A partir del cuarto día para consumir 2 cápsulas dos veces al día,
                                    30-60 minutos antes del desayuno y el almuerzo con al menos 400 ml de agua (dos vasos al disparo).
                                    Evitar consumir el producto dentro de 5 horas antes de acostarse.
                                    <u>LIPOCORE</u> se puede consumir tanto en los días de entrenamiento HD  ,
                                    y aquellos que no realizan actividad física. El consumo no exceda de más de 4 cápsulas en 24 horas.
                                    Se recomienda consumir mucha agua y mantenerse hidratado porque las propiedades diuréticas
                                    del producto pueden crear imágenes de leve a moderada deshidratación,
                                    además, una buena hidratación estimula los procesos de oxidación de lípidos.
                                </p>
                            </div>
                        </div>

                        <br>

                        <p role="button" data-toggle="collapse" data-target="#3" aria-expanded="false" >
                            <span class="glyphicon glyphicon-plus"></span>¿Cuánto peso puedo perder utilizando <strong>LIPOCORE HD</strong>?
                        </p>
                        <div class="collapse" id="3">
                            <div class="well">
                                <p class="text-justify">R / El peso termina siendo poco importante cuando se realiza un régimen de
                                    definición muscular. Lo que es importante es el porcentaje de grasa que puede alcanzar abajo.
                                    La pérdida de peso no significa necesariamente la pérdida de grasa, de hecho, en muchos casos,
                                    la pérdida de "espectacular" de peso está directamente relacionado con el desgaste del
                                    tejido muscular en lugar de grasa. Los mecanismos <u>LIPOCORE</u> HD tienen ingredientes    que conducen
                                    a la pérdida de tejido adiposo y el músculo no lo hacen. El uso continuado de <u>LIPOCORE</u> HD
                                    junto con una dieta adecuada y plan de ejercicios adecuado
                                    ha demostrado reducciones en los porcentajes de grasa corporal de hasta el 12% en hombres y 10% mujeres.</p>
                            </div>
                        </div>
                        <br>
                        <p role="button" data-toggle="collapse" data-target="#4" aria-expanded="false" >
                            <span class="glyphicon glyphicon-plus"></span>¿Qué productos debería o no debería combinarse con <strong>LIPOCORE</strong> HD ?
                        </p>
                        <div class="collapse" id="4">
                            <div class="well">
                                <p class="text-justify">el té verde: R / La gran mayoría de los suplementos alimenticios
                                    utilizados en responder nutrición deportiva positivamente y trabajar sinérgicamente
                                    con NO-Pump HD  : glutamina, creatina, proteína de suero, caseína, hidratos de carbono complejos,
                                    CLA, los complejos de ácidos grasos omega, multivitaminas cafeína y teobromina ,
                                    precursores de testosterona, BCAA entre otros son la respuesta positiva cuando se combinan con LIPOCORE HD  ,
                                    sin embargo, no se recomienda el uso <u>LIPOCORE</u> HD   junto con otros agentes estimulantes.
                                </p>
                            </div>
                        </div>

                        <br>
                    </div>
                    <div class="col-sm-6">
                        <h3 class="center-b">TOMANDO <i>LOPOCORE HD</i></h3>
                        <hr class="center-b">
                        <ul class="ml8">
                            <li class="mt8px">Para evaluar su tolerancia al producto en el primer día sólo consumen 1 cápsula con la primera comida del día. El segundo y tercer días consumen 2 cápsulas con la primera comida del día.</li>
                            <li class="mt8px">A partir del cuarto día para consumir 2 cápsulas dos veces al día, 30-60 minutos antes del desayuno y el almuerzo con al menos 400 ml de agua (dos vasos con cada disparo).</li>
                            <li class="mt8px">Evitar consumir el producto dentro de 5 horas antes de acostarse. El consumo no exceda de más de 4 cápsulas en 24 horas. Por favor, lea toda la etiqueta antes de usar.</li>
                            <li class="mt8px">Por favor, lea toda la etiqueta antes de usar.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg7">
            <div id="carousel-example-generic" class="carousel slide mt-80px" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{url('images/bg-transparente.png')}}" alt="imagen transparente" title="image transparent ">
                        <div class="carousel-caption">
                            <div class="title-collapse">
                                <p class="titleCollapse">Los resultados son excelentes, muy sorprendido.</p >
                                <p class="fw700"> - Ian Tower, instructor de gimnasia</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{url('images/bg-transparente.png')}}"  alt="imagen transparente" title="image transparent ">
                        <div class="carousel-caption">
                            <div class="title-collapse">
                                <p class="titleCollapse">He aumentado mi masa muscular de una manera increíble.</p>
                                <p class="fw700">- John Sommer, Modelo Fitness </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{url('images/bg-transparente.png')}}"  alt="imagen transparente" title="image transparent ">
                        <div class="carousel-caption">
                            <div class="title-collapse">
                                <p class="titleCollapse">Me he dado cuenta de más fuerza, más el crecimiento muscular.</p>
                                <p class="fw700"> - Jhon Sneider, Abogado</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg1 height500px" id="get-in-touch">
            <div class="col-lg-12">
                <div class="center-block container">
                    <div class="col-md-6">
                        <h3 class="center-b">
                            ESTAR EN CONTACTO
                        </h3>
                        <hr class="center-b">
                        <p class="text-center">
                            Nos encantaría saber de usted, si usted tiene alguna pregunta, no dude en contactar con nosotros
                        </p>
                        <div class="center-b container">
                            <form action="{{ url('/basicemail') }}" method="post" class="col-sm-6 col-lg-5 center-b">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <label class="col-xs-12">Su nombre</label>
                                <input type="text" class="form-control " name="name" required="" placeholder="Nombre">
                                <label class="col-xs-12 mt10px">Su email</label>
                                <input type="text" class="form-control" name="mail" required="" placeholder="Ejemplo@email.com">
                                <label class="col-xs-12 mt10px">Su mensaje</label>
                                <textarea class="form-control " rows="3" name="mensaje" required="" placeholder="Escriba su mensaje aqui"></textarea>
                                <button type="submit" value="SEND" class="form-control btn azuloscuro mt20px"><span
                                            class="glyphicon glyphicon-envelope"></span> ENVIAR
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5 col-md-offset-1 mt-100px">
                        <div class="title-collapse col-sm-10">
                            <h4 class="h3 center-b">COMPRAR AHORA!</h4>
                            <hr class="center-b">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="672MJT3TL383Y">
                                <input type="hidden" name="on0" value="promociones">
                                <select name="os0" class="form-control" title="Selecciona el producto">
                                    <option value="LIPOCORE X1 UND">LIPOCORE X1 UND $50.00 USD</option>
                                    <option value="LIPOCORE X3 UND">LIPOCORE X3 UND $115.00 USD</option>
                                    <option value="LIPOCORE X6 UND">LIPOCORE X6 UND $155.00 USD</option>
                                </select>
                                <br>
                                <input type="hidden" name="currency_code" value="USD">
                                <button type="submit" name="submit" class="btn btn-block azuloscuro"><span
                                            class="glyphicon glyphicon-shopping-cart"></span> COMPRAR
                                </button>
                                <img alt="pay-lipocore " src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif"
                                     width="1" height="1" title="Pay lipocore">
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection