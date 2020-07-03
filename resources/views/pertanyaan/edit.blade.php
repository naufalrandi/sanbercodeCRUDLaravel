@extends('partials.master')
@section('title', 'Tanya Jawab')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Pertanyaan</h3>
            </div>
            <div class="card-body">
                {!! Form::model($pertanyaan, ['method' => 'PATCH','route' => ['pertanyaan.update', $pertanyaan->id]]) !!}
                    @csrf
                    <label for="judul"> Judul</label>
                    {!! Form::text('judul', null, array('placeholder' => 'judul','class' => 'form-control')) !!}
                    <label for="isi">Isi</label>
                    <div class="mb-3" id="isi">
                        {!! Form::textarea('isi', null, array('placeholder' => 'isi','class' => 'form-control')) !!}
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
