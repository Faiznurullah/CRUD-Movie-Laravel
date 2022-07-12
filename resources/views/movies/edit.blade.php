
@extends('layout.main')
@section('title', 'Edit Movies')
@section('konten')

<div class="container">

    <div class="row mt-5 mb-5">

        <div class="col-md-12">
          <h1>Edit Movies</h1>

          <form action="/movie/{{ $movie->id }}" method="POST">
            @method('PUT')
            @csrf
           
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{ $movie->title }}" name="title" id="title" placeholder="Judul Film">
                @error('title')
               <div id="invalidCheck3Feedback" class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror  
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Genre</label>
                <input type="text" class="form-control  @error('genre') is-invalid @enderror" name="genre" value="{{ $movie->genre }}" id="genre" placeholder="Genre Film">
                @error('genre')
                <div id="invalidCheck3Feedback" class="invalid-feedback">
                   {{ $message }}
                 </div>
                 @enderror 
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tahun Release</label>
                <input type="text" class="form-control  @error('rilis') is-invalid @enderror" name="rilis" value="{{ $movie->year }}" id="rilis" placeholder="Tahun Release Film">
                @error('rilis')
                <div id="invalidCheck3Feedback" class="invalid-feedback">
                   {{ $message }}
                 </div>
                 @enderror 
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control  @error('description') is-invalid @enderror" name ="description" value="{{ $movie->description }}" id="description" rows="3"></textarea>
                @error('description')
                <div id="invalidCheck3Feedback" class="invalid-feedback">
                   {{ $message }}
                 </div>
                 @enderror 
              </div>

              <button type="submit" class="btn btn-primary">Edit</button>
              <a href="/movie" type="button" class="btn btn-success">Kembali</a>

          </form>

        </div> 

    </div> 

</div>   


@endsection


  
  