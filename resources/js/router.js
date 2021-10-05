let Home = require('./components/Home.vue').default;
let About = require('./components/About.vue').default;

export const routes = [
    { path: '/home', component: Home },
    { path: '/about', component: About }
]
