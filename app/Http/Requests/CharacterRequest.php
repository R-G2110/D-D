<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CharacterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name" => "required|min:2|max:50",
            "weight" => "required|numeric",
            "height" => "required|numeric",
            "armor_class" => "required|numeric|min:1|max:20",
            "background" => "required|min:3|max:100",
            "FOR" => "required|numeric|min:4|max:20",
            "DES" => "required|numeric|min:4|max:20",
            "COS" => "required|numeric|min:4|max:20",
            "INT" => "required|numeric|min:4|max:20",
            "SAG" => "required|numeric|min:4|max:20",
            "CAR" => "required|numeric|min:4|max:20",
        ];
    }
    public function messages(){
        return [
            "name.required" => "Il nome è un campo obbligatorio.",
            "name.min" => "Il nome deve essere almeno di :min caratteri.",
            "name.max" => "Il nome deve essere minore di :max caratteri",
            "weight.required" => "Il peso è un campo obbligatorio.",
            "weight.numeric" => "Il peso deve essere un numero.",
            "height.required" => "L'altezza è un campo obbligatorio.",
            "height.numeric" => "L'altezza deve essere un numero.",
            "armor_class.required" => "La classe armatura è un campo obbligatorio.",
            "armor_class.numeric" => "Il peso deve essere un numero.",
            "armor_class.min" => "La classe armatura deve essere almeno di :min caratteri.",
            "armor_class.max" => "La classe armatura deve essere minore di :max caratteri",
            "background.required" => "Il background è un campo obbligatorio.",
            "background.min" => "Il background deve essere almeno di :min caratteri.",
            "background.max" => "Il background deve essere minore di :max caratteri",
            "FOR.required" => "Il numero della statistica Forza è un campo obbligatorio.",
            "FOR.numeric" => "Il numero della statistica Forza deve essere un numero.",
            "FOR.min" => "Il numero della statistica Forza non deve essere minore di :min.",
            "FOR.max" => "Il numero della statistica Forza deve essere minore di :max.",
            "DES.required" => "Il numero della statistica Destrezza è un campo obbligatorio.",
            "DES.numeric" => "Il numero della statistica Destrezza deve essere un numero.",
            "DES.min" => "Il numero della statistica Destrezza non deve essere minore di :min.",
            "DES.max" => "Il numero della statistica Destrezza deve essere minore di :max.",
            "COS.required" => "Il numero della statistica Costituzione è un campo obbligatorio.",
            "COS.numeric" => "Il numero della statistica Costituzione deve essere un numero.",
            "COS.min" => "Il numero della statistica Costituzione non deve essere minore di :min.",
            "COS.max" => "Il numero della statistica Costituzione deve essere minore di :max.",
            "INT.required" => "Il numero della statistica Intelligenza è un campo obbligatorio.",
            "INT.numeric" => "Il numero della statistica Intelligenza deve essere un numero.",
            "INT.min" => "Il numero della statistica Intelligenza non deve essere minore di :min.",
            "INT.max" => "Il numero della statistica Intelligenza deve essere minore di :max.",
            "SAG.required" => "Il numero della statistica Saggezza è un campo obbligatorio.",
            "SAG.numeric" => "Il numero della statistica Saggezza deve essere un numero.",
            "SAG.min" => "Il numero della statistica Saggezza non deve essere minore di :min.",
            "SAG.max" => "Il numero della statistica Saggezza deve essere minore di :max.",
            "CAR.required" => "Il numero della statistica Carisma è un campo obbligatorio.",
            "CAR.numeric" => "Il numero della statistica Carisma deve essere un numero.",
            "CAR.min" => "Il numero della statistica Carisma non deve essere minore di :min.",
            "CAR.max" => "Il numero della statistica Carisma deve essere minore di :max.",
        ];
    }
}
