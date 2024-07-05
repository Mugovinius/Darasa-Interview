<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Query;
use App\Services\GeminiService;

class QueryController extends Controller
{
    protected $geminiService;

    public function __construct(GeminiService $geminiService)
    {
        $this->geminiService = $geminiService;
    }

    public function create()
    {
        return view('query-form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Remove _token from the request data
        $data = $request->except('_token');

        // Store the query in the database
        $query = Query::create($data);

        // Process the query using the Gemini API
        $response = $this->geminiService->processQuery($data['message']);

        // Store the response in the database
        $query->response = $response['response'] ?? 'No response';
        $query->save();

        return redirect()->back()->with('success', 'Your query has been submitted and processed successfully!')
                                 ->with('response', $query->response);
    }
}

