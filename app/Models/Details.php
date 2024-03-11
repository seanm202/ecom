<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
  use HasApiTokens, HasFactory, Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
      'detailId',
      'userId',
      'firstName',
      'middleName',
      'lastName',
      'CountryId',
      'Address',
      'contactNumber',
      'alternateContactNumber',
      'whatsApp'

  ];
}
