<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/app.css">

      
    </head>
    <body>
        <div id="app">
            <div class="container">

                <header class="my-5">
                    <h1>Laracasts</h1>
                </header>


                <div class="row">

                     <!-- Sidebar  -->
                    <div class="col-md-2">

                        <h5>The Brand</h5>
                        <ul>
                            <li class="btn">
                                <router-link to="/" exact>Home</router-link>
                            </li>
                            <li class="btn">
                                <router-link :to="{ name: 'logo' }">Logo</router-link>
                            </li>
                            <li class="btn">
                                <router-link :to="{ name: 'symbols' }">Symbol</router-link>
                            </li>
                            <li class="btn">
                                <router-link :to="{ name: 'colors' }">Colors</router-link>
                            </li>
                            <li class="btn">
                                <router-link :to="{ name: 'typography' }">Typography</router-link>
                            </li>
                            <li class="btn">
                                <router-link to="/user/2">User</router-link>
                            </li>
                        </ul>


                        <h5>Doodles</h5>
                        <ul>
                            <li class="btn">
                                <router-link :to="{ name: 'mascot' }">Mascot</router-link>
                            </li>
                            <li class="btn">
                                <router-link :to="{ name: 'illustrations' }">Illustrations</router-link>
                            </li>
                            <li class="btn">
                                <router-link :to="{ name: 'animations' }">Animations</router-link>
                            </li>
                            <li class="btn">
                                <router-link :to="{ name: 'wallpapers' }">Wallpapers</router-link>
                            </li>
                        </ul>

                    </div>

                    <!-- Main Content  -->
                    <div class="col-md-10">
                        <router-view></router-view>
                    </div>
                </div>

                
                
            </div> <!-- Container Ends  -->



            
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
