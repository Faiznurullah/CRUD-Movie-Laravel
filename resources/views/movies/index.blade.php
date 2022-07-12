
@extends('layout.main')
@section('title', 'Movies')
@section('konten')

<div class="container">

    <div class="row mt-5">

        <div class="col-md-12">
          <h1>Top Movies</h1><a href="/movie/create" class="btn btn-primary">Tambah Data</a>

          @if (session('status'))
     <div class="alert alert-success mt-5">
        {{ session('status') }}
      </div>
          @endif

            <ul class="list-group list-group-flush mt-5 mb-5">

      @foreach ($movies as $movie) 

                <li class="list-group-item d-flex justify-content-between align-item-center">

                    <div>
            <h5>{{ $loop->iteration }} - {{ $movie->title }} <span class="badge bg-primary">{{ $movie->year }}</span></h5>
            <p class="text-justify">
                {{ $movie->description }}
            </p>
            <small class="text-muted">{{ $movie->genre }}</small>
        </div>

            <a href="/movie/{{ $movie->id  }}"><span class="badge bg-warning">Detail</span></a>
                </li> 

           
             @endforeach
          

            </ul> 


        </div> 

    </div> 

</div>   


@endsection


  
  