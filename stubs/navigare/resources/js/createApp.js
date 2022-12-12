import { createNavigareApp } from '@navigare/vue3'
import { createApp as createVueApp, h } from 'vue'

export default createNavigareApp({
    setup({ Root, props }) {
        // Create Vue app with Navigare component as root component
        const app = createVueApp({
            render: () => {
                return h(Root, props)
            },
        })

        // Register any other Vue plugins, e.g.:
        // app.use(i18n)
        // app.directive('emojis')

        return app
    },
})
