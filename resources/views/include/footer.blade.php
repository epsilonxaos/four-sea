<footer>
    <div class="container-fluid w14">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-7 col-xl-6">
                <h3 class="text-uppercase">@lang('footer.titulo')</h3>
                <hr>

                <div class="row m-md-30">
                    <div class="col-12 col-md-6 m30 mb-md-0">
                        <p class="mb-0"><b>@lang('footer.contacto')</b></p>
                        <p class="mb-0"><a href="mailto:">contact@4seaworldtransport.com</a></p>
                        <p class="mb-0">@lang('footer.telefono'): +52 1 999 136 8753</p>
                    </div>
                    <div class="col-12 col-md-6 m30 mb-md-0">
                        <p class="mb-0"><b>@lang('footer.direccion')</b></p>
                        <p class="mb-0">Calle 49-D, Fracc. Las Américas</p>
                        <p class="mb-0">Mérida, Yucatán, 97302 México</p>
                    </div>
                </div>

                <p class="red mb-0">{{Date('Y')}} 4SEA. @lang('footer.derechos').</p>
            </div>
            <div class="col-12 col-md-3 col-lg-4 col-xl-5 text-right">
                <img src="{{asset('images/flecha.svg')}}" alt="">
            </div>
        </div>
    </div>
</footer>
