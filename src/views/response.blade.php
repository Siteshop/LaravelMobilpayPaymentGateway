{{ '<?xml version="1.0" encoding="utf-8"?>' }}

@if($errorCode == 0)
<crc>{{ $errorMessage }}</crc>
@else
<crc error_type="{{ $errorType }}" error_code="{{ $errorCode }}">{{ $errorMessage }}</crc>
@endif