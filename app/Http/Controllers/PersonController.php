<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Person;

class PersonController extends Controller
{
    protected $person;

    /**
     * Method construct to class
    */
    public function __construct(Person $person)
    {
    	$this->person = $person;
    }

    /**
     * Collections em consultas por unidades
    */
    public function index()
    {
    	$collection = $this->person->find([1]);
    	dd($collection[0]);
    }

    /**
     * Collections com where após a comsulta ao banco ao dados
    */
    public function allWhere()
    {
    	$collection = $this->person->all();
    	dd($collection->where('type', 'engenier'));
    }

     /**
     * Collections com where e organizção de informações após a comsulta ao banco ao dados
    */
    public function allLists()
    {
    	$collection = $this->person->all();
    	dd($collection->where('type', 'programmer')->lists('first_name'));
    }

     /**
     * Collections usando groupby
    */
    public function group()
    {
    	$collection = $this->person->all();
    	dd($collection->groupBy('type'));
    }
}
