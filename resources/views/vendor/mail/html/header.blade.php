@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ asset('images/favicon.png') }}" alt="Ecatege Logo" style="height: 60px;">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
