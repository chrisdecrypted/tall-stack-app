
<div class="relative min-h-screen flex flex-col">
    <div class="flex-grow w-full max-w-7xl mx-auto xl:px-8 lg:flex">
        <!-- Left sidebar & main wrapper -->
        <div class="flex-1 min-w-0 bg-white xl:flex">

            <div class="bg-white lg:min-w-0 lg:flex-1">
                <div
                    class="pl-4 pr-6 pt-4 pb-4 border-b border-t border-gray-200 sm:pl-6 lg:pl-8 xl:pl-6 xl:pt-6 xl:border-t-0">
                    <div class="flex items-center">
                        <h1 class="flex-1 text-lg leading-7 font-medium">Questions</h1>
                        <div class="relative" x-data="{show: false}">
                            <span x-on:click="show = !show" class="rounded-md shadow-sm">
                                <button id="sort-menu" type="button"
                                    class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition ease-in-out duration-150"
                                    aria-haspopup="true" aria-expanded="false">
                                    <!-- Heroicon name: sort-ascending -->
                                    <svg class="mr-3 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h5a1 1 0 000-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3zM13 16a1 1 0 102 0v-5.586l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 101.414 1.414L13 10.414V16z" />
                                    </svg>
                                    Sort
                                    <!-- Heroicon name: chevron-down -->
                                    <svg class="ml-2.5 -mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </span>
                            <div x-show="show" class="origin-top-right z-10 absolute right-0 mt-2 w-56 rounded-md shadow-lg">
                                <div class="rounded-md bg-white shadow-xs">
                                    <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="sort-menu">
                                        <a href="#"
                                            class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
                                            role="menuitem">Name</a>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
                                            role="menuitem">Date modified</a>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
                                            role="menuitem">Date created</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="relative z-0 divide-y divide-gray-200 border-b border-gray-200">
                    @foreach ($users as $user)
                        <li wire:key='user-{{$user->id}}' class="relative pl-4 pr-6 py-5 hover:bg-gray-50 sm:py-6 sm:pl-6 lg:pl-8 xl:pl-6" wire:click="$set('user', {{$user->id}})">
                            <div class="flex items-center justify-between space-x-4">
                                <!-- Repo name and link -->
                                <div class="min-w-0 space-y-3">
                                    <div class="flex items-center space-x-3">
                                        <span aria-label="Running"
                                            class="h-4 w-4 bg-green-100 rounded-full flex items-center justify-center">
                                            <span class="h-2 w-2 bg-green-400 rounded-full"></span>
                                        </span>

                                        <span class="block">
                                            <h2 class="text-sm font-medium leading-5">
                                                <a href="#">
                                                    <span class="absolute inset-0"></span>
                                                    {{$user->name}}
                                                </a>
                                            </h2>
                                        </span>
                                    </div>
                                    <a href="#" class="relative group flex items-center space-x-2.5">
                                        <div
                                            class="text-sm leading-5 text-gray-500 group-hover:text-gray-900 font-medium truncate">
                                            {{$user->email}}
                                        </div>
                                    </a>
                                </div>
                                <div class="sm:hidden">
                                    <!-- Heroicon name: chevron-right -->
                                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <!-- Repo meta info -->
                                <div class="hidden sm:flex flex-col flex-shrink-0 items-end space-y-3">
                                    <p class="flex items-center space-x-4">
                                    </p>
                                </div>
                            </div>
                        </li>
                    @endforeach

                    <!-- More items... -->
                </ul>
            </div>
        </div>
        <!-- Activity feed -->
        @if ($thread)
            <div class="bg-gray-50 pr-4 sm:pr-6 lg:pr-8 lg:flex-shrink-0 lg:border-l lg:border-gray-200">
                <div class="pl-6 lg:w-80">
                    <div class="pt-6 pb-2">
                        <h2 class="text-sm leading-5 font-semibold">Thread</h2>
                    </div>
                    <div>
                        <ul class="divide-y divide-gray-200">
                            @foreach ($thread as $item)
                                <li class="py-4">
                                    <div class="flex space-x-3">
                                        <div class="flex-1 space-y-1">
                                            <div class="flex items-center justify-between">
                                                <h3 class="text-sm font-medium leading-5">
                                                    {{$item->user->name}}
                                                </h3>
                                                <p class="text-sm leading-5 text-gray-500">
                                                    {{$item->created_at->diffForHumans()}}
                                                </p>
                                            </div>
                                            <p class="text-sm leading-5 text-gray-500">
                                                {{$item->question}}
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                @if (!empty($item->answer))
                                    <li class="py-4">
                                        <div class="flex space-x-3">
                                            <div class="flex-1 space-y-1">
                                                <div class="flex items-center justify-between">
                                                    <h3 class="text-sm font-medium leading-5 text-indigo-500">
                                                        You
                                                    </h3>
                                                    <p class="text-sm leading-5 text-gray-500">
                                                        {{$item->updated_at->diffForHumans()}}
                                                    </p>
                                                </div>
                                                <p class="text-sm leading-5 text-gray-500">
                                                    {{$item->answer}}
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                @endif

                            @endforeach

                            <!-- More items... -->
                        </ul>
                        <div class="py-4 text-sm leading-5 border-t border-gray-200">
                            <x-admin-input-group label="Reply" for="reply" inline>
                                <x-admin-input-textarea wire:model="reply" />
                            </x-admin-input-group>
                            <x-admin-button-primary wire:click="saveReply" class="mt-2">
                                Send
                            </x-admin-button-primary>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
