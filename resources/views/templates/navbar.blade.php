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
        <li class="{{ request()->routeIs('dashboard*') ? 'bg-gray-500/30 my-0 mx-2 flex items-center rounded-lg' : '' }}">
          <a class="py-2.7 dark:text-white dark:opacity-80 text-sm my-0 mx-2 flex items-center rounded-lg px-4 font-semibold text-slate-700 {{ request()->routeIs('dashboard*') ? 'text-white' : '' }}" href="{{ route('dashboard') }}">
            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
              <i class="relative top-0 leading-normal fa fa-home text-sm"></i>
            </div>
            <span class="ml-1 font-bold {{ request()->routeIs('dashboard*') ? 'text-white' : '' }}">Dashboard</span>
          </a>
        </li>
        </ul>
        <ul class="flex flex-col pl-0 mb-2">
        <li class="{{ request()->routeIs('appointment*') ? 'bg-gray-500/30 my-0 mx-2 flex items-center rounded-lg' : '' }}">
          <a class="py-2.7 dark:text-white dark:opacity-80 text-sm my-0 mx-2 flex items-center rounded-lg px-4 font-semibold text-slate-700 {{ request()->routeIs('appointment*') ? 'text-white' : '' }}" href="{{ route('appointment') }}">
            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
              <i class="relative top-0 leading-normal fa-solid fa-calendar-check text-sm"></i>
            </div>
            <span class="ml-1 font-bold {{ request()->routeIs('appointment*') ? 'text-white' : '' }}">Appointment</span>
          </a>
        </li>
        </ul>
        <ul class="flex flex-col pl-0 mb-2">
        <li class="{{ request()->routeIs('inventory*') ? 'bg-gray-500/30 my-0 mx-2 flex items-center rounded-lg' : '' }}">
          <a class="py-2.7 dark:text-white dark:opacity-80 text-sm my-0 mx-2 flex items-center rounded-lg px-4 font-semibold text-slate-700 {{ request()->routeIs('inventory*') ? 'text-white' : '' }}" href="{{ route('inventory') }}">
            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
              <i class="relative top-0 leading-normal fa-solid fa-truck-ramp-box  text-sm"></i>
            </div>
            <span class="ml-1 font-bold {{ request()->routeIs('inventory*') ? 'text-white' : '' }}">Inventory</span>
          </a>
        </li>
        </ul>
        <ul class="flex flex-col pl-0 mb-2">
        <li class="{{ request()->routeIs('visitor*') ? 'bg-gray-500/30 my-0 mx-2 flex items-center rounded-lg' : '' }}">
          <a class="py-2.7 dark:text-white dark:opacity-80 text-sm my-0 mx-2 flex items-center rounded-lg px-4 font-semibold text-slate-700 {{ request()->routeIs('visitor*') ? 'text-white' : '' }}" href="{{ route('visitor') }}">
            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
              <i class="relative top-0 leading-normal fa-solid fa-person text-sm"></i>
            </div>
            <span class="ml-1 font-bold {{ request()->routeIs('visitor*') ? 'text-white' : '' }}">Visitor</span>
          </a>
        </li>
        </ul>
        </ul>
    </aside>