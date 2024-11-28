@props(['url'])
<tr>
<td class="header">
<a href="#" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ asset('img/favicon.png') }}" alt="Ecatege Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
