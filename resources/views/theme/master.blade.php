
<!doctype html>
<html lang="en">

@include('theme.partials.head')
	<body>

        @include('theme.partials.nav')
		
        @include('theme.partials.hero')
		

		
         <!-- different content -->

        @yield('content')




        @include('theme.partials.footer')
		
        @include('theme.partials.scripts')
		
	</body>

</html>