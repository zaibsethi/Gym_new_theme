import {createWebHistory, createRouter} from 'vue-router'
import GarhiShahuComponent from "./pages/GarhiShahuComponent.vue";
import ValenciaComponent from "./pages/ValenciaComponent.vue";
import PakistanMintComponent from "./pages/PakistanMintComponent.vue";


export default createRouter({
    history: createWebHistory(),
    routes: [{

        path: "/",
        name: 'garhiShahu',
        component: GarhiShahuComponent
    },
        {
            path: "/valencia",
            name: 'valencia',
            component: ValenciaComponent
        },
        {
            path: "/pak-mint",
            name: 'pakMint',
            component: PakistanMintComponent
        }
    ]
});

