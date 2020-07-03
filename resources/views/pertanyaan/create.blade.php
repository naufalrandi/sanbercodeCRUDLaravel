@extends('partials.master')
@section('title', 'Tanya Jawab')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Pertanyaan</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('pertanyaan.store') }}" method="POST">
                    @csrf
                    <label for="judul"> Judul</label>
                    <input type="text" class="form-control" name="judul" id="judul" placeholder="Tulis judul disini">
                    <label for="isi">Isi</label>
                    <div class="mb-3" id="isi">
                        <textarea class="textarea" placeholder="Tulis pertanyaan disini" name="isi"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
