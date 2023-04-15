<?php

namespace App\Http\Requests\Admin\Pegawai;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StorePegawai extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.pegawai.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'nama_pegawai' => ['required', 'string'],
            'no_telpon' => ['required', Rule::unique('pegawai', 'no_telpon'), 'string'],
            'alamat' => ['nullable', 'string'],
            'tanngal_lahir' => ['nullable', 'date'],
            'status_karyawan' => ['nullable', 'string'],
            'jabatan' => ['nullable', 'string'],
            
        ];
    }

    /**
    * Modify input data
    *
    * @return array
    */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();

        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
