@extends('layouts.main')

@section('container')
<div>
    <h1 id="myText2" class="flex items-center justify-center p-4 font-semibold text-2xl opacity-0 transition-opaycit duration-1000">now you are in Your Personal Blog page</h1>
</div>
<script>
    setTimeout(function() {
        document.getElementById("myText2").classList.add("opacity-100");
    }, 150);
</script>
@endsection