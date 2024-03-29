<!doctype html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <script src="{{ asset('js/all.min.js') }}"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <nav class="bg-cyan-900 ">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
          
          <div class="hidden sm:block sm:ml-6">
            <div class="flex space-x-4">
              <a href="/" class="text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
               </div>
          </div>
        </div>
        <div class="hidden sm:block sm:ml-6">
          <div class="flex space-x-4">
            <form method="POST" action="{{ route('logout') }}" role="button">
              @csrf
              <a :href="route('logout')" class="nav-link text-white hover:bg-transparent hover:bg-cyan-700 hover:text-white" text-gray-300 onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
          </form>
          </div>
        </div>
      </div>
    </div>
  </nav>
  
    <div class="flex justify-center items-center h-screen  bg-cyan-600">
        <div class="w-400 p-6 shadow-lg bg-white rounded-md">
            <h1 class="text-3xl block text-center front-semibold  text-cyan-900 ">
                __TODO  LIST  APP__
            </h1>
            <hr class="mt-3">
            <form action="{{ route('store')}}" method="POST" autocomplete="off">
              @csrf
              <div class="mt-3">
                <input type="text" name="title" class="border w-full text-base px-2 py-1 focus:outline-none  focus:ring-0 focus:border-gray-600 " placeholder="Enter your task here" >
              </div>
              <div class=" flex-1 mt-5">
                <button type="submit" class="border-2  bg-cyan-600 text-white py-1 px-5 w- rounded-md">Save</button>
              </div class="px-3">  
            </form>
        <ul>
         
          
          @foreach ($todolists as $todolist)
              <li>
                <form action="{{route('destroy',$todolist->id)}}" method="POST">
                  
                  <div class="flex justify-between mt-4">
                    <div>
                      {{ $todolist->title }}
                    </div>
                    <div>
                      @csrf
                      @method('delete') 
                      <button type="submit px-5" ><i class="fas fa-trash color  text-red-500"></i></button>
                    </div>
                    <div >
                      
                       
                     
                     
                    

                  </div>
                 
                </form>
                
                

                  @if ($todolist->is_completed==true)
                  <form method="POST" action="{{url('/todo/notcompleted/'.$todolist->id)}}" >
                    @csrf 
                  <button type="submit" class=" bg-green-400 px-2 py-1  rounded-md">
                    Finished
                   </button>
                  </form>
                  @else
                  <form method="POST" action="{{url('/todo/iscompleted/'.$todolist->id)}}" >
                    @csrf 
                  <button type="submit" class=" bg-red-400 px-2 py-1  rounded-md">
                    Unfinished
                   </button>
                  </form>   
                  @endif
                
                  
                
                
              </li>
          @endforeach
          
        </ul>        </div>
       

        
    </div>
  
</body>
</html>