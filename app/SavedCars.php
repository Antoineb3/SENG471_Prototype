<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SavedCars extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name', 'user_id', 'type', 'interior_color', 'exterior_color',
  ];


  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
