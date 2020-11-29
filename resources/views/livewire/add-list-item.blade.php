
<div class="w-full rounded-b bg-gray-100 px-4 py-4">
    <p class="uppercase text-gray-400"> New task: </p>
    <p class="uppercase text-gray-400"> {{ $input }}</p>
    <form wire:submit.prevent="addTask">
        <div class="flex bg-gray-200 justify-between">
            <input wire:model="input" type="text" class="w-4/5" />
            <button type="submit" class="w-1/5 bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-2 rounded">Add +</button>
        </div>
    </form>

</div>
