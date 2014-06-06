<?php

namespace Demo\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Demo\TestBundle\Form\AddressForm;
use Demo\TestBundle\Model\Address;

class AddressController extends Controller
{
    public function addAddressFormAction() {
        $form = $this->createForm(new AddressForm());
  
        if($this->get('request')->isMethod('POST')){
            $form->handleRequest($this->get('request'));
            if($form->isValid()){
                echo 'VALID';
                //do smth
            }else{
                //get form errors
                $formErrors = array();
                foreach($form->all() as $item){
                    if(is_array($item->getErrors()) && count($item->getErrors()) > 0){
                        $localErrors = explode('ERROR: ', $item->getErrorsAsString());
                        $formErrors[$item->getName()] = !empty($localErrors[1])?$localErrors[1]:'';
                    }
                }
                 
                //set errors into a notification handler or send them to the view in order to display them
            }
        }
  
        return $this->render('DemoTestBundle:Address:address.html.twig', array('addressForm'=>$form->createView()));
    }

    public function getLocalitiesAction(){
    	$regionId = $this->getRequest()->get('id');
    	$localities = Address::getLocalitiesByRegion($regionId);

    	$html = '';
    	if(!empty($localities)){
    		foreach($localities as $key=>$value){
    			$html .= '<option value="'.$key.'">'.$value.'</option>';
    		}
    	}

    	return new Response($html);
    }
}