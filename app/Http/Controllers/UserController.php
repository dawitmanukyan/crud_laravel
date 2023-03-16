<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Messages;
class UserController extends Controller

{
    public function hello() {
        return 'Hello World';
    }

    public function create() {
        $info = [
            'from'=>1,
            'to'=>2,
            'message'=>'example text'
        ];
        Messages::create($info);
        dd('created');
    }

    public function read() {
        //give all items from Messages table
        $info = Messages::all();
        foreach ($info as $i){
            dump($i->to);
        }
    }

    public function update() {
        $info = Messages::find(1);
        $info->update([
            'seen'=>true
        ]);
    }

    public function delete() {
        $info = Messages::find(2);
        $info->delete();
    }
}
