import createApp from './createApp'
import { renderNavigareApp } from '@navigare/vue3'

const renderApp = async (page) => {
    const app = await createApp(page)

    return await renderNavigareApp(app)
}

export default renderApp
