<?php
namespace App\View\Composers;
use Illuminate\View\View;

class ProfileComposer {
    public function compose(View $view)
    {
        
        $view->with('user_name', 'Admin');
    }
}