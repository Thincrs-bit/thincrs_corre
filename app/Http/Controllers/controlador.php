<?php

namespace App\Http\Controllers;
// use App\competence_Diagram;


use App\changelle;
use App\content_changelle;
use App\element_content;
use App\diagram_element;
use App\element;
use App\resource;
use App\competence;
use App\User;
use App\diagram;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class controlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getDiagram(Request $request)
    {
        $diagrams =diagram::all();
        return $diagrams;
        // return $this->successResponse([
        //     'es' => 'Diagramas encontradas',
        //     'en' => 'Diagrams found',
        //     'data' => $diagrams
        // ], 200);
    }

    public function show_resource(){
        return resource::all();

    }

    public function show_competences()
    {
        return competence::all();

    }

    public function getCompetencesDiagram(Request $request){
        
    
        $diagram = diagram::find($request['id'])->competences;
        
        return $diagram;
      
    
    }

     public function createChallengeDiagram(Request $request){
        $diagram_id = $request['diagram_id'];
        $diagram = diagram::find($diagram_id);
        $element = new element([
            'name'=> $request['name'],
            'competence_id' => $request['competence_id'],
            'element_type_id'=> $request['element_type_id']
            ]);
        $diagram->element->save($element);    
        
        
        $element = element::find();
        
        $newschallenge = new challenge();
        $newschallenge->admin_id =  $request->admin_id;
        $newschallenge->name =  $request->name;
        $newschallenge->description =  $request->description;
        $newschallenge->position =  $request->position;



     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        if($request->isJson()){
            $data = $request->json()->all();
            $data_save =[
            'id' => $data['id'], 
            'name' => $data['name'],
            'description'=>$data['description'],
            'diagram_type_id'=> $data['diagram_type_id'],
            'status_id'=> $data['status_id'], 
             ];
            $diagram = diagram::create($data_save);
           

    
            }else return 'error';
        }

        public function create_challenge_diagram(){
  
            changelle :: create([
            'id' => request('id'), 
            'admin_id'=> request('admin_id'), 
            'name'=> request('name'), 
            'description' => request('description'), 
            'position'=>request('position'), 
            'created_at'=>request('created_at'),
           
            ]);
         content_changelle::create([
             'content_challengecol'=> request('content_challengecol'),
             'content_id'=> request('content_id'),
             'challenge_id'=> request('challenge_id'),
             'position'=> request('position_2'),
             ]);
        element_content::create([
            'content_id'=> request('element_id_2'),
            'element_id' => request('element_id'),
            'weight'=> request('weight'), 
            ]);
        diagram_element::create([
            'element_id'=> request('element_id'),
            'diagram_id'=> request('diagram_id'), 
            'position'=> request('position_3'),
            ]);
          diagram::create([
            'name'=> request('name_2'),
            'description'=> request('description_2'),
            'diagram_type_id'=>request('diagram_type_id'), 
            'status_id' => request('status_id'),
            ]);
 } 

public function createChallngeToDiagram(Request $request)
{
    $userLogged = $request->user();
        $administrator = Admin::where('user_id', $userLogged->id)->first();

        if (!$administrator) {
            return $this->errorResponse([
                'es' => 'Usuario no encontrado',
                'en' => 'User not found'
            ], 404);
        }
        
        $elementContent = ElementContent::where('');

        $contentChallenge = ContenteChallenge:: where('id',$request->ContenteChallenge_id)->first();

        if(!$contentChallenge){
            return $this->errorResponse([
                'es'=>'',
                'en'=>''
            ],404);
        }


        $diagram = Diagram::where('id',$request->diagram_id)->first();
        if(!$diagram){
            return $this->errorResponse([
                'es'=>'Diagrama no econtrado',
                'en'=>'Diagram not found'
            ],404);
        }


}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
