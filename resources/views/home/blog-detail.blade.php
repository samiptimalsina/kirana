<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.partials.head')
    <style>
        /* Custom CSS for login form */
        .login-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #f4f4f4;
        }

        .login-form {
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group input[type="password"],
        .form-group select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-group button:hover {
            background-color: #45a049;
        }
    </style>
</head>

    @if(session()->has('msg'))
					<p class="alert alert-info">{{ session()->get('msg') }}</p>
					@endif
    @include('home.partials.preloader')
    @include('home.partials.header', ['navdata' => $navdata])
    @include('home.partials.page-bannner', ['title' => "Blog Details"])


    <main class="container mx-auto py-6">
        <div class=" mx-auto bg-white shadow-md rounded-lg p-6">
            <p class="text-gray-600 mb-4">Published on <span class="font-semibold">June 1, 2024</span> by <span class="font-semibold">John Doe</span></p>
        <img src="{{ asset('assets/images/' . $blog->image) }}" alt="Blog Image" class="w-full h-auto rounded-lg mb-4">
                <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $blog->title }}</h2>
            <p class="text-gray-800 leading-relaxed mb-4">{{$blog->short_desc ?? ''}}</p>
            <p class="text-gray-800 leading-relaxed mb-4">{{$blog->content ?? ''}}</p>
        </div>
    </main>


        @include('home.partials.table', ['tableBg' => 'assets/images/table-bg.jpg'])
    @include('home.partials.footer')

    @include('home.partials.script')
</body>

</html>
