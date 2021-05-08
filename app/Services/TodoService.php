<?php

namespace App\Services;

use App\Models\Todo;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class TodoService implements TodoServiceInterface
{
    /**
     * Display a listing of Todos.
     * 
     * @param  String $date
     * @return Collection
     */
    public function getAll(): Collection
    {
        return Todo::all();
    }

    /**
     * Display a listing of Todo by given date.
     * 
     * @param  String $date
     * @return Collection
     */
    public function getAllByDate(String $date): Collection
    {
        return Todo::where('date', Carbon::parse($date)->format('Y-m-d'))->get();
    }

    /**
     * Store a newly created Todo in storage.
     *
     * @param  array  $data
     * @return Todo
     */
    public function create(array $data): Todo
    {
        return Todo::create($data);
    }

    /**
     * Remove the specified Todo from storage.
     *
     * @param  \App\Models\Todo  $todo
     * @return Bool
     */
    public function delete(Todo $todo): Bool
    {
        return $todo->delete();
    }
}
