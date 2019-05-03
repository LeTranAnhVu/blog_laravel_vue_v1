<template>
  <section class="container">
    <article class="row">
      <!--edit-->
      <div class="col-lg-6">
        <h4>Edit</h4>
        <edit
          :title.sync="rawTitle"
          :content.sync="rawContent"
          :banner.sync="rawBanner"
        />
      </div>
      <!--review-->
      <div class="col-lg-6">
        <h4>Review</h4>
        <review
          :result="resultBlog"
        />
      </div>
    </article>
    <div class="handlers">
      <button class="btn btn-outline-primary" @click="review">Review</button>
      <button class="btn btn-outline-secondary"
              @click="wannaPost">Post
      </button>
    </div>

    <!-- Modal -->
    <modal
      :title="':))))'"
      :body="'Would you like to do that bro?'"
      :trigger="isShowModal"
      @yes="post"
    />


  </section>

</template>

<script>
  import Edit from '../../components/blog/Edit.vue';
  import Review from '../../components/blog/Review.vue';
  import Modal from '../../components/shared/modal.vue';

  export default {
    name: 'Create',
    components: {
      Edit,
      Review,
      Modal,
    },
    data() {
      return {
        postUrl : 'http://blog.com/api/posts/store',
        resultBlog: null,
        rawContent: `heading 1 <br>
                     heading 2 <br>
                     heading 3 <br>
                     heading 4 <br>`,
        rawTitle: 'Title',
        rawBanner: null,
        isShowModal: false,
      };
    },
    mounted() {
      this.review();
    },
    methods: {
      review() {
        this.resultBlog = {
          title: this.rawTitle,
          content: this.rawContent || '',
          banner: this.rawBanner,
          authorName: 'unknown',
          created_at: 'a week ago',
        };
      },
      wannaPost() {
        // upload the data to server
        console.log('hshs');
        this.isShowModal = true;
      },
      post(){
        // this.$http.post(this.postUrl, {
        //   title: this.resultBlog.title,
        //   content: this.resultBlog.content
        // }).then(res=>{
        //   console.log(res);
        //   this.redirectTo();
        // }).catch(err=>{
        //   console.log(err);
        // })
        this.$http({
          method: 'post',
          url: this.postUrl,
          header: {
            'Content-Type' : 'application/json',
            'Accept' : 'application/json'
          },
          data: {
            title: this.resultBlog.title,
            content: this.resultBlog.content
          }
        });
      },
      redirectTo() {
        console.log('redirect');
        this.$router.push({
          name: 'blog',
          params: { id: 'fkajhsdkfha;dhs;fah' },
        });
      },
    },
  };
</script>

<style lang="scss" scoped>
  .handlers {
    margin-top: 10px;

    & > * {
      margin-right: 10px;
    }
  }

</style>
