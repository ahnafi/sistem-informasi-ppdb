<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationCreateRequest extends FormRequest
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
            // Data Diri (Tabel registrations)
            "email" => ["required", "email"],
            "name" => ["required", "string"],
            "gender" => ["required", "in:male,female"],
            "place_of_birth" => ["required", "string"],
            "date_of_birth" => ["required", "date"],
            "village_district_province" => ["required", "string"],
            "address" => ["required", "string"],
            "phone" => ["required", "string"],
            "nisn" => ["required", "string", "unique:registrations,nisn"],
            "origin_school" => ["required", "string"],
            "school_type" => ["required", "in:public,private"],
            "information" => ["required", "string"],

            // Data Periodik (Tabel periodics)
            "periodic.religion" => ["nullable", "in:islam,hindu,buddha,konghucu,Catholic,Protestant,other"],
            "periodic.residence" => ["nullable", "string"],
            "periodic.height" => ["nullable", "numeric"],
            "periodic.weight" => ["nullable", "numeric"],
            "periodic.medical_history" => ["nullable", "string"],
            "periodic.home_distance" => ["nullable", "numeric"],
            "periodic.travel_time" => ["nullable", "numeric"],
            "periodic.child_status" => ["nullable", "in:biological,adopted"],
            "periodic.child_order" => ["nullable", "integer"],
            "periodic.siblings" => ["nullable", "integer"],
            // registration_id akan diisi otomatis setelah registration dibuat

            // Prestasi (Tabel achievements)
            "achievements.*.type" => ["required", "in:academic,nonacademic"],
            "achievements.*.name" => ["required", "string"],
            "achievements.*.year" => ["required", "integer"],
            "achievements.*.ranking" => ["required", "in:1,2,3"],
            "achievements.*.tier" => ["required", "in:village,sub_district,district,province,national,international,world"],
            // registration_id akan diisi otomatis setelah registration dibuat

            // Wali (Tabel student_parents)
            "parents" => ["required", "array", "min:1"],
            "parents.*.type" => ["required", "in:father,mother,guardian"],
            "parents.*.name" => ["required", "string"],
            "parents.*.phone" => ["required", "string"],
            "parents.*.village_district_province" => ["nullable", "string"],
            "parents.*.address" => ["nullable", "string"],
            "parents.*.job" => ["nullable", "string"],
            "parents.*.income" => ["required", "in:<1,1-2,2-3,3-4, 4-5,>5"],
            // registration_id akan diisi otomatis setelah registration dibuat
        ];
    }
}
