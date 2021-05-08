<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTodoRequest;
use App\Models\Todo;
use App\Services\TodoServiceInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * TodoController constructor.
     *
     * @param TodoServiceInterface $todoService
     */
    public function __construct(TodoServiceInterface $todoService)
    {
        $this->todoService = $todoService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Collection
     */
    public function index(): Collection
    {
        return $this->todoService->getAll();
    }

    /**
     * Display a listing of the resource by given date.
     *
     * @return Collection
     */
    public function getAllByDate(Request $request, String $date): Collection
    {
        return $this->todoService->getAllByDate($date);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Todo
     */
    public function store(StoreTodoRequest $request): Todo
    {
        $todoData = $request->validated();
        $todoData['date'] = Carbon::now()->toDateString();

        return $this->todoService->create($todoData);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
        // Usually a 'is_completed' flag would be set on the Todo and be updated here or any other Todo property
        // but since we are deleting the Todo upon completion, this method will remain empty.
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todo  $todo
     * @return Bool
     */
    public function destroy(Todo $todo): Bool
    {
        return $this->todoService->delete($todo);
    }
}
