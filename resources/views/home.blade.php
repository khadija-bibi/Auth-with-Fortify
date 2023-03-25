<!doctype html>
<html>
<head>
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
        <div class="w-96 p-6 shadow-lg bg-white rounded-md">
            <h1 class="text-3xl block text-center front-semibold">
                TODO APP
            </h1>
            <hr class="mt-3">
            <div class="mt-3">
                
                <input type="text" id="task" class="border w-full text-base px-2 py-1 focus:outline-none  focus:ring-0 focus:border-gray-600 " placeholder="Enter a task here" >
            </div>
            <div class="flex" >
                <div class=" flex-1 mt-5">
                    <button class="border-2  bg-cyan-500 text-white py-1 px-5 w-20 rounded-md">Save</button>
                </div class="px-3">  
                <div class="flex-1 mt-5">
                    <button class="border-2  bg-cyan-500 text-white py-1 px-5 w-30 rounded-md">Get Tasks</button>
                </div>

            </div>
           
            <div>
                <table class="table-auto w-full">
                    <thead>
                      <tr>
                        <th class="px-4 py-2">S.NO.</th>
                        <th class="px-4 py-2">Task</th>
                        <th class="px-4 py-2">Status</th>
                        <th class="px-4 py-2">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="border px-4 py-2">1</td>
                        <td class="border px-4 py-2">...</td>
                        <td class="border px-4 py-2">...</td>
                        <td class="border px-4 py-2">...</td>
                      </tr>
                      <tr>
                        <td class="border px-4 py-2">2</td>
                        <td class="border px-4 py-2">...</td>
                        <td class="border px-4 py-2">...</td>
                        <td class="border px-4 py-2">...</td>
                      </tr>
                      <tr>
                        <td class="border px-4 py-2">3</td>
                        <td class="border px-4 py-2">...</td>
                        <td class="border px-4 py-2">...</td>
                        <td class="border px-4 py-2">...</td>
                      </tr>
                      <tr>
                        <td class="border px-4 py-2">4</td>
                        <td class="border px-4 py-2">...</td>
                        <td class="border px-4 py-2">...</td>
                        <td class="border px-4 py-2">...</td>
                      </tr>

                    </tbody>
                  </table>
                  
            
            </div> 
           
        </div>
        
    </div>
  
</body>
</html>