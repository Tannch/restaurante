<?php
class MeserosController extends AppController
{
    public $helpers = array('Html','Form');

    public function index()
    {
        $this->set('meseros', $this->Mesero->find('all'));
    }

    public function ver($id = null)
    {
        if (!$id) {
            throw new NotFoundException('Datos Inválidos');
        }

        $mesero = $this->Mesero->findById($id);

        if (!$mesero) {
            throw new NotFoundException('El mesero no existe');
        }

        $this->set('mesero', $mesero);
    }
}
?>