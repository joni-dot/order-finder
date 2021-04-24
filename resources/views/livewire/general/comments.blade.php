<div class="h-100 w-full flex bg-teal-lightest shadow">
    <div class="bg-white rounded shadow w-full p-6">
        <ul>
            @foreach($model->comments as $comment)
                <li class="p-2">{{ $comment->comment }}</li>
            @endforeach
        </ul>
    </div>
</div>