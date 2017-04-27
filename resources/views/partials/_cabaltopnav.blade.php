
					<div class="header-left">
							<div class="logo-name">
									 <a href="index.html"> <h1>CCDP Admin</h1> 

								  </a> 								
							</div>
							<!--search-box-->
								<div class="">

								</div><!--//end-search-box-->
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
							<div class="profile_details_left"><!--notifications of menu start -->
								
								<div class="clearfix"> </div>
							</div>
							<!--notification menu end -->
							<div class="profile_details">		
								<ul>

		

									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<div class="user-name">
													<p>Welcome {{Auth::user()->name}}</p>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
											<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 

										<li>
									        <a href="{{ route('logout') }}"
									            onclick="event.preventDefault();
									            document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>
									            Logout</a>

									            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									                {{ csrf_field() }}
									            </form>
									        </li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				
<!--header end here-->
