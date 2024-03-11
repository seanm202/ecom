<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retailer extends Model
{
  use HasApiTokens, HasFactory, Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
      'retailerId',
      'retailerName',
      'retailerDescription',
      'retailerLocation',
      'retailerAddress',
      'retailerContactDetails',
      'joiningDate',

  ];
}
