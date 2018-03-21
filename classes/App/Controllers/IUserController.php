<?
namespace ApiWeMeet\Controller;

interface IUserController{
    public function registerUser();
    public function updateUserProfile();
    public function addUserToMeeting();
    public function addUserToFriends();
    public function addUserToUserGroup();
    public function setUserPermission();
    public function addUserFriendGroup();
    public function deleteUser();
    public function saveUser();
}