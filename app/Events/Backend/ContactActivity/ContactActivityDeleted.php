<?php namespace App\Events\Backend\ContactActivity;

use Illuminate\Queue\SerializesModels;
/**
 * Class ContactActivityDeleted.
 */

class ContactActivityDeleted
{
    use SerializesModels;
    /**
     * @var
     */

    public $contact_activity;

    /**
     * @param $contact_activity
     */
    public function __construct($contact_activity)
    {
        $this->contact_activity = $contact_activity;
    }
}
