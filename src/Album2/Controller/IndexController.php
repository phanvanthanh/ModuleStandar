<?php
	namespace Album2\Controller;

	 use Zend\Mvc\Controller\AbstractActionController;
	 use Zend\View\Model\ViewModel;
	
	 class IndexController extends AbstractActionController
	 {
	 	
	     public function indexAction()
	     {

	        
	     	return new ViewModel();
	     }


	     public function addAction()
	     {
	        
	     }

	     public function editAction()
	     {
	     	 
	     }

	     public function deleteAction()
	     {
	     	
	     }
	     public function getAlbumTable()
	     {
	     	
	         if (!$this->albumTable) {
	             $sm = $this->getServiceLocator();
	             $this->albumTable = $sm->get('Album2\Model\AlbumTable');
	         }
	        return $this->albumTable;
	        
	     }

	        
	 }
?>