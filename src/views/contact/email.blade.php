@component('mail::message')
# Introduction

There is an email form {{$name}}
<br>
{{$message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
