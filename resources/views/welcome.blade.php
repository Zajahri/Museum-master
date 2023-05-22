<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="icon" type="logo" href="/img/logo2.png" />
    <title>Bayambang Municipal Museum</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="/icon/css/all.min.css">
    <script src="{{ asset('js/charts.js') }}"></script>
    <script src="{{ asset('js/pie.js') }}"></script>
    <script src="{{ asset('js/sidenav-burger.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
  </head>

  <body class="m-0 text-base font-sans antialiased font-normal dark:bg-slate-900 leading-default bg-gray-100 text-slate-500">
    <div class="absolute  w-full dark:hidden min-h-75 "></div>
    <!-- sidenav  -->
    <aside class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full border-0 dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0 ps bg-neutral-950 shadow-none dark" aria-expanded="false">
      <div class="h-14">
        <a class="flex justify-center py-6">
          <img src="/img/logo.png" class="h-19 " alt="logo" />
        </a>
      </div>
      
      <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent mb-2" />

      <h5 class="flex justify-center opacity-80 mb-4 text-white font-bold">Hello, Admin</h5>
      <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
        <ul class="flex flex-col pl-0 mb-2">
          <li class="mt-0.5 w-full">
            <a class="py-2.7 dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors hover:bg-gray-500/30 focus:bg-gray-500/30 bg-gray-500/30" href="#">
              <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <i class="relative top-0 leading-normal text-red-900 fa fa-home text-sm"></i>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease font-bold text-white">Dashboard</span>
            </a>
          </li>
        </ul>
        <ul class="flex flex-col pl-0 mb-2">
          <li class="mt-0.5 w-full">
            <a class="py-2.7 dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors hover:bg-gray-500/30 focus:bg-gray-500/30" href="#">
              <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
              <i class="relative top-0 leading-normal text-white fa-solid fa-calendar-check text-sm"></i>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease text-white ">Appointment</span>
              </a>
          </li>
        </ul>
        <ul class="flex flex-col pl-0 mb-2">
          <li class="mt-0.5 w-full">
            <a class="py-2.7 dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors hover:bg-gray-500/30 focus:bg-gray-500/30" href="#">
              <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
              <i class="relative top-0 leading-normal text-white fa-solid fa-truck-ramp-box text-sm"></i>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease text-white">Inventory</span>
              </a>
          </li>
        </ul>
        <ul class="flex flex-col pl-0 mb-2">
          <li class="mt-0.5 w-full">
            <a class="py-2.7 dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors hover:bg-gray-500/30 focus:bg-gray-500/30" href="#">
              <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
              <i class="relative top-0 leading-normal text-white fa-solid fa-person text-sm"></i>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease text-white">Visitor</span>
              </a>
          </li>
        </ul>
    </aside>

    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
      <!-- Navbar -->
      <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="false">
        <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit lg:flex-1">
          <nav>
            <h3 class="mb-0 mt-4 font-bold text-2xl text-slate-700 capitalize">Dashboard</h3>
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
      <!-- end Navbar -->

      <!-- cards -->
      <div class="w-full px-6 py-6 mx-auto">
        <!-- row 1 -->
        <div class="flex flex-wrap -mx-3">
          <!-- card1 -->
          <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                      <p class="mb-0 font-sans text-xs font-semibold leading-normal uppercase dark:text-white dark:opacity-60">GENDER PERCENTAGE</p>
                      <div class="flex flex-row justify-between ml-6">
                      <div class="flex flex-col ">
                        <div class="mb-2 font-bold dark:text-white">Male</div>
                        <h5 class="mb-2 font-bold dark:text-white text-xl">60%</h5>
                      </div>
                      <div class="flex flex-col">
                        <div class="mb-2 font-bold dark:text-white">Female</div>
                        <h5 class="mb-2 font-bold dark:text-white text-xl">40%</h5>
                      </div> 
                    </div>                
                  </div>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <!-- card2 -->
          <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                      <p class="mb-6 mt-1 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60 ">FORMS RELEASED</p>
                      <h4 class="mb-2 font-bold dark:text-white flex justify-center text-xl ">2,300</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- card3 -->
          <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                      <p class="mb-6 mt-1 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">VISITOR COUNT</p>
                      <h4 class="mb-2 font-bold dark:text-white flex justify-center text-xl">+5,462</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- card4 -->
          <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                      <p class="mb-6 mt-1 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">Total Users</p>
                      <h5 class="mb-2 font-bold dark:text-white flex justify-center text-xl">$10,430</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- cards row 2 -->
        <div class="flex flex-wrap justify-between mt-6 -mx-3">
          <div class="w-full max-w-full px-3 mt-0 lg:w-8/12 lg:flex-none">
            <div class="border-black/12.5 dark:bg-slate-850 dark:shadow-dark-xl shadow-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
              <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid p-6 pt-4 pb-0">
                <h6 class="capitalize dark:text-white">Visitor Statistics</h6>
              </div>
              <div class="flex-auto p-4">
                <div>
                  <canvas id="chart-line" height="485"></canvas>
                </div>
              </div>
            </div>
          </div>
           
          <!-- pie -->
          <div class="w-full max-w-full px-3 mt-0 lg:w-4/12 lg:flex-none">
            <div class="border-black/12.5 dark:bg-slate-850 dark:shadow-dark-xl shadow-xl relative z-20 flex flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
              <div class="shadow-lg rounded-lg overflow-hidden">
                <h6 class="py-2 px-5 mb-0 dark:text-white">Satisfaction Rate</h6>
                <div class="flex-auto">
                  <canvas  id="chartPie" height="485" ></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
    </main>
  </body>
  
  
  <script src="{{ url('js/plugins/chart.umd.js') }}">async </script>
  <script src= "{{ asset('js/plugins/chartjs.min.js') }}"> async</script>
  <script src="{{ asset('js/App.js') }}"> async </script>
</html>
