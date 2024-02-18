@extends('layouts.main')

@section('container')
<div>
    <h1 class="flex items-center justify-center p-4 font-semibold text-2xl">now you are in Dashboard page</h1>
</div>
<script>
    setTimeout(function() {
        document.getElementById("myText2").classList.add("opacity-100");
    }, 150);
</script>
@endsection