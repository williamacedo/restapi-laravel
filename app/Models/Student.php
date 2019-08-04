<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	// indica os atributos para definição de dados em massa
   protected $fillable = ['name', 'birth', 'gerder', 'classroom_id'];
   // faz conversão na serialização
  // protected $casts = [
  // 		'birth' => 'date:d/m/Y'
   //];
   // define atributos nao mostrados após a serialização
   //protected $hidden = ['created_at', 'updated_at'];
   // define atributos mostrados após a serialização

  // protected $visible = ['name', 'gerder', 'birth', 'classroom_id', 'is_accepted'];
   // define os atributos dinamicos anexos a serialização

   //protected $appends = ['is_accepted'];

   public function classroom(){
   		return $this->belongsTo('App\Models\Classroom');
   }    

   // cria um acessor no model de estudante chamado is_accepted
  // public function getIsAcceptedAttribute()
  // {
  // 		return $this->attributes['birth'] > '2002-01-01' ? 'aceito' : 'não foi aceito';
   //}
}
