import VueRouter from 'vue-router'

let routes = [
    {
        path: '/',
        component: require('./views/Surveys.vue'),
    },
    {
        path: '/survey/:id',
        component: require('./views/Question.vue'),
    },

    {
        path: '/survey/:id/finish',
        component: require('./views/Finish.vue'),
    },
    
    {
        path: '/survey/:id/results/:url',
        component: require('./views/PersonResults.vue'),
    },
];

export default new VueRouter({
        routes,
        linkActiveClass: 'active',
    },
);
