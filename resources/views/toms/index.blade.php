<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tom is Coming</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="w-full py-7 px-10 bg-white-50 flex justify-between sm:gap-2 border-2 border-gray-200">
       <div>
        <h2 class="text-3xl font-bold">Tomaloy</h2>
        <h3 class="text-lg text-gray-400 mt-0.5">Care Point for Your Cat</h3>
       </div>

       <div class="buttons flex gap-2">
        <a href="{{ URL::to('toms') }}" class="hover:shadow-sm  inline-flex items-center rounded-md bg-indigo-600 px-5 py-4 text-md font-semibold text-white shadow-sm hover:bg-white hover:text-indigo-500 hover:border-2 hover:border-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">View All Toms</a>

        <a href="{{ URL::to('toms/create') }}" class="shadow-md hover:shadow-none inline-flex items-center text-indigo-600 rounded-md border-2 border-indigo-600 px-5 py-4 text-md font-semibold hover:bg-indigo-600  hover:text-white hover:border-transparent">Create a Tom</a>
       </div>
    </header>

    <section id="view" class="mt-20">
        <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
            <h2 class="py-5 text-center font-bold text-3xl uppercase">All the Toms</h2>
            <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
              <thead class="bg-indigo-50">
                <tr class="text-lg text-center font-bold text-gray-600">
                  <th scope="col" class="px-6 py-4">ID</th>
                  <th scope="col" class="px-6 py-4 ">Name</th>
                  <th scope="col" class="px-6 py-4">Email</th>
                  <th scope="col" class="px-6 py-4">Room</th>
                  <th scope="col" class="px-6 py-4">Actions</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-100 border-t border-gray-100 text-lg text-center">
                @foreach($toms as $key => $value)
                <tr class="hover:bg-indigo-50">
                  <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                    {{ $value->id }}
                  </th>
                  <td class="px-6 py-4">
                    {{ $value->name }}
                  </td>
                  <td class="px-6 py-4">
                    {{ $value->email }}
                  </td>
                  <td class="px-6 py-4">
                    {{ $value->level }}
                  </td>
                  <td class="px-6 py-4 flex justify-center align-center">
                    <div class="flex justify-end gap-4">
                    <a href="{{ URL::to('toms/'.$value->id) }}" title="view">
                            <svg class="-ml-0.5 mr-1.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M12.232 4.232a2.5 2.5 0 013.536 3.536l-1.225 1.224a.75.75 0 001.061 1.06l1.224-1.224a4 4 0 00-5.656-5.656l-3 3a4 4 0 00.225 5.865.75.75 0 00.977-1.138 2.5 2.5 0 01-.142-3.667l3-3z" />
                                <path d="M11.603 7.963a.75.75 0 00-.977 1.138 2.5 2.5 0 01.142 3.667l-3 3a2.5 2.5 0 01-3.536-3.536l1.225-1.224a.75.75 0 00-1.061-1.06l-1.224 1.224a4 4 0 105.656 5.656l3-3a4 4 0 00-.225-5.865z" />
                              </svg>
                      </a>
                      <a x-data="{ tooltip: 'Delete' }" title="delete" href="#">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="currentColor"
                          class="h-6 w-6"
                          x-tooltip="tooltip"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                          />
                        </svg>
                      </a>
                      <a x-data="{ tooltip: 'Edite' }" title="edit" href="{{ URL::to('toms/'.$value->id.'/edit') }}">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="currentColor"
                          class="h-6 w-6"
                          x-tooltip="tooltip"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                          />
                        </svg>
                      </a>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
    </section>
</body>
</html>
