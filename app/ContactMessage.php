<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $guarded=[];

    public static function rules()
    {
        return [
           "name"=>"required",
           "email"=>"required|email|min:5|max:80",
           "subject"=>"required|min:3",
           "body"=>"required|min:10",
           "phoneNumber"=>"required|digits:10"
           ];
    }

    public static function store($request)
    {
        $data=$request->only(array_keys(static::rules()));

        return  (new static)->fill($data)->fireAdminEmail();
    }

    protected function fireAdminEmail()
    {
        $this->save();
       // we will fire off the admin email herere;
    }
}
