<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrubution extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'id_campagnes',
        'nom_du_porteur',
        'id_author',
        'photo',
        'name',
        'surname',
        'email',
        'numero',
        'montant',
        'payment',
        'states_payment'
    ];
    protected $table = "contrubutions";
}
