<?php 

class Landing1Controller extends FrontController
{
    public $vModel;

    public function index() 
    {
        parent::index();
        $gallery = $this->gallery();
        $dataForm = $this->dataValueForm();
        Flight::render('landing1/index.php', array('gallery' => $gallery, 'dataForm' => $dataForm,'showBtnProyecto' => true));
    }

    public function thanks()
    {
        if(!empty($_POST)) {
            $post = $_POST;
            $post['tipo'] = 'remodelacion';
            $area = $this->dataValueForm();
            $post['name_area'] = $area[$post['area']];
            
            $cone = new Conexion();
            $res = $cone->insert($post);
    
            $email = new Mail();
            $email->sendMail($post);
    
            if (!$res)
                Flight::redirect('/remodelacion');
    
            Flight::render('landing1/thanks.php', array('showBtnProyecto' => false));
        } else {
            Flight::redirect('/remodelacion');
        }
    }


    public function dataValueForm() {
        return array(
            '1' => 'Sala',
            '2' => 'Cocina',
            '3' => 'Dormitorio',
            '4' => 'Comedor',
            '5' => 'Baño',
            '6' => 'Preparación de estructuras de tu casa para casos de sismos.',
            '7' => 'Filtración de lluvias, fugas en tanques, piscinas o cisternas',
            '8' => 'Impermeabilización de techos',
        );
    }

    public function gallery()
    {
        $gallery = array(
            array(
                'name' => 'SALAS', 
                'icon' => 'fa-couch',
                'photos' => array(
                    array('name' => 'Foto 1', 'image' => 'SALA-1.png'),
                    array('name' => 'Foto 2', 'image' => 'SALA-2.png'),
                    array('name' => 'Foto 3', 'image' => 'SALA-3.png'),
                )
            ),
            array(
                'name' => 'COCINA', 
                'icon' => 'fa-blender', 
                'photos' => array(
                    array('name' => 'Foto 1', 'image' => 'COCINA-1.png'),
                    array('name' => 'Foto 2', 'image' => 'COCINA-2.png'),
                    array('name' => 'Foto 3', 'image' => 'COCINA-3.png'),
                    array('name' => 'Foto 4', 'image' => 'COCINA-4.png'),
                )
            ),
            array(
                'name' => 'DORMITORIO', 
                'icon' => 'fa-bed', 
                'photos' => array(
                    array('name' => 'Foto 1', 'image' => 'DORMITORIO-1.png'),
                    array('name' => 'Foto 2', 'image' => 'DORMITORIO-2.png'),
                    array('name' => 'Foto 3', 'image' => 'DORMITORIO-3.png'),
                )
            ),
            array(
                'name' => 'COMEDOR', 
                'icon' => 'fa-coffee',       
                'photos' => array(
                    array('name' => 'Foto 1', 'image' => 'COMEDOR-1.png'),
                    array('name' => 'Foto 2', 'image' => 'COMEDOR-2.png'),
                    array('name' => 'Foto 3', 'image' => 'COMEDOR-3.png'),
                )
            ),
            array(
                'name' => 'BAÑO', 
                'icon' => 'fa-bath', 
                'photos' => array(
                    array('name' => 'Foto 1', 'image' => 'BANO-1.png'),
                    array('name' => 'Foto 2', 'image' => 'BANO-2.png'),
                    array('name' => 'Foto 3', 'image' => 'BANO-3.png'),
                )
            )
        );

        return $gallery;
    }

}
