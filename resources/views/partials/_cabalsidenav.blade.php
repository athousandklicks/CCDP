<!--slider menu-->

<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
	<!--<img id="logo" src="" alt="Logo"/>--> 
</a> </div>		  
<div class="menu">
	<ul id="menu" >


		<li id="menu-home" ><a href=""><i class="fa fa-user"></i><span>Welcome {{Auth::user()->name}}</span></a>
			<ul id="menu-academico-sub" >
				<li><a href="{{ route('logout') }}"
					onclick="event.preventDefault();
					document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>
					Logout</a>

					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						{{ csrf_field() }}
					</form>
					</li>
					<li id="menu-academico-avaliacoes" ><a href="{{route('static_pages.index')}}">Go to Website</a></li>
				</ul>
			</li>

			<li id="menu-home" ><a href="{{route('homes.index')}}"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>


			<li id="menu-academico" ><a href="#"><i class="fa fa-file-text"></i><span>Slide Management</span><span class="fa fa-angle-right" style="float: right"></span></a>
				<ul id="menu-academico-sub" >
					<li id="menu-academico-boletim" ><a href="{{route('slides.create')}}">Add Slide</a></li>
					<li id="menu-academico-avaliacoes" ><a href="{{route('slides.index')}}">View Slide</a></li>
				</ul>
			</li>




			<li id="menu-academico" ><a href="#"><i class="fa fa-file-text"></i><span>Manage Pages</span><span class="fa fa-angle-right" style="float: right"></span></a>
				<ul id="menu-academico-sub" >
					<li id="menu-academico-boletim" ><a href="{{route('mains.create')}}">Add Page</a></li>
					<li id="menu-academico-avaliacoes" ><a href="{{route('mains.index')}}">Page List</a></li>
				</ul>
			</li>

			<li id="menu-academico" ><a href="#"><i class="fa fa-calendar"></i><span>Manage Events </span><span class="fa fa-angle-right" style="float: right"></span></a>
				<ul id="menu-academico-sub" >
					<li id="menu-academico-boletim" ><a href="{{route('events.create')}}">Add Event</a></li>
					<li id="menu-academico-avaliacoes" ><a href="{{route('events.index')}}">Event List</a></li>		           
				</ul>
			</li>

			<li id="menu-academico" ><a href="#"><i class="fa fa-photo"></i><span>Manage Gallery</span><span class="fa fa-angle-right" style="float: right"></span></a>
				<ul id="menu-academico-sub" >
					<li id="menu-academico-boletim" ><a href="{{route('gallerys.create')}}">Add Image</a></li>
					<li id="menu-academico-avaliacoes" ><a href="{{route('gallerys.index')}}">Image List</a></li>		           
				</ul>
			</li>

			<li><a href="#"><i class="fa fa-cogs"></i><span>Settings</span><span class="fa fa-angle-right" style="float: right"></span></a>
				<ul>
					<li><a href="grids.html">Grids</a></li>
					<li><a href="portlet.html">Portlets</a></li>		            
				</ul>
			</li>


		</ul>
	</div>

