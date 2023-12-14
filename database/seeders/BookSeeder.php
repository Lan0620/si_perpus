<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::insert([
            [
                'title' => 'Judul Buku 1',
                'author' => 'Penulis 1',
                'year' => 2023,
                'publisher' => 'Penerbit 1',
                'city' => 'Kota 1',
                'cover' => 'cover.jpg',
                'quantity' => 0,
                'bookshelf_id' => 1,
                'created_at' => now(),
            ],
            [
                'title' => 'Judul Buku 2',
                'author' => 'Penulis 2',
                'year' => 2024,
                'publisher' => 'Penerbit 2',
                'city' => 'Kota 2',
                'cover' => 'cover.jpg',
                'quantity' => 0,
                'bookshelf_id' => 2,
                'created_at' => now(),
            ],
           
        ]);
    }
}