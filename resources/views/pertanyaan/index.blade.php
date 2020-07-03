@extends('partials.master')
@section('title', 'Tanya Jawab')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tanya Jawab</h3>
            </div>
            <div class="card-body">
                @foreach ($data as $pertanyaan)
                  <b style="font-size: 20px;">{{ $pertanyaan->judul }}</b>
                  <br>
                  {{ $pertanyaan->isi }}
                  <hr>
                  <a class="btn btn-info btn-sm" href="{{ route('pertanyaan.show',$pertanyaan->id) }}">Add Comments</a>
                  <a class="btn btn-info btn-sm" href="{{ route('pertanyaan.edit',$pertanyaan->id) }}">Edit</a>
                  <form action="{{ route('pertanyaan.destroy', $pertanyaan->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                  </form>
                  <hr/>

                @endforeach
            </div>
        </div>
    </div>
@endsection
