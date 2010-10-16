<?php
/**
 *
 * @name Forum Reply Model
 * @author Derek Stegelman
 * @package CI Defect Tracker
 * @subpackage Forums Module
 *
 * Last Updated October 16 2010
 *
 *
 */
class Reply_mdl extends CI_Model {


    //Vars

    public $replyID;
    public $replyUserID;
    public $replySubject;
    public $replyContent;

    /*
     * Table Var
     *
     */

    private $replyTable;


    //Constructor..

    function Reply_mdl(){
        parent::CI_Model();
        $this->replyTable = $this->config->item('forumReplyTable');
    }

    /*
     *
     * CRUD
     */

    


}
?>
