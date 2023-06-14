<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- @vite('resources/css/app.css') --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="w-full h-[150vh] flex items-center justify-center">
        <form action="{{ url('update/list') }}" method="post"
            class="w-[400px] bg-slate-200 shadow-md shadow-slate-400 px-5 rounded-md py-5">
            <x-header>Edit list</x-header>
            @if (Session::has('success'))
                <div class="alert alert-success bg-green-400 py-1 px-1 rounded-md" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            @csrf
            <x-text-input type="hidden" id="textname" name="id" place="Input User name..." value="{{$data->id}}" />
            <div class="flex flex-col">
                <x-label fr="textname">Name</x-label>
                <x-text-input type="text" id="textname" name="name" place="Input User name..." value="{{$data->name}}" />
                @error('name')
                <div class="alert alert-success bg-red-400 py-1 px-1 rounded-md" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="flex flex-col">
                <x-label fr="textname">Email</x-label>
                <x-text-input type="text" id="textname" name="email" place="Email..." value="{{$data->email}}"/>
                @error('email')
                <div class="alert alert-success bg-red-400 py-1 px-1 rounded-md" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="flex flex-col">
                <x-label fr="textname">Password</x-label>
                <x-text-input type="password" id="textname" name="pass" place="password..." value="{{$data->password}}"/>
                @error('pass')
                <div class="alert alert-success bg-red-400 py-1 px-1 rounded-md" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="flex flex-col">
                <x-label fr="textname">Position</x-label>
                <x-text-input type="text" id="textname" name="position" place="position..." value="{{$data->position}}"/>
                @error('position')
                <div class="alert alert-success bg-red-400 py-1 px-1 rounded-md" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="flex flex-col">
                <x-label fr="textname">Salary</x-label>
                <x-text-input type="number" id="textname" name="salary" place="salary..." value="{{$data->salary}}"/>
                @error('salary')
                <div class="alert alert-success bg-red-400 py-1 px-1 rounded-md" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="flex items-center">
                <div class="mr-2">
                    <x-btn-back />

                </div>
                <div class="mt-4">
                    <a href="{{ url('list') }}" class="bg-red-500 rounded-md px-5 py-2 text-xl text-white">back</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
