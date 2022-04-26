<template>
    <div class="container mx-auto ">
        <ul class="flex mt-3">
            <li class="mr-3">
                <Link
                    class="inline-block border border-blue-500 rounded py-1 px-3 bg-blue-500 text-white"
                    :href="route('home')">Главная</Link>
            </li>
            <li class="mr-3">
                <Link
                    class="inline-block border border-white rounded hover:border-gray-200 text-blue-500 hover:bg-gray-200 py-1 px-3"
                    :href="route('users.index')">Пользователь</Link>
            </li>
        </ul>
        <slot/>
    </div>

</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
export default {
    name: "Layout",
    components: {
        Link,
    }
}
</script>

<style scoped>

</style>
