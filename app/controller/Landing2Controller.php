<?php 

class Landing2Controller extends FrontController
{
    public $vModel;

    public function index() 
    {
        parent::index();
        $params = array();
        $params['gallery'] = $gallery = $this->gallery();
        $params['dataForm'] = $this->dataValueForm();
        $params['customers'] = $customer = $this->getCustomer();
        $params['works'] = $customer = $this->getWorks();

        Flight::render('landing2/index.php', $params);
    }

    public function thanks()
    {
        if(!empty($_POST)) {
            $post = $_POST;
            $post['tipo'] = 'servicios';
            $area = $this->dataValueForm();
            $post['name_area'] = $area[$post['area']];
            
            $cone = new Conexion();
            $res = $cone->insert($post);
    
            $email = new Mail();
            $email->sendMail($post);
    
            if (!$res)
                Flight::redirect('/');
    
            Flight::render('landing2/thanks.php');

        } else {
            Flight::redirect('/');
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

    public function getCustomer()
    {
        return array(
            array('name' => 'Pamer', 'img' => 'pamer.png'),
            array('name' => 'Quimica Suiza', 'img' => 'quimica-suiza.png'),
            array('name' => 'QSI', 'img' => 'QSI.png'),
            array('name' => 'Soyuz', 'img' => 'soyuz.png'),
            array('name' => 'Buro', 'img' => 'buro.png'),
            array('name' => 'BBL Logistics', 'img' => 'ppl-logistics.png'),
        );
    }

    public function getWorks()
    {
        return array(
            array('name' => 'Manejamos altos estándares de seguridad', 'img' => 'epps.jpg'),
            array('name' => 'Excelente manejo del presupuesto asignado', 'img' => 'epps2.jpg'),
            array('name' => 'Conocimiento claro del RNC (Reglamento Nacional de construcción)', 'img' => 'epps3.jpg'),
            array('name' => 'Staff de profesionales de apoyo en las diferentes especialidades', 'img' => 'epps4.jpg'),
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
