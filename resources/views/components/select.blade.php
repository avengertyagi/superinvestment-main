@props(['disabled' => false])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-gray-200 rounded shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!} >
    <option value="{{$name}}">{{$name}}</option>
    <option value="Salary">Salary</option>
    <option value="Owner">Owner</option>
</select>