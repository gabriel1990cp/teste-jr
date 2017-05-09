<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendedorCad extends Model
{
    protected $table = 'vendedores_cad';

    protected $fillable = [
        'vendedor',
        'valor_comissao',
    ];

}
