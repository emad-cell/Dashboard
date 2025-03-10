<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    //the table associated with the Model
    protected $table='messages';

    protected $guarded=['id'];

    //Upload path
    const UPLOADPATH='images/';

    //fields that eill handle upload document
    const UPLOADFIELDS=[];

    ##--------------------------------------- RELATIONSHIPS

    ##--------------------------------------- ATTRIBUTES

    ##--------------------------------------- CUSTOM FUNCTIONS

 }
