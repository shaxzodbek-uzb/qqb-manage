<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    private $userClass;
    private $userRepository;
    private $userService;

    function __construct()
    {
        $this->userClass = TelegramUser::class;
        $this->userRepository = new TelegramUserRepository;
        $this->userService = new UserService;
    }
    // DRY
    // KISS -> keep it simple, stupid
    public function index()
    {

        // ElectronicProducts
        // AnimalProducts
        $users = $this->userClass::query();
        $users = $this->userService->filter($users);
        $users = $this->userService->sort($users);
        return $this->userRepository->getAll($users);
    }
    public function destroy()
    {
        $users = $this->userClass::query();
        $users = $this->userService->filter($users);
        $users = $this->userRepository->destroy($users);
        return $users->delete();     
    }
    public function store()
    {
        $this->userService->store($this->userRepository)
    }
}
