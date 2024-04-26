<div>
    <div class="flex flex-col items-center">
        <div class="flex p-16 mx-auo justify-center items-center gap-4">
            <input type="number" name="number1" wire:model="number1" placeholder="Premier nombre">
            <select name="action" wire:model="action" id="">
                <option value="+">+</option>
                <option value="+">-</option>
                <option value="+">*</option>
                <option value="+">/</option>
                <option value="+">%</option>
            </select>
            <input type="number" name="number2" wire:model="number2" placeholder="Premier nombre">
            <button wire:click="calculate"
                class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 disabled:cursor-not-allowed disabled:bg-opacity-90 rounded text-white"
                {{ $disabled ? ' disabled' : '' }}> =
            </button>
        </div>
        <p class="text-3xl">{{ $result }}</p>
    </div>
</div>
