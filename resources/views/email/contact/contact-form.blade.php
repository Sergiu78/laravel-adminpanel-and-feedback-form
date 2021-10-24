@component('mail::message')
# New message.

<p>Тема</p> {{ $data['theme'] }}
<p>Сообщение</p> {{ $data['text'] }} 

 <p><img  height="50px" src="{{ asset('/storage/file/messages/'.$data['file']) }}"/></p>
@endcomponent
