<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TweetPolicy
{
   public function create(): bool
   {
        return Auth::check();
   }
}
