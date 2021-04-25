<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    public function todos()
    {
        // -------------------Create

        // $todo = Todo::create([
        //         "title" => "Дочитать книгу",
        //         "note" => "Начиная с 99 страницы"
        // ]);  
        
        // dd($todo);


        $todo = Todo::find(8);

        // ----------------------Изменение данных

        // $todo->status = 1;
        // $todo->save();

            // ----------------------Удаление

            // $todo->delete(); 

        // --------------------Получение полей с таблицы


            $todos = Todo::all();


              return view('todos', [
                  "todos" => $todos
              ]);         
        
    }  
        public function todosDone(){

            $todos = Todo::where('status',1)->get();
            return view('todos_done', [
                "todos" => $todos
            ]);  
        }
        public function todosNotDone(){

            $todos = Todo::where('status',0)->get();
            return view('todos_not_done', [
                "todos" => $todos
            ]);  
        }
    }
