<?php 
namespace Application\Form;
use Zend\Form\Element;
use Zend\Form\Form;

class URLs extends Form {

	public function __construct()
	{
		parent::__construct();

        $this->add([
            'required' => true,
            'name'     => 'websiteId',
            'type' => 'Zend\Form\Element\Select',
            'options' => [
                 'label' => 'Website',
             ],
            'class'    => 'form-controle',
            'options' => [
                'label' => 'Website',
		        'label_attributes' => [
		            'class'  => 'label-control'
		        ],
                'value_options' => [
                ],		        
            ],
            'filters'=>[
                ['name'=>'StripTags'],
                ['name'=>'StringTrim'],
            ],
            'attributes' => [
                'class' => 'form-control',
            ],
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
        	'required' => true,
            'name' => 'count',
            'options' => [
                'label' => 'Count',
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