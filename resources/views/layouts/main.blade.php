<!DOCTYPE html>
<html lang="en">
<head>
<title>Srk Em High School</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
	<!--Header-part-->
	   @include('layouts.header')
	<!--close-Header-part--> 

	<!--sidebar-menu-->
	   @include('layouts.sidemenu')
	<!--sidebar-menu-->

	<!--main-container-part-->
		<div id="content">
		   @include('layouts.widegets')
		   <div id="container">
		      @yield('content')
		   </div>
		</div>
	<!--end-main-container-part-->

	<!--Footer-part-->
	  @include('layouts.footer')
	<!--end-Footer-part-->
</body>
</html>
