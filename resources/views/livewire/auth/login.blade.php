<div>
    <div class="min-h-[100svh] flex justify-center py-20 bg-gray-100">
        <div>
            <div class="flex justify-center items-center gap-2 mb-5">
                <div
                    class="font-bold flex justify-center items-center  text-2xl  bg-[#791417] h-[3rem] w-[3rem] text-white   rounded-full">
                    <span> iL</span>
                </div>
                <p class="text-5xl font-bold">Internlink</p>
            </div>
            <div class="bg-white shadow w-[30rem] rounded-lg divide-y divide-gray-200">

                <form wire:submit='signin' class="px-5 py-2">
                    <h1 class="pb-7 text-3xl font-bold">Sign In</h1>
                    <div class="mb-5">
                        <label class="font-semibold text-sm  text-gray-600 pb-1 block">E-mail</label>
                        <input type="email" wire:model='email'
                            class="border border-black/30 rounded-lg px-3 py-2 mt-1  text-sm w-full" />
                        @error('email')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label class="font-semibold text-sm text-gray-600 pb-1 block">Password</label>
                        <input type="password" wire:model='password'
                            class="border border-black/30 rounded-lg px-3 py-2 mt-1  text-sm w-full" />
                        @error('password')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" wire:loading.attr="disabled"
                        class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                        <span class="inline-block mr-2">Login</span>
                        <svg wire:loading.remove xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" class="w-4 h-4 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                        <svg wire:loading xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4 inline-block animate-spin">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                        </svg>

                    </button>
                    <div class="py-5">
                        <p class="text-center">Don't have an account yet? <a href="{{ route('auth.signup') }}"
                                class="text-blue-500 hover:underline">Sign up .</a></p>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
