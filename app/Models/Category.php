<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 * @OA\Property(property="name", type="string", format="string", description="name category", readOnly="false"),
 * @OA\Property(property="parent_id", type="number", format="number", description="parent_id ", readOnly="false"),
 * @OA\Property(property="created_at", type="string", format="date-time", description="Initial creation timestamp", readOnly="true"),
 * @OA\Property(property="updated_at", type="string", format="date-time", description="Last update timestamp", readOnly="true"),
 *)
 * Class BaseModel
 *
 * @package App\Models
*/

class Category extends Model
{
    use HasFactory;

    protected $table='categories';
    protected $fillable=[
        'id','parent_id','name','created_at','updated_at'
    ];
}
