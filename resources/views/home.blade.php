@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">
    
      <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data" >
        @csrf
          <div class="form-group">
            <label for="theme">Тема сообщения</label>
            <input type="text" class="form-control" id="theme" name="theme" placeholder="Тема сообщения">
            @error('theme')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          
          <div class="form-group">
            <label for="text">Введите текст</label>
            <textarea class="form-control" id="text" name="text" rows="3"></textarea>
            @error('text')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
      
          <div class="form-group">
              <label for="file">Выберете файл</label>
              <input type="file" class="form-control-file" id="file" name="file">
              @error('file')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
      
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
  </div>
@endsection
