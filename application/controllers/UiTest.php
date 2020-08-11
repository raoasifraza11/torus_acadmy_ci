<?php
class UiTest extends TTT_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

public function uuid(){
//    	$data["ad"]=1;
	$user_id=$this->Crud_model->insert('users',null);

}
    public function childminder_dashboard()
    {
        $this->slice->view('user.dashboard');
    }


    public function view_users()
    {
        $this->slice->view('user.crud_users');
    }


    public function crud_profile()
    {
        $this->slice->view('user.crud_profile');
    }

    public function add_user()
    {
        $this->slice->view('user.add_keyworker');
    }



    public function notification_settings()
    {
        $this->slice->view('admin.setting.notification_settings');
    }

    public function logos()
    {
        $this->slice->view('admin.setting.logos');
    }

    public function database_setting()
    {
        $this->slice->view('admin.setting.database');
    }


    public function add_student()
    {
        $this->slice->view('user.add_student');
    }


    public function view_apis()
    {
        $this->slice->view('admin.setting.apis');
    }


    public function view_keyworker()
    {
        $this->slice->view('user.crud_keyworker');
    }


    public function add_room()
    {
        $this->slice->view('user.add_room');
    }

    public function add_staff()
    {
        $this->slice->view('user.assign_staff');
    }



    public function calendar()
    {
        $this->slice->view('user.view_calendar');
    }


    public function attendance()
    {
        $this->slice->view('user.attendence');
    }

    public function attendanceSession()
    {
        $this->slice->view('user.attendenceSession');
    }

    public function mark_attendance()
    {
        $this->slice->view('user.mark_attendance');
    }

    public function view_attendance()
    {
        $this->slice->view('user.view_attendance');
    }


    public function add_role()
    {
        $this->slice->view('user.add_role');
    }



    public function view_roles()
    {
        $this->slice->view('user.view_roles');
    }

    public function add_session()
    {
        $this->slice->view('user.add_session');
    }

    public function view_session()
    {
        $this->slice->view('user.view_session');
    }

    public function view_rooms()
    {
        $this->slice->view('user.view_rooms');
    }

    public function room_dashboard()
    {
        $this->slice->view('user.room_dashboard');
    }

    public function view_students()
    {
        $this->slice->view('user.view_students');
    }


    public function view_attendance_chart()
    {
        $this->slice->view('user.view_attendance_stats');
    }

    public function create_milestone()
    {
        $this->slice->view('user.create_milestone');
    }

    //functions by Yasir --------------------------------------------------------------------------------

    public function viewLetters()
    {
        $this->slice->view('user.viewLetters');
    }

    public function add_letter()
    {
        $this->slice->view('user.add_letter');
    }

    public function view_observations()
    {
        $this->slice->view('user.viewObservations');
    }
    
    public function add_observations()
    {
        $this->slice->view('user.addObservations');
    }

    public function view_development()
    {
        $this->slice->view('user.viewDevelopment');
    }

    public function add_development()
    {
        $this->slice->view('user.addDevelopment');
    }
    
    public function view_progress()
    {
        $this->slice->view('user.viewProgress');
    }

    public function child_profile()
    {
        $this->slice->view('user.child_profile');
    }

    public function staff_room_status()
    {
        $this->slice->view('user.staffRoomStatus');
    }


    //----------------- Children Diaries-----------------------------------------

    public function C_Diaries()
    {
        $this->slice->view('cDiaries.diaries');
    }
    
    public function C_test()
    {
        $this->slice->view('cDiaries.test');
    }

    public function view_Meal()
    {
        $this->slice->view('cDiaries.viewMeal');
    }

    public function view_Fedding()
    {
        $this->slice->view('cDiaries.viewFeed');
    }

    public function view_Sleep()
    {
        $this->slice->view('cDiaries.viewSleep');
    }

    public function view_Change()
    {
        $this->slice->view('cDiaries.viewChange');
    }

    public function view_safeguard()
    {
        $this->slice->view('cDiaries.viewSafeguard');
    }

    public function view_Medic()
    {
        $this->slice->view('cDiaries.viewMedic');
    }

    public function view_Incident()
    {
        $this->slice->view('cDiaries.viewIncident');
    }

    public function incident_report()
    {
        $this->slice->view('cDiaries.IncidentReport');
    }

    public function health_report()
    {
        $this->slice->view('cDiaries.healthReport');
    }

    public function view_Photo()
    {
        $this->slice->view('cDiaries.viewPhoto');
    }

    public function view_Video()
    {
        $this->slice->view('cDiaries.viewVideo');
    }

    public function view_Emoji()
    {
        $this->slice->view('cDiaries.viewEmoji');
    }

    public function view_Learning()
    {
        $this->slice->view('cDiaries.viewLearning');
    }

    public function view_Note()
    {
        $this->slice->view('cDiaries.viewNote');
    }

      //----------------- Observation Section-----------------------------------------

      public function observation()
      {
          $this->slice->view('ObvSection.observation');
      }

      public function add_observation()
      {
          $this->slice->view('ObvSection.addObservation');
      }

      public function view_observation()
      {
          $this->slice->view('ObvSection.viewObservation');
      }

      public function rate_observation()
      {
          $this->slice->view('ObvSection.rateObservations');
      }

      public function new_enrolled()
      {
          $this->slice->view('user.newEnrolled');
      }
      
      public function group_observation()
      {
          $this->slice->view('ObvSection.group_observation');
      }

      public function observation_graphs()
      {
          $this->slice->view('ObvSection.graphs');
      }

      public function view_invoice()
      {
          $this->slice->view('user.view_invoice');
      }

      public function view_bills()
      {
          $this->slice->view('user.view_bills');
      }

      public function choose_role()
      {
          $this->slice->view('roles.chooseRole');
      }

      public function owner()
      {
          $this->slice->view('roles.owner');
      }

      public function parent()
      {
          $this->slice->view('roles.parent');
      }

      

///-------------------------------------------Parent Dashbaord ----------------------------

      

      public function child_Info()
      {
          $this->slice->view('parentDashboard.childInfo');
      }

      public function pay_dues()
      {
          $this->slice->view('parentDashboard.payDues');
      }


      public function parent_dashboard()
      {
          $this->slice->view('parentDashboard.P_dashboard');
      }

      public function parent_letter()
      {
          $this->slice->view('parentDashboard.viewparentLetter');
      }

      public function parent_profile()
      {
          $this->slice->view('parentDashboard.parentProfile');
      }

      public function notifications()
      {
          $this->slice->view('parentDashboard.notification');
      }

      public function parent_invoice()
      {
          $this->slice->view('parentDashboard.parentInvoice');
      }

      public function parent_bill()
      {
          $this->slice->view('parentDashboard.parentBill');
      }

///-------------------------------------------Staff Management ----------------------------

      public function clock_time()
      {
          $this->slice->view('staffMgmt.clockTime');
      }

      public function staff_profile()
      {
          $this->slice->view('staffMgmt.staffProfile');
      }

      public function staff_task()
      {
          $this->slice->view('staffMgmt.staffTask');
      }

      public function staff_holiday()
      {
          $this->slice->view('staffMgmt.staffHoliday');
      }

       //------------------- Early Year Library-----------------------------------------------

      public function earlyYearLibrary()
      {
          $this->slice->view('earlyYearLibrary.earlyYearLibrary');
      }

      public function library_Info()
      {
          $this->slice->view('earlyYearLibrary.libraryInfo');
      }
      
      public function view_Library()
      {
          $this->slice->view('earlyYearLibrary.viewLibrary');
      }

///-------------------------------------------Student Dashboard ----------------------------

        public function student_dashboard()
        {
            $this->slice->view('studentDashboard.studentProfile');
        }

        public function learning_Story()
        {
            $this->slice->view('studentDashboard.learningStory');
        }



///-------------------------------------------Stock Management ----------------------------

        public function stock_Details()
        {
            $this->slice->view('stockMgmt.stockDetails');
        }


}

