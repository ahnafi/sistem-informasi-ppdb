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

            // Prestasi (Tabel achievements)
            "achievements" => ["nullable", "array"],
            "achievements.*.type" => ["required_with:achievements.*.name", "in:academic,nonacademic"],
            "achievements.*.name" => ["nullable", "string"],
            "achievements.*.year" => ["required_with:achievements.*.name", "integer"],
            "achievements.*.ranking" => ["required_with:achievements.*.name", "in:1,2,3"],
            "achievements.*.tier" => ["required_with:achievements.*.name", "in:village,sub_district,district,province,national,international,world"],

            // Wali (Tabel student_parents)
            "parents" => ["required", "array", "min:1"],
            "parents.*.type" => ["required", "in:father,mother,guardian"],

            // Father (parents.0)
            "parents.0.name" => ["required", "string"],
            "parents.0.phone" => ["required", "string"],
            "parents.0.address" => ["required", "string"],
            "parents.0.job" => ["required", "string"],
            "parents.0.education" => ["required", "string"],
            "parents.0.income" => ["required", "in:<1,1-2,2-3,3-4,4-5,5"],

            // Mother (parents.1)
            "parents.1.name" => ["required", "string"],
            "parents.1.phone" => ["required", "string"],
            "parents.1.address" => ["required", "string"],
            "parents.1.job" => ["required", "string"],
            "parents.1.education" => ["required", "string"],
            "parents.1.income" => ["required", "in:<1,1-2,2-3,3-4,4-5,5"],

            // Guardian (parents.2) - All optional
            "parents.2.name" => ["nullable", "string"],
            "parents.2.phone" => ["nullable", "string"],
            "parents.2.address" => ["nullable", "string"],
            "parents.2.job" => ["nullable", "string"],
            "parents.2.education" => ["nullable", "string"],
            "parents.2.income" => ["nullable", "in:<1,1-2,2-3,3-4,4-5,5"],
        ];
    }
}
