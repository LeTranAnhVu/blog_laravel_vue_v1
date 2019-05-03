<template>
  <section>
    <h2>Refs</h2>
    <nav id="navbar-example3" class="navbar navbar-light">
      <nav class="nav nav-pills flex-column">
        <div v-for="(item, index) in Agenda.children" :key="index">
          <a class="nav-link" href="#item-1"><strong>{{item.name}}</strong></a>
          <nav v-if="item.children" class="nav nav-pills flex-column">
            <a v-for="(child, cIndex) in item.children" :key="cIndex" class="nav-link ml-2 my-1" href="#item-1-1">{{child.name}}</a>
          </nav>
        </div>
      </nav>
    </nav>
  </section>
</template>

<script>
  export default {
    name: 'BlogAside',
    data() {
      return {
        Agenda: {
          name: null,
          children: [
            {
              name: 'loi mo dau',
              htmlRefs: '#abc',
              children: [
                {
                  name: 'ahiihihiii',
                  htmlRefs: '#def',
                },
                {
                  name: 'ahuhuuuuuu',
                  htmlRefs: '#xyz',
                },
              ],
            },
            {
              name: 'chu de 1',
              children: [
                {
                  name: 'phan nho trong chu de 1 - 1',
                  htmlRefs: '#glas',
                },
                {
                  name: 'phan nho trong chu de 1 - 2',
                  htmlRefs: '#ewrw',
                },
              ],
            },
          ],
        },
      };
    },
  };
</script>

<style scoped>
  .nav-link {
    color: #555
  }

</style>
