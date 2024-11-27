<?php

namespace Dotgix\ChatSupport;

use Livewire\Livewire;
use Illuminate\Support\ServiceProvider;

class ChatSupportServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/chatsupport.php',
            'chatsupport'
        );
    }
    
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->publishes([
            __DIR__ . '/../config/chatsupport.php' => config_path('chatsupport.php'),
        ], 'config');
       $this->publishes([
    __DIR__ . '/../public' => public_path('vendor/chatsupport'),
], 'chatsupport-assets');

        Livewire::component('admin.admin-index', \Dotgix\ChatSupport\Livewire\Admin\Index::class);
        Livewire::component('admin.admin-chat', \Dotgix\ChatSupport\Livewire\Admin\Chat::class);
        Livewire::component('admin.chat-list', \Dotgix\ChatSupport\Livewire\Admin\Index::class);
        Livewire::component('admin.chat-box', \Dotgix\ChatSupport\Livewire\Admin\Chat::class);
        Livewire::component('consultant.consultant-index', \Dotgix\ChatSupport\Livewire\Consultant\Index::class);
        Livewire::component('consultant.consultant-chat', \Dotgix\ChatSupport\Livewire\Consultant\Chat::class);
        Livewire::component('consultant.consultant.chat-list', \Dotgix\ChatSupport\Livewire\Consultant\ChatList::class);
        Livewire::component('consultant.chat-box', \Dotgix\ChatSupport\Livewire\Consultant\ChatBox::class);
        Livewire::component('visitor-index', \Dotgix\ChatSupport\Livewire\Visitor\Index::class);
        Livewire::component('visitor-chat', \Dotgix\ChatSupport\Livewire\Visitor\Chat::class);
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'chatsupport');
    }
}
