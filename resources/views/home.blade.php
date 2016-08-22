@extends('layouts.app', ['bodyClass' => 'find-us'])

@section('content')

@include('partials.edit-profile')

@endsection

@section('footer')
<script type="text/javascript" src="<?= asset('js/partials/edit-profile.js') ?>"></script>
@endsection
