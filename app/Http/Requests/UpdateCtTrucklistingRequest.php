<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCtTrucklistingRequest extends FormRequest {

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
            'ctcondition_id' => 'required', 
            'price' => 'required', 
			'ctmake_id' => 'required', 
			'ctmodels_id' => 'required',
			'engine_size_id' => 'required', 
			'ctregistered_id' => 'required', 
			
            
		];
	}
}
