<div class="h-100 w-full flex bg-teal-lightest shadow">
    <div class="bg-white rounded shadow w-full p-6">
        <div>
            <ul>
                @foreach($comments as $comment)
                    <li class="p-2">{{ $comment->comment }}</li>
                @endforeach
            </ul>
        </div>
        <div>
            <textarea 
                class="my-2 w-full rounded border shadow"
                id="comment"
                name="comment"
                wire:model="comment"    
            ></textarea>
            <x-form.input-error :name="'comment'" :text="'comment'"/>
            <button wire:click="addComment()" class="shadow rounded bg-blue-600 py-2 px-4 text-white">Add comment</button>
        </div>
    </div>
</div>