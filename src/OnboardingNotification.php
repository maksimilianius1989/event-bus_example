<?php

namespace App;

class OnboardingNotification implements Observer
{
    private $adminEmail;

    public function __construct($adminEmail)
    {
        $this->adminEmail = $adminEmail;
    }

    public function update(Subject $repository, $event, $data)
    {
        echo "OnboardingNotification: The notification has been emailed!\n";
    }
}
