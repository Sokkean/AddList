<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add list</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
    <div class="container mx-40 pt-10">
        <div class="w-full">
            {{-- <h1 class="text-2xl text-black">List of People</h1> --}}
            <x-header>List of Everyone</x-header>
            <div class="mb-5 w-full max-w-[80%] text-end">
                <x-button-add class="" href="{{ url('add/list') }}">Add list</x-button-add>
            </div>
            <div class="py-2">
                @if (Session::has('success'))
                    <div class="alert alert-success bg-green-400 py-1 px-1 rounded-md w-full max-w-[80%] my-2"
                        role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
            </div>
            <table class="table w-full max-w-[80%] border border-collapse">
                <tr class="bg-gray-400 border border-collapse">
                    <x-thead>#</x-thead>
                    <x-thead>Name</x-thead>
                    <x-thead>Email</x-thead>
                    <x-thead>Password</x-thead>
                    <x-thead>Position</x-thead>
                    <x-thead>Salary</x-thead>
                    <x-thead class="cursor-pointer">Action</x-thead>
                </tr>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($data as $stu)
                        <tr class="border border-collapse">
                            <x-tbody class="">{{ $i++ }}</x-tbody>
                            <x-tbody class="">{{ $stu->name }}</x-tbody>
                            <x-tbody class="">{{ $stu->email }}</x-tbody>
                            <x-tbody class="">{{ $stu->password }}</x-tbody>
                            <x-tbody class="">{{ $stu->position }}</x-tbody>
                            <x-tbody class="">{{ $stu->salary }}</x-tbody>
                            <x-tbody class="">
                                <x-button-add class="mt-0" href="{{ url('edit/list/' . $stu->id) }}">Edit
                                </x-button-add>
                                <x-button-add class="bg-red-600 hover:bg-red-700 mt-0"
                                    href="{{ url('delete/list/' . $stu->id) }}">Delete</x-button-add>
                            </x-tbody>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
