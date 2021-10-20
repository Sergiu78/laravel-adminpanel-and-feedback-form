@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Тема сообщения</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Тема сообщения">
                </div>
                
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Введите текст</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            
                <div class="form-group">
                    <label for="exampleFormControlFile1">Выберете файл</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
            
                  <button type="submit" class="btn btn-primary">Отправить</button>
              </form>
        </div>
    </div>
</div>
@endsection
