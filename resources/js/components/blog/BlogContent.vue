<template>
  <section v-if="blog && Object.keys(blog).length > 0">
    <!--title-->
    <article class="blog-content__title">
      <h1 class="blog-content__title__content" v-html="blog.title"></h1>
      <blog-meta
        class="mt-1"
        :author="blog.authorName"
        :created_at="blog.created_at"
      ></blog-meta>
    </article>

    <!--banner-->
    <article class="blog-content__banner">
      <img v-if="blog && blog.banner" :src="blog.banner"  alt="banner-blog">
      <img v-else src="https://dummyimage.com/800x400/352891/fff.jpg&text=Missing+banner"  alt="banner-blog">
    </article>

    <!--body-->
    <article class="blog-content__body" v-html="blog.content"></article>
  </section>
</template>

<script>
  import BlogMeta from './BlogMeta.vue';

  export default {
    name: 'BlogContent',
    components: {
      BlogMeta,
    },
    props: ['blog'],
    data() {
      return {};
    },
  };
</script>

<style lang="scss" scoped>
  @import "../../../sass/helpers";

  .blog-content__banner{
    width: 100%;
    img{
      width: 100%;
    }
  }
  .blog-content__title {
    padding: 50px;

    &__content {
      margin-bottom: 0;
      text-align: left;
      font-size: 2em;
      color: #555;
    }

    @include breakpoint-up($md) {
      &__content {
        font-size: 4em;
      }
    }
  }
</style>
