<div class="bg-gray-100 min-h-[100svh]">
    {{-- header --}}
   <x-asset.student.header/>

   {{-- company --}}
   <section class="max-w-screen-xl px-6 xl:px-0 mx-auto py-10 ">

    <main class="flex gap-5 w-full">
        <div class="min-w-[25rem] max-w-[25rem] space-y-5">
            <div class="bg-white p-4 rounded-md space-y-2 shadow">
                <img src="{{ asset('asset/campaign-creators-gMsnXqILjp4-unsplash.jpg') }}" class="w-[9rem] h-[9rem] border-2 border-blue-500 mx-auto rounded-full" alt="">
                <h1 class="text-center font-semibold">{{ Auth::guard('student')->user()->firstname. ' '. Auth::guard('student')->user()->lastname  }}</h1>
                <h1 class="text-center font-semibold font-mono text-xs opacity-50">{{ Auth::guard('student')->user()->course  }}</h1>
            </div>
            <div class="bg-white">
                <h1>kdsalj dsajdslajdljl</h1>
            </div>
        </div>
        <div class="w-full space-y-5">
            <div  class="bg-white p-4 rounded-md space-y-2 shadow">
                <h1 class="text-lg font-extrabold">Basic Information</h1>
                <p class="flex items-center gap-3 pt-4">Fullname: <span class="text-gray-500">{{ Auth::guard('student')->user()->firstname. ' '. Auth::guard('student')->user()->lastname }}</span></p>
                <hr>
                <p class="flex items-center gap-3 py-2">Email: <span class="text-gray-500">{{ Auth::guard('student')->user()->email }}</span></p>
                <hr>
                <p class="flex items-center gap-3 py-2">Mobile Number: <span class="text-gray-500">{{ Auth::guard('student')->user()->mobile_number }}</span></p>
                <hr>
                <p class="flex items-center gap-3 py-2">Student Number: <span class="text-gray-500">{{ Auth::guard('student')->user()->student_number }}</span></p>
                <hr>
                <p class="flex items-center gap-3 py-2">Complete Address: <span class="text-gray-500">{{ Auth::guard('student')->user()->address }}</span></p>


                {{ $this->modalFormAction }}
            </div>
            <div class="bg-white">
                <h1>kdsalj dsajdslajdljl</h1>
            </div>
        </div>
    </main>
   </section>
   <x-filament-actions::modals />
</div>
