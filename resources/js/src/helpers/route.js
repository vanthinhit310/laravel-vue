import Vue from 'vue';
import Router from 'vue-router';
import App from "../components/App";
import LoginPage from "../components/auth/LoginComponent";
import RegisterPage from "../components/auth/RegisterComponent";

Vue.use(Router);

export const router = new Router({
    mode: 'history',
    routes: [
        { path: '/', component: App },
        { path: '/login', component: LoginPage },
        { path: '/register', component: RegisterPage },

        // nếu không sẽ chuyển đến trang home
        { path: '*', redirect: '/' }
    ]
});

router.beforeEach((to, from, next) => {
    // chuyển đến trang login nếu chưa được login
    const publicPages = ['/login', '/register'];
    const authRequired = !publicPages.includes(to.path);
    const loggedIn = localStorage.getItem('user');

    if (authRequired && !loggedIn) {
        return next('/login');
    }

    next();
});
