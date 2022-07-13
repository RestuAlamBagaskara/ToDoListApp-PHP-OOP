<?php

    require_once __DIR__ . "/Entity/ToDoList.php";
    require_once __DIR__ . "/Helper/InputHelper.php";
    require_once __DIR__ . "/Service/ToDoListService.php";
    require_once __DIR__ . "/Repository/ToDoListRepository.php";
    require_once __DIR__ . "/View/ToDoListView.php";

    use Entity\ToDoList;
    use Repository\ToDoListRepositoryImpl;
    use Service\ToDoListServiceImpl;
    use View\ToDoListView;

    echo "Aplikasi ToDo List" . PHP_EOL;

    $todoListRepository = new ToDoListRepositoryImpl;
    $todoListService = new ToDoListServiceImpl($todoListRepository);
    $todoListView = new ToDoListView($todoListService);

    $todoListView->showToDoList();
