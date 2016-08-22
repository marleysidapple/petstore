Hi {{ $user->name }}, your request has been <?= (1 == (int)$user->is_approved) ? 'approved. You can login to our web application. <a href="'. url('/login') .'">Royal Dog Chew</a>.' : 'rejected.' ?>
