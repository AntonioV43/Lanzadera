<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class DestinationRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    // In DestinationRequest.php
public function rules(): array
{
    switch($this->method()){
        case 'POST':
            return [
                'name' => ['required'],
                'duration' => ['required'],
                'caption' => ['required'],
                'price' => ['required'],
                'people' => ['nullable', 'integer'],
                'date' => ['nullable', 'date'],
                'description' => ['required'],
                'image' => ['required','image'],
            ];
        case 'PUT':
        case 'PATCH':
            return [
                'name' => ['required'],
                'duration' => ['required'],
                'caption' => ['required'],
                'price' => ['required'],
                'people' => ['nullable', 'integer'],
                'date' => ['nullable', 'date'],
                'description' => ['required'],
                'image' => ['image'],
            ];
        default:
            return [];
    }
}
}
