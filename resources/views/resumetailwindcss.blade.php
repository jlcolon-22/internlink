<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="shortcut icon" href="{{ asset('logo.png') }}" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @filamentStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <style>
        [x-cloak] {
            display: none !important;
        }


        .percent-circle {
            transform: rotate(-90deg);
            transform-origin: 50% 50%;
        }
    </style>
</head>

<body class="bg-gray-200 text-gray-700 font-sans">
    <div class="max-w-screen-lg mx-auto mt-5 bg-white border border-gray-400 shadow-lg flex">
        <div class="w-[29%] p-6 bg-gray-100">
            <div class="bg-resume p-6 -mx-6 -mt-6 mb-12 relative z-10">
                <div class="w-full rounded-full overflow-hidden">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/764024/profile/profile-512.jpg"
                        class="w-full" />
                </div>
                <div class="text-center text-white mt-4">
                    <h4 class="text-xl mb-0">dsadadad</h4>
                    <small class="block uppercase tracking-wide">283101038 <br> BSIT | 22</small>

                </div>
            </div>
            <div class="mb-6">
                <h3 class="text-xl text-gray-900 font-semibold uppercase mb-4">About me</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro, doloremque.</p>
            </div>
            <div class="mb-6">
                <h3 class="text-xl text-gray-900 uppercase font-semibold mb-4">Contact</h3>
                <div class="flex items-center gap-2 mb-3 text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="size-5 text-resume">
                        <path fill-rule="evenodd"
                            d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                            clip-rule="evenodd" />
                    </svg>

                    <span>091014213</span>
                </div>
                <div class="flex items-center gap-2 mb-3 text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="size-5 text-resume">
                        <path fill-rule="evenodd"
                            d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>Antipolo City</span>
                </div>
                <div class="flex items-center gap-2 mb-3 text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="size-5 text-resume">
                        <path
                            d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                        <path
                            d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                    </svg>

                    <span>Linkin</span>
                </div>
                <div class="flex items-center gap-2 mb-3 text-sm"><svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" fill="currentColor" class="size-5 text-resume">
                        <path
                            d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                        <path
                            d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                    </svg></i><span>Github</span></div>
                <div class="flex items-center gap-2 mb-3 text-sm"><svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" fill="currentColor" class="size-5 text-resume">
                        <path
                            d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                        <path
                            d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                    </svg><span>email@gmail.com</span></div>
            </div>
            <div>
                <h3 class="text-xl text-gray-900 uppercase mb-4">Reference</h3>
                <div class="text-center">
                    <!-- Reference content -->
                </div>
            </div>
        </div>
        <div class="w-2/3 p-8">
            <div class=" grid grid-cols-2">
                <div class="mb-8">
                    <h3
                        class="text-xl text-gray-900 uppercase mb-4 flex items-center font-semibold hover:scale-[1.02] transition-all duration-1000 ease-in-out">
                        <div class=" w-10 h-10 bg-resume text-white rounded-full flex items-center justify-center mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-6">
                                <path
                                    d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                                <path
                                    d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                                <path
                                    d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
                            </svg>
                        </div>

                        Education
                    </h3>

                    <div class="p-4 max-w-screen-sm mx-auto ">


                        <div class="flex group">
                            <div class="mr-4 flex flex-col items-center">
                                <div>
                                    <div
                                        class="flex h-4 w-4 items-center justify-center rounded-full border-2 border-resume group-hover:animate-pulse transition-all ease-in-out duration-1000">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 text-resume ">
                                            <path d="M12 5l0 14"></path>
                                            <path d="M18 13l-6 6"></path>
                                            <path d="M6 13l6 6"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="h-full w-px bg-gray-300 "></div>
                            </div>
                            <div class=" pb-8">
                                <p class=" text-sm font-bold text-gray-600 ">Step 1</p>
                                <p class="text-gray-600 text-xs ">Lorem ipsum dolor sit amet,</p>
                            </div>
                        </div>


                        <div class="flex group">
                            <div class="mr-4 flex flex-col items-center">
                                <div>
                                    <div
                                        class="flex h-4 w-4 items-center justify-center rounded-full border-2 border-resume group-hover:animate-pulse transition-all ease-in-out duration-1000">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 text-resume ">
                                            <path d="M12 5l0 14"></path>
                                            <path d="M18 13l-6 6"></path>
                                            <path d="M6 13l6 6"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="h-full w-px bg-gray-300 "></div>
                            </div>
                            <div class=" pb-8">
                                <p class=" text-sm font-bold text-gray-600 ">Step 1</p>
                                <p class="text-gray-600 text-xs ">Lorem ipsum dolor sit amet,</p>
                            </div>
                        </div>


                        <div class="flex group">
                            <div class="mr-4 flex flex-col items-center">
                                <div>
                                    <div
                                        class="flex h-4 w-4 items-center justify-center rounded-full border-2 border-resume group-hover:animate-pulse transition-all ease-in-out duration-1000">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="h-6 w-6 text-resume ">
                                            <path d="M12 5l0 14"></path>
                                            <path d="M18 13l-6 6"></path>
                                            <path d="M6 13l6 6"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="h-full w-px bg-gray-300 "></div>
                            </div>
                            <div class=" pb-8">
                                <p class=" text-sm font-bold text-gray-600 ">Step 1</p>
                                <p class="text-gray-600 text-xs ">Lorem ipsum dolor sit amet,</p>
                            </div>
                        </div>

                        <div class="flex group">
                            <div class="mr-4 flex flex-col items-center">
                                <div>
                                    <div
                                        class="flex h-4 w-4 items-center justify-center rounded-full border-2 border-resume group-hover:animate-pulse transition-all ease-in-out duration-1000">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="h-6 w-6 text-resume ">
                                            <path d="M12 5l0 14"></path>
                                            <path d="M18 13l-6 6"></path>
                                            <path d="M6 13l6 6"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="h-full w-px bg-gray-300 "></div>
                            </div>
                            <div class=" pb-2">
                                <p class=" text-sm font-bold text-gray-600 ">Step 1</p>
                                <p class="text-gray-600 text-xs ">Lorem ipsum dolor sit amet,</p>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="mb-8">

                    <h3
                        class="text-xl text-gray-900 uppercase mb-4 flex items-center font-semibold hover:scale-[1.02] transition-all duration-1000 ease-in-out">
                        <div
                            class=" w-10 h-10 bg-resume text-white rounded-full flex items-center justify-center mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-6">
                                <path
                                    d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                                <path
                                    d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                                <path
                                    d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
                            </svg>
                        </div>

                        Certification
                    </h3>

                    <div class="p-4 max-w-screen-sm mx-auto ">


                        <div class="flex group">
                            <div class="mr-4 flex flex-col items-center">
                                <div>
                                    <div
                                        class="flex h-4 w-4 items-center justify-center rounded-full border-2 border-resume group-hover:animate-pulse transition-all ease-in-out duration-1000">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="h-6 w-6 text-resume ">
                                            <path d="M12 5l0 14"></path>
                                            <path d="M18 13l-6 6"></path>
                                            <path d="M6 13l6 6"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="h-full w-px bg-gray-300 "></div>
                            </div>
                            <div class=" pb-8">
                                <p class=" text-sm font-bold text-gray-600 ">Department of Information Management</p>

                            </div>
                        </div>


                        <div class="flex group">
                            <div class="mr-4 flex flex-col items-center">
                                <div>
                                    <div
                                        class="flex h-4 w-4 items-center justify-center rounded-full border-2 border-resume group-hover:animate-pulse transition-all ease-in-out duration-1000">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="h-6 w-6 text-resume ">
                                            <path d="M12 5l0 14"></path>
                                            <path d="M18 13l-6 6"></path>
                                            <path d="M6 13l6 6"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="h-full w-px bg-gray-300 "></div>
                            </div>
                            <div class=" pb-2">
                                <p class=" text-sm font-bold text-gray-600 ">Department of Information Management</p>

                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <div class="mb-8">
                <h3
                    class="text-xl text-gray-900 uppercase mb-4 flex items-center font-semibold hover:scale-[1.02] transition-all duration-1000 ease-in-out">
                    <div class=" w-10 h-10 bg-resume text-white rounded-full flex items-center justify-center mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6">
                            <path fill-rule="evenodd"
                                d="M14.447 3.026a.75.75 0 0 1 .527.921l-4.5 16.5a.75.75 0 0 1-1.448-.394l4.5-16.5a.75.75 0 0 1 .921-.527ZM16.72 6.22a.75.75 0 0 1 1.06 0l5.25 5.25a.75.75 0 0 1 0 1.06l-5.25 5.25a.75.75 0 1 1-1.06-1.06L21.44 12l-4.72-4.72a.75.75 0 0 1 0-1.06Zm-9.44 0a.75.75 0 0 1 0 1.06L2.56 12l4.72 4.72a.75.75 0 0 1-1.06 1.06L.97 12.53a.75.75 0 0 1 0-1.06l5.25-5.25a.75.75 0 0 1 1.06 0Z"
                                clip-rule="evenodd" />
                        </svg>

                    </div>

                    Programming Skills
                </h3>
                <ul>
                    <li class="mb-4 flex items-center" data-percent="22"><span class="block w-32">JAVA</span>
                        <div class="bg-gray-300 w-full h-1 rounded-full relative">
                            <div class="bg-resume h-1 rounded-full" style="width: 22%;"></div>
                        </div>
                    </li>
                    <li class="mb-4 flex items-center" data-percent="33"><span class="block w-32">JAVASCRIPT</span>
                        <div class="bg-gray-300 w-full h-1 rounded-full relative">
                            <div class="bg-resume h-1 rounded-full" style="width: 33%;"></div>
                        </div>
                    </li>
                    <li class="mb-4 flex items-center" data-percent="33"><span class="block w-32">PHP</span>
                        <div class="bg-gray-300 w-full h-1 rounded-full relative">
                            <div class="bg-resume h-1 rounded-full" style="width: 33%;"></div>
                        </div>
                    </li>
                    <li class="mb-4 flex items-center" data-percent="88"><span class="block w-32">HTML</span>
                        <div class="bg-gray-300 w-full h-1 rounded-full relative">
                            <div class="bg-resume h-1 rounded-full" style="width: 88%;"></div>
                        </div>
                    </li>
                    <li class="mb-4 flex items-center" data-percent="11"><span class="block w-32">CSS</span>
                        <div class="bg-gray-300 w-full h-1 rounded-full relative">
                            <div class="bg-resume h-1 rounded-full" style="width: 11%;"></div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="mb-8">
                <h3
                    class="text-xl text-gray-900 uppercase mb-4 flex items-center font-semibold hover:scale-[1.02] transition-all duration-1000 ease-in-out">
                    <div class=" w-10 h-10 bg-resume text-white rounded-full flex items-center justify-center mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6">
                            <path
                                d="M17.004 10.407c.138.435-.216.842-.672.842h-3.465a.75.75 0 0 1-.65-.375l-1.732-3c-.229-.396-.053-.907.393-1.004a5.252 5.252 0 0 1 6.126 3.537ZM8.12 8.464c.307-.338.838-.235 1.066.16l1.732 3a.75.75 0 0 1 0 .75l-1.732 3c-.229.397-.76.5-1.067.161A5.23 5.23 0 0 1 6.75 12a5.23 5.23 0 0 1 1.37-3.536ZM10.878 17.13c-.447-.098-.623-.608-.394-1.004l1.733-3.002a.75.75 0 0 1 .65-.375h3.465c.457 0 .81.407.672.842a5.252 5.252 0 0 1-6.126 3.539Z" />
                            <path fill-rule="evenodd"
                                d="M21 12.75a.75.75 0 1 0 0-1.5h-.783a8.22 8.22 0 0 0-.237-1.357l.734-.267a.75.75 0 1 0-.513-1.41l-.735.268a8.24 8.24 0 0 0-.689-1.192l.6-.503a.75.75 0 1 0-.964-1.149l-.6.504a8.3 8.3 0 0 0-1.054-.885l.391-.678a.75.75 0 1 0-1.299-.75l-.39.676a8.188 8.188 0 0 0-1.295-.47l.136-.77a.75.75 0 0 0-1.477-.26l-.136.77a8.36 8.36 0 0 0-1.377 0l-.136-.77a.75.75 0 1 0-1.477.26l.136.77c-.448.121-.88.28-1.294.47l-.39-.676a.75.75 0 0 0-1.3.75l.392.678a8.29 8.29 0 0 0-1.054.885l-.6-.504a.75.75 0 1 0-.965 1.149l.6.503a8.243 8.243 0 0 0-.689 1.192L3.8 8.216a.75.75 0 1 0-.513 1.41l.735.267a8.222 8.222 0 0 0-.238 1.356h-.783a.75.75 0 0 0 0 1.5h.783c.042.464.122.917.238 1.356l-.735.268a.75.75 0 0 0 .513 1.41l.735-.268c.197.417.428.816.69 1.191l-.6.504a.75.75 0 0 0 .963 1.15l.601-.505c.326.323.679.62 1.054.885l-.392.68a.75.75 0 0 0 1.3.75l.39-.679c.414.192.847.35 1.294.471l-.136.77a.75.75 0 0 0 1.477.261l.137-.772a8.332 8.332 0 0 0 1.376 0l.136.772a.75.75 0 1 0 1.477-.26l-.136-.771a8.19 8.19 0 0 0 1.294-.47l.391.677a.75.75 0 0 0 1.3-.75l-.393-.679a8.29 8.29 0 0 0 1.054-.885l.601.504a.75.75 0 0 0 .964-1.15l-.6-.503c.261-.375.492-.774.69-1.191l.735.267a.75.75 0 1 0 .512-1.41l-.734-.267c.115-.439.195-.892.237-1.356h.784Zm-2.657-3.06a6.744 6.744 0 0 0-1.19-2.053 6.784 6.784 0 0 0-1.82-1.51A6.705 6.705 0 0 0 12 5.25a6.8 6.8 0 0 0-1.225.11 6.7 6.7 0 0 0-2.15.793 6.784 6.784 0 0 0-2.952 3.489.76.76 0 0 1-.036.098A6.74 6.74 0 0 0 5.251 12a6.74 6.74 0 0 0 3.366 5.842l.009.005a6.704 6.704 0 0 0 2.18.798l.022.003a6.792 6.792 0 0 0 2.368-.004 6.704 6.704 0 0 0 2.205-.811 6.785 6.785 0 0 0 1.762-1.484l.009-.01.009-.01a6.743 6.743 0 0 0 1.18-2.066c.253-.707.39-1.469.39-2.263a6.74 6.74 0 0 0-.408-2.309Z"
                                clip-rule="evenodd" />
                        </svg>

                    </div>

                    Hardware Skills
                </h3>
                <ul>
                    <li class="mb-4 flex items-center" data-percent="33"><span class="block w-32">SSS</span>
                        <div class="bg-gray-300 w-full h-1 rounded-full relative">
                            <div class="bg-resume h-1 rounded-full" style="width: 33%;"></div>
                        </div>
                    </li>
                    <li class="mb-4 flex items-center" data-percent="66"><span class="block w-32">SSSS</span>
                        <div class="bg-gray-300 w-full h-1 rounded-full relative">
                            <div class="bg-resume h-1 rounded-full" style="width: 66%;"></div>
                        </div>
                    </li>
                    <li class="mb-4 flex items-center" data-percent="99"><span class="block w-32">XXXX</span>
                        <div class="bg-gray-300 w-full h-1 rounded-full relative">
                            <div class="bg-resume h-1 rounded-full" style="width: 99%;"></div>
                        </div>
                    </li>
                    <li class="mb-4 flex items-center" data-percent="88"><span class="block w-32">TTTT</span>
                        <div class="bg-gray-300 w-full h-1 rounded-full relative">
                            <div class="bg-resume h-1 rounded-full" style="width: 88%;"></div>
                        </div>
                    </li>
                    <li class="mb-4 flex items-center" data-percent="33"><span class="block w-32">DSADADAD</span>
                        <div class="bg-gray-300 w-full h-1 rounded-full relative">
                            <div class="bg-resume h-1 rounded-full" style="width: 33%;"></div>
                        </div>
                    </li>
                </ul>
            </div>
            <div>
                <h3
                    class="text-xl text-gray-900 uppercase mb-4 flex items-center font-semibold hover:scale-[1.02] transition-all duration-1000 ease-in-out">
                    <div class=" w-10 h-10 bg-resume text-white rounded-full flex items-center justify-center mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6">
                            <path d="M16.5 7.5h-9v9h9v-9Z" />
                            <path fill-rule="evenodd"
                                d="M8.25 2.25A.75.75 0 0 1 9 3v.75h2.25V3a.75.75 0 0 1 1.5 0v.75H15V3a.75.75 0 0 1 1.5 0v.75h.75a3 3 0 0 1 3 3v.75H21A.75.75 0 0 1 21 9h-.75v2.25H21a.75.75 0 0 1 0 1.5h-.75V15H21a.75.75 0 0 1 0 1.5h-.75v.75a3 3 0 0 1-3 3h-.75V21a.75.75 0 0 1-1.5 0v-.75h-2.25V21a.75.75 0 0 1-1.5 0v-.75H9V21a.75.75 0 0 1-1.5 0v-.75h-.75a3 3 0 0 1-3-3v-.75H3A.75.75 0 0 1 3 15h.75v-2.25H3a.75.75 0 0 1 0-1.5h.75V9H3a.75.75 0 0 1 0-1.5h.75v-.75a3 3 0 0 1 3-3h.75V3a.75.75 0 0 1 .75-.75ZM6 6.75A.75.75 0 0 1 6.75 6h10.5a.75.75 0 0 1 .75.75v10.5a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V6.75Z"
                                clip-rule="evenodd" />
                        </svg>


                    </div>

                    Software Skills
                </h3>
                <ul class="grid grid-cols-3">

                    <li class="list-none relative flex justify-center" x-data="{ percent: 283 - (283 * (22 / 100)) }">
                        <svg viewBox="0 0 100 100" class="w-44 h-44 ">
                            <circle cx="50" cy="50" r="45"
                                class="fill-transparent stroke-gray-300 stroke-2"></circle>
                            <circle cx="50" cy="50" r="45"
                                class="fill-transparent stroke-resume stroke-[3] percent-circle"
                                :style="`stroke-dasharray: 283; stroke-dashoffset:${percent}`"></circle>
                            {{-- calc(283 - (283 * 99 / 100)) --}}

                        </svg>
                        <span class="absolute top-1/2 pb-5 left-1/2 -translate-x-1/2 -translate-y-1/2">djsal
                            jdlajdlksa</span>
                        <small class="absolute top-1/2 pt-5 left-1/2 -translate-x-1/2 -translate-y-1/2">22%</small>
                    </li>
                    <li data-percent="44" class="list-none relative flex justify-center">
                        <svg viewBox="0 0 100 100" class="w-44 h-44 ">
                            <circle cx="50" cy="50" r="45"
                                class="fill-transparent stroke-gray-300 stroke-2"></circle>
                            <circle cx="50" cy="50" r="45"
                                class="fill-transparent stroke-resume stroke-[3] percent-circle"
                                style="stroke-dasharray: 283; stroke-dashoffset:125"></circle>
                            {{-- calc(283 - (283 * 99 / 100)) --}}

                        </svg>
                        <span class="absolute top-1/2 pb-5 left-1/2 -translate-x-1/2 -translate-y-1/2">djsal
                            jdlajdlksa</span>
                        <small class="absolute top-1/2 pt-5 left-1/2 -translate-x-1/2 -translate-y-1/2">44%</small>
                    </li>
                    <li data-percent="44" class="list-none relative flex justify-center">
                        <svg viewBox="0 0 100 100" class="w-44 h-44 ">
                            <circle cx="50" cy="50" r="45"
                                class="fill-transparent stroke-gray-300 stroke-2"></circle>
                            <circle cx="50" cy="50" r="45"
                                class="fill-transparent stroke-resume stroke-[3] percent-circle"
                                style="stroke-dasharray: 283; stroke-dashoffset:125"></circle>
                            {{-- calc(283 - (283 * 99 / 100)) --}}

                        </svg>
                        <span class="absolute top-1/2 pb-5 left-1/2 -translate-x-1/2 -translate-y-1/2">djsal
                            jdlajdlksa</span>
                        <small class="absolute top-1/2 pt-5 left-1/2 -translate-x-1/2 -translate-y-1/2">44%</small>
                    </li>

                </ul>
            </div>

        </div>
    </div>
    @livewireScripts

    @filamentScripts
    @vite('resources/js/app.js')
</body>

</html>
