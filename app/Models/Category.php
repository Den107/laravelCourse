<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    public function getCategories()
    {
        return DB::select("SELECT id, title, description FROM {$this->table}");
    }

    public function getCategoryById(int $id)
    {
        return DB::select("SELECT id, title, description FROM {$this->table} WHERE id = :id", ['id' => $id]);
    }

    protected $fillable = ['title', 'description'];
}
