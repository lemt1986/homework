<?php 

namespace App\Http\Livewire;

use Livewire\Component;
use App\chat;
use Auth;
use DB;

class ChatList extends Component
{
    public $usuario;
    public $teacher;
    public $mensajes;
    protected $ultimoId;
        
    protected $listeners = ['mensajeRecibido', 'cambioUsuario'];
    
    public function mount($teacher)
    {
        $ultimoId = 0; 
        $this->mensajes = [];                      
        $this->teacher = $teacher;
        $this->usuario = \Auth::user()->id;                   
    }

    public function  mensajeRecibido($mensaje)
    {   
        $this->mensajes = Chat::orderBy("created_at", "desc")->where('de', $this->usuario)->take(10)->get();      
       // $this->actualizarMensajes($data);
    }

    public function cambioUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    public function actualizarMensajes($data) 
    {                
        if($this->usuario != "")
        {
            // El contenido de la Push
            //$data = \json_decode(\json_encode($data));
            
            $mensajes = \App\Chat::orderBy("created_at", "desc")->take(3)->get();
            //$this->mensajes = [];            

            foreach($mensajes as $mensaje)
            {
                if($this->ultimoId < $mensaje->id)
                {
                    $this->ultimoId = $mensaje->id;
                    
                    $item = [
                        "id" => $mensaje->id,
                        "usuario" => $mensaje->usuario,
                        "de" => $mensaje->de,
                        "mensaje" => $mensaje->mensaje,
                        "send" => ($mensaje->send != $this->usuario),
                        "fecha" => $mensaje->created_at->diffForHumans()
                    ];
    
                    array_unshift($this->mensajes, $item);                
                    //array_push($this->mensajes, $item);                
                }
                
            }

            if(count($this->mensajes) > 5)
            {
                array_pop($this->mensajes);
            }
        }
        else
        {            
            $this->emit('solicitaUsuario');
        }
    }

    public function resetMensajes()
    {
        $this->mensajes = [];
        $this->actualizarMensajes();
    }

    public function dydrate()
    {
        if($this->usuario == "")
        {
            // Le pedimos el uisuario al otro componente
            $this->emit('solicitaUsuario');
        }
    }

    public function render()
    {        
        return view('livewire.chat-list');
    }
}
