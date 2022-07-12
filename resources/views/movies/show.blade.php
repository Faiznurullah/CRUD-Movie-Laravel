
@extends('layout.main')
@section('title', 'Detail Movies')
@section('konten')

<div class="container">

    <div class="row mt-5">

        <div class="col-md-12">
          <h1>Detail Movies</h1>
            
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{ $movie->title }}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{ $movie->genre }}</h6>
              <p class="card-text">{{ $movie->description }}</p>
              <p><span class="badge bg-primary">{{ $movie->year }}</span></p>
              <a href="/movie/{{ $movie->id }}/edit" class="card-link">Edit</a>

              <form action="/movie/{{ $movie->id }}" method="POST">
                @method('delete')
                @csrf
              <button type="submit" href="/movie/delete" class="btn btn-danger btn-sm">Hapus</button>
              </form>

              <a href="/movie/" class="card-link">Kembali</a>
            </div>
          </div>


        </div> 

    </div> 

</div>   


@endsection


  
  