<template>
    <section>
        <!--header-->
        <Header
                :current-route="currentRoute"
                :last-route="lastRoute"
        ></Header>

        <!--main-->
        <router-view class="mt-5"></router-view>
        <div class="dummy-div"></div>

        <!--footer-->
        <Footer></Footer>
    </section>
</template>

<script>
    import Header from './components/shared/Header.vue';
    import Footer from './components/shared/Footer.vue';

    export default {
        name: 'App',
        components: {
            Footer,
            Header,
        },
        data() {
            return {
                currentRoute: null,
                lastRoute: null,
            };
        },
        methods: {
            updateRoute(to, from) {
                this.currentRoute = to;
                this.lastRoute = from;
            },
            updateMetaDoc(to) {
                document.title = (to.meta && to.meta.title) || 'new page';
            },
        },
        watch: {
            $route(to, from) {
                this.updateRoute(to, from);
                // add meta data
                this.updateMetaDoc(to);
            },
        },

    };
</script>

<style lang="scss">
    #app {
        min-height: 100%;
        font-family: 'Avenir', Helvetica, Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        display: flex;
        flex-direction: column;
    }

    .dummy-div {
        flex-grow: 1;
    }

    .main {
        background: red;
    }
</style>
