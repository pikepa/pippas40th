<div>
    <form wire:submit.prevent="register">
        <label for="email" class="block text-lg font-medium leading-5 text-gray-700  font-bold ">Email
        </label>
        <div class="mt-1 relative rounded-md shadow-sm">

            <div>
                <input wire:model="email" id="email" name="email" class="form-input block w-full pl-4 sm:text-sm sm:leading-5" placeholder="you@example.com" />

            </div>


        </div>
        <div class="mt-4 flex space-x-4">
            <span class=" rounded-md shadow-sm">
                <button type="submit" class=" flex justify-center py-2 px-4 border border-transparent 
                text-sm font-medium rounded-md  bg-pink hover:bg-red-500 text-gray-700 focus:outline-none focus:border-indigo-700">
                    Register
                </button>
            </span>
            <div class="mt-2 text-sm text-pink font-semibold">
                @error('email') <span>{{ $message }}</span> @enderror
            </div>
        </div>

    </form>

</div>