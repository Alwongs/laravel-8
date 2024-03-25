@php
   $months = [1 => 'january', 2 => 'fabruary', 3 => 'march', 4 => 'april', 5 => 'may', 6 => 'june', 7 => 'july', 8 => 'august', 9 => 'september', 10 => 'october', 11 => 'november', 12 => 'december'];
@endphp

<select name="form_data[date][day]" type="text">
    @for ($i = 1; $i < 32; $i++)
        @isset($event)
            @if (date('d', $event->timestamp) == $i)
                <option value="{{ $i }}" selected>{{ $i }}</option>
            @else
                <option value="{{ $i }}">{{ $i }}</option>
            @endif
        @else
            @if (date('d') == $i)
                <option value="{{ $i }}" selected>{{ $i }}</option>
            @else
                <option value="{{ $i }}">{{ $i }}</option>               
            @endif
        @endisset
    @endfor
</select>

<select name="form_data[date][month]" type="text">
    @foreach($months as $key => $value)
        @if (isset($event) && date('m', $event->timestamp) == $key)
            <option value="{{ $key }}" selected>{{ $value }}</option>
        @else
            <option value="{{ $key }}">{{ $value }}</option>
        @endif
    @endforeach
</select>   

<select name="form_data[date][year]" type="text">
    @for ($i = 2024; $i < 2034; $i++)
        @if (isset($event) && date('Y', $event->timestamp) == $i)
            <option value="{{ $i }}" selected>{{ $i }}</option>
        @else
            <option value="{{ $i }}">{{ $i }}</option>
        @endif
    @endfor
</select>  