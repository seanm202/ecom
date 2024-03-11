<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  use HasApiTokens, HasFactory, Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
      'customerId',
      'userId',
      'firstName',
      'middleName',
      'lastName',
      'CountryId',
      'Address',
      'contactNumber',
      'alternateContactNumber',
      'productId'
  ];
}
