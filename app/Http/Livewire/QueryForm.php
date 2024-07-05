<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Services\GeminiService;
use App\Models\Query;

class QueryForm extends Component
{
    public $name;
    public $email;
    public $message;
    public $response;
    public $success;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();

        // Store the query in the database
        $query = Query::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);

        // Process the query using the Gemini API
        $geminiService = app(GeminiService::class);
        $response = $geminiService->processQuery($this->message);

        // Store the response in the database
        $query->response = $response['response'] ?? 'No response';
        $query->save();

        // Update the component state
        $this->response = $query->response;
        $this->success = 'Your query has been submitted and processed successfully!';
    }

    public function render()
    {
        return view('livewire.query-form');
    }
}

