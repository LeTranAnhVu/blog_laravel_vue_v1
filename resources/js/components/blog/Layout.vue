<template>
  <section class="container-fluid">
    <div class="row">
      <aside class="col-md-3 aside">
        <div class="aside__inner">
          <slot name="aside"></slot>
        </div>
      </aside>
      <main class="col-md-6">
        <slot name="main"></slot>
      </main>
    </div>
  </section>

</template>

<script>
  export default {
    name: 'Layout',
  };
</script>
<style lang="scss" scoped>
  main {
    border-left: 1px #ddd solid;
  }

  .aside {
    padding-top: 77px;
    &__inner {
      width: 80%;
    }

  }

</style>
