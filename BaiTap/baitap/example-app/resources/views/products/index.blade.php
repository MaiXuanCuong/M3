@extends('admin.layouts.master')
@section('content')
{{-- {{ $user_name }}

{{ $name ?? 'Default' }}
<?php
   // echo isset($name) ? $name : 'Default';
?>



    @foreach( $items as $item )
       {{ $item['username'] }}<br>
    @endforeach --}}
    {{ $order->id }}
    {{-- {{ $order->name }}
    {{ $order->price }}
    {{ $order->description }} --}}

@endsection


