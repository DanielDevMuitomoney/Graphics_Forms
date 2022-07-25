<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Builder\Function_;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function ShowFormLogin()
    {
        return view('forms.vw_formlogin');
    }
    public function ShowRegisterForm()
    {
        return view('forms.vw_register_form');
    }

    public function Register(Request $request)
    {//min de digitos para a senha
        $min_lenght_password=8;
        //numero de campos dentro do form que devem ser válidos
        $campos_validos=0;
        //campos do formulário que precisam passar por alguma validação
        $campos=
        [
            0=> $request->name,
            1=> $request->email,
            2=> $request->password,
            3=> $request->password2
        ];
        //verifica campos empty
        for($i=0;$i<count($campos);$i++)
        {
            if(!empty($campos[$i]))
            {
                $campos_validos++;
            }
            else
            {
                
                $json['message_error']='Preencha todos os campos';
                echo json_encode($json);
                return;
                exit();

            }
        }

        if(!DB::table('users')->where('nm_email','=',$campos[1])->count() > 0)
            {
                if(filter_var($campos[1],FILTER_VALIDATE_EMAIL)){
                    if($campos[2]===$campos[3])
                    {
                        if(strlen($campos[2])>=$min_lenght_password)
                        {
                        DB::table('users')->insert([
                            'nm_user'=>$request->name,
                            'nm_email'=>$request->email,
                            'nm_password'=>Hash::make($request->password),
                            'fk_typeuser'=>1
                        ]);
                    
                        
                        
                        $json['message_system']='Cadastro realizado com sucesso';
                        $json['register']=true;
                        echo json_encode($json);
                        return;
                        }
                        else
                        {
                            $json['message_system']='A senha deve ter no mínimo 8 caracteres';
                            $json['register']=false;
                            echo json_encode($json);
                            return;
                            exit();
                        }
                    }
                    else
                    {
                        $json['message_system']='As senhas não conferem';
                        $json['register']=false;
                        echo json_encode($json);
                        return;
                    }

                    
                    
                }
                else
                {
                    $json['message_system']='Email inválido';
                    $json['register']=false;
                    echo json_encode($json);
                    return;
                    exit();
                }
            }
                
        else
        {
            $json['email']=$campos[1];
            $json['message_system']='Email já cadastrado';
            $json['register']=false;
            echo json_encode($json);
            return;
        }    
    } 
   
public function action_login(Request $request)
{
    
    $credenciais = [
        'nm_email' => $request->email,
        'password' => $request->password
    ];

  
    if(Auth::attempt($credenciais))
    {
        
       
        $json['login']=true;
        echo json_encode($json);
        return;
    }
    else
    {
        $json['login']=false;
        echo json_encode($json);
        return;
    }
}
public function logout()
{
    Auth::logout();
    redirect()->route('home.show');
}


}
