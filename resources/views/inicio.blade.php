@extends('layouts.app')

@section('html')
<html lang="en">
@endsection

@section('meta')
    <!-- MINIFIED -->
    {!! SEO::generate() !!}

    <meta name="language" content="english">
    <link rel="alternate" hreflang="es" href="https://testabolichd.com/">
@endsection

@section('content')
    @if (Session::has('send'))
        <div class="alert alert-success alerta mt70px">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="glyphicon glyphicon-remove text-white"></i>
            </button>
            Message send correctly
        </div>
    @endif

    <section class="bg0 parallax">
        <div class="col-lg-12">
            <div class="center-block container fw700">
                <div class="col-md-10">
                    <div class="height150px">
                        <div class="h1 mt-100px">
                            <div id="typed-strings">
                                <p><h1>ULTIMATE REDUCING BODY FAT FORMULA </h1>
                            </div>
                            <strong><span class="element float-left"></span></strong>
                        </div>
                    </div>
                    <p class="h2">
                        <b>LIPOCORE</b> HD   is the ultimate formula for winning the war against fat.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bgnone">
        <div class="col-lg-12">
            <div class=" col-md-6 col-md-offset-3">
                <h2 class="center-b">ULTIMATE REDUCING BODY FAT FORMULA</h2>
                <hr class="center-b">
                <p class="text-center">
                    Its advanced combination of ingredients in precise doses, do scientifically proven the most effective, safe and natural burner that guarantees real results in fat burning and metabolic activation.
                </p>
            </div>
        </div>
        <br>
        <br>
        <div class="col-lg-12 mt50px">
            <div class="center-block container center-b">
                <div class="col-sm-4 center-b">
                    <span class="glyphicon glyphicon-star wow fadeInUp center-b fontOne"></span>
                    <h3 class="center-b">RENEWED FORMULA</h3>
                    <hr class="center-b">
                    <p>We have updated and improved the formula to enhance the effects of <u>LIPOCORE</u> HD  .</p>
                </div>
                <div class="col-sm-4 center-b">
                    <span class="glyphicon glyphicon-flash wow fadeInUp center-b fontTwo"></span>
                    <h3 class="center-b ">POWER & ENERGY</h3>
                    <hr class="center-b ">
                    <p><u>LIPOCORE HD</u>   contains a blend of plant extracts that give a lot of energy with thermogenic factor.</p>
                </div>
                <div class="col-sm-4 center-b">
                    <span class="glyphicon glyphicon-ok wow fadeInUp fontThree"></span>
                    <h3>REAL RESULTS</h3>
                    <hr class="center-b ">
                    <p><u>LIPOCORE HD</u>   has the best results to reduce the percentage of body fat while preserving muscle mass</p>
                </div>
            </div>
        </div>

    </section>

    <section class="bg3 fw700 parallax2" id="lipocore">
        <div class="col-lg-12">
            <div class="center-block container">
                <div class="col-md-7 mt5l">

                    <h2 class="center-b ">¿WHAT IS <strong>LIPOCORE HD</strong>?</h2>
                    <hr class="center-b ">
                    <p class="text-justify">
                        <strong>LIPOCORE</strong>  HD  was designed specifically to reduce the percentage of body fat while preserving muscle mass by
                        gradual metabolic stimulation and activation of mechanisms for lipolysis (fat oxidation) in the body.
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
            <h2>CAREFULLY SELECTED INGREDIENTS</h2>
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
                        <i>LIPOCORE</i> HD   was designed specifically to reduce the percentage of body fat while preserving
                        muscle mass by gradual metabolic stimulation and activation of mechanisms for lipolysis
                        (fat oxidation) in the body.
                        <br><br>
                        <i>LIPOCORE</i> HD   is the patented formula, developed clinically most advanced to “melt” fat.
                        <br><br>
                        Synergy ingredient – green coffee extract – Caffeine Anhydrous
                        <br><br>
                        <i>LIPOCORE</i> HD   includes a synergistic blend of two key ingredients to facilitate fat burning:
                        <br><br>
                        The green coffee extract (C. canephora Robusta) is a very powerful accelerator of metabolism
                        that increases the natural processes of lipolysis (fat burning)
                        <br><br>
                        Caffeine Anhydrous, that recent studies have revealed two important uses in burning fat: the
                        first is a diuretic that positively affects the elimination of body fat, and the second study
                        states that after its intake observes a higher fatty acid concentration in the blood plasma,
                        so the availability of lipids in the blood helps used directly in energy metabolism, it means
                        that the body fat tends to be used as fuel for energy transformation.
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="text-justify mt10px">
                        The ultimate solution for reducing body fat percentages.
                        <br><br>
                        <i>LIPOCORE</i> HD   combines the active ingredients scientifically proven to stimulate weight loss
                        through natural patterns of fat burning thermogenesis and lipolysis:
                        <br><br>
                        Green coffee extract (C. canephora Robusta), Caffeine Anhydrous, Garcinia cambogia and
                        Yohimbine of the purest quality, formulated in precise for the destruction of adipose tissue dose.
                        <br><br>
                        Advanced Formula <i>LIPOCORE</i> HD   incorporates Garcinia cambogia also known as “Malabar Tamarind.”
                        The Garcinia Cambogia has high levels of hydroxycitric acid, a substance that has powerful
                        therapeutic properties, since it is not only effective to reduce the appetite and consequently
                        limiting food intake, but also inhibiting lipogenesis, which is the process by the body
                        manufactures cholesterol and fatty acids and stores.
                        <br><br>
                        Hydroxycitric acid is one of the natural fat burners most powerful known and simply inhibits
                        the process in which the body produces and stores and removes unwanted already deposited in
                        adipocytes or fat cells. Recent studies show that weight control with hydroxycitric acid,
                        controls the skip effect of synthetic appetite inhibitors when they cease to use, and this
                        is the reason why Garcinia Cambogia capsules are highly recommended by health professionals
                        to control the weight and prevent cardiovascular problems.
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
                    <h5 class="h2 center-b"><strong>LIPOCORE HD </strong> THE BEST FORMULA</h5>
                    <hr class="center-b">
                    <p class="text-justify mt50px">
                        <i>LIPOCORE</i> HD   provides a standardized accurate Yohimbine that stimulates fat burning effect on the body and
                        additionally works as a vasodilator, stimulating blood flow, especially in the hypodermis, benefiting muscle
                        tone in cellulite affected tissue extract dose (aesthetics), also known as lipodystrophy gynoid or
                        “orange peel syndrome”.
                        <br><br>
                        Lipocore  The ultimate solution to reduce the percentage of body fat, increase energy levels and have a more
                        active metabolism.
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
                        <span class="glyphicon glyphicon-plus"></span> Do women consume <strong>LIPOCORE HD</strong>?
                    </p>
                    <div class="collapse" id="1">
                        <div class="well">
                            <p>R / yes, Both men and women can receive all the benefits of eating <u>LIPOCORE</u> HD  ,
                                metabolic stimulation, mobilization of fat for use as energy source, and fat burning.
                                <u>LIPOCORE</u> HD   should not be consumed by pregnant or lactating women, or men or
                                women with heart disease.</p>
                        </div>
                    </div>

                    <br>

                    <p role="button" data-toggle="collapse" data-target="#2" aria-expanded="false" >
                        <span class="glyphicon glyphicon-plus"></span> How much should I consume <strong>LIPOCOREHD</strong>?
                    </p>
                    <div class="collapse" id="2">
                        <div class="well">
                            <p> R / It is important that both men and women follow the protocol of product compatibility.
                                The first day only consume 1 capsule with the first meal of the day. The second and
                                third days consume 2 capsules with the first meal of the day. From the fourth day
                                to consume 2 capsules twice a day, 30-60 minutes before breakfast and lunch with at
                                least 400 mL of water (two glasses per shot). Avoid consume the product within 5
                                hours of bedtime. <u>LIPOCORE</u> can be consumed both in HD   training days, and those
                                who do not perform physical activity. Consumption not exceed more than 4 capsules
                                within 24 hours. Is recommended to consume plenty of water and keep hydrated because
                                the diuretic properties of the product can create pictures of mild to moderate
                                dehydration, in addition, good hydration stimulates lipid oxidation processes.
                            </p>
                        </div>
                    </div>

                    <br>

                    <p role="button" data-toggle="collapse" data-target="#3" aria-expanded="false" >
                        <span class="glyphicon glyphicon-plus"></span>How much weight can I lose using <strong>LIPOCORE HD</strong>?
                    </p>
                    <div class="collapse" id="3">
                        <div class="well">
                            <p class="text-justify">R / The weight ends up being unimportant when a regime of muscle
                                definition is made. What is important is the percentage of fat that can reach down.
                                Weight loss does not necessarily mean fat loss, indeed, in many cases loss of “spectacular”
                                weight is directly related to the breakdown of muscle tissue instead of fat. <u>LIPOCOR</u>
                                ingredients HD   mechanisms conducive to loss of adipose tissue and muscle do not.
                                    Continued use of <u>LIPOCORE</u> HD   together with a suitable diet and appropriate exercise
                                plan has demonstrated reductions in body fat percentages of to 12% in men and 10% women.</p>
                        </div>
                    </div>
                    <br>
                    <p role="button" data-toggle="collapse" data-target="#4" aria-expanded="false" >
                        <span class="glyphicon glyphicon-plus"></span>What products should I or not should I combine with <strong>LIPOCORE</strong> HD ?
                    </p>
                    <div class="collapse" id="4">
                        <div class="well">
                            <p class="text-justify">R / The vast majority of nutritional supplements used in sports nutrition
                                respond positively and work synergistically with NO-Pump   HD: glutamine, creatine, whey protein,
                                casein, complex carbohydrates, CLA, omega fatty acids complexes, multivitamins caffeine and
                                theobromine: green tea, precursors of testosterone, BCAA among others are positive response
                                when are combined with HD   <u> LIPOCORE,</u> however it is not recommended to use <u>LIPOCORE</u> HD
                                along with other stimulating agents.
                            </p>
                        </div>
                    </div>

                    <br>
                </div>
                <div class="col-sm-6">
                    <h3 class="center-b">TAKING <i>LIPOCORE HD</i></h3>
                    <hr class="center-b">
                    <ul class="ml8">
                        <li class="mt8px">To assess your tolerance to the product on the first day only consume 1 capsule with the first meal of the day. The second and third days consume 2 capsules with the first meal of the day.</li>
                        <li class="mt8px">From the fourth day to consume 2 capsules twice a day, 30-60 minutes before breakfast and lunch with at least 400 mL of water (two glasses with each shot).</li>
                        <li class="mt8px">Avoid consume the product within 5 hours of bedtime. Consumption not exceed more than 4 capsules within 24 hours. Please read the entire label before using.</li>
                        <li class="mt8px">Please read the entire label before using.</li>
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
                            <p class="titleCollapse">The results are great, really surprised.</p >
                            <p class="fw700"> - Ian Tower, Gym instructor</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{url('images/bg-transparente.png')}}"  alt="imagen transparente" title="image transparent ">
                    <div class="carousel-caption">
                        <div class="title-collapse">
                            <p class="titleCollapse">I have increased my muscle mass in an incredible way.</p>
                            <p class="fw700">- John Sommer, Fitness Model</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{url('images/bg-transparente.png')}}"  alt="imagen transparente" title="image transparent ">
                    <div class="carousel-caption">
                        <div class="title-collapse">
                            <p class="titleCollapse">I have noticed more strength , more muscle growth.</p>
                            <p class="fw700"> - Jhon Sneider, Lawyer</p>
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
                        GET IN TOUCH
                    </h3>
                    <hr class="center-b">
                    <p class="text-center">
                        We would love to hear from you, if you have any questions, do not hesitate to contact us
                    </p>
                    <div class="center-b container">
                        <form action="{{ url('/basicemail') }}" method="post" class="col-sm-6 col-lg-5 center-b">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <label class="col-xs-12">Your name</label>
                                <input type="text" class="form-control " name="name" required="" placeholder="Name">
                            <label class="col-xs-12 mt10px">Your email</label>
                                <input type="text" class="form-control" name="mail" required="" placeholder="Example@email.com">
                            <label class="col-xs-12 mt10px">Your message</label>
                                <textarea class="form-control " rows="3" name="mensaje" required="" placeholder="Write here your message"></textarea>
                            <button type="submit" value="SEND" class="form-control btn azuloscuro mt20px"><span
                                        class="glyphicon glyphicon-envelope"></span> SEND
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1 mt-100px">
                    <div class="title-collapse col-sm-10">
                        <h4 class="h3 center-b">BUY NOW!</h4>
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
                                        class="glyphicon glyphicon-shopping-cart"></span> BUY
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