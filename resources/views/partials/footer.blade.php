 <!-- ////////////////////////////////////////////////////////////////////////////-->
      <!-- Bootstrap 5 JavaScript -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    {{-- jquery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <footer class="footer footer-transparent footer-light navbar-shadow">
     <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2 container center-layout">
         <span class="float-md-left d-block d-md-inline-block">Copyright &copy; {{ date("Y") }} <a class="text-bold-800 grey darken-2" href="https://arnewwaves.net" target="_blank"> New Waves </a>, All rights reserved. </span>
         {{-- <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span> --}}
     </p>
 </footer>

 @include('partials.scripts')


 @stack('scripts')

 </body>
 </html>
