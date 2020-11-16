<div class="w-full rounded-b bg-gray-100 px-4 py-4">   
         <p class="uppercase text-gray-400">new task: </p>

        <div class="flex bg-gray-200 justify-between">
            <input type="text" class="w-4/5" x-model="task_description" @keydown.enter="store()" />
            <button class="w-1/5 bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-2 rounded"
                wire:model="task_description" wire:click="store()">Add +</button>
                </form>
        </div>
    </div>
    </div>