<?php

namespace MaikonParreiraChallenger\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			"name" => 'required|min:3',
			"cost" => 'required|numeric|max:5',
		];
	}

	public function messages() {
		return [
			'required' => 'The :attribute field can not be empty.',
		];
	}
}
