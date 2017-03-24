<?php

namespace App\Http\Requests;

use App\Project;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AddProjectFormRequest extends FormRequest
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

            'title' => 'required',
            'description' =>'required'
        ];
    }

    public function persist()
    {
        $project=Project::create([
            'title'=>request('title'),
            'user_id'=>Auth::user()->id,
            'description' => request('description')
        ]);
    }


}
