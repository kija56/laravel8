<x-app-layout>
    <style>

    </style>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Roles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 sm:px-20">
                    <div class="flex justify-between pb-8 mt-8 ">
                        <div class="text-2xl">Roles</div>
                        <x-jet-button class="ml-2" wire:click="addDoctor" wire:loading.attr="">
                            Add New Role
                        </x-jet-button>
                    </div>
                    <div class="flex flex-col ">

                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8 ">
                                <div class="grid gap-4 md:grid-cols-3">
                                    @php
                                    $i=0;
                                    @endphp
                                    @foreach($roles as $role)
                                    <div class="py-2 overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                                        <div class="flex items-baseline justify-between">
                                            <p class="px-4 py-2 font-bold">{{$role->name}}</p>

                                            <button class="inline-flex items-center justify-center w-10 h-10 mr-2 text-gray-700 transition-colors duration-150 bg-white rounded-full focus:shadow-outline hover:bg-gray-200">
                                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                                </svg>
                                            </button>
                                        </div>

                                        <p class="px-4 py-1 font-normal">{{$role->description}}</p>
                                        <div class="p-1 ">
                                            <section class="rounded-lg row ">
                                                <div class="rounded-lg tabs">
                                                    <div class="border-t tab">
                                                        <div class="relative border-l-2 border-transparent ">
                                                            <input class="absolute z-10 w-full h-5 opacity-0 cursor-pointer top-6" type="checkbox" id="chck{{++$i}}">
                                                            <header class="flex items-center justify-between p-5 px-4 cursor-pointer select-none tab-label" for="chck1">
                                                                <div class="flex items-center ">
                                                                    <span class="text-sm font-bold text-grey-darkest">
                                                                        Permissions
                                                                    </span>
                                                                    <p class="px-4 py-1">
                                                                        <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                                                            {{$role->permissions->count()}}
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                                <div class="flex items-center justify-center border rounded-full border-grey w-7 h-7 test">
                                                                    <!-- icon by feathericons.com -->
                                                                    <svg aria-hidden="true" class="" data-reactid="266" fill="none" height="24" stroke="#606F7B" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                                        <polyline points="6 9 12 15 18 9">
                                                                        </polyline>
                                                                    </svg>
                                                                </div>
                                                            </header>
                                                            <div class="tab-content">
                                                                <div class="pb-2 pl-1 pr-1 text-grey-darkest">
                                                                    <ul class="pl-1 text-xs font-normal">
                                                                        <li class="pb-2 ">
                                                                            Create user
                                                                        </li>
                                                                        <li class="pb-2">
                                                                            Edit user
                                                                        </li>
                                                                        <li class="pb-2">
                                                                            Delete user
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </section>
                                        </div>

                                    </div>

                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- component -->
    <style>
        .tab {
            overflow: hidden;
        }

        .tab-content {
            max-height: 0;
            transition: all 0.5s;
        }

        input:checked+.tab-label .test {
            background-color: #000;
        }

        input:checked+.tab-label .test svg {
            transform: rotate(180deg);
            stroke: #fff;
        }

        input:checked+.tab-label::after {
            transform: rotate(90deg);
        }

        input:checked~.tab-content {
            max-height: 100vh;
        }
    </style>


</x-app-layout>