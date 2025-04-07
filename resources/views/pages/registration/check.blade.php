@extends("layouts.default")
@section("title","cek registrasi")

@section("main")

    @if (session('error'))
        <div class="bg-red-100 text-red-800 p-2 rounded mb-2">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{route("registration.check.result")}}" method="get">
        @csrf
        <label for="nisn">Nisn</label>
        <input type="text" id="nisn" name="nisn">

        <button type="submit">kirim</button>
    </form>
@endsection
