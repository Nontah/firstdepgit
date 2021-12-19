<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Favicon -->
       <link rel="shortcut icon" type="/image/x-icon" href="testacdoc/images/favicon.png">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="/testacdoc/css/material-design-iconic-font.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="/testacdoc/css/font-awesome.min.css">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="/testacdoc/css/fontawesome-stars.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="/testacdoc/css/meanmenu.css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="/testacdoc/css/owl.carousel.min.css">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="/testacdoc/css/slick.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="/testacdoc/css/animate.css">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="/testacdoc/css/jquery-ui.min.css">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="/testacdoc/css/venobox.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="/testacdoc/css/nice-select.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="/testacdoc/css/magnific-popup.css">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="/testacdoc/css/bootstrap.min.css">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="/testacdoc/css/helper.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="/testacdoc/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="/testacdoc/css/responsive.css">
        <!-- Modernizr js -->
        <script src="/testacdoc/js/vendor/modernizr-2.8.3.min.js"></script>

<style type="text/css">
/*
.justify-between {
    justify-content: space-between;
}
.items-center {
    align-items: center;
}
.flex {
    display: flex;
}


.z-0 {
    z-index: 0;
}
.shadow-sm {
    --tw-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.relative {
    position: relative;
}
.inline-flex {
    display: inline-flex;
}
.rounded-md {
    border-radius: 0.375rem;
}




.sm\:flex-1 {

    flex: 1 1 0%;

}
.sm\:justify-between {

    justify-content: space-between;

}
.sm\:items-center {

    align-items: center;

}
.sm\:flex {

    display: flex;

}

/*
.justify-between {
    justify-content: space-between;
}
.items-center {
    align-items: center;
}
.justify-between {
    justify-content: space-between;
}
.items-center {
    align-items: center;
}
.flex {
    display: flex;
}*/
article, aside, dialog, figcaption, figure, footer, header, hgroup, main, nav, section {
    display: block;
}
* {
    --tw-ring-inset: var(--tw-empty, );
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: rgba(59, 130, 246, 0.5);
    --tw-ring-offset-shadow: 0 0 #0000;
    --tw-ring-shadow: 0 0 #0000;
}
* {
    --tw-shadow: 0 0 #0000;
}
*, ::before, ::after {
    box-sizing: border-box;
    border-width: 0;
    border-style: solid;
    border-color: #e5e7eb;
}
*, ::before, ::after {
    box-sizing: border-box;
}
*, ::after, ::before {
    box-sizing: border-box;
}
.paginatoin-area {
    font-size: 14px;
    font-weight: 400;
}


.shadow-sm {
  --tw-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow {
  --tw-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-md {
  --tw-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-lg {
  --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-xl {
  --tw-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-2xl {
  --tw-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-inner {
  --tw-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, 0.06);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-none {
  --tw-shadow: 0 0 #0000;
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.group:hover .group-hover\:shadow-sm {
  --tw-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.group:hover .group-hover\:shadow {
  --tw-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.group:hover .group-hover\:shadow-md {
  --tw-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.group:hover .group-hover\:shadow-lg {
  --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.group:hover .group-hover\:shadow-xl {
  --tw-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.group:hover .group-hover\:shadow-2xl {
  --tw-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.group:hover .group-hover\:shadow-inner {
  --tw-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, 0.06);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.group:hover .group-hover\:shadow-none {
  --tw-shadow: 0 0 #0000;
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.focus-within\:shadow-sm:focus-within {
  --tw-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.focus-within\:shadow:focus-within {
  --tw-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.focus-within\:shadow-md:focus-within {
  --tw-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.focus-within\:shadow-lg:focus-within {
  --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.focus-within\:shadow-xl:focus-within {
  --tw-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}











svg:not(:root) {
    overflow: hidden;
}
.w-5 {
    width: 1.25rem;
}
.h-5 {
    height: 1.25rem;
}
img, svg, video, canvas, audio, iframe, embed, object {
    display: block;
    vertical-align: middle;
}
* {
    --tw-ring-inset: var(--tw-empty, );
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: rgba(59, 130, 246, 0.5);
    --tw-ring-offset-shadow: 0 0 #0000;
    --tw-ring-shadow: 0 0 #0000;
}
* {
    --tw-shadow: 0 0 #0000;
}
*, ::before, ::after {
    box-sizing: border-box;
    border-width: 0;
    border-style: solid;
    border-color: #e5e7eb;
}*/
</style>
 <link rel="stylesheet" href="{{ asset('css/ap.css') }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

<head>
	<title>
     

    </title>
</head>
<body>


 		 <div class="font-sans text-gray-900 antialiased">

            {{ $slot }}
        </div>
</body>
 <!-- Footer-->
        <footer class="py-5 bg-dark">
          
        </footer>
            <!-- Body Wrapper End Here -->
        <!-- jQuery-V1.12.4 -->
        <script src="/testacdoc/js/vendor/jquery-1.12.4.min.js"></script>
        <!-- Popper js -->
        <script src="/testacdoc/js/vendor/popper.min.js"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="/testacdoc/js/bootstrap.min.js"></script>
        <!-- Ajax Mail js -->
        <script src="/testacdoc/js/ajax-mail.js"></script>
        <!-- Meanmenu js -->
        <script src="/testacdoc/js/jquery.meanmenu.min.js"></script>
        <!-- Wow.min js -->
        <script src="/testacdoc/js/wow.min.js"></script>
        <!-- Slick Carousel js -->
        <script src="/testacdoc/js/slick.min.js"></script>
        <!-- Owl Carousel-2 js -->
        <script src="/testacdoc/js/owl.carousel.min.js"></script>
        <!-- Magnific popup js -->
        <script src="/testacdoc/js/jquery.magnific-popup.min.js"></script>
        <!-- Isotope js -->
        <script src="/testacdoc/js/isotope.pkgd.min.js"></script>
        <!-- Imagesloaded js -->
        <script src="/testacdoc/js/imagesloaded.pkgd.min.js"></script>
        <!-- Mixitup js -->
        <script src="/testacdoc/js/jquery.mixitup.min.js"></script>
        <!-- Countdown -->
        <script src="/testacdoc/js/jquery.countdown.min.js"></script>
        <!-- Counterup -->
        <script src="/testacdoc/js/jquery.counterup.min.js"></script>
        <!-- Waypoints -->
        <script src="/testacdoc/js/waypoints.min.js"></script>
        <!-- Barrating -->
        <script src="/testacdoc/js/jquery.barrating.min.js"></script>
        <!-- Jquery-ui -->
        <script src="/testacdoc/js/jquery-ui.min.js"></script>
        <!-- Venobox -->
        <script src="/testacdoc/js/venobox.min.js"></script>
        <!-- Nice Select js -->
        <script src="/testacdoc/js/jquery.nice-select.min.js"></script>
        <!-- ScrollUp js -->
        <script src="/testacdoc/js/scrollUp.min.js"></script>
        <!-- Main/Activator js -->
        <script src="/testacdoc/js/main.js"></script>


<link href="{{ asset('jsautocom/jquery-uic.css') }}">

<script src="{{ asset('jsautocom/jquery-1.11.3.min.js') }}"></script>
       
 <link href="{{ asset('jsautocom/jquery-uicx.css') }}" rel="Stylesheet"></link>

<script src="{{ asset('jsautocom/jquery-ui.js') }}"></script>

<link href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<link href="https://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>

<script src="https://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>


<script type="text/javascript">   
        $( "#acceuil_search" ).autocomplete({
    source: "{{ route('livesearchAccueil') }}",
    minLength: 1,
    select:function(event,ui) { 
        location.href = ui.item.link;
    }
});
</script>
      <x-footer-layout>
            
            </x-footer-layout>
</html>