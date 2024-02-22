<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    protected $id;

    function __construct($id) {
        $this->id = $id;
 }
    /**
    * @return \Illuminate\Support\Collection
    */
   
    public function collection()
    {
        $idd = $this->id;
        $records = [[
            'id' => '1',
            'name' => 'Ismail',
            'date' => '1991-02-21 21:03:12',
            'title' => 'KDSB-01',
            'address' => 'Taman Melawati',
            'working_status' => True,
            'created_at' => '2019-07-11 00:00:00',
            'updated_at' => '2019-07-11 00:00:00',
                'score' => Array ('test_1'=>'30','test_2'=>'40','test_3'=>'50')
        ],[
           'id' => '2',
            'name' => 'Nadir Syafiq',
            'date' => '1990-05-18 00:02:18',
                'title' => 'KRL-04',
                'address' => 'Taman Tenaga',
                'working_status' => False,
                'created_at' => '2019-07-11 00:00:00',
                'updated_at' => '2019-07-11 00:00:00',
                'score' => Array ('test_1'=>'53','test_2'=>'60','test_3'=>'77')
        ],[
            'id' => '3',
             'name' => 'Idham Zaidi',
             'date' => '1993-04-30 18:02:11',
                 'title' => 'KDSB-02',
                 'address' => 'Taman Medan',
                 'working_status' => True,
                 'created_at' => '2019-07-10 00:00:00',
                 'updated_at' => '2019-07-10 00:00:00',
                 'score' => Array ('test_1'=>'90','test_2'=>'50','test_3'=>'70')
        ],[
            'id' => '4',
             'name' => 'Idham Zaidi',
             'date' => '1995-01-01 13:00:14',
                 'title' => 'MBS-03',
                 'address' => 'Taman Anjaria',
                 'working_status' => False,
                 'created_at' => '2019-07-08 00:00:00',
                 'updated_at' => '2019-07-08 00:00:00',
                 'score' => Array ('test_1'=>'59','test_2'=>'50','test_3'=>'89')
         ]
        
        
        ];

        foreach($records as $record){
            if ($record['id'] == $idd){

                $nom = $idd - 1;
                
                $d1 = date('m-d-Y', strtotime($records[$nom]['updated_at']));
            }};
 $csv=[
   ['Title' => 'Title',
   'Test' => 'Test',
   'Score' => 'Score',
   'Evaluated at' => 'Evaluated at'],
    
[
'Title' => $records[$nom]['title'],
'Test' => 'Test_1',
'Score' => $records[$nom]['score']['test_1'],
'Evaluated at' => $d1,
 ] , 
 
 ['Title' => $records[$nom]['title'],
 'Test' => 'Test_2',
 'Score' => $records[$nom]['score']['test_2'],
 'Evaluated at' => $d1,
],

 ['Title' => $records[$nom]['title'],
 'Test' => 'Test_3',
 'Score' => $records[$nom]['score']['test_3'],
 'Evaluated at' => $d1,


 ]

];
        return collect($csv);
    }
    
}
