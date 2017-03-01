Installation Instructions:
Media Module
---------------------------


In Blade:

Step 1:
    @include('media::layoutfiles.embedd')


Step 2:
    Where you want to display (single / gallery) image(s):
    ------------------------------------------------------
    @yield('insert-image-code')
    @yield('insert-image-gallery')
    

Step 3:
    For Single Image:
    Your controller should passed a variable ($featured_img) to display img