<template>
  <div>
    <div class="modal fade" id="create-blog-modal-01" tabindex="-1" role="dialog"
         aria-labelledby="create-blog-modal-01-label"
         aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="create-blog-modal-01-label">{{title}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            </button>
          </div>
          <div class="modal-body">{{body}}</div>
          <div class="modal-footer">
            <button type="button"
                    class="btn btn-secondary"
                    data-dismiss="modal"
                    @click="$emit('no')">No</button>
            <button type="button" class="btn btn-primary"
                    data-dismiss="modal"
                    @click="$emit('yes')">Yes
            </button>
          </div>
        </div>
      </div>
    </div>
    <!--dummy button-->
    <button data-toggle="modal"
            data-target="#create-blog-modal-01"
            style="display: none"
            ref="triggerButton"
    ></button>

  </div>
</template>

<script>
  export default {
    name: 'modal',
    props: ['title', 'body'],
    methods: {
      trigger(){
        this.$refs.triggerButton.click();
      }
    },
  };
</script>

<style scoped>

</style>
