@php
   $months = [1 => 'january', 2 => 'fabruary', 3 => 'march', 4 => 'april', 5 => 'may', 6 => 'june', 7 => 'july', 8 => 'august', 9 => 'september', 10 => 'october', 11 => 'november', 12 => 'december'];
@endphp

<select name="form_data[day]" type="text" placeholder="type" required >
    @for ($i = 1; $i < 32; $i++)
        <option value="{{ $i }}">{{ $i }}</option>
    @endfor
</select>
<select name="form_data[month]" type="text" placeholder="type" required >
    @foreach($months as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
    @endforeach
</select>   
<select name="form_data[year]" type="text" placeholder="type" required >
    @for ($i = 2024; $i < 2034; $i++)
        <option value="{{ $i }}">{{ $i }}</option>
    @endfor
</select>  