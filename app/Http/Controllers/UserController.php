<?php

namespace App\Http\Controllers;

use App\DataTables\UserDataTable;
use App\Http\Actions\UserAction;
use App\Http\Requests\User\UserStoreRequest;
use App\Http\Requests\User\UserUpdateRequest;
use App\Http\Services\AuthorizationService;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public $authorizationService;

    public function __construct() {
        $this->authorizationService = new AuthorizationService();
        $this->authorizationService->setName("Kullanıcı");
    }

    public function index(UserDataTable $dataTable) {
        $this->authorizationService->canDisplayAndModify();
        return $dataTable->render('admin.users.index');
    }

    public function create() {
        $this->authorizationService->canCreate();
        $roles = Role::query()->select('name', 'id')->get();
        return view('admin.users.create', compact('roles'));
    }

    public function store(UserStoreRequest $request) {
        $this->authorizationService->canCreate();

        $userAction = new UserAction();
        return $userAction->store($request->validated());
    }

    public function edit(User $user) {
        $this->authorizationService->canUpdate();
        $roles = Role::query()->select('name', 'id')->get();
        return view('admin.users.update', compact('user', 'roles'));
    }

    public function update(User $user, UserUpdateRequest $request) {
        $this->authorizationService->canUpdate();

        $userAction = new UserAction();
        return $userAction->update($user, $request->validated());
    }

    public function destroy(User $user) {
        $this->authorizationService->canDelete();
        $user->delete();
        return response()->json(['url' => route('admin.users.index')]);
    }
}
