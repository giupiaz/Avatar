<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Avatar {

    public $default_avatar = 'default.jpg';
    
    public $avatar_directory = 'assets/globals/images/avatars/';
    
    public $avatar = $avatar_directory . $user_data->avatar;
    
    public function set_avatar($avatar)
    {
        $this->user_data->avatar = base_url() . $avatar_directory . $avatar;
    }
    
    public function avatar_exits()
    {
        if(file_exists(FCPATH . $avatar)){
            return TRUE;
        } else {
            return FALSE;
        }
    }
}

/* End of file avatar.php */