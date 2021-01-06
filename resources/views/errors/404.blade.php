@extends('errors::layout')

@section('title','Erreur 500')

@section('message','erreur interne est survenue');

<h2>{{ $exception->getMessage() }}</h2>
