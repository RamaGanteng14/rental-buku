<?php

namespace App\Models;

use App\Models\Book;
use App\Models\User;
use App\Models\RentLogs;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class RentLogsDetail extends Model
{
    use HasFactory;

    protected $table = 'rent_logs_detail';
    protected $fillable = [
        'book_id','rent_id'
    ];

    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class, 'book_id', 'id')
             ->withTrashed(); //withtrashed digunakan spy data yg telah terhapus dapat tampil
    }
  
    public function rent(): BelongsTo
    {
        return $this->belongsTo(RentLogs::class, 'rent_id', 'id');
        
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }


 
}