<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.partials.head')
    <style>
        /* Resetting margin and padding */
        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }

        /* Custom CSS for blog details page */
        .blog-details-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #f4f4f4;
            padding: 0; /* Removed padding */
            margin: 0; /* Removed margin */
            width: 100%; /* Full width */
            max-width: 100vw; /* Ensure it doesn't exceed the viewport width */
        }

        .blog-details-card {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
            padding: 30px;
            margin: 0 auto; /* Centering the card */
        }

        .blog-details-card img {
            width: 100%;
            height: auto;
            border-radius: 12px;
        }

        .blog-details-title {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
            margin: 20px 0;
        }

        .blog-details-meta {
            color: #888;
            font-size: 1rem;
            margin-bottom: 20px;
        }

        .blog-details-meta span {
            margin-right: 15px;
        }

        .blog-details-content {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #444;
            margin-top: 20px;
        }

        .blog-details-footer {
            margin-top: 40px;
            padding: 20px;
            background-color: #f8f8f8;
            border-radius: 8px;
            text-align: center;
        }

        .back-to-home {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4caf50;
            color: white;
            font-size: 1rem;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .back-to-home:hover {
            background-color: #45a049;
        }

        @media (max-width: 768px) {
            .blog-details-card {
                padding: 20px;
            }

            .blog-details-title {
                font-size: 1.6rem;
            }

            .blog-details-meta {
                font-size: 0.9rem;
            }

            .blog-details-content {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    @if (session()->has('msg'))
        <p class="alert alert-info">{{ session()->get('msg') }}</p>
    @endif
    @include('home.partials.preloader')
    @include('home.partials.header', ['navdata' => $navdata])
    @include('home.partials.page-bannner', ['title' => 'Blog Details'])

    <main class="blog-details-container">
        <div class="blog-details-card">
            <img src="{{ asset('assets/images/blog/' . $blog->image) }}" alt="{{ $blog->title }}" class="blog-image">

            <h2 class="blog-details-title">{{ $blog->title }}</h2>

            <div class="blog-details-meta">
                <span>Published on: {{ $blog->created_at->format('M d, Y') }}</span>
                {{-- <span>By: {{ $blog->author ?? 'Unknown Author' }}</span> --}}
            </div>

            <div class="blog-details-content">
                {!! $blog->content !!}
            </div>
        </div>
    </main>

    @include('home.partials.footer')
    @include('home.partials.script')
</body>

</html>
