@extends('layout.app')

@section('contenido')

    {{-- SLIDER PRINCIPAL --}}
    <div class="slider position-relative" id="inicio">
        <div class="container-fluid p-0 h-100">
            <div class="titulos position-absolute text-center">
                <h2 class="mb-0 text-uppercase text-white">Foreseeing</h2>
                <h2 class="mb-0 text-uppercase text-red"><span>the</span> perfect couser</h2>
                <h2 class="mb-0 text-uppercase text-white"><span class="font-genti text-white">of</span> your cargo.</h2>
                <h4 class="mt-2 text-uppercase">Just think of the possibilities.</h4>
                <div class="line mx-auto mt-3 mb-4"></div>
                <div class="move-animation">
                    <a href="javascript:;" class="btn btn-white" data-id="#contacto" data-space="90" data-speed="1500">Contact Us</a>
                </div>
            </div>
            <div class="swiper-container slider-principal">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="bg bg-position-bottom" style="background-image: url({{asset('images/slider.png')}})">
                            <img src="{{asset('images/slider.png')}}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg bg-position-bottom" style="background-image: url({{asset('images/slider.png')}})">
                            <img src="{{asset('images/slider.png')}}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg bg-position-bottom" style="background-image: url({{asset('images/slider.png')}})">
                            <img src="{{asset('images/slider.png')}}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg bg-position-bottom" style="background-image: url({{asset('images/slider.png')}})">
                            <img src="{{asset('images/slider.png')}}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg bg-position-bottom" style="background-image: url({{asset('images/slider.png')}})">
                            <img src="{{asset('images/slider.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="idiomas position-absolute">
                <a href="#" class="active">ENG</a> - <a href="#">ESP</a>
            </div>
        </div>
    </div>

    {{-- NOSOTROS --}}
    <div class="about" id="nosotros">
        <div class="container-fluid w16 w-lg-90">
            <div class="row align-items-center justify-content-around">
                <div class="col-12 col-md-6 col-lg-6 col-xl-4 m30 mb-md-0">
                    <h3 class="text-uppercase mb-0">About Us</h3>
                    <hr>
                    <p>WE ARE a freight forwarder in Mexico that offers all-encompassing and tailored logistics solutions from start to finish, no matter of the point of origin or destination.</p>
                    <p>We provide a direct and personalized service to each of our customers, taking our time to learn about their specific processes and requirements, in order <b>to design the most appropriate logistics solution.</b></p>
                    <img src="{{asset('images/flecha.svg')}}" alt="" class="flecha">
                </div>
                <div class="col-12 col-md-6 col-lg-5 col-xl-5 text-center">
                    <img src="{{asset('images/about_us.png')}}" alt="" class="w-100 barco">
                </div>
            </div>
            <span class="text-flotting"><span>4 - SEA</span></span>
        </div>
    </div>

    {{-- SOLUCIONES --}}
    <div class="soluciones" id="soluciones">
        <div class="container-fluid w16">
            <div class="row justify-content-center">
                <div class="col-12 col-md-11 col-lg-10 text-center text-md-left">
                    <img src="{{asset('images/solutions.png')}}" alt="" class="w-100 contenedores">
                    <div class="card">
                        <div class="card-body text-left">
                            <h3 class="text-uppercase">Solutions</h3>
                            <hr>
                            <p>We cultivate value relationships by guaranteeing reliable services at very competitive prices, which we have achieved thanks to our global partner network and to the close relationship we maintain with shipping companies and airlines, as well as with logistics providers of infrastructure and equipment.</p>
                            <p>Whether you are looking to move a single pallet or an entire vessel or airplane, we can do it all under one roof, thus enabling you to focus on your core business activity. <br> <b>In 4Sea World Transport, we really handle your cargo as if it were ours.</b></p>
                            <span class="text-flotting text-uppercase"><span>World transport</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- BANNER --}}
    <div class="banner bg" style="background-image: url({{asset('images/servicios.png')}})">
        <div class="container-fluid w16">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="text-white text-uppercase">Take care about your business.</h3>
                    <h3 class="text-white text-uppercase"><span>We</span> take care <span>of the</span> rest.</h3>
                </div>
            </div>
        </div>
    </div>

    {{-- SERVICIOS --}}
    <div class="servicios" id="servicios">
        <div class="container-fluid w14">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12 col-lg-11 col-xl-10">
                    <h3 class="text-uppercase">Services</h3>
                    <hr>
                </div>
                <div class="col-12 col-md-12 col-lg-11 col-xl-10">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3 m20 mb-lg-0">
                            <div class="bg m20" style="background-image: url({{asset('images/servicios/1.png')}})">
                                <img src="{{asset('images/servicios/1.png')}}" alt="">
                            </div>
                            <h4 class="text-uppercase">Sea Freight.</h4>
                            <p>
                                - Lorem ipsum dolor <br>
                                - Lorem ipsum dolor <br>
                                - Lorem ipsum dolor <br>
                                - Lorem ipsum dolor <br>
                                - Lorem ipsum dolor
                            </p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 m20 mb-lg-0">
                            <div class="bg m20" style="background-image: url({{asset('images/servicios/2.png')}})">
                                <img src="{{asset('images/servicios/1.png')}}" alt="">
                            </div>
                            <h4 class="text-uppercase">Sea Freight.</h4>
                            <p>
                                - Lorem ipsum dolor <br>
                                - Lorem ipsum dolor <br>
                                - Lorem ipsum dolor <br>
                                - Lorem ipsum dolor <br>
                                - Lorem ipsum dolor
                            </p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 m20 mb-md-0">
                            <div class="bg m20" style="background-image: url({{asset('images/servicios/3.png')}})">
                                <img src="{{asset('images/servicios/1.png')}}" alt="">
                            </div>
                            <h4 class="text-uppercase">Sea Freight.</h4>
                            <p>
                                - Lorem ipsum dolor <br>
                                - Lorem ipsum dolor <br>
                                - Lorem ipsum dolor <br>
                                - Lorem ipsum dolor <br>
                                - Lorem ipsum dolor
                            </p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="bg m20" style="background-image: url({{asset('images/servicios/4.png')}})">
                                <img src="{{asset('images/servicios/1.png')}}" alt="">
                            </div>
                            <h4 class="text-uppercase">Sea Freight.</h4>
                            <p>
                                - Lorem ipsum dolor <br>
                                - Lorem ipsum dolor <br>
                                - Lorem ipsum dolor <br>
                                - Lorem ipsum dolor <br>
                                - Lorem ipsum dolor
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- BANNER 2 --}}
    <div class="banner2">
        <div class="container-fluid w14">
            <div class="row">
                <div class="col-12 text-center m10 mb-md-0">
                    <h3 class="text-uppercase mb-0">Custom advice and support <img src="{{asset('images/barco.svg')}}" width="50px" alt="" class="d-none d-md-inline"></h3>
                </div>
                <div class="col-12 d-md-none text-center">
                    <img src="{{asset('images/barco.svg')}}" width="60px" alt="">
                </div>
            </div>
        </div>
    </div>

    {{-- CONTACTO --}}
    <div class="contacto" id="contacto">
        <div class="container-fluid w16">
            <div class="row">
                <div class="col-12 col-md-6 formulario">
                    <span class="text-flotting-2 text-uppercase"><span>World transport</span></span>
                    <div class="w-100 w-md-80 w-lg-70 mx-auto">
                        <h2 class="text-uppercase">Let's Start</h2>
                        <h3 class="text-uppercase">with <span>your</span> next cargo.</h3>
                        <hr>

                        <form action="">
                            <input class="m10" type="text" name="nombre" placeholder="Nombre">
                            <input class="m10" type="text" name="apellidos" placeholder="Apellidos">
                            <input class="m10" type="text" name="compania" placeholder="Compania">
                            <input class="m10" type="email" name="email" placeholder="Email">
                            <input class="m10" type="text" name="telefono" placeholder="Phone">
                            <select class="m20" name="servicio">
                                <option value="">Servicio de interes</option>
                                <option value="here">Otro servicio</option>
                                <option value="here">Otro servicio 2</option>
                                <option value="here">Otro servicio 3</option>
                            </select>
                            <textarea class="m10" name="mensaje" cols="30" rows="5" placeholder="Mensaje adicional"></textarea>
                            <button type="submit" class="btn">Enviar</button>
                        </form>
                    </div>
                    <span class="text-flotting-1"><span>4 - SEA</span></span>
                </div>
                <div class="col-12 col-md-6 p-0 justify-content-center">
                    <div class="bg h-100" style="background-image: url({{asset('images/contacto.png')}})">
                        <img src="{{asset('images/contacto.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
