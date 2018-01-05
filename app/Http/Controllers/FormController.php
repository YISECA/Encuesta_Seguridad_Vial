<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB as DB;
use Redirect;
use Validator;
use Session;
use App\Form;
use Idrd\Usuarios\Repo\Acceso;
use App\Localidad;
use App\Fechas;
use App\Horas;
use App\Cupo;
use Mail;



class FormController extends BaseController

{
    var $url;

     public function index()
    {

     $localidad = Localidad::all();
      //dd($horas); exit();
      return view('welcome',["localidades"=>$localidad,]);
    }

    private function cifrar($M)

    {   

      $C="";
      $k = 18; 
      for($i=0; $i<strlen($M); $i++)$C.=chr((ord($M[$i])+$k)%255);
      return $C;
    }

    private function decifrar($C)
    {   

      $M="";
      $k = 18;
      for($i=0; $i<strlen($C); $i++)$M.=chr((ord($C[$i])-$k+255)%255);
      return $M;
    }



   public function listar_datos(){

   $acceso = Form::whereYear('created_at', '=', date('Y'))->get(); 
    
    $tabla='<table id="lista">
        <thead>
           <tr>
             <th style="text-transform: capitalize;">id</th>
             <th style="text-transform: capitalize;">Nombres</th>
             <th style="text-transform: capitalize;">Apellidos</th> 
             <th style="text-transform: capitalize;">Documento de identidad</th> 
             <th style="text-transform: capitalize;">Género</th>  
             <th style="text-transform: capitalize;">Fecha de Nacimiento</th>          
             <th style="text-transform: capitalize;">Correo Electrónico</th>
             <th style="text-transform: capitalize;">Teléfono Celular</th>
             <th style="text-transform: capitalize;">Dirección</th>
             <th style="text-transform: capitalize;">Barrio</th>
             <th style="text-transform: capitalize;">Localidad</th>   
             <th style="text-transform: capitalize;">Estudio</th>
             <th style="text-transform: capitalize;">¿Que curso o capacitación es necesaria para fortalecer el sector del Deporye, la Recreación  y la Actividad Física?</th>
             <th style="text-transform: capitalize;">Grupo Poblacional</th>
            </tr>
        </thead>
        <tbody id="tabla">';
      foreach ($acceso as $key => $value) {
     

       $tabla.='<tr><td>'.$value->id.'</td>';
       $tabla.='<td>'.$value->nombre.'</td>';   
       $tabla.='<td>'.$value->apellido.'</td>';   
       $tabla.='<td>'.$value->tipo_documento.' N° '.$value->cedula.'</td>';
       $tabla.='<td>'.$value->genero.'</td>'; 
       $tabla.='<td>'.$value->fecha_nacimiento.'</td>';   
       $tabla.='<td>'.$value->mail.'</td>';    
       $tabla.='<td>'.$value->celular.'</td>';
       $tabla.='<td>'.$value->direccion.'</td>';
       $tabla.='<td>'.$value->barrio.'</td>';
       $tabla.='<td>'.$value->localidades['localidad'].'</td>';
       $tabla.='<td>'.$value->estudio.'</td>';
       $tabla.='<td>'.$value->pregunta.'</td>';
       $tabla.='<td>'.$value->poblacion.'</td></tr>';
       

      }
      $tabla.='</tbody></table>';

      echo $tabla;

    }

  
    public function logear(Request $request)
    {

      $usuario = $request->input('usuario');
      $pass = $request->input('pass');
      $acceso = Acceso::where('Usuario',$usuario)->where('Contrasena', sha1($this->cifrar($pass)) )->first();

      if (empty($usuario)) { return view('error',['error' => 'Usuario o contraseña invalida!'] ); exit(); }
      if (empty($acceso)) { return view('error',['error' => 'Usuario o contraseña invalida!'] ); exit(); }
       
       session_start() ;
       $_SESSION['id_usuario'] = json_encode($acceso);

      return view('admin'); exit(); 
    }


    public function insertar(Request $request)
    {

      $post = $request->input();
      $usuario = Form::where('cedula', $request->input('cedula'))->first(); 
      if (!empty($usuario)) { return view('error',['error' => 'Este usuario ya fue registrado!'] ); exit(); }
      $formulario = new Form([]);

        //envio de correo

       if($this->inscritos()<=500)
       {

        $this->store($formulario, $request->input());
        Mail::send('email', ['user' => $request->input('mail')], function ($m) use ($request) 
        {

            $m->from('no-reply@idrd.gov.co', 'Registro Exitoso  al CONVERSATORIO Y NETWORKING Modelos de negocio de la Economía Naranja, Industria deportiva y recreativa');
            $m->to($request->input('mail'), $request->input('primer_nombre'))->subject('Registro Exitoso al CONVERSATORIO Y NETWORKING Modelos de negocio de la Economía Naranja, Industria deportiva y recreativa!');

        });

      }else{

        return view('error', ['error' => 'Lo sentimos el limite de inscritos fue superado!']);
      }

        return view('error', ['error' => 'Su registro fue exitoso']);
    }


// conteo de la tabla

    private function inscritos()
    {

      $cant = Form::count('id');
      return $cant+1;
    }


    private function store($formulario, $input)

    {
        $formulario['nombre'] = $input['nombre'];
        $formulario['apellido'] = $input['apellido'];
        $formulario['tipo_documento'] = $input['tipo_documento'];
        $formulario['cedula'] = $input['cedula'];
        $formulario['genero'] = $input['genero'];
        $formulario['fecha_nacimiento'] = $input['fecha_nacimiento'];
        $formulario['mail'] = $input['mail'];
        $formulario['celular'] = $input['celular'];
        $formulario['direccion'] = $input['direccion'];
        $formulario['barrio'] = $input['barrio'];
        $formulario['localidad'] = $input['localidad'];
        $formulario['estudio'] = $input['estudio'];
        $formulario['pregunta'] = $input['pregunta'];
        $formulario['poblacion'] = $input['poblacion'];
        $formulario->save();

        return $formulario;

        

    }

}
