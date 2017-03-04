<?php

namespace Modules\Users\Filters\Table;

use Modules\Users\Filters\QueryFilter;

/**
 * Class UsersFilters
 *
 * @package \App\Filters\Table
 */
class UsersFilters extends QueryFilter
{

    protected $column = ['id', 'full_name','cnic','email','picture', 'contact_number', 'user_role'];


}