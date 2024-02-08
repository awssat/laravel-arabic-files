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

    'accepted' => 'يجب قبول حقل :attribute.',
    'accepted_if' => 'حقل :attribute يجب قبوله عندما يكون حقل :other بقيمة :value.',
    'active_url' => 'حقل :attribute يجب ان يكون عنوان URL صحيح.',
    'after' => 'حقل :attribute يجب ان يكون بعد تاريخ :date.',
    'after_or_equal' => 'حقل :attribute يجب ان يكون تاريخ بعد او مطابق لتاريخ :date.',
    'alpha' => 'حقل :attribute يجب ان يحتوي على احرف فقط.',
    'alpha_dash' => 'حقل :attribute يجب ان يحتوي فقط على احرف وارقام وشرطات وشرطات سفلية.',
    'alpha_num' => 'حقل :attribute يجب ان يحتوي على حروف وارقام فقط.',
    'array' => 'حقل :attribute يجب أن يكون مجموعة.',
    'ascii' => 'حقل :attribute يجب أن يحتوي فقط على أحرف أبجدية رقمية ورموز أحادية البايت.',
    'before' => 'حقل :attribute يجب ان يكون تاريخ قبل :date.',
    'before_or_equal' => 'حقل :attribute يجب ان يكون تاريخ قبل او مطابق لتاريخ :date.',
    'between' => [
        'array' => 'يجب أن يحتوي حقل :attribute على عدد من العناصر بين :min و :max.',
        'file' => 'يجب أن يكون حجم الملف :attribute بين :min و :max كيلوبايت.',
        'numeric' => 'حقل :attribute يجب ان تكون قيمته بين :min و :max.',
        'string' => 'يجب أن يحتوي حقل :attribute علي عدد احرف بين :min و :max.'
    ],
    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما صحيحة أو خاطئة.',
    'can' => 'حقل :attribute يحتوي على قيمة غير مصرح بها.',
    'confirmed' => 'تاكيد حقل :attribute غير متطابق.',
    'current_password' => 'كلمة المرور غير صحيحة.',
    'date' => 'حقل :attribute يجب ان يكون تاريخ صالح.',
    'date_equals' => 'حقل :attribute يجب ان يكون تاريخ يطابق :date.',
    'date_format' => 'حقل :attribute يجب ان يتطابق مع الصيغة :format.',
    'decimal' => 'حقل :attribute يجب ان يحتوي علي :decimal رقم عشري.',
    'declined' => 'يجب رفض حقل :attribute.',
    'declined_if' => 'يجب رفض حقل :attribute في حال ما إذا كان :other يساوي :value.',
    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان.',
    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام.',
    'digits_between' => 'يجب أن يحتوي حقل :attribute بين :min و :max رقمًا/أرقام.',
    'dimensions' => 'الـ :attribute يحتوي على أبعاد صورة غير صالحة.',
    'distinct' => 'يحتوي حقل :attribute علي قيمة مكررة.',
    'doesnt_end_with' => 'حقل :attribute يجب ألا ينتهي بواحدة من القيم التالية: :values.',
    'doesnt_start_with' => 'حقل :attribute يجب ألا يبدأ بواحدة من القيم التالية: :values.',
    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح.',
    'ends_with' => 'الـ :attribute يجب ان ينتهي بأحد القيم التالية :value.',
    'enum' => 'حقل المحدد :attribute غير صالح.',
    'exists' => 'حقل المحدد :attribute غير صالح.',
    'file' => 'الـ :attribute يجب ان يكون ملف.',
    'filled' => 'حقل :attribute يجب ان يحتوي علي قيمة.',
    'gt' => [
        'array' => 'الـ :attribute يجب ان يحتوي علي اكثر من :value عناصر/عنصر.',
        'file' => 'الـ :attribute يجب ان يكون اكبر من :value كيلوبايت.',
        'numeric' => 'الـ :attribute يجب ان يكون اكبر من :value.',
        'string' => 'الـ :attribute يجب ان يكون اكبر من :value حروفٍ/حرفًا.',
    ],
    'gte' => [
        'array' => 'الـ :attribute يجب ان يحتوي علي :value عناصر/عنصر او اكثر.',
        'file' => 'الـ :attribute يجب ان يكون اكبر من او يساوي :value كيلو بايت.',
        'numeric' => 'الـ :attribute يجب ان يكون اكبر من او يساوي :value.',
        'string' => 'الـ :attribute يجب ان يكون اكبر من او يساوي :value حروفٍ/حرفًا.',
    ],
    'image' => 'يجب أن يكون حقل :attribute صورةً.',
    'in' => 'حقل المحدد :attribute غير صالح.',
    'in_array' => 'حقل :attribute غير موجود في :other.',
    'integer' => 'يجب أن يكون حقل :attribute عددًا.',
    'ip' => 'يجب أن يكون حقل :attribute عنوان IP صحيح.',
    'ipv4' => 'يجب أن يكون حقل :attribute عنوان IPv4 صحيح.',
    'ipv6' => 'يجب أن يكون حقل :attribute عنوان IPv6 صحيح.',
    'json' => 'يجب أن يكون حقل :attribute نص JSON صالح.',
    'lowercase' => 'حقل :attribute يجب ان يتكون من حروف صغيرة.',
    'lt' => [
        'array' => 'الـ :attribute يجب ان يحتوي علي اقل من :value عناصر/عنصر.',
        'file' => 'الـ :attribute يجب ان يكون اقل من :value كيلو بايت.',
        'numeric' => 'الـ :attribute يجب ان يكون اقل من :value.',
        'string' => 'الـ :attribute يجب ان يكون اقل من :value حروفٍ/حرفًا.',
    ],
    'lte' => [
        'array' => 'الـ :attribute يجب ان يحتوي علي اكثر من :value عناصر/عنصر.',
        'file' => 'الـ :attribute يجب ان يكون اقل من او يساوي :value كيلوبايت.',
        'numeric' => 'الـ :attribute يجب ان يكون اقل من او يساوي :value.',
        'string' => 'الـ :attribute يجب ان يكون اقل من او يساوي :value حروفٍ/حرفًا.',
    ],
    'mac_address' => 'يجب أن يكون حقل :attribute عنوان MAC صحيح.',
    'max' => [
        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',
        'file' => 'حجم الملف :attribute لا يجب ان يتجاوز :max كيلوبايت.',
        'numeric' => 'لا يجب ان تكون قيمة حقل :attribute اكبر من :max.',
        'string' => 'لا يجب ان يكون طول حقل :attribute اكبر من :max حروفٍ/حرفًا.',
    ],
    'max_digits' => 'حقل :attribute يجب ألا يحتوي أكثر من :max أرقام.',
    'mimes' => 'حقل :attribute يجب ان يكون ملف من نوع: :values.',
    'mimetypes' => 'حقل :attribute يجب ان يكون ملف من نوع: :values.',
    'min' => [
        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر.',
        'file' => 'يجب أن يكون حجم الملف :attribute على الأقل :min كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة حقل :attribute مساوية أو أكبر لـ :min.',
        'string' => 'يجب أن يكون طول نص :attribute على الأقل :min حروفٍ/حرفًا.',
    ],
    'min_digits' => 'حقل :attribute يجب أن يحتوي :min أرقام على الأقل.',
    'missing' => 'حقل :attribute يجب تركه.',
    'missing_if' => 'حقل :attribute يجب تركه عندما تكون قيمة :other تساوي :value.',
    'missing_unless' => 'حقل :attribute يجب تركه الا عندما تكون قيمة :other تساوي :value.',
    'missing_with' => 'حقل :attribute يجب تركه عند وجود القيمة :values.',
    'missing_with_all' => 'حقل :attribute يجب تركه عند وجود القيم :values.',
    'multiple_of' => 'حقل :attribute يجب أن يكون من مضاعفات :value.',
    'not_in' => 'حقل المحدد :attribute غير صالح.',
    'not_regex' => 'صيغة حقل :attribute غير صالحة.',
    'numeric' => 'حقل :attribute يجب ان يكون رقم.',
    'password' => [
        'letters' => 'يجب ان يشمل حقل :attribute على حرف واحد على الاقل.',
        'mixed' => 'يجب ان يشمل حقل :attribute على حرف واحد بصيغة كبيرة على الاقل وحرف اخر بصيغة صغيرة.',
        'numbers' => 'يجب ان يشمل حقل :attribute على رقم واحد على الاقل.',
        'symbols' => 'يجب ان يشمل حقل :attribute على رمز واحد على الاقل.',
        'uncompromised' => 'حقل :attribute تبدو غير آمنة. الرجاء اختيار قيمة اخرى.',
    ],
    'present' => 'يجب تقديم حقل :attribute.',
    'prohibited' => 'حقل :attribute محظور.',
    'prohibited_if' => 'حقل :attribute محظور في حال ما إذا كان :other يساوي :value.',
    'prohibited_unless' => 'حقل :attribute محظور الا عندما تكون قيمة :other في :values.',
    'prohibits' => 'حقل :attribute يحظر :other من اي يكون موجود.',
    'regex' => 'صيغة حقل :attribute غير صالحة.',
    'required' => 'حقل :attribute مطلوب.',
    'required_array_keys' => 'حقل :attribute يجب ان يحتوي علي مدخلات للقيم التالية: :values.',
    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',
    'required_if_accepted' => 'حقل :attribute مطلوب عندما يكون :other مقبول.',
    'required_unless' => 'حقل :attribute مطلوب في حال ما لم تكن قيمة :other في :values.',
    'required_with' => 'حقل :attribute مطلوب إذا توفّر :values.',
    'required_with_all' => 'حقل :attribute مطلو إذا توفّر :values.',
    'required_without' => 'حقل :attribute مطلوب إذا لم يتوفّر :values.',
    'required_without_all' => 'حقل :attribute مطلوب إذا لم يتوفّر :values.',
    'same' => 'يجب أن يتطابق حقل :attribute مع :other.',
    'size' => [
        'array' => 'يجب أن يحتوي حقل :attribute على :size عنصرٍ/عناصر بالظبط.',
        'file' => 'يجب أن يكون حجم الملف :attribute :size كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة حقل :attribute مساوية لـ :size.',
        'string' => 'يجب أن يحتوي نص :attribute على :size حروفٍ/حرفًا بالظبط.',
    ],
    'starts_with' => 'حقل :attribute يجب ان يبدأ بأحد القيم التالية: :values.',
    'string' => 'يجب أن يكون حقل :attribute نصآ.',
    'timezone' => 'يجب أن يكون حقل :attribute نطاقًا زمنيًا صحيحًا.',
    'unique' => 'قيمة حقل :attribute مستخدمة بالفعل.',
    'uploaded' => 'فشل في تحميل الـ :attribute.',
    'uppercase' => 'حقل :attribute يجب ان يكون باحرف كبيرة.',
    'url' => 'حقل :attribute يجب ان يكون عنوان URL صالح.',
    'ulid' => 'حقل :attribute يجب ان يكون ULID صالح.',
    'uuid' => 'حقل :attribute يجب ان يكون UUID صالح.',

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

    'attributes' => [
        'name'                  => 'الاسم',
        'username'              => 'اسم المُستخدم',
        'email'                 => 'البريد الالكتروني',
        'first_name'            => 'الاسم',
        'last_name'             => 'اسم العائلة',
        'password'              => 'كلمة المرور',
        'password_confirmation' => 'تأكيد كلمة المرور',
        'city'                  => 'المدينة',
        'country'               => 'الدولة',
        'address'               => 'العنوان',
        'phone'                 => 'الهاتف',
        'mobile'                => 'الجوال',
        'age'                   => 'العمر',
        'sex'                   => 'الجنس',
        'gender'                => 'النوع',
        'day'                   => 'اليوم',
        'month'                 => 'الشهر',
        'year'                  => 'السنة',
        'hour'                  => 'ساعة',
        'minute'                => 'دقيقة',
        'second'                => 'ثانية',
        'content'               => 'المُحتوى',
        'description'           => 'الوصف',
        'excerpt'               => 'المُلخص',
        'date'                  => 'التاريخ',
        'time'                  => 'الوقت',
        'available'             => 'مُتاح',
        'size'                  => 'الحجم',
        'price'                 => 'السعر',
        'desc'                  => 'نبذه',
        'title'                 => 'العنوان',
        'q'                     => 'البحث',
    ],

];
