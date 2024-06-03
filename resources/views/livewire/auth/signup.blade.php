<div>
    <div class="min-h-[100svh] flex justify-center py-20 bg-gray-100">
        <div class=" w-full">
            <div class="flex justify-center items-center gap-2 mb-5">
                <div
                    class="font-bold flex justify-center items-center  text-2xl  bg-[#791417] h-[3rem] w-[3rem] text-white   rounded-full">
                    <span> iL</span>
                </div>
                <p class="text-5xl font-bold">Internlink</p>
            </div>
            <div class="bg-white shadow max-w-screen-md mx-auto rounded-lg divide-y divide-gray-200">

                <form wire:submit='signup' class="px-5 py-5">
                    <h1 class="pb-7 text-3xl font-bold">Sign Up</h1>
                    <div class="grid grid-cols-2 gap-8 mb-5">
                        <div class="">
                            <label class="font-semibold text-sm  text-gray-600 pb-1 block">First name</label>
                            <input type="text" wire:model="firstname"
                                class="border border-black/30 rounded-lg px-3 py-2 mt-1  text-sm w-full" required />
                            @error('firstname')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="">
                            <label class="font-semibold text-sm  text-gray-600 pb-1 block">Last Name</label>
                            <input type="text" wire:model="lastname"
                                class="border border-black/30 rounded-lg px-3 py-2 mt-1  text-sm w-full" required />
                            @error('lastname')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>

                    </div>
                    <div class="grid grid-cols-2 mb-5 gap-8">
                        <div class="">
                            <label class="font-semibold text-sm  text-gray-600 pb-1 block">Student Number</label>
                            <input type="text" wire:model="student_number"
                                class="border border-black/30 rounded-lg px-3 py-2 mt-1  text-sm w-full" required />
                            @error('student_number')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="">
                            <label class="font-semibold text-sm  text-gray-600 pb-1 block">Course</label>
                            <input type="text" wire:model="course"
                                class="border border-black/30 rounded-lg px-3 py-2 mt-1  text-sm w-full" required />
                            @error('course')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                   <div class="grid grid-cols-2 gap-8 mb-5">
                    <div>
                        <label class="font-semibold text-sm  text-gray-600 pb-1 block">E-mail</label>
                        <input type="email" wire:model="email"
                            class="border border-black/30 rounded-lg px-3 py-2 mt-1  text-sm w-full" required />
                        @error('email')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>

                    <div>
                        <label class="font-semibold text-sm  text-gray-600 pb-1 block">Mobile Number</label>
                        <input type="text" wire:model="mobile_number"
                            class="border border-black/30 rounded-lg px-3 py-2 mt-1  text-sm w-full" required />
                        @error('mobile_number')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                   </div>

                    <div class="mb-5">
                        <label class="font-semibold text-sm text-gray-600 pb-1 block">Password</label>
                        <input type="password" wire:model="password"
                            class="border border-black/30 rounded-lg px-3 py-2 mt-1  text-sm w-full" required />
                        @error('password')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label class="font-semibold text-sm text-gray-600 pb-1 block">Confirm Password</label>
                        <input type="password" wire:model="password_confirmation"
                            class="border border-black/30 rounded-lg px-3 py-2 mt-1  text-sm w-full" />
                        @error('password')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit"
                        class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                        <span class="inline-block mr-2">Register</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="w-4 h-4 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </button>
                    <div class="py-5">
                        <p class="text-center">Already have an account? <a href="{{ route('auth.signin') }}"
                                class="text-blue-500 hover:underline">Sign In .</a></p>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
