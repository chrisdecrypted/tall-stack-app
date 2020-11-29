
<div class="w-full px-4 py-4 bg-gray-100 rounded-b">
    <p class="text-gray-400 uppercase"> New task: </p>
    <form wire:model="input" wire:submit.prevent="addTask">
        <div class="flex justify-between bg-gray-200">
            <input  type="text" class="w-4/5" />
            <button type="submit" class="w-1/5 px-2 py-2 font-bold text-gray-800 bg-gray-200 rounded hover:bg-gray-300">Add +</button>
        </div>
    </form>
</div>
