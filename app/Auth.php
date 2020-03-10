<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auth extends Model
{
    public function check()
    {
        if(! auth()->user()->isLogin())
        {
            return redirect('/register');
        }




    }



//    $foo = new Foo();
//    $foo->check();
}
