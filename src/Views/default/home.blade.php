<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    @includeIf('Ranger::partials.metadata')
    @includeIf('Ranger::partials.stylesheet')
    @yield('extra-styles')
    </head>

    <body>
        @includeIf('Ranger::partials.header')



        @yield('content-main')


        @includeIf('Basetheme::position.loadview',['position'=> 'footer-section'])
        @includeIf('Ranger::partials.footerscript')
        @yield('extra-scripts')
    </body>
</html>
