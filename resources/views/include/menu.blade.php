<nav class="menu" id="content-menu">
    <div class="container-fluid w14">
        <div class="row align-items-center">
            <div class="col-6">
                <a href="">
                    <img src="{{asset('images/logo.svg')}}" alt="4SEA" class="logo">
                </a>
            </div>
            <div class="col-6 text-right">
                <img src="{{asset('images/menu.svg')}}" alt="" class="btn-menu" id="btn-menu">
            </div>
        </div>
    </div>
</nav>

<div class="menu--list" id="menu--list">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <ul class="m30">
                    <li class="move-animation active"><a href="javascript:;" data-id="#inicio" data-speed="1500" data-space="0">@lang('menu.inicio')</a></li>
                    <li class="move-animation"><a href="javascript:;" data-id="#nosotros" data-speed="1500" data-space="90">@lang('menu.nosotros')</a></li>
                    <li class="move-animation"><a href="javascript:;" data-id="#soluciones" data-speed="1500" data-space="90">@lang('menu.soluciones')</a></li>
                    <li class="move-animation"><a href="javascript:;" data-id="#servicios" data-speed="1500" data-space="90">@lang('menu.servicios')</a></li>
                    <li class="move-animation"><a href="javascript:;" data-id="#contacto" data-speed="1500" data-space="90">@lang('menu.contacto')</a></li>
                </ul>
                <div class="redes text-right">
                    <a href="{{ route('change_lang', ['lang' => 'es']) }}" {{(App::getLocale() == 'es') ? 'class=active' : ''}}>ES</a> -
                    <a href="{{ route('change_lang', ['lang' => 'en']) }}" {{(App::getLocale() == 'en') ? 'class=active' : ''}}>EN</a>
                </div>
            </div>
        </div>
    </div>
</div>
