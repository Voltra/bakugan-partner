<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Date;

class BakuganPartnerRequest extends FormRequest
{
    public const DATE_FORMAT = 'Y-m-d';

    protected $redirect = '/';

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
            'birthday' => 'required|date_format:'.static::DATE_FORMAT,
        ];
    }

    public function getBirthday(): Carbon
    {
        return $this->asDate($this->validated('birthday'));
    }

    protected function asDate(string $date): false|Carbon
    {
        return Date::createFromFormat(static::DATE_FORMAT, $date)
            ->startOfDay();
    }
}
