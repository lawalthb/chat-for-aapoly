<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessagesEditRequest extends FormRequest
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
            
				"user_id" => "filled",
				"ip_address" => "filled",
				"messages" => "filled|string",
				"status" => "filled",
				"deleted" => "filled",
				"seen" => "filled",
				"userfile" => "nullable",
				"department_id" => "filled",
				"session_id" => "filled",
            
        ];
    }

	public function messages()
    {
        return [
			
            //using laravel default validation messages
        ];
    }

    /**
     *  Filters to be applied to the input.
     *
     * @return array
     */
    public function filters()
    {
        return [
            //eg = 'name' => 'trim|capitalize|escape'
        ];
    }
}
