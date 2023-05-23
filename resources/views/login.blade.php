<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="icon" type="logo" href="img/logo.png" />
    <title>Bayambang Municipal Museum</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
  </head>

<body  class="m-0 text-base font-sans antialiased font-normal dark:bg-slate-900 leading-default bg-gray-100 text-slate-500">
    
  <div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="px-8 py-6 mt-4 text-left bg-white rounded-lg shadow-lg">
      <div class="flex items-center justify-center mb-12" >
        <img src="img/logo.png" class="h-19" /> 
      </div>
        <form>
            <label class="text-gray-900 text-lg">Username</label>
            <input class="w-full rounded-lg py-2 px-3 bg-gray-100 text-gray-800 outline-none hover:bg-gray-200  focus:bg-gray-200 mb-4" type="text" id="username" name="username"
            />
            <label class="block text-gray-900 text-lg mb-2" for="password">Password</label>
            <input 
              class="w-full rounded-lg py-2 px-3 bg-gray-100 text-gray-800 outline-none  hover:bg-gray-200 focus:bg-gray-200 mb-8" type="password" id="password" name="password"
            />
            <button type="submit" class="bg-myRed w-full text-white text-sm py-2 rounded-lg shadow-md hover:bg-sec transition-colors">Sign In</button>
          </form>
      </div>
</div>
</body>
</html>
