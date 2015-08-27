<?php

class Checkout
{
    private $id;
    private $due_date;
    private $copy_id;
    private $patron_id;
    private $checked_out;

    function __construct($id=null, $due_date, $copy_id, $patron_id, $checked_out=0)
    {
        $this->id = $id;
        $this->due_date = $due_date;
        $this->copy_id = $copy_id;
        $this->patron_id = $patron_id;
        $this->checked_out = $checked_out;
    }

    function getId()
    {
        return $this->id;
    }

    function getDueDate()
    {
        return $this->due_date;
    }

    function setDueDate($new_due_date)
    {
        $this->due_date = $new_due_date;
    }

    function getCopyId()
    {
        return $this->copy_id;
    }

    function setCopyId($new_copy_id)
    {
        $this->copy_id = $new_copy_id;
    }

    function getPatronId()
    {
        return $this->patron_id;
    }

    function setPatronId($new_patron_id)
    {
        $this->patron_id = $new_patron_id;
    }

    function getCheckedOut()
    {
        return $this->checked_out;
    }

    function setCheckedOut($new_checked_out)
    {
        $this->checked_out = $new_checked_out;
    }


}

?>
