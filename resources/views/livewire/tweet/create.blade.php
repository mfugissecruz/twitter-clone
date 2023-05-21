<div class="w-full">
    <div class="w-full my-3">
        <label for="tweet">
            <textarea wire:model.defer="body" id="tweet" class="w-full rounded-lg" placeholder="What's up doc?"></textarea>
            @error("body") <span class="text-red-600 font-bold"> {{ $message }} </span> @enderror
        </label>
    </div>

    <button wire:click="tweet" class="px-10 py-2 bg-blue-600 text-white font-black rounded-full ">Tweet</button>
</div>
