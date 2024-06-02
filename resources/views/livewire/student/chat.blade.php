<div class="bg-gray-100 min-h-[100svh]">
    {{-- header --}}
   <x-asset.student.header/>

   {{-- company --}}
   <section class="max-w-screen-xl px-6 xl:px-0 mx-auto py-10 ">

    <main class="flex gap-5 w-full" x-data="dropdown">
        <div class="min-w-[25rem] max-w-[25rem] space-y-5">
            <div class="bg-white p-4 rounded-md space-y-2 shadow">
                <img src="{{ asset('asset/campaign-creators-gMsnXqILjp4-unsplash.jpg') }}" class="w-[9rem] h-[9rem] border-2 border-blue-500 mx-auto rounded-full" alt="">
                <h1 class="text-center font-semibold">{{ Auth::guard('student')->user()->firstname. ' '. Auth::guard('student')->user()->lastname  }}</h1>
                <h1 class="text-center font-semibold font-mono text-xs opacity-50">{{ Auth::guard('student')->user()->course  }}</h1>
            </div>

        </div>
        <div class="w-full space-y-5">
            <div class="bg-white">
                <header class="w-full text-white py-3 px-4 bg-[#791417]">
                    {{-- {{ $convo->company?->company_name }} --}} ADMIN
                </header>
                {{-- message container --}}
                <div class="py-4 px-3" wire:poll.visible>
                    <div class="min-h-[45svh] max-h-[45svh] overflow-y-auto space-y-2">
                        @forelse ($messages as $message)
                            @if ($message->sender == 'student')
                                <div class="flex flex-col items-end justify-end px-3">
                                    <div class=" bg-blue-500 w-fit p-4 rounded-md text-white">
                                        {{ $message->body }}</div>
                                    <small class="text-gray-500">{{ $message->created_at }}</small>
                                </div>
                            @else
                                <div class="px-3">
                                    <div class="bg-gray-300 w-fit p-4 rounded-md">{{ $message->body }}</div>
                                    <small class="text-gray-500 ">{{ $message->created_at }}</small>
                                </div>
                            @endif

                        @empty
                        @endforelse





                        <div x-ref="scrolldown"></div>
                    </div>

                </div>
                <form x-on:submit.prevent="sendMessage" class="flex">
                    <textarea class="px-3 py-2 border w-full" x-model="message" rows="1" required></textarea>
                    <button type="submit" class="px-4 py-2 bg-pup text-white">Send</button>
                </form>
            </div>

        </div>
    </main>
   </section>

</div>
@script
    <script>
        Alpine.data('dropdown', () => ({

            scrolldown: null,
            message: '',
            async sendMessage() {
                await $wire.messageSend(this.message);
                this.message = '';
                this.$refs.scrolldown.scrollIntoView({
                    behavior: 'smooth'
                })
            },

            init() {
                this.$refs.scrolldown.scrollIntoView({
                    behavior: 'smooth'
                })
            }
        }))
    </script>
@endscript
