<?php

namespace App\Models;

use App\Models\Book;
use App\Models\User;
use App\Models\RentLogs;
use App\Models\RentLogsDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class RentLogs extends Model
{
    use HasFactory;

    protected $table = 'rent_logs';

    protected $fillable = [
         'user_id','book_id','rent_date','return_date', 'total','actual_return_date',
    ];
    
    /**
     * Get the user that owns the RentLogs
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    /**
     * Get the book that owns the RentLogs
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class, 'book_id', 'id')
             ->withTrashed(); //withtrashed digunakan spy data yg telah terhapus dapat tampil
    }
    /**
     * The RentLogsDetail that belong to the RentLogs
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function RentLogsDetail(): BelongsToMany
    {
        return $this->belongsToMany(RentLogsDetail::class, 'rent_logs_detail', 'book_id', 'rent_id');
    }

    public function details()
    {
        return $this->hasMany(RentLogsDetail::class, 'rent_id', 'id');
    }
}