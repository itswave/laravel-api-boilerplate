<?php

namespace App\Http\Api\V1\Requests;

use Dingo\Api\Http\FormRequest;

/**
 * Class RoleCreateRequest
 * @package App\Http\Requests
 */
class RoleCreateRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
