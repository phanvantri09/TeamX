<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\BlogRepository;
use App\Repositories\BlogRepositoryInterface;

use App\Repositories\TransactionRepository;
use App\Repositories\TransactionRepositoryInterface;
use App\Repositories\ServiceRepositoryInterface;
use App\Repositories\ServiceRepository;

use App\Repositories\UserRepository;
use App\Repositories\UserRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BlogRepositoryInterface::class, BlogRepository::class);

        $this->app->bind(TransactionRepositoryInterface::class, TransactionRepository::class);
        $this->app->bind(ServiceRepositoryInterface::class, ServiceRepository::class);

        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);

    }
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
