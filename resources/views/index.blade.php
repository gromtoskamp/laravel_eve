@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar-top')
    <div class="portrait"><img src="{{ URL::asset('images/characterImage.jpg') }}"></div>
    <div class="name-wrapper" onclick="ajax('api/allcharacters')">
        <div class="name">
            <?php echo($data['name']); ?>
        </div>
    </div>
@stop

@section('sidebar-middle')
    <div class="sidebar-link" onclick="ajax('api/character', {test: 1, bla: 2})">link</div>
    <div class="sidebar-link">link</div>
    <div class="sidebar-link">link</div>
    <div class="sidebar-link">link</div>
    <div class="sidebar-link">link</div>
    <div class="sidebar-link">link</div>
    <div class="sidebar-link">link</div>
    <div class="sidebar-link">link</div>
    <div class="sidebar-link">link</div>
    <div class="sidebar-link">link</div>
    <div class="sidebar-link">link</div>
    <div class="sidebar-link">link</div>
    <div class="sidebar-link">link</div>
    <div class="sidebar-link">link</div>
    <div class="sidebar-link">link</div>
    <div class="sidebar-link">link</div>
    <div class="sidebar-link">link</div>
    <div class="sidebar-link">link</div>
    <div class="sidebar-link">link</div>
@stop


@section('content-main')
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
    <div class="content-item">item</div>
@stop