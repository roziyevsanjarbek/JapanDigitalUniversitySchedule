<?php

namespace App\Http\Requests;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreScheduleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
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
            'subject_id' => 'required|exists:subjects,id',
            'teacher_id' => [
                'required',
                'exists:teachers,id',
                Rule::unique('schedules', 'teacher_id')
                    ->where(fn ($query) => $query->where('pair', $this->pair)
                        ->where('week_day', $this->week_day)->where('date', $this->date))
            ],
            'room_id' => [
                'required',
                'exists:rooms,id',
                Rule::unique('schedules', 'room_id')
                    ->where(fn ($query) => $query->where('pair', $this->pair)
                        ->where('week_day', $this->week_day)->where('date', $this->date))
            ],
            'group_id' => [
                'required',
                'exists:groups,id',
                Rule::unique('schedules', 'group_id')
                    ->where(fn ($query) => $query->where('pair', $this->pair))
                        ->where('week_day', $this->week_day)->where('date',$this->date)
            ],
            'pair' => 'required|exists:pairs,id|unique:schedules,pair|between:1,7',
            'week_day' => 'required|string|in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday',
            'date' => 'required|date',
        ];
    }
}
