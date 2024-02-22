<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToArray;
use Maatwebsite\Excel\Facades\Excel ;



class UserController extends Controller
{
    //
    
    public function ExportCSV($id){

       
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
                    if ($record['id'] == $id){

                        $nom = $id - 1;
                        
                    }};
         $csv=response()->json([
        'results' => $records[$nom]['id'],
        'streets' => $records[$nom]['score']['test_1'],
         ]);

        
         return Excel::download(new UsersExport($id), 'test.xlsx');

        //  return Excel::download(new UsersExport,'test.csv');
    

    }
    public function Display(){

        // $record=Storage::json('/public/interviewtest.json'); 
        // $path = public_path().'/storage/users.json';
        // $record = json_decode((file_get_contents($path)), true);

    //    foreach ($record as $records){
             
    //     $datas =[
    //         'id'=> $records->id,

    //     ];


    //    }

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
// foreach($records as $record){
//         if ($record['id'] == 1){

            
//             $answer =$record['0'];


//         }}

       

        

           
$currentdt = date('d-m-Y H:i:s');
$date = new Carbon( $currentdt ); 
$year = date('Y', strtotime($currentdt ));

return view('welcome',['record'=>$records],['year'=>$year]);
 

   
// return response()->json([
//     'results' => $records['0']['id'],
//     'streets' => $records['0']['score']['test_1'],
// ]);

      
}


}
