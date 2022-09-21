<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tasks Lists') }}
        </h2>
        <br>
        
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><a href="{{ url('/tasks/create') }}" class="btn btn-success btn-sm" title="Add New info">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a></button>
    </x-slot>
    
        
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>

                <th scope="col" class="py-3 px-6">
                    Descripion
                </th>
                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
               @foreach($task as $tasks)
                <td class="py-4 px-6 text-md">
                    {{ $tasks->description}}
                </td>
                <td class="py-4 px-6">
                     <a href="" class="text-md px-2 text-blue-600 dark:text-blue-500 ">View</a>

                     <a href="{{ route('tasks.edit',$tasks->id) }}" class="text-md px-2 text-blue-600 dark:text-blue-500 ">Edit</a>

                    <a href="#" class="text-md px-2 text-red-600 dark:text-blue-500 ">Delete</a>

                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
</div>
 --}}

 <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Tasks List
    </h2>
</x-slot>

<div>
    <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="block mb-8">
            <a href="{{ route('tasks.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add Task</a>
        </div>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 w-full">
                            <thead>
                            <tr>
                                <th scope="col" width="50" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Description
                                </th>
                                <th scope="col" width="200" class="px-6 py-3 bg-gray-50">

                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($tasks as $task)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ $task->id }}
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ $task->description }}
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="{{ route('tasks.show', $task->id) }}" class="text-blue-600 hover:text-blue-900 mb-2 mr-2">View</a>
                                        <a href="{{ route('tasks.edit', $task->id) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">Edit</a>
                                        <form class="inline-block" action="{{ route('tasks.destroy', $task->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2" value="Delete">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</x-app-layout>
