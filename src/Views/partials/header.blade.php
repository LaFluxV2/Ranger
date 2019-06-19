 <header role="banner" id="fh5co-header">
            <div class="container">
                <!-- <div class="row"> -->
                <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <!-- Mobile Toggle Menu Button -->
                    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
                    <a class="navbar-brand" href="{{url('/')}}">{{ \WebConf::get('site_name')}}<span>.</span></a>
                </div>
                @includeIf('Ranger::position.loadview',['position'=> 'header-menu'])

                </nav>
              <!-- </div> -->
          </div>
    </header>



