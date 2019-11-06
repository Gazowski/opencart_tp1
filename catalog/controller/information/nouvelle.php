<?php
/**
 * SOLUTION WEB POUR LE COMMERCE ÉLECTRONIQUE
 * TP1 - gestion de nouvelles
 * controleur nouvelles
 * 
 * A FAIRE:
 *  -   modifier le breadcrumb
 *  -   modifier les métatags
 *  -   faire la vue
 * 
 */

class ControllerInformationNouvelle extends Controller{

	public function index() {
        $this->load->language('information/nouvelle');
        
        $this->load->model('catalog/nouvelle');

        
        /********************/
        /*                  */
        /*   breadcrumbs    */
        /*                  */
        /****************** */

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get("text_nouvelle"),
			'href' => $this->url->link('information/nouvelle')
		);



		/********************/
        /*                  */
        /*   Meta tags      */
        /*                  */
        /****************** */

		$this->document->setTitle($this->language->get("text_nouvelle"));
		$this->document->setDescription($this->language->get("text_page_description"));
        $this->document->setKeywords($this->language->get("text_keywords"));
        


        /******************************/
        /*                            */
        /*   connexion au modèle      */
        /*                            */
        /**************************** */  

        $nouvelles = $this->model_catalog_nouvelle->getNouvelles();

        $data["nouvelles"] = array();

        foreach($nouvelles as $nouvelle){
            $data["nouvelles"][] = array(
                "title" => $nouvelle["title"],
                "text" => $nouvelle["news"],
                "author" => $nouvelle["author"],
                "date" => $nouvelle["date"],
                "view" => $this->url->link("information/nouvelle/nouvelle","id=".$nouvelle["id"])
                // le lien pointe vers les controleurs
                // ici nous allons chercher la méthode nouvelle dans le controleur 'nouvelle' du dossier information

            );

        }

        // test de la commande : 
        // print_r($data["nouvelles"]);
        // die();

        
        
        /***********/
        /*         */
        /*   vue   */
        /*         */
        /********* */

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');



		// envoie des données dans la page nouvelles.twig
		$this->response->setOutput($this->load->view('information/nouvelles', $data));
    }
    
    

    public function nouvelle() {
        $this->load->language('information/nouvelle');
        
        $this->load->model('catalog/nouvelle');



        /********************/
        /*                  */
        /*   breadcrumbs    */
        /*                  */
        /****************** */
        
        $data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get("text_nouvelle"),
			'href' => $this->url->link('information/nouvelle')
		);



		/********************/
        /*                  */
        /*   Meta tags      */
        /*                  */
        /****************** */

		$this->document->setTitle($this->language->get("text_nouvelle"));
		$this->document->setDescription($this->language->get("text_page_description"));
        $this->document->setKeywords($this->language->get("text_keywords"));



        /******************************/
        /*                            */
        /*   connexion au modèle      */
        /*                            */
        /**************************** */  

        if(isset($this->request->get["id"]) && !empty($this->request->get["id"])){
            $nouvelle_id = $this->request->get["id"];
        } else {
            // retourne une erreur
        }

        $nouvelle = $this->model_catalog_nouvelle->getNouvelle($nouvelle_id);
        // test de la commande : 
        // print_r($nouvelle);
        // die();

        if($nouvelle){
            $data['breadcrumbs'][] = array(
                'text' => $nouvelle['title'],
                'href' => $this->url->link('information/nouvelle/nouvelle','nouvelle_id='.$nouvelle['id'])
            );


            $data["title"] = $nouvelle["title"];
            $data["text"] = $nouvelle["news"];
            $data["author"] = $nouvelle["author"];
            $data["date"] = $nouvelle["date"];

            // test de la commande : 
            // print_r($nouvelle);
            // die();

        
            /***********/
            /*         */
            /*   vue   */
            /*         */
            /********* */

            $data['column_left'] = $this->load->controller('common/column_left');
            $data['column_right'] = $this->load->controller('common/column_right');
            $data['content_top'] = $this->load->controller('common/content_top');
            $data['content_bottom'] = $this->load->controller('common/content_bottom');
            $data['footer'] = $this->load->controller('common/footer');
            $data['header'] = $this->load->controller('common/header');



            // envoie des données dans la page nouvelle.twig
            $this->response->setOutput($this->load->view('information/nouvelle', $data));
        }else{
            //error
        }
	}
}

?>