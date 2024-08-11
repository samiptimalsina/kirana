
	<!-- Header Area Starts -->
	<header class="bg-slate-300/[.5] fixed font-cursive-merie left-0 lg:-translate-x-1/2 lg:left-1/2 lg:mx-auto lg:transform lg:translate-y-0 lg:w-4/5 ml-4 px-0 py-1 rounded shadow-sm top-0 w-full xl:w-11/12 z-[20]" style="background-color: rgba(246,224,1,0.69); color:#000'">
	  <div class="mx-4 lg:flex lg:items-center">
	    <div class="flex items-center justify-between">
	      <div class="lg:shrink-0">
	        <a href="{{ route('index') }}">
                    @if(isset($settings->logo))

                <img src=" {{ $settings->getLogo($settings->logo) }}" alt="logo" class="h-auto lg:m-0 lg:p-2 m-auto max-w-[180px] min-w-[90px] px-2 py-2" />
                     @else
                        <div>No logo uploaded</div>
                    @endif


            </a>
	      </div>
	      <div class="nav-ham p-4 lg:hidden cursor-pointer transition ease-in-out duration-75 open">
	      	@foreach ([1, 2, 3] as $data)
			    		<span class="bg-gray-600 block w-5 h-[3px] my-1 mx-0"></span>
			    	@endforeach
	      </div>
	      <div class="nav-ham p-4 lg:hidden cursor-pointer relative transition ease-in-out duration-75 close hidden">
	        <span class="bg-gray-600 block w-5 h-[3px] my-1 mx-0 absolute top-3.5 right-4 transform rotate-45"></span>
	        <span class="bg-gray-600 block w-5 h-[3px] my-1 mx-0  absolute top-3.5 right-4 transform -rotate-45"></span>
	      </div>
	    </div>

	    <div class="lg:flex-1 nav-collapse hidden lg:block" >
	      <ul class="pb-2 lg:pb-0 lg:flex lg:flex-wrap lg:items-center lg:justify-end">
	      	@foreach ($navdata as $data)
					     <li class="font-bold lg:px-4 lg:py-2 lg:text-left p-2.5 text-[12.5px] text-right uppercase transition ease-in-out duration-300 hover:scale-105">
					     	<a href={{ $data['href'] }}>{{ $data['text'] }}</a>
					     </li>
					@endforeach

					@if (Route::has('login'))
				 @auth
					<div class="m-2 flex justify-end lg:mx-4 lg:block" style="display: none">
						<x-jet-dropdown align="right" width="48">
							<x-slot name="trigger">
								@if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
								<button
									class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition"
								>
									<img
										class="h-8 w-8 rounded-full object-cover"
										src="{{ Auth::user()->profile_photo_url }}"
										alt="{{ Auth::user()->name }}"
									/>
								</button>
								@else
								<span class="inline-flex rounded-md">
									<button
										type="button"
										class="bg-transparent border border-transparent duration-300 ease-in-out focus:outline-none font-bold font-medium hover:scale-105 inline-flex items-center lg:text-left text-[12.5px] text-gray-900 text-right transition uppercase"
									>
										{{ Auth::user()->name }}

										<svg
											class="ml-2 -mr-0.5 h-4 w-4"
											xmlns="http://www.w3.org/2000/svg"
											viewBox="0 0 20 20"
											fill="currentColor"
										>
											<path
												fill-rule="evenodd"
												d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
												clip-rule="evenodd"
											/>
										</svg>
									</button>
								</span>
								@endif
							</x-slot>

							<x-slot name="content">
								<!-- Account Management -->
								<div class="block px-4 py-2 text-xs text-gray-400 text-right">
									{{ __('Manage Account') }}
								</div>

								<x-jet-dropdown-link class="text-right" href="{{ route('profile.show') }}">
									{{ __('Profile') }}
								</x-jet-dropdown-link>

								@if (Laravel\Jetstream\Jetstream::hasApiFeatures())
								<x-jet-dropdown-link class="text-right" href="{{ route('api-tokens.index') }}">
									{{ __('API Tokens') }}
								</x-jet-dropdown-link>
								@endif

								<div class="border-t border-gray-100"></div>

								<!-- Authentication -->
								<form method="POST" action="{{ route('logout') }}" x-data>
									@csrf

									<x-jet-dropdown-link class="text-right"
										href="{{ route('logout') }}"
										@click.prevent="$root.submit();"
									>
										{{ __('Log Out') }}
									</x-jet-dropdown-link>
								</form>
								<div class="border-t border-gray-100"></div>
								<x-jet-dropdown-link class="text-right p-2.5 text-sm font-bold text-slate-800 uppercase text-[12.5px] text-gray-500 text-right" href="{{ route('admin.index') }}" target="_blank">
									Dashboard
								</x-jet-dropdown-link>
							</x-slot>
						</x-jet-dropdown>
					</div>
				 @else
					<div class="m-2 flex justify-end lg:mx-4 lg:block" style="display: none">
						<x-jet-dropdown align="right" width="48">
							<x-slot name="trigger">
								<span class="inline-flex rounded-md">
									<button
										type="button"
										class="bg-transparent border border-transparent duration-300 ease-in-out focus:outline-none font-bold font-medium hover:scale-105 inline-flex items-center lg:text-left text-[12.5px] text-gray-900 text-right transition uppercase"
									>
										User
									</button>
								</span>
							</x-slot>

							<x-slot name="content">

								<x-jet-dropdown-link class="text-right p-2.5 text-sm font-bold text-slate-800 uppercase text-[12.5px] text-gray-500 text-right" href="{{ route('login') }}">
									Login
								</x-jet-dropdown-link>

								@if (Route::has('register'))
								<x-jet-dropdown-link class="text-right p-2.5 text-sm font-bold text-slate-800 uppercase text-[12.5px] text-gray-500 text-right" href="{{ route('register') }}">
									Register
								</x-jet-dropdown-link>
								@endif
								<div class="border-t border-gray-100"></div>
								<x-jet-dropdown-link class="text-right p-2.5 text-sm font-bold text-slate-800 uppercase text-[12.5px] text-gray-500 text-right" href="{{ route('admin.index') }}" target="_blank">
									Dashboard
								</x-jet-dropdown-link>
							</x-slot>
						</x-jet-dropdown>
					</div>
				@endif @endif

	      </ul>
	    </div>
	  </div>
	</header>
	<!-- Header Area End -->


@if (session('msg'))
    <div id="alert-box" class="absolute inset-0 flex items-center justify-center">
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-5 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('msg') }}</span>
            <span class="absolute top-0 right-0 px-4 px-3">
                <svg id="close-alert" class="fill-current h-6 w-6 text-green-500 cursor-pointer" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1 1 0 01-1.414 0L10 11.414l-2.934 2.935a1 1 0 01-1.414-1.415l2.935-2.934-2.935-2.935a1 1 0 111.414-1.414l2.935 2.935 2.934-2.935a1 1 0 011.415 1.414L11.414 10l2.935 2.934a1 1 0 010 1.415z"/></svg>
            </span>
        </div>
    </div>
    <script>
        document.getElementById('close-alert').addEventListener('click', function() {
            document.getElementById('alert-box').style.display = 'none';
        });
    </script>
@endif
