<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

abstract class SiteController extends Controller
{
    //
    protected $template;
    protected $vars=array();
    protected $p_rep;
    protected $o_rep;
    protected $c_rep;
    protected $e_rep;
    protected $can_rep;
    protected $ev_rep;





    public function __construct(){

    }





    public function RenderOutPut(){
        //$footer=view('footer');
        //$this->vars=array_add($this->vars,'footer',$footer);
        //$menu=$this->getmenu();
        //$navigation=view('menu')->with('menu',$menu);
        //$this->vars=array_add($this->vars,'navigation',$navigation);
        return view($this->template)->with($this->vars);
    }


}
