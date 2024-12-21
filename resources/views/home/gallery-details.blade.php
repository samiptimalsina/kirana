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
                @foreach ($gallery->images as $image)
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <div class="mb-4">
                            <img src="{{ asset($image) }}" alt="Image"
                                class="w-full h-48 object-cover rounded-lg cursor-pointer"
                                onclick="openModal('{{ asset($image) }}')">
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800 mb-2 hidden">{{ $gallery->gallery_name ?? '' }}
                        </h2>
                    </div>
                @endforeach
        </div>
    </main>

    <!-- Modal -->
    <div id="imageModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-75 hidden opacity-0 transition-opacity duration-300"
         onclick="closeModalOnBackground(event)">
        <div class="relative w-11/12 max-w-5xl max-h-[90vh] bg-white p-4 rounded-lg shadow-lg overflow-hidden">
            <img id="modalImage" src="" alt="Large Image" class="w-full h-full object-contain rounded-lg">
            <button onclick="closeModal()"
                class="absolute top-2 right-2 text-white bg-black bg-opacity-50 rounded-full p-2 hover:bg-opacity-75">
                ✕
            </button>
        </div>
    </div>

    @include('home.partials.table', ['tableBg' => $banner_image->image_url ?? ''])
    @include('home.partials.footer')

    @include('home.partials.script')

    <script>
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');

        function openModal(imageSrc) {
            modalImage.src = imageSrc;
            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.classList.remove('opacity-0');
            }, 10); // Allows the transition to take effect
        }

        function closeModal() {
            modal.classList.add('opacity-0');
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300); // Matches the duration of the transition
        }

        function closeModalOnBackground(event) {
            if (event.target === modal) {
                closeModal();
            }
        }
    </script>
</body>

</html>
