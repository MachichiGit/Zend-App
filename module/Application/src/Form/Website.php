<?php 
namespace Application\Form;
use Zend\Form\Element;
use Zend\Form\Form;


class Website extends Form {

	public function __construct()
	{
		parent::__construct();
        $this->add([
            'required' => true,
            'name'     => 'naam',
            'class'    => 'form-controle',
            'options' => [
                'label' => 'Naam',
		        'label_attributes' => [
		            'class'  => 'label-control'
		        ],
            ],
            'filters'=>[
                ['name'=>'StripTags'],
                ['name'=>'StringTrim'],
            ],
            'attributes' => [
                'type'  => 'text',
                'class' => 'form-control',
            ],
            'type'  => 'Text',
        ]);
        
        $this->add([
            'required' => true,
            'name' => 'url',
            'options' => [
                'label' => 'Url',
		        'label_attributes' => [
		            'class'  => 'label-control'
		        ],
            ],
            'attributes' => [
                'type'  => 'text',
                'class' => 'form-control',
            ],
            'type'  => 'Text',
        ]);

        $this->add([
			'name' => 'save',
			'type' => 'Submit',
            'attributes' => [
				'value' => 'Save',
				'class' =>"btn btn-primary",
            ],
        ]);
	}
}