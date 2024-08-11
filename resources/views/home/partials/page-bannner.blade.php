<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">

<section id="bannerSection" class="relative w-full overflow-hidden" style="height: 600px;">
    <img id="bannerImage" src="{{$banner_image->image_url}}" alt="Banner Image" class="w-full h-full object-cover">
    <div class="absolute inset-0 flex items-center justify-center text-center text-white bg-black bg-opacity-50">
        <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold">{{ $title ?? '' }}</h1>
    </div>
</section>

{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const imageUrl = @json($banner_image->image_url ?? '');
        if (imageUrl) {
            document.getElementById('bannerImage').src = imageUrl;
        }
    });
</script> --}}
