@extends('layout.app')

@section('contenido')

    {{-- SLIDER PRINCIPAL --}}
    <div class="slider position-relative" id="inicio">
        <div class="container-fluid p-0 h-100">
            <div class="titulos position-absolute text-center">
                <h2 class="mb-0 text-uppercase text-white">@lang('inicio.slider.titulo1')</h2>
                <h2 class="mb-0 text-uppercase text-red">@lang('inicio.slider.titulo2')</h2>
                <h2 class="mb-0 text-uppercase text-white">@lang('inicio.slider.titulo3')</h2>
                <h4 class="mt-2 text-uppercase">@lang('inicio.slider.titulo4')</h4>
                <div class="line mx-auto mt-3 mb-4"></div>
                <div class="move-animation">
                    <a href="javascript:;" class="btn btn-white" data-id="#contacto" data-space="90" data-speed="1500">@lang('inicio.slider.contacto')</a>
                </div>
            </div>
            <div class="swiper-container slider-principal">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="bg bg-position-bottom" style="background-image: url({{asset('images/slide/01.png')}})">
                            <img src="{{asset('images/slide/slider-mascara.png')}}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg bg-position-bottom" style="background-image: url({{asset('images/slide/02.png')}})">
                            <img src="{{asset('images/slide/slider-mascara.png')}}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg bg-position-bottom" style="background-image: url({{asset('images/slide/03.png')}})">
                            <img src="{{asset('images/slide/slider-mascara.png')}}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg bg-position-bottom" style="background-image: url({{asset('images/slide/04.png')}})">
                            <img src="{{asset('images/slide/slider-mascara.png')}}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg bg-position-bottom" style="background-image: url({{asset('images/slide/05.png')}})">
                            <img src="{{asset('images/slide/slider-mascara.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="idiomas position-absolute">
                <a href="{{ route('change_lang', ['lang' => 'es']) }}" {{(App::getLocale() == 'es') ? 'class=active' : ''}}>Es</a> -
                <a href="{{ route('change_lang', ['lang' => 'en']) }}" {{(App::getLocale() == 'en') ? 'class=active' : ''}}>En</a>
                {{-- <a href="#" class="active">ENG</a> - <a href="#">ESP</a> --}}
            </div>
        </div>
    </div>

    {{-- NOSOTROS --}}
    <div class="about" id="nosotros">
        <div class="container-fluid w16 w-lg-90">
            <div class="row align-items-center justify-content-around">
                <div class="col-12 col-md-6 col-lg-6 col-xl-4 m30 mb-md-0">
                    <h3 class="text-uppercase mb-0">@lang('inicio.nosotros.titulo')</h3>
                    <hr>
                    <p>@lang('inicio.nosotros.texto1')</p>
                    <p>@lang('inicio.nosotros.texto2')</p>
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
                            <h3 class="text-uppercase">@lang('inicio.soluciones.titulo')</h3>
                            <hr>
                            <p>@lang('inicio.soluciones.texto1')</p>
                            <p>@lang('inicio.soluciones.texto2')</p>
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
                    <h3 class="text-white text-uppercase">@lang('inicio.banner.titulo')</h3>
                    <h3 class="text-white text-uppercase">@lang('inicio.banner.titulo2')</h3>
                </div>
            </div>
        </div>
    </div>

    {{-- SERVICIOS --}}
    <div class="servicios" id="servicios">
        <div class="container-fluid w14">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12 col-lg-11 col-xl-10">
                    <h3 class="text-uppercase">@lang('inicio.servicios.titulo')</h3>
                    <hr>
                </div>
                <div class="col-12 col-md-12 col-lg-11 col-xl-10">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3 m20 mb-lg-0">
                            <div class="bg m20" style="background-image: url({{asset('images/servicios/1.png')}})">
                                <img src="{{asset('images/servicios/1.png')}}" alt="">
                            </div>
                            <h4 class="text-uppercase">@lang('inicio.servicios.servicio1.titulo')</h4>
                            <p>@lang('inicio.servicios.servicio1.texto')</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 m20 mb-lg-0">
                            <div class="bg m20" style="background-image: url({{asset('images/servicios/2.png')}})">
                                <img src="{{asset('images/servicios/1.png')}}" alt="">
                            </div>
                            <h4 class="text-uppercase">@lang('inicio.servicios.servicio2.titulo')</h4>
                            <p>@lang('inicio.servicios.servicio2.texto')</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 m20 mb-md-0">
                            <div class="bg m20" style="background-image: url({{asset('images/servicios/3.png')}})">
                                <img src="{{asset('images/servicios/1.png')}}" alt="">
                            </div>
                            <h4 class="text-uppercase">@lang('inicio.servicios.servicio3.titulo')</h4>
                            <p>@lang('inicio.servicios.servicio3.texto')</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="bg m20" style="background-image: url({{asset('images/servicios/4.png')}})">
                                <img src="{{asset('images/servicios/1.png')}}" alt="">
                            </div>
                            <h4 class="text-uppercase">@lang('inicio.servicios.servicio4.titulo')</h4>
                            <p>@lang('inicio.servicios.servicio4.texto')</p>
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
                    <h3 class="text-uppercase mb-0">@lang('inicio.banner2.titulo') <img src="{{asset('images/barco.svg')}}" width="50px" alt="" class="d-none d-md-inline"></h3>
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
                        <h2 class="text-uppercase">@lang('inicio.contacto.titulo1')</h2>
                        <h3 class="text-uppercase">@lang('inicio.contacto.titulo2')</h3>
                        <hr>

                        @if (session('message'))
                            <p class="text-center text-black"><span style="color: #009a2 !important"><i class="far fa-smile-beam"></i></span> {{session('message_c')}}</p>
                        @endif
                        <form action="{{route('sendMailContacto')}}" method="POST">
                            {{ csrf_field() }}
                            @if ($errors->has('nombre'))
                                <small class="text-danger d-block">{{ $errors->first('nombre') }}</small>
                            @endif
                            <input class="m10" type="text" name="nombre" placeholder="@lang('inicio.contacto.nombre')" value="{{old('nombre')}}">
                            @if ($errors->has('apellidos'))
                                <small class="text-danger d-block">{{ $errors->first('apellidos') }}</small>
                            @endif
                            <input class="m10" type="text" name="apellidos" placeholder="@lang('inicio.contacto.apellido')" value="{{old('apellidos')}}">
                            @if ($errors->has('compania'))
                                <small class="text-danger d-block">{{ $errors->first('compania') }}</small>
                            @endif
                            <input class="m10" type="text" name="compania" placeholder="@lang('inicio.contacto.empresa')" value="{{old('compania')}}">
                            @if ($errors->has('email'))
                                <small class="text-danger d-block">{{ $errors->first('email') }}</small>
                            @endif
                            <input class="m10" type="email" name="email" placeholder="@lang('inicio.contacto.email')" value="{{old('email')}}">
                            @if ($errors->has('telefono'))
                                <small class="text-danger d-block">{{ $errors->first('telefono') }}</small>
                            @endif
                            <input class="m10" type="text" name="telefono" placeholder="@lang('inicio.contacto.telefono')" value="{{old('telefono')}}">
                            <input type="hidden" name="servicio" id="servicio-input" value="{{old('servicio')}}">
                            @if ($errors->has('servicio'))
                                <small class="text-danger d-block">{{ $errors->first('servicio') }}</small>
                            @endif
                            <div class="dropdown m20" id="select-lie">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('inicio.contacto.servicios')
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" data-value="Flete marítimo">@lang('inicio.contacto.servicios.opcion1')</a>
                                    <a class="dropdown-item" data-value="Flete aéreo">@lang('inicio.contacto.servicios.opcion2')</a>
                                    <a class="dropdown-item" data-value="Transporte terrestre">@lang('inicio.contacto.servicios.opcion3')</a>
                                    <a class="dropdown-item" data-value="Almacenaje">@lang('inicio.contacto.servicios.opcion4')</a>
                                    <a class="dropdown-item" data-value="Asesoría aduanal">@lang('inicio.contacto.servicios.opcion5')</a>
                                </div>
                            </div>
                            @if ($errors->has('mensaje'))
                                <small class="text-danger d-block">{{ $errors->first('mensaje') }}</small>
                            @endif
                            <textarea class="m10" name="mensaje" cols="30" rows="5" placeholder="@lang('inicio.contacto.mensaje')">{{old('mensaje')}}</textarea>
                            <button type="submit" class="btn send-mail">@lang('inicio.contacto.enviar')</button>
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

@push('js')
    <script>
        var lang = '{{App::getLocale()}}';

        (function () {
            let v = document.querySelector('#servicio-input').value;
            if(v) {
                let t = document.querySelector('.dropdown-item[data-value="'+v+'"]').innerText;
                document.getElementById('dropdownMenuButton').innerText = '';
                document.getElementById('dropdownMenuButton').innerText = t;
            }
        })();
    </script>

    @if (!$errors->isEmpty())
        <script>
            (function (){
                var x = $('html, body');
                var y = $('#contacto');

                x.animate({
                    scrollTop: y.offset().top - 90
                }, 0);
            })();
        </script>
    @endif
@endpush
