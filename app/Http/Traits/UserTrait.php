<?php

namespace App\Http\Traits;
use App\Models\User;
use App\Models\Question;


trait UserTrait{
    public function getAllUserDetails(){

        return Question::all();
    }
}
