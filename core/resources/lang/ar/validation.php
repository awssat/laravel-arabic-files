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
    'indisposable' => 'لا يُسمح بعناوين البريد الإلكتروني التي تستخدم لمرة واحدة',
    'accepted' => 'يجب قبول الحقل :attribute',
    'accepted_if' => 'حقل :attribute يجب قبوله عندما يكون حقل :other بقيمة :value.',
    'active_url' => 'حقل :attribute يجب ان يكون عنوان URL صحيح.',
    'after' => 'حقل :attribute يجب ان يكون بعد تاريخ :date.',
    'after_or_equal' => 'حقل :attribute يجب ان يكون تاريخ بعد او مطابق لتاريخ :date.',
    'alpha' => 'حقل :attribute يجب ان يحتوي على احرف فقط.',
    'alpha_dash' => 'حقل :attribute يجب ان يحتوي فقط على احرف وارقام وشرطات وشرطات سفلية.',
    'alpha_num' => 'حقل :attribute يجب ان يحتوي على حروف وارقام فقط.',
    'array' => 'يجب أن يكون الحقل :attribute ًمصفوفة',
    'ascii' => 'حقل :attribute يجب أن يحتوي فقط على أحرف أبجدية رقمية ورموز أحادية البايت.',
    'before' => 'حقل :attribute يجب ان يكون تاريخ قبل :date.',
    'before_or_equal' => 'حقل :attribute يجب ان يكون تاريخ قبل او مطابق لتاريخ :date.',
    'between' => [
        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر بين :min و :max',
        'file' => 'يجب أن يكون حجم الملف :attribute بين :min و :max كيلوبايت.',
        'numeric' => 'حقل :attribute يجب ان تكون قيمته بين :min و :max.',
        'string' => 'يجب أن يحتوي حقل :attribute علي عدد احرف بين :min و :max.'
    ],
    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما صحيحة أو خاطئة.',
    'can' => 'يحتوي حقل :attribute على قيمة غير مسموح بها.',
    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',
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
    'distinct' => 'يحتوي حقل :attribute علي قيمة مُكرّرة.',
    'doesnt_end_with' => 'الحقل :attribute يجب ألا ينتهي بواحدة من القيم التالية: :values.',
    'doesnt_start_with' => 'الحقل :attribute يجب ألا يبدأ بواحدة من القيم التالية: :values.',
    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح.',
    'ends_with' => 'الـ :attribute يجب ان ينتهي بأحد القيم التالية :value.',
    'enum' => 'حقل المحدد :attribute غير صالح.',
    'exists' => 'حقل المحدد :attribute غير صالح.',
    'file' => 'الـ :attribute يجب ان يكون ملف.',
    'filled' => 'حقل :attribute يجب ان يحتوي علي قيمة.',
    'gt' => [
        'array' => 'الـ :attribute يجب ان يحتوي علي اكثر من :value عناصر/عنصر.',
        'file' => 'الـ :attribute يجب ان يكون اكبر من :value كيلو بايت.',
        'numeric' => 'الـ :attribute يجب ان يكون اكبر من :value.',
        'string' => 'الـ :attribute يجب ان يكون اكبر من :value حروفٍ/حرفًا.',
    ],
    'gte' => [
        'array' => 'الـ :attribute يجب ان يحتوي علي :value عناصر/عنصر او اكثر.',
        'file' => 'الـ :attribute يجب ان يكون اكبر من او يساوي :value كيلو بايت.',
        'numeric' => 'الـ :attribute يجب ان يكون اكبر من او يساوي :value.',
        'string' => 'الـ :attribute يجب ان يكون اكبر من او يساوي :value حروفٍ/حرفًا.',
    ],
    'image' => 'يجب أن يكون الحقل :attribute صورةً.',
    'in' => 'حقل المحدد :attribute غير صالح.',
    'in_array' => 'الحقل :attribute غير موجود في :other.',
    'integer' => 'يجب أن يكون الحقل :attribute عددًا صحيحًا',
    'ip' => 'يجب أن يكون حقل :attribute عنوان IP صحيح.',
    'ipv4' => 'يجب أن يكون حقل :attribute عنوان IPv4 صحيح.',
    'ipv6' => 'يجب أن يكون حقل :attribute عنوان IPv6 صحيح.',
    'json' => 'يجب أن يكون حقل :attribute نص JSON صالح.',
    'lowercase' => 'الحقل :attribute يجب ان يكون حروف صغيرة',
    'lt' => [
        'array' => 'الـ :attribute يجب ان يحتوي علي اقل من :value عناصر/عنصر.',
        'file' => 'الـ :attribute يجب ان يكون اقل من :value كيلو بايت.',
        'numeric' => 'الـ :attribute يجب ان يكون اقل من :value.',
        'string' => 'الـ :attribute يجب ان يكون اقل من :value حروفٍ/حرفًا.',
    ],
    'lte' => [
        'array' => 'الـ :attribute يجب ان يحتوي علي اكثر من :value عناصر/عنصر.',
        'file' => 'الـ :attribute يجب ان يكون اقل من او يساوي :value كيلو بايت.',
        'numeric' => 'الـ :attribute يجب ان يكون اقل من او يساوي :value.',
        'string' => 'الـ :attribute يجب ان يكون اقل من او يساوي :value حروفٍ/حرفًا.',
    ],
    'mac_address' => 'يجب أن يكون حقل :attribute عنوان MAC صحيح.',
    'max' => [
        'array' => 'يجب أن لا يحتوي الحقل :attribute على أكثر من :max عناصر/عنصر.',
        'file' => 'حجم الملف :attribute لا يجب ان يتجاوز :max كيلوبايت.',
        'numeric' => 'لا يجب ان تكون قيمة حقل :attribute اكبر من :max.',
        'string' => 'لا يجب ان يكون طول حقل :attribute اكبر من :max حروفٍ/حرفًا.',
    ],
    'max_digits' => 'الحقل :attribute يجب ألا يحتوي أكثر من :max أرقام.',
    'mimes' => 'حقل :attribute يجب ان يكون ملف من نوع: :values.',
    'mimetypes' => 'حقل :attribute يجب ان يكون ملف من نوع: :values.',
    'min' => [
        'array' => 'يجب أن يحتوي الحقل :attribute على الأقل على :min عُنصرًا/عناصر',
        'file' => 'يجب أن يكون حجم الملف :attribute على الأقل :min كيلوبايت',
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute مساوية أو أكبر لـ :min.',
        'string' => 'يجب أن يكون طول نص :attribute على الأقل :min حروفٍ/حرفًا',
    ],
    'min_digits' => 'الحقل :attribute يجب أن يحتوي :min أرقام على الأقل.',
    'missing' => 'حقل :attribute يجب تركه.',
    'missing_if' => 'حقل :attribute يجب تركه عندما تكون قيمة :other تساوي :value.',
    'missing_unless' => 'حقل :attribute يجب تركه الا عندما تكون قيمة :other تساوي :value.',
    'missing_with' => 'حقل :attribute يجب تركه عند وجود القيمة :values.',
    'missing_with_all' => 'حقل :attribute يجب تركه عند وجود القيم :values.',
    'multiple_of' => 'الحقل :attribute يجب أن يكون من مضاعفات :value.',
    'not_in' => 'الحقل المحدد :attribute غير صالح',
    'not_regex' => 'صيغة حقل :attribute غير صالحة.',
    'numeric' => 'حقل :attribute يجب ان يكون رقم.',
    'password' => [
        'letters' => 'يجب ان يشمل حقل :attribute على حرف واحد على الاقل.',
        'mixed' => 'يجب ان يشمل حقل :attribute على حرف واحد بصيغة كبيرة على الاقل وحرف اخر بصيغة صغيرة.',
        'numbers' => 'يجب ان يشمل حقل :attribute على رقم واحد على الاقل.',
        'symbols' => 'يجب ان يشمل حقل :attribute على رمز واحد على الاقل.',
        'uncompromised' => 'حقل :attribute تبدو غير آمنة. الرجاء اختيار قيمة اخرى.',
    ],
    'present' => 'يجب تقديم الحقل :attribute',
    'prohibited' => 'الحقل :attribute محظور',
    'prohibited_if' => 'الحقل :attribute محظور في حال ما إذا كان :other يساوي :value.',
    'prohibited_unless' => 'الحقل :attribute محظور في حال ما لم يكون :other يساوي :value.',
    'prohibits' => 'الحقل :attribute يحظر :other من اي يكون موجود',
    'regex' => 'صيغة حقل :attribute غير صالحة.',
    'required' => 'الحقل :attribute مطلوب.',
    'required_array_keys' => 'الحقل :attribute يجب ان يحتوي علي مدخلات للقيم التالية :values.',
    'required_if' => 'الحقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',
    'required_if_accepted' => 'حقل :attribute مطلوب عندما يكون :other مقبول.',
    'required_unless' => 'الحقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',
    'required_with' => 'الحقل :attribute مطلوب إذا توفّر :values.',
    'required_with_all' => 'الحقل :attribute مطلوب إذا توفّر :values.',
    'required_without' => 'الحقل :attribute مطلوب إذا لم يتوفّر :values.',
    'required_without_all' => 'الحقل :attribute مطلوب إذا لم يتوفّر :values.',
    'same' => 'يجب أن يتطابق الحقل :attribute مع :other',
    'size' => [
        'array' => 'يجب أن يحتوي الحقل :attribute على :size عنصرٍ/عناصر بالظبط',
        'file' => 'يجب أن يكون حجم الملف :attribute :size كيلوبايت',
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute مساوية لـ :size',
        'string' => 'يجب أن يحتوي النص :attribute على :size حروفٍ/حرفًا بالظبط',
    ],
    'starts_with' => 'حقل :attribute يجب ان يبدأ بأحد القيم التالية: :values.',
    'string' => 'يجب أن يكون حقل :attribute نصآ.',
    'timezone' => 'يجب أن يكون حقل :attribute نطاقًا زمنيًا صحيحًا.',
    'unique' => 'قيمة الحقل :attribute مُستخدمة من قبل',
    'uploaded' => 'فشل في تحميل الـ :attribute.',
    'uppercase' => 'حقل :attribute يجب ان يكون باحرف كبيرة.',
    'url' => 'صيغة الرابط :attribute غير صحيحة',
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
        'confirm_password'      => 'تأكيد كلمة المرور',
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
        'link'                  => 'رابط',
        // 'slug'                  => ' ',
    ],

];
