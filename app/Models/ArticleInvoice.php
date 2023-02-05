<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleInvoice extends Model
{
    protected $table = ('article_invoices');
    protected $primaryKey = ('id');

    protected $fillable = [
        'article_id',
        'invoice_id',
        'amount',
        'subtotal'
    ];

    use HasFactory;

}
