<?php
        $menu_items = ExtensionsValley\Menumanager\Models\Menuitems::getAllMenusWithType($position,$menu_type);

?>
                 <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                  @if(sizeof($menu_items))
                            @foreach($menu_items as $menuitem)
                                @if($menuitem->parent_menu == 0)
                            <li @if(Request::path() === $menuitem->source) class="active" @endif>
                            <a @if($menuitem->is_new_tab == 1) target='_blank' @endif
                               href="#" data-nav-section="{{strtolower($menuitem->menu_name)}}">
                               <span>{{$menuitem->menu_name}}</span>
                            </a>
                                </li>
                                @endif
                            @endforeach
                    @else
                        <li class="active"><a href="#" data-nav-section="home"><span>Home</span></a></li>
                        <li><a href="#" data-nav-section="services"><span>Services</span></a></li>
                        <li><a href="#" data-nav-section="screenshots"><span>Screenshots</span></a></li>
                        <li><a href="#" data-nav-section="tour"><span>Tour</span></a></li>
                        <li><a href="#" data-nav-section="features"><span>Features</span></a></li>
                        <li><a href="#" data-nav-section="testimonials"><span>Testimonials</span></a></li>
                        <li><a href="#" data-nav-section="pricing"><span>Pricing</span></a></li>
                    @endif
                  </ul>
                </div>
