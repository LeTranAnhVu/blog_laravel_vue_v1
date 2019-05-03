<template>
  <section>
    <h1>Project List</h1>
    <p>{{projects}}</p>

  </section>

</template>

<script>
  import axios from 'axios';

  export default {
    name: 'Project',
    props: {},
    data() {
      return {
        projects: [],
      };
    },
    mounted() {
      this.getProject()
        .then((res) => {
          console.log('--------------');
          console.log('data: ', res);
        });
    },
    methods: {
      getProject() {
        this.projects = 'hahahaa';
        return new Promise((resolve, reject) => {
          axios.get('http://localhost/laravel-blogs-learing/public/projects')
            .then(response => resolve(response.data))
            .catch(err => reject(err));
        });
      },
    },
  };
</script>

<style lang="scss" scoped>
</style>
