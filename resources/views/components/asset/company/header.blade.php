<aside wire:ignore class="min-w-[17rem] max-w-[17rem]  bg-white">
    <div class="flex justify-center items-center gap-1 h-[4rem]">
        <div
            class="font-bold flex justify-center items-center  text-xl  bg-[#791417] h-[2rem] w-[2rem] text-white   rounded-full">
            <span> iL</span>
        </div>
        <p class="text-2xl font-bold">Internlink</p>
    </div>

    <div class="px-4 space-y-2 mt-16">
        <a href="{{ route('company.homepage') }}"
            class="flex items-center gap-2 py-1.5 rounded-2xl px-3  hover:bg-gray-100 {{ request()->routeIs('company.homepage') ? 'bg-gray-100 text-[#791417] font-bold' : '' }}"><svg
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
            </svg>
            Homepage</a>

        <a href="{{ route('company.jobs') }}" class="flex items-center gap-2 py-1.5 rounded-2xl px-3  hover:bg-gray-100 {{ request()->routeIs('company.jobs') ? 'bg-gray-100 text-[#791417] font-bold' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75 2.25 12l4.179 2.25m0-4.5 5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0 4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0-5.571 3-5.571-3" />
              </svg>


            Internship Programs</a>

        <a href="{{ route('company.chat') }}" class="flex items-center gap-2 py-1.5 rounded-2xl px-3 hover:bg-gray-100 {{ request()->routeIs('company.chat') ? 'bg-gray-100 text-[#791417] font-bold' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
              </svg>


            Chat Support</a>
    </div>
</aside>
