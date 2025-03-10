<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;
    //the table associated with the Model
    protected $table='features';

    protected $guarded=['id'];

    //Upload path
    const UPLOADPATH='images/';

    //fields that eill handle upload document
    const UPLOADFIELDS=[];

    ##--------------------------------------- RELATIONSHIPS

    ##--------------------------------------- ATTRIBUTES

    ##--------------------------------------- CUSTOM FUNCTIONS

 }
