<?php 
 namespace App\Controllers; 

class Travel extends BaseController
{
	public function index() 
	{
            // connect to the model
            $places = new \App\Models\Places();
            // retrieve all the records
            $records = $places->findAll(); 
            
            $table = new \CodeIgniter\View\Table();
 
            $headings = $places->fields;
            $displayHeadings = array_slice($headings, 1, 2);
            $table->setHeading(array_map('ucfirst', $displayHeadings));
 
        foreach ($records as $record) {
            $nameLink1 = '<img src="/image/'.$record->image.'" width="50%" height="50%">';
            $nameLink = anchor("travel/showme/$record->id",$record->name);
            $table->addRow($nameLink,$nameLink1,$record->description);
        }


 
        $template = [
            'table_open' => '<table cellpadding="5px">',
            'cell_start' => '<td style="border: 1px solid orange;">',
            'row_alt_start' => '<tr style="background-color:#dddddd">',
        ];
   
   
   
        $fields = [
            'title' => 'List of car in NFS_14',
            'heading' => 'List of car in NFS_14',
            'footer' => 'Copyright HuangTengFeng'
        ];
$table->setTemplate($template);
            
             // get a template parser
             $parser = \Config\Services::parser();
            // tell it about the substitions
             
             return $parser->setData($fields)
            ->render('templates\top') .
            $table->generate() .
            $parser->setData($fields)
            ->render('templates\bottom');
 }
                
        public function showme($id)
        {
            // connect to the model
            $places = new \App\Models\Places();
            // retrieve all the records
            $record = $places->find($id);
            
            // get a template parser
            $parser = \Config\Services::parser();
            //tell it about the substitions
            return $parser->setData($record)
            // and have it render the template with those
            ->render('oneplace');
        }
        
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

