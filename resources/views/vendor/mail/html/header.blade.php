<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Superinvest')
<img src="{{ $url }}/image/superinvest.png" class="logo" alt="Superinvest Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
