import Home from './components/Home';
import About from './components/About';
import User from './components/User';

import Logo from './components/Logo';
import Symbols from './components/Symbols';
import Colors from './components/Colors';
import Typography from './components/Typography';
import Mascot from './components/Mascot';
import Illustrations from './components/Illustrations';
import Wallpapers from './components/Wallpapers';
import NotFound from './components/NotFound';

//import Animations from './components/Animations';
let Animations = () => import(/* webpackChunkName: "spinners" */ './components/Animations');


export default {


    mode: 'history',

    //linkActiveClass: 'font-weight-bold',
    //linkExactActiveClass: 'font-weight-bold', // no need exact attribute on html with this

    routes: [

        {
            path:'*',
            component: NotFound
        },
        {
            path:'/',
            component: Home
        },
        {
            path:'/about',
            component: About,
            name: 'about'
        },
        {
            path:'/user/:id',
            component: User,
            name: 'user'
        },

        {
            path:'/logo',
            component: Logo,
            name: 'logo'
        },

        {
            path:'/symbols',
            component: Symbols,
            name: 'symbols'
        },

        {
            path:'/colors',
            component: Colors,
            name: 'colors'
        },

        {
            path:'/typography',
            component: Typography,
            name: 'typography'
        },

        {
            path:'/mascot',
            component: Mascot,
            name: 'mascot'
        },

        {
            path:'/illustrations',
            component: Illustrations,
            name: 'illustrations'
        },

        {
            path:'/animations',
            component: Animations,
            name: 'animations'
        },

        {
            path:'/wallpapers',
            component: Wallpapers,
            name: 'wallpapers'
        },

        {
            path:'/backoffice',
            component: Mascot,
            name: 'backoffice'
        },
    ]


}