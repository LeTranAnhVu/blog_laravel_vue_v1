<template>
  <section>
    <!--title-->
    <section>
      <div class="custom-editor__title">
        <label for="edit-title">Title:</label>
        <textarea
          id="edit-title"
          type="text"
          :value="title"
          @input="$emit('update:title', $event.target.value)"
        ></textarea>
      </div>
    </section>
    <!--main banner-->
    <section>
      <div class="custom-editor__banner">
        <label for="edit-banner">Banner:</label>
        <input id="edit-banner"
               type="file"
               accept="image/*"
               @input="createImgUrl">
      </div>
    </section>
    <!--content-->
    <section>
      <div class="custom-editor__content">
        <label for="blog-editor-01">Content:</label>
        <jodit-vue
          id="blog-editor-01"
          v-model="innerContent"
          :config="joditConfig"
          :extra-buttons="extraButtons"
        />
      </div>
    </section>
  </section>
</template>

<script>
  import 'jodit/build/jodit.min.css';
  import JoditVue from 'jodit-vue';

  // utils
  import { extraButtons } from '../../utils/jodit';

  export default {
    name: 'Edit',
    props: ['title', 'content', 'banner'],
    methods: {
      createImgUrl(e) {
        if (e.target.files[0]) {
          const bannerUrl = URL.createObjectURL(e.target.files[0]);
          this.$emit('update:banner', bannerUrl);
        }
      },
    },
    data() {
      return {
        innerContent: '',
        extraButtons,
        joditConfig: {
          enter: 'DIV',
          lang: 'en',
        },
      };
    },
    mounted() {
      this.innerContent = this.content;
    },
    watch: {
      innerContent(val) {
        // using .sync modifiers
        this.$emit('update:content', val);
      },
    },
    components: {
      JoditVue,
    },
  };
</script>

<style lang="scss" scoped>
  section{
    margin-bottom: 10px;
  }
  label {
    font-weight: 500;
    font-size: 1.2em;
  }

  input[type='file'] {
    display: block;
  }

  .custom-editor__title {
    textarea {
      width: 100%;
      border-radius: 5px;
      padding: 10px;
      font-weight: 500;
    }
  }

  .custom-editor__content {
    /*& /deep/ .jodit_wysiwyg {*/
      /*min-height: 415px !important;*/
      /*max-height: 600px !important;*/
    /*}*/
  }

  .custom-editor__banner {

  }
</style>
