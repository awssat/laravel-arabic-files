   {{-- just an example of how to show timzeones --}}
   
   <select name="timezone" id="timezone">
        @foreach (timezone_identifiers_list() as $timezone)
        <option value="{{ $timezone }}" {{ old('timezone', auth()->user()->timezone) == $timezone ? 'selected="selected"' : '' }}>@lang(str_replace('_', ' ', $timezone)) ({{  now($timezone)->format('P') }})</option>
        @endforeach
    </select>
