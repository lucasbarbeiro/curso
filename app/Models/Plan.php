<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = ['name', 'url', 'price', 'descricao'];

    //relacionamento de tabela 1 para muitos
    public function details()
    {
        return $this->hasMany(DetailPlan::class);
    }

    public function pesquisa($txt = null)
    {
        $results = $this->where('name', 'LIKE', "%$txt%")
            ->orWhere('descricao', 'LIKE', "%$txt%")
            ->paginate(1);

        return $results;
    }

    //use HasFactory;
}
