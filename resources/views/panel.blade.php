@extends('layouts.app')

@section('content')
<div class="container">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Имя</th>
        <th scope="col">EMail</th>
        <th scope="col">Тема сообщения</th>
        <th scope="col">Сообщение</th>
        <th scope="col">Ссылка на файл</th>
        <th scope="col">Дата создания</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($messages as $message)
      <tr>
        <th scope="row">{{ $message->id }}</th>
        <td>{{ $message->user->name }}</td>
        <td>{{ $message->user->email }}</td>
        <td>{{ $message->theme }}</td>
        <td>{{ $message->text }}</td>
        <td><a href="{{ asset('/storage/file/messages/'.$message->file) }}"><img  height="50px" src="{{ asset('/storage/file/messages/'.$message->file) }}"/></a></td>
        <td>{{ $message->created_at }}</td>
      </tr>
        @endforeach
      
    </tbody>
  </table>
  
  </div>
</div>

  @endsection