const Videos = () => import('./components/DemoVideos.vue' /* webpackChunkName: "resource/js/components/demo-videos" */)


export const routes = [
    {
        name: 'home',
        path: '/',
        component: Videos
    },
]