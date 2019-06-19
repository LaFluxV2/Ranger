@extends('Ranger::default.home')
@section('content-main')

@includeIf('Basetheme::position.loadview',['position'=> 'home-banner'])

@includeIf('Basetheme::position.loadview',['position'=> 'service-section'])

@includeIf('Basetheme::position.loadview',['position'=> 'appscreen-section'])

@includeIf('Basetheme::position.loadview',['position'=> 'webappmobile-section'])

@includeIf('Basetheme::position.loadview',['position'=> 'feature-section'])

@includeIf('Basetheme::position.loadview',['position'=> 'testimonials'])

@includeIf('Basetheme::position.loadview',['position'=> 'pricing-section'])

@includeIf('Basetheme::position.loadview',['position'=> 'getting-started'])

@stop
