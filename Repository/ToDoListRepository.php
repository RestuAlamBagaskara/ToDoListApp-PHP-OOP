<?php

    namespace Repository {

        use Entity\ToDoList;

        interface ToDoListRepository {

            function save(ToDoList $toDoList): void;

            function remove(int $number): bool;

            function findAll(): array;

        }

        class ToDoListRepositoryImpl implements ToDoListRepository {

            public array $toDoList = [];

            function save(ToDoList $toDoList): void{
                $number = sizeof($this->toDoList) + 1;
                $this->toDoList[$number] = $toDoList;
            }

            function remove(int $number): bool{

                if ($number > sizeof($this->toDoList)) {
                    return false;
                }

                for ($i=$number; $i < sizeof($this->toDoList) ; $i++) { 
                    $this->toDoList[$i] = $this->toDoList[$i + 1];
                }

                unset($this->toDoList[sizeof($this->toDoList)]);

                return true;
            }

            function findAll(): array{
                return $this->toDoList;
            }
        }
    }