<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'category_id', 'location','PlaceInfo','cover','user_id', 'is_approved'
    ];


    public function categoryPlace()
    {
        /** 
        method ini digunakan untuk membuat relasi belongsTo atau 1 to 1
        ke tabel kategori. method ini digunakan 
        */
        return $this->belongsTo(Category::class, 'category_id');
    }
    
    public function images()
    {
        /** 
        method ini digunakan untuk mendapatkan list gambar pada tabel ImageSpot
        sesuai dengan id spotnya 
        */
        return $this->hasMany(ImagePlace::class);
    }
    
    public function getImage()
    {
        /** 
        method berfungsi untuk menampilkan data gambar/cover utama dari tabel spot
        jika tidak ada gambar yang diupload maka kita akan menggantinya dengan image placeholder
        */
        if (substr($this->cover, 0, 5) == "https") {
            return $this->cover;
        }

        if ($this->cover) {
            return asset('coverplace/' .$this->cover);
        }

        return 'https://via.placeholder.com/150x200.png?text=No+Cover';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
