@foreach ($owners AS $owner)
    <p>
        {{ $owner->fullName() }}
    </p>
    <p>
        {{ $owner->fullAddress() }}
    </p>
    <p>
        {{ $owner->formattedPhoneNumber() }}
    </p>
@endforeach