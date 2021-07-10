<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Doctors') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 sm:px-20">
                    <div class="flex justify-between pb-8 mt-8 ">
                        <div class="text-2xl"><span class="text-indigo-500">AfyaCenter+</span> Registered Doctors!</div>
                        <x-jet-button class="ml-2" wire:click="addDoctor" wire:loading.attr="">
                            Add New Doctor
                        </x-jet-button>
                    </div>
                    <div class="flex flex-col ">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-100">
                                            <tr>
                                                <th scope="col" class="px-6 py-3 text-sm font-bold tracking-wider text-left text-gray-500 uppercase">Index</th>
                                                <th scope="col" class="px-6 py-3 text-sm font-bold tracking-wider text-left text-gray-500 uppercase">Name</th>
                                                <th scope="col" class="px-6 py-3 text-sm font-bold tracking-wider text-left text-gray-500 uppercase">Email</th>
                                                <th scope="col" class="px-6 py-3 text-sm font-bold tracking-wider text-left text-gray-500 uppercase">Registration Date</th>
                                                <th scope="col" class="px-6 py-3 text-sm font-bold tracking-wider text-left text-gray-500 uppercase">
                                                    Status
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody class="bg-white divide-y divide-gray-200">
                                        @php
                                        $i=0;
                                        @endphp
                                            @foreach($doctors as $doctor)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">{{ ++$i }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap">{{$doctor->name}}</td>
                                                <td class="px-6 py-4 whitespace-nowrap">{{$doctor->email}}</td>
                                                <td class="px-6 py-4 whitespace-nowrap">{{$doctor->created_at->diffForHumans()}}</td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                                        Active
                                                    </span>
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
        </div>
    </div>
</x-app-layout>