<div class="text-gray-50 mt-10">
    @foreach($tweets as $tweet)
        <div>
            {{ $tweet->body }}
        </div>
    @endforeach
</div>
