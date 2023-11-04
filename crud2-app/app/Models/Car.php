<?php //tells server the code is in PHP
//php is dynamically typed, so you don't need to explicitly define the types of properties

namespace App\Models; //location

//"use" imports classes/namespaces
use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    //php is dynamically typed, so you don't need to explicitly define the types of properties
    protected $table = 'cars';

    protected $fillable = [
        'id',
        'car_name'
    ];
}