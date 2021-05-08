<?php

namespace App\Services;

use App\Models\Todo;
use Illuminate\Database\Eloquent\Collection;

interface TodoServiceInterface
{
    /**
     * Display a listing of Todos.
     * @param  String $date
     * 
     * @return Collection
     */
    public function getAll(): Collection;

    /**
     * Display a listing of Todos by given date.
     * @param  String $date
     * 
     * @return Collection
     */
    public function getAllByDate(String $date): Collection;

    /**
     * Store a newly created Todo in storage.
     *
     * @param  array  $data
     * @return Todo
     */
    public function create(array $data): Todo;

    /**
     * Remove the specified Todo from storage.
     *
     * @param  \App\Models\Todo  $todo
     * @return Bool
     */
    public function delete(Todo $todo): Bool;
}
