<?php

/*require 'messaging/person.php';
require 'messaging/Business.php';
require 'messaging/staff.php'; */

use Acme\Users\Person;
use Acme\Business;
use Acme\Staff;

$Jeffery = new Person('Jeffery Way');
$staff = new Staff([$Jeffery]);
$laracasts = new Business($staff);
$laracasts->hire(new Person('Jane Doe'));
var_dump($laracasts->getStaffMembers());
