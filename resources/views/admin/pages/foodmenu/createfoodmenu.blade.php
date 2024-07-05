<x-admin.index :user="$user" :isAdmin="$isAdmin">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Food-Menu Form</h4>
                        <p class="card-description">Add food menu info</p>
                        <form action="{{ route('foodmenu.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="productname">Name</label>
                                <input type="text" class="form-control" id="productname" name="productname"
                                    placeholder="Input product name" required />
                            </div>

                            <div class="form-group">
                                <label for="productprice">Price</label>
                                <input type="number" class="form-control" id="productprice" name="productprice"
                                    placeholder="Input product price up to 2 decimal places"
                                    pattern="[0-9]+([\.,][0-9]+)?" step="0.01" required />
                            </div>

                            <div class="form-group">
                                <label>Image upload</label>
                                <div class="input-group col-xs-12">
                                    <input type="file" class="form-control file-upload-info"
                                        placeholder="Upload product images" id="productimage" name="productimages[]"
                                        multiple required />
                                </div>
                            </div>
                            <div class="form-group">
                                <div id="image-preview" class="d-flex flex-wrap">
                                    <!-- Image previews will be added here -->
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="productdescription">Description</label>
                                <textarea class="form-control" id="productdescription" name="productdescription" rows="4" required
                                    placeholder="Input product description"></textarea>
                            </div>

                            @if ($isAdmin === false)
                                <button type="submit" class="btn btn-primary mr-2">Add</button>
                            @else
                                <button onclick="alert('Only admin can add food menu')" type="button"
                                    class="btn btn-primary mr-2">Add</button>
                            @endif
                            <a href="{{ route('foodmenu.index') }}" class="btn btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("productimage").addEventListener('change', function(event) {
            const imagePreview = document.getElementById("image-preview");
            imagePreview.innerHTML = ''; // Clear existing previews

            if (event.target.files) {
                Array.from(event.target.files).forEach(file => {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const img = document.createElement("img");
                        img.setAttribute("src", e.target.result);
                        img.classList.add("h-auto", "shadow-sm", "w-1/4", "m-2"); // Styling classes
                        imagePreview.appendChild(img);
                    }
                    reader.readAsDataURL(file);
                });
            }
        });
    </script>
</x-admin.index>
