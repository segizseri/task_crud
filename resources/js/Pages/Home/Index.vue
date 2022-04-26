<template>
    <Head>
        <title>{{ title }}</title>
    </Head>
<div>
    <h1>{{ title }}</h1>
</div>
</template>

<script>
import Layout from "../../Shared/Layout";
import {Head} from "@inertiajs/inertia-vue3";
export default {
    name: "Index",
    layout: Layout,
    components:{
        Head,
    },
    props: {
        title:String,
    }
}
</script>

<style scoped>

</style>
