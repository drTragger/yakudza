<?php

namespace App\Http\Requests;

use App\Enums\BodyType;
use App\Enums\Budget;
use App\Enums\FuelType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SubmitRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'bodyType' => ['required', 'string', Rule::in(array_map(fn($case) => $case->value, BodyType::cases()))],
            'fuelType' => ['required', 'string', Rule::in(array_map(fn($case) => $case->value, FuelType::cases()))],
            'budget' => ['required', 'string', Rule::in(array_map(fn($case) => $case->value, Budget::cases()))],
            'name' => ['required', 'string'],
            'phone' => ['required', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'bodyType.required' => 'Будь ласка, оберіть тип кузова.',
            'fuelType.required' => 'Будь ласка, оберіть тип палива.',
            'budget.required' => 'Будь ласка, оберіть бюджет.',
            'name.required' => 'Будь ласка, введіть ваше імʼя.',
            'phone.required' => 'Будь ласка, введіть ваш номер телефону.',
            'string' => 'Поле має бути рядковим типом даних.',
            'in' => 'Будь ласка, оберіть одне з наданих значень.'
        ];
    }

    public function attributes(): array
    {
        return [
            'bodyType' => 'тип кузова',
            'fuelType' => 'тип палива',
            'budget' => 'бюджет',
            'name' => 'імʼя',
            'phone' => 'номер телефону',
        ];
    }
}
