<?php
namespace application\forms;


class UserForm
{
   
public static function UserForm(){
    return $userForm=array(

    'id'=>array(
        'label'=>null,
        'type'=>'hidden',
        'value'=>1,                
    ),
    'name'=>array(
        'label'=>'Nombre',
        'type'=>'text',
        'filters'=>array('striptags','striptrim'),
        'validation'=>array('required'=>TRUE,
                            'maxsize'=>20,
                            'minsize'=>3,
                            'error_message'=>'Error aqui'
        ),
                
    ),
    'email'=>array(
        'label'=>'Email',
        'type'=>'email',
        'filters'=>array('striptags','striptrim'),
        'validation'=>array('required'=>TRUE,
                            'email'=>TRUE,
                            'maxsize'=>200,
                            'minsize'=>3
                            )
    ),
    'password'=>array(
        'label'=>'Password',
        'type'=>'password',
        'filters'=>array('striptags','striptrim'),
        'validation'=>array('required'=>TRUE,
                            'maxsize'=>12,
                            'minsize'=>3
        )
    ),
    'description'=>array(
        'label'=>'Descripcion',
        'type'=>'textarea',
        'filters'=>array('striptags','striptrim'),        
    ),
    'photo'=>array(
        'label'=>'Foto',
        'type'=>'file',
        'validation'=>array('size'=>100000)
    ),
    'genders_idgender'=>array(
        'label'=>'Sexo',
        'type'=>'radio',
        'options'=>array('M'=>'m','H'=>'h','O'=>'o'),
        'validation'=>array('required'=>TRUE)
    ),
    'cities_idcity'=>array(
        'label'=>'Ciudad',
        'type'=>'select',
        'options'=>array('Valencia'=>'VLC',
                         'Barcelona'=>'BCN',                       
                         'Madrid'=>'MAD'),
    ),
    'hobbies'=>array(
        'label'=>'Aficiones',
        'type'=>'selectmultiple',
        'options'=>array('Nadar'=>'nadar',
                        'Leer'=>'leer',
                        'Correr'=>'correr')        
    ),
    'privacy'=>array(
        'label'=>'Politica',
        'type'=>'text',
        'options'=>array('Si'=>'si',
                        'No'=>'no',
                        'Talvez'=>'talvez'),
        'value'=>'si',
        'validation'=>array('required'=>TRUE)
    ),
    'submit'=>array(
        'label'=>null,
        'type'=>'submit',
        'value'=>'Enviar'
    ),    
    );
    }
}