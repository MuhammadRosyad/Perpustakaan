<?php

namespace App\Helpers;

use App\User;


class DataUserHelper
{
  public static function DataUser($User)
  {
    $DataUser = User::where('id', $User->id)->first();
    return $DataUser;
  }
}
