@include('layouts.header')
@include('layouts.sidebar')
            {{--  Header Close Here  --}}
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                        @yield('content')

                    </div> <!-- container -->

                </div> <!-- content -->

                {{--  Content Close Here  --}}

                @if (session()->has('success'))
                <script type="text/javascript">
                  $(function(){
                      $.notify("{{ session()->get('success')}}",{globalPosition:'top right',className:'success' });
                  });
                </script>
                @endif
@include('layouts.footer')
