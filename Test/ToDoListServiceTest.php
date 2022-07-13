<?php

    require_once __DIR__ . "/../Entity/ToDoList.php";
    require_once __DIR__ . "/../Service/ToDoListService.php";
    require_once __DIR__ . "/../Repository/ToDoListRepository.php";

    use Entity\ToDoList;
    use Service\ToDoListServiceImpl;
    use Repository\ToDoListRepositoryImpl;

    function testShowTodoList(): void
    {   
        $todolistRepository = new \Repository\ToDoListRepositoryImpl;
        $todolistRepository->toDoList[] = new ToDoList("Belajar PHP");
        $todolistRepository->toDoList[] = new ToDoList("Belajar PHP");
        $todolistRepository->toDoList[] = new ToDoList("Belajar PHP");

        $todolistService = new \Service\ToDoListServiceImpl($todolistRepository);

        $todolistService->showToDoList();
    
    }

    function testAddTodoList(): void
    {   
        $todolistRepository = new \Repository\ToDoListRepositoryImpl;

        $todolistService = new \Service\ToDoListServiceImpl($todolistRepository);
        $todolistService->addToDoList("Belajar PHP");
        $todolistService->addToDoList("Belajar PHP");
        $todolistService->addToDoList("Belajar PHP");

        $todolistService->showToDoList();
    }

    function testRemoveTodoList(): void
    {   
        $todolistRepository = new \Repository\ToDoListRepositoryImpl;

        $todolistService = new \Service\ToDoListServiceImpl($todolistRepository);
        $todolistService->addToDoList("Belajar PHP");
        $todolistService->addToDoList("Belajar PHP");
        $todolistService->addToDoList("Belajar PHP");

        $todolistService->showToDoList();

        $todolistService->removeToDoList(1);
        $todolistService->showToDoList();

        $todolistService->removeToDoList(3);
        $todolistService->showToDoList();
    }

    testRemoveTodoList();