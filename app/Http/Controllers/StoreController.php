<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use App\Http\Requests\StoreRequest;
use App\Jobs\SendMessage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class StoreController extends Controller
{
    public function index(StoreRequest $request)
    {
     /**
     * Валидация данных 
     */
        $data = $request->validated();

        
        
        $data['user_id'] = Auth::id();
     /**
     * Сохроняем файл в storage
     */
         if($request->hasFile('file'))
         {
             $destination_path = 'public/file/messages';
             $file = $request->file('file');
             $file_name = $file->getClientOriginalName();
             $path = $request->file('file')->storeAs($destination_path, $file_name);

             $data['file'] = $file_name;
         }

        Message::create($data);
     /**
     * Отправляем в данные очередь для отправки письма
     */
        dispatch(new SendMessage($data));
        
        return redirect('/')->with('success', 'Новый пост успешно создан');
    }
}
