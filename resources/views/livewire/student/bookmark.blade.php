<div class="bg-gray-100 min-h-[100svh]">
    {{-- header --}}
   <x-asset.student.header/>

   {{-- company --}}
   <section class="max-w-screen-xl px-6 xl:px-0 mx-auto py-10">
        <div>
            <h1 class="text-2xl font-bold">All Bookmark</h1>
        </div>
        <div class="grid grid-cols-4 gap-10 pt-10">
           @forelse ($jobs as $job)
           <div class="bg-white border py-2 shadow">
            <img src="{{ asset('storage/'.$job->job?->company?->company_profile) }}" class="w-[7rem] h-[7rem] mx-auto rounded-full" alt="">
            <div class=" w-full grid  pt-3 ">
                <a class="text-black mx-auto font-semibold">{{ $job->job->job_title }}</a>

                <div class="pt-10  flex justify-end px-2">
                    <a href="{{ route('student.job',['job'=>$job->job->job_title,'id'=>$job->job->id]) }}" class="text-sm text-blue-500 font-bold underline px-4 py-2 rounded">
                        Apply Now
                    </a>
                </div>

            </div>
        </div>
           @empty

           @endforelse

        </div>
   </section>
</div>
