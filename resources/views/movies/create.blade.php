
@extends('layout.main')
@section('title', 'Tambah Movies')
@section('konten')

<div class="container">

    <div class="row mt-5 mb-5">

        <div class="col-md-12">
          <h1>Tambah Movies</h1>

          <form action="/movie" method="POST">
            @csrf
            @method('POST')

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" name="title" id="title" placeholder="Judul Film">
                @error('title')
               <div id="invalidCheck3Feedback" class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror  
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Genre</label>
                <input type="text" class="form-control  @error('genre') is-invalid @enderror" name="genre" value="{{ old('genre') }}" id="genre" placeholder="Genre Film">
                @error('genre')
                <div id="invalidCheck3Feedback" class="invalid-feedback">
                   {{ $message }}
                 </div>
                 @enderror 
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tahun Release</label>
                <input type="text" class="form-control  @error('rilis') is-invalid @enderror" name="rilis" value="{{ old('rilis') }}" id="rilis" placeholder="Tahun Release Film">
                @error('rilis')
                <div id="invalidCheck3Feedback" class="invalid-feedback">
                   {{ $message }}
                 </div>
                 @enderror 
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control  @error('description') is-invalid @enderror" name ="description" value="{{ old('description') }}" id="description" rows="3"></textarea>
                @error('description')
                <div id="invalidCheck3Feedback" class="invalid-feedback">
                   {{ $message }}
                 </div>
                 @enderror 
              </div>

              <button type="submit" class="btn btn-primary">Kirim</button>
              <a href="/movie" type="button" class="btn btn-success">Kembali</a>

          </form>

        </div> 

    </div> 

</div>   


@endsection


  
  