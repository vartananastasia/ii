<?
namespace ApiWeMeet\Controller;

use ApiWeMeet\Entity\User as User;
use ApiWeMeet\Entity\Meeting as Meeting;
use ApiWeMeet\Entity\UserGroup as UserGroup;
use ApiWeMeet\Entity\FriendGroup as FriendGroup;
use ApiWeMeet\Entity\Permission as Permission;


class UserController implements IUserController{

    public function registerUser(User $user){

    }
    public function updateUserProfile(User $user, array $arFields){

    }
    public function addUserToMeeting(User $user, Meeting $meeting){

    }
    public function addUserToFriends(User $user, User $friend){

    }
    public function addUserToUserGroup(User $user, UserGroup $userGroup){

    }
    public function setUserPermission(User $user, Permission $permission){

    }
    public function addUserFriendGroup(User $user, FriendGroup $friendGroup){

    }
    public function deleteUser(User $user){

    }
    public function saveUser(User $user){}
}