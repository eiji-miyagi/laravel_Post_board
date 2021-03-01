
@extends('layouts.layouts')

@section('title','Simple Board')

@section('content')
    <form methot="POST" action="/posts">
        {{ csr_field() }}
        <input type="text" name="/posts">
        <input type="text" name="content">
        <input type="submit">
    </form>
@endsection