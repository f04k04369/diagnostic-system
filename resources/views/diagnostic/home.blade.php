@extends('layouts.app')

@section('title','ヘッダー')

@section('content')
    <p>コンテンツ</p>
    <ul>
        <li>aaa        </li>
        <li>vvv</li>
    </ul>
    
@endsection

@section('side')
    @parent
    <ul>
        <li>ccc</li>
        <li>bbb</li>
    </ul>
    
@endsection