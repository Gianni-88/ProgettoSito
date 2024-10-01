<x-layout>
    <div class="container-fluid mt-5 p-3">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <h1 class="display-1 title text-center">{{$user->name}}</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-evenly">
            @foreach ($articles as $article)
            
            <div class="col-12 col-md-3">
                <x-card
                :article="$article"/>
                {{-- <div class="card" >
                    <img src="{{ Storage::url($article->image)}}" class="card-img-top" alt="Immagine dell'articolo:{{$article->title}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->title}}</h5>
                        <p class="card-subtitle">{{$article->subtitle}}</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center">
                        <p>Scritto il {{$article->created_at->format('d/m/Y')}} <br>
                            da <a href="{{route('article.byUser', $article->user)}}" class="text-capitalize">{{$article->user->name}}</a></p>
                            <a href="{{route('article.show', $article)}}" class="btn btn-outline-secondary">Leggi</a>
                            
                    </div>
                </div> --}}
            </div>
                @endforeach
            </div>
        </div>
    </x-layout>