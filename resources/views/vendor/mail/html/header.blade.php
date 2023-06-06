<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://cdn.pixabay.com/photo/2013/07/12/14/07/basketball-147794_960_720.png" class="logo" alt="Sigora">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
