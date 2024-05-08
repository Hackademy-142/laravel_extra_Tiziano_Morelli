<x-layout>
    <div class="container">
        <div class="row">
            <div class="col">
                    <a href="{{route('showProfile')}}">
                        <button class="btn btn-dark ">
                            Profilo
                        </button>
                    </a>
            </div>
        </div>
    </div>
    <livewire:form-chirp/> 
    <livewire:index-chirp/> 
</x-layout>