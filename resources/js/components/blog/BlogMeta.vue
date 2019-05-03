<template>
  <div>
    <p>
      <span class="by">by</span>
      <span class="author">{{author}}</span>
      <span>-</span>
      <span class="date">{{created_at}}</span>
    </p>
  </div>
</template>

<script>
export default {
  name: 'BlogMeta',
  props: ['author', 'created_at'],
  data() {
    return {};
  },
};
</script>
<style scoped>
  p {
    margin: 0;
  }

  span {
    margin-right: 5px;
  }

  .by,
  .date {
    color: #555;
  }

  .date {
    font-style: italic;
    text-decoration: underline;
  }

  .author {
    display: inline-flex;
    color: #333;
    font-weight: 500;
    font-size: 1.2em;
  }


</style>
