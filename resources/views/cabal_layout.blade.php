<!DOCTYPE HTML>
<html>

	<head>
		@include('partials._cabalhead')
	</head>

	<body>
		
			<div class="page-container"> <!--Closing div in cabalsidenav partial-->	
			   <div class="left-content"> <!--Closing div in cabalfooter partial-->
				   <div class="mother-grid-inner"> <!--Closing div in cabalfooter partial-->

					<div class="header-main">
					<!--place cabal top nav underneath this comment start here-->
						@include('partials._cabaltopnav')
					</div> <!--header-main ends here-->

		<!-- script-for sticky-nav (_cabal top nav javascript partial) -->
		@include('partials._cabaltopnavjavascript')

		<!--inner block start here-->
		<div class="inner-block">
			@yield('content')
		</div>	

	@include('partials._cabalfooter')

		<div class="sidebar-menu"> <!-- put nav here -->
					@include('partials._cabalsidenav')
			</div> <!--slide bar menu end here-->
		  <div class="clearfix"> </div>
		</div> <!--<div class="page-container"> ends here-->

		<!--put javascript here-->
		@include('partials._cabaljavascript')
</body>
</html>                     