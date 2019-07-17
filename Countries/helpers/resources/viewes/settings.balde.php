    
    {{-- for setting a country value --}}
    <select name="country" id="country">
        @foreach (get_country() as $iso_code => $name)
        <option value="{{ $iso_code }}" {{ old('country', auth()->user()->country) == $iso_code ? 'selected="selected"' : '' }}>{{ $name }}</option>
        @endforeach
    </select>
    
    
    {{-- for getting countr name in profile for examole: get_country('sa')  --}}
     
    Country: {{ get_country(auth()->user()->country) }}
