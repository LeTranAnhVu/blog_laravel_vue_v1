<template>
  <section>
    <layout>
      <template v-slot:aside>
        <blog-aside></blog-aside>
      </template>
      <template v-slot:main>
        <blog-content :blog="blog"></blog-content>
      </template>
    </layout>
  </section>
</template>

<script>
  import Layout from '../../components/blog/Layout.vue';
  import BlogContent from '../../components/blog/BlogContent.vue';
  import BlogAside from '../../components/blog/BlogAside.vue';

  export default {
    name: 'Blog',
    props: ['blog'],
    components: {
      layout: Layout,
      BlogContent,
      BlogAside,
    },
  };
</script>

<style scoped>

</style>
