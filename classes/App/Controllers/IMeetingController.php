<?
namespace ApiWeMeet\Controller;

interface IMeetingController{
    public function addMeeting();
    public function deleteMeeting();
    public function updateMeeting();
    public function addMeetingUserView();
    public function addMeetingUserDetailView();
    public function saveMeeting();
}