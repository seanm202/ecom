<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerSupport extends Model
{
  use HasApiTokens, HasFactory, Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
      'customerSupportId',
      'customerSupportStaffName',
      'dateOfContactStart',
      'dateOfContactEnd',
      'customerId',
      'productId',
      'descriptionOrIssue',
      'status'

  ];
}
