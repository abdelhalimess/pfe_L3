<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Question;
use Illuminate\Http\Request;
use Staudenmeir\EloquentAdjacencyList\Queries\RecursiveQuery;


class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('superadmin.questions_list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question = new Question();
        $question->content = $request->content;
        $question->service_id = $request->service_id;
        $question->question_id = $request->question_id;

        $question->save();

        // return compact('validated');
        return response()->json([
            'success' => 'Information added with success',
            'question' => $question
        ]);
    }

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
        $question = Question::where('id',$id)->firstOrFail();
        $question->content = $request->content;
        $question->save();
        return response()->json(['success' => 'The question has been updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $questions = Question::where('question_id',$id)->get();
        foreach ($questions as $question) {
            $question->delete();
           
        }
        Question::Where("id",$id)->delete();
        return response()->json(['success' => 'The question has been deleted']);
    }

    public function getQuestions()
    {

        $qts = Question::tree()->get();

        $tree = $qts->toTree();
       
        $questions = Question::all();
        return  compact('questions','tree');



        // $questions = Question::with('')->get();
        // return compact('questions');
    }
    // public function getServicesQuestions($id)
    // {

    //     $query = Question::where('service_id', $id)->orderBy('id');

    //     $tree = $query->get()->toTree();
    
    //     return compact('tree');

    // }
    public function getServicesQuestions($id)
    {
        $qts = Question::with('children')->where('service_id', $id)->get();
    
        $tree = $this->buildTree($qts, null);
    
        return compact('tree');
    }
    
    private function buildTree($questions, $parentId = null)
    {
        $tree = [];
    
        foreach ($questions as $question) {
            if ($question->question_id === $parentId) {
                $children = $this->buildTree($questions, $question->id);
                if ($children->isNotEmpty()) {
                    $question->children = $children;
                }
                $tree[] = $question;
            }
        }
    
        return collect($tree);
    }
    
    public function attachDocuments(Request $request, $id)
    {

        $validated = $this->validate($request, [
            'documents' => 'required',
        ]);



        $question = Question::where("id", "=", $id)->with("documents")->firstOrFail();
        $documents = $request->documents;
        $question->documents()->sync($documents);





        $questions = Question::with('documents')->get();
        return response()->json([
            'success' => 'Information modifée avec succès',
            'questions' => $questions,
        ]);
    }

    public function getDocuments()
    {
        $documents = Document::all();
        return response()->json([
            'documents' => $documents
        ]);
    }
    public function getQuestionDocuments($id)
    {
        $question = Question::where("id", "=", $id)->with("documents")->firstOrFail();
        // $question = Question::with('documents')->where('id',$id)->get();
        return compact('question');
    }

   public function addNestedQuestion(Request $request)
   {
    $question = new Question();
    $question->content = $request->content;
    $question->service_id = $request->service_id;
    $question->question_id = $request->question_id;

    $question->save();

    // return compact('validated');
    return response()->json([
        'success' => 'Information added with success',
        'question' => $question
    ]);
   }
}
