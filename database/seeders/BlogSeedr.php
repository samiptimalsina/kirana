<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Blog; // Import the Blog model

class BlogSeedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->truncate(); // Use the table name here

        $imagesPath = public_path('assets/images/blog');

        // Scan the directory for image files
        $files = glob($imagesPath . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE);

        // Regular expression to match filenames with any number inside parentheses
        $pattern = '/\(\d+\)/';

        // Insert each image into the blog table using the model
        foreach ($files as $file) {
            // Extract the file name and create the image path
            $fileName = basename($file);

            // Check if the file name contains any number inside parentheses
            if (preg_match($pattern, $fileName)) {
                continue; // Skip files that match the pattern
            }

            $imagePath = 'assets/images/blog/' . $fileName;

            // Create the blog entry
            Blog::create([
                'title' => pathinfo($fileName, PATHINFO_FILENAME), // Use the file name as the title
                'slug' => Str::slug(pathinfo($fileName, PATHINFO_FILENAME)), // Generate a slug from the title
                'content' => 'Image description or content here', // Customize or leave empty
                'image' => $imagePath,
            ]);
        }
    }
}
