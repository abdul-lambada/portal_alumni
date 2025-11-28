@extends('layouts.app')

@section('title', 'Portal Alumni SMK/SMA/MA')

@section('content')
  @include('sections.hero-section')
  @include('sections.profil-section')
  @include('sections.statistik-section')
  @include('sections.program-section')
  @include('sections.prestasi-section')
  @include('sections.alumni-stories-section')
  @include('sections.highlight-section')
  @include('sections.agenda-section')
  @include('sections.layanan-section')
  @include('sections.register-cta-section')
  @include('sections.faq-section')
  @include('sections.kontak-section')
@endsection
