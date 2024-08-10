<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.partials.head')
</head>

<body>
    @include('home.partials.preloader')
    @include('home.partials.header', ['navdata' => $navdata])
    @include('home.partials.page-bannner', ['title' => 'Galleries'])



    <main class="container mx-auto py-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Blog cards here -->
            @foreach ($blogs as $blog)
            <div class="bg-white shadow-md rounded-lg p-4">
                <div class="mb-4">
                <img src="{{ $blog->image }}" alt="{{ $blog->title }}" class="w-full h-48 object-cover rounded-lg">
                </div>
                <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $blog->title }}</h2>
               {{-- <p class="text-gray-600 mb-4">{{ substr($blog->content, 0, 80) }}</p> --}}
                {{-- <a href="{{ route('blogs.detail', $blog->slug) }}" class="text-blue-500 hover:underline">Read more</a> --}}
            </div>
            @endforeach
        </div>
        {{ $blogs->links() }}

    </main>
    <!-- End Blog List Section -->

    @include('home.partials.table', ['tableBg' => $banner_image->image_url ?? ''])
    @include('home.partials.footer')
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Restore scroll position
    window.scrollTo(0, sessionStorage.getItem('scrollPosition') || 0);

    // Save scroll position before unloading
    window.addEventListener('beforeunload', function() {
      sessionStorage.setItem('scrollPosition', window.scrollY);
    });
  });
</script>
    @include('home.partials.script')
</body>

</html>
