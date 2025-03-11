<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTestimonialRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'image'=>'required|mimes:jpg,png,jpeg',
            'name'=>'required|string',
            'position'=>'required|string',
            'description'=>'required|string',
        ];
    }
    public function attributes(){
        return [
            'name'=>__('keyWords.name'),
            'image'=>__('keyWords.image'),
            'position'=>__('keyWords.position'),
            'descriotion'=>__('keyWords.descriotion'),
        ];
        }
}
