<?php namespace App\Dave\Services\Validators;

class Project extends Validator
{
  public static $rules = [
    'name' => 'required',
    'categories' => 'required',
    'members' => 'required',
    'description' => 'required',
  ];

  public static $messages = [
    'name.required' => 'O campo nome do projeto é obrigatório!',
    'categories.required' => 'Pelo menos uma categoria precisa ser selecionada',
    'members.required' => 'Pelo menos um membro precisa ser selecionado',
    'description.required' => 'O campo descrição é obrigatório!',
  ];
}