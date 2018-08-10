<?
namespace ApiWeMeet\Controller;

use ApiWeMeet\Entity\Meeting as Meeting;
use ApiWeMeet\Entity\User as User;

class MeetingController implements IMeetingController{

    public function addMeeting(Meeting $meeting){

    }

    /**
     * @param Meeting $meeting
     */
    public function deleteMeeting(Meeting $meeting){

    }

    /**
     * @param Meeting $meeting
     */
    public function updateMeeting(Meeting $meeting){

    }

    /**
     * users views counter
     * @param Meeting $meeting
     * @param User $user
     */
    public function addMeetingUserView(Meeting $meeting, User $user){

    }

    /**
     * users views counter of detail page
     * @param Meeting $meeting
     * @param User $user
     */
    public function addMeetingUserDetailView(Meeting $meeting, User $user){

    }
    public function saveMeeting(Meeting $meeting){

    }
}