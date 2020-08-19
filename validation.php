<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'يجب قبول السمة.',
    'active_url' => ': السمة ليست عنوان URL صالحًا.',
    'after' => 'يجب أن يكون :attribute تاريخًا بعد :date.',
    'after_or_equal' => 'يجب أن يكون :attribute تاريخًا بعد أو يساوي :date.',
    'alpha' => 'قد يحتوي :attribute على أحرف فقط.',
    'alpha_dash' => 'لا يجوز أن تحتوي :attribute إلا على أحرف وأرقام وشرطات وشرطات سفلية.',
    'alpha_num' => 'لا يجوز أن يحتوي :attribute إلا على أحرف وأرقام.',
    'array' => 'يجب أن يكون :attribute مصفوفة.',
    'before' => 'يجب أن يكون :attribute تاريخًا قبل :date.',
    'before_or_equal' => 'يجب أن يكون :attribute تاريخًا يسبق أو يساوي :date.',
    "between" => [
    'numeric' => 'يجب أن يكون :attribute بين: min و: max.',
        'file' => 'يجب أن يكون :attribute بين: min و: max كيلوبايت.',
        'string' => 'يجب أن يكون :attribute بين: min و: max أحرف.',
        'array' => 'يجب أن تحتوي :attribute على ما بين: min و: max items.',
    ] ,
    'boolean' => 'يجب أن يكون حقل السمة صحيحًا أو خطأ.',
    'confirmed' => 'تأكيد السمة غير متطابق.',
    'date' => ' :attribute ليس تاريخًا صالحًا.',
    'date_equals' => 'يجب أن يكون :attribute تاريخًا مساويًا لـ :date.',
    'date_format' => ': السمة لا تطابق التنسيق :format.',
    'different' => 'يجب أن يكون :attribute و: other مختلفين.',
    'digits' => 'يجب أن يكون :attribute: digits digits.',
    'digits_between' => ' :attribute يجب أن تكون بين: min و: max digits.',
    'dimensions' => ': السمة لها أبعاد صورة غير صالحة.',
    'distinct' => 'يحتوي حقل السمة على قيمة مكررة.',
    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صالحًا.',
    'end_with' => ': يجب أن تنتهي السمة بواحد مما يلي: القيم.',
    'exists' => 'المحدد: السمة غير صالحة.',
    'file' => 'يجب أن يكون :attribute ملفًا.',
    'filled' => 'يجب أن يحتوي حقل السمة على قيمة.',
    'gt' => [
    'numeric' => 'يجب أن يكون :attribute أكبر من: value.',
        'file' => 'يجب أن تكون سمة :attribute أكبر من: value كيلوبايت.',
        'string' => 'يجب أن يكون :attribute أكبر من: value character.',
        'array' => 'يجب أن يحتوي :attribute على أكثر من: value items.',
    ] ,
    'gte' => [
    'numeric' => 'يجب أن يكون :attribute أكبر من أو يساوي: value.',
        'file' => 'يجب أن يكون :attribute أكبر من أو يساوي: value كيلوبايت.',
        'string' => 'يجب أن يكون :attribute أكبر من أو يساوي: value character.',
        'array' => 'يجب أن تحتوي :attribute على: value items أو أكثر.',
    ] ,
    'image' => 'يجب أن يكون :attribute صورة.',
    'in' => 'المحدد: السمة غير صالحة.',
    'in_array' => 'الحقل :attribute غير موجود في: other.',
    'integer' => 'يجب أن يكون :attribute عددًا صحيحًا.',
    'ip' => 'يجب أن يكون :attribute عنوان IP صالحًا.',
    'ipv4' => 'يجب أن يكون :attribute عنوان IPv4 صالحًا.',
    'ipv6' => 'يجب أن يكون :attribute عنوان IPv6 صالحًا.',
    'json' => 'يجب أن يكون :attribute سلسلة JSON صالحة.',
    'lt' => [
    'numeric' => 'يجب أن يكون :attribute أقل من: value.',
        'file' => 'يجب أن يكون حجم السمة: أقل من: value كيلوبايت.',
        'string' => 'يجب أن يكون :attribute أقل من: value character.',
        'array' => 'يجب أن يحتوي :attribute على أقل من: value items.',
    ] ,
'lte' => [
    'numeric' => 'يجب أن يكون :attribute أقل من أو يساوي: value.',
        'file' => 'يجب أن يكون :attribute أقل من أو يساوي: value كيلوبايت.',
        'string' => 'يجب أن يكون :attribute أقل من أو يساوي: value character.',
        'array' => 'يجب ألا تحتوي :attribute على أكثر من: value items.',
    ] ,
    "max" => [
    'numeric' => ' :attribute قد لا تكون أكبر من: max.',
        'file' => 'قد لا يكون :attribute أكبر من: max كيلوبايت.',
        'string' => 'لا يجوز أن يكون :attribute أكبر من: max character.',
        'array' => 'لا يجوز أن تحتوي :attribute على أكثر من: max items.',
    ] ,
'mimes' => 'يجب أن يكون :attribute ملفًا من النوع: القيم.',
    'mimetypes' => 'يجب أن يكون :attribute ملفًا من النوع:: values.',
    'min' => [
    'numeric' => 'يجب أن يكون :attribute على الأقل: min.',
        'file' => 'يجب أن يكون حجم :attribute على الأقل: min كيلوبايت.',
        'string' => 'يجب أن يكون عدد أحرف :attribute على الأقل: min من الأحرف.',
        'array' => 'يجب أن تحتوي :attribute على الأقل على: min items.',
    ] ,
'not_in' => 'السمة المحددة :attribute غير صالحة.',
    'not_regex' => 'تنسيق :attribute غير صالح.',
    'numeric' => 'يجب أن يكون :attribute رقمًا.',
    'password' => 'كلمة المرور غير صحيحة.',
    'present' => 'يجب أن يكون حقل :attribute موجودًا.',
    'regex' => 'تنسيق :attribute غير صالح.',
    'required' => ' :attribute حقل مطلوب.',
    'required_if' => 'حقل :attribute مطلوب عندما تكون قيمة :other :value',
    'required_unless' => 'حقل :attribute مطلوب إلا إذا كان قيمة :other تساوي :values.',
    'required_with' => 'حقل :attribute مطلوب عندما :values موجودة.',
    'required_with_all' => 'حقل :attribute مطلوب عندما تكون :values موجودة.',
    'required_without' => 'حقل :attributes مطلوب عندماتكون :values غير موجودة.',
    'required_without_all' => 'حقل :attribute مطلوب في حالة عدم وجود أي من:values.',
    'same' => ':attribute و :other يجب ان تكونا متطابقتان',
    "size" => [
    'numeric' => 'يجب أن يكون: attribute: size.',
        'file' => 'يجب أن يكون: attribute: size كيلوبايت.',
        'string' => 'يجب أن يكون: attribute: حجم الأحرف.',
        'array' => 'يجب أن يحتوي: attribute على: size items.',
    ] ,
    'begin_with' => ': يجب أن تبدأ السمة بواحد مما يلي: القيم.',
    'string' => 'يجب أن يكون: attribute عبارة عن سلسلة.',
    'timezone' => 'يجب أن يكون: attribute منطقة صالحة.',
    'unique' => ': attribute مستخدمة بالفعل.',
    'uploaded' => 'فشل تحميل: attribute.',
    'url' => 'تنسيق السمة غير صالح.',
    'uuid' => ': attribute يجب أن يكون UUID صالحًا.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
