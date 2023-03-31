<!doctype html>
<html>
<head>
  <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <script src="{{ asset('js/all.min.js') }}"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <nav class="bg-gray-900">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
          
          <div class="hidden sm:block sm:ml-6">
            <div class="flex space-x-4">
              <a href="/" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
               </div>
          </div>
        </div>
        <div class="hidden sm:block sm:ml-6">
          <div class="flex space-x-4">
            <form method="POST" action="{{ route('logout') }}" role="button">
              @csrf
              <a :href="route('logout')" class="nav-link text-gray-300 hover:bg-gray-700 hover:text-white" text-gray-300 onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
          </form>
          </div>
        </div>
      </div>
    </div>
  </nav>
  
    <div class="flex justify-center items-center h-screen  bg-cyan-600">
        <div class="w-400 p-6 shadow-lg bg-white rounded-md">
            <h1 class="text-3xl block text-center front-semibold">
                TODO APP
            </h1>
            <hr class="mt-3">
        <form action="{{route('store')}}" method="POST">
          @csrf
          <div class="mt-3">
                
            <input type="text" id="task" class="border w-full text-base px-2 py-1 focus:outline-none  focus:ring-0 focus:border-gray-600 " placeholder="Enter a task here" name="title">
        </div>
        <div class="flex" >
            <div class=" flex-1 mt-5">
                <button class="border-2  bg-cyan-500 text-white py-1 px-5 w-20 rounded-md" type="submit" name="add">Save</button>
            </div class="px-3">  
            
           

        </div></form>
        @if (count($todolists))
        <ul class="list-group list-group-flush mt-3">
          @foreach ($todolists as $todolist)
          <li class="list-group-item">
            <form action="" method="POST">
              {{$todolist -> title}}
              @csrf
              @method("delete")
              <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-1 rounded" type="submit">
                <svg class="inline-block w-4 h-4 mr-1 -mt-1" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M5 5a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v2H5V5zm1 3h8v7a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V8zm2 2v3h4V10H8zm5 0v3h2v-3h-2z" clip-rule="evenodd" />
                </svg>
                
              </button>
            </form>

          </li>
              
          @endforeach

        </ul>
            
        @else
        <p class="text-center mt-3">NO TASKS RIGHT NOW!</p>
        @endif
           
        </div>
       

        
    </div>
  
</body>
</html>