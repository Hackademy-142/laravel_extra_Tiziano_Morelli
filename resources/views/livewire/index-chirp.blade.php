<div>
    <div>
        {{-- The Master doesn't talk, he acts. --}}
        <div class="container">
            <div class="row">
                <div class="col-12">
                    
                    @foreach ($chirp->sortbydesc('id') as $chirp )
                    <div class="tweet-wrap">
                        <div class="tweet-header">
                            <img src="https://pbs.twimg.com/profile_images/1012717264108318722/9lP-d2yM_400x400.jpg" alt="" class="avator">
                            <div class="tweet-header-info">
                                {{$chirp->user->name}}
                                <p>{{$chirp->content}}</p>
                            </div>
                            
                        </div>
                        @if($chirp->tags->isNotEmpty())
                        <div class="mb-3 ">
                            @foreach($chirp->tags as $tag)
                            <span class="badge text-bg-primary">#{{$tag->name}}</span>
                            @endforeach
                        </div>
                        @endif
                        <div class="tweet-img-wrap">
                            <img src="{{Storage::url($chirp->img)}}" alt="" class="tweet-img">
                        </div>
                        <div class="mx-auto text-end my-3 w-100">
                            <a href="{{route('edit', compact('chirp'))}}">
                                <i class="bi text-primary fs-4 bi-pencil-square"></i>
                            </a>
                            <button class="btn" wire:click="destroy({{$chirp}})">
                                <i class="bi text-danger fs-4 bi-trash3" ></i>
                            </button>
                        </div>
                    </div>
                    
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

</div>
