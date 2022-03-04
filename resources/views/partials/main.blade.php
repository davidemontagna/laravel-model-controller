<main>
    <div class="container-main">
        <div class="products">
            @foreach ($prova as $key => $movie)
                <div class="card">
                    <div class="title-film">
                        Titolo:
                        <span>{{$movie->title}}</span>
                    </div>
                    <div class="original-title-film">
                        Titolo originale:
                        <span>{{$movie->original_title}}</span>
                    </div>
                    <div class="nationality">
                        Nazionalità:
                        <span>{{$movie->nationality}}</span>
                    </div>
                    <div class="date">
                        Data di uscita:
                        <span>{{$movie->date}}</span>
                    </div>
                    <div class="vote">
                        Voto:
                        <span>{{$movie->vote}}</span>
                    </div>
                    
                    
                </div><br>
            @endforeach
        </div>
        
        
    </div>
</main>