<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;
class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    protected function prepareForValidation()
    {
        
    }
    protected function passedValidation()
    {
        
    }
    protected $stopOnFirstFailure = true;
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            File::types()
        ];
    }
    public function messages() : array
    {
        return [

        ];
    }
    public function attributes()
    {
        
    }
}
