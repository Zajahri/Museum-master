@include('.templates\navbar')
    <body class="m-0 text-base font-sans antialiased font-normal dark:bg-slate-900 leading-default bg-gray-100 text-slate-500">
    @include('.templates\navbar')

    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
    <!-- Navbar -->
    <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="false">
      <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit lg:flex-1">
        <nav>
          <h3 class="mb-0 mt-4 font-bold text-2xl text-slate-700 capitalize">Inventory</h3>
        </nav>
        <div class="flex items-center mt-2 sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
          <div class="flex items-center md:ml-auto md:pr-4">
            <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
              <li class="flex items-center">
                <a href="#" class="block px-0 py-2 text-sm font-semibold text-slate-700 transition-all ease-nav-brand">
                  <i class="fa fa-user sm:mr-1"></i>
                  <span class="hidden sm:inline">Logout</span>
                </a>
              </li>
              <li class="flex items-center pl-4 xl:hidden">
                <a href="#" class="block p-0 text-white transition-all ease-nav-brand text-sm" sidenav-trigger="">
                  <div class="w-4.5 overflow-hidden ">
                    <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-slate-700 transition-all translate-x-[5px]"></i>
                    <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-slate-700 transition-all"></i>
                    <i class="ease relative block h-0.5 rounded-sm bg-slate-700 transition-all translate-x-[5px]"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    </div>
</body>
</html>