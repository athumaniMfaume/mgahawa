    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{url('/')}}" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                            
                        </a> <a  class="menu-trigger">
                            <span>Menu</span>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{url('/')}}" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>

            
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li>
                           
                         
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>

                            <li class="scroll-to-section ">

                                @auth

                                <a class="scroll-to-section " href="{{url('/showcart',Auth::user()->id)}}">
                                <span class="badge badge-danger"> Cart[{{$count}}]</span>
                                </a>

                                @endauth

                                @guest
                                <a class="scroll-to-section " >
                                    <span class="badge badge-danger"> Cart[0]</span>
                                    </a>
                                @endguest

                                

                            </li>
                            <li>
                                @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                      <li> <x-app-layout>

                                      </x-app-layout> </li>
                                    </div>
                                    @else
                                       <li> <a
                                            href="{{ route('login') }}"
                                           class="text-sm text-gray-700 underline"
                                        >
                                            Log in
                                        </a></li>

                                        @if (Route::has('register'))
                                           <li> <a
                                                href="{{ route('register') }}"
                                               class="text-sm text-gray-700 underline">
                                                Register
                                            </a></li>
                                        @endif
                                    @endauth
                                       
                            @endif
                            </li>
                        </ul>
                        {{-- <a class='menu-trigger'>
                            <span>Menu</span>
                        </a> --}}
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>