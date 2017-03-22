<div class="page-sidebar-inner slimscroll">
                    <ul class="menu accordion-menu">
					
					
					
 					
					
                        
						<li class="">
							<a href="{{ url(config('quickadmin.homeRoute')) }}" class="waves-effect waves-button"><span class="menu-icon icon-home"></span><p>Dashboard</p><span class="active-page"></span></a></li>
                    
@if(Auth::user()->role_id == config('quickadmin.defaultRole'))


 @foreach($menus as $menu)
                @if($menu->menu_type != 2 && is_null($menu->parent_id))
                    @if(Auth::user()->role->canAccessMenu($menu))
                        <li @if(isset(explode('/',Request::path())[1]) && explode('/',Request::path())[1] == strtolower($menu->name)) class="active" @endif>
                            <a href="{{ route(config('quickadmin.route').'.'.strtolower($menu->name).'.index') }}">
                                <i class="fa {{ $menu->icon }}"></i>
                                <span class="title">{{ $menu->title }}</span>
                            </a>
                        </li>
                    @endif
                @else
                    @if(Auth::user()->role->canAccessMenu($menu) && !is_null($menu->children()->first()) && is_null($menu->parent_id))
                       
 
                   <?php
				   $cllass='';
				    foreach($menu['children'] as $child){
                              if(Auth::user()->role->canAccessMenu($child))
								{
								
								
								 if(isset(explode('/',Request::path())[1]) && explode('/',Request::path())[1] == strtolower($child->name)){ 
								 
									 $cllass='active open';
								 
								 }								
								
								
								
								}
				   
				   }
				   ?>
 			   
				   
				   

					   <li class="droplink <?php echo $cllass; ?> ">
					   
					<a href="#" class="waves-effect waves-button"><span class="menu-icon {{ $menu->icon }}"></span><p>{{ $menu->title }}</p><span class="arrow"></span></a>    					   
					   
					   <?php /*
                            <a href="#">
                                <i class="fa {{ $menu->icon }}"></i>
                                <span class="title">{{ $menu->title }}</span>
                                <span class="fa arrow"></span>
                            </a>
							*/ 
							 
							 
							?>
							
							
							
							
                            <ul class="sub-menu">
                                @foreach($menu['children'] as $child)
                                    @if(Auth::user()->role->canAccessMenu($child))
                                        <li
                                                @if(isset(explode('/',Request::path())[1]) && explode('/',Request::path())[1] == strtolower($child->name)) class="active" @endif>
                                            <a href="{{ route(strtolower(config('quickadmin.route').'.'.$child->name).'.index') }}">
                                               
                                                <span class="title">
                                                    {{ $child->title  }}
                                                </span>
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                    @endif
                @endif
            @endforeach



@endif
					
					</ul>
                </div><!-- Page Sidebar Inner -->

 