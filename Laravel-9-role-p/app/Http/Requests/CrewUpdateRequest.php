<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class CrewUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('crew_edit');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name'=>'required',
            'last_name'=>'required',
            'contact_no'=>'required',
            'nic_no'=>'required',
            'sltb_id'=>'required',
            'address'=>'required',
            'email'=>'required|email',
            'job_role'=>'required',
            'policy_no'=>'required',
            'pin_no'=>'required|integer',
        ];
    }
}
