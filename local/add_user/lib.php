<?php
function local_add_user_extend_navigation(global_navigation $nav)
{

    global $CFG, $PAGE,$DB,$USER;
   
    // $role = $DB->get_record("role_assignments",array("userid"=>$USER->id));
    $icon = new pix_icon('user_icon', '', 'local_add_user', array('class' => 'icon pluginicon'));
    if(is_siteadmin())
    {
        $nav->add(
            'Add New User',
            new moodle_url($CFG->wwwroot . '/local/add_user/index.php'),
            navigation_node::TYPE_SYSTEM,
            null,
            'local_add_user',
            $icon,
        )->showinflatnavigation = true;
    }

}