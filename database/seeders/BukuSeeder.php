<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Buku::create([
            'judul' => 'bintang',
            'slug' => Str::slug('bintang'),
            'sampul' => 'buku/Sampul_novel_Bintang.jpeg',
            'penulis' => 'tere liye',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 2,
            'stok' => 10
        ]);

        Buku::create([
            'judul' => 'matahari',
            'slug' => Str::slug('matahari'),
            'sampul' => 'buku/Sampul_novel_Matahari.jpeg',
            'penulis' => 'tere liye',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 3,
            'stok' => 10
        ]);

        Buku::create([
            'judul' => 'tentang kamu',
            'slug' => Str::slug('tentang-kamu'),
            'sampul' => 'buku/Tentang_Kamu_sampul.jpeg',
            'penulis' => 'tere liye',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 4,
            'stok' => 10
        ]);

        Buku::create([
            'judul' => 'gusdur',
            'slug' => Str::slug('gusdur'),
            'sampul' => 'buku/gusdur.jpg',
            'penulis' => 'greg borton',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 7,
            'stok' => 10
        ]);

        Buku::create([
            'judul' => 'habibie',
            'slug' => Str::slug('habibie'),
            'sampul' => 'buku/habibie.jpg',
            'penulis' => 'raden toto sugiharto',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 8,
            'stok' => 10
        ]);
        Buku::create([
            'judul' => 'Laskar Pelangi',
            'slug' => Str::slug('Laskar Pelangi'),
            'sampul' => 'buku/Laskar_Pelangi.jpg',
            'penulis' => 'Andrea Hirata',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 8,
            'stok' => 13
        ]);
    }
}
