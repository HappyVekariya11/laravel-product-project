
@component('mail::message')
Hello {{auth()->user()->name}},

Your {{$post->title}} post has been successfully created.

Thanks,<br>
{{ config('app.name') }}
@endcomponent