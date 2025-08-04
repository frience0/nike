<x-mail::message>
<h1 style="color: #000000; font-family: 'Helvetica Neue', sans-serif; text-align: center;">Nike Verification</h1>
@if (! empty($greeting))
# {{ $greeting }}
@else
""
@endif

@foreach ($introLines as $line)
{{ $line }}
@endforeach

@isset($actionText)
<?php
    $color = match ($level) {
        'success', 'error' => $level,
        default => 'primary',
    };
?>
<x-mail::button :url="$actionUrl" :color="$color" style="background-color: #000000; border-color: #000000;">
{{ $actionText }}
</x-mail::button>
@endisset

@foreach ($outroLines as $line)
{{ $line }}
@endforeach

@if (! empty($salutation))
{{ $salutation }}
@else
Regards,<br>
Nike Team
@endif

@isset($actionText)
<x-slot:subcopy>
@lang(
    "If you're having trouble clicking the \":actionText\" button, copy and paste the URL below\n".
    'into your web browser:',
    [
        'actionText' => $actionText,
    ]
) <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
</x-slot:subcopy>
@endisset
</x-mail::message>
