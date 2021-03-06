<?php

namespace Modules\Inventory\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class CreateAccountRequest extends BaseFormRequest
{
    public function rules()
    {
        return [];
    }

    public function translationRules()
    {
        return ['title'=>'min:2,requeride'];
    }

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            'title:min'=>trans('inventory::accounts.menssage.the min lether is 2')
        ];
    }

    public function translationMessages()
    {
        return [];
    }
}
