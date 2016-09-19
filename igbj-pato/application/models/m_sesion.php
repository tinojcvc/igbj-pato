<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

    class M_sesion extends CI_Model
    {
     
        public function __construct()
        {
        $this->load->library('session');
        $this->load->database();
        }
        
        public function get_existe_usuario($login, $password)
        {
            $query = $this->db->where('login',$login);
            $query = $this->db->where('password',$password);
            $query = $this->db->get('usuario');
            if($query ->num_rows() > 0)
            {
                    return(1);//existe la marca
            }
            else
            {
                    return(0);//no existe la marca
            }
        }

        public function get_existe_usuario_id($login, $password)
        {
            $id_persona = "";
            $query = $this->db->select('datpersona_usuario_id');
            $query = $this->db->where('login',$login);
            $query = $this->db->where('password',$password);
            $query = $this->db->get('usuario');
            $a=$query->result_array();
            foreach($a as $c => $v)
            {
                foreach($v as $cl => $va)
                {
                    $id_persona=$va;
                }
            }
            return $id_persona;
        }

        function getusuario_nombre($pass,$login)
        {
            $nombre="";
            $query = $this->db->select('nombre');
            $query = $this->db->select('apellido');
            $query = $this->db->where('usuario',$login);
            $query = $this->db->get('datos_personales');
            $a=$query->result_array();
            foreach($a as $c => $v)
            {
                foreach($v as $cl => $va)
                {
                    $nombre=$va;
                }
            }
            return $nombre;
        }

        function datos($id_persona)
        {
            $query = $this->db->where('id_dtpersonales',$id_persona);
            $query = $this->db->get('datos_personales');                    
            return $query->result();
        }

        function datos_user($id_persona)
        {
            $query = $this->db->where('datpersona_usuario_id',$id_persona);
            $query = $this->db->get('usuario');                    
            return $query->result();
        }
                
        function conteo($usuario,$pass)
        {
            $query = $this->db->where('login',$usuario);
            $query = $this->db->where('password',$pass);
            $query = $this->db->get('usuario');                    
            return $query->num_rows();
        }

        function getusuario_id($pass,$login)
        {
            $id="";
            $query = $this->db->select('id_usuario');
            $query = $this->db->where('login',$login);
            $query = $this->db->where('password',$pass);
            $query = $this->db->get('usuario');
            $a=$query->result_array();
            foreach($a as $c => $v)
            {
                foreach($v as $cl => $va)
                 {
                        $id=$va;
                 }
            }
            return $id;
        }

        function getnombre_rol($rol)
        {
            $rol_u="";
            $query = $this->db->select('tipo_usuario');
            $query = $this->db->where('id_usuario',$rol);
            $query = $this->db->get('usuario');
            $a=$query->result_array();
            foreach($a as $c => $v)
            {
                foreach($v as $cl => $va)
                 {
                        $rol_u=$va;
                 }
            }
            return $rol_u;
        }

        public function getLogin($username,$password)
        {
        //comprobamos que el nombre de usuario y contraseña coinciden
        $data = array(
        'usuario' => $username,
        'contrasena' => $password
        );
       
        $query = $this->db->get_where('DATOS_PERSONALES',$data);
        return $query->result_array();
        }
       
       
        public function isLogged()
        {
        //Comprobamos si existe la variable de sesión username. En caso de no existir, le impediremos el paso a la página para usuarios registrados
       
            if(isset($this->session->userdata['username']))
            {
            return TRUE;
            }
            else
            {
            return FALSE;
            }
           
        }
       
       
       
        public function close()
        {
        //cerrar sesión
        return $this->session->sess_destroy();
        }
    }
?>
