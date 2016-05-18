<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Member;

class CreateMemberRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'memberName' =>'required',
            'email' =>'required|confirmed|unique:member,email',
            //'email' => 'unique:member,email,'.$member->id.',memberId',
            'password' =>'required|confirmed',
        ];

    }
}
